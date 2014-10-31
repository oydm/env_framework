<?php
namespace libs;
/**
 * 文件上传类
 * 限制尺寸，压缩，生成缩略图，限制格式
 * @author sky
 */
class Upload
{
    public $mimes;
    public $max_size=0;
    public $allow = array('jpg', 'gif', 'png'); //允许上传的类型
    public $name_type = ''; //md5,

    /**
     * 上传文件的根目录
     */
    public $base_dir;

    /**
     * 替换后的域名
     */
    public $base_url = '';

    //指定子目录
    public $sub_dir;
    //子目录生成方法，可以使用randomkey，或者date
    public $shard_type = 'date';
    //子目录生成参数
    public $shard_argv;
    //文件命名法
    public $filename_type = 'randomkey';
    //检查是否存在同名的文件
    public $exist_check = true;
    //允许覆盖文件
    public $overwrite = true;

    /**
     * 限制上传文件的尺寸，如果超过尺寸，则压缩
     * @var unknown_type
     */
    public $max_width = 0; //如果为0的话不压缩
    public $max_height;
    public $max_qulitity = 80;

    /**
     * 产生缩略图
     * @var unknown_type
     */
    public $thumb_prefix = 'thumb_';
    public $thumb_dir;
    public $thumb_width = 0; //如果为0的话不生成缩略图
    public $thumb_height;
    public $thumb_qulitity = 100;

    public $error_msg;
    /**
     * 错误代码
     * 0,不存在的上传 1,未知的mime格式 2,不允许上传的格式
     * 3,文件已存在  4,文件尺寸超过最大
     * @var int
     */
    public $error_code;

    public $referrer_url;
    public $http_timeout = 10;

    function __construct($base_dir)
    {
        $this->base_dir = $base_dir;
        $mimes = require LIBPATH . '/data/mimes.php';
        $this->mimes = $mimes;
    }

    function error_msg()
    {
        return $this->error_msg;
    }
    function save_all()
    {
        if(!empty($_FILES))
		{
			foreach($_FILES as $k=>$f)
			{
				if(!empty($_FILES[$k]['type'])) $_POST[$k] = $this->save($k);
			}
		}
    }

    static function moveUploadFile($tmpfile, $newfile)
    {
        if(!defined('SWOOLE_SERVER'))
        {
            return move_uploaded_file($tmpfile, $newfile);
        }
        else
        {
            return rename($tmpfile, $newfile);
        }
    }

    function save($name, $filename=null, $allow=null)
    {
        //检查请求中是否存在上传的文件
        if(empty($_FILES[$name]['type']))
        {
            $this->error_msg = "No upload file '$name'!";
    	    $this->error_code = 0;
    	    return false;
        }
        //最终相对目录
    	if(!empty($this->sub_dir)) $this->base_dir = $this->base_dir."/".$this->sub_dir;
    	//切分目录
    	if($this->shard_type=='randomkey')
    	{
    	    if(empty($this->shard_argv)) $this->shard_argv = 8;
    	    $up_dir = $this->base_dir."/".RandomKey::randmd5($this->shard_argv);
    	}
    	else
    	{
    	    if(empty($this->shard_argv)) $this->shard_argv = 'Ym/d';
    	    $up_dir = $this->base_dir."/".date($this->shard_argv);
    	}
    	//上传的最终绝对路径，如果不存在则创建目录
    	$path = WEBPATH.$up_dir;
    	if(!is_dir($path))
        {
            if(mkdir($path, 0777, true)===false)
            {
                $this->error_msg = "mkdir path=$path fail.";
                return false;
            }
        }

    	//MIME格式
    	$mime = $_FILES[$name]['type'];
    	$filetype = $this->mime_type($mime);
    	if($filetype==='bin') $filetype = self::file_ext($_FILES[$name]['name']);
    	if($filetype===false)
    	{
    	    $this->error_msg = "File mime '$mime' unknown!";
    	    $this->error_code = 1;
    	    return false;
    	}
    	elseif(!in_array($filetype, $this->allow))
    	{
            $this->error_msg = "File Type '$filetype' not allow upload!";
            $this->error_code = 2;
            return false;
    	}

    	//生成文件名
    	if ($filename===null)
    	{
    	    $filename= RandomKey::randtime();
	        //如果已存在此文件，不断随机直到产生一个不存在的文件名
	        while($this->exist_check and is_file($path.'/'.$filename.'.'.$filetype))
	        {
	            $filename = RandomKey::randtime();
	        }
    	}
    	elseif($this->overwrite===false and is_file($path.'/'.$filename.'.'.$filetype))
    	{
	        $this->error_msg = "File '$path/$filename.$filetype' existed!";
			$this->error_code = 3;
	        return false;
    	}
    	$filename .= '.'.$filetype;

    	//检查文件大小
    	$filesize = filesize($_FILES[$name]['tmp_name']);
    	if($this->max_size>0 and $filesize>$this->max_size)
    	{
    	    $this->error_msg = "File size go beyond the max_size!";
    		$this->error_code = 4;
    		return false;
    	}
    	$save_filename = $path."/".$filename;
    	//写入文件
    	if(self::moveUploadFile($_FILES[$name]['tmp_name'], $save_filename))
    	{
    	    //产生缩略图
    	    if($this->thumb_width and in_array($filetype,array('gif','jpg','jpeg','bmp','png')))
    	    {
    	        if(empty($this->thumb_dir)) $this->thumb_dir = $up_dir;
    	        $thumb_file = $this->thumb_dir.'/'.$this->thumb_prefix.$filename;
    	        Image::thumbnail($save_filename,WEBPATH.$thumb_file,$this->thumb_width,$this->thumb_height,$this->thumb_qulitity);
    	        $return['thumb'] = $thumb_file;
    	    }
    	    //压缩图片
    	    if($this->max_width and in_array($filetype,array('gif','jpg','jpeg','bmp','png')))
    	    {
    	        Image::thumbnail($save_filename,$save_filename,$this->max_width,$this->max_height,$this->max_qulitity);
    	    }
    		$return['name'] = "$up_dir/$filename";
    		$return['size'] = $filesize;
    		$return['type'] = $filetype;
    		return $return;
    	}
    	else
    	{
            $this->error_msg = "move upload file fail. tmp_name={$_FILES[$name]['tmp_name']}|dest_name={$save_filename}";
    		$this->error_code = 2;
    		return false;
    	}
    }
    /**
     * 获取MIME对应的扩展名
     * @param $mime
     * @return unknown_type
     */
    public function mime_type($mime)
    {
    	if(isset($this->mimes[$mime])) return $this->mimes[$mime];
    	else return false;
    }
    /**
     * 根据文件名获取扩展名
     * @param $file
     * @return unknown_type
     */
    static public function file_ext($file)
    {
    	return strtolower(trim(substr(strrchr($file, '.'), 1)));
    }

    function downloadFile($url, $file, $min_file_size = 0)
    {
        $url = trim(html_entity_decode($url));
        $curl = new Client\CURL;
        if (!empty($this->referrer_url))
        {
            $curl->setReferrer($this->referrer_url);
        }
        $fp = fopen($file, 'w');
        if (!$fp)
        {
            return false;
        }
        return $curl->download($url, $fp, null, $this->http_timeout);
    }

    /**
     * 自动将给定的内容$data中远程图片的url改为本地图片，并自动将远程图片保存到本地
     * 指定最小尺寸，过滤小图片
     * @param $content
     * @param $from_url
     * @param $min_file_size
     * @return int
     */
    function imageLocal(&$content, $from_url, $min_file_size = 0)
    {
        preg_match_all('~<img[^>]*(?<!_mce_)src\s?=\s?([\'"])((?:(?!\1).)*)[^>]*>~i', $content, $match);
        if (empty($match[2]))
        {
            return 0;
        }

        $image_n = 0;
        $replaced = array();
        $this->referrer_url = $from_url;

        foreach ($match[2] as $uri)
        {
            //已经替换过的
            if (isset($replaced[$uri]))
            {
                continue;
            }

            $_abs_uri = HTML::parseRelativePath($from_url, $uri);
            $info = parse_url($_abs_uri);
            $path = $info['host'].'/'.ltrim($info['path'], '/');
            $file =  $this->base_dir.'/'.$path;

            $update = true;
            if (!is_file($file))
            {
                $dir = dirname($file);
                if (!is_dir($dir))
                {
                    mkdir($dir, 0777, true);
                }
                $update = $this->downloadFile($_abs_uri, $file, $min_file_size);
            }
            if ($update)
            {
                $new_uri = $this->base_url .'/'. ltrim($path, '/');
                $content = str_replace($uri, $new_uri, $content);
                $replaced[$uri] = true;
                $image_n ++;
            }
        }
        return $image_n;
    }
}
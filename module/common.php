<?php
namespace module;
class common
{
	/**
	 * 登录操作
	 * @author sky
	 * @date 2014-09-16
	 * @param $param
	 */
	public function login($param){
		$this->check_login();
		if($param){
			 if($param["email"]&&$param["password"]){
			 	$email=trim($param["email"]);
			 	$password=md5(trim($param["password"]));
			 	$result = env()->db0->get_value("select id from admin_user where email='".$email."' and password='".$password."'");
			    if($result){
			    	if(isset($param["remember"])&&$param["remember"]==1){
			    		$tool=new \libs\Tool();
			    		$key=$tool->encrypt($result,"E");
			    		env()->cookie->set("user", $key);
			    		env()->cookie->expired("user", 24*60*60*7);
			    	}
			    	env()->session->set("userid", $result);
			 		header("Location: /home/main");
			 		exit;
			 	}
			 }
		}
	}
	
	/**
	 * 退出登录
	 * @author sky
	 * @date 2014-09-16
	 */
	
	public function loginout(){
		env()->session->delete("userid");
		env()->cookie->delete("user");
	 	header("Location: /common/login");
	 	exit;
	}
	
	/**
	 * 注册
	 * @author sky
	 * @date 2014-09-16
	 */
	public function regit($param){
		$this->check_login();
		if($param){
			if($param["email"]&&$param["password"]){
				$email=trim($param["email"]);
				$password=md5(trim($param["password"]));
				$result = env()->db0->get_value("insert into admin_user (`password`,`status`,`email`,`name`,`phone`,`qq`,`company`) values ('".$password."',0,'".$email."','".$param["name"]."','".$param["phone"]."','".$param["qq"]."','".$param["company"]."')");
				if($result){
					env()->session->set("userid", $result);
					header("Location: /user/info");
					exit;
				}
			}
		}
	}
	
	/**
	 * 忘记密码
	 * @author sky
	 * @date 2014-09-16
	 */
	public function forget($param){
		$this->check_login();
		if($param){
			if($param["email"]){
					$email=trim($param["email"]);
					$result = env()->db0->get_value("select id from admin_user where email='".$email."'");
					if($result){
						$send=new \module\mail();
						$result=$send->sendmail($result,$email,1);
						if($result){
							header("Location: /common/email?mail=".$param["email"]);
							exit;
						}else{
							$js=new \libs\JS();
							$js->js_goto("发送失败，请联系管理员","/common/forget");
						}
						
					}else{
						$js=new \libs\JS();
						$js->js_goto("该邮箱用户不存在，请重新填写","/common/forget");
					}
				}
		}
	}
	
	/**
	 * 邮件发送成功页面
	 * @param  $param
	 */
	public function email($param){
		return $param;
	}
	/**
	 * 邮件重发
	 *  @author sky
	 * @date 2014-09-18
	 */
	public function resendmail($param){
		$email=trim($param["mail"]);
		$result = env()->db0->get_value("select id from admin_user where email='".$email."'");
		$send=new \module\mail();
		$result2=$send->sendmail($result,$email,1);
		return array("status"=>$result2);
	}
	
	/**
	 * 找回密码
	 * @author sky
	 * @date 2014-09-18
	 */
	public function findpsw($param){
		$tool=new \libs\Tool();
		$userid=$tool->encrypt($param["key"],"D");
		$email = env()->db0->get_value("select email from admin_user where id=".$userid);
		return array("email"=>$email,"userid"=>$userid);
	}
	/**
	 * 修改密码
	 * @author sky
	 * @date 2014-09-18
	 */
	public function editpsw($param){
		$js=new \libs\JS();
		if($param["password"]==$param["password2"]){
			$result=env()->db0->get_value("UPDATE `admin_user` SET `password`='".md5($param["password"])."' WHERE `id`=".$param["userid"]);
			$js->js_goto("修改成功，请用新密码登录","/common/login");
			die;
			
		}else {
			$js->js_alert("两次输入不一致");
			die;
		}
	}
	
	/**
	 * 判断登录状态
	 */
	public function check_login(){
		$user=env()->cookie->get("user");
		$userid=env()->session->get("userid");
		if($user){
			$tool=new \libs\Tool();
			$userid=$tool->encrypt($user,"D");
			env()->session->set("userid", $userid);
			header("Location: /home/main");
			exit;
		}
		if($userid){
			header("Location: /home/main");
			exit;
		}
	}
	/**
	 *  地区联动
	 * @author sky
	 * @date 2014-09-19
	 * @param $type 获取类型 province 省份 city 城市 district 区县
	 * @param $provinceID 省份ID 
	 * @param $cityID 市ID
	 */	
	public function area($param){
		switch ($param["type"]){
			case "province";
				$info=$this->province();
				break;
			case "city";
				$info=$this->city($param);
				break;
			case "district";
				$info=$this->district($param);
				break;
		}
		return $info;
	}
	
	public function province(){
		$province=env()->db0->query("select * from sdk_area where parentid=0");
		foreach ($province as $key=>$val){
			$info[$key]["ProvinceID"]=$val["areaid"];
			$info[$key]["ProvinceName"]=$val["name"];
		}
		return $info;
	}

	public function city($param){
		$province=env()->db0->query("select * from sdk_area where parentid=".$param["provinceID"]);
		foreach ($province as $key=>$val){
			$info[$key]["CityID"]=$val["areaid"];
			$info[$key]["CityName"]=$val["name"];
		}
		return $info;
	}
	
	public function district($param){
		$province=env()->db0->query("select * from sdk_area where parentid=".$param["cityID"]);
		foreach ($province as $key=>$val){
			$info[$key]["DistrictID"]=$val["areaid"];
			$info[$key]["DistrictName"]=$val["name"];
		}
		return $info;
	}
	
	public function upload_file($params){
		$file = env()->files->get_name('Filedata');//icon.png;
		$extension=substr(strrchr($file, '.'), 1);
		env()->files->move('Filedata', WEB_ROOT.'/Upload/tmp.'.$extension);
		env()->form->add_file(WEB_ROOT."/Upload/tmp.".$extension, "name_uploaded_file");
		$data = env()->form->upload("/file_upload.php?v_cmd=1");
		if (preg_match('/file_upload_ok\("(.*)"\);/', $data, $match)) {
			return $match[1];
		} else {
			return false;
		}
	}
	
	
	
	
	
	
}

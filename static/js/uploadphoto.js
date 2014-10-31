function uploadphoto(button,input,imgsrc,hrefsrc){
       $("#"+button).uploadify({
                'uploader'	: '/static/uploadify/uploadify.swf',//所需要的flash文件
                'cancelImg'	: '/static/uploadify/cancel.gif',//单个取消上传的图片
                'script'	: '/common/upload_file.text',//实现上传的程序
                //'script'	: "{:U('Admin/Public/upload')}",//实现上传的程序
                'method'	: 'post',
                'folder'	: '/Upload',//服务端的上传目录
                'auto'	: true,//自动上传
                'multi'	: false,//是否多文件上传
                'fileDesc': 'Image(*.jpg;*.gif;*.png)',//对话框的文件类型描述
                'fileExt': '*.jpg;*.jpeg;*.gif;*.png',//可上传的文件类型
                'sizeLimit': 2100000,//限制上传文件的大小2m(比特b)
                'queueSizeLimit' :10, //可上传的文件个数
                'buttonImg'	: '/static/uploadify/add.png',//替换上传钮扣
                'width'	: 148,//buttonImg的大小
                'height'	: 38,
                onComplete: function (evt, queueID, fileObj, response, data) {
                    //alert(response);
                    getResult(response);//获得上传的文件路径
                }
            });
            var imgg = $("#"+input);
            var imgsrc = $("#"+imgsrc);
             var hrefsrc = $("#"+hrefsrc);
            function getResult(content){		
                imgg.val(content);
                imgsrc.attr("src", content);
                hrefsrc.attr("href", content);
      }
}


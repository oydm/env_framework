<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<title>SDK管理中心-发送成功</title>
		<meta name="keywords" content="configuration" />
		<meta name="description" content="configuration" />
		<link rel="stylesheet" type="text/css" href="/static/css/css.css"/>
		<link rel="stylesheet" href="/static/Validform/css/style.css" type="text/css" />
		<script src="/static/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="/static/Validform/Validform_v5.3.2_min.js"></script>
	{literal}<script type="text/javascript">
		var wait=60;
		function time() {
		        if (wait == 0) {
		           $("#re").removeClass("disable").addClass("reclick");
		           $(".wait2").text("点击");
		            wait = 60;
		        } else {
		           $("#re").addClass("disable");
		           $(".time").text(wait);
		            wait--;
		            setTimeout(function() {
		                time()
		            },
		            1000)
		        }
		    }
		    $(document).ready(function(){
				time();
				$('#re').click(function(){
				  if($('#re').hasClass("reclick")){
					 $.ajax({
					 	type: "get",
					 	url: "/common/resendmail.json",
					 	data: {mail:$("#mail").text()},
					 	dataType: "text",
					 	success: function(data){
					 	 	v = eval("(" + data + ")");
					 	 	if(v.status==true){
					 	 		alert('发送成功');
					 	 		location.reload();
					 	 	}else{
					 	 		alert('发送失败');
					 	 		location.reload();
					 	 	}
					 	 }
					 });
				}
				});
			});
		</script>
		<style>
			a.disable {color:#ccc;}
		</style>{/literal}
		</head>
	<body>            
		 <div>
				 <div class="login">
				 	<div class="login_logo">
				 			<img src="/static/img/logo.png" height="130" align="center" />
				 	</div>
					<div class="login_form">
	                <form id="login_form" method="post" class="validform" autocomplete="off">
	                    <ul class="fm" style="padding-top: 55px;">
	                     
	                        <li style=" text-align: left; color: #333; width:420px ">已向邮箱 <b id="mail">{$mail}</b> 发送验证邮件，请注意查收</li>
	                        <li style=" text-align: left; color: #333;width:420px ">若没有及时收到邮件，<font class="wait2">你可在<span class="time">57</span>秒后</font><a href="javascript:;" style="text-decoration:underline;" id="re">重新发送</a></li>
	                       <li><input type="button" value="返回" class="button button_regit" onclick="location.href='/common/login'"></li>
	                    
	                    </ul>
	                </form>
	                
	                </div>
	               
           		 </div>
           		 <div class="bottom_copyright">&copy; 2013-2014 WEME</div>
			</div>
		 </body>
</html>

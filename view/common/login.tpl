<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<title>SDK管理中心-登录账号</title>
		<meta name="keywords" content="configuration" />
		<meta name="description" content="configuration" />
		<link rel="stylesheet" type="text/css" href="/static/css/css.css"/>
		<link rel="stylesheet" href="/static/Validform/css/style.css" type="text/css" />
		<script src="/static/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="/static/Validform/Validform_v5.3.2_min.js"></script>
		</head>
	<body>            
		 <div>
		 	<div class="login">
				 	<div class="login_logo">
				 		<img src="/static/img/logo.png" height="130" align="center" />
				 	</div>
					<div class="login_form">
	                <form id="login_form" method="post" class="validform" autocomplete="off">
	                    <ul class="fm">
	                    <span id="msgdemo2" ></span>
	                        <li><input type="text" class="input icon_email" name="email" id="email" autofocus="autofocus"  placeholder="邮箱"  datatype="e" nullmsg="请输入邮箱地址！" errormsg="邮箱地址不正确！" /> </li>
	                        <li><input type="password" name="password" class="input icon_psw" id="userpass"  placeholder="密码" datatype="*" nullmsg="请输入密码！" /> </li>
	                       	<li><span style="float: left;"><input type="checkbox" name="remember" class="remember" value="1"> 下次自动登录</span> <span style="float: right;"><a href="/common/forget" class="forget">忘记密码？</a></span></li>
	                       	<li><input type="button" value="注册" class="button button_regit" onclick="location.href='/common/regit'"> <input type="submit"  value="登录" class="button button_login"></li>
	                    </ul>
	                </form>
	                <script>
	               		$(function(){
	               		 
	               		  	$(".validform").Validform({
								tiptype:function(msg,o,cssctl){
									var objtip=$("#msgdemo2");
									cssctl(objtip,o.type);
									objtip.text(msg);
								}
						
	               		  })
	               		});
	                </script>
	                </div>
	              
           		 </div>
           		 <div class="bottom_copyright">&copy; 2013-2014 WEME</div>
			</div>
		 </body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<title>SDK管理中心-找回密码</title>
		<meta name="keywords" content="configuration" />
		<meta name="description" content="configuration" />
		<link rel="stylesheet" type="text/css" href="/static/css/css.css"/>
		<link rel="stylesheet" href="/static/css/jquery.validator.css" type="text/css" />
		<script src="/static/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="/static/js/jquery.validator.js"></script>
		<script type="text/javascript" src="/static/js/zh_CN.js"></script>
		</head>
	<body>            
		 <div>
		 	<div class="login">
				 	<div class="login_logo">
				 		<img src="/static/img/logo.png" height="130" align="center" />
				 	</div>
					<div class="login_form">
	                <form id="login_form" method="post" action="/common/editpsw" class="registerform"  autocomplete="off"  {literal}data-validator-option="{theme:'yellow_right'}"{/literal}>
	                    <ul class="fm">
	                    <span id="msgdemo2" ></span>
	                        <li style="text-align:left">账户：{$email}<input type="hidden" name="email" value="{$email}"><input type="hidden" name="userid" value="{$userid}"></li>
	                        <li><input type="password" name="password" class="input icon_psw"  style="margin-bottom:16px;"  placeholder="密码" data-rule="密码:required;password" /></li>
	                       	<li><input type="password" name="password2" class="input icon_psw"  style="margin-bottom:16px;"   placeholder="确认密码"  data-rule="确认密码:required;password;match(password)" /></li>
	                       	<li><input type="button" value="返回" class="button button_regit" onclick="location.href='/common/login'"> <input type="submit"  value="修改密码" class="button button_login"></li>
	                    </ul>
	                </form>
	                
	                </div>
	              
           		 </div>
           		 <div class="bottom_copyright">&copy; 2013-2014 WEME</div>
			</div>
		 </body>
</html>

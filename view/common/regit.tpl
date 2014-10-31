<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<title>SDK管理中心-注册账号</title>
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
				 <div class="login login_regit">
				 	<div class="login_logo">
				 		<img src="/static/img/logo.png" height="130" align="center" />
				 	</div>
					<div class="regit_form">
	                <form id="login_form" method="post"  class="registerform" autocomplete="off"  {literal}data-validator-option="{theme:'yellow_right'}"{/literal}>
	                    <ul class="fm">
	                        <li><input type="text" name="email" class="input icon_email"  autofocus="autofocus"  placeholder="邮箱*" data-rule="邮箱:required;email"/></li>
	                        <li><input type="password" name="password" class="input icon_psw"  placeholder="密码*" data-rule="密码:required;password" /> </li>
	                        <li><input type="password" name="password2" class="input icon_psw" placeholder="确认密码*" data-rule="确认密码:required;password;match(password)"/> </li>
	                        <li class="regit_more"></li>
	                        <li><input type="text" name="name" class="input icon_lianxi" placeholder="联系人"/> </li>
	                        <li><input type="text" name="phone" class="input icon_phone"  placeholder="联系电话"/> </li>
	                        <li><input type="text" name="qq" class="input icon_qq" placeholder="QQ"/> </li>
	                        <li><input type="text" name="company" class="input icon_company" placeholder="公司名称"/> </li>
	                        <li style=" text-align: left; margin-top: 0px; color: #999; line-height: 30px; font-size: 14px;"><input type="checkbox" checked="checked" name="remember" class="remember" value="1"> 我已阅读并同意《<A href="#"> WEMESDK服务条款 </A>》</li>
	                        <li><input type="button" value="返回" class="button button_regit" onclick="location.href='/common/login'"> <input type="submit"  value="立即注册" class="button button_login"></li>
	                    
	                    </ul>
	                </form>
	            
	                </div>
	                
           		 </div>
           		 <div class="bottom_copyright">&copy; 2013-2014 WEME</div>
			</div>
		 </body>
</html>

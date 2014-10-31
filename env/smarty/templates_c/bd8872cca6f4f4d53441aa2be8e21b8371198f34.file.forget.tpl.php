<?php /* Smarty version Smarty-3.1.19, created on 2014-09-18 15:25:17
         compiled from "F:\www\sdk_manage\view\\common\forget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13955417a46363b129-48276199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8872cca6f4f4d53441aa2be8e21b8371198f34' => 
    array (
      0 => 'F:\\www\\sdk_manage\\view\\\\common\\forget.tpl',
      1 => 1411025101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13955417a46363b129-48276199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5417a46365e3a3_84056200',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417a46365e3a3_84056200')) {function content_5417a46365e3a3_84056200($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<title>SDK管理中心-忘记密码</title>
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
	                    <ul class="fm" style="padding-top: 25px;">
	                      <span id="msgdemo2" ></span>
	                        <li><input type="text" name="email" class="input icon_email" id="username" autofocus="autofocus"  placeholder="填写邮箱*"  datatype="e" nullmsg="请输入邮箱地址！" errormsg="邮箱地址不正确！" /> </li>
	                        <li style=" text-align: left; color: #333; ">通过你注册时留下的邮箱更改密码</li>
	                       <li><input type="button" value="返回" class="button button_regit" onclick="location.href='/common/login'"> <input type="submit"  value="发送" class="button button_login"></li>
	                    
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
<?php }} ?>

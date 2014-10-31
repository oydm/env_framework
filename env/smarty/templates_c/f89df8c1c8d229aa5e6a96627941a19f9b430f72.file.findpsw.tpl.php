<?php /* Smarty version Smarty-3.1.19, created on 2014-09-18 17:15:46
         compiled from "F:\www\sdk_manage\view\\common\findpsw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20433541a9c7b7af496-88917066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89df8c1c8d229aa5e6a96627941a19f9b430f72' => 
    array (
      0 => 'F:\\www\\sdk_manage\\view\\\\common\\findpsw.tpl',
      1 => 1411031737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20433541a9c7b7af496-88917066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541a9c7b7d65a9_49751292',
  'variables' => 
  array (
    'email' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541a9c7b7d65a9_49751292')) {function content_541a9c7b7d65a9_49751292($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	                <form id="login_form" method="post" action="/common/editpsw" class="registerform" autocomplete="off" autocomplete="off"  data-validator-option="{theme:'yellow_right'}">
	                    <ul class="fm">
	                    <span id="msgdemo2" ></span>
	                        <li style="text-align:left">账户：<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"></li>
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
<?php }} ?>

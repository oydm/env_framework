<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 17:24:57
         compiled from "F:\www\sdk_manage\view\\user\changepsw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11129541beddd6c1528-36449572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad11d88de1176d86226c9bad64bef172259d644e' => 
    array (
      0 => 'F:\\www\\sdk_manage\\view\\\\user\\changepsw.tpl',
      1 => 1411118694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11129541beddd6c1528-36449572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541beddd7135b8_51450685',
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541beddd7135b8_51450685')) {function content_541beddd7135b8_51450685($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SDK管理中心-修改密码</title>
		<meta name="keywords" content="configuration" />
		<meta name="description" content="configuration" />
		<link rel="stylesheet" type="text/css" href="/static/css/css.css"/>
		<link rel="stylesheet" href="/static/css/jquery.validator.css" type="text/css" />
		<script src="/static/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="/static/js/jquery.validator.js"></script>
		<script type="text/javascript" src="/static/js/zh_CN.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				var aa=$(".main").height();
				if($(".main").height()>$(".menuleft").height()){
					$(".menuleft").height($(".main").height());
				}
			});
		</script>
		
		</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ("../common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		 <div class="main">
		 	<?php echo $_smarty_tpl->getSubTemplate ("../common/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

           	<div class="right">
           		<div class="right_main">
           			<div class="title">修改密码</div>
           			<div class="content">
           				<form method="post" action="/user/changepsw"  autocomplete="off"  data-validator-option="{theme:'yellow_right'}">
           					<table width="100%" border="0" class="base_info">
           						<tr>
           							<td width="15%" align="right">当前用户</td>
           							<td class="pl25"><span style="float:left"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span></td>
           						</tr>
           						
           						<tr>
           							<td width="15%" align="right">当前密码</td>
           							<td class="pl25"><input type="password" class="input_text l_220" value="" name="oldpassword" placeholder="旧密码" data-rule="旧密码:required;password;remote[/user/checkpsw.json]" ></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">新密码</td>
           							<td class="pl25"><input type="password" class="input_text l_220" value="" name="password" placeholder="密码" data-rule="密码:required;password" ></td>
           						</tr>
           					
           						<tr>
           							<td width="15%" align="right">确认密码</td>
           							<td class="pl25"><input type="password" class="input_text l_220" value="" name="password2" placeholder="确认密码"  data-rule="确认密码:required;password;match(password)"></td>
           						</tr>
           						
           						<tr>
           							<td colspan="2" align="left" style="padding-left: 180px;">
           								<input type="reset" class="reset" value="取消">
           								<input type="submit" class="button" value="提交">
           							</td>
           							
           						</tr>
           					</table>
           				</form>
           			</div>
           			
           		</div>
           	</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("../common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html>
<?php }} ?>

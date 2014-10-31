<?php /* Smarty version Smarty-3.1.19, created on 2014-09-17 17:40:59
         compiled from "F:\www\sdk_manage\view\\home\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219305417a981738b53-45455601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75d0dcde31722504c57f3c4040e4a185209251e1' => 
    array (
      0 => 'F:\\www\\sdk_manage\\view\\\\home\\main.tpl',
      1 => 1410946857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219305417a981738b53-45455601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5417a981763ae7_64941852',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417a981763ae7_64941852')) {function content_5417a981763ae7_64941852($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SDK管理中心-基本资料</title>
		<meta name="keywords" content="configuration" />
		<meta name="description" content="configuration" />
		<link rel="stylesheet" type="text/css" href="/static/css/css.css"/>
		<script src="/static/js/jquery-1.8.2.min.js"></script>
		<script>
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
           			<div class="title">基本资料</div>
           			<div class="content">
           				<form method="post" action="">
           					<table width="100%" border="0" class="base_info">
           						<tr>
           							<td width="15%" align="right">账号</td>
           							<td class="pl25">weme@wemepower.com <a href="#"> 未验证 </a> <input type="button" class="button" value="验证邮箱"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">联系人</td>
           							<td class="pl25"><input type="text" class="input_text l_160" autofocus="autofocus"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">联系电话</td>
           							<td class="pl25"><input type="text" class="input_text l_220"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">联系邮箱</td>
           							<td class="pl25"><input type="text" class="input_text l_220"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">QQ</td>
           							<td class="pl25"><input type="text" class="input_text l_220"></td>
           						</tr>
           					
           						<tr>
           							<td width="15%" align="right">公司名称</td>
           							<td class="pl25"><input type="text" class="input_text l_400"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">所在地区</td>
           							<td class="pl25"><select class="select">
           								<option>广东省</option>
           							</select>
           							<select class="select">
           								<option>深圳市</option>
           							</select>
           							<select class="select">
           								<option>南山区</option>
           							</select></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">详细地址</td>
           							<td class="pl25"><input type="text" class="input_text l_400"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">公司网站</td>
           							<td class="pl25"><input type="text" class="input_text l_400"></td>
           						</tr>
           					
           						<tr>
           							<td width="15%" align="right">紧急联系人姓名</td>
           							<td class="pl25"><input type="text" class="input_text l_160"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">紧急联系人电话</td>
           							<td class="pl25"><input type="text" class="input_text l_220"></td>
           						</tr>
           						
           						<tr>
           							<td colspan="2" align="left" style="padding-left: 250px;">
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

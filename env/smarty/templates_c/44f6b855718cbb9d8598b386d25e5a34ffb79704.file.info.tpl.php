<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 16:13:56
         compiled from "F:\www\sdk_manage\view\\user\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27927541958a15dc5e8-03270675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44f6b855718cbb9d8598b386d25e5a34ffb79704' => 
    array (
      0 => 'F:\\www\\sdk_manage\\view\\\\user\\info.tpl',
      1 => 1411114434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27927541958a15dc5e8-03270675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541958a160b3e2_13555606',
  'variables' => 
  array (
    'email' => 0,
    'email_status' => 0,
    'name' => 0,
    'phone' => 0,
    'qq' => 0,
    'company' => 0,
    'province' => 0,
    'city' => 0,
    'district' => 0,
    'address' => 0,
    'url' => 0,
    'other_name' => 0,
    'other_phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541958a160b3e2_13555606')) {function content_541958a160b3e2_13555606($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SDK管理中心-基本资料</title>
		<meta name="keywords" content="configuration" />
		<meta name="description" content="configuration" />
		<link rel="stylesheet" type="text/css" href="/static/css/css.css"/>
		<script src="/static/js/jquery-1.8.2.min.js"></script>
		<script src="/static/js/area.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				select1();
	            $('#S1').bind("change", select2);
	            $('#S2').bind("change", select3);
				var aa=$(".main").height();
				if($(".main").height()>$(".menuleft").height()){
					$(".menuleft").height($(".main").height());
				}
			});
		</script>
		<script type="text/javascript">		
		    $(document).ready(function(){
				$('#email_verif').click(function(){
				  $.ajax({
					 	type: "get",
					 	url: "/user/sendmail.json",
					 	data: "",
					 	dataType: "text",
					 	success: function(data){
					 	 	v = eval("(" + data + ")");
					 	 	if(v.status==true){
					 	 		alert('发送成功,请登录邮箱查收');
					 	 		location.reload();
					 	 	}else{
					 	 		alert('发送失败');
					 	 		location.reload();
					 	 	}
					 	 }
					 });
				});
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
           				<form method="post" action="/user/info_edit">
           					<table width="100%" border="0" class="base_info">
           						<tr>
           							<td width="15%" align="right">账号</td>
           							<td class="pl25"><span style="float:left"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 <a > <?php if ($_smarty_tpl->tpl_vars['email_status']->value==0) {?>未验证<?php } else { ?> 已验证 <?php }?> </a> </span><span style="padding-top:13px;float:left"> <input type="button" class="button" id="email_verif" value="验证邮箱"></span></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">联系人</td>
           							<td class="pl25"><input type="text" class="input_text l_160" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="name" autofocus="autofocus"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">联系电话</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" name="phone"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">QQ</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['qq']->value;?>
" name="qq"></td>
           						</tr>
           					
           						<tr>
           							<td width="15%" align="right">公司名称</td>
           							<td class="pl25"><input type="text" class="input_text l_400" value="<?php echo $_smarty_tpl->tpl_vars['company']->value;?>
" name="company"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">所在地区</td>
           							<td class="pl25">
           							<select class="select" name="province" id="S1" data-s="<?php echo $_smarty_tpl->tpl_vars['province']->value;?>
">
           							</select>
           							<select class="select" name="city" id="S2" data-s="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
">
           							</select>
           							<select class="select" name="district" id="S3" data-s="<?php echo $_smarty_tpl->tpl_vars['district']->value;?>
">
           							</select></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">详细地址</td>
           							<td class="pl25"><input type="text" class="input_text l_400" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" name="address"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">公司网站</td>
           							<td class="pl25"><input type="text" class="input_text l_400" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" name="url"></td>
           						</tr>
           					
           						<tr>
           							<td width="15%" align="right">紧急联系人姓名</td>
           							<td class="pl25"><input type="text" class="input_text l_160" value="<?php echo $_smarty_tpl->tpl_vars['other_name']->value;?>
" name="other_name"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">紧急联系人电话</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['other_phone']->value;?>
" name="other_phone"></td>
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

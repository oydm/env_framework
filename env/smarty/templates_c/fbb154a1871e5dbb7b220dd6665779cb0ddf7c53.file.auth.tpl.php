<?php /* Smarty version Smarty-3.1.19, created on 2014-09-20 15:07:24
         compiled from "F:\www\sdk_manage\view\\user\auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11044541ba8933b9ab2-54522925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbb154a1871e5dbb7b220dd6665779cb0ddf7c53' => 
    array (
      0 => 'F:\\www\\sdk_manage\\view\\\\user\\auth.tpl',
      1 => 1411196842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11044541ba8933b9ab2-54522925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541ba893403e42_27729929',
  'variables' => 
  array (
    'status' => 0,
    'type' => 0,
    'company' => 0,
    'corp' => 0,
    'charter' => 0,
    'charter_img' => 0,
    'name' => 0,
    'idcard' => 0,
    'idcard_img' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541ba893403e42_27729929')) {function content_541ba893403e42_27729929($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SDK管理中心-认证资料</title>
		<meta name="keywords" content="configuration" />
		<meta name="description" content="configuration" />
		<link rel="stylesheet" type="text/css" href="/static/css/css.css"/>
		<script src="/static/js/jquery-1.8.2.min.js"></script>
		<link rel="stylesheet" type="text/css"  href="/static/uploadify/uploadify.css" />
	    <script type="text/javascript" src="/static/uploadify/swfobject.js"></script>
	    <script type="text/javascript" src="/static/uploadify/uploadify.js"></script>
	    <script type="text/javascript" src="/static/js/uploadphoto.js"></script>
	    <link rel=stylesheet type=text/css href="/static/css/jquery.colorbox.css">
		<script type=text/javascript src="/static/js/jquery.colorbox-min.js"></script>
		
		 <script type="text/javascript">
        $(function(){
            uploadphoto("charter","charter_img","charter_src","charter_href");
            uploadphoto("idcard","idcard_img","idcard_src","idcard_href");
            uploadphoto("idcard2","idcard_img2","idcard_src2","idcard_href2");
        })
    </script>
		<script type="text/javascript">
			$(document).ready(function(){
				change();
				var aa=$(".main").height();
				if($(".main").height()>$(".menuleft").height()){
					$(".menuleft").height($(".main").height());
				}
							
			});
			function change(){
				var type=$('#type').val();
				if(type==1){
					$("#type1").show();
					$("#type2").hide();
				}else{
					$("#type1").hide();
					$("#type2").show();
				}
			}
		</script>
		
		</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ("../common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		 <div class="main">
		 	<?php echo $_smarty_tpl->getSubTemplate ("../common/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

           	<div class="right">
           		<div class="right_main">
           			<div class="title">认证资料</div>
           			<div class="content">
           				<table width="100%" border="0" class="base_info">
           						<tr>
           							<td width="15%" align="right">身份认证状态</td>
           							<td class="pl25"><span style="float:left"><a ><?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>尚未提交认证<?php }?><?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>已认证<?php }?><?php if ($_smarty_tpl->tpl_vars['status']->value==2) {?>审核中<?php }?><?php if ($_smarty_tpl->tpl_vars['status']->value==3) {?>认证失败<?php }?></a> </span></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">认证类型</td>
           							<td class="pl25">
	           							<select class="select" id="type" name="type" onchange="change()">
	           								<option value="1" <?php if ($_smarty_tpl->tpl_vars['type']->value==1) {?>selected<?php }?>>企业认证</option>
	           								<option value="2" <?php if ($_smarty_tpl->tpl_vars['type']->value==2) {?>selected<?php }?>>个人认证</option>
	           							</select>
	           						</td>
           						</tr>
           						</table>
           						<div id="type1">
           						<form method="post" action="/user/authok">
           						<table width="100%" border="0" class="base_info">
           						<tr>
           							<td width="15%" align="right">公司名称</td>
           							<td class="pl25">
           							<input type="hidden" value="1" name="type">
           							<input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['company']->value;?>
" name="company"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">法人代表</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['corp']->value;?>
" name="corp"></td>
           						</tr>
           					
           						<tr>
           							<td width="15%" align="right">营业执照号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['charter']->value;?>
" name="charter"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">营业执照扫描件</td>
           							<td class="pl25">
           							<div style="position: relative;">
	           							<div style="float:left;"><input type="hidden" name="charter_img" id="charter_img" value="<?php echo $_smarty_tpl->tpl_vars['charter_img']->value;?>
"/>
	           							<input type="button" name="button" class="button" id="charter" value="上传图片" /></div>
	           							<a href="<?php echo $_smarty_tpl->tpl_vars['charter_img']->value;?>
" rel=colorbox1 target=_blank id="charter_href"><img  src="<?php echo $_smarty_tpl->tpl_vars['charter_img']->value;?>
" style="float:left; position: absolute; top: -20px;" width="80"  height="80" id="charter_src"></a>
	         						<div>
	         						 </td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">负责人姓名</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="name"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">负责人身份证号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['idcard']->value;?>
" name="idcard"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">身份证照片</td>
           							<td class="pl25">
		           							<div style="position: relative;">
			           							<div style="float:left;"><input type="hidden" name="idcard_img" id="idcard_img" value="<?php echo $_smarty_tpl->tpl_vars['idcard_img']->value;?>
"/>
			           							<input type="button" name="button" class="button" id="idcard" value="上传图片" /></div>
			           							<a href="<?php echo $_smarty_tpl->tpl_vars['idcard_img']->value;?>
" rel=colorbox1 target=_blank id="idcard_href"><img  src="<?php echo $_smarty_tpl->tpl_vars['idcard_img']->value;?>
" style="float:left; position: absolute; top: -20px;" width="80"  height="80" id="idcard_src"></a>
			         						<div>
           							</td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">负责人手机号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" name="phone"><input type="button" class="button" value="获取验证码"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">短信验证码</td>
           							<td class="pl25"><input type="text" class="input_text l_160" value="" name="verif_code"></td>
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
           					<div id="type2" style="display: none;">
           						<form method="post" action="/user/authok">
           						<table width="100%" border="0" class="base_info">
           							<tr>
           							<td width="15%" align="right">真实姓名</td>
           							<td class="pl25">
           								<input type="hidden" value="2" name="type">
           								<input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="name"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">身份证号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['idcard']->value;?>
" name="idcard"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">身份证照片</td>
           							<td class="pl25">
           								<div style="position: relative;">
			           							<div style="float:left;"><input type="hidden" name="idcard_img" id="idcard_img2" value="<?php echo $_smarty_tpl->tpl_vars['idcard_img']->value;?>
"/>
			           							<input type="button" name="button" class="button" id="idcard2" value="上传图片" /></div>
			           							<a href="<?php echo $_smarty_tpl->tpl_vars['idcard_img']->value;?>
" rel=colorbox1 target=_blank id="idcard_href2"><img  src="<?php echo $_smarty_tpl->tpl_vars['idcard_img']->value;?>
" style="float:left; position: absolute; top: -20px;" width="80"  height="80" id="idcard_src2"></a>
			         						<div>
           							</td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">手机号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" name="phone"><input type="button" class="button" value="获取验证码"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">短信验证码</td>
           							<td class="pl25"><input type="text" class="input_text l_160" value="" name="verif_code"></td>
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
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("../common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html>
<?php }} ?>

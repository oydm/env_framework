<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		{literal}
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
		{/literal}
		</head>
	<body>
		{include file="../common/head.tpl"}
		 <div class="main">
		 	{include file="../common/left.tpl"}
           	<div class="right">
           		<div class="right_main">
           			<div class="title">认证资料</div>
           			<div class="content">
           				<table width="100%" border="0" class="base_info">
           						<tr>
           							<td width="15%" align="right">身份认证状态</td>
           							<td class="pl25"><span style="float:left"><a >{if $status == 0}尚未提交认证{/if}{if $status == 1}已认证{/if}{if $status == 2}审核中{/if}{if $status == 3}认证失败{/if}</a> </span></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">认证类型</td>
           							<td class="pl25">
	           							<select class="select" id="type" name="type" onchange="change()">
	           								<option value="1" {if $type == 1}selected{/if}>企业认证</option>
	           								<option value="2" {if $type == 2}selected{/if}>个人认证</option>
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
           							<input type="text" class="input_text l_220" value="{$company}" name="company"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">法人代表</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$corp}" name="corp"></td>
           						</tr>
           					
           						<tr>
           							<td width="15%" align="right">营业执照号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$charter}" name="charter"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">营业执照扫描件</td>
           							<td class="pl25">
           							<div style="position: relative;">
	           							<div style="float:left;"><input type="hidden" name="charter_img" id="charter_img" value="{$charter_img}"/>
	           							<input type="button" name="button" class="button" id="charter" value="上传图片" /></div>
	           							<a href="{$charter_img}" rel=colorbox1 target=_blank id="charter_href"><img  src="{$charter_img}" style="float:left; position: absolute; top: -20px;" width="80"  height="80" id="charter_src"></a>
	         						<div>
	         						 </td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">负责人姓名</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$name}" name="name"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">负责人身份证号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$idcard}" name="idcard"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">身份证照片</td>
           							<td class="pl25">
		           							<div style="position: relative;">
			           							<div style="float:left;"><input type="hidden" name="idcard_img" id="idcard_img" value="{$idcard_img}"/>
			           							<input type="button" name="button" class="button" id="idcard" value="上传图片" /></div>
			           							<a href="{$idcard_img}" rel=colorbox1 target=_blank id="idcard_href"><img  src="{$idcard_img}" style="float:left; position: absolute; top: -20px;" width="80"  height="80" id="idcard_src"></a>
			         						<div>
           							</td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">负责人手机号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$phone}" name="phone"><input type="button" class="button" value="获取验证码"></td>
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
           								<input type="text" class="input_text l_220" value="{$name}" name="name"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">身份证号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$idcard}" name="idcard"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">身份证照片</td>
           							<td class="pl25">
           								<div style="position: relative;">
			           							<div style="float:left;"><input type="hidden" name="idcard_img" id="idcard_img2" value="{$idcard_img}"/>
			           							<input type="button" name="button" class="button" id="idcard2" value="上传图片" /></div>
			           							<a href="{$idcard_img}" rel=colorbox1 target=_blank id="idcard_href2"><img  src="{$idcard_img}" style="float:left; position: absolute; top: -20px;" width="80"  height="80" id="idcard_src2"></a>
			         						<div>
           							</td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">手机号</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$phone}" name="phone"><input type="button" class="button" value="获取验证码"></td>
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
		{include file="../common/foot.tpl"}
	</body>
</html>

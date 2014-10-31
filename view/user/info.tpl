<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SDK管理中心-基本资料</title>
		<meta name="keywords" content="configuration" />
		<meta name="description" content="configuration" />
		<link rel="stylesheet" type="text/css" href="/static/css/css.css"/>
		<script src="/static/js/jquery-1.8.2.min.js"></script>
		<script src="/static/js/area.js"></script>
		{literal}
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
		{/literal}
		</head>
	<body>
		{include file="../common/head.tpl"}
		 <div class="main">
		 	{include file="../common/left.tpl"}
           	<div class="right">
           		<div class="right_main">
           			<div class="title">基本资料</div>
           			<div class="content">
           				<form method="post" action="/user/info_edit">
           					<table width="100%" border="0" class="base_info">
           						<tr>
           							<td width="15%" align="right">账号</td>
           							<td class="pl25"><span style="float:left">{$email} <a > {if $email_status == 0}未验证{else} 已验证 {/if} </a> </span><span style="padding-top:13px;float:left"> <input type="button" class="button" id="email_verif" value="验证邮箱"></span></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">联系人</td>
           							<td class="pl25"><input type="text" class="input_text l_160" value="{$name}" name="name" autofocus="autofocus"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">联系电话</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$phone}" name="phone"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">QQ</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$qq}" name="qq"></td>
           						</tr>
           					
           						<tr>
           							<td width="15%" align="right">公司名称</td>
           							<td class="pl25"><input type="text" class="input_text l_400" value="{$company}" name="company"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">所在地区</td>
           							<td class="pl25">
           							<select class="select" name="province" id="S1" data-s="{$province}">
           							</select>
           							<select class="select" name="city" id="S2" data-s="{$city}">
           							</select>
           							<select class="select" name="district" id="S3" data-s="{$district}">
           							</select></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">详细地址</td>
           							<td class="pl25"><input type="text" class="input_text l_400" value="{$address}" name="address"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">公司网站</td>
           							<td class="pl25"><input type="text" class="input_text l_400" value="{$url}" name="url"></td>
           						</tr>
           					
           						<tr>
           							<td width="15%" align="right">紧急联系人姓名</td>
           							<td class="pl25"><input type="text" class="input_text l_160" value="{$other_name}" name="other_name"></td>
           						</tr>
           						<tr>
           							<td width="15%" align="right">紧急联系人电话</td>
           							<td class="pl25"><input type="text" class="input_text l_220" value="{$other_phone}" name="other_phone"></td>
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
		{include file="../common/foot.tpl"}
	</body>
</html>

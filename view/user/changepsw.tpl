<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		{literal}
		<script type="text/javascript">
			$(document).ready(function(){
				var aa=$(".main").height();
				if($(".main").height()>$(".menuleft").height()){
					$(".menuleft").height($(".main").height());
				}
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
           			<div class="title">修改密码</div>
           			<div class="content">
           				<form method="post" action="/user/changepsw"  autocomplete="off"  {literal}data-validator-option="{theme:'yellow_right'}"{/literal}>
           					<table width="100%" border="0" class="base_info">
           						<tr>
           							<td width="15%" align="right">当前用户</td>
           							<td class="pl25"><span style="float:left">{$email}</span></td>
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
		{include file="../common/foot.tpl"}
	</body>
</html>

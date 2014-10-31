<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 11:12:42
         compiled from "F:\www\sdk_manage\view\\home\table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115975417aaaacc2b50-88001866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '538544a3cc362b233dc88cfb28b221cd6dea36fc' => 
    array (
      0 => 'F:\\www\\sdk_manage\\view\\\\home\\table.tpl',
      1 => 1410837139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115975417aaaacc2b50-88001866',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5417aaaacf57e1_55093427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417aaaacf57e1_55093427')) {function content_5417aaaacf57e1_55093427($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SDK管理中心-游戏管理</title>
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
           			<div class="title">游戏管理</div>
           			<div class="content">
           				 <div class="table_list">
           				 	<table width="100%" >
           				 		<thead>
						          <tr>
						            <td><label><input type="checkbox" class="J_check_all" data-direction="x" data-checklist="J_check_x"></label></td>
						            
						            <td>ID</td>
						            <td>标题</td>
						            <td>点击量</td>
						            <td>发布人</td>
						            <td><span>发帖时间</span></td>
						            <td>管理操作</td>
						          </tr>
						        </thead>
						        <tbody>
						          <tr>
						            <td><input type="checkbox" class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="7"></td>
						            <td><a href="/ShuipFCMS/index.php?m=Createhtml&amp;a=batch_show&amp;catid=22&amp;steps=0&amp;ids=7" title="点击生成">7</a></td>
						            <td><a href="/2013/zixun_06/7.html" target="_blank"><span style="">反击易迅 京东欲推一日四送</span></a></td>
						            <td>0</td>
						            <td>admin                </td>
						            <td>2013-06-22 12:10:16</td>
						            <td><a href="javascript:;;" onclick="javascript:openwinx('/ShuipFCMS/index.php?m=Content&amp;a=edit&amp;catid=22&amp;id=7','')">修改</a> | <a href="/ShuipFCMS/index.php?m=Content&amp;a=delete&amp;catid=22&amp;id=7" class="J_ajax_del">删除</a> | <a data-title="反击易迅 京东欲推一日四送" href="/ShuipFCMS/index.php?g=Comments&amp;m=Comments&amp;searchtype=2&amp;keyword=c-22-7" target="_blank">评论</a></td>
						          </tr>
						           <tr>
						            <td><input type="checkbox" class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="7"></td>
						           
						            <td><a href="/ShuipFCMS/index.php?m=Createhtml&amp;a=batch_show&amp;catid=22&amp;steps=0&amp;ids=7" title="点击生成">7</a></td>
						            <td><a href="/2013/zixun_06/7.html" target="_blank"><span style="">反击易迅 京东欲推一日四送</span></a></td>
						            <td>0</td>
						            <td>admin                </td>
						            <td>2013-06-22 12:10:16</td>
						            <td><a href="javascript:;;" onclick="javascript:openwinx('/ShuipFCMS/index.php?m=Content&amp;a=edit&amp;catid=22&amp;id=7','')">修改</a> | <a href="/ShuipFCMS/index.php?m=Content&amp;a=delete&amp;catid=22&amp;id=7" class="J_ajax_del">删除</a> | <a data-title="反击易迅 京东欲推一日四送" href="/ShuipFCMS/index.php?g=Comments&amp;m=Comments&amp;searchtype=2&amp;keyword=c-22-7" target="_blank">评论</a></td>
						          </tr>
						           <tr>
						            <td><input type="checkbox" class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="7"></td>
						          
						            <td><a href="/ShuipFCMS/index.php?m=Createhtml&amp;a=batch_show&amp;catid=22&amp;steps=0&amp;ids=7" title="点击生成">7</a></td>
						            <td><a href="/2013/zixun_06/7.html" target="_blank"><span style="">反击易迅 京东欲推一日四送</span></a></td>
						            <td>0</td>
						            <td>admin                </td>
						            <td>2013-06-22 12:10:16</td>
						            <td><a href="javascript:;;" onclick="javascript:openwinx('/ShuipFCMS/index.php?m=Content&amp;a=edit&amp;catid=22&amp;id=7','')">修改</a> | <a href="/ShuipFCMS/index.php?m=Content&amp;a=delete&amp;catid=22&amp;id=7" class="J_ajax_del">删除</a> | <a data-title="反击易迅 京东欲推一日四送" href="/ShuipFCMS/index.php?g=Comments&amp;m=Comments&amp;searchtype=2&amp;keyword=c-22-7" target="_blank">评论</a></td>
						          </tr>
						           <tr>
						            <td><input type="checkbox" class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="7"></td>
						            
						            <td><a href="/ShuipFCMS/index.php?m=Createhtml&amp;a=batch_show&amp;catid=22&amp;steps=0&amp;ids=7" title="点击生成">7</a></td>
						            <td><a href="/2013/zixun_06/7.html" target="_blank"><span style="">反击易迅 京东欲推一日四送</span></a></td>
						            <td>0</td>
						            <td>admin                </td>
						            <td>2013-06-22 12:10:16</td>
						            <td><a href="javascript:;;" onclick="javascript:openwinx('/ShuipFCMS/index.php?m=Content&amp;a=edit&amp;catid=22&amp;id=7','')">修改</a> | <a href="/ShuipFCMS/index.php?m=Content&amp;a=delete&amp;catid=22&amp;id=7" class="J_ajax_del">删除</a> | <a data-title="反击易迅 京东欲推一日四送" href="/ShuipFCMS/index.php?g=Comments&amp;m=Comments&amp;searchtype=2&amp;keyword=c-22-7" target="_blank">评论</a></td>
						          </tr>
						        </tbody>
           				 	</table>
           				 </div>
           					<div class="btn_wrap">
						      <div class="btn_wrap_pd">
						        <label class="mr20">
						        <input type="checkbox" class="J_check_all">全选</label>                
						        <button class="button" type="submit">删除</button>
						      </div>
						    </div>
           					<div class='pager'>
           						<span class="">首页</span>
           						<span class="">上一页</span>
           						<span class="current">1</span>
								<a href="">2</a>
								<a href="">3</a>
								<a href="">4</a>
								<a href="">5</a>
								<a href="">下一页</a><a href="/home/pagetest?page=5">尾页</a>
						   </div>
           					
           			</div>
           		</div>
           	</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("../common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</body>
</html>
<?php }} ?>

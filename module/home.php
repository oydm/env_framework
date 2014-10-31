<?php
namespace module;
class home
{
   function __construct(){
	   	$userid=env()->session->get("userid");
	   	if(!$userid){
	   		header("Location: /common/login");
	   	}
   }
   
	/**
	 * 后台首页
	 * @author sky
	 * @date 2014-09-16
	 */
	public function main(){
		
	}
	
	/**
	 * 基本资料
	 * @author sky
	 * @date 2014-09-16
	 */
	public function info(){
	
	}
	/**
	 * 表格列表
	 * @author sky
	 * @date 2014-09-16
	 */
	public function table(){
		var_dump(env()->cookie->get("user"));
		var_dump(env()->session->get("userid"));
	}
	/**
	 * 游戏管理
	 * @author sky
	 * @date 2014-09-16
	 */
	public function game(){
	
	}
	
}

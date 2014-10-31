<?php
namespace module;
class user
{
   function __construct(){
	   	$userid=env()->session->get("userid");
	   	if(!$userid){
	   		header("Location: /common/login");
	   	}
   }	
	/**
	 * 基本资料
	 * @author sky
	 * @date 2014-09-17
	 */
	public function info(){
		$userid=env()->session->get("userid");
		$info = env()->db0->get_row("select * from admin_user where id=".$userid);
		var_dump($_SERVER);
		return $info;
	}
	
	/**
	 * 基本资料修改
	 * @author sky
	 * @date 2014-09-17
	 * @param array $param
	 */
	public function info_edit($param){
		if(is_array($param)){
			$userid=env()->session->get("userid");
			$where="";
			foreach ($param as $key=>$val){
				$where.= "`".$key."`='".$val."',";
			}
		   $where=rtrim($where, ",");
		   $sql="UPDATE `admin_user` SET ".$where." WHERE `id`=".$userid;
		   env()->db0->get_value($sql);
		   header("Location: /user/info");
		}
		die;
	}
	
	/**
	 * 邮箱验证邮件发送
	 * @author sky
	 * @date 2014-09-18
	 */
	public function sendmail(){
		$userid=env()->session->get("userid");
		$email = env()->db0->get_value("select email from admin_user where id=".$userid);
		$send=new \module\mail();
		$result=$send->sendmail($userid,$email,2);
		return array("status"=>$result);
	}
	
	/**
	 * @author sky
	 * @date 2014-09-18
	 *
	 */
	public function checkmail($param){
		$tool=new \libs\Tool();
		$userid=$tool->encrypt($param["key"],"D");
		$result=env()->db0->get_value("UPDATE `admin_user` SET `email_status`=1 WHERE `id`=".$userid);
		$js=new \libs\JS();
		$js->js_goto("认证成功！","/user/info");
		die;
	}
	
	/**
	 * 身份验证
	 * @author sky 2014-09-19
	 * 
	 */
	public function auth($param){
		$userid=env()->session->get("userid");
		$auth=env()->db0->get_row("select * from sdk_auth where userid=".$userid);
		if(!$auth){
			$auth["status"]=0;$auth["company"]="";$auth["corp"]="";$auth["charter"]="";$auth["charter_img"]="";$auth["name"]="";
			$auth["idcard"]="";$auth["idcard_img"]="";$auth["phone"]="";$auth["type"]="";
		}
		return $auth;
	}
	/**
	 * 身份验证提交
	 * @author sky 2014-09-20
	 *
	 */
	public function authok($param){
		$js=new \libs\JS();
		$userid=env()->session->get("userid");
		$id=env()->db0->get_value("select id from sdk_auth where userid=".$userid);
		$status=env()->db0->get_value("select status from sdk_auth where userid=".$userid);
		if($status==2){$js->js_goto("正在审核中，请勿重复提交","/user/auth");die;}
		if($status==1){$js->js_goto("已审核成功，请勿重复验证","/user/auth");die;}
		if($param){
			$param["userid"]=$userid;
			$param["status"]=2;
			unset($param["verif_code"]);
			$where="";
			foreach ($param as $key=>$val){
				$where.= "`".$key."`='".$val."',";
			}
			$where=rtrim($where, ",");
			if($id){
				$sql="UPDATE `sdk_auth` SET ".$where." WHERE `userid`=".$userid;
			}else{
				$sql="INSERT INTO `sdk_auth` SET ".$where;
			}
			env()->db0->get_value($sql);
			$js->js_goto("提交成功！请等待管理员审核","/user/auth");
		}
		die;
	}
	/**
	 * 修改密码
	 * @author sky 2014-09-19
	 *
	 */
	public function changepsw($param){
		$js=new \libs\JS();
		$userid=env()->session->get("userid");
		$email = env()->db0->get_value("select email from admin_user where id=".$userid);
		if($param){
			$password = env()->db0->get_value("select password from admin_user where id=".$userid);
			if($password==md5($param["oldpassword"])){
				if($param["password"]==$param["password2"]){
					$result=env()->db0->get_value("UPDATE `admin_user` SET `password`='".md5($param["password"])."' WHERE `id`=".$userid);
					$js->js_goto("修改成功，请用新密码登录","/common/loginout");
					die;	
				}else{
					$js->js_goto("密码不一致！","/user/changepsw");
					die;
				}
			}else {
				$js->js_goto("旧密码错误！","/user/changepsw");
				die;
			}
		}
		return array("email"=>$email);
	}
	
	/**
	 * 验证密码
	 * @author sky 2014-09-19
	 *
	 */
	public function checkpsw($param){
		$userid=env()->session->get("userid");
		if($param["oldpassword"]){
			$password = env()->db0->get_value("select password from admin_user where id=".$userid);
			if($password==md5($param["oldpassword"])){
				return array("ok"=>"输入正确");
			}else {
				return array("error"=>"旧密码错误");
			}
		}
		
	}
	
	public function test(){
		$area=env()->db0->query("select * from sdk_area");
		foreach ($area as $val){
			$joinname=explode("|", $val["joinname"]);
			$level=count($joinname);
			env()->db0->get_value("update sdk_area set `level`=".$level." where areaid=".$val["areaid"]);
		}
		die;
	}
}

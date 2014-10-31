<?php
namespace module;
class mail
{
	/**
	 * 登录操作
	 * @author sky
	 * @date 2014-09-18
	 * @param $userid 用户ID
	 * @param $email 接收邮件邮箱地址
	 * @param $type 类型 1、找回密码 2、验证邮箱
	 */
	public function sendmail($userid,$email,$type){
		require("class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'mail.wemepower.com';  						  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'wemesdk@wemesdk.com';                 // SMTP username
		$mail->Password = '1qaz2wsxeueor';                           // SMTP password
		$mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 25;                                    // TCP port to connect to
		$mail->CharSet = 'UTF-8';
		$mail->From = 'wemesdk@wemesdk.com';
		$mail->FromName = 'WemeSDK';
		$mail->addAddress($email);                            // Add a recipient
		$mail->isHTML(true);                                  // Set email format to HTML
		$info=$this->mailinfo($userid,$email,$type);          //emial's info（subject、body）
		$mail->Subject = $info["subject"];
		$mail->Body    = $info["body"];
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		if(!$mail->send()) {
			return false;
		} else {
			return true;
		}
	}
	
	/**
	 * 返回邮件内容
	 * @author SKY 
	 * @date 2014-09-18
	 * @param $userid 用户ID
	 * @param $email 接收邮件邮箱地址
	 * @param $type 类型 1、找回密码 2、验证邮箱
	 */
	public function mailinfo($userid,$email,$type){
		$tool=new \libs\Tool();
		$key=$tool->encrypt($userid,"E");
		switch ($type){
			case 1:
				$url="http://www.wemesdk.com/manager/common/findpsw?key=".urlencode($key);
				$info["subject"]="验证邮箱找回密码";
				$info["body"]='<div style="width: 600px; height: auto; margin:  20px auto; font-size: 15px; font-family: "microsoft yahei";">
			<div style="width: 590px; height: 40px; padding-top: 10px; padding-bottom: 15px; padding-left: 10px; border-bottom: 2px solid #5e7fd2;">
				<img src="http://www.wemesdk.com/manager/static/img/head_logo.png" height="30">
			</div>
			<div style="width: 568px; height: 319px; border: 1px solid #ccc; border-top: none; padding: 15px; font-size: 14px; padding-left: 25px; line-height: 35px;">
				感谢你使用WemeSDK服务！<br/>
<div style=" padding-bottom: 35px;">					点击下方按钮，并根据页面指引修改密码 '.$email.'<br/>
					
					<p><A href="'.$url.'" target="_blank" style="margin-top:20px;"><input type="button" value="验证找回密码" style="cursor: pointer; border: 0px; background: #5e7fd2; color: #fff; width: 140px; height: 40px;" /></a></p>
					
					<p><span style="margin-top:20px;">如你无法通过上面按钮打开页面，请点击下方链接或者把它复制到浏览器地址栏。</span></p>
					
					<p><A href="'.$url.'" target="_blank" style="margin-top:20px;">'.$url.'</A></p>
					</div>

					<span style="padding-top: 20px;">- WemeSDK团队</span>
			</div>
		</div>
		<div style="height: 45px; line-height: 25px; padding-top: 20px; text-align: center; font-size: 12px;">
			获取更多支持，请访问<A href="http://www.wemesdk.com/" target="_blank">联系我们</A>。<br/>
		深圳市微米动力科技有限公司
		</div>';
				break;
			case 2:
				$url="http://www.wemesdk.com/manager/user/checkmail?key=".urlencode($key);
				$info["subject"]="验证WemeSDK登录邮箱";
				$info["body"]='<div style="width: 600px; height: auto; margin:  20px auto; font-size: 15px; font-family: "microsoft yahei";">
			<div style="width: 590px; height: 40px; padding-top: 10px; padding-bottom: 10px; padding-left: 10px; border-bottom: 2px solid #5e7fd2;">
				<img src="http://www.wemesdk.com/manager/static/img/head_logo.png" height="30">
			</div>
			<div style="width: 568px; height: 319px; padding-left: 25px;border: 1px solid #ccc; border-top: none; padding: 15px; padding-left: 25px;  font-size: 14px; line-height: 35px;">
				感谢你使用WemeSDK服务！<br/>
<div style=" padding-bottom: 35px;">					点击下面按钮以验证你的电子邮箱 '.$email.'<br/>
			
					<p><A href="'.$url.'" target="_blank"><input type="button" value="验证电子邮箱" style="cursor: pointer; border: 0px; background: #5e7fd2; color: #fff; width: 140px; height: 40px;" /></a></p>
			
					<p>如你无法通过上面按钮以找回您的登录密码，请点击下方链接或者把它复制到浏览器地址栏。</p>
			
					<p><A href="'.$url.'" target="_blank" style="margin-top:20px;">'.$url.'</A></p>
					</div>
				
					<p style="padding-top: 20px;">- WemeSDK团队</p>
			</div>
		</div>
		<div style="height: 45px; line-height: 25px; padding-top: 20px; text-align: center; font-size: 12px;">
			获取更多支持，请访问<A href="http://www.wemesdk.com/" target="_blank">联系我们</A>。<br/>
		深圳市微米动力科技有限公司
		</div>';
			break;
		}
		return $info;
	}

}
<?php
ob_start();

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once('script/class.phpmailer.php');
require_once('script/sanitize.php');

$name = $email = $message = "";




if (isset($_POST) && $_POST['is_JSON']==true)
	{
		echo "is JSON";
		$_POST = cleanInput($_POST);
		//print_r($_POST);
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message= $_POST["message"];
	
		echo $name." ".$email." ".$message;
		sendMail($name, $email, $message);
	}
else if(isset($_POST))
	{
		echo "is PHP";
		print_r($_POST);
		echo $_POST['is_JSON'];
		$_SESSION['is_error']=false;
		$name = sanitize($_POST["name"]);
		$email = sanitize( $_POST["email"]);
		$message= sanitize($_POST["message"]);
		//echo $name." ".$email." ".$message;
		sendMail($name, $email, $message);
	}


function sendMail($name, $email, $message){
$mail             = new PHPMailer(); //defaults to using php "mail()"

//$mail->IsSMTP();
$mail->Host     = "localhost"; //SMTP server - Should reflect the server BleacherMedic uses. (example: mail.bleachermedia.com )
$mail->Port = 465;
$mail->From     = $email;
$mail->AddReplyTo=$email;
$mail->FromName = $name;
$mail->AddAddress("bkbarton@bkbarton.com"); //Add BleacherMedic email address after testing.
$mail->SMTPAuth = "true";
$mail->Username = "bkbarton@bkbarton.com"; //I believe this should be the email address associated with the server, so email@BleacherMedic.com (same as AddAddress, prolly)

$mail->Subject  = "A message send from www.bkbarton.com ";
$mail->Body     = 	"FROM:\r\n"
					."--------------------------------------------------\r\n\r\n"
					.$name."\r\n"
					.$email."\r\n\r\n"
					."MESSAGE: \r\n"
					."--------------------------------------------------\r\n\r\n"
					.$message."\r\n\r\n"
					."--------------------------------------------------\r\n\r\n"
					.$name."<".$email.">";
$mail->WordWrap = 100;




if(!$mail->Send()) 
	{
  		echo 'Message was not sent.';
		echo 'Mailer error: ' . $mail->ErrorInfo;
	} 
else if ($_POST['is_JSON']==true)
	{
		echo "sent";
	}	
else 
	{
//		print_r($_POST);
//		header("location: http://www.google.com"); //replace url with your thankyou.html
		success();
	}
}
?>

<?php
//incluce requires phpmailer files 
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';


//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//create instance of phpmailer
$mail=new PHPMailer();

//set mailer to use smtp
$mail->isSMTP();

//define smtp host
$mail->Host="smtp.gmail.com";

//enable smtp authentication
$mail->SMTPAuth="true";

//set type of encryption
$mail->SMTPSecure="tls";

//set port to connect 
$mail->Port="587";

//set gmail username
$mail->Username="31930337@students.liu.edu.lb";

//set gmail password
$mail->Password="";

//set mail subject 
$mail->Subject="Test email using php mailer";

//set sender email 
$mail->setFrom("31930337@students.liu.edu.lb");

//set mail body 
$body=$_POST['txtReply'];
$mail->Body=$body;

//set recipient 
$recpient=$_POST['txtEmail'];
$mail->addAddress($recpient);

if($mail->Send()){
    header("location:admin-dashboard.php");
}
else
echo"Error !..";

//closing smtp connection
$mail->smtpClose();


?>
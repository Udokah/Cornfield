<?php
error_reporting(0) ;

if( $_POST['action'] == 'sendMessage'){

$sendTo = 'info@cornfieldtransnationalltd.com' ;
$name = stripslashes( trim($_POST['name'] )) ;
$email = stripslashes(trim($_POST['email']));
$subject = 'Email From Website' ;
$message = stripslashes(trim($_POST['message']));

$mail = mail($sendTo, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());

if( $mail == true ){
	echo '$(function(){sendSuccess()});' ;
}else{
	echo '$(function(){sendError()});' ;
}

exit() ;
	
}else{
	echo 'not allowed' ;
}

?>
<?php
 
if(isset($_POST['email'])) {
	
	require_once 'lib/swift_required.php';

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$transport = Swift_SmtpTransport::newInstance('mail.yourdomain.com', 25, 'tls' )
	  ->setUsername('email@domain.com')     
	  ->setPassword('p@55w0rd')
	  ;

	
	$mailer = Swift_Mailer::newInstance($transport);
	
	
	
	
	foreach ($_POST as $key => $value)
		$messageText .= ucfirst($key).": ".$value."\n\n";
	
	
	
	
	
	$message = Swift_Message::newInstance('A message from Form')
	  ->setFrom(array($_POST['email'] => $_POST['name']))
	  ->setTo(array('email@yourdomain.com' => 'John Doe'))->setBody($messageText);



	  

	
	try{
		echo($mailer->send($message));
	}
	catch(Exception $e){
		echo($e->getMessage());
	}
	exit;
}
 
?>
<?php $senderName		= $_POST['senderName'];$senderEmail	= $_POST['senderEmail'];$senderPhone	= $_POST['senderPhone'];$senderMessage	= mysql_escape_string($_POST['senderMessage']);$siteName		= "your_site_name.com";//$to 			= "ntuorientation@gmail.com";$to 			= "azure820529@gmail.com";$headers  		= "MIME-Version: 1.0\r\n"; $headers 		.= "Content-type: text/html; charset=iso-8859-1\r\n";$headers 		.= "From: " . $siteName ." \n";$headers 		.= "Reply-To: " . $senderEmail . "\n\n";$toSubject 		= "Message from $senderName via $siteName";$emailBody 		= "<strong>From</strong>: $senderName <br />				<strong>Email</strong>: $senderEmail <br /> 				<strong>Phone</strong>: $senderPhone <br /> <br />				<strong>Message</strong>: <br /><br />				". nl2br($senderMessage);  $message 		= $emailBody;$okMsg = "";if( $to != "azure820529@gmail.com" ){    $ok 		= mail($to, $toSubject, $message, $headers);}else{    $ok         = false;    $okMsg      = "Please change the '" . $to . "' to your own email address!"; }    if($ok){	$okMsg = "";}else{	if( $okMsg != "" )$okMsg = "SERVER BUSY, TRY AGAIN LATER! THANK YOU!";	}$result 	= array(                          'result' => $ok,                         'msg' => $okMsg);echo json_encode($result);?>
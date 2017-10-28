<?php

//This assignment shows how to send emails from php scripts
//php mail function enable us to send mail,htmlfile,attachemnt with message

ini_set("sendmail_from", "youusername@gmail.com");

$to = "xyx@lnmiit.ac.in";//change receiver address

$subject = "Mail send from php script";
$message = "This is my assignment.";
$header  = "yourusername@gmail.com \r\n";

$result = mail($to, $subject, $message, $header);

//mail function has four parameters
//1)mail address of reciever
//subject of mail
//messasge the reciver wil get
//header

if ($result == true) {

	echo "Message sent successfully...";
} else {
	echo "Sorry, unable to send mail...";
}

?>

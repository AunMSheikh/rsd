<?php

	if(isset($_POST['email2'])) {

    	//redacted email address was using valid one
		$email_to = "----@email.com";
    	$email_subject = "Testing mail.php script";

	}
    	// validation expected data exists
    if( !isset($_POST['name2']) || !isset($_POST['email2']) || !isset($_POST['phone2']) || !isset($_POST['message2'])) {
			echo "error with inputs";
   	}
	
    $name = $_POST['name2']; //required
    $email_from = $_POST['email2']; // required
    $telephone = $_POST['phone2']; // required
    $message = $_POST['message2']; // required



    $email_message .= "Name: ".$name."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Telephone: ".$phone."\n";
    $email_message .= "Message: ".$message."\n";
 	
	// create email headers
	$headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from;
	mail($email_to, $email_subject, $email_message, $headers);
	header('Location: index.html');
	

?>

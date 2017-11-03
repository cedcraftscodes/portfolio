<?php 
if(isset($_POST['action']) && !empty($_POST['action']))
{

	$action = $_POST['action'];
	switch ($action) {
		case 'submit_resume':
		submit_resume();
		break;


		default:
				# code...
		break;
	}
}


function secure($str){
	return strip_tags(trim(htmlspecialchars($str)));
}


function ContainsNumbers($String){
	return preg_match('/\\d/', $String) > 0;
}




function submit_resume(){


	if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['message']) && !empty($_POST['message'])){
		$email = secure($_POST['email']);
		$message_send = secure($_POST['message']);

		$to = 'icorrelate@gmail.com';
		$subject = 'Your request is received!';
		$from = 'contact@cedriccoloma.com';
		 
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
		// Create email headers
		$headers .= 'From: Cedric Coloma<'.$from.">\r\n";
		// Compose a simple HTML email message
		$message = file_get_contents("emailtemplates/resume-email.html");

		// Sending email
		if(mail($to, $subject, $message, $headers)){
		    $response = array('status' => "success" , 'message' => "Please check your email. If you can not find it, please check your spam folder.");
		} else{
		    $response = array('status' => "error" , 'message' => "Unable to send email. Please try again. ");
		}



		
	}else{

		$response = array('status' => "error" , 'message' => "Please input valid email and message!");
	}


	echo json_encode($response);


}




?>
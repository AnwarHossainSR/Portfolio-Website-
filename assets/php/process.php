<?php 

	require_once 'session.php';

	
	 //Registration handle
	if (isset($_POST['action']) && $_POST['action'] == 'contact') {
	 	$name = $_POST['name'];
	 	$email = $_POST['email'];
	 	$subject = $_POST['subject'];
	 	$message = $_POST['message'];
 		if ($cuser->contactForm($name,$email,$subject,$message)) {
 			try{
 				$response = array('status_response'  => 'success');
				echo json_encode($response); 
 			}catch (Exception $e) {
	 			$response = array('status_response'  => 'error');
				echo json_encode($response);
	 		}	  
 		}
 	}

 ?>


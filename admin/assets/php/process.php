<?php 

	require_once 'session.php';

	
	 //checking about ajax request handle

	 if(isset($_POST['action']) && $_POST['action'] == 'load_data'){
		$row = $cuser->loadAbout(1);
		echo json_encode($row);
	}

	//Handle profile update ajax request

	if(isset($_FILES['image'])){
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$about = $_POST['about'];
		$oldimage = $_POST['oldimage'];
		$folder = 'uploads/';
		if(isset($_FILES['image']['name']) && ($_FILES['image']['name'] !== "")){
			$newimage = $folder . $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
			if($oldimage != null){
				unlink($oldimage);
			}
		}else{
			$newimage = $oldimage;
		}
		$cuser->updateProfile($fullname,$username,$phone,$email,$newimage,$about,1);
		//$cuser->notification($cid,'admin','Profile Updated');
	}


 ?>


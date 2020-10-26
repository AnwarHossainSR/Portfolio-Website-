<?php 
	require_once 'admin-db.php';
	$admin = new Admin();
	session_start();

	/*//Login Ajax request handle for admin
	 if (isset($_POST['action']) && $_POST['action'] == 'admin-login') {
	 	$username=$admin->testInput($_POST['username']);
	 	$pass=$admin->testInput($_POST['password']);

	 	$hpass=sha1($pass);

	 	$loggedInAdmin = $admin->adminLogin($username,$hpass);

	 	if ($loggedInAdmin != null) {
	 		$response = array('status_response'  => 'success');
			echo json_encode($response);
	 		//echo "success";
	 		$_SESSION['username']=$username;
	 	}else{
	 		$response = array('status_response'  => 'error');
			echo json_encode($response);
	 		//echo $admin->showMessage('danger','Username or password is incorrect!!');
	 	} 	
	 }

	 //Fetch All User Ajax request handle for admin
	 if (isset($_POST['action']) && $_POST['action'] == 'fetch_Users') {
	 	$output = '';
	 	$data = $admin->fetchUsers(0);
	 	$path = '../assets/php/';

	 	if ($data) {
	 		$output .= '<table class="table table-striped bg-light text-center table-hover table-borderless">
	 		            <thead>
	 			            <tr>
	 				            <th>Id</th>
	 				            <th>Name</th>
	 				            <th>Image</th>
	 				            <th>Email</th>
	 				            <th>Phone</th>
	 				            <th>Gender</th>
	 				            <th>Verified</th>
	 				            <th>Action</th>
	 			            </tr>
	 		            </thead>
	 		            <tbody>';
	 		foreach ($data as $row) {
	 			if ($row['photo'] != '') {
	 				$uphoto = $path.$row['photo'];
	 			} else {
	 				$uphoto = '../assets/img/profile-demo.png';
	 			}
	 			if ($row['verified'] == 1) {
	 				$verify = "Verified";
	 			} else {
	 				$verify = "Unverified";
	 			}
	 			
	 		    $output .= '<tr>
	 				            <td>'.$row['id'].'</td>
	 				            <td>'.$row['name'].'</td>
	 				            <td><img src="'.$uphoto.'" class="rounded-circle" width="80px"></td>
	 				            <td>'.$row['email'].'</td>
	 				            <td>'.$row['phone'].'</td>
	 				            <td>'.$row['gender'].'</td>
	 				            <td>'.$verify.'</td>
	 				            <td>
	 				            	<a href="#" id="'.$row['id'].'" title="View Details" class="text-primary usersDetailsIcon" data-toggle="modal" data-target="#showUsersDetailsModal"><i class="fas fa-info-circle fa-lg"></i>
	 				            	</a>&nbsp;&nbsp;
	 				            	<a href="#" id="'.$row['id'].'" title="Delete User" class="text-danger deleteUserIcon"><i class="fas fa-trash-alt fa-lg"></i>
	 				            	</a>&nbsp;&nbsp;
	 				            </td>
	 			            </tr>';
	 		}
	 		$output .= '</tbody>
            			</table>';
            			echo $output;
	 	} else {
	 		echo '<h2 class="text-center text-secondary">No any User registered yet!!</h2>';
	 	}

	 	
	 }
	 //Handle user details ajax request
	if(isset($_POST['info_id'])){
		$id=$_POST['info_id'];
		$row = $admin->detailsUser($id);
		echo json_encode($row);
	}

	//Handle Delete an user  ajax request

	if(isset($_POST['del_id'])){
		$id=$_POST['del_id'];
		$admin->deleteRstoreUser($id,0);
		//$cuser->notification($cid,'admin','Note Deleted');
	}

	//Fetch All Deleted User Ajax request handle for admin
	 if (isset($_POST['action']) && $_POST['action'] == 'fetch__deleted_Users') {
	 	$output = '';
	 	$data = $admin->fetchUsers(1);
	 	$path = '../assets/php/';

	 	if ($data) {
	 		$output .= '<table class="table table-striped bg-light text-center table-hover table-borderless">
	 		            <thead>
	 			            <tr>
	 				            <th>Id</th>
	 				            <th>Name</th>
	 				            <th>Image</th>
	 				            <th>Email</th>
	 				            <th>Phone</th>
	 				            <th>Gender</th>
	 				            <th>Verified</th>
	 				            <th>Action</th>
	 			            </tr>
	 		            </thead>
	 		            <tbody>';
	 		foreach ($data as $row) {
	 			if ($row['photo'] != '') {
	 				$uphoto = $path.$row['photo'];
	 			} else {
	 				$uphoto = '../assets/img/profile-demo.png';
	 			}
	 			if ($row['verified'] == 1) {
	 				$verify = "Verified";
	 			} else {
	 				$verify = "Unverified";
	 			}
	 			
	 		    $output .= '<tr>
	 				            <td>'.$row['id'].'</td>
	 				            <td>'.$row['name'].'</td>
	 				            <td><img src="'.$uphoto.'" class="rounded-circle" width="80px"></td>
	 				            <td>'.$row['email'].'</td>
	 				            <td>'.$row['phone'].'</td>
	 				            <td>'.$row['gender'].'</td>
	 				            <td>'.$verify.'</td>
	 				            <td>
	 				            	<a href="#" id="'.$row['id'].'" title="Restore User" class="text-danger restoreUserIcon"><i class="fas fa-undo fa-lg"></i>
	 				            	</a>
	 				            </td>
	 			            </tr>';
	 		}
	 		$output .= '</tbody>
            			</table>';
            			echo $output;
	 	} else {
	 		echo '<h2 class="text-center text-secondary">No any User deleted yet!!</h2>';
	 	}

	 	
	 }

	 //Handle Resore deleted user  ajax request

	if(isset($_POST['res_id'])){
		$id=$_POST['res_id'];
		$admin->deleteRstoreUser($id,1);
		//$cuser->notification($cid,'admin','Note Deleted');
	}


	//Fetch All Notes Ajax request handle for admin
	 if (isset($_POST['action']) && $_POST['action'] == 'fetch_All_Notes') {
	 	$output = '';
	 	$note = $admin->fetchAllNotes();

	 	if ($note) {
	 		$output .= '<table class="table table-striped bg-light text-center table-hover table-borderless">
	 		            <thead>
	 			            <tr>
	 				            <th>Id</th>
	 				            <th>Username</th>
	 				            <th>User Email</th>
	 				            <th>Note Title</th>
	 				            <th>Note</th>
	 				            <th>Written On</th>
	 				            <th>Updated On</th>
	 				            <th>Action</th>
	 			            </tr>
	 		            </thead>
	 		            <tbody>';
	 		foreach ($note as $row) {
	 		    $output .= '<tr>
	 				            <td>'.$row['id'].'</td>
	 				            <td>'.$row['name'].'</td>
	 				            <td>'.$row['email'].'</td>
	 				            <td>'.$row['title'].'</td>
	 				            <td>'.$row['note'].'</td>
	 				            <td>'.$row['created_at'].'</td>
	 				            <td>'.$row['updated_at'].'</td>
	 				            <td>
	 				            	<a href="#" id="'.$row['id'].'" title="Delete Note" class="text-danger DeleteNoteIcon"><i class="fas fa-trash-alt fa-lg"></i>
	 				            	</a>
	 				            </td>
	 			            </tr>';
	 		}
	 		$output .= '</tbody>
            			</table>';
            			echo $output;
	 	} else {
	 		echo '<h2 class="text-center text-secondary">No any notes written yet!!</h2>';
	 	}

	 	
	 }

	 //Handle Delete a note admin  ajax request

	if(isset($_POST['note_id'])){
		$id=$_POST['note_id'];
		$admin->deleteNoteOfUser($id);
		//$cuser->notification($cid,'admin','Note Deleted');
	}



	//Fetch All Feedback Ajax request handle for admin
	 if (isset($_POST['action']) && $_POST['action'] == 'fetch_Feedback') {
	 	$output = '';
	 	$feedback = $admin->fetchAllFeedback();

	 	if ($feedback) {
	 		$output .= '<table class="table table-striped bg-light text-center table-hover table-borderless">
	 		            <thead>
	 			            <tr>
	 				            <th>FId</th>
	 				            <th>UID</th>
	 				            <th>User Name</th>
	 				            <th>User Email</th>
	 				            <th>Subject</th>
	 				            <th>Feedback</th>
	 				            <th>Sent On</th>
	 				            <th>Action</th>
	 			            </tr>
	 		            </thead>
	 		            <tbody>';
	 		foreach ($feedback as $row) {
	 		    $output .= '<tr>
	 				            <td>'.$row['id'].'</td>
	 				            <td>'.$row['uid'].'</td>
	 				            <td>'.$row['name'].'</td>
	 				            <td>'.$row['email'].'</td>
	 				            <td>'.$row['subject'].'</td>
	 				            <td>'.$row['feedback'].'</td>
	 				            <td>'.$row['created_at'].'</td>
	 				            <td>
	 				            	<a href="#" fid="'.$row['id'].'" uid="'.$row['uid'].'" title="Reply" class="text-success ReplyIconFeedback" data-toggle="modal" data-target="#showReplyModal"><i class="fas fa-reply fa-lg"></i>
	 				            	</a>
	 				            </td>
	 			            </tr>';
	 		}
	 		$output .= '</tbody>
            			</table>';
            			echo $output;
	 	} else {
	 		echo '<h2 class="text-center text-secondary">No any feedback written yet!!</h2>';
	 	}

	 	
	 }

	 //get uid,fid ajax request
	 if (isset($_POST['message'])) {
	 	$message=$admin->testInput($_POST['message']);
	 	$uid=$_POST['uid'];
	 	$fid=$_POST['fid'];

	 	$admin->replyToUser($uid,$message);
	 	$admin->repliedFeedback($fid);
	 }

	 //Handle admin Fetch notification ajax request

	 if(isset($_POST['action']) && $_POST['action'] == 'fetchNotification'){
		$notification = $admin->fetchNotification();
		$output='';
		if ($notification) {
			foreach ($notification as $row) {
			    $output .= '<div class="alert alert-dark" role="alert">
								<button type="button" id="'.$row['id'].'" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="alert-heading text-secondary">New notification</h4>
								<p class="mb-0 lead text-secondary">'.$row['message'].' by <span class="text-primary font-weight-bold ml-1">'.$row['name'].'</span></p>
								<hr class="my-3" style=" border: 1px solid #a29bfe;">
								<p class="mb-2 float-left text-secondary"><b>User E-mail : '.$row['email'].'</b></p>
								<p class="mb-2 float-right">'.$admin->timeInAgo($row['created_at']).'</p>
								<div class="clearfix"></div>
							</div>';
			}
			echo $output;  
		} else {
			echo '<h3 class="text-center text-secondary mt-5">No any new notification</h3>';
		}
		
	}

	 //Handle admin Check notification ajax request
	if(isset($_POST['action']) && $_POST['action'] == 'checkNotification'){
		if ($admin->fetchNotification()) {
			echo '<i class="fas fa-circle fa-sm text-danger"></i>';
		}else{
			echo '';
		}
		
	}

	//Remove notification ajax request handle in admin
	if(isset($_POST['notification_id'])){
		$id = $_POST['notification_id'];
		$admin->removeNotification($id);
	}

*/

 ?>
 
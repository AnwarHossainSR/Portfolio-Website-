<?php 
	
	require_once 'config.php';
	class Admin extends Database{

		//current user method

		public function currentUser($id){
		 	$sql="SELECT * FROM about WHERE id = :id";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['id'=>$id]);
			$result=$stmt->fetch(PDO::FETCH_ASSOC);
			return $result;
		}

		//Update profile of an user
		public function updateProfile($fullname,$userName,$phone,$email,$photo,$about,$id){
		    $sql="UPDATE about SET  fullName = :fullname, userName = :userName,  phone = :phone, email = :email, photo = :photo, aboutMe = :about  WHERE id = :id";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['fullname'=>$fullname,'userName'=>$userName,'phone'=>$phone,'email'=>$email,'photo'=>$photo,'about'=>$about,'id'=>$id]);
			return true;
		}
		
		/*//admin login
		public function adminLogin($username,$password){
			$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['username'=>$username,'password'=>$password]);
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
		}

		//Count total no of Rows
		public function totalCount($table){
			$sql = "SELECT * FROM $table";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$count=$stmt->rowCount();
			return $count;
		}
		//Count total verified and unverified users
		public function verifiedUsers($status){
			$sql = "SELECT * FROM users WHERE verified = :status";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['status'=>$status]);
			$count=$stmt->rowCount();
			return $count;
		}

		//Gender percentage
		public function genderPer(){
			$sql = "SELECT gender, COUNT(*) AS number FROM users WHERE gender != '' GROUP BY gender";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		//Users verified/unverified percentage
		public function userPercentage(){
			$sql = "SELECT verified, COUNT(*) AS number FROM users GROUP BY verified";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		
		//Website hits count fetch
		public function countHits(){
			$sql = "SELECT * FROM visitors";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$count=$stmt->fetch(PDO::FETCH_ASSOC);
			return $count;
		}

		//Fetch all users for admin
		public function fetchUsers($value){
			$sql = "SELECT * FROM users Where deleted != $value";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		//Details of an user

		public function detailsUser($id){
			$sql="SELECT * FROM users WHERE id = :id AND deleted != 0";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['id'=>$id]);
			$result=$stmt->fetch(PDO::FETCH_ASSOC);
			return $result;
		}

		//User delete restor method
		public function deleteRstoreUser($id,$val){
			$sql="UPDATE users SET  deleted = $val WHERE id = :id";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['id'=>$id]);
			return true;
		}
		//Fetch all Notes with user info
		public function fetchAllNotes(){
			$sql = "SELECT notes.id, notes.title, notes.note, notes.created_at, notes.updated_at, users.name, users.email FROM notes INNER JOIN users ON notes.uid = users.id";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		//Delete note for an user 
		public function deleteNoteOfUser($id){
			$sql="DELETE FROM notes WHERE id = :id";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['id'=>$id]);
			$result=$stmt->fetch(PDO::FETCH_ASSOC);
			return $result;
		}
		
		//Fetch all Notes with user info
		public function fetchAllFeedback(){
			$sql = "SELECT feedback.id, feedback.subject, feedback.feedback, feedback.created_at, feedback.uid, users.name, users.email FROM feedback INNER JOIN users ON feedback.uid = users.id WHERE replied !=1 ORDER BY feedback.id DESC";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		//Reply to user
		public function replyToUser($uid,$message){
			$sql="INSERT INTO notification (uid, type, message) VALUES (:uid,'user',:message)";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['uid'=>$uid,'message'=>$message]);
			return true;
		}

		//set feedback replied
		public function repliedFeedback($fid){
			$sql="UPDATE feedback SET  replied = 1 WHERE id = :fid";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['fid'=>$fid]);
			return true;
		}

		//Fetch notification
		public function fetchNotification(){
			$sql = "SELECT notification.id, notification.message, notification.created_at, users.name, users.email FROM notification INNER JOIN users ON notification.uid = users.id WHERE type = 'admin' ORDER BY notification.id DESC LIMIT 20";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		//Remove notification 
		public function removeNotification($id){
			$sql="DELETE FROM notification WHERE id = :id AND type = :type";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['id'=>$id, 'type'=>'admin']);
			return true;
		}

		//fetch all users from database for export
		public function exportAllUsers(){
			$sql="SELECT * FROM users";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute();
			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}*/

	}

 ?>
<?php 

	require_once 'config.php';

	class Auth extends Database{
		//Fetch all notes for a user
		public function loadAbout($id){
			$sql="SELECT * FROM about WHERE id = :id";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['id'=>$id]);
			$result=$stmt->fetch(PDO::FETCH_ASSOC);
			return $result;
		}

		//Fetch all Services
		public function getServices(){
			$sql="SELECT * FROM service";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute();

			$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		//contact form

		public function contactForm($name,$email,$subject,$message){
			$sql="INSERT INTO contact (name, email,subject,message) VALUES (:name,:email,:subject,:message)";
			$stmt=$this->conn->prepare($sql);
			$stmt->execute(['name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message]);
			return true;
		}
	}
 ?>




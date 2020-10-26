<?php 

	class Database{
		/*const USERNAME='mahedisr4@gmail.com';
		const PASSWORD='197119959563';*/
		//dsn=data source network
		private $dsn="mysql:host=localhost;dbname=db_personal_website";
		private $dbuser="root";
		private $dbpass="";
		public $conn;

		public function __construct(){
			try{
				$this->conn = new PDO($this->dsn,$this->dbuser,$this->dbpass);
			}catch(PDOException $e){
				echo 'Error : '.$e->getMessage();
			}
			return $this->conn;
		}

		//Test Input

		public function testInput($data){
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}

		//Display time in ago
		public function timeInAgo($timestamp){
			date_default_timezone_set('Asia/Dhaka');
			$timestamp = strtotime($timestamp)? strtotime($timestamp) : $timestamp;
			$time = time()-$timestamp;

			switch ($time) {
				//seconds
				case $time <= 60:
					return 'just now';
					break;
				//minutes
				case $time >= 60 && $time <=3600:
					return (round($time/60) == 1) ? '1 minute ago' : round($time/60).' minutes ago';
					break;
				//hours
				case $time >= 3600 && $time <=86400:
					return (round($time/3600) == 1) ? '1 hour ago' : round($time/3600).' hours ago';
					break;
				//days
				case $time >= 86400 && $time <=604800:
					return (round($time/86400) == 1) ? '1 day ago' : round($time/86400).' days ago';
					break;
				//week
				case $time >= 604800 && $time <=2600640:
					return (round($time/604800) == 1) ? '1 week ago' : round($time/604800).' weeks ago';
					break;
				//months
				case $time >= 2600640 && $time <=312076680:
					return (round($time/2600640) == 1) ? '1 month ago' : round($time/2600640).' months ago';
					break;
				//year
				case $time >= 312076680:
					return (round($time/312076680) == 1) ? '1 year ago' : round($time/312076680).' years ago';
					break;
			}
		}
	}

 ?>
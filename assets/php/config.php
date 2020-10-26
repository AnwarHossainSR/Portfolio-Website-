<?php 

	class Database{
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

		//alert box message

		public function showMessage($type, $message){
			return '<div class="alert alert-'.$type.' alert-dismissible">
						<button type="button" class="close" 
						data-dismiss="alert">&times;</button>
						<strong class="text-center">'.$message.'</strong>
					</div>';
		}

	}

 ?>
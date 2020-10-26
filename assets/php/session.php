 <?php 

	session_start();
	require_once('Auth.php');
	//current user
	$cuser=new Auth();

	/*if (!isset($_SESSION['user'])) {
		header('location:index.php');
		die;
	}*/
	// c means current
	/*$cemail=$_SESSION['user'];*/

	$service=$cuser->getServices();
	$data=$cuser->loadAbout(1);
	$cemail=$data['email'];
	$cid = $data['id'];
	$cfullname = $data['fullName'];
	$cusername = $data['userName'];
	$caddress = $data['address'];
	$cabout = $data['aboutMe'];
	$cpassword = $data['password'];
	$cphone = $data['phone'];
	$cphoto = $data['photo'];
	$created = $data['created_at'];
	$regon =date('D , M Y',strtotime($created));
	//First Name Only
	//$fname = strtok($cname, " ");
	

 ?>
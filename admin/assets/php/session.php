<?php 

	session_start();
	require_once('admin-db.php');
	//current user
	/*$cuser=new Auth();*/
	$cuser=new Admin();

	/*if (!isset($_SESSION['user'])) {
		header('location:index.php');
		die;
	}*/
	// c means current
	/*$cemail=$_SESSION['user'];*/


	$data=$cuser->currentUser(1);
	$cemail=$data['email'];
	$cid = $data['id'];
	$cfullname = $data['fullName'];
	$cusername = $data['userName'];
	$cabout = $data['aboutMe'];
	$cpassword = $data['password'];
	$cphone = $data['phone'];
	$cphoto = $data['photo'];
	$created = $data['created_at'];
	$regon =date('D , M Y',strtotime($created));
	//First Name Only
	//$fname = strtok($cname, " ");
	

 ?>
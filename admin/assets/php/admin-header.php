<?php
 
  require_once('session.php');


	/*session_start();
	if (!isset($_SESSION['username'])) {
		header('location:index.php');
		exit();
	}*/
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<!-- datatable styling from datatables.net -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
	<!-- datatable styling from datatables.net -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
	<!-- Sweet alert animate Css -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	 <link rel="stylesheet" href="assets/css/admin-style.css">
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="admin-nav p-0">
				<h4 class="text-light text-center p-2"> Admin panel</h4>
				<div class="list-group list-group-flush">
					<a href="admin-dashboard.php" class="list-group-item text-light admin-link">
						<i class="fas fa-chart-pie"></i>&nbsp;&nbsp;Dashboard
					</a>
					<a href="profilePicture.php" class="list-group-item text-light admin-link">
						<i class="fas fa-id-card"></i>&nbsp;&nbsp;Profile
					</a>
					<a href="admin-notification.php" class="list-group-item text-light admin-link">
						<i class="fas fa-bell"></i>&nbsp;&nbsp;Notification&nbsp;<span id="showNotificationIcon"></span>
					</a>
					<a href="admin-notification.php" class="list-group-item text-light admin-link">
						<i class="fas fa-user"></i>&nbsp;&nbsp;Total Request&nbsp;<span id="showNotificationIcon"></span>
					</a>
					<a href="assets/php/admin-action.php?export=excel" class="list-group-item text-light admin-link">
						<i class="fas fa-table"></i>&nbsp;&nbsp;Export Users
					</a>
					<a href="#" class="list-group-item text-light admin-link">
						<i class="fas fa-cog"></i>&nbsp;&nbsp;Setting
					</a>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<div class="col-lg-12 bg-primary pt-2 d-flex justify-content-between">
							<h3 class="text-white" id="open-nav" style="cursor: pointer;">
								<i class="fas fa-bars"></i>
							</h3>
						<h4 class="text-light"></h4>
						<a href="assets/php/logout.php" class="text-light mt-1">
							<i class="fas fa-sign-out-alt">&nbsp;Logout</i>
						</a>
					</div>
				</div>
<?php

	session_start();
	if (isset($_SESSION['username'])) {
		header('location:admin-dashboard.php');
		exit();
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Admin</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
	<!-- Sweet alert animate Css -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	 <style>
	 	*{
	 		margin: 0;padding: 0;box-sizing: border-box;
	 	}
	 	html,body{
	 		height: 100%;
	 	}
	 </style>
</head>
<body class="bg-dark">
	
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center">
			<div class="col-lg-5">
				<div class="card border-danger shadow-lg">
					<div class="card-header bg-danger">
						<h3 class="m-0 text-white"><i class="fas fa-user-cog"></i>&nbsp;Admin Pannel</h3>
					</div>
					<div class="card-body">
						<form action="" method="post" class="px-3" id="admin-login-form">
							<!-- <div id="adminLoginErrod"></div> -->
							<div class="form-group">
								<input type="text" name="username" class="form-control form-control-lg rounded-0" placeholder="Username" required autofocu>
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control form-control-lg rounded-0" placeholder="Password" required>
							</div>
							<div class="form-group">
								<input type="submit" name="admin-login" id="adminLoginBtn" class="btn btn-danger btn-block btn-lg rounded-0" value="Sign In">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.map">
</script> -->
	<!-- bootstrap js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha512-kBFfSXuTKZcABVouRYGnUo35KKa1FBrYgwG4PAx7Z2Heroknm0ca2Fm2TosdrrI356EDHMW383S3ISrwKcVPUw==" crossorigin="anonymous"></script>
	<!-- sweet Alart CDN -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- fontawesom -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="assets/js/script.js"></script>
	<script>
	//Login Request
	$('#adminLoginBtn').click(function(e) {
		if ($('#admin-login-form')[0].checkValidity()){
			e.preventDefault();
			$('#adminLoginBtn').val('Please wait...');
			$.ajax({
				url: 'assets/php/admin-action.php',
				method: 'post',
				data: $('#admin-login-form').serialize()+'&action=admin-login',
				success:function(response){
					$('#adminLoginBtn').val('Sign In');
					var answer = JSON.parse(response);
					switch ( answer.status_response ) {
                    case 'success' :
						Swal.fire({
						  title: 'Successfull!!',
						  html: 'Click Ok to go your dashboard',
						  icon: 'success',
						  confirmButtonText: `OK`,
						}).then((result) => {
						  /* Read more about isConfirmed, isDenied below */
						  if (result.isConfirmed) {
						     window.location='admin-dashboard.php'
						  }
						})                 
                        break;
                    case 'error' :
	                    Swal.fire({
						  title: 'Opps!!',
						  html: 'Username or Password is wrong!!',
						  icon: 'error',
						  confirmButtonText: `OK`,
						}).then((result) => {
						  if (result.isConfirmed) {
						     window.location='index.php'
						  }
						}) 
                        break;
                    }
				}
			})	
		}
	});		
	
	
	</script>
</body>
</html>
<?php 

	require_once'assets/php/admin-header.php';
	require_once'assets/php/admin-db.php';
	$conn= new Admin();

 ?>

 			<div class="row">
 				<div class="col-lg-12">
 					<div class="card-deck text-light text-center mt-3 font-weight-bold">
 						<div class="card bg-primary">
 							<div class="card-header">Total Users</div>
 							<div class="card-body">
 								<h1 class="display-4">
 									
 								</h1>
 							</div>
 						</div>
 						<div class="card bg-danger">
 							<div class="card-header">verified Users</div>
 							<div class="card-body">
 								<h1 class="display-4">
 									
 								</h1>
 							</div>
 						</div>
 						<div class="card bg-success">
 							<div class="card-header">Unverified User</div>
 							<div class="card-body">
 								<h1 class="display-4">
 									
 								</h1>
 							</div>
 						</div>
 						<div class="card bg-info">
 							<div class="card-header">Website hits</div>
 							<div class="card-body">
 								<h1 class="display-4">
 									
 								</h1>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="card-deck text-light text-center mt-3 font-weight-bold">
 						<div class="card bg-danger">
 							<div class="card-header">Total Request</div>
 							<h1 class="card-body display-4">
 								
 							</h1>
 						</div>
 						<div class="card bg-success">
 							<div class="card-header">Feedback</div>
 							<h1 class="card-body display-4">
 								
 							</h1>
 						</div>
 						<div class="card bg-info">
 							<div class="card-header">Total Notification</div>
 							<h1 class="card-body display-4">
 								
 							</h1>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="card-deck my-3">
 						<div class="card border-success">
 							<div class="card-header bg-success text-white text-center lead">Male/Female User's percentage
 							</div>
 							<div id="chartOne" style="width: 99%;height: 400px;"></div>
 						</div>
 					</div>
 				</div>
 			</div>

 			<!-- footer area -->
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
	<!-- Google chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<!-- main js -->
	<script src="assets/js/script.js"></script>

	<script type="text/javascript">
		

		
    </script>


</body>
</html>
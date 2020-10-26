<?php 

	require_once'assets/php/admin-header.php';

 ?>
 	<h2 class="text-center py-3">Admin Profile Information</h2>
 	<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="card rounded-0 mt-3 border-primary">
					<div class="card-header border-primary">
						<ul class="nav nav-tabs card-header-tabs">
							<li >
								<a href="#profile" class="nav-link active font-weight-bold" data-toggle="tab">Profile</a>
							</li>
							<li >
								<a href="#editProfile" class="nav-link font-weight-bold" data-toggle="tab">Edit Profile</a>
							</li>
							<li >
								<a href="#changePass" class="nav-link font-weight-bold" data-toggle="tab">Change Password</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content">
							<!-- profile tab content start -->
							<div class="tab-pane container active" id="profile">
								<div id="verifyEmailAlert"></div>
								<div class="card-deck">
									<div class="card border-primary">
										<div class="card-header bg-primary text-center text-light lead">
												User Id : <?= $cid; ?>	
										</div>
										<div class="card-body">
											<p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;">
												<b>Full Name : </b><?= $cfullname; ?>
											</p>
											<p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;">
												<b>Username : </b><?= $cusername; ?>
											</p>
											<p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;">
												<b>Email : </b><?= $cemail; ?>
											</p>
											<p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;">
												<b>Phone : </b><?= $cphone; ?>
											</p>
											<p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;">
												<b>About Me : </b><?= $cabout; ?>
											</p>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="card border-primary align-self-center">
										<?php if (!$cphoto):?>
											<img src="assets/img/profile-demo.png" class="img-thumbnail img-fluid" style="width: 480px;">
										<?php else: ?>
											<img src="<?= 'assets/php/'. $cphoto; ?>" class="img-thumbnail img-fluid" style="width: 480px;">
										<?php endif;?>
									</div>
								</div>
							</div>
							<!-- profile tab content end -->
							<!-- Edit profile edit content start -->
							<div class="tab-pane container fade" id="editProfile">
								<div class="card-deck">
									<div class="card border-secondary align-self-center">
										<?php if (!$cphoto):?>
											<img src="assets/img/profile-demo.png" class="img-thumbnail img-fluid" style="width: 480px;">
										<?php else: ?>
											<img src="<?= 'assets/php/'. $cphoto; ?>" class="img-thumbnail img-fluid" style="width: 480px;">
										<?php endif;?>
									</div>
									<div class="card border-secondary">
										<form action="" method="post" class="px-3 mt-2" id="profile-update-form" enctype="multipart/form-data">
											<input type="hidden" name="oldimage" value="<?= $cphoto; ?>">
											<div class="form-group m-0">
												<label for="profilePhoto" class="m-1">Upload Profile Image</label>
												<input type="file" name="image" id="profilePhoto">
											</div>
											<div class="form-group m-0">
												<label for="name" class="m-1">Full Name</label>
												<input type="text" name="fullname" id="fullname" class="form-control" value="<?= $cfullname; ?>">
											</div>
											<div class="form-group m-0">
												<label for="name" class="m-1">User Name</label>
												<input type="text" name="username" id="username" class="form-control" value="<?= $cusername; ?>">
											</div>
											<div class="form-group m-0">
												<label for="phone" class="m-1 ">Email</label>
												<input type="text" name="email" class="form-control" id="email" placeholder="phone" value="<?= $cemail; ?>">
											</div>
											<div class="form-group m-0">
												<label for="phone" class="m-1 ">Phone</label>
												<input type="text" name="phone" class="form-control" id="phone" placeholder="phone" value="<?= $cphone; ?>">
											</div>
											<div class="form-group m-0">
												<label for="name" class="m-1">About</label>
												<input type="text" name="about" id="about" class="form-control" value="<?= $cabout; ?>">
											</div>
											<div class="mt-2">
												<input type="submit" name="profile_update" value="Update Profile" id="profile-update" class="btn btn-primary btn-block" id="profleUpdateBtn">
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- Edit profile tab content end -->
							<!-- Change Password tab content end -->
							<div class="tab-pane container fade" id="changePass">
								<div class="card-deck">
									<div class="card border-secondary">
										<div class="card-header bg-primary text-white text-center">
											Change Password
										</div>
										<form action="" method="post" class="px-3 mt-2" id="change-pass-form">
											<div class="form-group m-2">
												<label for="curpass" class="m-1">Current Password</label>
												<input type="password" name="curpass" id="curpass" class="form-control form-control-lg" required minlength="5">
											</div>
											<div class="form-group m-2">
												<label for="newpass" class="m-1">New Password</label>
												<input type="password" name="newpass" id="newpass" class="form-control form-control-lg" required minlength="5">
											</div>
											<div class="form-group m-2">
												<label for="cnewpass" class="m-1">Confirm Password</label>
												<input type="password" name="cnewpass" id="cnewpass" class="form-control form-control-lg" required minlength="5">
											</div>
											<div class="mt-2">
												<input type="submit" name="changepass" value="Change Password" class="btn btn-primary btn-block" id="changePassBtn">
											</div>
										</form>
									</div>
									<div class="card border-secondary align-self-center">
										<img src="assets/img/password-change.jpg" class="img-thumbnail img-fluid" style="width: 408px;">
									</div>
								</div>
							</div>
							<!-- Change Password tab content end -->
						</div>
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
	<!-- datatable styling from datatables.net -->
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
	<!-- fontawesom -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="assets/js/script.js"></script>

	<script>
		jQuery(document).ready(function($) {
			//profile update ajx request
			$('#profile-update-form').submit(function(event) {
		    	event.preventDefault();
					$.ajax({
				    	url: 'assets/php/process.php',
				    	method: 'post',
				    	processData: false,
				    	contentType: false,
				    	cache: false,
				    	data: new FormData(this),
				    	success:function(response){
			    			if (result.isConfirmed){
			    				location.reload();
							}
				    	}
				    });
				});
		});
	</script>
</body>
</html>


$(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

$(document).ready(function() {
	
	//navbar hide jquery
	$('#open-nav').click(function(event) {
		$('.admin-nav').toggleClass('animate');
	});

	//Check notification request ajax
			checkNotification();
			function checkNotification(){
				$.ajax({
					url: 'assets/php/admin-action.php',
					type: 'POST',
					data: { action: 'checkNotification' },
					success:function(response){
						/*$('#showNotification').html(response);*/
						$('#showNotificationIcon').html(response);
					}
				});
			}
	
});

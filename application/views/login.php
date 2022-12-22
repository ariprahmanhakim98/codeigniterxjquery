<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Ajax Login using jQuery</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="login-panel panel panel-primary" style="width: 300px; margin-left: auto; margin-right: auto; margin-top: 100px;">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Login
				</h3>
			</div>
			<div class="panel-body">
				<form id="logForm">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="Username" type="text" name="username">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" type="password" name="password">
						</div>
						<button type="submit" class="btn btn-lg btn-primary btn-block"><span id="logText"></span></button>
					</fieldset>
				</form>
			</div>
			<div id="responseDiv" class="alert text-center" style="margin:15px; display:none;">
				<button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
				<span id="message"></span>
			</div>
		</div>		
		<div class="text-center" style="margin-top: 15px">
			Belum punya akun? <a href="<?php echo base_url() ?>register">Silahkan Register</a>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#logText').html('Login');
			$('#logForm').submit(function(e){
				e.preventDefault();
				$('#logText').html('Checking...');
				var url = '<?php echo base_url(); ?>';
				var user = $('#logForm').serialize();
				var login = function(){
					$.ajax({
						type: 'POST',
						url: url + 'user/login',
						dataType: 'json',
						data: user,
						success:function(response){
							$('#message').html(response.message);
							$('#logText').html('Login');
							if(response.error){
								$('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
							}
							else{
								$('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
								$('#logForm')[0].reset();
								setTimeout(function(){
									location.reload();
								}, 3000);
							}
						}
					});
				};
				setTimeout(login, 3000);
			});

			$(document).on('click', '#clearMsg', function(){
				$('#responseDiv').hide();
			});
		});
	</script>
</body>
</html>
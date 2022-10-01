<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Register-TIENDITA';
include('includes/head.php');  ?>
<body style="background-color: #666666;">
	
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                
				<div class="login100-more" style="background-image: url('assets/images/bg-01.jpg');">
				</div>
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Register
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Repeat Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							
						</div>

						<div>
							<a href="index.php" class="txt1">
								to login
							</a>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn btn btn-success" type="button">
							Register
						</button>
					</div>
				</form>

			</div>
		</div>
	</div>
	
	

	
<?php include('includes/footer.php'); ?>

</body>
</html>

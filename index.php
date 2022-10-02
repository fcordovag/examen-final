<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: store/");
    exit;
}
$title = 'Login-TIENDITA';
include('includes/head.php'); ?>
<body  style="background-color: #fff;">
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" id="myFormLogin" name="myFormLogin" onsubmit="event.preventDefault(); processLogin();">
                <span class="login100-form-title p-b-43">
                    Login to continue
                </span>
                
                
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" id="email" value="email@email.com">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>
                
                
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" id="pass" value="123456">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="register.php" class="txt1">
                            Register?
                        </a>
                    </div>
                </div>
        

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
                
                <div class="text-center p-t-46 p-b-20">
                    <span class="txt2">
                        or sign up using
                    </span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('assets/images/first.jpg');">
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
<script>
	function processLogin()
	{
        console.log('INICIAMOS')
		var email = document.getElementById("email").value;
		var form = $("#myFormLogin");
		console.log(form)
		if(email!=""){
			$(':input[type="submit"]').prop('disabled', true);
			$.ajax({
				type  : 'POST',
				url   : './api/crud/login.php',
				data  : form.serialize(),
				beforeSend: function(){
					
				},
				success :  function(result){
                    console.log(result)
					if(result == 'OK'){
						swal("Bien hecho!", "Te estamos redirigendo a la tienda !", "success");
						setTimeout(
							function() {
								window.location.href = 'store/';
							}, 4000);
					}
					if(result != 'OK'){
						swal("Error !", "Revisa tu usuario y contraseña, o ve al nuestro formulario de registro !", "error");
						$(':input[type="submit"]').prop('disabled', false);
					}
				}
			});
		}
	}
</script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Login-TIENDITA';
$user = 'cordova2312@gmail.com';
include('../includes/head.php'); ?>
<body>
	
<?php include('nav.php'); ?>

<div class="container">
  <h1 class="mt-4 text-center">Mis compras</h1>
  <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Fecha compra</th>
                    <th scope="col">Monto compra</th>
                    <th scope="col">Ver detalle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                </tr>
            </tbody>
        </table>
    </div><!-- End Card Item -->
</div>
	
<?php include('../includes/footer.php'); ?>
<script>
    function processForm()
    {
        console.log('holaaa')
        window.location.href = "store/index.php";
    }
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Login-TIENDITA';
$user = 'cordova2312@gmail.com';
include('../includes/head.php'); 
require_once('../api/crud/products_user.php');
?>
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
                <?php foreach ($products as $key => $product) { ?>
                <tr>
                    <td scope="row"><?php echo $product->id; ?></td> 
                    <td scope="row"><?php echo $product->name; ?></td> 
                    <td scope="row"><?php echo $product->created_at; ?></td> 
                    <td scope="row">$ <?php echo number_format($product->price); ?></td> 
                    <td class="text-center"><i class="bi bi-file-earmark-pdf" style="font-size:24px"></i></td>
                <?php } ?>
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
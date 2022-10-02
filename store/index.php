<?php
session_start();
if(!isset($_SESSION["loggedin"]) && !$_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
require_once('../api/crud/products.php');
//print_r($products);
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Login-TIENDITA';
$user = 'cordova2312@gmail.com';
include('../includes/head.php'); ?>
<body>
	
<?php include('nav.php'); ?>

<div class="container">
  <h1 class="mt-12">Lista de productos</h1>
    <div class="row">
    <?php foreach ($products as $key => $product) { ?>
        <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" style="padding-bottom: 1em;">
            <div class="card">
                <div class="card-img">
                    <img src="../assets/images/products/<?php echo $product->image;?>" alt="<?php echo $product->name; ?>" class="img-fluid">
                </div>
                <h3 class="text-center"><?php echo $product->name; ?></h3>
                <h5 class="text-center">Precio <?php echo number_format($product->price); ?></h5>
                <h5 class="text-center" style="font-size:14px;color:green">Stock <?php echo $product->stock; ?></h5>
                <p style="font-size:11px;padding: 1em;"><?php echo $product->description; ?></p>
                <button type="submit" class="btn btn-outline-success" onclick="functionToExecute('<?php echo $product->id; ?>','<?php echo $product->name; ?>','<?php echo $product->price; ?>')">COMPRAR</button>
            </div>
        </div><!-- End Card Item -->
    <?php } ?>
    </div>
</div>
<?php include('../includes/footer.php'); ?>
<script>
    function functionToExecute(id, product, price)
    {
        swal({
            title: "Compra ",
            text: "Estas comprando las "+product+" por un valor de "+price,
            icon: "success",
            buttons: true,
            successMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Agregamos el producto a tu lista de compras", {
                    icon: "success",
                });
                $.ajax({
				type  : 'POST',
				url   : '../api/crud/compra.php',
				data  : {'id':id},
				beforeSend: function(){
					
				},
				success :  function(result){
                    console.log(result)
					if(result == 'OK'){
						swal("Bien hecho!", "Te estamos redirigendo a la tienda !", "success");
						setTimeout(
							function() {
								window.location.href = 'compras.php';
							}, 4000);
					}
					if(result != 'OK'){
						swal("Error !", "Revisa tu usuario y contraseña, o ve al nuestro formulario de registro !", "error");
						$(':input[type="submit"]').prop('disabled', false);
					}
				}
			});
                    
            } else {
                swal("¡ Que lamentable que te arrepientas de esta compra !");
            }
        });
    }
</script>
</body>
</html>
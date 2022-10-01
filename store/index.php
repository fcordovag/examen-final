
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Login-TIENDITA';
$user = 'cordova2312@gmail.com';
include('../includes/head.php'); ?>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../assets/images/bg-01.jpg" alt="..." height="36">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Productos</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $user; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Mis compras</a></li>
                <li><a class="dropdown-item" href="#">Mis datos</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <h1 class="mt-4">Agregar Destinos</h1>
  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="card">
        <div class="card-img">
        <img src="../assets/images/products/destinos.jpg" alt="" class="img-fluid">
        </div>
        <h3><a href="europa.html" class="stretched-link">Europa</a></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos at porro natus impedit? Quisquam placeat eaque, maiores quia magnam exercitationem quaerat harum culpa nulla accusamus molestiae? Eligendi fuga deserunt dolores?</p>
    </div>
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
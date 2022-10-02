
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Login-TIENDITA';
$user = 'cordova2312@gmail.com';
include('../includes/head.php'); ?>
<body>
	
<?php include('nav.php'); ?>

<div class="container">
    <h1 class="mt-4">Mis Datos</h1>
    <form>
        <div class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
    </form>
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
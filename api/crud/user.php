<?php
//CREATED USER
require_once("../db/db.php");
if(isset($_POST['idCliente'])){
    $_POST['nombreCliente'];
    $_POST['apellidoCliente'];
    $_POST['rutCliente'];
    $_POST['tipoSeguro'];
    $_POST['edad'];
    $resp = Db::getInstance()->insertData("UPDATE clientes SET nombre=:nombre,apellido=:apellido,rut=:rut,seguro=:seguro,edad=:edad WHERE id=:id",[
        ":nombre"   => $_POST['nombreCliente'], 
        ":apellido" => $_POST['apellidoCliente'], 
        ":rut"      => $_POST['rutCliente'], 
        ":seguro"   => $_POST['tipoSeguro'], 
        ":edad"     => $_POST['edad'],
        ":id"       => $_POST['idCliente'],
    ]);
    if($resp == 1){
        echo 'OK';exit;
    }
    echo 'NOK';exit;
}
if(!isset($_POST['idCliente'])){
    $_POST['name'];
    $_POST['email'];
    $_POST['pass'];
    $resp = Db::getInstance()->insertData("INSERT INTO users(name, email, pass) VALUES (:name, :email, :pass)",[
        ":name"     => $_POST['name'], 
        ":email"    => $_POST['email'], 
        ":pass"     => password_hash($_POST['pass'], PASSWORD_DEFAULT)
    ]);
    if($resp == 1){
        echo 'OK';exit;
    }
    echo 'NOK';exit;
}
<?php
session_start();
require_once("../DB/db.php");
$_POST['id'];
$_SESSION["client"];
$resp = Db::getInstance()->insertData("INSERT INTO shoppings(user_id, product_id) VALUES (:user_id, :product_id)",[
    ":user_id"      => $_SESSION["client"], 
    ":product_id"   => $_POST['id']
]);
if($resp == 1){
    echo 'OK';
}
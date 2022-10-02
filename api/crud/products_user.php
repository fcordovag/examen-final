<?php
session_start();
require_once("../api/DB/db.php");
$products   = null;
$query      = "SELECT * FROM `shoppings` AS a INNER JOIN products AS b ON a.product_id = b.id WHERE a.user_id = :user_id";
$products   = Db::getInstance()->query($query,[":user_id" =>$_SESSION["client"]]);
return $products;
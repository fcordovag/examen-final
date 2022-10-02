<?php
require_once("../api/DB/db.php");
$products = null;
$query = "SELECT id, name, description, price, image, stock, created_at FROM products";
$products = Db::getInstance()->query($query,[]);
return $products;
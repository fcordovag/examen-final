<?php
//LOGIN
require_once("../db/db.php");
$_POST['email'];
$_POST['pass'];
$resp = Db::getInstance()->query("SELECT id,name, email, pass  FROM users WHERE email = :email",[
    ":email"     => $_POST['email']
]);
if($resp){
    if(password_verify($_POST['pass'], $resp[0]->pass)){
        session_start();
        $_SESSION["loggedin"]   = true;
        $_SESSION["email"]      = $resp[0]->email;
        $_SESSION["name"]       = $resp[0]->name;
        $_SESSION["client"]     = $resp[0]->id;
        echo trim('OK');exit;
    }
    echo 'NOK';exit;
}
echo 'NOK';exit;
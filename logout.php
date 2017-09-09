<?php

session_start();
unset($_SESSION['login_user']);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
unset($_SESSION['user_phone']); 
unset($_SESSION['device_phone']); 
header("Location: index.php");


?> 
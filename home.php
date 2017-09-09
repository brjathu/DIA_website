<?php
include 'includes/debug.php';
   include "includes/connection.php";
   session_start(); 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "welcome ".$_SESSION['login_user'];
echo "your phone number  ".$_SESSION['user_phone'];
echo "device phone number  ".$_SESSION['device_phone'];
?>


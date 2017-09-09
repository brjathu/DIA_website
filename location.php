<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


    <?php
        include 'includes/debug.php';
        include "includes/connection.php";


        $lat = $_GET['lat'];
        $lng = $_GET['lng'];
        $phone = $_GET['phone'];

        $sql = "UPDATE location SET latitude=".$lat.",longtitude=".$lng." WHERE user_phone=".$phone."";


        echo $sql;

        if ($conn->query($sql) === TRUE) {
            echo "<br> record updated successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

       
        ?>
    </body>
</html>

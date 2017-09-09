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


        $temprature = $_GET['temprature'];
        $moisture = $_GET['moisture'];
        $ph = $_GET['ph'];
        $phone = $_GET['phone'];
        
        
        //ithers
        $light = $_GET['light'];
        

        $date = date('m/d/Y h:i:s', time());

        echo $date;
        echo "<br>";

        $sql = "INSERT INTO data (phone_num, temprature, moisture,ph) VALUES ('" . $phone . "', '" . $temprature . "', '" . $moisture . " ','" . $ph . "')";


        echo $sql;

        if ($conn->query($sql) === TRUE) {
            echo "<br>New record created successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        echo "<br>";
        echo "phone " . $phone;
        echo "<br>";
        echo "temprature " . $temprature;
        echo "<br>";
        echo "moisture " . $moisture;
        echo "<br>";
        echo "ph " . $ph;
        ?>
    </body>
</html>

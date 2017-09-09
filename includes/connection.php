 <?php
        $servername = "localhost";
        $username = "root";
        $password = "r0776914191";
        $dbname = "DIA";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
//        echo "Connected successfully<br>";
        
        
?>
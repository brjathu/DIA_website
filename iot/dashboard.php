<!doctype html>
<?php
   session_start(); 
   
   if(!isset($_SESSION['login_user'])){ //if login in session is not set
    header("Location: ../index.php");
}
   ?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Welcome To DIA</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
    <script type="text/javascript" src="../includes/fusioncharts/js/fusioncharts.js"></script>
    <script type="text/javascript" src="../includes/fusioncharts/js/themes/fusioncharts.theme.ocean.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-3.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Digital Irrigation and Automation
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="control.php">
                        <i class="pe-7s-note2"></i>
                        <p>Controls</p>
                    </a>
                </li>
               
               <li>
                   <a href="weather.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Weather Forecast</p>
                    </a>
                </li>
                <li>
                    <a href="maps.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Locations</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">


                    <ul class="nav navbar-nav navbar-right">
                       
                        <li>
                            <a href="../logout.php">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">     
                            <div class="header">
                                <h4 class="title">Temprature Statics</h4>
                                <p class="category">Last 10 reading</p>
                            </div>
                            <div class="content">
   
                                
                                    <div id="temprature_graph" class="ct-chart">
                                    
                                    </div>
                                    
                                
                                </div>
                                
                                    
                                
                                
                                <div class="footer">
                                    <div class="legend">
                                        <br>
                                        <i class="fa fa-circle text-info"></i> Temprature in Celcius
                                      
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Moisture Levels</h4>
                                <p class="category">Last 5 reading</p>
                            </div>
                            <div class="content">
                                <div id="moisture_graph" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Moisture level 
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                        
                       
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">light Level</h4>
                                <p class="category">last 5 Readings</p>
                            </div>
                            <div class="content">
                                <div id="ph_graph" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> pH level 
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                 
                </div>
                
                
                
                
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 ENCT 14
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Digital Irrigation Automation</b> - A smartest way to do agriclture."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>



<?php
// This is a simple example on how to draw a chart using FusionCharts and PHP.
// We have included includes/fusioncharts.php, which contains functions
// to help us easily embed the charts.
/* Include the `fusioncharts.php` file that contains functions  to embed the charts. */

include("../includes/fusioncharts.php");
include '../includes/debug.php';
include "../includes/connection.php";

/* The following 4 code lines contain the database connection information. Alternatively, you can move these code lines to a separate file and include the file here. You can also modify this code based on your database connection. */


// Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect
if ($conn->connect_error) {
    exit("There was an error with your connection: " . $conn->connect_error);
}


$strQuery = "SELECT temprature, date FROM data WHERE phone_num=".$_SESSION['user_phone']." ORDER BY date ASC LIMIT 10";
$result = $conn->query($strQuery) or exit("Error code ({$conn->errno}): {$conn->error}");
if ($result) {
    $arrData = array(
        "chart" => array(
            "caption" => "Temprature of the Plant",
            "paletteColors" => "#0075c2",
            "bgColor" => "#ffffff",
            "borderAlpha" => "20",
            "canvasBorderAlpha" => "0",
            "usePlotGradientColor" => "0",
            "plotBorderAlpha" => "10",
            "showXAxisLine" => "1",
            "xAxisLineColor" => "#999999",
            "showValues" => "1",
            "divlineColor" => "#999999",
            "divLineIsDashed" => "1",
            "showAlternateHGridColor" => "0"
        )
    );
    
    
    

    $arrData["data"] = array();
    while ($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
            "label" => $row["date"],
            "value" => $row["temprature"]
                )
        );
    }
    $jsonEncodedData = json_encode($arrData);
    $columnChart = new FusionCharts("line", "myFirstChart", 850, 300, "temprature_graph", "json", $jsonEncodedData);
    $columnChart->render();
  
} 


$strQuery_moisture = "SELECT moisture, date FROM data WHERE phone_num=".$_SESSION['user_phone']." ORDER BY date ASC LIMIT 5";
//echo $strQuery_moisture;
$result_moisture = $conn->query($strQuery_moisture) or exit("Error code ({$conn->errno}): {$conn->error}");
if ($result_moisture) {
    $arrData_moisture = array(
        "chart1" => array(
            "caption" => "moisture of the Plant",
            "paletteColors" => "#0075c2",
            "bgColor" => "#ffffff",
            "borderAlpha" => "20",
            "canvasBorderAlpha" => "0",
            "usePlotGradientColor" => "0",
            "plotBorderAlpha" => "10",
            "showXAxisLine" => "1",
            "xAxisLineColor" => "#999999",
            "showValues" => "0",
            "divlineColor" => "#999999",
            "divLineIsDashed" => "1",
            "showAlternateHGridColor" => "0"
        )
    );
     
    

    $arrData_moisture["data"] = array();
    while ($row = mysqli_fetch_array($result_moisture)) {
        array_push($arrData_moisture["data"], array(
            "label" => $row["date"],
            "value" => $row["moisture"]
                )
        );
    }
    $jsonEncodedData_moisture = json_encode($arrData_moisture);
    $columnChart_moisture = new FusionCharts("line", "myFirstChart2", 400, 200, "moisture_graph", "json", $jsonEncodedData_moisture);
    $columnChart_moisture->render();
    
}




$strQuery_ph = "SELECT ph, date FROM data WHERE phone_num=".$_SESSION['user_phone']." ORDER BY date ASC LIMIT 5";
//echo $strQuery_ph;
$result_ph = $conn->query($strQuery_ph) or exit("Error code ({$conn->errno}): {$conn->error}");
if ($result_ph) {
    $arrData_ph= array(
        "chart1" => array(
            "caption" => "pH level of the Plant",
            "paletteColors" => "#0075c2",
            "bgColor" => "#ffffff",
            "borderAlpha" => "20",
            "canvasBorderAlpha" => "0",
            "usePlotGradientColor" => "0",
            "plotBorderAlpha" => "10",
            "showXAxisLine" => "1",
            "xAxisLineColor" => "#999999",
            "showValues" => "0",
            "divlineColor" => "#999999",
            "divLineIsDashed" => "1",
            "showAlternateHGridColor" => "0"
        )
    );
     
    

    $arrData_ph["data"] = array();
    while ($row = mysqli_fetch_array($result_ph)) {
        array_push($arrData_ph["data"], array(
            "label" => $row["date"],
            "value" => $row["ph"]
                )
        );
    }
    $jsonEncodedData_ph = json_encode($arrData_ph);
    $columnChart_ph = new FusionCharts("line", "myFirstChart3", 400, 200, "ph_graph", "json", $jsonEncodedData_ph);
    $columnChart_ph->render();
    
}

$conn->close();
?>




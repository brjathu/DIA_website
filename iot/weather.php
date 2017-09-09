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

	<title>DIA</title>

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
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-3.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Digital Irrigation and Automation
                </a>
            </div>

            <ul class="nav">
                <li >
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
               
               <li class="active">
                    <a href="video.php">
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
                    <a class="navbar-brand" href="#">Weather Forecast</a>
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
                    <div class="col-md-8">
                        
                            
                            <div class="content" id="script">
                                <div id="openweathermap-widget-11"></div>
<script src='https://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 11,cityid: '1248991',appid: '6ebf051c270101a10a68ab721521c5ef',units: 'metric',containerid: 'openweathermap-widget-11',  });  (function() {var script = document.createElement('script');script.async = true;script.src = "https://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>
                            </div>
                        
                    </div>
                    

                </div>
            </div>
        </div>

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

    

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
        
<!--        <script src='https://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script>
<script>
    window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
    window.myWidgetParam.push({id: 1,cityid: '1248991',appid: '6ebf051c270101a10a68ab721521c5ef',units: 'metric',containerid: 'openweathermap-widget-1',  });
    (function() {
        script.async = true;
        script.src = "https://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(script, s); 
    })();
</script>-->


</html>

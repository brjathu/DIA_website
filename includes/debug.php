<?php
            set_error_handler("errorHandeler");
            function errorHandeler($errlvl, $errmsg, $errfile, $errline) {
                //echo "<span style='color:red'><b>Error:</b> [$errlvl] $errmsg<br> file: $errfile<br> line:[$errline]</span>";
                echo "<span style='color:red'><b>Error:</b> [$errlvl] $errmsg     line:[$errline]</span>";
            }

            ?> 
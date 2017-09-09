<?php
session_start();
    /* Send an SMS using Twilio. You can run this file 3 different ways:
     *
     * 1. Save it as sendnotifications.php and at the command line, run 
     *         php sendnotifications.php
     *
     * 2. Upload it to a web host and load mywebhost.com/sendnotifications.php 
     *    in a web browser.
     *
     * 3. Download a local server like WAMP, MAMP or XAMPP. Point the web root 
     *    directory to the folder containing this file, and load 
     *    localhost:8888/sendnotifications.php in a web browser.
     */

    // Step 1: Get the Twilio-PHP library from twilio.com/docs/libraries/php, 
    // following the instructions to install it with Composer.
    include 'includes/debug.php';
    require_once "includes/Twilio/autoload.php";
    
    use Twilio\Rest\Client;
    
    $strToSend = $_POST['data'];
    
    echo $strToSend;
    echo $_SESSION['user_phone'];
    echo $_SESSION['login_user'];
    
    // Step 2: set our AccountSid and AuthToken from https://twilio.com/console
    $AccountSid = "AC5f4155833e5f89368e70869cdf67de4c";
    $AuthToken = "df4b1227c382a79162eed2b7f3ad7bdf";
   
    
    // Step 3: instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);
    
    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
    $people = array(
        $_SESSION['user_phone'] => $_SESSION['login_user']
    );

    
    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    foreach ($people as $number => $name) {
       
        $sms = $client->account->messages->create(

            // the number we are sending to - Any phone number
            $number,

            array(
                // Step 6: Change the 'From' number below to be a valid Twilio number 
                // that you've purchased
                'from' => "+12627090607 ", 
                
                // the sms body
                'body' =>  $strToSend
            )
        );

        // Display a confirmation message on the screen
//        echo "Sent message to $name";
        header("location: iot/control.php");
    }

    
?>
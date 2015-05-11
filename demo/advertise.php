<?php
 
require "vendor/autoload.php";

if(is_numeric($_REQUEST['msg']) && $_REQUEST['reporter_uuid'] == "4a67a05a-ebf4-11e4-8b0e-1681e6b88ec1") {

$advertising_messages = array( "Icecream is just arround the corner! Show this text message for a $1 off a cone",
                              "The flavor of the day is Earl Grey - Try it!",
                              "How about a tasty Bonbon sundae"
);



    $account_sid = '[get from twilio]'; 
    $auth_token = '[get from twilio]'; 
    $client = new Services_Twilio($account_sid, $auth_token); 
     
    $client->account->messages->create(array( 
      'To' => "+[insert number]", 
      'From' => "+[use your phone number]", 
      'Body' => $advertising_messages[array_rand($advertising_messages, 1)]   
    ));
  die("1");
} 

die("NO " . $_REQUEST['msg']);
<?php
 
require "vendor/autoload.php";

if(is_numeric($_REQUEST['msg']) && $_REQUEST['reporter_uuid'] == "611a6864-ebf4-11e4-8b0e-1681e6b88ec1") {


    $account_sid = '[get from twilio]'; 
    $auth_token = '[get from twilio]'; 
    $client = new Services_Twilio($account_sid, $auth_token); 
     
    $client->account->messages->create(array( 
      'To' => "+[use your phone number]", 
      'From' => "+[use your phone number]", 
      'Body' => "Warning there is a gas leak in the vicinity" 
    ));
  die("1");
} 

die("NO " . $_REQUEST['msg']);
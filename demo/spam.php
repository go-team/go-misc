<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;


$send_to = array("email@example.com", "another@example.com");


if(true || is_numeric($_REQUEST['msg']) && $_REQUEST['reporter_uuid'] == "4a67a05a-ebf4-11e4-8b0e-1681e6b88ec1") {
  sleep(2);

/*  
This was used to trigger the next demo stage for the in class demo. 
$curl = curl_init();
  // Set some options - we are passing in a useragent too here
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => 'http://marcomontagna.com:3000/set?name=extern_service',
      CURLOPT_USERAGENT => 'Go-Curl'
  ));
  // Send the request & save response to $resp
  $resp = curl_exec($curl);
  // Close request to clear up some resources
  curl_close($curl);
*/


  $mg = new Mailgun("[mail gun key goes here]");
  $domain = "[yourdomain.com]";


  foreach ($send_to as $recipient) {
    $mg->sendMessage($domain, array('from'    => '[sending email @ your domain]', 
                                    'to'      => $recipient, 
                                    'subject' => 'spam sausage spam spam bacon spam tomato and spamm', 
                                    'text'    => "Hi!\n We are go team :)"));
  }



}
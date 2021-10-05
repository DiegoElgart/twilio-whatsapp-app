<?php


require_once "../vendor/autoload.php";
//require "../vendor/input.php";

use Twilio\Rest\Client;




$sid =  getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");


$cellPhone = '+972523926909';

$text="TEST";
$links="google.com";

$sid_array=[];

$twilio = new Client($sid, $token);
$message = $twilio->messages
                  
                  ->create("whatsapp:$cellPhone", // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => "$text + 
                                $links",
                                'provideFeedback'=> true
                               
                              
                           ]
                  );
              
$messageSid = $message->sid;

array_push($sid_array, $messageSid);
print_r($sid_array);
//header('Content-Type: application/json');

/*
echo '<br>';
echo "sid: ";
print($message->sid);

echo '<br>';
echo "status: ";
print($message->status);

echo '<br>';
echo "errorMessage: ";
print($message->errorMessage);
*/


    





?>

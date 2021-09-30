<?php


require_once "../vendor/autoload.php";
//require "../vendor/input.php";

use Twilio\Rest\Client;




$sid =  getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");



//$i= count($_number);
$text="TEST";
$links="google.com";


$twilio = new Client($sid, $token);
$message = $twilio->messages
                  ->create("whatsapp:+972523926909", // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => "$text + 
                                $links",
                               
                              
                           ]
                  );
              
header('Content-Type: application/json');
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

print($message);



?>

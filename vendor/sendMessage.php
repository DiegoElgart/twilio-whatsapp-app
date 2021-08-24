<?php


require_once "../vendor/autoload.php";
require "../vendor/input.php";

use Twilio\Rest\Client;




$sid =  getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");



//$i= count($_number);

for($i=0; $i<= count($numbers);$i++){

$twilio = new Client($sid, $token);
$message = $twilio->messages
                  ->create("whatsapp:$numbers[$i]", // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => "$message + 
                                $links[$i]",
                               
                              
                           ]
                  );
              

print($message->sid);
}
?>

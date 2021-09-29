<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Testing for using HTML in same project</title>
  </head>
  <body>

  <?php

//Initializes autoload, Client from Twilio and gets the 2 variables

require_once "../vendor/autoload.php";
use Twilio\Rest\Client;
$sid =  getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");

//Define variables and set to empty values
  $numbersErr = '';
  $linksErr = '';
  $messageErr = '';
  
  
  // When submit checks if fields are filled, if not prints an error

  if (isset($_POST['submit'])){
    $ok=true;

      if(!isset($_POST['numbers']) || $_POST['numbers']=='' ){
      $ok=false;
      $numbersErr= "Please insert numbers";
       } else {
        $numbers1 = array_filter(explode("\r\n", $_POST["numbers"]?? ""));
        $numbers=preg_replace("/05/","+9725", $numbers1, 1);
       };
     
     if(!isset($_POST['links']) || $_POST['links']==''){
       $ok=false;
       $linksErr= "Please insert links";
     }else{
      $links=array_filter(explode("\r\n",$_POST["links"]??""));
     };

     if(!isset($_POST['message']) || $_POST['message']==''){
       $ok=false;
       $messageErr="Please write a message to send";
     }else{
      $message= $_POST["message"]?? "";
     }

  
  
  
  

  



print_r($numbers);
//if validation is ok

if($ok){

for($i=0; $i<= count($numbers);$i++){

$twilio = new Client($sid, $token);
$message = $twilio->messages
                  ->create("whatsapp:$numbers[$i]", // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => "$message 
                                $links[$i]"
                               
                              
                           ]
                  );
              
print($message->sid);
//$client->setLogLevel('debug');
/*
$feedback = $twilio->messages($sid)
->feedback
->create();
*/

print(json_encode($message));

}
}
}


  ?>


      <form action="" method="post"><br>

      Numbers: <textarea type="text" name="numbers"></textarea>
      <span class="error">* <?php echo $numbersErr;?></span>
  <br><br>
      Links: <textarea type="text" name="links"></textarea>
      <span class="error">* <?php echo $linksErr;?></span>
  <br><br>
      Message: <textarea type="text" name="message"></textarea>
      <span class="error">* <?php echo $messageErr;?></span>
  <br><br>
      <input type="submit" name="submit">

      </form>


  </body>
</html>


<?php

//Ternary is for handling error of empty array
$numbers1=explode("\r\n", $_POST["numbers"]?? "");
$links=explode("\r\n",$_POST["links"]??"");
$message=array($_POST["message"]?? "");
$numbers=preg_replace("/05/","+9725", $numbers1, 1);

$counter= count($numbers);
//echo $counter;
//print_r ($numbers) ;
//print_r ($links);
//print_r($message);

if($numbers[0] !='' && $links[0] !='' && $message[0] !=''){
 } else {
   
    echo "Please fill the empty boxes" ;
  };

/*print_r ($numbers);
echo '<br>';
echo '<br>';
print_r($links);
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do you want to send the message?</title>
</head>
<body>
    <h1>TEST</h1>
<form action="sendMessage.php">
  <h2>Are you sure you want to send whatsapp to <?php echo $counter; ?> persons?</h2>
  <input type="submit" value="Yes">
</form>
</body>
</html>


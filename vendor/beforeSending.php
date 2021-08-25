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

</body>
</html>

<?php


//Ternary is for handling error of empty array
$numbers1=explode("\r\n", $_POST["numbers"]?? "");
$links=explode("\r\n",$_POST["links"]??"");
$message=array($_POST["message"]?? "");

$numbers=preg_replace("/05/","+9725", $numbers1, 1);
//print_r ($numbers) ;
//print_r ($links);

if($numbers !='' && $links !='' && $message !=''){
  } else {
    echo "Please fill the empty boxes" ;
  };

/*print_r ($numbers);
echo '<br>';
echo '<br>';
print_r($links);
*/
?>
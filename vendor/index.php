<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Testing for using HTML in same project</title>
  </head>
  <body>
      <form action="index.php" method="post"><br>
      Numbers: <textarea type="text" name="numbers"> </textarea><br>
      Links: <textarea type="text" name="links"></textarea> <br>
      Message: <textarea type="text" name="message"></textarea><br><br>

      <input type="submit">

      </form>
<?php

$numbers=json_encode(array($_POST["numbers"]));
$links=array($_POST["links"]);
$message=array($_POST["message"]);


/*
print_r($numbers);
print_r($links);
print_r($message);
*/
//$package=array_merge($numbers,$links,$message);

echo $numbers;
//print_r($package);

?>

  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Testing for using HTML in same project</title>
  </head>
  <body>
      <form action="input.php" method="post"><br>
      Numbers: <textarea type="text" name="numbers"> </textarea><br>
      Links: <textarea type="text" name="links"></textarea> <br>
      Message: <textarea type="text" name="message"></textarea><br><br>

      <input type="submit">

      </form>
<?php


//Ternary is for handling error of empty array
$numbers1=explode("\r\n", $_POST["numbers"]?? "");
$links=explode("\r\n",$_POST["links"]??"");
$message=array($_POST["message"]?? "");

$numbers=preg_replace("/05/","+9725", $numbers1, 1);

/*print_r ($numbers);
echo '<br>';
echo '<br>';
print_r($links);
*/
?>

  </body>
</html>

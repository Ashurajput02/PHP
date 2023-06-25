<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="userdata.php" method="get">
<label for="no1">number1</label>
<input type="number" name="num1">
<br><label for="no2">number1</label>
<input type="number" name="num2">
<br>
<input type="submit">
</form> 
<br>   
<?php
echo $_GET["num1"];
// $ash1= $_GET["name"];
// $ash2= $_GET["num2"];
// echo $ash1+$ash2;
?>

</body>

</html>
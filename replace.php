<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $text = "The quick brown fox jumps over the lazy dog";
   $search = "fox";
   $replace = "cat";
   $result = str_replace($search, $replace, $text);
   echo $result;
   
    ?>

</body>
</html>
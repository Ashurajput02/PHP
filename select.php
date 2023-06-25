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
    
$conn=mysqli_connect("localhost","root","","selectversion");
if($conn)
echo"successfull";
else echo"fail";

mysqli_select_db($conn,'selectversion');
$sql="CREATE TABLE ASHUTOSH(
     ID INT(6) PRIMARY KEY AUTO_INCREMENT,
     NAME VARCHAR(60) )";

     $RES=mysqli_query($conn,$sql);

    //  $sql="INSERT INTO `ashutosh`(`NAME`) VALUES ('ashu')";
    //  $result=mysqli_query($conn,$sql);
     if($RES)
     echo"success";
     else
     echo "fail";


     $sql="INSERT INTO `ashutosh`(`NAME`) VALUES ('ashu')";
     $result=mysqli_query($conn,$sql);
     if($result)
     echo"success";
     else
     echo "fail";


     $sql="INSERT INTO ashutosh (`NAME`) VALUES ('jiggi')";
     $result=mysqli_query($conn,$sql);
     if($result)
     echo"success";
     else
     echo "fail";
    

     $sql="INSERT INTO `ashutosh`(`NAME`) VALUES ('sneha')";
     $result=mysqli_query($conn,$sql);
     if($result)
     echo"success";
     else
     echo "fail";

     $sql="SELECT ID, NAME FROM ASHUTOSH
     WHERE NAME='ashu'";
     echo"<br>";


     $result=mysqli_query($conn,$sql);
     if($result)
     echo"success";
     else
     echo "fail";

     if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo"<br>".$row['ID'];
            echo"<br>".$row['NAME'];
        }
     }
     else
     echo"fail";

    ?>

</body>
</html>
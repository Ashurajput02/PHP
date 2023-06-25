<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

    name <input type="text" name="name">
    <br>
    city <input type="text" name="city">
    <br>

    gender <input type="text" name="gen">
    <br>
    physics <input type="number" name="p">
    <br>
    chemistry <input type="number" name="c">
<br>
maths <input type="number" name="m">
<br>
<input type="submit" value="submit" name="submit">
</form>

<?php

if(isset($_REQUEST["submit"])){

    $name=$_POST["name"];
    
    $city=$_POST["city"];
    $gender=$_POST["gen"];
    $p=$_POST["p"];
$c=$_POST["c"];
    $m=$_POST["m"];
    


// echo $name;

$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if($conn)
echo"successfull connection <br>";
else
echo"connection fail <br>";

$dbname="management";
$sql="CREATE DATABASE IF NOT EXISTS $dbname";
$result=mysqli_query($conn,$sql);
if($result)
echo"databse created successfully<br>";
else
echo"database not created<br>";

mysqli_select_db($conn,$dbname);
$sql="CREATE TABLE IF NOT EXISTS student (
      id  INT(6) AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) NOT NULL,
      gender varchar(10) ,
      chemistry INT(3))";

      $result=mysqli_query($conn,$sql);
      if($result)
echo"table created succesfully<br>";
else
echo "table creation error";


$sql="ALTER TABLE student
      ADD COLUMN IF NOT EXISTS math INT(3);
";

$res=mysqli_query($conn,$sql);
if($res)
echo"succesfull";
else
echo "fail".mysqli_error($conn);



$sql="ALTER TABLE student
      ADD COLUMN IF NOT EXISTS physics INT(3)
      AFTER gender;
";

$res=mysqli_query($conn,$sql);
if($res)
echo"succesfull";
else
echo "fail".mysqli_error($conn);


$sql="ALTER TABLE student
      ADD COLUMN IF NOT EXISTS physics INT(3)
      AFTER gender;
";
$sql="ALTER TABLE student
      ADD COLUMN IF NOT EXISTS city varchar(15)
      AFTER gender;
";

$res=mysqli_query($conn,$sql);
if($res)
echo"succesfull";
else
echo "fail".mysqli_error($conn);

$sql="INSERT INTO student(name, city, gender,physics,chemistry,math)VALUES('$name','$city','$gender','$p','$c','$m')";
$result=mysqli_query($conn,$sql);
if($result) 
{
    echo "successfull";
    
}

else{
    echo"fail";

}


$sql="UPDATE student SET gender='male' WHERE id='7' ";
$res=mysqli_query($conn,$sql);

if($res)
echo"successfull";
else
echo"fail";

$sql = "SELECT name, city 
        FROM student
        WHERE physics >= 90";

$result = mysqli_query($conn, $sql);
echo "<table>";
echo "<tr><th>Name</th><th>City</th></tr>";
if (mysqli_num_rows($result) > 0) {
   

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";

}

// $sql = "SELECT DISTINCT name FROM student";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     $names = mysqli_fetch_assoc($result);
//     print_r($names);
// } else {
//     echo "No records found.";
// }

// $sql = "SELECT DISTINCT name FROM student";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     $names = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $names[] = $row['name'];
//     }
//     print_r($names);
//     echo"<br>";
// } else {
//     echo "No records found.";
// }

$sql = "SELECT DISTINCT name FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $names = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<pre>";
    print_r($names);
    echo "</pre>";
} else {
    echo "No records found.";
}


echo"<br>";

echo"<br>";

$sql="SELECT name ,physics,chemistry,math
     FROM student
     WHERE CITY='BIJNOR'";
     
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res) > 0) 
{
    $names = mysqli_fetch_all($res, MYSQLI_ASSOC);
    echo "<pre>";
    print_r($names);
    echo "</pre>";
}

else
echo "error";


$sql="ALTER TABLE student
      ADD COLUMN IF NOT EXISTS durga INT(3),
      ADD COLUMN IF NOT EXISTS MiATA INT(9)
      AFTER name";

$res=mysqli_query($conn,$sql);
if($res)
echo"succesfull";
else
echo "fail".mysqli_error($conn);


$sql = "SELECT name, gen AS gender 
         FROM student 
         WHERE gen='f'";

$sexa=mysqli_query($conn,$sql);

if(mysqli_num_rows($sexa)>0){

    while($row=mysqli_fetch_assoc($sexa)){
        echo $row['name']."<br>";
    }

    }
    else{
        echo"fail";
    }
}

?>

</body>
</html>
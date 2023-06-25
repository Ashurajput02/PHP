<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if($conn)
echo"successfull connection <br>";
else
echo"connection fail <br>";

$dbname="kanak";
$sql="CREATE DATABASE IF NOT EXISTS $dbname";
$result=mysqli_query($conn,$sql);
if($result)
echo"databse created successfully<br>";
else
echo"database not created<br>";

mysqli_select_db($conn,$dbname);
$sql="CREATE TABLE IF NOT EXISTS dhanno (
      id  INT(6) AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) NOT NULL,
      gender varchar(10) ,
      chemistry INT(3))";

      $result=mysqli_query($conn,$sql);
      if($result)
echo"table created succesfully<br>";
else
echo "table creation error";

$sql="ALTER TABLE dhanno
ADD sushi INT(5) AFTER name,
ADD horse INT(8)";
      $result=mysqli_query($conn,$sql);
      if($result){
            echo"success";

      }
      else
      echo"fail";

      ?>
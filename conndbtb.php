<?php
$servername="root";
$hostname="localhost";
$pass="";
$dbname="ash";
$conn=mysqli_connect($hostname,$servername,$pass);
if($conn)
echo "Connection Successfull";
else
echo "Error".mysqli_connect_query();

$sql="CREATE DATABASE IF NOT EXISTS $dbname ";
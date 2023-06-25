
$sql="SELECT name city 
      FROM student
      where physics>=90
      ";
$result=mysqli_query($conn,$sql);

echo "<table>";
echo "<tr>";
echo "<td>";
echo "name";
echo "</td>";

echo "<td>";
echo "city";
echo "</td>";
while($mysqli_num_rows($sql)>0){
$row=mysqli_fetch_assoc($sql);
while($row){
    echo"<tr>";
    echo"<td>";
    echo $row['name'];
    echo"/td";
    echo"<td>";
    echo $row['city'];
    echo"/td";
}
}
echo "</table>";





$sql="SELECT name 
       DISTINCT FROM student";
       $result=mysqli_query($conn,$sql);
       echo "$result";
$result2=mysqli_fetch_assoc($result);
       print_r($result2);

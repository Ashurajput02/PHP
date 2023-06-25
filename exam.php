<?php

var_dump(4==3);


$arr=array(

    "1"=>array("ashu","jiggi"),
    "2"=>array("yash",";vaishnavi")
);

foreach($arr as $id=>$value){
    echo $id;
    echo"<br>";
    foreach($value as $result){
        echo $result;
    }
}
?>
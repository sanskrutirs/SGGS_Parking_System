<?php
$dbhost='localhost:3307';
$dbname='sggs';
$dbusername='root';
$dbpass='';

$conn=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

if($conn){
   echo "connected";
}else{
    echo "Not connected";
}
?>
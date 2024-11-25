<?php
$host="localhost";
$user="root";
$password="";
$db="haha_store";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con){
    die("Connection error:".mysqli_connect_error($con));
}

?>
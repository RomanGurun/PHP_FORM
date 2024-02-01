<?php


$username="localhost";
$name="root";
$password="";
$db="contacts";


$conn=mysqli_connect($username,$name,$password,$db);

if($conn){
    // echo"connection established";
}else{

    echo mysqli_connect_error();
}








?>
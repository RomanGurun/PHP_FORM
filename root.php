<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
body{
    background-color:blue;
}
.container{
    display:flex;
border:solid 2px green;
padding:20px;
justify-content:center;
align-items:center;
border-radius:8px;
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);


}
form{
    width:60%;
border:solid 5px black;
}
form .input {
    width::100%;
color:green;

}

form .input input,textarea{
    width:90%;
    display:block;
}

</style>

<?php
include 'connection.php';
?>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

$name=$_POST['name'];
$email=$_POST['email'];
$concern=$_POST['concern'];
$date=$_POST['dt'];
$sn=90;

$sql="INSERT INTO `contactus22` (`sno`,`name`,`email`,`concern`,`dt`) VALUES('','$name','$email','$concern',current_timestamp())";
$result=mysqli_query($conn,$sql);

if($result){
    echo" <script> confirm('form submitted successfully'); </script>";

}else{
    echo" <script> alert('form fail to submit'); </script>";
}





}



?>



</head>
<body>
    
<div class="container">
<form action="practice.php" method="post">

<div class="input">
<label for="">Enter your name:</label>
<input type="text" name="name" id="" required>
</div>

<div class="input">
<label for="">Enter your email:</label>
<input type="email" name="email" id="">
</div>
<label for="">description:</label>
<div class="input">
<textarea name="concern" id=""></textarea>
</div>

<div class="input">
<label for="">Enter date:</label>
<input type="date" name="dt" id="">
</div>






<button type="submit">Register</button>

</form>






</div>




</body>
</html>
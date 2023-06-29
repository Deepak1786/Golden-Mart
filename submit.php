<?php
$em=$_POST['email'];
$em=$_POST['password']
include("config.php");
$querry="SELECT*from`admin`where `email`=`$em`and`password`=``$pass`";
$result=mysqli_querry ($connect,$querry);
//print_r($result);
if(mysqli_num_rows($result)>0){
    echo"<script>window.location.assign('welcome.php')</script>";
}
else{
    echo"<script>window.location,assign('adminlogin.php?msg=Invalid Credentials')</script>";
}
?>
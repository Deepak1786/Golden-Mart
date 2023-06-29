<?php
if(isset($_POST['btn1'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $contact=sd$_post['contact'];
    //echo $name,password,$email,$contact;
    include("config.php");
    $querry="INSERT into `user`(`username`,`email`,`password`,`contct`) VALUES(`$username`,`$email`,`$password`,`$contact`)";
    //echo $querry;
    $result=mysqli_querry($contact,$querry);
    if($result>0){
        echo"<script>window.location,assign('user_register.php?msg-Register Succesfully!!')</script>";
    }
    else{
        echo"<script>window,location,assign('user_register.php?msg=Error while uploading')</script>"
    }
}
?>
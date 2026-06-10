<?php
include "config.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$tel = $_POST['tel'];
$telhamrah = $_POST['telhamrah'];

if($pass1 == $pass2){
    $sql = "INSERT INTO users (fname,lname,password,email,tel,telhamrah) VALUE ('$fname','$lname','$pass1','$email','$tel','$telhamrah')";
    mysqli_query($conn,$sql);
}else header('location:http://localhost:8888/newproj/rigster.php?msg=پسورد مطابقت ندارد');


?>
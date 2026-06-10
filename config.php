<?php
$conn = mysqli_connect("localhost","root","root","mobir");
//برای مشکل فارسی نویسی
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET character_set_connection = 'utf8'");

mysqli_select_db($conn,"mobir");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

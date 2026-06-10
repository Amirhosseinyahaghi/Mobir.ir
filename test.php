<?php
include "config.php";
session_start();
if(isset($_POST["username"]))
{
    $query = "  
      SELECT * FROM admin_login  
      WHERE admin_name = '".$_POST["username"]."'  
      AND admin_password = '".$_POST["password"]."'  
      ";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['username'] = $_POST['username'];
        echo 'Yes';
    }
    else
    {
        echo 'No';
    }
}
if(isset($_POST["action"]))
{
    unset($_SESSION["username"]);
}
?>
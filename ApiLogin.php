<?php
require_once("connection.php");
$message = array();
if($_SERVER['REQUEST_METHOD']=='GET'){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sqliquery="select username, password from registerUserTb where username='$username' AND password='$password'";
  $sqlirun=mysqli_query($con,$sqliquery);
  if($sqlirun){
    $message[]="logged in";
  }else{
    $message[]="wrong credintials";
  }
  echo json_encode("message"=>$message);
}

 ?>

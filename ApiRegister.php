<?php
require_once("connection.php");
$message = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  $email=$_POST['email'];

        $sqli="select email,username from registerUserTb where email='$email'";
        $q_run=mysqli_query($con,$sqli);
        if(mysqli_num_rows($q_run)>0){
          $message="email exit";
        }else {
            $sqli_querry="insert into registerUserTb(username,password,email)values('$username','$password','$email')";
            $query_run=mysqli_query($con,$sqli_querry);
            if($query_run){
              $message="user registered";
            }else {
              $message="user failed to register";
            }
        }

        echo json_encode(array("response"=>$message));
}



 ?>

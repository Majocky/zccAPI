<?php
include_once("connection.php");
$message="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $membership_number=mysqli_real_escape_string($con,$_POST['membership_number']);
  $national_id=mysqli_real_escape_string($con,$_POST['national_id']);
  $phone_number=mysqli_real_escape_string($con,$_POST['phone_number']);
  $Tabhera=mysqli_real_escape_string($con,$_POST['Tabhera']);
  $circuit=mysqli_real_escape_string($con,$_POST['circuit']);
  $province=mysqli_real_escape_string($con,$_POST['province']);
  $date_of_repantance=mysqli_real_escape_string($con,$_POST['date_of_repantance']);
  $baptised_by=mysqli_real_escape_string($con,$_POST['baptised_by']);
  $usernameid=mysqli_real_escape_string($con,$_POST['usernameid']);

  $query="insert into registerMemberTB(name,membership_number,national_id,phone_number,Tabhera,circuit,province,date_of_repantance,baptised_by,usernameid)
  values('$name','$membership_number','$national_id','$phone_number','$Tabhera','$circuit','$province','$date_of_repantance','$baptised_by','$usernameid')";
  $runquery=mysqli_query($con,$query);
  if($runquery){
    $message="succefully registered".$name;
  }else {
    $message="failed to register";
  }

  echo json_encode(array("message"=>$message));
}

 ?>

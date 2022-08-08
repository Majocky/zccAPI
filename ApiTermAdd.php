<?php
include_once("connection.php");
$message=[];
if($_SERVER['REQUEST_METHOD']=="POST"){
  $term_1=mysqli_real_escape_string($con,$_POST['term_1']);
  $term_2=mysqli_real_escape_string($con,$_POST['term_2']);
  $term_3=mysqli_real_escape_string($con,$_POST['term_3']);
  $amnt=mysqli_real_escape_string($con,$_POST['amnt']);
  $year=mysqli_real_escape_string($con,$_POST['year']);

  $qury="insert into termtb(term_1,term_2,term_3,amnt,year) values('$term_1','$term_2','$term_3','$amnt','$year')";
  $run_query=mysqli_query($con,$qury);
  if($run_query){
    $message="data inserted";
  }else{
      $message="failed to insert data";
  }
  echo json_encode($message);
}


 ?>

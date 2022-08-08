<?php
include_once("connection.php");
$temp= array();
if($_SERVER['REQUEST_METHOD']=='GET'){
  $qurry="select * from registerMemberTB";
  $run_qry=mysqli_query($con,$qurry);
  if(mysqli_num_rows($run_qry)>0){
      while($result=mysqli_fetch_array($run_qry)){
        array_push($temp,array(
                'id' =>$result["id"],
                'name' =>$result["name"],
                'membership_number' =>$result["membership_number"],
                'national_id' =>$result["national_id"],
                'phone_number' =>$result["phone_number"],
                'Tabhera' =>$result["Tabhera"],
                'circuit' =>$result["circuit"],
                'province' =>$result["province"],
                'date_of_repantance' =>$result["date_of_repantance"],
                'baptised_by' =>$result["baptised_by"],
                'usernameid' =>$result["usernameid"],
            ));

      }
      $output = json_encode(array("members"=>$temp));
      print_r($output);
  }


}



 ?>

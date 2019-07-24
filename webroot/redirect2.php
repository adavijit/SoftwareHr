<?php
use Cake\Routing\Router;

  $leaveType= $_POST['leave_type'];
  $status= $_POST['status'];
//   $hName= $_POST['h_name'];
//   $startingDate=date("Y-m-d", strtotime($_POST['starting_date']));
//   $endingDate = date("Y-m-d", strtotime($_POST['ending_date']));
$conn = mysqli_connect("localhost","root","","hr_software");
if(mysqli_query($conn,"INSERT INTO new_leave (leave_type,status)
 VALUES ('$leaveType','$status')")){
     echo "Success";
 }
 else{
     echo "Error";
 }
 

?>
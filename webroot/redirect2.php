<?php
use Cake\Routing\Router;
require 'dbconnect.php';
  $leaveType= $_POST['leave_type'];
  $status= $_POST['status'];
if(mysqli_query($conn,"INSERT INTO new_leave (leave_type,status)
 VALUES ('$leaveType','$status')")){
     echo "Success";
 }
 else{
     echo "Error";
 }
 

?>
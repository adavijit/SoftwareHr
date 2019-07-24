<?php
use Cake\Routing\Router;

  $leaveYear= $_POST['leave_year'];
  $groupName= $_POST['group_name'];
  $hName= $_POST['h_name'];
  $startingDate=date("Y-m-d", strtotime($_POST['starting_date']));
  $endingDate = date("Y-m-d", strtotime($_POST['ending_date']));
$conn = mysqli_connect("localhost","root","","hr_software");
if(mysqli_query($conn,"INSERT INTO set_holiday (leave_year,group_name,h_name,starting_date,ending_date)
 VALUES ('$leaveYear','$groupName','$hName','$startingDate','$endingDate')")){
     echo "Success";
 }
 else{
     echo "Error";
 }
 

?>
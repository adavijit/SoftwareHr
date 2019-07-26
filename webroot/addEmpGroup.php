<?php

require 'dbconnect.php';

$empId= $_POST['employee_id'];
$holiday_id= $_POST['holiday_id'];
$group_name= $_POST['group_name'];
if(mysqli_query($conn,"INSERT INTO emp_grp (grp_name,empId,holiday_id) VALUES('$group_name','$empId','$holiday_id') "))
echo "SUCCESS";
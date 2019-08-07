<?php
require 'dbconnect.php';
// $conn=mysqli_connect('localhost','root','','hr_software');



////////////////////////////////////////////////////

$id=$_POST['aId'];
$changeId=$_POST['changeId'];
$date= date("Y-m-d");
if($changeId==1)
{
    $sql="UPDATE emp_general_info SET emp_status='Inactive', lastWorkingDate='$date' WHERE empId='$id' ";
}
if($changeId==2)
{
    $sql="UPDATE emp_general_info SET emp_status='Active', lastWorkingDate='' WHERE empId='$id' ";
}
if($changeId==3)
{
    
    $sql="DELETE FROM emp_general_info WHERE empId='$id' ";
}
mysqli_query($conn,$sql);
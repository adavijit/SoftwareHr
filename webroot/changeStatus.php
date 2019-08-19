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
if($changeId==4)
{
    echo "$id";

    $sql="DELETE FROM designation WHERE id='$id' ";
}
if($changeId==5)
{
    $sql="UPDATE designation SET designationStatus='Inactive' WHERE id='$id' ";
}
if($changeId==6)
{
    $sql="UPDATE designation SET designationStatus='Active' WHERE id='$id' ";
}
if($changeId==7)
{
    $sql="UPDATE departmenttable SET departmentStatus='Inactive' WHERE id='$id' ";
}
if($changeId==8)
{
    $sql="UPDATE departmenttable SET departmentStatus='Active' WHERE id='$id' ";
}
if($changeId==9)
{
    echo "$id";

    $sql="DELETE FROM departmenttable WHERE id='$id' ";
}
mysqli_query($conn,$sql);

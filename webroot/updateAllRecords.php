<?php
// print_r($_FILES);print_r($_POST);
$id=$_POST['id'];
$conn = mysqli_connect("localhost","root","","hr_software");
$employeeName=$_POST['employeeName'];
$dob=date("Y-m-d",strtotime($_POST['dob']));
$sex=$_POST['sex'];
$nationality=$_POST['nationality'];
$location=$_POST['location'];
$dateOfJoining=date("Y-m-d",strtotime($_POST['dateOfJoining']));
$probationDate=date("Y-m-d",strtotime($_POST['probationDate']));
$bloodGroup=$_POST['bloodGroup'];
$lwd=date("Y-m-d",strtotime($_POST['lwd']));
$emergencyContact=$_POST['emergencyContact'];

$activeStat='Active';
$designation=$_POST['designation'];
$x=4;
if($_POST['temp1']==0 && $_POST['temp2']==0)
{
    $myPhoto= $_FILES['profilePhoto']['name'];
    $myPhotoTemp= $_FILES['profilePhoto']['tmp_name'];
    $photoPath= "upload/".$myPhoto;
    $empGenFile= $_FILES['empGenFile']['name'];
    $empGenFileTemp = $_FILES['empGenFile']['tmp_name'];
    $empGenFilePath ="upload/".$empGenFile;
    
    $sql1="UPDATE emp_general_info SET empName='$employeeName',dob='$dob',nationality='$nationality',photoPath='$photoPath',bloodGroup='$bloodGroup',emergencyContact='$emergencyContact',lastWorkingDate='$lwd',probationCompletionDate='$probationDate',documentPath='$empGenFilePath',sex='$sex',dateOfJoining='$dateOfJoining',designation='$designation' WHERE empId = '$id' ";
if(mysqli_query($conn,$sql1))
{
    if(move_uploaded_file($myPhotoTemp,$photoPath) && move_uploaded_file($empGenFileTemp,$empGenFilePath) )
    {
            echo "UPDATEs SUCCESS";
    }
    else{
        echo "Image and File upload Failed";
    }
    

}
else{
    echo "Error occured";
}
}
if($_POST['temp1']==1 && $_POST['temp2']==1)
{
   
    
    $sql1="UPDATE emp_general_info SET empName='$employeeName',dob='$dob',nationality='$nationality',bloodGroup='$bloodGroup',emergencyContact='$emergencyContact',lastWorkingDate='$lwd',probationCompletionDate='$probationDate',sex='$sex',dateOfJoining='$dateOfJoining',designation='$designation' WHERE empId = '$id' ";
if(mysqli_query($conn,$sql1))
{
        echo "Success";
}
else{
    echo "Error occured";
}
}


if($_POST['temp3']==0)
{
$phoneNumber=$_POST['phoneNumber'];
$officeEmail=$_POST['officeEmail'];
$personalEmail=$_POST['personalEmail'];
$presentAddress=$_POST['presentAddress'];
$permanentAddress=$_POST['permanentAddress'];
$panNO=$_POST['panNO'];
$pfNO=$_POST['pfNO'];
$esicNO=$_POST['esicNO'];
$uanNO=$_POST['uanNO'];
$aadharNO=$_POST['aadharNO'];
$empContFile= $_FILES['empContFile']['name'];
$empContFileTemp = $_FILES['empContFile']['tmp_name'];
$empContFilePath ="upload/".$empContFile;
$sql2="UPDATE employeecontact SET mobileId='$phoneNumber',officeEmail='$officeEmail',personalEmail='$personalEmail',presentAddress='$presentAddress',permanentAddress='$permanentAddress',PANno='$panNO',PFno='$pfNO',ESICno='$esicNO',aadharNo='$aadharNO',documentPath='$empContFilePath' WHERE empId='$id' ";

if(mysqli_query($conn,$sql2))
{
    if(move_uploaded_file($empContFileTemp,$empContFilePath)  )
    {
            
    }
    else{
        echo "Image and File upload Failed";
    }
    

}

}
else{
    $phoneNumber=$_POST['phoneNumber'];
$officeEmail=$_POST['officeEmail'];
$personalEmail=$_POST['personalEmail'];
$presentAddress=$_POST['presentAddress'];
$permanentAddress=$_POST['permanentAddress'];
$panNO=$_POST['panNO'];
$pfNO=$_POST['pfNO'];
$esicNO=$_POST['esicNO'];
$uanNO=$_POST['uanNO'];
$aadharNO=$_POST['aadharNO'];

$sql2="UPDATE employeecontact SET mobileId='$phoneNumber',officeEmail='$officeEmail',personalEmail='$personalEmail',presentAddress='$presentAddress',permanentAddress='$permanentAddress',PANno='$panNO',PFno='$pfNO',ESICno='$esicNO',aadharNo='$aadharNO' WHERE empId='$id' ";

if(mysqli_query($conn,$sql2))
{
        echo "Success2";
}
}

if($_POST['temp4']==0)
{
$degreeName=$_POST['degreeName'];
$yearOfPassing=$_POST['yearOfPassing'];
$institution=$_POST['institution'];
$empAcademicFile= $_FILES['empAcademicFile']['name'];
$empAcademicFileTemp = $_FILES['empAcademicFile']['tmp_name'];
$empAcademicFilePath ="upload/".$empAcademicFile;
$sql3="UPDATE academicdetails SET yearOfPassing='$yearOfPassing',institution='$institution',documentPath='$empAcademicFilePath' WHERE empId='$id' ";

if(mysqli_query($conn,$sql3))
{
    if(move_uploaded_file($empAcademicFileTemp,$empAcademicFilePath)  )
    {
            echo "Success from academic";
    }
    else{
        echo "Image and File upload Failed";
    }
}

}
else{
    $degreeName=$_POST['degreeName'];
$yearOfPassing=$_POST['yearOfPassing'];
$institution=$_POST['institution'];
$sql3="UPDATE academicdetails SET yearOfPassing='$yearOfPassing',institution='$institution'  WHERE empId='$id' ";

if(mysqli_query($conn,$sql3))
{
            echo "Success from academic";  
}
}
if($_POST['temp5']==0)
{


$skillName=$_POST['skillName'];
$yearsOfExp=$_POST['yearsOfExp'];
$expInstitution=$_POST['expInstitution'];
$empSkillFile= $_FILES['empSkillFile']['name'];
$empSkillFileTemp = $_FILES['empSkillFile']['tmp_name'];
$empSkillFilePath ="upload/".$empSkillFile;
$sql4="UPDATE professionalskill SET skillName='$skillName',experience='$yearsOfExp',documentPath='$empSkillFilePath' WHERE empId='$id'";


if(mysqli_query($conn,$sql4))
{
    if(move_uploaded_file($empSkillFileTemp,$empSkillFilePath)  )
    {
            
    }
    else{
        echo "Image and File upload Failed";
    }
}
}
else{
  
$skillName=$_POST['skillName'];
$yearsOfExp=$_POST['yearsOfExp'];
$expInstitution=$_POST['expInstitution'];

$sql4="UPDATE professionalskill SET skillName='$skillName',experience='$yearsOfExp' WHERE empId='$id'";


if(mysqli_query($conn,$sql4))
{
   
        echo "Success from skill";
}  
}
if($_POST['temp6']==0)
{
$companyName=$_POST['companyName'];
$expYears=$_POST['expYears'];
$designation=$_POST['designation'];
$department=$_POST['department'];
$empExpFile= $_FILES['empExpFile']['name'];
$empExpFileTemp = $_FILES['empExpFile']['tmp_name'];
$empExpFilePath ="upload/".$empExpFile;
$sql5="UPDATE experiencedetails SET experience='$expYears',designation='$designation',department='$department',documentPath='$empExpFilePath' WHERE empId='$id'";

if(mysqli_query($conn,$sql5))
{
    if(move_uploaded_file($empExpFileTemp,$empExpFilePath)  )
    {
            
    }
    else{
        echo "Image and File upload Failed";
    }
}

}
else{
    $companyName=$_POST['companyName'];
    $expYears=$_POST['expYears'];
    $designation=$_POST['designation'];
    $department=$_POST['department'];
    
    $sql5="UPDATE experiencedetails SET experience='$expYears',designation='$designation',department='$department' WHERE empId='$id'";
    
    if(mysqli_query($conn,$sql5))
    {
            echo "Success from exp";
    
    }
}
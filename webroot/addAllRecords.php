<?php

require 'dbconnect.php';

$myPhoto= $_FILES['profilePhoto']['name'];
$myPhotoTemp= $_FILES['profilePhoto']['tmp_name'];
$photoPath= "upload/".$myPhoto;
// if(move_uploaded_file($myPhotoTemp,$photoPath)){
//     echo "success";
// }
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
$empGenFilePath='';
for($i=0; $i<count($_FILES['empGenFile']['name']); $i++){

    $empGenFile= $_FILES['empGenFile']['name'][$i];
    $empGenTmp= $_FILES['empGenFile']['tmp_name'][$i];
    $empPath= "upload/".$empGenFile;
    $empGenFilePath.= $empPath.";";
    move_uploaded_file($empGenTmp,$empPath);
}
$empGenFilePath =substr($empGenFilePath, 0, -1);


$activeStat='Active';
$designation=$_POST['designation'];
$x=4;
$sql1="INSERT INTO emp_general_info(empName,dob,nationality,photoPath,bloodGroup,emergencyContact,lastWorkingDate,probationCompletionDate,documentPath,sex,emp_status,dateOfJoining,designation)
VALUES('$employeeName','$dob','$nationality','$photoPath','$bloodGroup','$emergencyContact','$lwd','$probationDate','$empGenFilePath','$sex','$activeStat','$dateOfJoining','$designation')";

if(mysqli_query($conn,$sql1))
{
    if(move_uploaded_file($myPhotoTemp,$photoPath) )
    {
            echo "SUCCESS";
    }
    else{
        echo "Image and File upload Failed";
    }
    

}
else{
    echo "Error occured";
}
////////////////////////////     CONTACT DETAILS //////////////////////////////////////
$max=0;
$qr=mysqli_query($conn,"SELECT empId FROM emp_general_info ORDER BY empId DESC LIMIT 1");
foreach($qr as $temp)
{
    $max=$temp['empId'];
}
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

$empContFilePath='';
for($i=0; $i<count($_FILES['empContFile']['name']); $i++){

    $empContFile= $_FILES['empContFile']['name'][$i];
    $empContTmp= $_FILES['empContFile']['tmp_name'][$i];
    $empContPath= "upload/".$empContFile;
    $empContFilePath.= $empContPath.";";
    move_uploaded_file($empContTmp,$empContFilePath);
}
$empContFilePath =substr($empContFilePath, 0, -1);
$sql2="INSERT INTO employeecontact(empId,mobileId,officeEmail,personalEmail,presentAddress,permanentAddress,PANno,PFno,ESICno,aadharNo,documentPath)
VALUES('$max','$phoneNumber','$officeEmail','$personalEmail','$presentAddress','$permanentAddress','$panNO','$pfNO','$esicNO','$aadharNO','$empContFilePath')";

if(mysqli_query($conn,$sql2))
{
     echo "success";
}

/////////////////////////////////ACADEMIC DETAILS///////////////////////////////////////////////////
$degreeName=$_POST['degreeName'];
$yearOfPassing=$_POST['yearOfPassing'];
$institution=$_POST['institution'];
$empAcademicFilePath='';
for($i=0; $i<count($_FILES['empAcademicFile']['name']); $i++){

    $empAcademicFile= $_FILES['empAcademicFile']['name'][$i];
    $empAcademicTmp= $_FILES['empAcademicFile']['tmp_name'][$i];
    $empAcademicPath= "upload/".$empAcademicFile;
    $empAcademicFilePath.= $empAcademicPath.";";
    move_uploaded_file($empAcademicTmp,$empAcademicPath);
}

$empAcademicFilePath =substr($empAcademicFilePath, 0, -1);

$sql3="INSERT INTO academicdetails(empId,yearOfPassing,institution,documentPath)
VALUES('$max','$yearOfPassing','$institution','$empAcademicFilePath')";

if(mysqli_query($conn,$sql3))
{
  echo "success from academic";
}

///////////////////////////////////SKILL DETAILS//////////////////////////////////////////
$skillName=$_POST['skillName'];
$yearsOfExp=$_POST['yearsOfExp'];
$expInstitution=$_POST['expInstitution'];
$empSkillFilePath='';
for($i=0; $i<count($_FILES['empSkillFile']['name']); $i++){

    $empSkillFile= $_FILES['empSkillFile']['name'][$i];
    $empSkillTmp= $_FILES['empSkillFile']['tmp_name'][$i];
    $empSkillPath= "upload/".$empSkillFile;
    $empSkillFilePath.= $empSkillPath.";";
    move_uploaded_file($empSkillTmp,$empSkillPath);
}

$empSkillFilePath =substr($empSkillFilePath, 0, -1);

$sql4="INSERT INTO professionalskill(empId,skillName,experience,documentPath)
VALUES('$max','$skillName','$expInstitution','$empSkillFilePath')";

if(mysqli_query($conn,$sql4))
{
   echo "success from skills";
}

////////////////////////EXPERIENCE DETAILS//////////////////////////////

$companyName=$_POST['companyName'];
$expYears=$_POST['expYears'];
$designation=$_POST['designation'];
$department=$_POST['department'];
$empExpFilePath='';
for($i=0; $i<count($_FILES['empExpFile']['name']); $i++){

    $empExpFile= $_FILES['empExpFile']['name'][$i];
    $empExpTmp= $_FILES['empExpFile']['tmp_name'][$i];
    $empExpPath= "upload/".$empExpFile;
    $empExpFilePath.= $empExpPath.";";
    move_uploaded_file($empExpTmp,$empExpPath);
}

$empExpFilePath =substr($empExpFilePath, 0, -1);

$sql5="INSERT INTO experiencedetails(empId,experience,designation,department,documentPath)
VALUES('$max','$expYears','$designation','$department','$empExpFilePath')";

if(mysqli_query($conn,$sql5))
{
    echo "Success from experience";
}

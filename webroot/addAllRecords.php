<?php

require 'dbconnect.php';
    $empSkillNames='';
    $empSkillYearOfExp ='';
 
    $academicName='';
    $academicYearOfPassing='';
    $academicInstitution='';
    $expCompanyName='';
    $expYears='';
    $designation='';
    $department='';
if(isset($_POST['skillName'])){
    
for($skl=0;$skl<count($_POST['skillName']);$skl++)
{
    $empSkillNames.=$_POST['skillName'][$skl]. ";";
    $empSkillYearOfExp.=$_POST['yearsOfExp'][$skl]. ";";

}
$empSkillNames =substr($empSkillNames, 0, -1);
$empSkillYearOfExp =substr($empSkillYearOfExp, 0, -1);
}
////
if(isset($_POST['degreeName'])){
    for($aca=0;$aca<count($_POST['degreeName']);$aca++)
{
    $academicName.=$_POST['degreeName'][$aca]. ";";
    $academicYearOfPassing.=$_POST['yearOfPassing'][$aca]. ";";
    $academicInstitution.=$_POST['institution'][$aca]. ";";

}
$academicName =substr($academicName, 0, -1);
$academicYearOfPassing =substr($academicYearOfPassing, 0, -1);
$academicInstitution =substr($academicInstitution, 0, -1);
}
////
if(isset($_POST['companyName'])){
    for($exp=0;$exp<count($_POST['companyName']);$exp++)
{
    $expCompanyName.=$_POST['companyName'][$exp]. ";";
    $expYears.=$_POST['expYears'][$exp]. ";";
    $designation.=$_POST['designation'][$exp]. ";";
    $department.=$_POST['department'][$exp]. ";";
}

$expCompanyName =substr($expCompanyName, 0, -1);
$expYears =substr($expYears, 0, -1);
$designation =substr($designation, 0, -1);

$department =substr($department, 0, -1);
}

$myPhoto= $_FILES['profilePhoto']['name'];
$myPhotoTemp= $_FILES['profilePhoto']['tmp_name'];
$photoPath= "upload/".$myPhoto;

$employeeName=$_POST['employeeName'];
$dob=date("Y-m-d",strtotime($_POST['dob']));
$sex=$_POST['sex'];
$nationality=$_POST['nationality'];
$location=$_POST['location'];
$dateOfJoining=date("Y-m-d",strtotime($_POST['dateOfJoining']));
/////////////
$time=strtotime($_POST['dateOfJoining']);
$month=date("F",$time);
switch($month){
    case 'January':
    $month=01;
    break;
    case 'February':
    $month=02;
    break;
    case 'March':
    $month=03;
    break;
    case 'April':
    $month=04;
    break;
    case 'May':
    $month=05;
    break;
    case 'June':
    $month=06;
    break;
    case 'July':
    $month=07;
    break;
    case 'August':
    $month=(int)'08';
    break;
    case 'September':
    $month=(int)'09';
    break;
    case 'October':
    $month=10;
    break;
    case 'November':
    $month=11;
    break;
    case 'December':
    $month=12;
    break;
    default:
    break;

}
$year=date("Y",$time);
$chck=0;
$chckMonth=0;
$checkYear = mysqli_query($conn,"SELECT * FROM dashboard_graph WHERE year_s='$year' ");
foreach($checkYear as $checkTemp){
    if($checkTemp['year_s']==$year)
    {
        $chck=1;
    }
    if($checkTemp['month_s']==$month)
    {
        $chckMonth=1;
    }
}
if($chck==0)
{
    mysqli_query($conn,"INSERT INTO dashboard_graph (year_s,month_s,emp_count) VALUES ('$year','$month',1)");
}
elseif($chckMonth==0){
    mysqli_query($conn,"INSERT INTO dashboard_graph (year_s,month_s,emp_count) VALUES ('$year','$month',1)");
}
else{
    mysqli_query($conn,"UPDATE dashboard_graph SET emp_count=emp_count+1 WHERE month_s='$month' AND year_s='$year' ");
}



/////////////
$probationDate=date("Y-m-d",strtotime($_POST['probationDate']));
$bloodGroup=$_POST['bloodGroup'];

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

$x=4;
$sql1="INSERT INTO emp_general_info(empName,dob,nationality,photoPath,bloodGroup,emergencyContact,probationCompletionDate,documentPath,sex,emp_status,dateOfJoining,designationId,departmentId,empLocation)
VALUES('$employeeName','$dob','$nationality','$photoPath','$bloodGroup','$emergencyContact','$probationDate','$empGenFilePath','$sex','$activeStat','$dateOfJoining','$designation','$department','$location')";

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

$empAcademicFilePath='';
for($i=0; $i<count($_FILES['empAcademicFile']['name']); $i++){

    $empAcademicFile= $_FILES['empAcademicFile']['name'][$i];
    $empAcademicTmp= $_FILES['empAcademicFile']['tmp_name'][$i];
    $empAcademicPath= "upload/".$empAcademicFile;
    $empAcademicFilePath.= $empAcademicPath.";";
    move_uploaded_file($empAcademicTmp,$empAcademicPath);
}

$empAcademicFilePath =substr($empAcademicFilePath, 0, -1);

$sql3="INSERT INTO academicdetails(empId,degreeNames,yearOfPassing,institution,documentPath)
VALUES('$max','$academicName','$academicYearOfPassing','$academicInstitution','$empAcademicFilePath')";

if(mysqli_query($conn,$sql3))
{
  echo "success from academic";
}

///////////////////////////////////SKILL DETAILS//////////////////////////////////////////

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
VALUES('$max','$empSkillNames','$empSkillYearOfExp','$empSkillFilePath')";

if(mysqli_query($conn,$sql4))
{
   echo "success from skills";
}

////////////////////////EXPERIENCE DETAILS//////////////////////////////

$empExpFilePath='';
for($i=0; $i<count($_FILES['empExpFile']['name']); $i++){

    $empExpFile= $_FILES['empExpFile']['name'][$i];
    $empExpTmp= $_FILES['empExpFile']['tmp_name'][$i];
    $empExpPath= "upload/".$empExpFile;
    $empExpFilePath.= $empExpPath.";";
    move_uploaded_file($empExpTmp,$empExpPath);
}

$empExpFilePath =substr($empExpFilePath, 0, -1);

$sql5="INSERT INTO experiencedetails(empId,experience,designationId,departmentId,documentPath,yearsInCompany)
VALUES('$max','$expCompanyName','$designation','$department','$empExpFilePath','$expYears')";

if(mysqli_query($conn,$sql5))
{
    echo "Success from experience";
}

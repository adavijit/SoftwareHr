<?php
// print_r($_FILES);print_r($_POST);
//test
//bidisha
$conn = mysqli_connect("localhost","root","","hr_software");
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
$empGenFile= $_FILES['empGenFile']['name'];
$empGenFileTemp = $_FILES['empGenFile']['tmp_name'];
$empGenFilePath ="upload/".$empGenFile;
$activeStat='Active';
$designation=$_POST['designation'];
$x=4;
$sql1="INSERT INTO emp_general_info(empName,dob,nationality,photoPath,bloodGroup,emergencyContact,lastWorkingDate,probationCompletionDate,documentPath,sex,emp_status,dateOfJoining,designation)
VALUES('$employeeName','$dob','$nationality','$photoPath','$bloodGroup','$emergencyContact','$lwd','$probationDate','$empGenFilePath','$sex','$activeStat','$dateOfJoining','$designation')";

if(mysqli_query($conn,$sql1))
{
    if(move_uploaded_file($myPhotoTemp,$photoPath) && move_uploaded_file($empGenFileTemp,$empGenFilePath) )
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
// ////////////////////////////     CONTACT DETAILS //////////////////////////////////////
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
$empContFile= $_FILES['empContFile']['name'];
$empContFileTemp = $_FILES['empContFile']['tmp_name'];
$empContFilePath ="upload/".$empContFile;
$sql2="INSERT INTO employeecontact(empId,mobileId,officeEmail,personalEmail,presentAddress,permanentAddress,PANno,PFno,ESICno,aadharNo,documentPath)
VALUES('$max','$phoneNumber','$officeEmail','$personalEmail','$presentAddress','$permanentAddress','$panNO','$pfNO','$esicNO','$aadharNO','$empContFilePath')";

if(mysqli_query($conn,$sql2))
{
    if(move_uploaded_file($empContFileTemp,$empContFilePath)  )
    {
            
    }
    else{
        echo "Image and File upload Failed";
    }
    

}

/////////////////////////////////ACADEMIC DETAILS///////////////////////////////////////////////////
$degreeName=$_POST['degreeName'];
$yearOfPassing=$_POST['yearOfPassing'];
$institution=$_POST['institution'];
$empAcademicFile= $_FILES['empAcademicFile']['name'];
$empAcademicFileTemp = $_FILES['empAcademicFile']['tmp_name'];
$empAcademicFilePath ="upload/".$empAcademicFile;
$sql3="INSERT INTO academicdetails(empId,yearOfPassing,institution,documentPath)
VALUES('$max','$yearOfPassing','$institution','$empAcademicFilePath')";

if(mysqli_query($conn,$sql3))
{
    if(move_uploaded_file($empAcademicFileTemp,$empAcademicFilePath)  )
    {
            
    }
    else{
        echo "Image and File upload Failed";
    }
}

///////////////////////////////////SKILL DETAILS//////////////////////////////////////////
$skillName=$_POST['skillName'];
$yearsOfExp=$_POST['yearsOfExp'];
$expInstitution=$_POST['expInstitution'];
$empSkillFile= $_FILES['empSkillFile']['name'];
$empSkillFileTemp = $_FILES['empSkillFile']['tmp_name'];
$empSkillFilePath ="upload/".$empSkillFile;
$sql4="INSERT INTO professionalskill(empId,skillName,experience,documentPath)
VALUES('$max','$skillName','$expInstitution','$empSkillFilePath')";

if(mysqli_query($conn,$sql4))
{
    if(move_uploaded_file($empSkillFileTemp,$empSkillFilePath)  )
    {
            
    }
    else{
        echo "Image and File upload Failed";
    }
}

////////////////////////EXPERIENCE DETAILS//////////////////////////////

$companyName=$_POST['companyName'];
$expYears=$_POST['expYears'];
$designation=$_POST['designation'];
$department=$_POST['department'];
$empExpFile= $_FILES['empExpFile']['name'];
$empExpFileTemp = $_FILES['empSkillFile']['tmp_name'];
$empExpFilePath ="upload/".$empExpFile;
$sql5="INSERT INTO experiencedetails(empId,experience,designation,department,documentPath)
VALUES('$max','$expYears','$designation','$department','$empExpFilePath')";

if(mysqli_query($conn,$sql5))
{
    if(move_uploaded_file($empExpFileTemp,$empExpFilePath)  )
    {
            
    }
    else{
        echo "Image and File upload Failed";
    }
}

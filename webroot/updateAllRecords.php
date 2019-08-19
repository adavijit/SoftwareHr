<?php
print_r($_POST);
$id=$_POST['id'];
require 'dbconnect.php';
/////////////////
    $empSkillNames='';
    $empSkillYearOfExp ='';
    $empSkillInstitution='';
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
    $empSkillInstitution.=$_POST['expInstitution'][$skl]. ";";

}
$empSkillNames =substr($empSkillNames, 0, -1);
$empSkillYearOfExp =substr($empSkillYearOfExp, 0, -1);
$empSkillInstitution =substr($empSkillInstitution, 0, -1);
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

/////////////////
if(isset($_POST['deleteId'])){
 
     $mystring = $_POST['docName'];
     $x='';
     $arr=array();
     $n = strlen($mystring);
     for($i=0;$i<strlen($mystring);$i++)
     {
         if($mystring[$i]!=';')
         {
             $x.=$mystring[$i];
             
             
             $n--;
         }
         elseif($n!=0 || $mystring[$i]!=';'){
             array_push($arr,$x);
             $x='';
          
             $n--;
         }
         
     }
     array_push($arr,$x);
     $delId1= $_POST['deleteId'];
     unset($arr[$delId1]);
     $x='';
     for($i=0;$i<count($arr);$i++)
     {
        $x.= $arr[$i];
        $x.=';';
     }
     $x =substr($x, 0, -1);
   $sql1="UPDATE emp_general_info SET documentPath='$x' WHERE empId='$id' ";
   mysqli_query($conn,$sql1);
 
}
else{
print_r($_FILES);


/////////////////
$employeeName=$_POST['employeeName'];
$dob=date("Y-m-d",strtotime($_POST['dob']));
$sex=$_POST['sex'];
$nationality=$_POST['nationality'];
$location=$_POST['location'];
$dateOfJoining=date("Y-m-d",strtotime($_POST['dateOfJoining']));
$probationDate=date("Y-m-d",strtotime($_POST['probationDate']));
$bloodGroup=$_POST['bloodGroup'];

$emergencyContact=$_POST['emergencyContact'];

$activeStat='Active';

$x=4;
if($_POST['temp1']==0 && $_POST['temp2']==0)
{
    $myPhoto= $_FILES['profilePhoto']['name'];
    $myPhotoTemp= $_FILES['profilePhoto']['tmp_name'];
    $photoPath= "upload/".$myPhoto;
    $empGenFile= $_FILES['empGenFile']['name'];
    $empGenFileTemp = $_FILES['empGenFile']['tmp_name'];
    $empGenFilePath ="upload/".$empGenFile;
    
    $sql1="UPDATE emp_general_info SET empName='$employeeName',dob='$dob',nationality='$nationality',photoPath='$photoPath',bloodGroup='$bloodGroup',emergencyContact='$emergencyContact',probationCompletionDate='$probationDate',
    documentPath='$empGenFilePath',sex='$sex',dateOfJoining='$dateOfJoining',designation='$designation' WHERE empId = '$id' ";
if(mysqli_query($conn,$sql1))
{
    if(move_uploaded_file($myPhotoTemp,$photoPath) || move_uploaded_file($empGenFileTemp,$empGenFilePath) )
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
if($_POST['temp1']==1 && $_POST['temp2']==0)
{
    
    $empGenFile= $_FILES['empGenFile']['name'];
    $empGenFileTemp = $_FILES['empGenFile']['tmp_name'];
    $empGenFilePath ="upload/".$empGenFile;
    
    $sql1="UPDATE emp_general_info SET empName='$employeeName',dob='$dob',nationality='$nationality',bloodGroup='$bloodGroup',emergencyContact='$emergencyContact',probationCompletionDate='$probationDate',
    documentPath='$empGenFilePath',sex='$sex',dateOfJoining='$dateOfJoining',designationId='$designation',departmentId='$departmentId' WHERE empId = '$id' ";
if(mysqli_query($conn,$sql1))
{
    if(move_uploaded_file($empGenFileTemp,$empGenFilePath) )
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
if($_POST['temp1']==0 && $_POST['temp2']==1)
{
    $myPhoto= $_FILES['profilePhoto']['name'];
    $myPhotoTemp= $_FILES['profilePhoto']['tmp_name'];
    $photoPath= "upload/".$myPhoto;
   
    
    $sql1="UPDATE emp_general_info SET empName='$employeeName',dob='$dob',nationality='$nationality',photoPath='$photoPath',bloodGroup='$bloodGroup',emergencyContact='$emergencyContact',probationCompletionDate='$probationDate',
    sex='$sex',dateOfJoining='$dateOfJoining',designationId='$designation',departmentId='$departmentId' WHERE empId = '$id' ";
if(mysqli_query($conn,$sql1))
{
    if(move_uploaded_file($myPhotoTemp,$photoPath) || move_uploaded_file($empGenFileTemp,$empGenFilePath) )
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
   
    
    $sql1="UPDATE emp_general_info SET empName='$employeeName',dob='$dob',nationality='$nationality',bloodGroup='$bloodGroup',emergencyContact='$emergencyContact',probationCompletionDate='$probationDate',sex='$sex',dateOfJoining='$dateOfJoining',designationId='$designation',departmentId='$departmentId' WHERE empId = '$id' ";
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
$sql2="UPDATE employeecontact SET UANno = '$uanNO' ,mobileId='$phoneNumber',officeEmail='$officeEmail',personalEmail='$personalEmail',presentAddress='$presentAddress',permanentAddress='$permanentAddress',PANno='$panNO',PFno='$pfNO',ESICno='$esicNO',aadharNo='$aadharNO',documentPath='$empContFilePath' WHERE empId='$id' ";

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

$sql2="UPDATE employeecontact SET UANno = '$uanNO',mobileId='$phoneNumber',officeEmail='$officeEmail',personalEmail='$personalEmail',presentAddress='$presentAddress',permanentAddress='$permanentAddress',PANno='$panNO',PFno='$pfNO',ESICno='$esicNO',aadharNo='$aadharNO' WHERE empId='$id' ";

if(mysqli_query($conn,$sql2))
{
        echo "Success2";
}
}

if($_POST['temp4']==0)
{

$empAcademicFile= $_FILES['empAcademicFile']['name'];
$empAcademicFileTemp = $_FILES['empAcademicFile']['tmp_name'];
$empAcademicFilePath ="upload/".$empAcademicFile;
$sql3="UPDATE academicdetails SET degreeNames='$academicName', yearOfPassing='$academicYearOfPassing',institution='$academicInstitution',documentPath='$empAcademicFilePath' WHERE empId='$id' ";

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
   
$sql3="UPDATE academicdetails SET degreeNames='$academicName', yearOfPassing='$academicYearOfPassing',institution='$academicInstitution' WHERE empId='$id' ";

if(mysqli_query($conn,$sql3))
{
            echo "Success from academic";  
}
}
if($_POST['temp5']==0)
{

$empSkillFile= $_FILES['empSkillFile']['name'];
$empSkillFileTemp = $_FILES['empSkillFile']['tmp_name'];
$empSkillFilePath ="upload/".$empSkillFile;
$sql4="UPDATE professionalskill SET skillName='$empSkillNames',experience='$empSkillYearOfExp',documentPath='$empSkillFilePath' WHERE empId='$id'";


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


$sql4="UPDATE professionalskill SET skillName='$empSkillNames',experience='$empSkillYearOfExp' WHERE empId='$id'";


if(mysqli_query($conn,$sql4))
{
   
        echo "Success from skill";
}  
}
if($_POST['temp6']==0)
{

$empExpFile= $_FILES['empExpFile']['name'];
$empExpFileTemp = $_FILES['empExpFile']['tmp_name'];
$empExpFilePath ="upload/".$empExpFile;
$sql5="UPDATE experiencedetails SET experience='$expYears',designationId='$designation',departmentId='$department',documentPath='$empExpFilePath' WHERE empId='$id'";

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
  
    $sql5="UPDATE experiencedetails SET experience='$expYears',designationId='$designation',departmentId='$department' WHERE empId='$id'";
    
    if(mysqli_query($conn,$sql5))
    {
            echo "Success from exp";
    
    }
}
}





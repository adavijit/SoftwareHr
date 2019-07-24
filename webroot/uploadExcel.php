<?php

$conn=mysqli_connect('localhost','root','','hr_software');



$name = $_FILES['excelSheet']['name'];
$tmp_name = $_FILES['excelSheet']['tmp_name'];
require('XLSXReader.php');
$xlsx = new XLSXReader($tmp_name);


//////////////////////////////////////////////////////Emp General Info1
$data = $xlsx->getSheetData('empGen');
$a=1;
foreach($data as $temp)
{

    $arr=array();
    if($a<=2)
        {
            $a++;
            continue;
        }
	foreach($temp as $test)
	{
        
        array_push($arr,$test);
    }
    //print_r($arr);
    $empName = $arr[0];
    $dob=$arr[1];
    $nationality=$arr[2];
    $bloodGroup=$arr[3];
    $emergency=$arr[4];
    $lwd =$arr[5];
    $probation =$arr[6];
    $dateOfJoining=$arr[7];
    $sex=$arr[8];
    $designation=$arr[9];
    if(mysqli_query($conn,"INSERT INTO emp_general_info(empName,dob,nationality,bloodGroup,emergencyContact,lastWorkingDate,dateOfJoining,probationCompletionDate,sex,emp_status,designation)
    VALUES('$empName','$dob','$nationality','$bloodGroup','$emergency','$lwd','$probation','$dateOfJoining','$sex','Active','$designation')")){
        echo "Success from empgen";
    }
    else{
        echo "error from empgen";
    }
  
    
    
}
///////////////////////////////////////////
$max=0;
$qr=mysqli_query($conn,"SELECT empId FROM emp_general_info ORDER BY empId DESC LIMIT 1");
foreach($qr as $temp)
{
    $max=$temp['empId'];
}
///////////////////////////////////////////


//////////////////////////////Emp Contact Info ///////////////////////////////2
$data = $xlsx->getSheetData('empCont');
$a=1;
foreach($data as $temp)
{

    $arr=array();
    if($a<=2)
        {
            $a++;
            continue;
        }
	foreach($temp as $test)
	{
        
        
        array_push($arr,$test);
    }
    $contact = $arr[0];
    $officeEmail=$arr[1];
    $personalEmail=$arr[2];
    $presentAddress=$arr[3];
    $permanentAddress=$arr[4];
    $pfNo =$arr[5];
    $esicNo =$arr[6];
    $panNo=$arr[7];
    $uan=$arr[8];
    $aadhar=$arr[9];
    $location=$arr[10];
    if(mysqli_query($conn,"INSERT INTO employeecontact(empId,mobileId,officeEmail,personalEmail,presentAddress,permanentAddress,PFno,ESICno,UANno,aadharNo,PANno,location)
    VALUES('$max','$contact','$officeEmail','$personalEmail','$presentAddress','$permanentAddress','$pfNo','$esicNo','$uan','$aadhar','$panNo','$location')")){
        echo "Success from empcont";
    }
    else{
        echo "Error from empcont";
    }
    
    
}


//////////////////////////////Emp Academic Info ///////////////////////////////3
$data = $xlsx->getSheetData('empAcademic');
$a=1;
foreach($data as $temp)
{

    $arr=array();
    if($a<=2)
        {
            $a++;
            continue;
        }
	foreach($temp as $test)
	{
        
        
        array_push($arr,$test);
    }
    $highestQualification = $arr[0];
    $yearOfPassing=$arr[1];
    $institution=$arr[2];
    
    if(mysqli_query($conn,"INSERT INTO academicdetails(empId,highestQualification,yearOfPassing,institution)
    VALUES('$max','$highestQualification','$yearOfPassing','$institution')")){
        echo "Success from empAcademic";
    }
    else{
        echo "Error from empAcademic";
    }
}
    


    
//////////////////////////////Emp Skills Info ///////////////////////////////4
$data = $xlsx->getSheetData('empSkills');
$a=1;
foreach($data as $temp)
{

    $arr=array();
    if($a<=2)
        {
            $a++;
            continue;
        }
	foreach($temp as $test)
	{
        
        
        array_push($arr,$test);
    }
    $skillName = $arr[0];
    $experience=$arr[1];
    
    if(mysqli_query($conn,"INSERT INTO professionalskill(empId,skillName,experience)
    VALUES('$max','$skillName','$experience')")){
        echo "Success from empSkill";
    }
    else{
        echo "Error from empSkill";
    }
}




//////////////////////////////Emp Experience Info ///////////////////////////////5
$data = $xlsx->getSheetData('empExperience');
$a=1;
foreach($data as $temp)
{

    $arr=array();
    if($a<=2)
        {
            $a++;
            continue;
        }
	foreach($temp as $test)
	{
        
        
        array_push($arr,$test);
    }
    $experience = $arr[0];
    $designation=$arr[1];
    $department=$arr[2];
    
    if(mysqli_query($conn,"INSERT INTO experiencedetails(empId,experience,designation,department)
    VALUES('$max','$experience','$designation','$department')")){
        echo "Success from empExp";
    }
    else{
        echo "Error from empExp";
    }
}

    



?>
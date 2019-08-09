<?php
require 'dbconnect.php';
// $conn=mysqli_connect('localhost','root','','hr_software');



$name = $_FILES['excelSheet']['name'];
$tmp_name = $_FILES['excelSheet']['tmp_name'];
require 'XLSXReader.php';
$xlsx = new XLSXReader($tmp_name);


//////////////////////////////////////////////////////Emp General Info1
$data = $xlsx->getSheetData('empGen');
$a=1;
$count=0;
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
    $dob=date("Y-m-d",mktime(0,0,0,1,$arr[1]-1,1900));
    $nationality=$arr[2];
    $bloodGroup=$arr[3];
    $emergency=$arr[4];
    echo $arr[5];
    $lwd =date("Y-m-d",mktime(0,0,0,1,$arr[5]-1,1900));
   
    $probation =date("Y-m-d",mktime(0,0,0,1,$arr[6]-1,1900));
    echo $lwd;
    $dateOfJoining=date("Y-m-d",mktime(0,0,0,1,$arr[7]-1,1900));
    $sex=$arr[8];
    $designation=$arr[9];
    /////////

    $time=strtotime($dateOfJoining);
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






    /////////
    if(mysqli_query($conn,"INSERT INTO emp_general_info(empName,dob,nationality,bloodGroup,emergencyContact,lastWorkingDate,dateOfJoining,probationCompletionDate,sex,emp_status,designation)
    VALUES('$empName','$dob','$nationality','$bloodGroup','$emergency','$lwd','$dateOfJoining','$probation','$sex','Active','$designation')")){
        echo "Success from empgen";
        $count++;
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
echo "x =".$max;
$max1=$max-$count+1;
$max2=$max-$count+1;
$max3=$max-$count+1;
$max4=$max-$count+1;
$max5=$max-$count+1;

echo "y =".$max;

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
    var_dump($max);
    if(mysqli_query($conn,"INSERT INTO employeecontact(empId,mobileId,officeEmail,personalEmail,presentAddress,permanentAddress,PFno,ESICno,UANno,aadharNo,PANno,location)
    VALUES('$max1','$contact','$officeEmail','$personalEmail','$presentAddress','$permanentAddress','$pfNo','$esicNo','$uan','$aadhar','$panNo','$location')")){
        echo "Success from empcont";
        $max1++;
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
    VALUES('$max2','$highestQualification','$yearOfPassing','$institution')")){
        echo "Success from empAcademic"; $max2++;
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
    VALUES('$max3','$skillName','$experience')")){
        echo "Success from empSkill"; $max3++;
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
    VALUES('$max4','$experience','$designation','$department')")){
        echo "Success from empExp"; $max4++;
    }
    else{
        echo "Error from empExp";
    }
}

    



?>
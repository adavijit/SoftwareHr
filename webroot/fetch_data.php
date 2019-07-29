<?php
require 'dbconnect.php';
$hi=0;
    // $status = $_POST['status'];
    // $id= $_POST['id'];
if(!isset($_POST['test'])&&($_POST['WorkDurr']=="Work duration" && $_POST['empName']=="Employee Name" && $_POST['status']=="All" && $_POST['check']==0))
{
    $hi=1;
        $result = mysqli_query($conn,"SELECT * FROM attendancerecord WHERE  id_fileuploadrecord='$_POST[id]'");
        $row = mysqli_num_rows($result);
        foreach($result as $row1)
        {
            ?>
            <tr>
                                        <?php 
                                         echo "<td>$row1[empId]</td>";
                                         echo "<td>$row1[empName]</td>";
                                         echo "<td>$row1[Att_Date]</td>";
                                         echo "<td>$row1[InTime]</td>";
                                         echo "<td>$row1[OutTime]</td>";
                                         echo "<td>$row1[Shift]</td>";
                                         echo "<td>$row1[S_InTime]</td>";
                                         echo "<td>$row1[S_OutTime]</td>";
                                         echo "<td>$row1[WorkDurr]</td>";
                                         echo "<td>$row1[OT]</td>";
                                         echo "<td>$row1[TotDurr]</td>";
                                         echo "<td>$row1[LateBy]</td>";
                                         echo "<td>$row1[EarlyGoingBy]</td>";
                                         echo "<td>$row1[Att_Status]</td>";
                                         echo "<td>$row1[Punch_Records]</td>";
                                         //echo "<td>$row1[id_fileuploadrecord]</td>";
        }
}
else if(isset($_POST['test']))
{
    if($_POST['test']==1)
    {$hi=1;
        
        $result = mysqli_query($conn,"SELECT * FROM attendancerecord WHERE  id_fileuploadrecord='$_POST[id]'");
        $row = mysqli_num_rows($result);
        foreach($result as $row1)
        {
            ?>
            <tr>
                                        <?php 
                                         echo "<td>$row1[empId]</td>";
                                         echo "<td>$row1[empName]</td>";
                                         echo "<td>$row1[Att_Date]</td>";
                                         echo "<td>$row1[InTime]</td>";
                                         echo "<td>$row1[OutTime]</td>";
                                         echo "<td>$row1[Shift]</td>";
                                         echo "<td>$row1[S_InTime]</td>";
                                         echo "<td>$row1[S_OutTime]</td>";
                                         echo "<td>$row1[WorkDurr]</td>";
                                         echo "<td>$row1[OT]</td>";
                                         echo "<td>$row1[TotDurr]</td>";
                                         echo "<td>$row1[LateBy]</td>";
                                         echo "<td>$row1[EarlyGoingBy]</td>";
                                         echo "<td>$row1[Att_Status]</td>";
                                         echo "<td>$row1[Punch_Records]</td>";
                                         //echo "<td>$row1[id_fileuploadrecord]</td>";
        }
    }
}
else{
    $empName = $_POST['empName'];
    $WorkDurr= $_POST['WorkDurr'];
    // echo $_POST['check'];
    $t="00";
    
    
    // $WorkDurr2 = strtotime($WorkDurr);
    //echo $WorkDurr2;
    // $LateBy = strtotime("00:00:00");
    
    $status = $_POST['status'];
    $id= $_POST['id'];
    // $test_var=0;
    // $test_var1=0;
}
$sql = "SELECT * FROM attendancerecord WHERE id_fileuploadrecord='$id'";

if($empName!="Employee Name")
{                   
                $sql.="AND empName='$empName'";
 }
 if($status!='All')
{
        $sql.="AND Att_Status ='$_POST[status]'";
   
}


if($_POST['check']==1)
    {
                   
                   
                    if($WorkDurr!="Work duration")
                    {
                        
                            if($WorkDurr<10)
                            $WorkDurr = '0'.$WorkDurr.":".$t.":".$t;
                            else
                            $WorkDurr = $WorkDurr.":".$t.":".$t;
        
                        $sql.="AND WorkDurr<='$WorkDurr' AND LateBy!='00:00:00'";
                    }
                
                else{
                    // echo $LateBy;
                        $sql.="AND LateBy!='00:00:00'";
                    }
    }
    if($WorkDurr!="Work duration")

    {
                   

                    // $WorkDurr= $_POST['WorkDurr'];
    // echo $_POST['check'];
                    $t="00";
                    // if($WorkDurr!="Work duration")
                    // {
                            if($WorkDurr<10)
                            $WorkDurr = '0'.$WorkDurr.":".$t.":".$t;
                            else
                            $WorkDurr = $WorkDurr.":".$t.":".$t;
                    // }
                    $sql.="AND WorkDurr<='$WorkDurr'";
    
    }

       //here
 if($hi!=1){

                        $result=mysqli_query($conn,$sql);
                        // $row = mysqli_num_rows($result);
                                    foreach($result as $row1)
                                    {
                                        // $test_var=1;
                                    ?>
                                    <tr>
                                            <?php 
                                            // $x=strtotime($row1['LateBy']);
                                            // $y=strtotime($row1['WorkDurr']);
                                            // if($x!=$LateBy && $y<=$WorkDurr2){
                                                echo "<td>$row1[empId]</td>";
                                                echo "<td>$row1[empName]</td>";
                                                echo "<td>$row1[Att_Date]</td>";
                                                echo "<td>$row1[InTime]</td>";
                                                echo "<td>$row1[OutTime]</td>";
                                                echo "<td>$row1[Shift]</td>";
                                                echo "<td>$row1[S_InTime]</td>";
                                                echo "<td>$row1[S_OutTime]</td>";
                                                echo "<td>$row1[WorkDurr]</td>";
                                                echo "<td>$row1[OT]</td>";
                                                echo "<td>$row1[TotDurr]</td>";
                                                echo "<td>$row1[LateBy]</td>";
                                                echo "<td>$row1[EarlyGoingBy]</td>";
                                                echo "<td>$row1[Att_Status]</td>";
                                                echo "<td>$row1[Punch_Records]</td>";
                                                //echo "<td>$row1[id_fileuploadrecord]</td>";
                                            // }
                                            ?>
                                        </tr>
                                                <?php
                                    }
                                    }
        

            

<?php $WorkDurr= $_POST['WorkDurr'];
$empName = $_POST['empName'];
if($WorkDurr<10)
$WorkDurr = "0".$WorkDurr.":00".":00";
else
$WorkDurr = $WorkDurr.":00".":00";

$LateBy = "00:00:00";
$conn = mysqli_connect("localhost","root","","hr_software");
if($_POST['check']==0)
{
    echo "xxxxxxxxxxxxxxxx";
    $result = mysqli_query($conn,"SELECT * FROM attendancerecord WHERE  empName = '$empName' AND WorkDurr <= '$WorkDurr'");
    
}
else
{
    echo "yyyyyyyyyyyyyyyyyyy";
    $result = mysqli_query($conn,"SELECT * FROM attendancerecord WHERE  empName = '$empName'AND WorkDurr <= '$WorkDurr'AND LateBy !='$LateBy'");
}
$row = mysqli_num_rows($result);
foreach($result as $row1){
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
                    ?>
                    </tr><?php
}
 ?>

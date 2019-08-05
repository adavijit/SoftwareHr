if($WorkDurr!="Work duration" && $_POST['check']!=1)
     {             
                   $sql.="AND WorkDurr<='$WorkDurr'";
                    $result=mysqli_query($conn,$sql);
                    $row = mysqli_num_rows($result);
                    foreach($result as $row1)
                    {
                        $test_var=1;
                            ?>
                  <tr>
                            <?php 
                            $x=strtotime($row1['WorkDurr']);
                            if($x<=$WorkDurr2){
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
                                ?>
                    </tr>
                                <?php
                  }
    }
    if($empName!="Employee Name" && $test_var!=1){

        // $test_var =0;
        if($status!='All'){ 
            // $test_var1=1;
        $result=mysqli_query($conn,$sql);
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
                               // echo "<td>$row1[id_fileuploadrecord]</td>";
                    }   
                }
                else{
                    $result=mysqli_query($conn,$sql);
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
         if($status!='All' && $test_var!=1){ 
            // $test_var1=0;
            $result=mysqli_query($conn,$sql);
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
        

  



 
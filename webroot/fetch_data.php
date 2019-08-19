<?php

require 'dbconnect.php';
$pa=$_POST['path'];
$previd = $_POST['id'];

            if($_POST['show']=='')
            $record_per_page = 10;
            else
            $record_per_page = $_POST['show']; 
            // echo $_POST['show']; 
            $page = '';  
            $output = ''; 
            
            if(isset($_POST["page"])) 
            {  
                $page = $_POST["page"];  
            }  
            else  
            {  
                $page = 1;  
            }
            //  echo $page;
            $start_from = ($page - 1)*$record_per_page; 
        
    
  
            $hi=0;
            // $status = $_POST['status'];
            // $id= $_POST['id'];
        if(!isset($_POST['test'])&&($_POST['WorkDurr']=="Work duration" && $_POST['empName']=="Employee Name" && $_POST['status']=="All" && $_POST['check']==0))
            {
                ?>
                <table id="example" class="table employtable tablewhitespace">
                    <thead>
                    <tr>
                <th>Emp ID</th>
                <th>Employee Name</th>
                <th>Attendance Date</th>
                <th>In Time</th>
                <th>Out Time</th>
                <th>Shift</th>
                <th>Shift In Time</th>
                <th>Shift Out Time</th>
                <th>WorkDurr.</th>
                <th>OT</th>
                <th>Total Duration</th>
                <th>Late By</th>
                <th>Early Going By</th>
                <th>Attendance Status</th>
                <th>Punch Card Records</th>
                <th>Action</th>
                        </tr>
            </thead>
            
                <?php
                $hi=1;
                    $result = mysqli_query($conn,"SELECT * FROM attendancerecord WHERE  id_fileuploadrecord='$_POST[id]' LIMIT $start_from, $record_per_page");
                    $row = mysqli_num_rows($result);

                    foreach($result as $row1)
                    {
                        ?>
            <tbody>

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
                                         $p= $pa."/$row1[id]"."?previd=".$previd;
                                         echo "<td><button><a href= '$p'>Edit</a></button></td>"; 
                                         //echo "<td>$row1[id_fileuploadrecord]</td>";
                        }
                        ?>
                        </tbody>
                </table>
                <?php
                echo '<div align="center">';  
                $page_query = "SELECT * FROM attendancerecord WHERE id_fileuploadrecord='$_POST[id]'";  
                $page_result = mysqli_query($conn, $page_query);  
                $total_records = mysqli_num_rows($page_result);  
                $total_pages = ceil($total_records/$record_per_page);  
                for($i=1; $i<=$total_pages; $i++)  
                {  
                    if($i==$page)
                    echo "<span class='pagination_link' style='cursor:pointer; padding:6px; border:2px solid #45B4EC;' id='".$i."'>".$i."</span>";
                    
                    else
                    echo "<span class='pagination_link' style='cursor:pointer; padding:6px; border:2px solid #ccc;' id='".$i."'>".$i."</span>";  
                }  
                echo '</div><br /><br />'; 
                        
                }

else if(isset($_POST['test']))
                {
                    if($_POST['test']==1)
                    {?>
                        <table id="example" class="table employtable tablewhitespace">
                            <thead>
                            <tr>
                        <th>Emp ID</th>
                        <th>Employee Name</th>
                        <th>Attendance Date</th>
                        <th>In Time</th>
                        <th>Out Time</th>
                        <th>Shift</th>
                        <th>Shift In Time</th>
                        <th>Shift Out Time</th>
                        <th>WorkDurr.</th>
                        <th>OT</th>
                        <th>Total Duration</th>
                        <th>Late By</th>
                        <th>Early Going By</th>
                        <th>Attendance Status</th>
                        <th>Punch Card Records</th>
                        <th>Action</th>
                                </tr>
                    </thead>
                    
                        <?php
                        $hi=1;
                        $sql="SELECT * FROM attendancerecord WHERE  id_fileuploadrecord='$_POST[id]' LIMIT $start_from, $record_per_page";
                        $result = mysqli_query($conn,$sql);
                        // echo $sql;
                        
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
                                                        $p= $pa."/$row1[id]"."?previd=".$previd;
                                                        echo "<td><button><a href='$p'>Edit</a></button></td>"; 
                                                         //echo "<td>$row1[id_fileuploadrecord]</td>";
                        }
                        ?>
                        </tbody>
                </table>
                <?php
                echo '<div align="center">';  
                $page_query = "SELECT * FROM attendancerecord WHERE id_fileuploadrecord='$_POST[id]'";  
                $page_result = mysqli_query($conn, $page_query);  
                $total_records = mysqli_num_rows($page_result);  
                $total_pages = ceil($total_records/$record_per_page);  
                for($i=1; $i<=$total_pages; $i++)  
                {  
                    if($i==$page)
                    echo "<span class='pagination_link' style='cursor:pointer; padding:6px; border:2px solid #45B4EC;' id='".$i."'>".$i."</span>";
                    
                    else
                    echo "<span class='pagination_link' style='cursor:pointer; padding:6px; border:2px solid #ccc;' id='".$i."'>".$i."</span>";  
                }  
                echo '</div><br /><br />'; 
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
                                // echo $_POST['page'];
                                $status = $_POST['status'];
                                $id= $_POST['id'];
                                // $test_var=0;
                                // $test_var1=0;

                            $sql = "SELECT * FROM attendancerecord WHERE id_fileuploadrecord='$id'";

                            if($empName!="Employee Name")
                            {                   
                                            $sql.=" AND empId='$empName'";
                            }
                            if($status!='All')
                            {
                                    $sql.=" AND Att_Status ='$_POST[status]'";
                            
                            }


                            if($_POST['check']==1)
                                {
                                            
                                            
                                                if($WorkDurr!="Work duration")
                                                {
                                                    
                                                        if($WorkDurr<10)
                                                        $WorkDurr = '0'.$WorkDurr.":".$t.":".$t;
                                                        else
                                                        $WorkDurr = $WorkDurr.":".$t.":".$t;
                                    
                                                    $sql.="AND LateBy!='00:00:00' AND WorkDurr > '00:00:00' AND WorkDurr <='$WorkDurr' ";
                                                }
                                            
                                            else{
                                                // echo $LateBy;
                                                    $sql.=" AND LateBy!='00:00:00'";
                                                }
                                }
                                if($WorkDurr!="Work duration" && $_POST['check']!=1)

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
                                                $sql.=" AND WorkDurr > '00:00:00' AND  WorkDurr<='$WorkDurr'";
                                
                                }

                                //here
                            if($hi!=1){
                                
                                $sql1=$sql." LIMIT $start_from, $record_per_page";
                                // echo $sql;

                                                    $result=mysqli_query($conn,$sql1);
                                                    // $row = mysqli_num_rows($result);
                                                    ?>
                                    <table id="example" class="table employtable tablewhitespace">
                                        <thead>
                                        <tr>
                                    <th>Emp ID</th>
                                    <th>Employee Name</th>
                                    <th>Attendance Date</th>
                                    <th>In Time</th>
                                    <th>Out Time</th>
                                    <th>Shift</th>
                                    <th>Shift In Time</th>
                                    <th>Shift Out Time</th>
                                    <th>WorkDurr.</th>
                                    <th>OT</th>
                                    <th>Total Duration</th>
                                    <th>Late By</th>
                                    <th>Early Going By</th>
                                    <th>Attendance Status</th>
                                    <th>Punch Card Records</th>
                                    <th>Action</th>
                                            </tr>
                                </thead>
                                
                                    <?php

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
                                                                            $p= $pa."/$row1[id]"."?previd=".$previd;
                                                                            echo "<td><button><a href='$p'>Edit</a></button></td>"; 
                                                                             //echo "<td>$row1[id_fileuploadrecord]</td>";
                                                                        // }
                                                                        ?>
                                                                    </tr>
                                                                            <?php
                                                                }
                                                                ?>
                                    </tbody>
                            </table>
                            <?php
                            echo '<div align="center">';  
                            // $page_query = "SELECT * FROM attendancerecord WHERE id_fileuploadrecord='$_POST[id]'";  
                            $page_query=$sql;
                            $page_result = mysqli_query($conn, $page_query);  
                            $total_records = mysqli_num_rows($page_result);  
                            $total_pages = ceil($total_records/$record_per_page);  
                            for($i=1; $i<=$total_pages; $i++)  
                            {  
                                if($i==$page)
                                echo "<span class='pagination_link1' style='cursor:pointer; padding:6px; border:2px solid #45B4EC;' id='".$i."'>".$i."</span>";
                                
                                else
                                echo "<span class='pagination_link1' style='cursor:pointer; padding:6px; border:2px solid #ccc;' id='".$i."'>".$i."</span>";  
                            }  
                            echo '</div><br /><br />'; 
                                                                }

                }
        
                                  
                             
            

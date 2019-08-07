<?php
use Cake\Routing\Router;
        require 'dbconnect.php';
        ?>
                <table class="table employtable " id="dtBasicExample">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Month</th>
                        <th scope="col">Date of upload</th>
                        <th scope="col">Year</th>
                        <th scope="col">Attendance Sheet Name</th>
                        <th scope="col">Attendance Sheet Path</th>

                        <th scope="col">Action</th>
                        </tr>
                    </thead>
  
                    
                    <?php
                         if($_POST['show']=='')
                         $record_per_page = 10;
                         else
                         $record_per_page = $_POST['show']; 
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
                        $start_from = ($page - 1)*$record_per_page; 
                        
                        // $result = mysqli_query($connect, $query);
                    $pa=$_POST['path'];
                    // $sql="SELECT * FROM fileuploadrecord WHERE id!=-1";
                    if(isset($_POST['test'])){
                        if($_POST['test']==1){
                            $sql = "SELECT * FROM fileuploadrecord WHERE id!=-1 ORDER BY id ASC LIMIT $start_from, $record_per_page";
                            
                                ?>
                                <tbody>
                            <?php
            
                                    $result=mysqli_query($conn,$sql);
                                    // print_r($result);
                                    foreach($result as $row)
                                    {
                                            ?>
                                            <tr>
                                                <?php
                                            echo "<td>$row[id]</td>";
                                            echo "<td>$row[month]</td>";
                                            echo "<td>$row[dtOfUpload]</td>";
                                            echo "<td>$row[record_Year]</td>";
                                            echo "<td>$row[att_sheetName]</td>";
                                            echo "<td>$row[att_sheetPath]</td>";
                                            $p= $pa."?id=$row[id]";
                                            $path= $row['att_sheetPath'];
                                
                                            echo "<td class='actions'><a href='$p'> <i class='icon-file' style='right-padding:7px;'></i></a>
                                            &nbsp;<a download href=$path><span class='glyphicon glyphicon-download-alt' style='right-padding:7px;'></span></a>
                                            &nbsp;&nbsp;<a id='delete' onclick='deleteAjax($row[id])'><i class='icon-trash-1' style='right-padding:7px;'></i></a></td> ";
                    
                    
                                            // $path= "http://localhost/SoftwareHr/webroot/".$fileuploadrecord->att_sheetPath;
                                            ?>
                                        </tr>
                                        <?php
                            }
                                ?>

                                </tbody>
                                </table>
                                <?php

                        }

                        echo '<div align="center">';  
                        $page_query = "SELECT * FROM fileuploadrecord WHERE id!=-1 ORDER BY id ASC";  
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

             ////
        else{

                $dt1=$_POST['dt'];
                $dt=date("Y-m-d",strtotime($dt1));
                // $month=$_POST['month'];
                // $record_Year=$_POST['record_Year'];
                
              $sql="SELECT * FROM fileuploadrecord WHERE id!=-1";
        if($dt!='1970-01-01')
        {
                $sql.=" AND dtOfUpload = '$dt'";
        }
        if($_POST['month']!='Month')
        {
            $sql.=" AND month= '$_POST[month]'";
        }
 
        if($_POST['record_Year']!='Year')
        {
            $sql.=" AND record_Year = '$_POST[record_Year]'";
        }
        ?>
        <tbody>
        <?php
        // echo $sql;
        $sql1=$sql." ORDER BY id ASC LIMIT $start_from, $record_per_page";
        $result=mysqli_query($conn,$sql1);
        // print_r($result);
        foreach($result as $row)
        {
                                    ?>
                                    <tr>
                                        <?php
                                    echo "<td>$row[id]</td>";
                                    echo "<td>$row[month]</td>";
                                    echo "<td>$row[dtOfUpload]</td>";
                                    echo "<td>$row[record_Year]</td>";
                                    echo "<td>$row[att_sheetName]</td>";
                                    echo "<td>$row[att_sheetPath]</td>";
                                    $p= $pa."?id=$row[id]";
                                    $path= $row['att_sheetPath'];
                            
                                    echo "<td class='actions'><a href='$p'> <i class='icon-file' style='right-padding:7px;'></i></a>
                                    &nbsp;<a download href=$path><span class='glyphicon glyphicon-download-alt' style='right-padding:7px;'></span></a>
                                    &nbsp;&nbsp;<a id='delete' onclick='deleteAjax($row[id])'><i class='icon-trash-1' style='right-padding:7px;'></i></a></td> ";
                               
                        // $path= "http://localhost/SoftwareHr/webroot/".$fileuploadrecord->att_sheetPath;
                        ?>
                    </tr>
                    <?php
        }?>
                        </tbody>
                        </table>
                        <?php
                        echo '<div align="center">';  
                        $sql.=" ORDER BY id ASC;"; 
                        // echo $sql; 
                        $page_result = mysqli_query($conn, $sql);  
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
                       }   ?>               
                        
    
                <script>
                    function deleteAjax(id){
                console.log(id);
                if(confirm('Are you sure?')){
                    $.ajax({
                    type:"post",
                    url:"delete.php",
                    data:{
                        id:id
                        },
                    success:function(data){
                    
                        location.reload();
                    }
                    });
                }
                
                } 
                </script>

<?php
use Cake\Routing\Router;
        require 'dbconnect.php';
        $pa=$_POST['path'];
        $sql="SELECT * FROM fileuploadrecord WHERE id!=-1";
        if(isset($_POST['test'])){
            if($_POST['test']==1){
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


                        }

                }
        else{

                $dt1=$_POST['dt'];
                $dt=date("Y-m-d",strtotime($dt1));
                // $month=$_POST['month'];
                // $record_Year=$_POST['record_Year'];
        }
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
        // echo $sql;
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


   // retrivin of all data incase of previous condition left    
    ?>  
    
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

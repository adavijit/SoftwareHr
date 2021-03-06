<?php 
use Cake\Routing\Router;
require 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

    <title>Welcome to Navsoft Training</title>
  </head>
  <body>
  <section class="main-content">
    <!-- left menu section start here -->
    <section class="leftmenu">
    <a href="javascript:void(0)" class="menuhomem"><i class="icon-add-plus-button"></i></a>
      <div class="leftpadd">
        <a href="javascript:void(0);" class="leftlogo"><img src="images/logo.png" alt=""></a>
        <div class="leftmain-link">
        <ul class="listofnav">
          <li>
            <a id="parent1" onclick="changeActive('parent1')" class="parent" href="<?php echo Router::url(['controller'=>'Dashboard','action'=>'index']) ?>"><i class="icon-home"></i> <span>Dashboard</span></a>
          </li>
          <li>
            <a href="javascript:void(0);" id="parent2" class="parent" onclick="changeActive('parent2')"><i class="icon-list-of-works"></i> <span>Employee Record</span></a>
            <ul class="subchildlink">
              <a  style="cursor:pointer;">
              <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'index']) ?>' "  style="cursor:pointer;">
              View Records</li></a>
              <a>
                <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'AllRecordsSave','action'=>'index']) ?>' "  style="cursor:pointer;">Add new Records</li>
              </a>
            </ul>
          </li>
          <li>
            <a id="parent3" class="parent" onclick="changeActive('parent3');" href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Attendance</span></a>
            <ul class="subchildlink">
            <?php 
            require 'dbconnect.php';
            $sql=mysqli_query($conn,"SELECT id FROM fileuploadrecord ORDER BY id DESC LIMIT 1");
            $max=0;
            foreach($sql as $test)
                {
                    $max=$test['id'];
                    
                }
            
            ?>
            <a class="activeclass"><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Attendancerecord','action'=>'index','id'=>$max]) ?>' "  style="cursor:pointer;">Attendance Records</li></a>                    
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Fileuploadrecord','action'=>'index']) ?>' "  style="cursor:pointer;">File upload records</li></a>
            </ul>
          </li>
          <li>
            <a id="parent4" class="parent" onclick="changeActive('parent4');" href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Leave Request</span></a>
            <ul class="subchildlink">
            <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'LeaveSetting','action'=>'index']) ?>' "  style="cursor:pointer;">View Leave Setting</li></a>             
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'ReqLeave','action'=>'index']) ?>' "  style="cursor:pointer;">Add Requested Leave </li></a>
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'NonReqLeave','action'=>'index']) ?>' "  style="cursor:pointer;">Add Non Requested Leave </li></a>
            
            
            </ul>
          </li>
          <li>
            <a id="parent5" class="parent" onclick="changeActive('parent5');" href="javascript:void(0);"><i class="icon-department"></i> <span>Employee Designation</span></a>
          </li>
          <li>
            <a id="parent6" class="parent" onclick="changeActive('parent6');" href="javascript:void(0);"><i class="icon-briefcase"></i> <span>Employee Department</span></a>
          </li>
          <li>
            <a id="parent7" class="parent" onclick="changeActive('parent7');" href="javascript:void(0);"><i class="icon-file"></i> <span>Settings</span></a>
            <ul class="subchildlink">
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'SetHoliday','action'=>'index']) ?>' "  style="cursor:pointer;">Holiday Setting</li></a>             
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGrp','action'=>'index']) ?>' "  style="cursor:pointer;">Employee group setting </li></a>
            
            
            
            </ul>
          </li>
        </ul>
      </div>
      </div>
    </section>
    <!-- left menu section end here -->
    <section class="rightpart">
    <header class="header-resize">
      <div class="row">
        <div class="col-auto ml-auto align-middle">
         <a href="javascript:void(0)" class="usernameboxdiv ml-auto d-block">
          <span class="userpicbox mr-2"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome <?php echo $username?></span>
        </a>
         <div id="drop">
        <div class="logouuserdiv">
          <div class="imagepic"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></div>
          <div class="spantext"><h5 class="mb-0"><?php echo $username?></h5><a href="javascript:void(0)"><?php echo $email?></a></div>
        </div>
        <div class="footerbottom">
          <a href="javascript:void" onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Users','action'=>'logout']) ?>' "><i class="icon-turn-off-1"></i> Logout</a>
        </div>
        </div>
        </div>
      </div>
    </header>
    <?php $id=$_GET['id'];
//echo $id;
// $conn=mysqli_connect('localhost','root','','hr_software'); 
$result1 = mysqli_query($conn,"SELECT * FROM fileuploadrecord WHERE id='$id';");
$row2 = mysqli_num_rows($result1);
if($row2){
while($row3 = $result1->fetch_assoc()){
  $month = $row3['month'];
  $year = $row3['record_Year'];
  // echo $year;
}
}
//echo $year;
?> 
    <!-- body container start here -->
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col-md-3"><h2>Attendance List For: <?= $month?>-<?= $year?></h2></div>
       
        <div class="col-auto">
          <div class="row">
          <div class="col-auto">
            <div class="form-group addcustomcss">
             <select class="form-control rounded-0" id="sheet" name="sheet" value="">
              <option>Select Sheet</option>
              <?php 
               $result_gen = mysqli_query($conn,"SELECT * FROM fileuploadrecord");
               $row_gen = mysqli_num_rows($result_gen);
              if($row_gen > 0){
                while($result_data_gen=$result_gen->fetch_assoc()){?>
                  <option value=<?php echo $result_data_gen['id'] ?>><?=$result_data_gen['att_sheetName']?></option>
                  <?php
                }
              }?>
            </select> 
        
        </div>
        </div>
      
        
          
        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0" id="empName" name="empName" value="">
              <option>Employee Name</option>
              <?php 
               $result_gen = mysqli_query($conn,"SELECT DISTINCT empId,empName FROM attendancerecord WHERE id_fileuploadrecord=$_GET[id]");
               $row_gen = mysqli_num_rows($result_gen);
              if($row_gen > 0){
                while($result_data_gen=$result_gen->fetch_assoc()){?>
                  <option value="<?php echo $result_data_gen['empId']?> "><?=$result_data_gen['empName']."(Id-".$result_data_gen['empId'].")"?></option>
                  <?php
                }
              }?>
            </select> 
          </div>
       </div>

        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0" id="status" name="status" >
             <option>All</option>
             <option>Present</option>
             <option>Absent</option>
              
            </select> 
          </div>
        </div>
        
        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0" id="WorkDurr" name="WorkDurr">
                <option>Work duration</option>
                    <?php
                    for($i=1;$i<=12;$i++)
                    echo "<option>$i</option>";
                    ?>              
            </select> 
          </div>
        </div>
        <div class="col-auto pt-2">
          <input type="checkbox" class="" id="LateBy" id="LateBy" >
                <label for="LateBy">LateBy</label>
        </div>
      
       
        <div class="col-auto"><button type="button" class="btn orangebutton rounded-circle" id="download"><i class="icon-download-1" ></i></button></div>
        <div class="col-auto"><button type="button" class="btn outlineblue rounded-circle px-0" onclick="return RefreshWindow();"><i class="icon-refresh-button"></i></button></div>
        </div> 
        </div>
        </div>
    
    
        
        <!-- <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0" id="WorkDurr" name="WorkDurr">
                <option>Work duration</option>
                    <?php
                    for($i=1;$i<=12;$i++)
                    echo "<option>$i</option>";
                    ?>

              
            </select> 
          </div>
        </div> -->
        <!-- <div class="col-auto"> -->
          <!-- <div class="form-group addcustomcss">
             <select class="form-control rounded-0" id="empName" name="empName" value="">
              <option>Employee Name</option>
              
            </select> 
          </div> -->
          <!-- <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0" id="status" name="status" >
             <option>All</option>
             <option>Present</option>
             <option>Absent</option>
              
            </select> 
          </div>
        </div> -->
       <!--  <div class="col-auto">
          <div class="form-group addcustomcss">
          
              <div class="w-50 d-inline-block">
              
              <div class="form-check">
                <input type="checkbox" class="" id="LateBy" id="LateBy" >
                <label for="LateBy">LateBy</label>
                
              </div>
            
          </div>
        </div>
       
        
      <div><input type="button" name="reset" value="refresh" onclick="return RefreshWindow();"></div> -->
      
<!-- </div> -->
        <!-- <div class="col-auto"><button type="button" class="btn orangebutton rounded-circle" data-toggle="modal" data-target="#errormessage"><i class="icon-download-1"></i></button></div> -->
        <!-- <div class="col-auto"><button type="button" class="btn orangebutton rounded-circle" id="download"><i class="icon-download-1" ></i></button></div> -->
      </div>
      <div>

  <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendancerecord[]|\Cake\Collection\CollectionInterface $attendancerecord
 */
?>



      <div  id="ttt">
      
        

      </div>
      <div class="row mb-5">

          <div class="pageloadleft"><label>Show</label><select id="show"><option>10</option>
          <option>20</option>
          <option>30</option>
          <option>40</option>
          <option>50</option></select><label>Entries</label></div>
        

</div>
        <!-- </div> -->
      <!-- </div>

      </div>
    </div>           -->

<!-- </div> -->

      
    </div>
    <!-- body container end here -->
    <footer><p>© 2019 All Right Reserved</p></footer>
    </section>
    <!-- right part section end here -->
    
    </section>

        <!--  modal box  -->
<div class="modal fade" id="errormessage" tabindex="-1" role="dialog" aria-labelledby="errormessage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-error"></i></div>
        <h4 class="mb-3">Error</h4>
        <p class="mb-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
      </div>
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" class="btn bluebutton">Continue</button>
      </div>
    </div>
  </div>
</div>


    <div class="modal fade" id="successmessage" tabindex="-1" role="dialog" aria-labelledby="successmessage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-success"></i></div>
        <h4 class="mb-3">Success</h4>
        <p class="mb-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
      </div>
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" class="btn bluebutton">Download</button>
      </div>
    </div>
  </div>
</div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://rawgit.com/unconditional/jquery-table2excel/master/src/jquery.table2excel.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<script> 
   
$("#download").click(function(){
  console.log("sdasd");
  $("#ttt").table2excel({
                        // CSS class classes that are not imported into the rows of the exported table
                        exclude: ".noExl",
                        // Name of the exported Excel document
                        name: "Excel Document Name",
                        // Name of Excel file
                        filename: "test",
                        //File suffix name
                        fileext: ".xlsx",
                        //Exclude Exporting Pictures
                        exclude_img: false,
                        //Exclude export hyperlinks
                        exclude_links: false,
                        //Whether to exclude the contents in the export input box
                        exclude_inputs: false
                    });
});
 


</script>

<script type="text/javascript">

    $(document).ready(function(){
        $(".paginator a").click(function(){
            $("#updated_div_id").load(this.href);
            return false;
        })
    });

function RefreshWindow()
{
         window.location.reload(true);
}
      $('.uploadclss').on('shown.bs.modal', function () {
      $('#errormessage').trigger('focus')
      });
      $('.successm').on('shown.bs.modal', function () {
      $('#successmessage').trigger('focus')
      });
    </script>

  </body>
</html>
<script>
var WorkDurr = 'Work duration';
var empName = '';
var check= '';
var status = '';
var show = '';
var sheet = '';
var id= <?php echo $_GET['id']?>;

<?php $path=  Router::url(['controller'=>'Attendancerecord','action'=>'edit']);?>
// var id = $_GET['id'];
$("#sheet").change(function(){
 sheet = document.getElementById('sheet').value;
console.log(window.location.href.split('?')[0]);
var url = window.location.href.split('?')[0] + "?id=" + sheet; 
window.open(url,"_self");
// window.location.href('')
// window.location.href='';
});

$("#WorkDurr,#empName,#LateBy,#status,#show").change(function(){
 console.log(document.getElementById('show').value);
  WorkDurr = document.getElementById('WorkDurr').value;
  empName = document.getElementById('empName').value;
  show = document.getElementById('show').value;
  if(document.getElementById('LateBy').checked==true){
  check =1;
}
if(document.getElementById('LateBy').checked==false){
  check =0;
}
status = document.getElementById('status').value;
// id = $_GET['id'];
//console.log(status);
  filter_data();

        function filter_data(page)
      {
        // console.log(check);

          $.ajax({
              url:"fetch_data.php",
              method:"POST",
              data:{
              page:page,
              WorkDurr:WorkDurr,
              empName:empName,
              check:check,
              status:status,
              show:show,
              id:id,
              path: "<?php echo $path;?>"
            },
              success:function(data){
                  $('#ttt').html(data);
              }
          });
      }
      $(document).on('click', '.pagination_link1', function()
          {  
                    var page = $(this).attr("id");  
                    filter_data(page);  
          });
});


$(document).ready(function(){
  //console.log(status);

filter_all();
      function filter_all(page)
      {


          $.ajax({
              url:"fetch_data.php",
              method:"POST",
              data:{
                page:page,
                id:id,
                show:show,
                test:1,
                path: "<?php echo $path;?>"
              },
              
              success:function(data){
                  $('#ttt').html(data);
              }
          });
      }
      $(document).on('click', '.pagination_link', function()
  {  
           var page = $(this).attr("id");  
           filter_all(page);  
  });
     
});


////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\

$('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });

    $(document).ready(function(){
    $(".menuhomem").click(function(){
    $(".main-content").toggleClass("minleftmenu");
    });
    });

    $(document).ready( function(){
      
    $('.usernameboxdiv').click( function(event){
        
        event.stopPropagation();
        
        $('#drop').toggle();
        
    });
    
    $(document).click( function(){

        $('#drop').hide();

    });

});
/////////////////////////////////////////////
$(document).ready(function(){
 // $(".subchildlink").hide();
 $('.parent').siblings().toggle();
 $('#parent3').siblings().show();
});

    function changeActive(id){
      
      let x= document.getElementById(id).id;
      // console.log(x);
      let idName = '#'+x;
      // console.log(idName);
     $('.activeclass').siblings().hide();
      $(idName).siblings().toggle();
      $('.parent').removeClass('activeclass');
      $(idName).addClass('activeclass');
    //  $('.dashboard').removeClass('activeclass');
    }
</script>

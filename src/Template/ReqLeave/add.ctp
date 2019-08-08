<?php
use Cake\Routing\Router;
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReqLeave $reqLeave
 */
require '../webroot/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../webroot/css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../webroot/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../webroot/css/style.css">
    <link rel="stylesheet" type="text/css" href="../webroot/css/responsive.css">

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
              <a class="" style="cursor:pointer;">
              <li onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'index']) ?>' "  style="cursor:pointer;background-colour:#1B679F;">
              View Records</li>
            </a>
              <a >
                <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'AllRecordsSave','action'=>'index']) ?>' "  style="cursor:pointer;">Add new Records</li>
              </a>
            </ul>
          </li>
          <li>
            <a id="parent3" class="parent" onclick="changeActive('parent3');" href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Attendance</span></a>
            <ul class="subchildlink">
        
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Fileuploadrecord','action'=>'index']) ?>' "  style="cursor:pointer;">File upload records</li></a>
            </ul>
          </li>
          <li>
            <a id="parent4" class="parent" onclick="changeActive('parent4');" href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Leave Request</span></a>
            <ul class="subchildlink">
            <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'LeaveSetting','action'=>'index']) ?>' "  style="cursor:pointer;">View Leave Setting</li></a>             
              <a class="activeclass"><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'ReqLeave','action'=>'index']) ?>' "  style="cursor:pointer;">Add Requested Leave </li></a>
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

    <!-- right part section start here -->
    <section class="rightpart">
    <header class="header-resize">
      <div class="row">
        <div class="col-auto ml-auto align-middle">
         <a href="javascript:void(0)" class="usernameboxdiv ml-auto d-block">
          <span class="userpicbox mr-2"><img src="../images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed"><?php echo $username?></span>
        </a>
         <div id="drop">
        <div class="logouuserdiv">
          <div class="imagepic"><img src="../images/User.png" alt="Navsoft Training" title="Navsoft Training"></div>
          <div class="spantext"><h5 class="mb-0"><?php echo $username?></h5><a href="javascript:void(0)"><?php echo $email?></a></div>
        </div>
        <div class="footerbottom">
          <a href="javascript:void" onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Users','action'=>'logout']) ?>' "><i class="icon-turn-off-1"></i> Logout</a>
        </div>
        </div>
        </div>
      </div>
    </header>
    <?= $this->Form->create($reqLeave,['enctype'=>'multipart/form-data']) ?>
    <!-- body container start here -->
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>Add Employee Leave Request</h2></div>
        <div class="col-auto">
          <button type="button" class="btn outlineblue mr-2"><a href="<?php echo Router::url(['controller'=>'ReqLeave','action'=>'index']) ?>">Cancel</a></button> 
         <button type="submit" name="submit" class="btn redbutton">Save</button>
        </div>
      </div>

  <?php $id=0; ?>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 class="mb-3">Requested Leave</h3>
      <div class="row">
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Employee Name</label>           
             <!-- <input id="" type="text" name="emp_name" placeholder="Employee Name" class="form-control rounded-0" width="100%" />  -->
          <select class="form-control rounded-0" width="100%" name="empId" id="">
          <option value=""> </option>
          <?php
                // $conn = mysqli_connect("localhost","root","","hr_software");
                $dd_res=mysqli_query($conn,"Select empName,empId from emp_general_info");
                while($r=mysqli_fetch_row($dd_res))
                { 
                  echo "<option value='$r[1]'> $r[0] ($r[1]) </option>";

                 // echo "<input type='hidden' value='$r[1]' name='empId'>";
                }
              ?>
          </select>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Designation</label>
            <!-- <input id="" type="text" name="designationId" class="form-control rounded-0" width="100%" />  -->
            <select class="form-control rounded-0" width="100%" name="designationId" id="">
                <option value=""> </option>
                <option value="1">Designation 1</option>
                <option value="2">Designation 2</option>
                <option value="3">Designation 3</option>
                <option value="4">Designation 4</option>
              </select>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Department</label>
          <!-- <input id="" type="text" name="department" class="form-control rounded-0" width="100%" />   -->
            <select class="form-control rounded-0" width="100%" name="department" id="">
                <option value=""> </option>
                <option>department 1</option>
                <option>department 2</option>
                <option>department 3</option>
                <option>department 4</option>
              </select>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">No. of Days Requested</label>
            <input id="" type="text" name="no_of_day_requested" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Leave Type</label>
            <select name="leave_type" class="form-control rounded-0">
              <option></option>
              <?php
                // $conn = mysqli_connect("localhost","root","","hr_software");
                $dd_res=mysqli_query($conn,"Select leave_type,status from new_leave");
                while($r=mysqli_fetch_row($dd_res))
                { 
                  if(strtolower($r[1])=="active")
                    echo "<option value='$r[0]'> $r[0] </option>";
                }
              ?>
            </select> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Leave Setting Year</label>
            <!-- <input id="" type="text" name="balance_leave" class="form-control rounded-0" width="100%" />  -->
            <select name="leave_year" class="form-control rounded-0">
              <option></option>
              <?php
                $dd_res=mysqli_query($conn,"Select * from leave_setting");
                while($r=mysqli_fetch_assoc($dd_res))
                { 
                    echo "<option value='$r[financial_year]'> $r[financial_year] </option>";
                }
              ?>
            </select> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Leave Starting Date</label>
            <input id="datepicker" name="starting_date" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Leave Ending Date</label>
            <input id="datepicker2" name="ending_date" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Supervisor Name</label>
            <input id="" type="text" name="supervisor_name" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Leave Approval Status</label>
            <select name="approval_states" class="form-control rounded-0">
              <!-- <option> </option> -->
              <option>Inactive</option>
            </select> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Fullday or Halfday</label>
          <select name="fullday_half" class="form-control rounded-0">
              <option> </option>
              <option>Full</option>
              <option>Half</option>
            </select> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Select Document</label>
            <?php echo $this->Form->file('file',['class'=>'form-control']); ?>
          </div>
        </div>
        <div class="col-sm-12 mb-2">
          <div class="form-group addcustomcss">
            <label class="labelform">Reason</label>
            <textarea type="text" name="reason" class="form-control"> </textarea>
          </div>
        </div>
        
        
        
      </div>

      <!-- tab end here  -->
      
      </div>
    </div>
    <br><br>
    <?= $this->Form->end() ?>
    <!-- body container end here -->
    <footer><p>© 2019 All Right Reserved</p></footer>
    </section>
    <!-- right part section end here -->    
    </section>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../webroot/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

 <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker3').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker4').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

  </body>
</html>
<script>


$(document).ready(function(){
    $(".menuhomem").click(function(){
    $(".main-content").toggleClass("minleftmenu");
    });
    });


    $('.usernameboxdiv').click( function(event){
        
        event.stopPropagation();
        
        $('#drop').toggle();
        
    });
    
    $(document).click( function(){

        $('#drop').hide();

    });


    $(document).ready(function(){
 // $(".subchildlink").hide();
 $('.parent').siblings().toggle();
 $('#parent4').siblings().show();
});

function changeActive(id){
      
      let x= document.getElementById(id).id;
      // console.log(x);
      let idName = '#'+x;
      // console.log(idName);
     $('.parent').siblings().hide();
      $(idName).siblings().toggle();
      $('.parent').removeClass('activeclass');
      $(idName).addClass('activeclass');
    //  $('.dashboard').removeClass('activeclass');
    }
</script>


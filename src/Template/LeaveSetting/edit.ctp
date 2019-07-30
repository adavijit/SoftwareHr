<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LeaveSetting $leaveSetting
 */

use Cake\Routing\Router;
require '../webroot/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../webroot/css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../webroot/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../webroot/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../webroot/css/responsive.css">

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
              <a style="cursor:pointer;">
              <li onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'index']) ?>' "  style="cursor:pointer;background-colour:#1B679F;">
              View Records</li>
            </a>
              <a>
                <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'AllRecordsSave','action'=>'index']) ?>' "  style="cursor:pointer;">Add new Records</li>
              </a>
            </ul>
          </li>
          <li>
            <a id="parent3" class="parent" onclick="changeActive('parent3');" href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Attendance</span></a>
            <ul class="subchildlink">
            <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Attendancerecord','action'=>'index']) ?>' "  style="cursor:pointer;">Attendance Records</li></a>             
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Fileuploadrecord','action'=>'index']) ?>' "  style="cursor:pointer;">File upload records</li></a>
            </ul>
          </li>
          <li>
            <a id="parent4" class="parent activeclass" onclick="changeActive('parent4');" href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Leave Request</span></a>
            <ul class="subchildlink">
            <a class=""><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'LeaveSetting','action'=>'index']) ?>' "  style="cursor:pointer;">View Leave Setting</li></a>             
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

    <!-- right part section start here -->
    <section class="rightpart">
      <header class="header-resize">
      <div class="row">
        <div class="col-auto ml-auto align-middle">
         <a href="javascript:void(0)" class="usernameboxdiv ml-auto d-block">
          <span class="userpicbox mr-2"><img src="../../images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome <?php echo $username?></span>
        </a>
         <div id="drop">
        <div class="logouuserdiv">
          <div class="imagepic"><img src="../../images/User.png" alt="Navsoft Training" title="Navsoft Training"></div>
          <div class="spantext"><h5 class="mb-0"><?php echo $username?></h5><a href="javascript:void(0)"><?php echo $email?></a></div>
        </div>
        <div class="footerbottom">
          <a href="javascript:void" onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Users','action'=>'logout']) ?>' "><i class="icon-turn-off-1"></i> Logout</a>
        </div>
        </div>
        </div>
      </div>
    </header>

        <!-- body container start here -->
    <?= $this->Form->create($leaveSetting) ?>
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>Edit Leave Setting</h2></div>
        <div class="col-auto"><button type="button" class="btn outlineblue mr-2"><a href="<?php echo Router::url(['controller'=>'LeaveSetting','action'=>'index']) ?>">Cancel</a></button> <button type="submit" name="submit" class="btn redbutton">submit</button></div>
      </div>
      <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
      <h3 class="mb-3">General Information</h3>
      <div class="row">
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Financial Year</label>
          <!-- <input id="" name="financial_year" value="<?= h($leaveSetting->financial_year) ?>" class="form-control rounded-0" width="100%"   />   -->
          <select id="financialYear"  name="financial_year" class="form-control rounded-0">
             <option><?php echo "$leaveSetting->financial_year"?></option>
             <?php 
              $date = date("Y");
              
              for($i=1998; $i<=$date;$i++)
                if($leaveSetting->financial_year==$i)
                {
                  continue;
                }
                else
                  echo "<option>$i</option>";
             ?>
              
            </select> 
          
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Season Tenure Start Date</label>
            <input id="datepicker" value="<?= h($leaveSetting->starting_date) ?>" name="starting_date" class="form-control rounded-0" width="100%"   /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Season Tenure End Date</label>
            <input id="datepicker2" value="<?= h($leaveSetting->ending_date) ?>" name="ending_date" class="form-control rounded-0" width="100%"   />
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Holiday Group</label>
            <!-- <input id="" value="<?= h($leaveSetting->holiday_group) ?>" name="holiday_group" class="form-control rounded-0" width="100%"    />  -->
              <select name="holiday_group" class="form-control rounded-0">
              <option value="<?php h($leaveSetting->holiday_group) ?>">
              <?= 
              // $conn = mysqli_connect("localhost","root","","hr_software");
              $dd_res=mysqli_query($conn,"Select group_name,holiday_id from set_holiday");
              foreach($dd_res as $temp)
              {
                  if($temp['holiday_id']==$leaveSetting->holiday_group){
                  echo "<td>$temp[group_name]</td>";
                }
              }
              ?></option>
              <?php
                // $conn = mysqli_connect("localhost","root","","hr_software");
                $dd_res=mysqli_query($conn,"Select group_name,holiday_id from set_holiday");
                while($r=mysqli_fetch_row($dd_res))
                { 
                  if(strtolower($r[1])!=strtolower($leaveSetting->holiday_group)){
                    echo "<option value='$r[1]'> $r[0] ($r[1])</option>";
                  }
                }
              ?>
               </select>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">No. of hours in full day</label>
            <input id="" value="<?= $this->Number->format($leaveSetting->no_of_hours) ?>" name="no_of_hours" class="form-control rounded-0" width="100%"   /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Default Shift</label>
            <input id="" value="<?= h($leaveSetting->shift) ?>" name="shift"  class="form-control rounded-0" width="100%"   /> 
            
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Week Starts on</label>
            <!-- <input id="" value="<?= h($leaveSetting->week_start) ?>" name="week_start" class="form-control rounded-0" width="100%"   />              -->
            <select name="week_start" class="form-control rounded-0">
            <option value=<?= h($leaveSetting->week_start) ?>><?php echo "$leaveSetting->week_start" ?></option>          
          <?php 
            $days = array("Monday", "Tuesday", "Wednesday","Thursday","Friday","Saturday","Sunday");
            $arrlength = count($days);

            for($x = 0; $x < $arrlength; $x++){
              if(strtolower($leaveSetting->week_start)!=strtolower($days[$x])){
                echo "<option>$days[$x]</option>";
              }
            }
          ?>
          </select>
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Week Days Off</label>
            <input id="" value="<?= h($leaveSetting->weekly_days_off) ?>" name="weekly_days_off" class="form-control rounded-0" width="100%"   />                          
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Leave Type</label>
            <!-- <input id="" value="<?= h($leaveSetting->leave_type) ?>" name="leave_type" class="form-control rounded-0" width="100%"   />  -->
            <select name="leave_type" class="form-control rounded-0">
              <option value="<?= h($leaveSetting->leave_type) ?>"><?php echo "$leaveSetting->leave_type" ?></option>
              <?php
                // $conn = mysqli_connect("localhost","root","","hr_software");
                $dd_res=mysqli_query($conn,"Select leave_type,status from new_leave");
                while($r=mysqli_fetch_row($dd_res))
                { 
                  if(strtolower($r[0])!=strtolower($leaveSetting->leave_type) && strtolower($r[1])=="active"){
                    echo "<option value='$r[0]'> $r[0]</option>";
                  }
                }
              ?>
            </select>
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">No. of Holidays</label>
            <input id="" value="<?= $this->Number->format($leaveSetting->no_of_holiday) ?>" name="no_of_holiday" class="form-control rounded-0" width="100%"   /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Allowable leaves per month</label>
            <input id="" value="<?= $this->Number->format($leaveSetting->allow_per_month) ?>" name="allow_per_month" class="form-control rounded-0" width="100%"   /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Leave Threshold Limit</label>
            <input id="" value="<?= $this->Number->format($leaveSetting->threshold) ?>" name="threshold" class="form-control rounded-0" width="100%"   /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Leave Approved By</label>
            <input id="" value="<?= h($leaveSetting->approved_by) ?>"  name="approved_by" class="form-control rounded-0" width="100%"    /> 
          </div>
        </div>
      </div>
    </div>
   
  </div>
    <?= $this->Form->end() ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../webroot/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
              
<script>
  $('#datepicker').datepicker({
      uiLibrary: 'bootstrap4'
  });
  $('#datepicker2').datepicker({
      uiLibrary: 'bootstrap4'
  });
</script>
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
  </body>
</html>




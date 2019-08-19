
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
<script>
var x;
</script>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../webroot/css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

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
              <a>
                <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'AllRecordsSave','action'=>'index']) ?>' "  style="cursor:pointer;">Add new Records</li>
              </a>
            </ul>
          </li>
          <li>
            <a id="parent3" class="parent" onclick="changeActive('parent3');" href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Attendance</span></a>
            <ul class="subchildlink">
            <!-- <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Attendancerecord','action'=>'index']) ?>' "  style="cursor:pointer;">Attendance Records</li></a>              -->
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Fileuploadrecord','action'=>'index']) ?>' "  style="cursor:pointer;">File upload records</li></a>
            </ul>
          </li>
          <li>
            <a id="parent4" class="parent" onclick="changeActive('parent4');" href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Leave Request</span></a>
            <ul class="subchildlink">
            <a  class="activeclass"><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'LeaveSetting','action'=>'index']) ?>' "  style="cursor:pointer;">View Leave Setting</li></a>             
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
          <span class="userpicbox mr-2"><img src="../images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome <?php echo $username ?></span>
        </a>
         <div id="drop">
        <div class="logouuserdiv">
          <div class="imagepic"><img src="../images/User.png" alt="Navsoft Training" title="Navsoft Training"></div>
          <div class="spantext"><h5 class="mb-0"><?php echo $username ?></h5><a href="javascript:void(0)"><?php echo $email ?></a></div>
        </div>
        <div class="footerbottom">
          <a href="javascript:void" onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Users','action'=>'logout']) ?>' "><i class="icon-turn-off-1"></i> Logout</a>
        </div>
        </div>
        </div>
      </div>
    </header>
    <?= $this->Form->create($leaveSetting,['enctype'=> 'multipart/form-data']); ?>
    <!-- body container start here -->
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>Add Leave Setting</h2></div>
        <div class="col-auto">
        <button type="button" class="btn outlineblue mr-2"><a href="<?php echo Router::url(['controller'=>'LeaveSetting','action'=>'index']) ?>">Cancel</a></button>
         <button type="submit" name="submit" class="btn redbutton">submit</button>
         </div>
      </div>

<!--------------------------------------------------------------------- -->
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 class="mb-3">General Information</h3>
      <div class="row">
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Financial Year</label>

             <select id="financialYear"  name="financial_year" class="form-control rounded-0">
             <option></option>
             <?php 
              $date = date("Y");
              for($i=$date; $i>=1998;$i--)
                echo "<option>$i</option>";
             ?>
              
            </select> 
            
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Season Tenure Start Date</label>

            <input id="datepicker" name="starting_date" class="form-control rounded-0" width="100%" />
            
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Season Tenure End Date</label>
            <input id="datepicker2" name="ending_date" class="form-control rounded-0" width="100%" />
            
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Holiday Group</label>
            <!-- <input type="text" id="" name="holiday_group" placeholder="Holiday Group" class="form-control rounded-0" width="100%" />  -->
            <select name="holiday_group" class="form-control rounded-0">
              <option></option>
              <?php
                //$conn = mysqli_connect("localhost","root","","hr_software");
                $dd_res=mysqli_query($conn,"Select group_name,holiday_id from set_holiday");
                while($r=mysqli_fetch_row($dd_res))
                { 
                  echo "<option value='$r[1]'> $r[0] ($r[1]) </option>";
                }
              ?>
            </select>
          
          </div>
        </div>
        <div class="col-auto"><button type="button" class="btn rounded-circle"  data-toggle="modal" data-target="#exampleModal2"><i class="icon-add-plus-button" style="color:blue"></i></button></div>   
        
        
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">No. of hours in full day</label>

            <input type="text" id="" name="no_of_hours" class="form-control rounded-0" width="100%" />

          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Default Shift</label>

            <input type="text" id="" name="shift"  class="form-control rounded-0" width="100%" /> 

          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Week Starts on</label>

            <select name="week_start" class="form-control rounded-0">
              <option></option>
              <option>Sunday</option>
              <option>Monday</option>              
              <option>Tuesday</option>
              <option>Wednesday</option>
              <option>Thursday</option>
              <option>Friday</option>
              <option>Saturday</option>
            </select> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Allowable leaves per month</label>

            <input type="text" name="allow_per_month" id="" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">

            <!-- <input type="text" name="leave_type" id="" placeholder="Leave Type" class="form-control rounded-0" width="100%" />  -->
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
        <div class="col-auto"><button type="button" class="btn rounded-circle"  data-toggle="modal" data-target="#exampleModal1"><i class="icon-add-plus-button" style="color:blue"></i></button></div>   

        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">No. of Holidays</label>

            <input type="text" name="no_of_holiday" id="" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Week Days Off</label>
            <input type="text" id="" name="weekly_days_off" class="form-control rounded-0" width="100%" />

          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Leave Threshold Limit</label>

            <input type="text" name="threshold" id="" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Leave Approved By</label>

            <input type="text" name="approved_by" id="" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
      </div>
    </div>
   
  </div>
      <!-- tab end here  -->

      </div>
    </div>
    <!-- body container end here -->
    <?= $this->Form->end() ?>
    <footer><p>© 2019 All Right Reserved</p></footer>
    </section>
    <!-- right part section end here -->    
    </section>

 <!--  modal box  -->

 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header modalheadercust">
        <h3 class="modal-title"><i class="icon-file"></i> Set Holiday</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body modalbodycustom">
        <h4 class="mb-3">Set Holiday</h4>
        <div class="row">
          <div class="col-sm-6">
            <div class="formgroup">
              <!-- <input type="text" name="" placeholder="Set Leave Years" class="w-100"> -->
              <input type="text" id="leave_year" placeholder="Set Leave Years" class="w-100">

            </div>
          </div>
          <div class="col-sm-6">
            <div class="formgroup">
              <!-- <input type="email" name="" placeholder="Holiday Group Name" class="w-100"> -->
              <input type="text" id="group_name" placeholder="Holiday Group Name" class="w-100">

            </div>
          </div>
          <div class="col-sm-4">
            <div class="formgroup">
              <!-- <input id="" class="form-control" placeholder="Holiday Name" class="w-100" /> -->
              <input  id="h_name" class="form-control" placeholder="Holiday Name" class="w-100" />

            </div>
          </div>
            
            <div class="col-sm-4">
            <div class="formgroup">
              <!-- <input id="datepicker4" class="form-control" placeholder="Date" class="w-100" /> -->
            <input  id="starting_date" class="form-control" placeholder="Starting Date" class="w-100" />

            </div>
          </div>
          <div class="col-sm-4">
            <div class="formgroup">
              <input  id="ending_date" class="form-control" placeholder="Ending Date" class="w-100" />
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn redbutton" data-dismiss="modal">Cancel</button>
        <button type="submit" id='save1' onClick="save1();" class="btn bluebutton">Save</button>
      </div>
    </div>
  </div>
</div>

<!--  modal box  -->

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header modalheadercust">
        <h3 class="modal-title"><i class="icon-file"></i> Set Leave Type</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body modalbodycustom">
        <h4 class="mb-3">Leave Type</h4>
        <div class="row">
          <div class="col-sm-6">
            <div class="formgroup">
              <!-- <input type="text" name="" placeholder="Set Leave Years" class="w-100"> -->
              <input type="text" id="leave_type" name="leave_type" placeholder="Set Leave Type" class="w-100">

            </div>
          </div>
          <div class="col-sm-6">
            <div class="formgroup">
              <!-- <input type="email" name="" placeholder="Holiday Group Name" class="w-100"> -->
              <input type="text" id="status" name="status" placeholder="Status" class="w-100">
            </div>
          </div>
          
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn redbutton" data-dismiss="modal">Cancel</button>
        <button type="submit" id='save2' onClick="save2();" class="btn bluebutton">Save</button>
      </div>
    </div>
  </div>
</div>
<?php echo $_GET['name'] ?>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        $('#starting_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#ending_date').datepicker({
            uiLibrary: 'bootstrap4'
        });

        function save1()
        {
          var leave_year = document.getElementById('leave_year').value;

          var group_name = document.getElementById('group_name').value;

          var h_name = document.getElementById('h_name').value;

          var starting_date = document.getElementById('starting_date').value;

          var ending_date = document.getElementById('ending_date').value;

          $.ajax({
            type:"POST",
            url: "../webroot/redirect.php",
            data:{
              leave_year:leave_year,
              group_name : group_name,
              h_name : h_name,
              starting_date : starting_date,
              ending_date : ending_date
            },
            success : function(data)
            {
              location.reload();
            }


          });
        }

        function save2()
        {
          var leave_type = document.getElementById('leave_type').value;

          var status = document.getElementById('status').value;

          $.ajax({
            type:"POST",
            url: "../webroot/redirect2.php",
            data:{
              leave_type:leave_type,
              status : status,
            },
            success : function(data)
            {
              location.reload();
            }


          });
        }




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

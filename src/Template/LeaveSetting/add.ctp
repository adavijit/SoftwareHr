
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LeaveSetting $leaveSetting
 */
use Cake\Routing\Router;


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
      <div class="leftpadd">
        <a href="javascript:void(0);" class="leftlogo"><img src="../webroot/images/logo.png" alt=""></a>
        <div class="leftmain-link">
        <ul class="listofnav">
          <li>
            <a href="javascript:void(0);"><i class="icon-home"></i> <span>Dashboard</span></a>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-list-of-works"></i> <span>Employee Record</span></a>
            <ul class="subchildlink">
              <li>View Records</li>
              <li>Add/New Records</li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-long-checklist"></i> <span>Employee Attendance</span></a>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Leave Request</span></a>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-department"></i> <span>Employee Designation</span></a>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-briefcase"></i> <span>Employee Department</span></a>
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
         <div class="usernameboxdiv ml-auto">
          <span class="userpicbox mr-2"><img src="../webroot/images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome Harry</span>
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
        <button type="button" class="btn outlineblue mr-2"><a href="../leave-setting/index">Cancel</a></button>
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
             <select id="financialYear"  name="financial_year" placeholder="Financial Year" class="form-control rounded-0">
             <option>Financial Year</option>
             <?php 
              $date = date("Y");
              for($i=1998; $i<=$date;$i++)
                echo "<option>$i</option>";
             ?>
              
            </select> 
            
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="datepicker" name="starting_date" placeholder="Season Tenure Start Date" class="form-control rounded-0" width="100%" />
            
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="datepicker2" name="ending_date" placeholder="Season Tenure End Date" class="form-control rounded-0" width="100%" />
            
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <!-- <input type="text" id="" name="holiday_group" placeholder="Holiday Group" class="form-control rounded-0" width="100%" />  -->
            <select name="holiday_group" class="form-control rounded-0">
              <option>Holiday Group</option>
              <?php
                $conn = mysqli_connect("localhost","root","","hr_software");
                $dd_res=mysqli_query($conn,"Select group_name,leave_year from set_holiday");
                while($r=mysqli_fetch_row($dd_res))
                { 
                  echo "<option value='$r[0]'> $r[0] ($r[1]) </option>";
                }
              ?>
            </select>
          
          </div>
        </div>
        <div class="col-auto"><button type="button" class="btn rounded-circle"  data-toggle="modal" data-target="#exampleModal2"><i class="icon-add-plus-button" style="color:blue"></i></button></div>   
        
        
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input type="text" id="" name="no_of_hours" placeholder="No. of hours in full day" class="form-control rounded-0" width="100%" />

          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input type="text" id="" name="shift" placeholder="Default Shift" class="form-control rounded-0" width="100%" /> 

          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <select name="week_start" class="form-control rounded-0">
              <option>Weak Starts on</option>
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
            <select name="weekly_days_off" class="form-control rounded-0">
              <option>Weekly Days Off</option>
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
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <!-- <input type="text" name="leave_type" id="" placeholder="Leave Type" class="form-control rounded-0" width="100%" />  -->
            <select name="leave_type" class="form-control rounded-0">
              <option>Leave Type</option>
              <?php
                $conn = mysqli_connect("localhost","root","","hr_software");
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
            <input type="text" name="no_of_holiday" id="" placeholder="No. of Holidays" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input type="text" name="allow_per_month" id="" placeholder="Allowable leaves per month" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input type="text" name="threshold" id="" placeholder="Leave Threshold Limit" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input type="text" name="approved_by" id="" placeholder="Leave Approved By" class="form-control rounded-0" width="100%" /> 
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
<!-- <script>
$(document).ready(function(){
  $("#financialYear").change(function(){
    console.log("sad");
    var x= document.getElementById('financialYear').value;
console.log(x);
   window.location.href='http://localhost/HrSoft/LeaveSetting/add?selectId='+x;
  });
});
</script> -->
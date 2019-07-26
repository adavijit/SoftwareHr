<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NonReqLeave $nonReqLeave
 */
require '../webroot/dbconnect.php'
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
    <?= $this->Form->create($nonReqLeave,['enctype'=>'multipart/form-data']) ?>
    <!-- body container start here -->
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>Add Employee Leave Request</h2></div>
        <div class="col-auto">
          <button type="button" class="btn outlineblue mr-2"><a href="../non-req-leave/index">Cancel</a></button> 
         <button type="submit" name="submit" class="btn redbutton">Save</button>
        </div>
      </div>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 class="mb-3">Non Requested Leave</h3>
      <div class="row">
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Employee Name</label>

             <!-- <input id="" name="emp_name" class="form-control rounded-0" width="100%" />  -->
             <select name="empId" class="form-control rounded-0">
              <option></option>
              <?php
                // $conn = mysqli_connect("localhost","root","","hr_software");
                $dd_res=mysqli_query($conn,"Select empName,empId from emp_general_info");
                while($r=mysqli_fetch_row($dd_res))
                { 
                    echo "<option value='$r[1]'> $r[0] (Id: $r[1]) </option>";
                }
              ?>
            </select>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Designation</label>
            <!-- <input id="" name="designationId"  class="form-control rounded-0" width="100%" />  -->
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
          <!-- <input id="" name="department"  class="form-control rounded-0" width="100%" />  -->
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
          <label class="labelform">No of Days Requested</label>

            <input id="" name="no_of_day" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Day type</label>        
          <select name="fullday_half" class="form-control rounded-0">
              <option></option>
              <option>Full</option>
              <option>Half</option>
            </select> 
          </div>
        </div>

        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Leave type</label>        

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
          <label class="labelform">Starting Date</label>

            <input id="datepicker3" name="starting_date" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Ending Date</label>
            <input id="datepicker4" name="ending_date"  class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Balance Leave</label>
            <input id="" name="balance_leave" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Inform Status</label>

            <input id="" name="inform_status" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Inform Medium</label>
            <input id="" name="inform_medium" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Upload Document</label>
            <?php echo $this->Form->file('file',['class'=>'form-control']); ?>
          </div>
        </div>
        <div class="col-sm-12 mb-2">
        <label class="labelform">Reason</label>

          <div class="form-group addcustomcss">
            <textarea name="reason" class="form-control"></textarea>
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



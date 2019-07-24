<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NonReqLeave $nonReqLeave
 */
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
      <h3 class="mb-3">Requested Leave</h3>
      <div class="row">
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
             <input id="" name="emp_name" placeholder="Employee Name" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="" name="designationId" placeholder="Designation" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <input id="" name="department" placeholder="Department" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="" name="no_of_day" placeholder="No. of Days Requested" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <select name="fullday_half" class="form-control rounded-0">
              <option>Fullday or Halfday</option>
              <option>Full</option>
              <option>Half</option>
            </select> 
          </div>
        </div>

        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <select name="leave_type" class="form-control rounded-0">
              <option>Leave Type 1</option>
              <option>Leave Type 2</option>
              <option>Leave Type 3</option>
              <option>Leave Type 4</option>
              <option>Leave Type 5</option>              
            </select> 
          </div>
        </div>
        
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="datepicker3" name="starting_date" placeholder="Leave Starting Date" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="datepicker4" name="ending_date" placeholder="Leave Ending Date" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="" name="balance_leave" placeholder="Current Leave Balance" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="" name="inform_status" placeholder="Inform Status" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="" name="inform_medium" placeholder="Inform Medium" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <?php echo $this->Form->file('file',['class'=>'form-control']); ?>
          </div>
        </div>
        <div class="col-sm-12 mb-2">
          <div class="form-group addcustomcss">
            <textarea name="reason" class="form-control">Reason for absent</textarea>
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



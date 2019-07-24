<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LeaveSetting $leaveSetting
 */

use Cake\Routing\Router;
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
      <div class="leftpadd">
        <a href="javascript:void(0);" class="leftlogo"><img src="../../webroot/images/logo.png" alt=""></a>
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
          <span class="userpicbox mr-2"><img src="../../webroot/images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome Harry</span>
        </div>
        </div>
      </div>
    </header>

    <?= $this->Form->create($leaveSetting) ?>
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>Edit Leave Setting</h2></div>
        <div class="col-auto"><button type="button" class="btn outlineblue mr-2"><a href="../index">Cancel</a></button> <button type="submit" name="submit" class="btn redbutton">submit</button></div>
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
              <option value="h($leaveSetting->holiday_group)"><?php echo "$leaveSetting->holiday_group" ?></option>
              <?php
                $conn = mysqli_connect("localhost","root","","hr_software");
                $dd_res=mysqli_query($conn,"Select group_name,leave_year from set_holiday");
                while($r=mysqli_fetch_row($dd_res))
                { 
                  if(strtolower($r[0])!=strtolower($leaveSetting->holiday_group)){
                    echo "<option value='$r[0]'> $r[0]</option>";
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
            <input id="" value="<?= h($leaveSetting->week_start) ?>" name="week_start" class="form-control rounded-0" width="100%"   />             
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
              <option value="h($leaveSetting->leave_type)"><?php echo "$leaveSetting->leave_type" ?></option>
              <?php
                $conn = mysqli_connect("localhost","root","","hr_software");
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
</body>
<script>
  $('#datepicker').datepicker({
      uiLibrary: 'bootstrap4'
  });
  $('#datepicker2').datepicker({
      uiLibrary: 'bootstrap4'
  });
</script>
</html>

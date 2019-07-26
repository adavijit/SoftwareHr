<?php

use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmpGrp $empGrp
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css">

    <title>Welcome to Navsoft Training</title>
  </head>
  <body>
    <section class="main-content">
    <!-- left menu section start here -->
    <section class="leftmenu">
      <div class="leftpadd">
        <a href="javascript:void(0);" class="leftlogo"><img src="../../images/logo.png" alt=""></a>
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

    <?= $this->Form->create($empGrpSetting) ?>
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>Edit Employee Group Setting</h2></div>
        <div class="col-auto"><button type="button" class="btn outlineblue mr-2"><a href="<?php echo Router::url(['controller'=>'SetHoliday','action'=>'index']) ?>">Cancel</a></button> <button type="submit" name="submit" class="btn redbutton">submit</button></div>
      </div>
      <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
      <h3 class="mb-3">General Information</h3>
      <div class="row">
       
       
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Group Name</label>

            <input id="" value="<?php echo $empGrp->grp_name?>" name="group_name" class="form-control rounded-0" width="100%"   /> 
         
        </div>
        </div>

        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Employee Name</label>
          <select  id="employee_id" name="group_name" class="form-control rounded-0" width="100%" >
                            <?php
                                 $employee = TableRegistry::get('emp_general_info');
                                 $query = $employee->find('all');
                                 foreach($query as $temp){
                                   echo "<option value=$temp[empId]>$temp[empName] (Id : $temp[empId])</option>";
                                 }
                            ?>
                    </select>
            
          </div>
        </div>

        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <label class="labelform">Holiday Name</label>
          <select  id="holiday_id"  class="form-control rounded-0" width="100%" >
                        <option>Holiday name</option>
                            <?php
                               $employee = TableRegistry::get('set_holiday');
                               $query = $employee->find('all');
                               foreach($query as $temp){
                                 echo "<option value=$temp[holiday_id]>$temp[group_name] (Id : $temp[holiday_id])</option>";
                               }
                            ?>
                      </select>
            
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SetHoliday $setHoliday
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
    <?= $this->Form->create($leaveSetting,['enctype'=> 'multipart/form-data']); ?>
    <!-- body container start here -->
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>Add Holiday Group</h2></div>
        <div class="col-auto">
        <button type="button" class="btn outlineblue mr-2"><a href="../leave-setting/add">Cancel</a></button>
         <button type="submit" name="submit" class="btn redbutton">submit</button>
         </div>
      </div>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 class="mb-3">General Information</h3>
      <div class="row">
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
             <select name="leave_year" placeholder="Financial Year" class="form-control rounded-0">
             <option>Set Leave Year</option>
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
            <input id="" name="group_name" type="text" placeholder="Holiday Group Name" class="form-control rounded-0" width="100%" />
            
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="" name="h_name" type="text" placeholder="Holiday Name" class="form-control rounded-0" width="100%" />
            
          </div>
        </div>
            <!-- <div class="col-auto"><button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal2"><i class="icon-add-plus-button"></i></a></button></div> -->
        <!-- <div class="col-auto"><button type="button" class="btn orangebutton rounded-circle"><a href="<?php echo Router::url( ['controller' => 'SetHoliday','action' => 'add'])?>" ><i class="icon-add-plus-button"></i></a> </button></div> -->
            <br>
        <div class="col-sm-6 mb-2">
          <div class="form-group addcustomcss">
            <input id="datepicker" name="starting_date" placeholder="Starting Date" class="form-control rounded-0" width="100%" />

          </div>
        </div>
        <div class="col-sm-6 mb-2">
          <div class="form-group addcustomcss">
            <input id="datepicker2" name="ending_date" placeholder="Ending Date" class="form-control rounded-0" width="100%" /> 

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
    <form action="#" method="post">
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
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
              <input type="text" name="leave_year" placeholder="Set Leave Years" class="w-100">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="formgroup">
              <input type="text" name="group_name" placeholder="Holiday Group Name" class="w-100">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="formgroup">
              <input id="" name="h_name" class="form-control" placeholder="Holiday Name" class="w-100" />
            </div>
          </div>
            <div class="col-sm-4">
            <div class="formgroup">
            <input id="datepicker3" name="starting_date" class="form-control" placeholder="Starting Date" class="w-100" />
            </div>
          </div>
            <div class="col-sm-4">
            <div class="formgroup">
              <input id="datepicker4" name="ending_date" class="form-control" placeholder="Ending Date" class="w-100" />
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn redbutton" data-dismiss="modal">Cancel</button>
        
        
        <a href="<?php echo Router::url( ['action' => 'holiday'])?>" ><button type="button" name="save" class="btn bluebutton"><font color="white">Save</font></button></a>
      </div>
    </div>
  </div>
</div>
</form>

    

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



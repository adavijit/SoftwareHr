<?php
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmpGeneralInfo $empGeneralInfo
 */
?><!DOCTYPE html>
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
  <section class="leftmenu">
      <div class="leftpadd">
        <a href="javascript:void(0);" class="leftlogo"><img src="images/logo.png" alt=""></a>
        <div class="leftmain-link">
        <ul class="listofnav">
          <li>
            <a href="javascript:void(0);"><i class="icon-home"></i> <span>Dashboard</span></a>
          </li>
          <li>
            <a href="javascript:void(0);" class="activeclass"><i class="icon-list-of-works"></i> <span>Employee Record</span></a>
            <ul class="subchildlink">
              <a  style="cursor:pointer;">View Records</a>
              <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'AllRecordsSave','action'=>'index']) ?>' "  style="cursor:pointer;">Add new Records</li>
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
          <span class="userpicbox mr-2"><img src="../../images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome Harry</span>
        </div>
        </div>
      </div>
    </header>

    <!-- body container start here -->
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>View Employee Details</h2></div>
        <div class="col-auto"><button type="button" class="btn outlineblue" onclick="window.location.href='<?php  echo Router::url(array('controller'=>'EmpGeneralInfo', 'action'=>'index')) ?>'">Back</button></div>
      </div>
      
        <div class="row mb-4">
          <div class="col-sm-6 mb-2">
            <div class="detailbox position-relative">
              <h3 class="mb-3">Employee General Information</h3>
              <?php $id= base64_encode($empGeneralInfo->empId);?>
              <a href="<?php  echo Router::url(array('controller'=>'AllRecordsEdit', 'div'=>'0','action'=>'index','id'=>$id))  ?>" class="penciledit"><i class="icon-pencil"></i></a>
              <div class="row">
                <div class="col-6"><label class="employlabel">Employee Name</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $empGeneralInfo->empName ?></label></div>
                <div class="col-6"><label class="employlabel">Date of Birth</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $empGeneralInfo->dob ?></label></div>
                <div class="col-6"><label class="employlabel">Sex</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $empGeneralInfo->sex ?></label></div>
                <div class="col-6"><label class="employlabel">Nationality</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $empGeneralInfo->nationality ?></label></div>
                <div class="col-6"><label class="employlabel">Location</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $empGeneralInfo->location ?></label></div>
                <div class="col-6"><label class="employlabel">Blood Group</label></div>
                <div class="col-6"><label class="employlabel">: AB+</label></div>
                <div class="col-6"><label class="employlabel">Emergency Contact</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $empGeneralInfo->emergencyContact ?></label></div>
                 <div class="col-6"><label class="employlabel">Date of Joining</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $empGeneralInfo->dateOfJoining ?></label></div>
                 <div class="col-6"><label class="employlabel">Probation Completion Date</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $empGeneralInfo->probationCompletionDate ?></label></div>
                 <div class="col-6"><label class="employlabel">Last Woking Date</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $empGeneralInfo->lwd ?></label></div>
                <div class="col-6"><label class="employlabel">Documents</label></div>
                <div class="col-6"><label class="employlabel">: <a download href="<?php echo "../../".$empGeneralInfo->documentPath ?>">Click Here</a></label></div>
              </div>
            </div>
          </div>


          <?php
             $mobile='';
             $officeEmail='';
             $personalEmail='';
             $presentAddress='';
             $permanentAddress='';
             $PANno='';
             $PFno='';
             $ESICno='';
             $UANno='';
             $aadharNo='';             
             $conts = TableRegistry::get('employeecontact');
                $query = $conts->find('all');
                //print_r($query);
                foreach($query as $temp){
                  
                    if($empGeneralInfo->empId==$temp['empId'])
                    {
                        $mobile=$temp['mobileId'];
                        $officeEmail=$temp['officeEmail'];
                        $personalEmail=$temp['personalEmail'];
                        $presentAddress=$temp['presentAddress'];
                        $permanentAddress=$temp['permanentAddress'];
                        $PANno=$temp['PANno'];
                        $PFno=$temp['PFno'];
                        $ESICno=$temp['ESICno'];
                        $UANno=$temp['UANno'];
                        $aadharNo=$temp['aadharNo']; 
                        $doc = $temp['documentPath'];
                    }
                }

            ?>
          <div class="col-sm-6 mb-2">
            <div class="detailbox position-relative">
              <h3 class="mb-3">Employee Contact Information</h3>
              <?php $id= base64_encode($empGeneralInfo->empId);?>
              <a href="<?php  echo Router::url(array('controller'=>'AllRecordsEdit', 'div'=>'1','action'=>'index','id'=>$id))  ?>" class="penciledit"><i class="icon-pencil"></i></a>
              <div class="row">
                <div class="col-6"><label class="employlabel">Employee Phone Number</label></div>
                <div class="col-6"><label class="employlabel">:  <?php echo $mobile ?></label></div>
                <div class="col-6"><label class="employlabel">Office Email Address</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $officeEmail ?></label></div>
                <div class="col-6"><label class="employlabel">Personal Email Address</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $personalEmail ?></label></div>
                <div class="col-6"><label class="employlabel">Present Address</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $presentAddress ?></label></div>
                <div class="col-6"><label class="employlabel">Permanent Address</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $permanentAddress ?></label></div>
                <div class="col-6"><label class="employlabel">Pan Number</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $PANno ?></label></div>
                <div class="col-6"><label class="employlabel">PF No.</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $PFno ?></label></div>
                 <div class="col-6"><label class="employlabel">ESIC No.</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $ESICno ?></label></div>
                 <div class="col-6"><label class="employlabel">UAN No.</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $UANno ?></label></div>
                 <div class="col-6"><label class="employlabel">Aadhar No.</label></div>
                <div class="col-6"><label class="employlabel">: <?php echo $aadharNo ?></label></div>
                <div class="col-6"><label class="employlabel">Documents</label></div>
                <div class="col-6"><label class="employlabel">: <a download href="<?php echo "../../".$doc ?>">Click Here</a></label></div>
              </div>
            </div>
          </div>


          <?php
              $degreeName='';
              $yearOfPassing='';
              $institution='';
                        
              $academic = TableRegistry::get('academicdetails');
                 $query2 = $academic->find('all');
                 //print_r($query);
                 foreach($query2 as $temp){
                   
                     if($empGeneralInfo->empId==$temp['empId'])
                     {
                         $degreeName=$temp['highestQualification'];
                         $yearOfPassing=$temp['yearOfPassing'];
                         $institution=$temp['institution'];
                         $doc= $temp['documentPath'];
                         
                     }
                 }

          ?>

          <div class="col-sm-6 mb-2">
            <div class="detailbox position-relative">
              <h3 class="mb-3">Employee Academic Information</h3>
              <?php $id= base64_encode($empGeneralInfo->empId);?>
              <a href="<?php  echo Router::url(array('controller'=>'AllRecordsEdit', 'div'=>'2','action'=>'index','id'=>$id))  ?>" class="penciledit"><i class="icon-pencil"></i></a>
              <div class="row">
                <div class="col-6"><label class="employlabel">Degree Name</label></div>
                <div class="col-6"><label class="employlabel">:  <?php echo $degreeName ?></label></div>
                <div class="col-6"><label class="employlabel">Year of Passing</label></div>
                <div class="col-6"><label class="employlabel">:  <?php echo $yearOfPassing ?></label></div>
                <div class="col-6"><label class="employlabel">Institution</label></div>
                <div class="col-6"><label class="employlabel">:  <?php echo $institution ?></label></div>
                <div class="col-6"><label class="employlabel">Documents</label></div>
                <div class="col-6"><label class="employlabel">: <a download href="<?php echo "../../".$doc ?>">Click Here</a></label></div>
              </div>
            </div>
          </div>

          <?php
              $skillName='';
              $yearOfExp='';
             
                        
              $skills = TableRegistry::get('professionalskill');
                 $query3 = $skills->find('all');
                 //print_r($query);
                 foreach($query3 as $temp){
                   
                     if($empGeneralInfo->empId==$temp['empId'])
                     {
                         $skillName=$temp['skillName'];
                         $yearOfExp=$temp['experience'];
                         $doc= $temp['documentPath'];
                         
                     }
                 }

          ?>

          <div class="col-sm-6 mb-2">
            <div class="detailbox position-relative">
              <h3 class="mb-3">Employee Skills Information</h3>
              <?php $id= base64_encode($empGeneralInfo->empId);?>
              <a href="<?php  echo Router::url(array('controller'=>'AllRecordsEdit', 'div'=>'3','action'=>'index','id'=>$id))  ?>" class="penciledit"><i class="icon-pencil"></i></a>
              <div class="row">
                <div class="col-6"><label class="employlabel">Skill Name</label></div>
                <div class="col-6"><label class="employlabel">:   <?php echo $skillName ?></label></div>
                <div class="col-6"><label class="employlabel">Years of Experience</label></div>
                <div class="col-6"><label class="employlabel">:   <?php echo $yearOfExp ?></label></div>
                <div class="col-6"><label class="employlabel">Documents</label></div>
                <div class="col-6"><label class="employlabel">: <a download href="<?php echo "../../".$doc ?>">Click Here</a></label></div>
              </div>
            </div>
          </div>

          <?php
              $companyName='';
              $yearsOfExp='';
              $designationE='';
              $departmentE='';
             
                        
              $exp = TableRegistry::get('experiencedetails');
                 $query4 = $exp->find('all');
                 //print_r($query);
                 foreach($query4 as $temp){
                   
                     if($empGeneralInfo->empId==$temp['empId'])
                     {
                         //$companyName=$temp['skillName'];
                         $yearOfExp=$temp['experience'];
                         $designationE=$temp['designation'];
                         $departmentE=$temp['department'];
                         $doc= $temp['documentPath'];
                         
                     }
                 }

          ?>

          <div class="col-sm-6 mb-2">
            <div class="detailbox position-relative">
              <h3 class="mb-3">Employee Experience Information</h3>
              <?php $id= base64_encode($empGeneralInfo->empId);?>
              <a href="<?php  echo Router::url(array('controller'=>'AllRecordsEdit', 'div'=>'4','action'=>'index','id'=>$id))  ?>" class="penciledit"><i class="icon-pencil"></i></a>
              <div class="row">
                <div class="col-6"><label class="employlabel">Company Name</label></div>
                <div class="col-6"><label class="employlabel">:  <?php echo $companyName ?></label></div>
                <div class="col-6"><label class="employlabel">Years of Experience</label></div>
                <div class="col-6"><label class="employlabel">:  <?php echo $yearOfExp ?></label></div>
                <div class="col-6"><label class="employlabel">Designation</label></div>
                <div class="col-6"><label class="employlabel">:  <?php echo $designationE ?></label></div>
                <div class="col-6"><label class="employlabel">Department</label></div>
                <div class="col-6"><label class="employlabel">:  <?php echo $departmentE ?></label></div>
                <div class="col-6"><label class="employlabel">Documents</label></div>
                <div class="col-6"><label class="employlabel">: <a download href="<?php echo "../../".$doc ?>">Click Here</a></label></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    
    </div>
    </div>
    
    <!-- body container end here -->
      
    <footer><p>© 2019 All Right Reserved</p></footer>
    </section>
    </section>
    <!-- right part section end here -->

    <!--  modal box  -->
  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  </body>
</html>

<script> 
$(document).ready(function(){
 // $(".subchildlink").hide();
  $(".listofnav li a").click(function(){
     //$(this).toggleClass('activeclass').siblings().removeClass('activeclass');
      $(".listofnav li a").removeClass('activeclass');
      $(this).toggleClass('activeclass');
      $('.listofnav li .subchildlink').animate({
      height: 'toggle'
    });
  });
});
</script>

<script type="text/javascript">
      $('.uploadclss').on('shown.bs.modal', function () {
      $('#errormessage').trigger('focus')
      });
      $('.successm').on('shown.bs.modal', function () {
      $('#successmessage').trigger('focus')
      });
    </script>

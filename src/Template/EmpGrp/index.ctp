<?php
        require 'dbconnect.php';
        use Cake\Routing\Router;
        use Cake\ORM\TableRegistry;
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmpGrp[]|\Cake\Collection\CollectionInterface $empGrp
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">


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
            <a class="activeclass" id="parent7" class="parent" onclick="changeActive('parent7');" href="javascript:void(0);"><i class="icon-file"></i> <span>Settings</span></a>
            <ul class="subchildlink">
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'SetHoliday','action'=>'index']) ?>' "  style="cursor:pointer;">Holiday Setting</li></a>             
              <a class="activeclass"><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGrp','action'=>'index']) ?>' "  style="cursor:pointer;">Employee group setting </li></a>
            
            
            
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
          <span class="userpicbox mr-2"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome <?php echo $username ?></span>
        </a>
         <div id="drop">
        <div class="logouuserdiv">
          <div class="imagepic"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></div>
          <div class="spantext"><h5 class="mb-0"><?php echo $username ?></h5><a href="javascript:void(0)"><?php echo $email ?></a></div>
        </div>
        <div class="footerbottom">
          <a href="javascript:void" onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Users','action'=>'logout']) ?>' "><i class="icon-turn-off-1"></i> Logout</a>
        </div>
        </div>
        </div>
      </div>
    </header>

    <!-- body container start here -->
    <div class="bodytransition">
    <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>Employee Group Setting</h2></div>

       
        
        <input type="file" name="file" id="excelSheet" style="display:none;">
        <div class="col-auto"><button  data-toggle="modal" data-target="#addGroup" type="button" class="btn orangebutton rounded-circle"><i   class="icon-add-plus-button"></i></button></div>
     
      </div>
      <div>
        <table class="table employtable" id="changeActiveStatus">
  <thead>
    <tr>
      <th scope="col">Group name</th>
      <th scope="col">Employee name</th>
      <th scope="col">Holiday name</th>
      
      <th scope="col" >Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($empGrp as $empGrp): ?>
            <tr>
      
                
            
                <td><?php echo $empGrp->grp_name ?></td>
                <?php
                    $group = TableRegistry::get('emp_general_info');
                    $query = $group->find('all');
                    foreach($query as $temp)
                    {
                        if($temp['empId']== $empGrp->empId)
                        echo "<td>$temp[empName]</td>";
                    }

                ?>
                
                <?php
                    $holiday = TableRegistry::get('set_holiday');
                    $query = $holiday->find('all');
                    foreach($query as $temp)
                    {
                        if($temp['holiday_id']== $empGrp->holiday_id)
                        echo "<td>$temp[group_name]</td>";
                    }

                ?>
                <td class="actions">
                  
                <a style='color:black;' href="<?php echo Router::url(['action'=>'edit',$empGrp->id ]); ?>" ><i class='icon-pencil'></i>  </a>
          

               
             &nbsp;
                
               
               <a href="<?php echo Router::url( ['action' => 'delete', $empGrp->id])?>"><i class='icon-trash-1'></i>  </a>

                
          
                
                </td>
            </tr>




            <?php endforeach; ?>
   
   
  </tbody>
</table>

      </div>
      <div class="row mb-5">
        <div class="col-auto">
          <div class="pageloadleft"><label>Show</label><select><option>Page 1</option></select><label>Entries</label></div>
        </div>
        <div class="col-auto ml-auto">
          <nav aria-label="Page navigation example">
  <ul class="pagination paginationcss">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        >
      </a>
    </li>
  </ul>
</nav>
        </div>
      </div>

      </div>
    </div>

 <!--  modal box  -->

 <div class="modal fade" id="addGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header modalheadercust">
        <h3 class="modal-title"><i class="icon-file"></i>Set Employee Group</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body modalbodycustom">
        <h4 class="mb-2">Set Employee Group</h4>
        <div class="row">
                <div class="col-sm-12">
                    <div class="formgroup">
                    <!-- <input type="text" name="" placeholder="Set Leave Years" class="w-100"> -->
                    <input type="text" id="group_name" placeholder="Group Name" class="w-100">

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="formgroup">
                    <!-- <input type="email" name="" placeholder="Holiday Group Name" class="w-100"> -->
                    <select  id="employee_id" class="w-100">
                        <option>Employee name</option>
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
                <div class="col-sm-6">
                    <div class="formgroup">
                    <!-- <input type="email" name="" placeholder="Holiday Group Name" class="w-100"> -->
                    <select  id="holiday_id" class="w-100">
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
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn redbutton" data-dismiss="modal">Cancel</button>
        <button type="submit" onClick="saveEmpGroup();" class="btn bluebutton">Save</button>
      </div>
    </div>
  </div>
</div>

<!--  modal box  -->
    <!-- SUCCSS-->
    <div class="modal fade" id="successmessage" tabindex="-1" role="dialog" aria-labelledby="successmessage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-error"></i></div>
        <h4 class="mb-3">Success</h4>
        
        <p class="mb-3">Successfully inserted</p>
        
      </div>
     
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" onclick="jQuery('#successmessage').modal('hide');" class="btn bluebutton">Continue</button>
      </div>
    </div>
  </div>
</div>
<!-- FAIL -->
<div class="modal fade" id="errormessage" tabindex="-1" role="dialog" aria-labelledby="errormessage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-error"></i></div>
        <h4 class="mb-3">Error</h4>
        
        <p class="mb-3">Something went wrong!!!</p>
        
      </div>
     
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" onclick="jQuery('#errormessage').modal('hide');" class="btn bluebutton">Continue</button>
      </div>
    </div>
  </div>
</div>

 <!--  modal box  -->
 

<!-- Confirm -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true">
  <input type="hidden" id="xyz" name="xyz" value="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-error"></i></div>
        <h4 class="mb-3">Are you sure?</h4>
    
      </div>
     
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <?php echo "<button type='button' data-dismiss='modal' aria-label='Close' onClick='onclickFunction(3,3);' class='btn bluebutton'>Yes</button>" ?>
      </div>
    </div>
  </div>
</div>
<!-- body container end here -->
    <footer><p>© 2019 All Right Reserved</p></footer>
    </section>
    <!-- right part section end here -->

    <!-- header start here -->
    <!-- <nav class="navbar navbar-expand-lg bg-white py-2">
    <div class="container">
    <a class="navbar-brand mr-auto mr-sm-0" href="index.html"><img src="images/logo-inside.png" alt="Navsoft Training" title="Navsoft Training"></a>
    <button class="navbar-toggler p-0 border-0 navbutton" type="button" data-toggle="offcanvas">
    <i class="icon-menu"></i>
    </button>

    <div class="navbar-collapse offcanvas-collapse mobilemenu align-items-end">
        <div class="usernameboxdiv ml-auto">
          <span class="userpicbox mr-2"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome Harry</span>
        </div>
    </div>
    </div>
    </nav> -->

    <!-- header ends here -->

    
    </section>
    <div class="modal fade" id="successmessage" tabindex="-1" role="dialog" aria-labelledby="successmessage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-error"></i></div>
        <h4 class="mb-3">Success</h4>
        
        <p class="mb-3">Successfully Inserted</p>
        
      </div>
     
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" onclick="jQuery('#successmessage').modal('hide');" class="btn bluebutton">Continue</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="errormessage" tabindex="-1" role="dialog" aria-labelledby="errormessage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-error"></i></div>
        <h4 class="mb-3">Error</h4>
        <p class="mb-3">Something went wrong!</p>
      </div>
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" class="btn bluebutton">Continue</button>
      </div>
    </div>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  </body>
</html>
<script>
 function saveEmpGroup()
        {
            
          var group_name = document.getElementById('group_name').value;

          var employee_id = document.getElementById('employee_id').value;

          var holiday_id = document.getElementById('holiday_id').value;
          console.log(holiday_id);


          $.ajax({
            type:"POST",
            url: "addEmpGroup.php",
            data:{
              group_name: group_name,
              employee_id : employee_id,
              holiday_id : holiday_id
            },
            success : function(data)
            {
                
                $('#addGroup').modal("hide");
                $('#successmessage').modal("show");
                $('#changeActiveStatus').load(" #changeActiveStatus");
                
            }


          });
        }

</script>
<script> 
 $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#starting_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#ending_date').datepicker({
            uiLibrary: 'bootstrap4'
        });

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
 $('#parent7').siblings().show();
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
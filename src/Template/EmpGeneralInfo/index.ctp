<?php
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmpGeneralInfo[]|\Cake\Collection\CollectionInterface $empGeneralInfo
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
            <ul class="subchildlink">
            <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'LeaveSetting','action'=>'/index']) ?>' "  style="cursor:pointer;">View Leave Setting</li>             
              <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'ReqLeave','action'=>'/index']) ?>' "  style="cursor:pointer;">Add Requested Leave </li>
              <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'NonReqLeave','action'=>'/index']) ?>' "  style="cursor:pointer;">Add Non Requested Leave </li>
            
            
            </ul>
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
          <span class="userpicbox mr-2"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome Harry</span>
        </div>
        </div>
      </div>
    </header>

    <!-- body container start here -->
    <div class="bodytransition">
    <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>View Employee Records</h2></div>

       
        
        <input type="file" name="file" id="excelSheet" style="display:none;">
        <div class="col-auto"><button  data-toggle="modal" data-target="#exampleModal2" type="button" class="btn orangebutton rounded-circle"><i   class="icon-add-plus-button"></i></button></div>
     
      </div>
      <div>
        <table class="table employtable" id="changeActiveStatus">
  <thead>
    <tr>
      <th scope="col">Employee</th>
      <th scope="col">name</th>
      <th scope="col">Date of Joining</th>
      <th scope="col">Sex</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Locations</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Action</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($empGeneralInfo as $empGeneralInfo): ?>
            <tr>
            <td>
    <?php
    if($empGeneralInfo->photoPath=='upload/' || $empGeneralInfo->photoPath=='')
    echo "<img alt='photo' style='width:50px; height:50px; border-radius: 50%;' src='images/User.png'>";
    else
    echo "<img alt='photo' style='width:50px; height:50px; border-radius: 50%;' src='$empGeneralInfo->photoPath'>";
    ?></td>
                <td>
                  
                  <a href="<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'view',$empGeneralInfo->empId]) ?>" style='color:#007bff; cursor:pointer;'><?php echo $empGeneralInfo->empName ?></a>
            
                <td><?php echo $empGeneralInfo->dateOfJoining ?></td>
                <td><?php echo $empGeneralInfo->sex ?></td>
                <td>
                <?php
            //    echo $empGeneralInfo->empId;
                $conts = TableRegistry::get('employeecontact');
                $query = $conts->find('all');
                //print_r($query);
                foreach($query as $temp){
                  
                    if($empGeneralInfo->empId==$temp['empId'])
                    {
                        echo $temp['mobileId'];
                        // echo "sad";
                    }
                }
                
               ?>
                </td>
                <td><?php foreach($query as $temp){
                  
                  if($empGeneralInfo->empId==$temp['empId'])
                  {
                      echo $temp['location'];
                      // echo "sad";
                  }
              } ?></td>
              <td><?php echo $empGeneralInfo->bloodGroup ?></td>
                
            
                <td class="actions">
                  
                <a style='color:black;' href="<?php echo Router::url(['controller'=>'AllRecordsEdit','action'=>'index' ,'id'=>base64_encode($empGeneralInfo->empId),'div'=>'5' ]); ?>" ><i class='icon-pencil'></i>  </a>
               <?php echo "&nbsp;";

                ///////////////
                if(strtolower($empGeneralInfo->emp_status) == "active"){
                  echo " <a id='changeDiv1'  onClick='onclickFunction($empGeneralInfo->empId,1);' style='color:red;cursor:pointer;' ><i class='icon-cancel-1'></i>  </a>";
                  echo "&nbsp;";
                }
                else{
                  echo " <a id='changeDiv2' onClick='onclickFunction($empGeneralInfo->empId,2);' style='color:#00FF00;cursor:pointer;'><i class='icon-check-sign'></i>  </a>";
                  echo "&nbsp;";

                }
               
                echo " <a data-toggle='modal' data-target='#confirmModal'  onClick='deleteS($empGeneralInfo->empId);' href='javascript:void(0)'><i class='icon-trash-1'></i>  </a>";

                
                
                ?>
                
                </td>
                <td><?php echo $empGeneralInfo->emp_status ?></td>
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
 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header modalheadercust">
        <h3 class="modal-title"><i class="icon-file"></i> Add excel file</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body modalbodycustom">
        <h4 class="mb-3">Select file</h4>
        <div class="row">
        <ul class="imageuploadlist p-0 m-0">
     &nbsp;
     <li id="replaceFile"><div onclick="document.getElementById('excelSheet').click()" class="imageuploadsect imagoutlinebor"><i class="icon-add-plus-button"></i></a></div></li>
     
   </ul>
         
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn redbutton" data-dismiss="modal">Cancel</button>
        <button onclick="uploadExcel();"  type="button" class="btn bluebutton">Save</button>
      </div>
    </div>
  </div>
</div>

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
        
        <p class="mb-3">Successfully Updated</p>
        
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
  <script>

var IdDelete = '';
function deleteS(id){
  IdDelete = id;         
}     


  function uploadExcel(){
    var form_data = new FormData(); 
      console.log("asd");
      form_data.append('excelSheet', $('#excelSheet').prop('files')[0]);
      $.ajax({
        type: "POST",
        url: "uploadExcel.php",
        data:form_data,
        processData: false,
        contentType: false,
        success: function (data){
          //alert(data);
          
          $('#exampleModal2').modal("hide");
          $('#successmessage').modal("show");
          $("#changeActiveStatus").load(" #changeActiveStatus");
          
        },
        error: function(data){
          $('#errormessage').modal("show");
        }
    });
    
    
}

  

   function onclickFunction(aId,changeStatus){
     console.log("asdasd");
     if(changeStatus==3)
     {
       aId=IdDelete;
     }
    $.ajax({
        type: "POST",
        url: "changeStatus.php",
        data: {
            aId:aId,
            changeId:changeStatus

        },
        success: function (data){
          
          $("#changeActiveStatus").load(" #changeActiveStatus");
        }
    });

    
    return false;
}

$('body').on('change', '#excelSheet', function() {
  console.log("rrrr");
  var fileExtension = ['xls', 'xlsx'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) 
        {
          
       $('#exampleModal2').modal("hide");
       $('#errormessage').modal("show");
      
        }
        else{
          var x = $(this).val().replace(/.*(\/|\\)/, '');
         //console.log(x);
  $( "#replaceFile" ).replaceWith("<li><div  class='imageuploadsect'><p style='text-align:center; overflow:hidden height:inherit; width:inherit;' class='m-0'>"+x+"</p></div></li>");
  
} 
});
     
</script>
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

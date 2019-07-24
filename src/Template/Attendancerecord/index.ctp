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
          <span class="userpicbox mr-2"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome Harry</span>
        </div>
        </div>
      </div>
    </header>
    <?php $id=$_GET['id'];
//echo $id;
$conn=mysqli_connect('localhost','root','','hr_software'); 
$result1 = mysqli_query($conn,"SELECT * FROM fileuploadrecord WHERE id='$id';");
$row2 = mysqli_num_rows($result1);
if($row2){
while($row3 = $result1->fetch_assoc()){
  $month = $row3['month'];
  $year = $row3['record_Year'];
  // echo $year;
}
}
//echo $year;
?> 
    <!-- body container start here -->
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>View Attendance List: <?= $month?>-<?= $year?></h2></div>
        
        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0" id="WorkDurr" name="WorkDurr" value="">
                <option>Work duration</option>
                    <?php
                    for($i=1;$i<=12;$i++)
                    echo "<option>$i</option>";
                    ?>

              
            </select> 
          </div>
        </div>
        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0" id="empName" name="empName" value="">
              <option>Employee Name</option>
              <?php 
               $result_gen = mysqli_query($conn,"SELECT * FROM emp_general_info");
               $row_gen = mysqli_num_rows($result_gen);
              if($row_gen > 0){
                while($result_data_gen=$result_gen->fetch_assoc()){?>
                  <option><?=$result_data_gen['empName']?></option>
                  <?php
                }
              }?>
            </select> 
          </div>
        </div>
        <div class="col-auto">
          <div class="form-group addcustomcss">
          
              <div class="w-50 d-inline-block">
              
              <div class="form-check">
                <input type="checkbox" class="" id="LateBy" id="LateBy" >
                <label for="LateBy">LateBy</label>
                
              </div>
            
          </div>
        </div>
        <div class="col-auto">
        <div class="form-group addcustomcss">
              <div class="w-50 d-inline-block">
              
              <div class="form-check">
                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                <h2>Attendance Status</h2>
                <input type="radio" name="all" value="all">All</br>
                <input type="radio" name="absent" value="absent">Absent</br>
                <input type="radio" name="present" value="present">Present

              </div>
            </div>
      </div>
      <div><input type="button" name="reset" value="reset"></div>
      <div><input type="button" name="filter" value="filter"></div>
</div>
        <div class="col-auto"><button type="button" class="btn orangebutton rounded-circle" data-toggle="modal" data-target="#errormessage"><i class="icon-download-1"></i></button></div>
      </div>
      <div>

  <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendancerecord[]|\Cake\Collection\CollectionInterface $attendancerecord
 */
?>



      <div>
        <table  class="table employtable tablewhitespace">
        <thead>
        <tr>
      <th>Emp ID</th>
      <th>Employee Name</th>
      <th>Attendance Date</th>
      <th>In Time</th>
      <th>Out Time</th>
      <th>Shift</th>
      <th>Shift In Time</th>
      <th>Shift Out Time</th>
      <th>WorkDurr.</th>
      <th>OT</th>
      <th>Total Duration</th>
      <th>Late By</th>
      <th>Early Going By</th>
      <th>Attendance Status</th>
      <th>Punch Card Records</th>
              </tr>
  </thead>
  <tbody id="ttt">
    
   
    
  </tbody>
</table>

      </div>
      
        <!-- </div> -->
      <!-- </div>

      </div>
    </div>           -->

<!-- </div> -->




      <div class="row mb-5">
        <div class="col-auto">
          <div class="pageloadleft"><label>Show</label><select><option>Page 1</option></select><label>Entries</label></div>
        </div>
        <div class="col-auto ml-auto">
          <nav aria-label="Page navigation example">
  <ul class="pagination paginationcss">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        
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
    <!-- body container end here -->
    <footer><p>© 2019 All Right Reserved</p></footer>
    </section>
    <!-- right part section end here -->
    
    </section>

        <!--  modal box  -->
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
        <p class="mb-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
      </div>
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" class="btn bluebutton">Continue</button>
      </div>
    </div>
  </div>
</div>


    <div class="modal fade" id="successmessage" tabindex="-1" role="dialog" aria-labelledby="successmessage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-success"></i></div>
        <h4 class="mb-3">Success</h4>
        <p class="mb-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
      </div>
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" class="btn bluebutton">Download</button>
      </div>
    </div>
  </div>
</div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script> 
$(document).ready(function(){
  $(".subchildlink").hide();
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

  </body>
</html>
<script>
var WorkDurr = '';
var empName = '';
var check= false;

$("#WorkDurr,#empName,#LateBy").change(function(){
 // console.log(document.getElementById('WorkDurr').value);
  WorkDurr = document.getElementById('WorkDurr').value;
  empName = document.getElementById('empName').value;
  if(document.getElementById('LateBy').checked==true){
  check =1;
}
if(document.getElementById('LateBy').checked==false){
  check =0;
}

  filter_data();
});


$(document).ready(function(){

filter_data();


});
function filter_data()
{
   $('.filter_data').html('<div id="loading" style="" ></div>');
    $.ajax({
        url:"fetch_data.php",
        method:"POST",
        data:{WorkDurr:WorkDurr,empName:empName,check:check},
        success:function(data){
            $('#ttt').html(data);
        }
    });
}
</script>
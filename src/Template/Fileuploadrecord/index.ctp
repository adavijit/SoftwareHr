<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fileuploadrecord[]|\Cake\Collection\CollectionInterface $fileuploadrecord
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
    <link rel="stylesheet" type="text/css" href="css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
              <a  style="cursor:pointer;">
              <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'index']) ?>' "  style="cursor:pointer;">
              View Records</li></a>
              <a>
                <li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'AllRecordsSave','action'=>'index']) ?>' "  style="cursor:pointer;">Add new Records</li>
              </a>
            </ul>
          </li>
          <li>
            <a id="parent3" class="parent" onclick="changeActive('parent3');" href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Attendance</span></a>
            <ul class="subchildlink">
            <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Attendancerecord','action'=>'index']) ?>' "  style="cursor:pointer;">Attendance Records</li></a>             
              <a class="activeclass"><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'Fileuploadrecord','action'=>'index']) ?>' "  style="cursor:pointer;">File upload records</li></a>
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
            <a id="parent7" class="parent" onclick="changeActive('parent7');" href="javascript:void(0);"><i class="icon-file"></i> <span>Settings</span></a>
            <ul class="subchildlink">
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'SetHoliday','action'=>'index']) ?>' "  style="cursor:pointer;">Holiday Setting</li></a>             
              <a><li  onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGrp','action'=>'index']) ?>' "  style="cursor:pointer;">Employee group setting </li></a>
            
            
            
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
        
        <div class="col-auto"><a href='fileuploadrecord/add'><button type="button" class="btn orangebutton rounded-circle"><i class="icon-add-plus-button"></i></button></a></div>
        <div class="col-auto">
             <div class="form-group addcustomcss">
                      <input  placeholder="select Date" class="form-control" id="dt" value='' width="100%" />
                      <!-- <input type="text" id="form1" class="form-control"> -->
                      <!-- <label for="form1" class="labelform">Select Date</label> -->
                    </div>
        </div>
        <div class="col-auto">
          <div class="form-group addcustomcss">
          
             <select class="form-control rounded-0" value="month" name="month" id="month">
             <option>Month</option>
             <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
             
            </select> 
            <!-- <label for="form1" class="labelform">Select Month</label> -->
          </div>
        </div>
        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0" name="record_Year" id="record_Year">
             <option>Year</option>
               <?php
               $year=date("Y");
               for($i=1990;$i<=$year;$i++)
               echo "<option>$i</option>";
                ?>
              
             
            </select> 
            <!-- <label for="form1" class="labelform">Year</label> -->
          </div>
        </div>
        <div class="col-auto"><button type="button" class="btn outlineblue rounded-circle px-0" onclick="return RefreshWindow();"><i class="icon-refresh-button"></i></button></div>
      </div>
      <div>
        <table class="table employtable " id="dtBasicExample">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Month</th>
      <th scope="col">Date of upload</th>
      <th scope="col">Year</th>
      <th scope="col">Attendance Sheet Name</th>
      <th scope="col">Attendance Sheet Path</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  
  
    <!-- <tr>
      <td><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></td>
      <td><a href="javascript:void(0)">Janet Hudson</a></td>
      <td>16/01/2006</td>
      <td>Male</td>
      <td>(791)718-6670</td>
      <td class="action"><a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal"><i class="icon-pencil"></i></a> <a href="javascript:void(0)"><i class="icon-cancel-1"></i></a> <a href="javascript:void(0)"><i class="icon-trash-1"></i></a></td>
      
    </tr> -->
    <tbody id="table_list">
            
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
    <!--<li class="page-item">
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
    </li>-->
    <?php   echo $this->Paginator->prev('< ' . __('Prev'), array('tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'page-item'), null, array('class' => 'page-item'));
    echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
    echo $this->Paginator->numbers(array('separator' => '','tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'page-item')); echo "&nbsp;"; echo "&nbsp;";echo "&nbsp;";
    echo $this->Paginator->next(__('Next').' >', array('tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'page-item'), null, array('class' => 'page-item'));
    
    ?>
  </ul>

</nav>
        </div>
      </div>
      </div>
    </div>
    <!-- body container end here -->
    <footer><p>© 2019 All Right Reserved</p></footer>
   
  </section>
</section>

<?php $path=  Router::url(['controller'=>'Attendancerecord','action'=>'index']);

?>

    

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css" />
   
</body>
</html>
<script type="text/javascript">
 
 var month='';
 var dt = '';
 var record_Year='';
 function RefreshWindow()
{
         window.location.reload(true);
}
 $("#month,#dt,#record_Year").change(function(){
  month=document.getElementById('month').value;
  dt=document.getElementById('dt').value;
  record_Year=document.getElementById('record_Year').value;
  // console.log(month+dt+record_Year);
 filter_data();
 });

 

$(document).ready(function(){
  // console.log(month);
  filter_all();
}
);
function filter_all(){
  $.ajax({
    url:"files_list.php",
    method:"POST",
    data:{
      test:1,
      path : "<?php echo $path ?>"
    
    },
    success:function(data){
           $('#table_list').html(data);
           
        }
  });
}

function filter_data(){
  // console.log(month);
  
  $.ajax({
    url:"files_list.php",
    method:"POST",
    data:{
      month:month,
      dt:dt,
      record_Year:record_Year,
      path : "<?php echo $path ?>"
    },
    success:function(data){
    $('#table_list').html(data);
        }
  });
}

$('#dt').datepicker({
            uiLibrary: 'bootstrap4'
        });

    $(document).ready(function(){
    $(".menuhomem").click(function(){
    $(".main-content").toggleClass("minleftmenu");
    });
    });

    $(document).ready( function(){
      
    $('.usernameboxdiv').click( function(event){
        
        event.stopPropagation();
        
        $('#drop').toggle();
        
    });
    
    $(document).click( function(){

        $('#drop').hide();

    });

});
/////////////////////////////////////////////
$(document).ready(function(){
 // $(".subchildlink").hide();
 $('.parent').siblings().toggle();
 $('#parent3').siblings().show();
});

    function changeActive(id){
      
      let x= document.getElementById(id).id;
      // console.log(x);
      let idName = '#'+x;
      // console.log(idName);
     $('.activeclass').siblings().hide();
      $(idName).siblings().toggle();
      $('.parent').removeClass('activeclass');
      $(idName).addClass('activeclass');
    //  $('.dashboard').removeClass('activeclass');
    }

</script>


    


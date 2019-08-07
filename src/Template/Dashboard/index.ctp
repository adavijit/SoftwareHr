<?php
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
require 'dbconnect.php';
$data1='';
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "https://code.highcharts.com/highcharts.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>

<script>
// $(document).ready(function(){
//   $("li").click(function(){
//     $("a").toggle();
//   });
// });
</script>
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
            <a id="parent1" onclick="changeActive('parent1')" class="activeclass parent" href="<?php echo Router::url(['controller'=>'Dashboard','action'=>'index']) ?>"><i class="icon-home"></i> <span>Dashboard</span></a>
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
         <a href="javascript:void(0)" class="usernameboxdiv ml-auto d-block">
          <span class="userpicbox mr-2"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome <?php echo $username ?></span>
        </a>
         <div id="drop">
        <div class="logouuserdiv">
          <div class="imagepic"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></div>
          <div class="spantext"><h5 class="mb-0"> <?php echo $username ?></h5><a href="javascript:void(0)"> <?php echo $email ?></a></div>
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
          <div class="col-sm-3">
            <div class="card border-0">
              <div class="card-body cardashtop">
                <h3>New employee joining this month</h3>
                <div class="row">
                  <div class="col"><span class="numbering"><?php
                  $test1=0;
                  $now = new \DateTime('now');
                  $month = $now->format('m');
                  $year = $now->format('Y');
                  $res= mysqli_query($conn,"SELECT * FROM dashboard_graph WHERE month_s=$month AND year_s=$year ");
                  foreach($res as $temp){
                    $val = $temp['emp_count'];
                  $test1=1;
                  }
                  if($test1!=0)
                  echo $val;
                  else
                  echo 0;;
                 
                  ?></span></div>
                  <div class="col-auto"><i class="icon-group-1-1"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card border-0">
              <div class="card-body cardashtop">
                <h3>No. of total active employee</h3>
                <div class="row">
                  <div class="col"><span class="numbering">
                  <?php
                  $qr= mysqli_query($conn,"SELECT * FROM emp_general_info WHERE emp_status='Active' ");
                  $res= mysqli_num_rows($qr);
                  echo $res;
                  ?></span></div>
                  <div onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'index']) ?>' "  style="cursor:pointer;" class="col-auto"><i class="icon-logout"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card border-0">
              <div class="card-body cardashtop">
                <h3>Unapproved Leave request</h3>
                <div class="row">
                  <div class="col"><span class="numbering">
                  <?php
                  $qr= mysqli_query($conn,"SELECT * FROM new_leave WHERE status='inactive' ");
                  $res= mysqli_num_rows($qr);
                  echo $res;
                  ?>
                  </span></div>
                  <div class="col-auto"><i class="icon-bar-chart-1"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card border-0">
              <div class="card-body cardashtop">
                <h3>No. of employees left last month</h3>
                
                <div class="row">
                  <div class="col"><span class="numbering">
                  
                  <?php
                $now = new \DateTime('now');
                $month = $now->format('m')-1;
                $year = $now->format('Y');
                $date= date("Y-m-d");
                $first= date("Y-n-j", strtotime("first day of previous month"));
                $last= date("Y-n-j", strtotime("last day of previous month"));
                 $tempQuery = mysqli_query($conn,"SELECT * FROM emp_general_info WHERE lastWorkingDate BETWEEN '$first' AND '$last' AND emp_status= 'Inactive' ");
                 
                $res= mysqli_num_rows($tempQuery);

                
                echo $res;
                ?>
                  </span></div>
                  <div class="col-auto"><i class="icon-user"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <div class="card border-0">
              <div class="card-body dashboardgraph">
                <div class="row">
                  <div class="col"><h4>Statistics</h4></div>
                  <div class="col-auto">
          <div class="form-group addcustomcss">
          
             <select class="form-control rounded-0" name="year" id="year">
             <option>Year</option>
              <?php
                for($i=2014;$i<=date("Y");$i++)
                {
                    echo "<option>$i</option>";
                }

              ?>
             
            </select> 
            <!-- <label for="form1" class="labelform">Select Month</label> -->
          </div>
        </div>
              
	   
			<canvas id="chart" style="width: 100%; height: 50vh; background: white; "></canvas>


              </div>
            </div>
          </div>
      </div>
      <div>

      </div>
     
      </div>
    </div>
    <!-- body container end here -->
    <footer><p>© 2019 All Right Reserved</p></footer>
    </section>
   
    
    </section>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });

    $(document).ready(function(){
    $(".menuhomem").click(function(){
    $(".main-content").toggleClass("minleftmenu");
    });
    });

    $(document).ready( function(){
      $('.parent').siblings().toggle();

    $('.usernameboxdiv').click( function(event){
        
        event.stopPropagation();
        
        $('#drop').toggle();
        
    });
    
    $(document).click( function(){

        $('#drop').hide();

    });

});
/////////////////////////////////////////////

    function changeActive(id){
      
      let x= document.getElementById(id).id;
      let idName = '#'+x;
     $('.activeclass').siblings().hide();
      $(idName).siblings().toggle();
      $('.parent').removeClass('activeclass');
      $(idName).addClass('activeclass');
    }
    </script>

  </body>
</html>
<style type="text/css">			
		
			.container {
				color: #E8E9EB;
        height: 50vh;
			}
</style>

<script>  
$(document).ready(function(){
  var d = new Date();
  var n = d.getFullYear();
  var event = [];
var monthEvent=[];
  $.ajax({
    type: "POST",
    data:{
      year_s: n
    },
    url: "dashboardDatasets.php",
    success : function(data){
      var obj = JSON.parse(data);
       
      if(obj[0]!='' && obj[1]!='')
      {
        
     var pattern = /"[ ]*(\d)*[ ]*"/g;
     event = obj[0]
    .match(pattern)
    .map(s => parseInt(s.split(`"`).filter(i => !!i.trim())));

    monthEvent = obj[1]
    .match(pattern)
    .map(s => parseInt(s.split(`"`).filter(i => !!i.trim())));

    plot(event,n,monthEvent);
      }
     
    }
  })




});



$("#year").change(function(){
var event = [];
var monthEvent=[];
  var year= document.getElementById('year').value;
  if(year=='Year')
  {
  var d = new Date();
  year = d.getFullYear();
  }
  $.ajax({
    type: "POST",
    data:{
      year_s: year
    },
    url: "dashboardDatasets.php",
    success : function(data){
      var obj = JSON.parse(data);
      
      if(obj[0]!='' && obj[1]!='')
      {
        var pattern = /"[ ]*(\d)*[ ]*"/g;
     event = obj[0]
    .match(pattern)
    .map(s => parseInt(s.split(`"`).filter(i => !!i.trim())));

    monthEvent = obj[1]
    .match(pattern)
    .map(s => parseInt(s.split(`"`).filter(i => !!i.trim())));

    plot(event,year,monthEvent);
      }
      else{
        event = [];
        monthEvent=[];
        plot(event,year,monthEvent);
      }
     
    }
  })



  
 });

///////////////////////////
function plot(event,year,month){
  monthObj=[];
  month.forEach(function(item){
  switch(item) {
    case 1:
    monthObj.push("Jan");
    break;
    case 2:
    monthObj.push("Feb");
    break;
    case 3:
    monthObj.push("Mar");
    break;
    case 4:
    monthObj.push("Apr");
    break;
    case 5:
    monthObj.push("May");
    break;
    case 6:
    monthObj.push("Jun");
    break;
    case 7:
    monthObj.push("Jul");
    break;
    case 8:
    monthObj.push("Aug");
    break;
    case 9:
    monthObj.push("Sep");
    break;
    case 10:
    monthObj.push("Oct");
    break;
    case 11:
    monthObj.push("Nov");
    break;
    case 12:
    monthObj.push("Dec");
    break;
  default:
    break;
}
});
  var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: monthObj,
		            datasets: 
		            [
						{
		                label: 'Data for '+year,
                    data: event,
		                backgroundColor: 'transparent',
		                borderColor:'#2476B2',
		                borderWidth: 3
 
		            }
					]
		        },
		     
		        options: {
		            
                  scales:{
                    yAxes: [{beginAtZero: false, stepValue: 1 ,ticks: {
                      min :0,
                stepSize: 1
            }} ],
                    xAxes: [{autoskip: true, maxTicketsLimit: 20}]
                    },
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'black', fontSize: 16}}
		        }
		    });
   
    
}
			</script>
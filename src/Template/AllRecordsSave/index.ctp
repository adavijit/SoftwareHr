<?php
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
            <a href="<?php echo Router::url(['controller'=>'Dashboard','action'=>'/index']) ?>"><i class="icon-home"></i> <span>Dashboard</span></a>
          </li>
          <li>
            <a href="javascript:void(0);" class="activeclass"><i class="icon-list-of-works"></i> <span>Employee Record</span></a>
            <ul class="subchildlink">
            <li style="cursor:pointer;" onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'index']) ?>' ">View Records</li>
              <a style="cursor:pointer;">Add new Records</a>
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
    
 <!-- body container start here__________________________________________________________________________________ -->
    <div class="bodytransition">
    <form method='post' id='form_data' enctype='multipart/form-data'>
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>Add Employee Records</h2></div>
        <div class="col-auto"><button type="button" onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'index']) ?>' " class="btn outlineblue mr-2">Cancel</button> <button onClick="onclickFunction();" type="button" class="btn redbutton">Save</button></div>
      </div>

      <!-- tab start here  -->
      <ul id="myDIV" class="nav nav-tabs">
    <li class="a active"><a data-toggle="tab" href="#home">General Details</a></li>
    <li class="a"><a data-toggle="tab" href="#menu1">Contact Details</a></li>
    <li class="a"><a data-toggle="tab" href="#menu2">Academic Details</a></li>
    <li class="a"><a data-toggle="tab" href="#menu3">Skills Details</a></li>
    <li class="a"><a data-toggle="tab" href="#menu4">Experience Details</a></li>
  </ul>
  
<!-- ______________________________________GENERAL INFORMATION STARTS HERE________________________________________-->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 class="mb-3">Employee General Information</h3>
      <div class="row">
        <div class="col-sm-1 mb-2"><a id='replaceImg'  onclick="document.getElementById('getPhoto').click()" class="imageupload"><i class="icon-camera"></i></a></div>
        <input type='file' id="getPhoto"  style="display:none">
        <div class="col-sm-11  mb-2">
        <div class="row">
            <div class="col-sm-4">
              <div class="form-group addcustomcss">
                <input id="employeeName" name='employeeName' placeholder="Employee Name" class="form-control rounded-0" width="100%" />
              </div>
    
            </div>
            <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="dob" placeholder="Date of Birth" class="form-control rounded-0" width="100%" />
          </div>
        </div>
            <div class="col-sm-4">
              <div class="form-group addcustomcss">
                <select id='sex' class="form-control rounded-0">
                  <option>Sex</option>
                  <option>Male</option>
                  <option>Female</option>

                </select> 
              </div>
            </div>
        </div>
        </div>
        
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <select name='nationality' id='nationality' class="form-control rounded-0">
              <option>Nationality</option>
              <?php
$content = file_get_contents("allCountries.json");

$result  = json_decode($content);


foreach($result as $temp)
{
    echo "<option>$temp->name</option>";
}

?>
            </select> 
          </div>
    
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
          <select name='location' id='location' class="form-control rounded-0">
              <option>Location</option>
              <?php
$content = file_get_contents("allStates.json");

$result  = json_decode($content);


foreach($result as $temp)
{
    echo "<option>$temp->name</option>";
}

?>
            </select>
           
          </div>
        </div>
   

        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <select id="bloodGroup" class="form-control rounded-0">
              <option>Blood Group</option>
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>AB+</option>
              <option>AB-</option>
              <option>O+</option>
              <option>O-</option>

            </select> 
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="emergencyContact" placeholder="Emergency Contact" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="dateOfJoining" placeholder="Date of Joining" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="probationDate" placeholder="Probation Completion Date" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="lwd" placeholder="Last Working Date" class="form-control rounded-0" width="100%" />
          </div>
        </div>
      </div>
      <h3 class="my-3">KYC Informations</h3>
      <ul class="imageuploadlist p-0 m-0">
        <!-- <li><div class="imageuploadsect"><p class="m-0">Upload 1</p></div></li> -->
        <li id='empFileOpen'><div  onclick="document.getElementById('empGenFile').click()"  class="imageuploadsect imagoutlinebor"><a class="m-0"><i class="icon-add-plus-button"></i></a></div></li>
        <input type="file" id="empGenFile" style='visibility: hidden;'>
      </ul>
    </div>

<!-- ______________________________________CONTACT INFORMATION STARTS HERE________________________________________-->
    <div id="menu1" class="tab-pane fade">
      <h3 class="mb-3">Employee Contact Information</h3>
      <div class="row">

        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
             <input id="phoneNumber" placeholder="Employee Phone Number" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="officeEmail" placeholder="Office Email Address" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="personalEmail" placeholder="Personal Email Address" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="presentAddress" placeholder="Present Address" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="permanentAddress" placeholder="Permanent Address" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="panNO" placeholder="Pan Number" class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="pfNO" placeholder="PF No." class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="esicNO" placeholder="ESIC No." class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="uanNO" placeholder="UAN No." class="form-control rounded-0" width="100%" />
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="aadharNO" placeholder="Aadhar No." class="form-control rounded-0" width="100%" />
          </div>
        </div>
      </div>
      <h3 class="my-3">Contact Informations</h3>
      <ul class="imageuploadlist p-0 m-0">
        
        <li id='empContOpen'><div  onclick="document.getElementById('empContFile').click()" class="imageuploadsect imagoutlinebor"><a  class="m-0"><i class="icon-add-plus-button"></i></a></div></li>
        <input type="file" style='visibility: hidden;' id="empContFile" name="">
      </ul>
    </div>
    
<!-- ______________________________________________Academic STARTS HERE___________________________________________-->
    <div id="menu2" class="tab-pane fade">
     <h3 class="mb-3">Employee Academic Information</h3>
      <div class="row">

        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
             <input id="degreeName" placeholder="Degree Name" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="yearOfPassing" placeholder="Year of Passing" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="institution" placeholder="Institution" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
      </div>
      <h3 class="my-3">Academic Informations</h3>
      <ul class="imageuploadlist p-0 m-0">
        <li id='empAcademicOpen'><div  onclick="document.getElementById('empAcademicFile').click()"  class="imageuploadsect imagoutlinebor"><a  class="m-0"><i class="icon-add-plus-button"></i></a></div></li>
        <input type="file" style='visibility: hidden;' id="empAcademicFile" name="" >
      </ul>
    </div>
    <!-- ______________________________________________SKILLS STARTS HERE___________________________________________-->
    <div id="menu3" class="tab-pane fade">
      <h3 class="mb-3">Employee Skills Information</h3>
      <div class="row">

        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
             <input id="skillName" placeholder="Skill Name" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="yearsOfExp" placeholder="Years of Experience" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="form-group addcustomcss">
            <input id="expInstitution" placeholder="Institution" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
      </div>
      <h3 class="my-3">Academic Informations</h3>
      <ul class="imageuploadlist p-0 m-0">
        <li id="empSkillOpen"><div  onclick="document.getElementById('empSkillFile').click()" class="imageuploadsect imagoutlinebor"><a class="m-0"><i class="icon-add-plus-button"></i> </a></div></li>
        <input type="file"  style='visibility: hidden;' id="empSkillFile" name="">
      </ul>
    </div>
    <!-- ______________________________________________Employee Experience STARTS HERE___________________________________________-->
    <div id="menu4" class="tab-pane fade">
      <h3 class="mb-3">Employee Experience Information</h3>
      <div class="row">

        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
             <input id="companyName" placeholder="Company Name" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <input id="expYears" placeholder="Years of Experience" class="form-control rounded-0" width="100%" /> 
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <select  id="designation" class="form-control rounded-0">
            <option>Designation</option>
            <?php
              $conn = mysqli_connect("localhost","root","","hr_software");
              $sql="SELECT * FROM designation";
              $res=mysqli_query($conn,$sql);
              foreach($res as $row)
              {
                echo "<option>$row[designation]</option>";
              }

            ?>
                  
                </select>
          </div>
        </div>
        <div class="col-sm-3 mb-2">
          <div class="form-group addcustomcss">
            <select id="department" class="form-control rounded-0">
                  <option>Department</option>
                  <?php
                  $conn = mysqli_connect("localhost","root","","hr_software");
                  $sql1="SELECT * FROM departmenttable";
                    $res1=mysqli_query($conn,$sql1);
                    foreach($res1 as $row1)
                    {
                      echo "<option>$row1[department]</option>";
                    }

                  ?>
                </select>
          </div>
        </div>
      </div>
      <h3 class="my-3">Skill Informations</h3>
      <ul class="imageuploadlist p-0 m-0">
     
        <li id="empExpOpen"><div onclick="document.getElementById('empExpFile').click()" class="imageuploadsect imagoutlinebor"><i class="icon-add-plus-button"></i></a></div></li>
        <input type="file"  style='visibility: hidden;' id="empExpFile" name="">
      </ul>
    </div>
  </div>
      <!-- tab end here  -->

      </div>
      </form>
    </div>
    <!-- body container end here -->
    <footer><p>© 2019 All Right Reserved</p></footer>
    </section>
    <!-- right part section end here -->    
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
        <button type="button" onclick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'index']) ?>' " class="btn bluebutton">Continue</button>
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
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

 <script>
        $('#dateOfJoining').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#probationDate').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#lwd').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#dob').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

  </body>
</html>
<script>
function theFunction()
{
    document.getElementById('getPhoto').click();
}
function onclickFunction(){
   

var form = $(this);
var url = "../webroot/addAllRecords.php";
var empName = document.getElementById('employeeName').value;

console.log(empName);

  
    var form_data = new FormData();        

    //General Info insertion          
    form_data.append('profilePhoto', $('#getPhoto').prop('files')[0]);
    form_data.append('employeeName', $('#employeeName').val());
    form_data.append('dob', $('#dob').val());
    form_data.append('sex', $('#sex').val());
    form_data.append('nationality', $('#nationality').val());
    form_data.append('location', $('#location').val());
    form_data.append('lwd', $('#lwd').val());
    form_data.append('dateOfJoining', $('#dateOfJoining').val());
    form_data.append('probationDate', $('#probationDate').val());
    form_data.append('bloodGroup', $('#bloodGroup').val());
    form_data.append('emergencyContact', $('#emergencyContact').val());
    form_data.append('empGenFile', $('#empGenFile').prop('files')[0]);

    //Contact Details insertion
    form_data.append('phoneNumber', $('#phoneNumber').val());
    form_data.append('officeEmail', $('#officeEmail').val());
    form_data.append('personalEmail', $('#personalEmail').val());
    form_data.append('presentAddress', $('#presentAddress').val());
    form_data.append('permanentAddress', $('#permanentAddress').val());
    form_data.append('panNO', $('#panNO').val());
    form_data.append('pfNO', $('#pfNO').val());
    form_data.append('esicNO', $('#esicNO').val());
    form_data.append('uanNO', $('#uanNO').val());
    form_data.append('aadharNO', $('#aadharNO').val());
    form_data.append('empContFile', $('#empContFile').prop('files')[0]);


    //Academic Details insertion
    form_data.append('degreeName', $('#degreeName').val());
    form_data.append('yearOfPassing', $('#yearOfPassing').val());
    form_data.append('institution', $('#institution').val());
    form_data.append('empAcademicFile', $('#empAcademicFile').prop('files')[0]);

    //Skill Details insertion
    form_data.append('skillName', $('#skillName').val());
    form_data.append('yearsOfExp', $('#yearsOfExp').val());
    form_data.append('expInstitution', $('#expInstitution').val()); 
    form_data.append('empSkillFile', $('#empSkillFile').prop('files')[0]);  

    //Employee Experience insertion
    form_data.append('companyName', $('#companyName').val());
    form_data.append('expYears', $('#expYears').val());
    form_data.append('designation', $('#designation').val());  
    form_data.append('department', $('#department').val());   
    form_data.append('empExpFile', $('#empExpFile').prop('files')[0]); 





    $.ajax({
        type: "POST",
        url: "addAllRecords.php",
        data:form_data,
        processData: false,
        contentType: false,
        success: function (data){
          $('#successmessage').modal("show");

        },
        error: function(data)
        {
          $('#errormessage').modal("show");
        }
    });
}
/*function saveAll(){
     //document.getElementById('employeeName').val();
     var empName=document.getElementById('employeeName').value;
    console.log(empName);
}
*/
$('body').on('change', '#getPhoto', function() {
  $( "#replaceImg" ).replaceWith( "<img class='imageupload' id='profilePhoto' style='overflow:hidden height:inherit; width:inherit;'>" );
  var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
$(this).hide();
});
$('body').on('change', '#empGenFile', function() {
  console.log("xxx");
  var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) 
        {
         var x = $(this).val().replace(/.*(\/|\\)/, '');
         //console.log(x);
  $( "#empFileOpen" ).replaceWith("<li><div  class='imageuploadsect'><p style='text-align:center; overflow:hidden height:inherit; width:inherit;' class='m-0'>"+x+"</p></div></li>");
  
        }
        else{
          if (this.files && this.files[0]) {

            $( "#empFileOpen" ).replaceWith("<li><div  class='imageuploadsect'><img id='empGenDoc' style=' width:inherit;height:100%;'/></div></li>");
var reader = new FileReader();
reader.onload = empGenDocIsLoaded;
reader.readAsDataURL(this.files[0]);
$(this).hide();
}
} 
});
$('body').on('change', '#empContFile', function() {
  console.log("xxzzzx");
  var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) 
        {
         var x = $(this).val().replace(/.*(\/|\\)/, '');
         //console.log(x);
  $( "#empContOpen" ).replaceWith("<li><div  class='imageuploadsect'><p style='text-align:center;overflow:hidden height:inherit; width:inherit;' class='m-0'>"+x+"</p></div></li>");
  
        }
        else{
          if (this.files && this.files[0]) {

            $( "#empContOpen" ).replaceWith("<li><div  class='imageuploadsect'><img id='empContDoc' style=' width:inherit;height:100%;'/></div></li>");
var reader = new FileReader();
reader.onload = empContDocIsLoaded;
reader.readAsDataURL(this.files[0]);
$(this).hide();
}
} 
});

$('body').on('change', '#empAcademicFile', function() {

  var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) 
        {
         var x = $(this).val().replace(/.*(\/|\\)/, '');
         //console.log(x);
  $( "#empAcademicOpen" ).replaceWith("<li><div  class='imageuploadsect'><p style='text-align:center;overflow:hidden height:inherit; width:inherit;' class='m-0'>"+x+"</p></div></li>");
  
        }
        else{
          if (this.files && this.files[0]) {

            $( "#empAcademicOpen" ).replaceWith("<li><div  class='imageuploadsect'><img id='empAcademicDoc' style=' width:inherit;height:100%;'/></div></li>");
var reader = new FileReader();
reader.onload = empAcademicDocIsLoaded;
reader.readAsDataURL(this.files[0]);
$(this).hide();
}
} 
});

$('body').on('change', '#empSkillFile', function() {
  console.log("qqqqq");
  var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) 
        {
         var x = $(this).val().replace(/.*(\/|\\)/, '');
         //console.log(x);
  $( "#empSkillOpen" ).replaceWith("<li><div  class='imageuploadsect'><p style='text-align:center; overflow:hidden height:inherit; width:inherit;' class='m-0'>"+x+"</p></div></li>");
  
        }
        else{
          if (this.files && this.files[0]) {

            $( "#empSkillOpen" ).replaceWith("<li><div  class='imageuploadsect'><img id='empSkillDoc' style=' width:inherit;height:100%;'/></div></li>");
var reader = new FileReader();
reader.onload = empSkillDocIsLoaded;
reader.readAsDataURL(this.files[0]);
$(this).hide();
}
} 
});
$('body').on('change', '#empExpFile', function() {
  console.log("rrrr");
  var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) 
        {
         var x = $(this).val().replace(/.*(\/|\\)/, '');
         //console.log(x);
  $( "#empExpOpen" ).replaceWith("<li><div  class='imageuploadsect'><p style='text-align:center; overflow:hidden height:inherit; width:inherit;' class='m-0'>"+x+"</p></div></li>");
  
        }
        else{
          if (this.files && this.files[0]) {

            $( "#empExpOpen" ).replaceWith("<li><div  class='imageuploadsect'><img id='empExpDoc' style=' width:inherit;height:100%;'/></div></li>");
var reader = new FileReader();
reader.onload = empExpDocIsLoaded;
reader.readAsDataURL(this.files[0]);
$(this).hide();
}
} 
});
function imageIsLoaded(e) {
$('#profilePhoto').attr('src', e.target.result);
};


function empGenDocIsLoaded(e) {
$('#empGenDoc').attr('src', e.target.result);
};

function empContDocIsLoaded(e) {
$('#empContDoc').attr('src', e.target.result);
};
function empAcademicDocIsLoaded(e) {
$('#empAcademicDoc').attr('src', e.target.result);
};
function empSkillDocIsLoaded(e) {
$('#empSkillDoc').attr('src', e.target.result);
};
 
function empExpDocIsLoaded(e) {
$('#empExpDoc').attr('src', e.target.result);
};
 

// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("a");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

</script>
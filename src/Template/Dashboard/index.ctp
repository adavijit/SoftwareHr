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
    <link rel="stylesheet" type="text/css" href="../css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    <title>Welcome to Navsoft Training</title>
  </head>
  <body>

    <!-- header start here -->
    <nav class="navbar navbar-expand-lg bg-white py-2">
    <div class="container">
    <a class="navbar-brand mr-auto mr-sm-0" href="index.html"><img src="../images/logo-inside.png" alt="Navsoft Training" title="Navsoft Training"></a>
    <button class="navbar-toggler p-0 border-0 navbutton" type="button" data-toggle="offcanvas">
    <i class="icon-menu"></i>
    </button>

    <div class="navbar-collapse offcanvas-collapse mobilemenu align-items-end">
        <div class="usernameboxdiv ml-auto">
          <span class="userpicbox mr-2"><img src="../images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome Harry</span>
        </div>
    </div>
    </div>
    </nav>
    <!-- header ends here -->
    <div class="vh-heightdddd">
      <div class="container">
    <!-- body start here -->
    <div class="dashboardcont d-flex justify-content-center">
      <div class="w-100  text-center">
      <h3 class="dashboardhead mb-4">Welcome to Navsoft , Harry</h3>
      <div class="row justify-content-center dashboardwid300">
        <div onClick="javascipt:window.location.href='<?php echo Router::url(['controller'=>'EmpGeneralInfo','action'=>'index']) ?>' "  style="cursor:pointer;"  class="col align-self-center"><div class="faceregonwidhud d-flex align-items-center text-center"><div class="w-100"><i class="icon-file mb-4"></i> <h5>Employee Records</h5></div></div></div>
        <div class="col align-self-center"><div class="faceregonwidhud d-flex align-items-center text-center"><div class="w-100"><i class="icon-face-recognition mb-4"></i> <h5>Face Recognition</h5></div></div></div>
      </div>
    </div>
    </div>
    <!-- body start here -->
  </div>

    <!-- footer div start here -->
    <!-- <footer><p class="mb-0">©2019 GolfTown Golf Company, Inc. All Rights Reserved.</p></footer> -->
    <!-- footer div start here -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $( ".navbutton" ).click(function(){
        $( ".mobilemenu" ).toggleClass( "menuleftpos" );
      });
      
    </script>
  </body>
</html>
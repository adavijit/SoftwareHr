<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NonReqLeave[]|\Cake\Collection\CollectionInterface $nonReqLeave
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

    <!-- body container start here -->
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>View Non Requested Leave</h2></div>
        <div class="col-auto"><button type="button" class="btn orangebutton rounded-circle"><a href="<?php echo Router::url( ['action' => 'add'])?>" ><i class="icon-add-plus-button" style="color:white;"></i></a> </button></div>
      </div>
      <div>
        <table class="table employtable">
  <thead>
    <tr>
      <th scope="col">Employee Name </th>
      <th scope="col">No of Days</th>
      <th scope="col">Balance Leave</th>
      <th scope="col">Starting Date</th>
      <th scope="col">Ending Date</th>
      <th scope="col">Inform State</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($nonReqLeave as $nonReqLeave): ?>
    <tr>
    <?php  $test=0?>
        <td><?= h($nonReqLeave->emp_name) ?></td>
        <td><?= $this->Number->format($nonReqLeave->no_of_day) ?></td>
        <td><?= $this->Number->format($nonReqLeave->balance_leave) ?></td>
        <td><?= h($nonReqLeave->starting_date) ?></td>
        <td><?= h($nonReqLeave->ending_date) ?></td>
        <td><?= h($nonReqLeave->inform_status) ?></td>
        <td class="actions">
        <?php echo "<a href='$nonReqLeave->documentPath' download><i class='icon-pencil'></i></a>" ?>
        <a href="<?php echo Router::url( ['action' => 'view', $nonReqLeave->non_req_id])?>" ><i class="icon-file" style="right-border:7px;"></i></a> 

            <a href="<?php echo Router::url( ['action' => 'edit', $nonReqLeave->non_req_id])?>" ><i class="icon-pencil"></i></a>
            <a href="<?php echo Router::url( ['action' => 'delete', $nonReqLeave->non_req_id])?>" ><i class="icon-trash-1"></i></a>        
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


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../webroot/js/bootstrap.min.js"></script>

  </body>
</html>



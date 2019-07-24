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
    <link rel="stylesheet" type="text/css" href="../webroot/css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
        <a href="javascript:void(0);" class="leftlogo"><img src="../images/logo.png" alt=""></a>
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
          <span class="userpicbox mr-2"><img src="../images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
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
        <div class="col-auto"><button type="button" class="btn orangebutton rounded-circle"><i class="icon-add-plus-button"></i></button></div>
        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0">
              <option>Month</option>
             
            </select> 
          </div>
        </div>
        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0">
              <option>Year</option>
             
            </select> 
          </div>
        </div>
      </div>
      <div>
        <table class="table employtable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Date of upload</th>
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
    <tbody>
            <?php foreach ($fileuploadrecord as $fileuploadrecord): ?>
            <tr>
                <td><?= $this->Number->format($fileuploadrecord->id) ?></td>
                <td><?= h($fileuploadrecord->month) ?></td>
                <td><?= $this->Number->format($fileuploadrecord->record_Year) ?></td>
                
                <td><?= h($fileuploadrecord->dtOfUpload) ?></td>
                <td><?= h($fileuploadrecord->att_sheetName) ?></td>
                <td><?= h($fileuploadrecord->att_sheetPath) ?></td>
               <?php $path= "http://localhost/HrSoft/webroot/".$fileuploadrecord->att_sheetPath ?>
                <td class="actions"><a href="<?php echo Router::url(['controller'=> 'attendancerecord','action' => 'index', 'id'=>$fileuploadrecord->id])?>" > <i class="icon-file" style="right-padding:7px;"></i></a>&nbsp;
                <a download href="<?php echo $path;?>"><span class="glyphicon glyphicon-download-alt" style="right-padding:7px;"></span></a><?php $id = $fileuploadrecord->id ?>&nbsp;&nbsp;<a id="delete" onclick="deleteAjax(<?php echo $id ?>)"><i class="icon-trash-1" style="right-padding:7px;"></i></a> 
                </td> 
                <!-- <td class="action"><a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal"><i class="icon-pencil"></i></a> <a href="javascript:void(0)"><i class="icon-cancel-1"></i></a> <a href="javascript:void(0)"><i class="icon-trash-1"></i></a></td> -->
                <!-- <td class="actions">
                     $this->Html->link(__('View'), ['action' => 'view', $fileuploadrecord->id])
                    $this->Html->link(__('Edit'), ['action' => 'edit', $fileuploadrecord->id])
                     $this->Form->postLink(__('Delete'), ['action' => 'delete', $fileuploadrecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileuploadrecord->id)]) ?>
                </td> -->
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
</section>


    

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="../webroot/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>
<script type="text/javascript">

    function deleteAjax(id){
      console.log(id);
      if(confirm('Are you sure?')){
        $.ajax({
          type:"post",
          url:"http://localhost/HrSoft/webroot/delete.php",
          data:{
            id:id
            },
          success:function(data){
              location.reload();
          }
        });
      }
    }

</script>


    


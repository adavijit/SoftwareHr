
<?php

use Cake\Routing\Router;


?>    
    
    <!--  modal box  -->
    <form action="#" method="post">
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header modalheadercust">
        <h3 class="modal-title"><i class="icon-file"></i> Set Holiday</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body modalbodycustom">
        <h4 class="mb-3">Set Holiday</h4>
        <div class="row">
          <div class="col-sm-6">
            <div class="formgroup">
              <input type="text" name="leave_year" placeholder="Set Leave Years" class="w-100">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="formgroup">
              <input type="text" name="group_name" placeholder="Holiday Group Name" class="w-100">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="formgroup">
              <input id="" name="h_name" class="form-control" placeholder="Holiday Name" class="w-100" />
            </div>
          </div>
            <div class="col-sm-4">
            <div class="formgroup">
            <input id="datepicker3" name="starting_date" class="form-control" placeholder="Starting Date" class="w-100" />
            </div>
          </div>
            <div class="col-sm-4">
            <div class="formgroup">
              <input id="datepicker4" name="ending_date" class="form-control" placeholder="Ending Date" class="w-100" />
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn redbutton" data-dismiss="modal">Cancel</button>
        
        
        <a href="<?php echo Router::url( ['action' => 'holiday'])?>" ><button type="button" name="save" class="btn bluebutton"><font color="white">Save</font></button></a>
      </div>
    </div>
  </div>
</div>
</form>
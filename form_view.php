<?php
//getting single diary to show on calendar
    if($ajax_action=='diary_cal'){
      $diary_id = $record[0]['id'];
      $task_name = $record[0]['task_name'];
      $due_date = $record[0]['due_date'];
      $attached_records = $record[0]['attached_records'];
      $work_activity = $record[0]['claim_id'];
      $claimant = $record[0]['claimant'];
      $department = $record[0]['department'];
      $claim_status = $record[0]['claim_status'];
      $assigned_to = $record[0]['assigned_to'];
      $user = $record[0]['users'];
      $assigning_user = $record[0]['assigning_user'];
      $priority = $record[0]['priority'];
$clamno= $work_activity;
$query = mysql_query("SELECT id FROM claims WHERE claim_no = '$clamno'");
$rec = mysql_fetch_assoc($query);
      ?>
      <table class="table table-bordered table-striped table-hover table-responsive">
          <thead>
              <tr>
                  <th>Task Name</th>
                  <th>Due Date</th>
                  <th>Claim Id</th>
                  <th>Assign To</th>
                  <th>Priority</th>
              </tr>
          </thead>
          <tbody>
                  <tr>
                    <td><?php echo $task_name;?></td>
                    <td><?php echo $due_date;?></td>
                    <td><a href="<?php echo base_url();?>claims/addEditClaim/<?php print $rec['id'];?>?view=1"><?php echo $work_activity;?></a></td>
                    <td><?php 
$sql = mysql_query("select name from users where id='".$user."'");
$res = mysql_fetch_array($sql);
if($_SESSION['id']==$user){ echo "Me"; }else{ print $res['name']; } ?></td>
                    <td><?php echo ucwords($priority);?></td>
                  </tr>
            </tbody>
        </table>  
      <?php
      exit();
    }

  //add and edit diary list
  if($action=='add_record' || $action=='edit_record'){
    $diary_id='';
    $task_name='';
    $due_date='';
    $attached_records='';
    $work_activity='';
    $claimant='';
    $department='';
    $claim_status='';
    $assigned_user='';
    $assigning_user='';
    $priority='';
    $event_type='';
    $claim_id='';
    $notes = '';
    $assigned_to='';
    $users='';
    if($action=='edit_record'){
      $diary_id = $record[0]['id'];
      $task_name = $record[0]['task_name'];
      $due_date = $record[0]['due_date'];
      $attached_records = $record[0]['attached_records'];
      $work_activity = $record[0]['work_activity'];
      $claimant = $record[0]['claimant'];
      $department = $record[0]['department'];
      $claim_status = $record[0]['claim_status'];
      $assigned_user = $record[0]['assigned_user'];
      $assigning_user = $record[0]['assigning_user'];
      $priority = $record[0]['priority'];
      $event_type = $record[0]['event_type'];
      $claim_id=$record[0]['claim_id'];
      $notes = $record[0]['notes'];
      $assigned_to=$record[0]['assigned_to'];
      $users=$record[0]['users'];
    }
    ?>
    <div class="row">
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="widget-header">
          <h4 class="widget-title"><?php if($action=='edit_record'){echo "Edit Diary";}else{echo "Add Diary";}?></h4>
        </div>
        <div class="space-4"></div>
        <form role="form" method="post" class="form-horizontal" action="<?php
         if($action=='edit_record'){
          echo base_url('main/diaryUpdate/'.$diary_id.'');
        }else{ 
          echo base_url('main/diaryInsert');
        }?>" 
        >
        <input type="hidden" name="eve_type" id="eve_type" value="<?php echo $event_type;?>">
        <input type="hidden" name="diary_id" value="<?php echo $diary_id;?>">
          <!-- #section:elements.form -->
          <div class="form-group">
            <label for="task_name" class="col-sm-3 control-label no-padding-right"> Task Name </label>

            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="Enter Task Name." id="task_name" name="task_name" value="<?php echo $task_name;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="due_date" class="col-sm-3 control-label no-padding-right"> Due Date </label>

            <div class="col-sm-9">
                <div class="input-group input-group-sm col-sm-5">
                  <input type="text" class="form-control hasDatepicker datepicker" id="due_date" placeholder="Enter Due Date" name="due_date" value="<?php echo $due_date;?>">
                  <span class="input-group-addon">
                    <i class="ace-icon fa fa-calendar"></i>
                  </span>
                </div>
              </div>
          </div>
          <div class="form-group" style='display:none'>
            <label for="attached_records" class="col-sm-3 control-label no-padding-right"> Attached Record </label>

            <div class="col-sm-9">
                <a href="#modal-wizard" data-toggle="modal"><input type="text" id="attached_records" class="col-xs-10 col-sm-5" placeholder="Select Attached Record" readonly name="attached_records" value="<?php echo $attached_records;?>"></a>
            </div>
          </div>

          <div class="form-group">
             <label for="claimid" class="col-sm-3 control-label no-padding-right"> Claim ID  </label>
             <div class="col-sm-9">
               <a href="#modal-wizard-claim" data-toggle="modal"><input type="text" class="col-xs-10 col-sm-5" name="claim_id" id='claim_text' readonly value="<?php echo $claim_id;?>"></a>
             </div>
          </div>
          <div class="form-group">
             <label for="notes" class="col-sm-3 control-label no-padding-right"> Notes </label>
             <div class="col-sm-9">
              <textarea class="col-xs-10 col-sm-5" name="notes" ><?php echo $notes;?></textarea>
             </div>
          </div>
          <div class="form-group">
             <label for="assigne_to" class="col-sm-3 control-label no-padding-right"> Assign To </label>
<div class="col-sm-9" id='usersDiv'></div>
 <div class="col-sm-9" align=""><small>(Note: Hold down the Ctrl (windows) / Command (Mac) button to select multiple users.) </small></div>
 </div>
          <div class="form-group" style='display:none'>
            <label for="work_activity" class="col-sm-3 control-label no-padding-right"> Work Activity </label>

            <div class="col-sm-9">
            <input type="text" id="work_activity" class="col-xs-10 col-sm-5" placeholder="Enter Work Activity" name="work_activity" value="<?php echo $work_activity;?>">
            </div>
          </div>
          <div class="form-group" style='display:none'>
            <label for="claimant" class="col-sm-3 control-label no-padding-right"> Claimant </label>

            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="Enter Claimant" id="claimant" name="claimant" value="<?php echo $claimant;?>">
            </div>
          </div>
          <div class="form-group" style='display:none'>
            <label for="department" class="col-sm-3 control-label no-padding-right"> Department </label>

            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="Enter Department" id="department" name="department" value="<?php echo $department;?>">
            </div>
          </div>
          <div class="form-group" style='display:none'>
            <label for="claim_status" class="col-sm-3 control-label no-padding-right"> Claim Status</label>

            <div class="col-sm-9">
              <select class="col-xs-10 col-sm-5" data-placeholder="Enter Claim Status" id="claim_status" name="claim_status">
                <option <?php if($claim_status=='open'){echo "selected";}?> value="open">Open</option>
                <option <?php if($claim_status=='closed'){echo "selected";}?> value="closed">Closed</option>
                <option <?php if($claim_status=='reopend'){echo "selected";}?> value="reopend">Re-Opend</option>
              </select>
             
            </div>
          </div>
          <div class="form-group">
            <label for="priority" class="col-sm-3 control-label no-padding-right"> Priority</label>

            <div class="col-sm-9">
              <select class="col-xs-10 col-sm-5" data-placeholder="Enter Claim Status" id="priority" name="priority">
                <option <?php if($priority=='low'){echo "selected";}?> value="low">Low</option>
                <option <?php if($priority=='medium'){echo "selected";}?> value="medium">Medium</option>
                <option <?php if($priority=='high'){echo "selected";}?> value="high">High</option>
              </select>
             
            </div>
          </div>
          <div class="form-group" style='display:none'>
            <label for="claimant" class="col-sm-3 control-label no-padding-right"> Assigning User </label>

            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="" id="" name="assigning_user" value="<?php echo $assigning_user;?>">
            </div>
          </div>
          <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
            <?php if($action=='edit_record'){
                ?>
                <button type="submit" class="btn btn-info">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Update
                </button>
                <?php
                if($ajax_action=='upd_diary'){
                  ?>
                  <button data-dismiss="modal" class="btn btn-danger btn-sm pull-right">
                    <i class="ace-icon fa fa-times"></i>
                    Close
                  </button>
                  <?php
                }
              }else{
              ?>
              <button type="submit" class="btn btn-info">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Submit
              </button>
              &nbsp; &nbsp; &nbsp;
              <button type="reset" class="btn">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
              </button>
              <?php
              }
              ?>
            </div>
          </div>
        </form>
      </div><!-- /.col -->
    </div>

    <?php
  }
  //getting single event 
    if($action=="getSingleEvent"){
      ?>
      <table class="table table-bordered table-striped table-hover table-responsive">
        <tr>
          <th>Event Number</th>
          <th>Event Type</th>
          <th>Event Description</th>
          <th>Location Description</th>
        </tr>
      <?php
      foreach ($records as $record) {
        if(isset($record['type'])){
          $type = $record['type'];
        }else{
          $type = $record['event_type'];
        }
        echo "
            <tr>
              <td>".$record['event_no']."</td>
              <td>".$type."</td>
              <td>".$record['event_description']."</td>
              <td>".$record['location_description']."</td>
            </tr>
        ";
      }
      ?>
      </table>
      <?php
    }

  ?>
<script type="text/javascript">
function getUsers()
{
  $.post("<?php print base_url();?>main/getUsers",function(data){
    $("#usersDiv").html(data);
  });
}
function getUsersEdit(val)
{
  $.post("<?php print base_url();?>main/getUsers",{"user":val},function(data){
    $("#usersDiv").html(data);
  });
}
      jQuery(function($) {
        $.post("<?php print base_url();?>main/getUsers",function(data){
    $("#usersDiv").html(data);
  });
        $('#modal-wizard-container').ace_wizard();
        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
        $( ".datepicker" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: false,
          //isRTL:true,
      
          
          /*
          changeMonth: true,
          changeYear: true,
          
          showButtonPanel: true,
          beforeShow: function() {
            //change button colors
            var datepicker = $(this).datepicker( "widget" );
            setTimeout(function(){
              var buttons = datepicker.find('.ui-datepicker-buttonpane')
              .find('button');
              buttons.eq(0).addClass('btn btn-xs');
              buttons.eq(1).addClass('btn btn-xs btn-success');
              buttons.wrapInner('<span class="bigger-110" />');
            }, 0);
          }
      */
        });
        $('.input-mask-date').mask('99:99:99');
      });
    </script>
 <?php if($_SESSION['id']!=$users and $action=='edit_record'){
              ?>
              <script>getUsersEdit("<?php print $users;?>");</script>
              <?php
            }
              ?>
<?php
  //add and edit diary list
  if($action=='add_record' || $action=='edit_record'){
    $state_id='';
    $state_abbrevation='';
    $state_description='';
    if($action=='edit_record'){
      $state_id = $record[0]['id'];
      $state_abbrevation = $record[0]['state_abbrevation'];
      $state_description = $record[0]['state_description'];
    }
    ?>
    <div class="row">
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="widget-header">
          <h4 class="center"><?php if($action=='edit_record'){echo "Edit State";}else{echo "Add State";}?>
          <a href='javascript:void(0)' class='pull-right' onclick='document.getElementById("state_id").innerHTML="";' title='Close Div'><i class='fa fa-times'></i></a></h4>
        </div>
        <div class="space-4"></div>
        <form role="form" method="post" class="form-horizontal" action="<?php
         if($action=='edit_record'){
          echo base_url('main/StateUpdate/'.$state_id.'');
        }else{ 
          echo base_url('main/stateInsert');
        }?>" 
        >
        <input type="hidden" name="state_id" value="<?php echo $state_id;?>">
          <!-- #section:elements.form -->
          <div class="form-group">
            <label for="state_abbrevation" class="col-sm-3 control-label no-padding-right"> State Abbrevation </label>
            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="Enter State Abbrevation." id="state_abbrevation" name="state_abbrevation" value="<?php echo $state_abbrevation;?>" required>
            </div>
          </div>
          <div class="form-group">
            <label for='state_description' class="col-sm-3 control-label no-padding-right"> State Description </label>

            <div class="col-sm-9">
                <div class="input-group input-group-sm col-sm-5">
                  <input type="text" class="form-control" id="state_description" placeholder="State Description" name="state_description" value="<?php echo $state_description;?>" required>
                </div>
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
      jQuery(function($) {  
        $('#modal-wizard-container').ace_wizard();
        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
        $( ".datepicker" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: false,
       });
        $('.input-mask-date').mask('99:99:99');
      });
    </script>

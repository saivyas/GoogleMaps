<?php
?>
<div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Update Note</h4>
            </div>
          </div>
          <div class="modal-body step-content">
            <div id="cont" >
              <div class='form-group'> 
                <label for='u_notes_activity' class='col-sm-3 control-label no-padding-right'>Activity</label>
                <div class='col-sm-9'> 
                <input type="hidden" name="id" id='claim_update_id' value="<?php print $id;?>">
                  <input type='text' id='u_notes_activity' class='col-xs-10 col-sm-7' name='u_notes_activity' value="<?php print $records[0]['activity']; ?>"> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='u_notes_attach_to' class='col-sm-3 control-label no-padding-right'>Attach to</label>
                <div class='col-sm-9'> 
                  <input type='text' id='u_notes_attach_to' class='col-xs-10 col-sm-7' name='u_notes_attach_to' value="<?php print $records[0]['claim_no']; ?>" disabled readonly> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='u_notes_type' class='col-sm-3 control-label no-padding-right'>Note Type</label>
                <div class='col-sm-9'> 
                  <input type='text' id='u_notes_type' class='col-xs-10 col-sm-7' name='u_notes_type' value="<?php print $records[0]['notes_type']; ?>"> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='u_notes_text' class='col-sm-3 control-label no-padding-right'>  Text </label>
                <div class='col-sm-9'> 
                  <textarea id='u_notes_text' class='col-xs-10 col-sm-7' name='u_notes_text' ><?php print $records[0]['notes_text']; ?></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer wizard-actions">

          <button class="btn btn-danger btn-sm pull-right" data-dismiss="modal">
            <i class="ace-icon fa fa-times"></i>
            Close
          </button>
          <button class="btn btn-success btn-sm pull-right" data-dismiss="modal" onclick="updateNotes()">
            <i class="ace-icon fa fa-check"></i>
            Update
          </button>
        </div>

<script type="text/javascript">
  function updateNotes() {
  var claim_rrts = '<?php  echo $records[0]["rrts"];?>';
  var activity = $("#u_notes_activity").val();
  var notes_attach_to = $("#u_notes_attach_to").val();
  var notes_type = $("#u_notes_type").val();
  var notes_text = $("#u_notes_text").val();
  var id = $("#claim_update_id").val();
  $.post("<?php echo base_url();?>claims/updateClaimNotes/", {"notes_attach_to":notes_attach_to,"claim_rrts":claim_rrts,"activity":activity,"notes_type":notes_type,"notes_text":notes_text,"id":id}, function(data){
    if(data==1)
    {
      $(".notes_msg").html("<b>Updated note successfully</b>");
    }else
    {
      $(".notes_msg").html("<b>Something went wrong please try again!</b>");
    }
    getAllClaimNotes();
  });
}
$( ".datepicker" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: false,
        });
</script>
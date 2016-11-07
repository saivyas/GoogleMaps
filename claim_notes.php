 <h3>Notes List</h3> 
<table id="table_id1" class="display table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
           <!--  <th>Activity</th> -->
            <th>Attached To</th>
            <th>Note Type</th>
            <th>Entered By</th>
            <th>Date Created</th>
            <th>View</th>
            <th style='display:none'>Text</th>
              <th>Actions</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($records as $key => $record) {

?>
    <tr>
      <!--<td>--><?php //echo $record['activity'];?><!--</td>-->
      <td><?php echo $record['claim_no'];?></td>
      <td><?php echo $record['notes_type'];?></td>
      <td><?php echo ucwords($record['user_name']);?></td>
      <td><?php $added_date = strtotime($record['added_date']);
                echo $added_date = date("m/d/Y H:i:s",$added_date);?></td>
      <td>
        <a href='javascript:void(0)'  data-toggle="modal" data-target="#<?php echo $record['id'];?>" class='btn btn-sm '>View</a>
        <div id="<?php echo $record['id'];?>" class="modal">
          <div class="modal-dialog" style="width:50%">
            <div class="modal-content">
              <div id="modal-wizard-container">
                <div class="modal-header">
                  <div class="widget-header">
                    <h4 class="widget-title">Notes</h4>
                  </div>
                </div>

                <div class="modal-body step-content">
                  <div id="contss"  >
                      <div class='' style=''>
                        <table  class="display table table-striped table-hover table-responsive">
                            <tr >
                              <td>Claim No:</td><td><?php print $record['claim_no'];?></td>
                            </tr>
                            <tr>
                              <td>Activity:</td><td><?php print $record['activity'];?></td>
                            </tr>
                            <tr>
                              <td>Note Type:</td><td><?php print $record['notes_type'];?></td>
                            </tr>
                            <tr>
                              <td>Text:</td><td><?php print nl2br($record['notes_text']);?></td>
                            </tr>
                            <tr>
                              <td>User:</td><td><?php print ucwords($record['user_name']);?></td>
                            </tr>
                            <tr>
                              <td>Added On:</td><td><?php $added_date = strtotime($record['added_date']);
                                                     echo $added_date = date("m/d/Y H:i:s",$added_date);?></td>
                            </tr>
                        </table>
                      </div>
                  </div>
                </div>
                <div class="modal-footer wizard-actions">
                <a class="btn btn-sm" onclick="prints()" href="javascript:void(0)"> <i class="fa fa-print"> </i>Print</a>
                <button class="btn btn-danger btn-sm pull-right" data-dismiss="modal">
                  <i class="ace-icon fa fa-times"></i>
                  Close
                </button>
              </div>
              </div>
            </div>
          </div>
      </td>
      <td style='display:none;'><?php echo $record['notes_text'];?></td>
    
        <td>
        <?php
    if($_SESSION['user']=='arcclaims' or in_array(5, $_SESSION['access_functions']))
    {
      ?>
            <a href='javascript:void(0)' onclick='editNotes(<?php print $record['id'];?>,this)' title='Edit Note'><i class='fa fa-edit'></i></a> |
    <?php 
    }
     if($_SESSION['user']=='arcclaims' or in_array(6, $_SESSION['access_functions']))
     {
    ?>

            <a href='javascript:void(0)' onclick='deleteNotes(<?php print $record['id'];?>,this)' title='Delete Note'><i class='fa fa-trash'></i></a>
      <?php
    }
    ?>
        </td>
      
    </tr>
</div>
<?php
}
?>
</tbody>
</table>
<div id="edit_notes_modal" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="edit_notes_div" >
          
        </div>
      </div>
    </div>
</div>
 <script type="text/javascript">
     $(document).ready ( function () {
      $('#table_id1').DataTable({
          ordering:  false
      });
      
      } );
function prints()
{
  w=window.open();
  w.document.write($('#contss').html());
  w.print();
  w.close();
}
function deleteNotes(id,div)
{
    $(div).html("<i class='fa fa-spinner fa-spin'></i>...");
  var c=confirm("Heads Up! Are you sure you want to delete this Note");
  if(c)
  {
    $.post("<?php echo base_url();?>claims/deleteNote/",{"id":id}, function(data){
        if(data==1)
        {
             $(".notes_msg").html("<b>Note deleted Successfully</b>");
            getAllClaimNotes();
        }
        else
        {
            $(".notes_msg").html("<b>Something Went Wrong Try Again!</b>");
        }
        
    });
  }
  $(div).html("<i class='fa fa-trash'></i>");
    
}
function editNotes(id,div)
{
    $('#edit_notes_modal').modal({
            show: 'false'
        });
    $(div).html("<i class='fa fa-spinner fa-spin'></i>...");
    $("#edit_notes_div").html("<i class='fa fa-spinner fa-spin'></i>...");
    $.post("<?php echo base_url();?>claims/editNote/"+id+"", function(data){
        $(div).html("<i class='fa fa-edit'></i>");
        $("#edit_notes_div").html(data);
    });
    
}
  </script>


<!-- Diary History -->

<h3>Diaries List</h3>
 <table id="table_id2" class="display table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>Task Name</th>
            <th>Due Date</th>
            <th>Notes</th>
            <th>Assigned To</th>
            <th>Priority</th>
            <th>Added On</th>
            <?php
              if($_SESSION['user']=='arcclaims')
              {
              ?>
              <th>Actions</th>
              <?php
              }
            ?>
            <th>View</th><th>Status</th>
            <th>Mark as Completed</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($diaries as $key => $diary) {
?>
    <tr>
      <td><?php echo $diary['task_name'];?></td>
      <td><?php echo $diary['due_date'];?></td>
      <td><?php echo nl2br($diary['notes']);?></td>
      <td><?php 
       $name="";
$sql = mysql_query("select name from users where id in(".$diary['users'].")"); 										
while($res = mysql_fetch_array($sql)){													
$name .=  ucwords($res['name']) . ", ";
}
echo substr($name,0,-2);
      ?></td>
      <td><?php echo ucwords($diary['priority']);?></td>
      <td><?php  $added_on = strtotime($diary['added_on']);
      echo $added_on = date("m/d/Y H:i",$added_on);?></td>
      <?php
    if($_SESSION['user']=='arcclaims')
    {
      ?>
        <td>
            <a href='javascript:void(0)' onclick='editNotesDiary(<?php print $diary['id'];?>,this)' title='Edit Diary'><i class='fa fa-edit'></i></a> |
            <a href='javascript:void(0)' onclick='deleteNotesDiary(<?php print $diary['id'];?>,this)' title='Delete Diary'><i class='fa fa-trash'></i></a>
        </td>
      <?php
    }
    ?>
<td>
<a href='#di<?php echo $diary['id'];?>' data-toggle="modal" data-target="#di<?php echo $diary['id'];?>" id="<?php echo $diary['id'];?>" class='btn btn-sm'>View</a>	
</td>
<td>
<?php echo ($diary['diary_status']==1?"Completed":"Pending");?> 
</td>
<td align="center">
<?php
 if($_SESSION['id']==$diary['assigned_user'] || in_array($_SESSION['id'], explode(",", $diary['users'])))
    {
      if($diary['diary_status']==1){
        echo "---";
      }else{
       ?>
  <a class="btn-link" title="Completed" style="cursor:pointer;" onclick="CompletedDiary(<?php echo $diary['id'];?>)"><i class="ace-icon fa fa-check-square-o red"></i></a>
  <?php 
      }
  
}else{
  echo "---";
}
?>
</td>
    </tr>
<div id="di<?php echo $diary['id'];?>" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Diary <span class="pull-right">
              <?php
              if($_SESSION['id']==$diary['assigned_user'])
              {
              ?>
              <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal" onclick="editNotesDiary(<?php echo $diary['id'];?>,this)"><i class="ace-icon fa fa-pencil"></i> Edit</button>
              <?php } ?>
              </span></h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="contss" class="contss123">
                <div class='' style=''>
                <div class='row'><label class='col-md-offset-2 col-md-3'> Claim No</label><div class='col-md-6'><?php print $diary['claim_id'];?></div></div>
                <div class='row'><label class='col-md-offset-2 col-md-3'> Task Name</label> <div class='col-md-6'><?php print $diary['task_name'];?></div></div>
                <div class='row'><label class='col-md-offset-2 col-md-3'> Due Date</label> <div class='col-md-6'><?php print $diary['due_date'];?></div></div>
                <div class='row'><label class='col-md-offset-2 col-md-3'> Assigned To</label> <div class='col-md-6' style=''>
<?php $name="";
$sql = mysql_query("select name from users where id in(".$diary['users'].")"); 										
while($res = mysql_fetch_array($sql)){													
$name .=  ucwords($res['name']) . ", ";
}
echo substr($name,0,-2);?></div></div>
                <div class='row'><label class='col-md-offset-2 col-md-3'> Priority</label> <div class='col-md-6'><?php echo ucwords($diary['priority']);?></div></div>
                <div class='row'><label class='col-md-offset-2 col-md-3'> Added On</label> <div class='col-md-6'><?php $added_on = strtotime($diary['added_on']);
      echo $added_on = date("m/d/Y H:i",$added_on);?></div></div>
                <div class='row'><label class='col-md-offset-2 col-md-3'> Notes</label> <div class='col-md-6'><?php 
                echo nl2br($diary['notes']);?></div></div>
                </div>
            </div>
          </div>
          <div class="modal-footer wizard-actions">
          <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
            <i class="ace-icon fa fa-times"></i>
            Close
          </button>
          <?php
           if($_SESSION['id']==$diary['assigned_user'] || in_array($_SESSION['id'], explode(",", $diary['users'])))
              {
                if($diary['diary_status']==1){
                  
                }else{
                 ?>
            <a class="btn btn-xs btn-success" title="Completed" style="cursor:pointer;" onclick="CompletedDiary(<?php echo $diary['id'];?>)"><i class="ace-icon fa fa-check-square-o "></i> Mark as complete</a>
            <?php 
                }
            
          }
          ?>
        </div>
        </div>
      </div>
    </div>
</div>
<?php
}
?>
</tbody>
</table>
<div id="edit_notesdiary_modal" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="edit_notesdiary_div" >
          
        </div>
      </div>
    </div>
</div>
 <script type="text/javascript">
     $(document).ready ( function () {
      $('#table_id2').DataTable({
          ordering:  false
      });
      });

 function CompletedDiary(id){
  var conf = confirm("Do you really want to mark as completed this task!");
  if(conf){
    $.post("<?php echo base_url();?>main/CompletedDiary/"+id+"", function(data){
      if(data=="Failed"){
        alert("Error Try Again!");
      }else{
        getAllClaimNotes();
      }
    });
  }
}
function deleteNotesDiary(id,div)
{
    $(div).html("<i class='fa fa-spinner fa-spin'></i>...");
  var c=confirm("Heads Up! Are you sure you want to delete this Diary");
  if(c)
  {
    $.post("<?php echo base_url();?>claims/deleteDiary/",{"id":id}, function(data){
        if(data==1)
        {
             $(".notes_msg").html("<b>Diary deleted Successfully</b>");
            getAllClaimNotes();
        }
        else
        {
            $(".notes_msg").html("<b>Something Went Wrong Try Again!</b>");
        }
        
    });
  }
  $(div).html("<i class='fa fa-trash'></i>");
    
}

function editNotesDiary(id,div)
{
    $('#edit_notesdiary_modal').modal({
            show: 'false'
        });
    $(div).html("<i class='fa fa-spinner fa-spin'></i>...");
    $("#edit_notesdiary_div").html("<i class='fa fa-spinner fa-spin'></i>...");
    $.post("<?php echo base_url();?>claims/addEditDiary/"+id+"", function(data){
        $(div).html("<i class='fa fa-edit'></i>");
        $("#edit_notesdiary_div").html(data);
    });
    
}
  </script>
<!-- Diaries End -->
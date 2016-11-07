<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
<div id="edit_ele"></div>
<table id="table_id" class="display table table-bordered table-striped table-hover table-responsive">
<thead>
	<th>Sr. No</th>
	<th>Element</th>
	<th>Parent</th>
	<th>Type</th>
	<th>Actions</th>
</thead>
<?php
$i=1;
foreach ($rec as $ele) {
 ?>
 <tr>
 	<td><?php print $i++; ?></td>
 	<td><?php print $ele['element']; ?></td>
 	<td>
 		<?php
 		$parent = $ele['parent'];
    $sel = mysql_query("SELECT element FROM hierarchy WHERE id='$parent'");
     $rec = mysql_fetch_assoc($sel);
     print $rec['element'];
    ?>
 	</td>
 	<td><?php print $ele['type']; ?></td>
 	<td>
 	<a href='javascript:void(0)' onclick='editElement(<?php print $ele['id'];?>)' title='Edit Element'><i class='fa fa-edit'></i></a> |
														<a href='javascript:void(0)' onclick='deleteElement(<?php print $ele['id'];?>,<?php print $ele['parent'];?>)' title='Delete Element'><i class='fa fa-trash'></i></a>
														</td>
 </tr>
<?php
}
?>
</table>
<script type="text/javascript">
			$(document).ready ( function () {
			    $('#table_id').DataTable({
					    ordering:  false
			    });
					
			} );

function editElement(id)
{
	$.post("<?php echo base_url();?>main/addEditOrg/"+id+"", function(data){
					$("#edit_ele").html(data);
					 $('html,body').animate({
				        scrollTop: $("#edit_ele").offset().top},
				        'slow');
				});
	
}
function deleteElement(id,parent)
{
  var c=confirm("Heads Up! Are you sure you want to delete this Element");
  if(c)
  {
  	$.post("<?php echo base_url();?>main/deleteElement/",{"id":id,"parent":parent}, function(data){
		alert(data);
		location.reload();
	});
  }
	
}		</script>
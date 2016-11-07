<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
<?php
	if($action=='employee'){
?>

					<div class="row">
						<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
							<div class="widget-header">
								<h4 class="widget-title">Employee List</h4>
							</div>
							<div class="space-4"></div>
								<table id="table_id" class="display table table-bordered table-striped table-hover table-responsive table_id">
							    <thead>
							        <tr>
							            <th>Employee Number</th>
										<th>Last Name</th>
										<th>First Name</th>
										<th>Contractor</th>
										<th>Contractor Number</th>
							        </tr>
							    </thead>
							    <tbody>
							        <?php

												foreach ($records as $record) {
													?>
													<tr>
														<td><?php echo $record['employee_no'];?></td>
														<td><?php echo $record['last_name'];?></td>
														<td><?php echo $record['first_name'];?></td>
														<td><?php echo $record['contractor'];?></td>
														<td><?php echo $record['contractor_no'];?></td>
													</tr>
													<?php
												}
											?>
							    	</tbody>
								</table>	
						</div>
					</div>
</div>

<?php

	}
if($action=='claims'){
	?>
<div class="row">
	<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
		<div class="widget-header">
			<h4 class="widget-title">Claim List</h4>
<a href='javascript:void(0)' onclick='document.getElementById("claim_search").innerHTML="";' class='pull-right'><i class='fa fa-times'></i></a>
		</div>
		<div class="space-4"></div>
			<table id="table_ids" class="display table table-bordered table-striped table-hover table-responsive table_id">
		    <thead>
		        <tr>
		            <th>CLAIM NUMBER</th>
		            <th>OPCO</th>
					<th>LOC Number</th>
					<th>DOL</th>
					<th>INSD LAST</th>
					<th>CLT LAST</th>
					<th>STATE</th>
					<th>CITY</th>
					<th>STREET</th>
					<!-- <th>UNIT#</th> -->
					<th>TRAILER#</th>
					<th>VIEW FILES</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		        foreach ($records as $record) {
								?>
								<tr>
<?php 
    $email = base64_encode("demo@demo.com");
    $p = base64_encode(123456);
    $cln = $record['claim_no'];
    $sel = mysql_query("SELECT * FROM folders WHERE title='$cln'");
    if(mysql_num_rows($sel)){
    	$rec = mysql_fetch_assoc($sel);
    	$f_id = $rec['id'];
    }else{
    	$f_id ='115';
    }
  ?>
									<td><a href="<?php echo base_url();?>claims/addEditClaim/<?php print $record['id'];?>?view=1"><?php print $record['claim_no'];?></a></td>
									<td><?php echo $record['rrts'];?></td>
									<td><?php echo $record['terminal_location'];?></td>
									<td><?php echo $record['dol'];?></td>
									<td><?php echo $record['csp_lastname'];?></td>
									<td><?php 

$claimantlastname="";
$claimant_lastname = explode("~",$record['claimant_lastname']);
if(count($claimant_lastname)){
	for($i=0;$i<count($claimant_lastname);$i++){ 
		if($claimant_lastname[$i]!=""){	
		$claimantlastname .= $claimant_lastname[$i] . ", ";
		}
	}
	echo substr($claimantlastname,0,-2);

}?></td>
									<td><?php echo $record['state'];?></td>
									<td><?php echo $record['m_city'];?></td>
									<td><?php echo $record['street'];?></td>
									<!-- <td><?php echo $record['unit'];?></td> -->
									<td><?php echo $record['trailer_no_1'];?></td>
									<td>
<?php
if($_SESSION['user']=='arcclaims' or in_array(11, $_SESSION['access_functions']))
{
$del = base64_encode('false');
								                        if($_SESSION['user']=='arcclaims' or in_array(12, $_SESSION['access_functions']))
									                    {
									                        $del = base64_encode('true');
									                    }
?>
<a href="<?php echo base_url(); ?>sharefile/access/process_login.php?email='<?php echo $email;?>'&p='<?php echo $p;?>'&path=<?php echo $f_id;?>&del=<?php echo $del;?>" target="_blank">View Documents</a>
<?php
}else
{
echo "-";
}
?>
</td>

									
								</tr>
								<?php
							}
						?>
		    	</tbody>
			</table>	
		</div>
	</div>
</div>
	<?php
}
if($action=='events'){
?>
<div class="row">
	<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
		<div class="widget-header">
			<h4 class="widget-title">Event List</h4>
		</div>
		<div class="space-4"></div>
			<table id="table_id" class="display table table-bordered table-striped table-hover table-responsive table_id">
		    <thead>
		        <tr>
		            <th>Event Number</th>
					<th>Loc.: City</th>
					<th>Loc.: State</th>
					<th>City</th>
					<th>State</th>
					<th>Department</th>
					<th>Event Status</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php

							foreach ($records as $record) {
								?>
								<tr>
									<td><?php echo $record['event_no'];?></td>
									<td><?php echo $record['city'];?></td>
									<td><?php echo $record['state'];?></td>
									<td><?php echo $record['re_city'];?></td>
									<td><?php echo $record['re_state'];?></td>
									<td><?php echo $record['department'];?></td>
									<td><?php echo $record['event_status'];?></td>
								</tr>
								<?php
							}
						?>
		    	</tbody>
			</table>	
		</div>
	</div>
</div>
<?php
}

if($action=='funds'){
	
?>
<div class="row">
	<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
		<div class="widget-header">
			<h4 class="widget-title">Funds List
			<a href='javascript:void(0)' class='pull-right' onclick='document.getElementById("funds_search").innerHTML="";'><i class='fa fa-times'></i></a>
			</h4>
		</div>
		<div class="space-4"></div>
			<table id="table_id" class="display table table-bordered table-striped table-hover table-responsive table_id">
		    <thead>
		        <tr>
		            <th>Claim Number</th>
		            <th>Payee Type</th>
		            <th>Amount</th>
					<th>Check No</th>
					<th>Payee Name</th>
					<th>Social Security number</th>
					<th>Bank Account</th>
					<th>Address1</th>
					<th>Address2</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php

							foreach ($records as $record) {
								?>
								<tr>
									<?php 
    $cln = $record['claim_no'];
    $sel = mysql_query("SELECT * FROM claims WHERE claim_no='$cln'");
    	$rec = mysql_fetch_assoc($sel);
  ?>
									<td><a href="<?php echo base_url();?>claims/addEditClaim/<?php print $rec['id'];?>?view=1"><?php print $record['claim_no'];?></a></td>
									<td><?php echo $record['payee_type'];?></td>
									<td><?php echo $record['f_paid'];?></td>
									<td><?php echo $record['f_check_no'];?></td>
									<td><?php echo $record['f_first_name'].$record['f_last_name'];?></td>
									<td><?php echo $record['social_security_number'];?></td>
									<td><?php echo $record['back_account'];?></td>
									<td><?php echo $record['f_address1'];?></td>
									<td><?php echo $record['f_address2'];?></td>
								</tr>
								<?php
							}
						?>
		    	</tbody>
			</table>	
		</div>
	</div>
</div>
<?php
}
?>
<script src="<?php echo base_url();?>assets/js/ace/elements.wizard.js"></script>	
		<script type="text/javascript">
			jQuery(function($) {
				
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
			$(document).ready( function () {
			    $('.table_id').DataTable({
					    ordering:  false
			    });
			} );
		</script>
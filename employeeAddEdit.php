<?php
$data = array
        (
            'employee_no' => '',
            'first_name' => '',
            'middel_name' => '',
            'last_name' => '',
            'initials' => '',
            'soc_sec_no' => '',
            'department' => '',
            'contractor' => '',
            'contractor_no' => '',
            'driver_type' => '',
            'driver_status' => ''
        );
if($record!=''){
	$data = array
        (
            'employee_no' => $record[0]['employee_no'],
            'first_name' => $record[0]['first_name'],
            'middel_name' => $record[0]['middel_name'],
            'last_name' => $record[0]['last_name'],
            'initials' => $record[0]['initials'],
            'soc_sec_no' => $record[0]['soc_sec_no'],
            'department' => $record[0]['department'],
            'contractor' => $record[0]['contractor'],
            'contractor_no' => $record[0]['contractor_no'],
            'driver_type' => $record[0]['driver_type'],
            'driver_status' => $record[0]['driver_status']
        );
}
?>            
				<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="widget-header">
									<h4 class="widget-title">Employee <span class="pull-right" onclick="removeForm()"><a href="javascript:void(0)"><i class="fa fa-times"></i></a></span></h4>
								</div>
								<div class="space-4"></div>
								<form role="form" class="form-horizontal" <?php
						if($record!=''){
							?>
							action="<?php echo base_url()?>main/employeeUpdate"<?php
						}else{ ?>
							action="<?php echo base_url('main/employeeInsert');?>"
							<?php
						}?>  method="post">
									<!-- #section:elements.form -->
									<input type="hidden" name="id" value="<?php echo $record[0]['id'];?>">
									<div class="form-group">
										<label for="employee_no" class="col-sm-3 control-label no-padding-right"> Employee Number </label>

										<div class="col-sm-9">
											<input type="text" class="col-xs-10 col-sm-5" placeholder="Enter Employee No." id="employee_no" name="employee_no" value="<?php echo $data['employee_no'];?>">
										</div>
									</div>
									<div class="form-group">
										<label for="first_name" class="col-sm-3 control-label no-padding-right"> First Name </label>

										<div class="col-sm-9">
										<input type="text" id="first_name" class="col-xs-10 col-sm-5" placeholder="Enter First Name" name="first_name" value="<?php echo $data['first_name'];?>">
										</div>
									</div>
									<div class="form-group">
										<label for="middel_name" class="col-sm-3 control-label no-padding-right"> Middel Name </label>

										<div class="col-sm-9">
											<input type="text" name="middel_name" id="middel_name" placeholder="Enter Middel Name" class="col-xs-10 col-sm-5" value="<?php echo $data['middel_name'];?>">
										</div>
									</div>
									<div class="form-group">
										<label for="last_name" class="col-sm-3 control-label no-padding-right"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" class="col-xs-10 col-sm-5" value="<?php echo $data['last_name'];?>">
										</div>
									</div>
									<div class="form-group">
										<label for="initials" class="col-sm-3 control-label no-padding-right"> Initials </label>

										<div class="col-sm-9">
											<input type="text" name="initials" id="initials" placeholder="Enter Initials" class="col-xs-10 col-sm-5" value="<?php echo $data['initials'];?>">
										</div>
									</div>
									<div class="form-group">
										<label for="soc_sec_no" class="col-sm-3 control-label no-padding-right"> Soc. Sec No </label>

										<div class="col-sm-9">
											<input type="text" name="soc_sec_no" id="soc_sec_no" placeholder="Enter Soc Sec No" class="col-xs-10 col-sm-5" value="<?php echo $data['soc_sec_no'];?>">
										</div>
									</div>
									<div class="widget-header">
										<h4 class="widget-title">Reported Info</h4>
									</div>
									<div class="space-8"></div>
									
									<div class="form-group">
										<label for="department" class="col-sm-3 control-label no-padding-right"> Department </label>

										<div class="col-sm-9">
											<input type="text" name="department" id="department" placeholder="Enter Department" class="col-xs-10 col-sm-5" value="<?php echo $data['department'];?>">
										</div>
									</div>
									<div class="space-8"></div>
									<div class="widget-header">
										<h4 class="widget-title">Supplementals</h4>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label for="contractor" class="col-sm-3 control-label no-padding-right">Contractor</label>

										<div class="col-sm-9">
											<input type="text" name="contractor" id="contractor" placeholder="Enter Contractor Name" class="col-xs-10 col-sm-5" value="<?php echo $data['contractor'];?>">
										</div>
									</div>
									<div class="form-group">
										<label for="contractor_no" class="col-sm-3 control-label no-padding-right"> Contractor Number </label>

										<div class="col-sm-9">
											<input type="number" name="contractor_no" id="contractor_no" placeholder="Enter Contractor Number" class="col-xs-10 col-sm-5" value="<?php echo $data['contractor_no'];?>">
										</div>
									</div>
									<div class="form-group">
										<label for="driver_type" class="col-sm-3 control-label no-padding-right"> Driver Type</label>

										<div class="col-sm-9">
											<input type="text" name="driver_type" id="driver_type" placeholder="Enter Driver Type" class="col-xs-10 col-sm-5" value="<?php echo $data['driver_type'];?>">
										</div>
									</div>
									<div class="form-group">
										<label for="driver_status" class="col-sm-3 control-label no-padding-right"> Driver Status</label>

										<div class="col-sm-9">
											<input type="text" name="driver_status" id="driver_status" placeholder="Enter Driver Status" class="col-xs-10 col-sm-5" value="<?php echo $data['driver_status'];?>">
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
										<?php
											if($record!=''){
												?>
													<button type="submit" class="btn btn-info">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Update
											</button>
												<?php
											}else{?>

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
						<script type="text/javascript">
			jQuery(function($) {
			
				$( ".datepicker" ).datepicker({
					showOtherMonths: true,
					selectOtherMonths: false,
					
				});
				$('.input-mask-date').mask('99:99:99');
			});
			function removeForm() {
				$("#emp_dyn").html('');
			}
		</script>
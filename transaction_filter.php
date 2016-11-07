
<table id="table_id" class="display table table-bordered table-striped table-hover table-responsive">
							    <thead>
							        <tr>
													<th>Check Date</th>
													<th>Control</th>
													<th>Payee</th>
													<th>Claim Number</th>
													<th>Amount</th>
							        </tr>
							    </thead>
							    <tbody>
<?php
$amt = 0;
foreach ($transactions as $val) {
?>
							   		<tr>
											<td><?php print $val['check_date'];?></td>
											<td><?php print $val['control_no'];?></td>
											<td><?php print $val['last_name'].$val['first_name'];?></td>
											<td><?php print $val['claim_number'];?></td>
											<td><?php print $val['amount'];?></td>
											
										</tr>
<?php
$amt +=$val['amount'];
}
?>
<tr><td colspan="12"><b>Total Amount <span class="pull-right"> $ <?php print $amt;?></span></b></td></tr>
										</tbody>
								</table>
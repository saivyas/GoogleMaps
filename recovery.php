<h3>TORTFEASOR</h3> 
<div class='form-group'> 
                      <label for='recovery_fname' class='col-sm-3 control-label no-padding-right'>First Name</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_fname' class='col-xs-10 col-sm-5' placeholder='Enter First Name' value="<?php if($records[0]['fname']!='' && $records[0]['fname']==$rfn){echo $records[0]['fname'];}else {echo $rfn;}?>" name='recovery_fname' readonly> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_lname' class='col-sm-3 control-label no-padding-right'>Last Name</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_lname' class='col-xs-10 col-sm-5' placeholder='Enter Lirst Name' value="<?php if($records[0]['lname']!='' && $records[0]['lname']==$rln){echo $records[0]['lname'];}else {echo $rln;}?>" name='recovery_lname' readonly> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='tortfeasor_company' class='col-sm-3 control-label no-padding-right'>Company</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='tortfeasor_company' class='col-xs-10 col-sm-5' placeholder='Enter Company' value="<?php if($records[0]['tortfeasor_company']!='' && $records[0]['tortfeasor_company']==$rc){echo $records[0]['tortfeasor_company'];}else {echo $rc;}?>" name='tortfeasor_company' readonly> 
                      </div>
                    </div>
<h3>INSURANCE INFO</h3>
                    <div class='form-group'> 
                      <label for='recovery_company' class='col-sm-3 control-label no-padding-right'>Company</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_company' class='col-xs-10 col-sm-5' placeholder='Enter Company' value="<?php echo $records[0]['company'];?>" name='recovery_company' > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_line1' class='col-sm-3 control-label no-padding-right'>Address Line1</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_line1' class='col-xs-10 col-sm-5' placeholder='Enter Line 1' value="<?php echo $records[0]['line1'];?>" name='recovery_line1' > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_line2' class='col-sm-3 control-label no-padding-right'>Address Line2</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_line2' class='col-xs-10 col-sm-5' placeholder='Enter Line 2' value="<?php echo $records[0]['line2'];?>" name='recovery_line2' > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_city' class='col-sm-3 control-label no-padding-right'>City</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_city' class='col-xs-10 col-sm-5' placeholder='Enter City' name='recovery_city' value="<?php echo $records[0]['city'];?>" > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_state' class='col-sm-3 control-label no-padding-right'>State</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_state' class='col-xs-10 col-sm-3' placeholder='Enter State' name='recovery_state' value="<?php echo $records[0]['state'];?>"> 
                       
                      <input type='text' id='recovery_zip' class='col-xs-10 col-sm-2' placeholder='Enter Zip' name='recovery_zip' value="<?php echo $records[0]['zip'];?>" > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_policy_number' class='col-sm-3 control-label no-padding-right'>Policy Number</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_policy_number' class='col-xs-10 col-sm-5' placeholder='Enter Policy Number' value="<?php echo $records[0]['policy_number'];?>" name='recovery_policy_number' > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_claim_number' class='col-sm-3 control-label no-padding-right'>Claim Number</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_claim_number' class='col-xs-10 col-sm-5' placeholder='Enter Claim Number' value='<?php echo $claim_no;?>' name='recovery_claim_number' readonly> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_adjuster' class='col-sm-3 control-label no-padding-right'>Adjuster</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_adjuster' class='col-xs-10 col-sm-5' placeholder='Enter Adjuster' value="<?php echo $records[0]['adjuster'];?>" name='recovery_adjuster' > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_adjuster_email' class='col-sm-3 control-label no-padding-right'>Adjuster Email</label>
                      <div class='col-sm-9'> 
                      <input type='email' id='recovery_adjuster_email' class='col-xs-10 col-sm-4' placeholder='Enter Adjuster Email' value="<?php echo $records[0]['adjuster_email'];?>" name='recovery_adjuster_email' > 
                      <span class='col-xs-10 col-sm-1'><a href='javascript:void(0)' onclick='openReport();' ><i class="fa fa-envelope"></i></a></span>
                      </div>
                    </div>
                     <div class='form-group'> 
                      <label for='recovery_adjuster_email' class='col-sm-3 control-label no-padding-right'>Adjuster Phone</label>
                      <div class='col-sm-9'> 
                      <input type='text' value="<?php echo $records[0]['adjuster_phone'];?>" id='recovery_adjuster_phone' class='col-xs-10 col-sm-5' placeholder='Enter Phone' name='recovery_adjuster_phone' > 
                      </div>
                    </div>
<h3>FINANCIAL INFO</h3>
                    <div class='form-group'> 
                      <label for='recovery_opd_reserve' class='col-sm-3 control-label no-padding-right'>OPD Reserve</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_opd_reserve' class='col-xs-10 col-sm-5' placeholder='Enter OPD Reserve' value='<?php echo $opdr;?>' name='recovery_opd_reserve' readonly="" > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_opd_paid' class='col-sm-3 control-label no-padding-right'>OPD Paid</label>
                      <div class='col-sm-9'> 
                     <input type='text' id='recovery_opd_paid' class='col-xs-10 col-sm-5' placeholder='Enter OPD Paid' value='<?php echo round($opdp,2);?>' name='recovery_opd_paid' readonly=""> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_est_recovery' class='col-sm-3 control-label no-padding-right'>Est Recovery</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_est_recovery' class='col-xs-10 col-sm-5' placeholder='Est Recovery' value="<?php echo round($records[0]['opd_est_recovery'],2);?>" name='recovery_est_recovery' > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='recovery_opd_recovery' class='col-sm-3 control-label no-padding-right'>Recovery</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_opd_recovery' class='col-xs-10 col-sm-5' placeholder='Recovery' value='<?php echo round($opdc,2);?>' name='recovery_opd_recovery' readonly=""> 
                      </div>
                    </div>
                    <?php
                    $recovery = 0;
                    if($opdc>0 && $opdp>0)
                    {
                      $recovery = ($opdc/$opdp)*100;  
                    }
                    
                    ?>
                     <div class='form-group'> 
                      <label for='recovery_percentage' class='col-sm-3 control-label no-padding-right'>Recovery%</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='recovery_percentage' class='col-xs-10 col-sm-5' placeholder='Recovery%' name='recovery_percentage' value='<?php print round($recovery,2);?>'  readonly=""> 
                      </div>
                    </div>
<script>

function openReport() {
    var em = $("#recovery_adjuster_email").val();
var url = "<?php echo base_url()?>claims/claimsMail/<?php echo $cid;?>?val="+em;
if(em!='')
{
    var win = window.open(url, '_blank');
  win.focus();
}
}
</script>
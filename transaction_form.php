<?php
  //add and edit diary list
$data =Array
        (
            'id' => '',
            'control_no' => '',
            'payment_or_collection' => '',
            'void' =>  '',
            'amount' =>  '',
            'cleared' =>  '',
            'claim_number' => '',
            'bank_account' => '',
            'transaction_date' => '',
            'payee_type' => '',
            'payor_type' => '',
            'last_name' => '',
            'first_name' => '',
            'tax_id' => '',
            'address1' => '',
            'address2' => '',
            'state' => '',
            'city' => '',
            'country' => '',
            'zip_code' => '', 
            'enclosure' => '', 
            'auto_check' => '', 
            'check_status' => '',
            'check_date' => '',
            'check_number' => '',
            'check_memo' => '',
            'transaction_notes' => '',
            'added_on' => ''
        );
if($record!=''){
$data = Array
        (
            'id' => $record[0]['id'],
            'control_no' => $record[0]['control_no'],
            'payment_or_collection' => $record[0]['payment_or_collection'],
            'void' =>  $record[0]['void'],
            'cleared' =>  $record[0]['cleared'],
            'claim_number' => $record[0]['claim_number'],
            'bank_account' => $record[0]['bank_account'],
            'amount' => $record[0]['amount'],
            'transaction_date' => $record[0]['transaction_date'],
            'payee_type' => $record[0]['payee_type'],
            'payor_type' => $record[0]['payor_type'],
            'last_name' => $record[0]['last_name'],
            'first_name' => $record[0]['first_name'],
            'tax_id' => $record[0]['tax_id'],
            'address1' => $record[0]['address1'],
            'address2' => $record[0]['address2'],
            'state' => $record[0]['state'],
            'city' => $record[0]['city'],
            'country' => $record[0]['country'],
            'zip_code' => $record[0]['zip_code'], 
            'enclosure' => $record[0]['enclosure'], 
            'auto_check' => $record[0]['auto_check'], 
            'check_status' => $record[0]['check_status'],
            'check_date' => $record[0]['check_date'],
            'check_number' => $record[0]['check_number'],
            'check_memo' => $record[0]['check_memo'],
            'transaction_notes' => $record[0]['transaction_notes']
        );

}
    ?>
    <div class="row">
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
       <div class="widget-header">
                  <h4 class="widget-title">Transaction
<a href='javascript:void(0)' class="pull-right" onclick="document.getElementById('tr_div').innerHTML='';"><i class="fa fa-times"></i></a>
                  </h4>
                </div>
                <div class="space-4"></div>
                <form role="form" class="form-horizontal" <?php
            if($record!=''){
              ?>
              action="<?php echo base_url();?>transaction/transactionUpdate/"<?php
            }else{ ?>
              action="<?php echo base_url('transaction/transactionInsert');?>"
              <?php
            }?>  method="post">
                  <!-- #section:elements.form -->
                  <div class="form-group">
                    <label for="control_no" class="col-sm-3 control-label no-padding-right"> Control Number </label>
 <input type="hidden" value='<?php echo $data['id'];?>' name='id'>
                    <div class="col-sm-9">
                      <input type="text" class="col-xs-10 col-sm-5" placeholder="Control Number" id="control_no" name="control_no" value='<?php echo $data['control_no'];?>'>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pay" class="col-sm-3 control-label no-padding-right"> Payment </label>

                    <div class="col-sm-1">
                        <input type="radio" onclick="payCol(this.value)" name="payment_or_collection" id="pay" value="Payment" <?php if($data['payment_or_collection']=='Payment'){print "Checked";}?>>
                      </div>
                    <label for="void" class="col-sm-1 control-label no-padding-right"> Void </label>

                    <div class="col-sm-5">
                        <input type="checkbox" name="void"  id="void" value="Void" <?php if($data['void']=='Void'){print "Checked";}?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="col" class="col-sm-3 control-label no-padding-right"> Collection </label>

                    <div class="col-sm-1">
                        <input type="radio" name="payment_or_collection" <?php if($data['payment_or_collection']=='Collection'){print "Checked";}?> onclick="payCol(this.value)" id="col" value="Collection">
                    </div>
                    <label for="cleared" class="col-sm-1 control-label no-padding-right"> Cleared </label>

                    <div class="col-sm-3">
                        <input type="checkbox" name="cleared" id="cleared" value="Cleared" <?php if($data['cleared']=='Cleared'){print "Checked";}?>>
                    </div>
                  </div>
                                    
                    
                  <div class="form-group">
                    <label for="claim_number" class="col-sm-3 control-label no-padding-right"> Claim Number </label>

                    <div class="col-sm-9">
                    <input type="text" id="claim_number" class="col-xs-10 col-sm-5" placeholder="Transaction Number" name="claim_number" value='<?php echo $data['claim_number'];?>'>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label for="bank_acc" class="col-sm-3 control-label no-padding-right"> Bank Account </label>

                    <div class="col-sm-9">
                        <select name="bank_acc" id="bank_acc" class="col-xs-10 col-sm-5">
                          <option value="sdasd" <?php if($data['bank_account']=='sdasd'){ print "selected";} ?>>BOA PL/PD ACCOUNT</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="amnt" class="col-sm-3 control-label no-padding-right"> Amount </label>

                    <div class="col-sm-9">
                        <input type="text" id="amnt" class="col-xs-10 col-sm-5" placeholder="Amount" name="amount" value='<?php echo $data['amount'];?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="transaction_date" class="col-sm-3 control-label no-padding-right"> Transaction Date </label>

                    <div class="col-sm-9">
                        <div class="input-group input-group-sm col-sm-5">
                          <input type="text" class="form-control hasDatepicker datepicker" id="transaction_date" placeholder="Transaction Date" name="transaction_date" value='<?php echo $data['transaction_date'];?>'>
                          <span class="input-group-addon">
                            <i class="ace-icon fa fa-calendar"></i>
                          </span>
                        </div>
                      </div>
                  </div>
                                    
                                    <div class="form-group">
                    <span class='payee'>
                  <label for="payee_type" class="col-sm-3 control-label no-padding-right">Payee Type</label>
                    <div class="col-sm-9">
                        <select name="pay_type" id="payee_type" class="col-xs-10 col-sm-5">
                        <option value="payee" <?php if($data['payee_type']=='payee'){ print "selected";} ?>>Payee</option>
                        </select>
                    </div>
                    </span>
                    <span class='payor' style="display:none">
                    <label for="payor_type" class="col-sm-3 control-label no-padding-right"> Payor Type </label>

                    <div class="col-sm-9">
                        <select name="payor_type" id="payor_type" class="col-xs-10 col-sm-5">
                          <option value="payor" <?php if($data['payor_type']=='payor'){ print "selected";} ?>>Payor</option>
                        </select>
                    </div>
                    </span>
                    
                  </div>
                  
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Last Name </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_lname" class="col-xs-10 col-sm-5" placeholder="Last Name" name="transaction_lname" value='<?php echo $data['last_name'];?>'>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> First Name </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_fname" class="col-xs-10 col-sm-5" placeholder="First Name" name="transaction_fname" value='<?php echo $data['first_name'];?>'>
                    </div>
                                        </div>
                                    
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Tax ID </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_taxid" class="col-xs-10 col-sm-5" placeholder="Tax ID" name="transaction_taxid" value='<?php echo $data['tax_id'];?>'>
                    </div>
                  </div>
                                    
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Address1 </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_add1" class="col-xs-10 col-sm-5" placeholder="Address1" name="transaction_add1" value='<?php echo $data['address1'];?>'>
                    </div>
                                        </div>
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Address2 </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_add2" class="col-xs-10 col-sm-5" placeholder="Address2" name="transaction_add2" value='<?php echo $data['address2'];?>'>
                    </div>
                  </div>
                                    
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> City </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_city" class="col-xs-10 col-sm-5" placeholder="City" name="transaction_city" value='<?php echo $data['city'];?>'>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> State </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_state" class="col-xs-10 col-sm-5" placeholder="State" name="transaction_state" value='<?php echo $data['state'];?>'>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Zip </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_zip" class="col-xs-10 col-sm-5" placeholder="Zip" name="transaction_zip" value='<?php echo $data['zip_code'];?>'>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> County </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_county" class="col-xs-10 col-sm-5" placeholder="County" name="transaction_county" value='<?php echo $data['country'];?>'>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Enclosure </label>

                    <div class="col-sm-9">
                    <input type="checkbox" <?php if($data['enclosure']=='enclosure'){ print "checked";} ?> name="transaction_enclosure" id="transaction_enclosure" value='enclosure'>
                    </div>
                  </div>
                                    
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Auto Check? </label>

                    <div class="col-sm-9">
                    <input type="checkbox" <?php if($data['auto_check']=='auto'){ print "checked";} ?> name="transaction_auto" id="transaction_auto" value="auto">
                    </div>
                  </div>
                                    
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Check Status </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_cstatus" value="R Released" class="col-xs-10 col-sm-5" placeholder="Check Status" name="transaction_cstatus" value='<?php echo $data['check_status'];?>'>
                    </div>
                  </div>
                                    
                                    
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Check Date </label>

                    <div class="col-sm-9">
                        <div class="input-group input-group-sm col-sm-5">
                    <input type="text"  name="transaction_cdate" placeholder="Enter Check Date" id="date_loss" class="form-control hasDatepicker datepicker" value='<?php echo $data['check_date'];?>'>
                    <span class="input-group-addon">
                            <i class="ace-icon fa fa-calendar"></i>
                          </span>
                        </div>
                      </div>
                  </div>
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Check Number </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_cnumber" value="0" class="col-xs-10 col-sm-5" placeholder="Check Number" name="transaction_cnumber" value='<?php echo $data['check_number'];?>'>
                    </div>
                  </div>
                  
                                    <div class="form-group">
                    <label for="time_loss" class="col-sm-3 control-label no-padding-right"> Check Memo </label>

                    <div class="col-sm-9">
                    <input type="text" id="transaction_cmemo"class="col-xs-10 col-sm-5" placeholder="Check Memo" name="transaction_cmemo" value='<?php echo $data['check_memo'];?>'>
                    </div>
                  </div>
                                    <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="location_desc"> Transaction Notes </label>

                    <div class="col-sm-9">
                      <textarea name="transaction_notes" id="location_desc" class="col-xs-10 col-sm-5"><?php echo $data['transaction_notes'];?></textarea>
                    </div>
                  </div>
                  <input type='submit' name='submit' class="col-sx-6 col-sm-1 btn btn-primary" value="Submit">
                  </form>
                  </div>
      </div><!-- /.col -->
    </div>
<script type="text/javascript">
  jQuery(function($) {
      
        $( ".datepicker" ).datepicker({
          showOtherMonths: true,
          format: 'yyyy-mm-dd',
          selectOtherMonths: false,
          //isRTL:true,
      });
      });

</script>

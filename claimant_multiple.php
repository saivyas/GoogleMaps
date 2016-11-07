<?php
$cno = $_POST['cno'];

?>
<div id='clm_<?php print $cno;?>' class='more_claimants'>
    <h3>Claimant <?php print $cno;?> <a onclick='closeCliam("<?php print $cno;?>")' class='pull-right' href='javascript:void(0)'> <i class='fa fa-times'></i></a></h3>
    <div class="space-4"></div>
    <div class='form-group'> 
      <label for='claimant_type' class='col-sm-3 control-label no-padding-right'> Claimant Type </label>
      <div class='col-sm-9'> 
       
        <select name="claimant_type[]" id="" class="col-xs-10 col-sm-5" onchange="claimantType(this.value,this)">
          <option value='None'> Select</option>
          <option value='PD'> Property Damage (PD)</option>
          <option value='BI'> Bodily Injury (BI)</option>
        </select>
      </div>
    </div>
    <div class='form-group'> 
      <label for='claimant_position' class='col-sm-3 control-label no-padding-right'> Person </label>
      <div class='col-sm-9'> 
        <select name='claimant_position[]' id='claimant_position' class='col-xs-10 col-sm-5'>
          <option  value='None'> Select</option>
          <option  value='Owner'> Owner</option>
          <option  value='Driver'> Driver</option>
          <option  value='Passenger'> Passenger</option>
          <option  value='Pedestrian'> Pedestrian</option>
          <option  value='Motorcyclist'> Motorcyclist</option>
          <option  value='Bicyclist'> Bicyclist</option>
        </select>
      </div>
    </div>
                            <div class='form-group'> 
                          <label for='claimant_company' class='col-sm-3 control-label no-padding-right'>  Company </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_company' class='col-xs-10 col-sm-5' placeholder='' name='claimant_company[]'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_dot' class='col-sm-3 control-label no-padding-right'>  DOT# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_dot' class='col-xs-10 col-sm-5' placeholder='' name='claimant_dot[]'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_lp' class='col-sm-3 control-label no-padding-right'>  L/P# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_lp' class='col-xs-10 col-sm-5' placeholder='' name='claimant_lp[]'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_vin' class='col-sm-3 control-label no-padding-right'>  Vin# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_vin' class='col-xs-10 col-sm-5' placeholder='' name='claimant_vin[]'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_dl' class='col-sm-3 control-label no-padding-right'>  D/L# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_dl' class='col-xs-10 col-sm-5' placeholder='' name='claimant_dl[]'> 
                          </div>
                        </div>
    <div class='form-group'> 
      <label for='claimant_first_name' class='col-sm-3 control-label no-padding-right'>  First Name </label>
      <div class='col-sm-9'> 
        <input type='text' id='claimant_first_name' class='col-xs-10 col-sm-5' placeholder='' name='claimant_firstname[]' value=''> 
      </div>
    </div>
    <div class='form-group'> 
      <label for='claimant_last_name' class='col-sm-3 control-label no-padding-right'>   Last Name </label>
      <div class='col-sm-9'> 
        <input type='text' id='claimant_last_name' class='col-xs-10 col-sm-5' placeholder='' name='claimant_lastname[]' value=''> 
      </div>
    </div>
    <div class='form-group'> 
      <label for='claimant_street' class='col-sm-3 control-label no-padding-right'> Street </label>
      <div class='col-sm-9'> 
        <input type='text' id='claimant_street' class='col-xs-10 col-sm-5' placeholder='' name='claimant_street[]' value=''> 
      </div>
    </div>
    <div class='form-group'> 
      <label for='claimant_city' class='col-sm-3 control-label no-padding-right'>  City </label>
      <div class='col-sm-9'> 
        <input type='text' id='claimant_city' class='col-xs-10 col-sm-5' placeholder='' name='claimant_city[]' value=''> 
      </div>
    </div>
    <div class='form-group'> 
      <label for='claimant_state' class='col-sm-3 control-label no-padding-right'>   State </label>
      <div class='col-sm-9'> 
        <input type='text' id='claimant_state' class='col-xs-10 col-sm-5' placeholder='' name='claimant_state[]' value=''> 
      </div>
    </div>
    <div class='form-group'> 
      <label for='claimant_zip' class='col-sm-3 control-label no-padding-right'>Zip </label>
      <div class='col-sm-9'> 
        <input type='text' id='claimant_zip' class='col-xs-10 col-sm-5' placeholder='' name='claimant_zip[]' value=''> 
      </div>
    </div>
    <div class='form-group' style='display:none;'> 
      <label for='claimant_country' class='col-sm-3 control-label no-padding-right'> Country </label>
      <div class='col-sm-9'> 
        <input type='text' id='claimant_country' class='col-xs-10 col-sm-5' placeholder='' name='claimant_country[]' value=''> 
      </div>
    </div>
    <!-- <div class='form-group'> 
      <label for='claimant_address' class='col-sm-3 control-label no-padding-right'>   Address </label>
      <div class='col-sm-9'> 
        <textarea name='claimant_address' id='claimant_address' class='col-xs-10 col-sm-5'> <?php echo $data['claimant_address'];?></textarea>
      </div>
    </div> -->
    <div class='form-group'> 
      <label for='claimant_cell_phone' class='col-sm-3 control-label no-padding-right'>  Phone no. </label>
      <div class='col-sm-9'> 
        <input type='text' id='claimant_cell_phone' class='col-xs-10 col-sm-5' placeholder='' name='claimant_cellphone[]' value=''> 
      </div>
    </div>
    <div class='form-group'> 
      <label for='claimant_email' class='col-sm-3 control-label no-padding-right'>   Email </label>
      <div class='col-sm-9'> 
        <input type='text' id='claimant_email' class='col-xs-10 col-sm-5' placeholder='' name='claimant_email[]' value=''> 
      </div>
    </div>
    <div class='form-group'> 
      <label for='claimant_claimment' class='col-sm-3 control-label no-padding-right'>   Statement </label>
      <div class='col-sm-9'> 
        <textarea id='claimant_claimment' class='col-xs-10 col-sm-5' placeholder='' name='claimant_statement[]' ></textarea>
      </div>
    </div>
<div class='form-group'> 
                          <label for='vehicle_description' class='col-sm-3 control-label no-padding-right'>   Vehicle Description</label>
                          <div class='col-sm-9'> 
                            <textarea id='vehicle_description' class='col-xs-10 col-sm-5' placeholder='' name='vehicle_description[]' ></textarea>
                          </div>
                        </div>
    <div class='form-group'> 
      <label for='attorney' class='col-sm-3 control-label no-padding-right'>  Attorney </label>
      <div class='col-sm-9'>
        <input type="radio" name="claimant_attorney<?php print $cno;?>" value="No" onclick="attorneyBoxes(this.value,this);"> No
        <input type="radio" name="claimant_attorney<?php print $cno;?>" value="Yes"  onclick="attorneyBoxes(this.value,this);"> Yes 
        <!-- <input type='text' id='claimant_attorney' class='col-xs-10 col-sm-5' placeholder='Enter Attorney' name='claimant_attorney' value='<?php echo $data['claimant_attorney'];?>'>  -->
      </div>
    </div>
    <div class="modal claimant_modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Claimant <?php print $cno;?> Attorney</h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="cont" >
              <div class='form-group'> 
                <label for='claimant_attorney_name' class='col-sm-3 control-label no-padding-right'>Name</label>
                <div class='col-sm-9'> 
                  <input type='text' id='claimant_attorney_name' class='col-xs-10 col-sm-7' placeholder='Enter Name.' name='claimant_attorney_name[]' value='<?php echo $data['claimant_attorney_name'];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='claimant_attorney_phone' class='col-sm-3 control-label no-padding-right'>Phone no.</label>
                <div class='col-sm-9'> 
                  <input type='number' id='claimant_attorney_phone' class='col-xs-10 col-sm-7' placeholder='Enter Phone.' name='claimant_attorney_phone[]' value='<?php echo $data['claimant_attorney_phone'];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='claimant_attorney_email' class='col-sm-3 control-label no-padding-right'>Email</label>
                <div class='col-sm-9'> 
                  <input type='text' id='claimant_attorney_email' class='col-xs-10 col-sm-7' placeholder='Enter Email.' name='claimant_attorney_email[]' value='<?php echo $data['claimant_attorney_email'];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='claimant_attorney_adds' class='col-sm-3 control-label no-padding-right'>   Address </label>
                <div class='col-sm-9'> 
                  <textarea id='claimant_attorney_adds' class='col-xs-10 col-sm-7' placeholder='' name='claimant_attorney_adds[]' ><?php echo $data['claimant_attorney_adds'];?></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer wizard-actions">

          <button class="btn btn-danger btn-sm pull-right" data-dismiss="modal">
            <i class="ace-icon fa fa-times"></i>
            Close
          </button>
          <button class="btn btn-success btn-sm pull-right" data-dismiss="modal">
            <i class="ace-icon fa fa-check"></i>
            Ok
          </button>
        </div>
        </div>
      </div>
    </div>
</div>
    <div id="isBI" class='isBI'>
        <div class='form-group'> 
          <label for='claimant_injured' class='col-sm-3 control-label no-padding-right'>  Injured </label>
          <div class='col-sm-9'> 
            <label class="block pull-left">
              <input type='checkbox' class='ace input-sm' name='claimant_injured[]' value="Yes" onclick="isClaimantInjured(this)"> 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              Yes
            </label>
          </div>
        </div>
       
        <div class="isInjured_div">
            <div class='form-group'> 
              <label for='claimant_dob' class='col-sm-3 control-label no-padding-right'>Date Of Birth</label>
              <div class='col-sm-9'> 
                <input type='text' id='claimant_dob' class='col-xs-10 col-sm-5 hasDatepicker datepicker' name='claimant_dob[]' > 
              </div>
            </div>
            <div class='form-group'> 
              <label for='claimant_soc' class='col-sm-3 control-label no-padding-right'>Social Security number</label>
              <div class='col-sm-9'> 
                <input type='text' id='claimant_soc' class='col-xs-10 col-sm-5' name='claimant_soc[]' > 
              </div>
            </div>
            <div class='form-group'> 
              <label for='claimant_gender' class='col-sm-3 control-label no-padding-right'>Gender</label>
              <div class='col-sm-9'> 
                <label class="block pull-left">
                  <input type='radio' id='claimant_gender' class='ace input-sm' name='claimant_gender<?php print $cno;?>' value="Male"> 
                  <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                  Male
                </label>
                <label class="block pull-left">
                  <input type='radio' id='claimant_gender' class='ace input-sm' name='claimant_gender<?php print $cno;?>' value="Female" > 
                  <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                  Female
                </label>
              </div>
            </div>
        </div>
 <div class='form-group'> 
          <label for='claimant_ME' class='col-sm-3 control-label no-padding-right'>  Medicare Eligible </label>
          <div class='col-sm-9'> 
            <label class="block pull-left">
              <input type='checkbox' class='claimant_ME ace input-sm' name='claimant_ME[]' value="Yes" onclick="isME(this)"> 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              Yes
            </label>
          </div>
        </div>
        <div id="ME_div" class="ME_div"></div>

    </div>
</div>
<script type="text/javascript">
   $( ".datepicker" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: false,

        });
</script>

<?php
$data = Array
        (
            'id' => '',
            'person_type' => '',
            'first_name' => '',
            'last_name' => '',
            'middle_name' => '',
            'age' => '',
            'initials' => '',
            'home_contact' => '',
            'Office_contact' => '',
            'address1' => '',
            'address2' => '',
            'email' => '',
            'zipcode' => '',
            'fax' => '',
            'sex' => '',
            'city' => '',
            'state' => '',
            'country' => '',
            '1099reportables' => ''
        );
if($record!=''){
  $data = Array
        (
            'id' => $record[0]['id'],
            'person_type' => $record[0]['person_type'],
            'first_name' => $record[0]['first_name'],
            'last_name' => $record[0]['last_name'],
            'middle_name' => $record[0]['middle_name'],
            'age' => $record[0]['age'],
            'initials' => $record[0]['initials'],
            'home_contact' => $record[0]['home_contact'],
            'office_contact' => $record[0]['office_contact'],
            'address1' => $record[0]['address1'],
            'address2' => $record[0]['address2'],
            'email' => $record[0]['email'],
            'zipcode' => $record[0]['zip_code'],
            'fax' => $record[0]['fax'],
            'sex' => $record[0]['sex'],
            'city' => $record[0]['city'],
            'state' => $record[0]['state'],
            'country' => $record[0]['country'],
            '1099reportables' => $record[0]['1099reportables']
        );
}
?>              
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="widget-header">
                  <h4 class="widget-title">People Maintenance
                  <a href='javascript:void(0)' class="pull-right" onclick='document.getElementById("people_body").style.display="none";'><i class="fa fa-times"></i></a>
                  </h4>
                </div>
                <div class="space-4"></div>
                <form role="form" class="form-horizontal" <?php
            if($record!=''){
              ?>
              action="<?php echo base_url()?>main/peopleUpdate"<?php
            }else{ ?>
              action="<?php echo base_url('main/peopleInsert');?>"
              <?php
            }?>  method="post">
            <input type="hidden" value='<?php echo $record[0]['id'];?>' name='id'>
                  <!-- #section:elements.form -->
                  <div class="form-group">
                    <label for="person_type" class="col-sm-3 control-label no-padding-right"> Person Type </label>
                    <div class="col-sm-9">
                      <select name="person_type" id="person_type" class="col-xs-10 col-sm-5">
                      <option value="a_i" <?php if($data['person_type']=='a_i'){ print "selected";} ?>>Additional Insured</option>
                      <option value="adjuster" <?php if($data['person_type']=='adjuster'){ print "selected";} ?>>Adjuster </option>
                      <option value="agents" <?php if($data['person_type']=='agents'){ print "selected";} ?>>Agents </option>
                      <option value="anesthetists" <?php if($data['person_type']=='agents'){ print "selected";} ?>>Agents </option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="first_name" class="col-sm-3 control-label no-padding-right"> First Name </label>
                    <div class="col-sm-9">
                    <input type="text" name='first_name' id='first_name' class="col-xs-10 col-sm-5" value='<?php print $data['first_name'];?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="first_name" class="col-sm-3 control-label no-padding-right"> Last Name </label>
                    <div class="col-sm-9">
                     <input type="text" name='last_name' id='last_name' class="col-xs-10 col-sm-5" value='<?php print $data['last_name'];?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="middle_name" class="col-sm-3 control-label no-padding-right"> Middle Name </label>
                    <div class="col-sm-9">
                     <input type="text" name='middle_name' id='middle_name' class="col-xs-10 col-sm-5" value='<?php print $data['middle_name'];?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="age" class="col-sm-3 control-label no-padding-right"> Age</label>
                    <div class="col-sm-9">
                     <input type="text" name='age' id='age' value='<?php print $data['age'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="contact1" class="col-sm-3 control-label no-padding-right"> Office Contact</label>
                    <div class="col-sm-9">
                     <input type="text" name='contact1' id='contact1' value='<?php print $data['office_contact'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="contact2" class="col-sm-3 control-label no-padding-right"> Home Contact</label>
                    <div class="col-sm-9">
                     <input type="text" name='contact2' id='contact2' value='<?php print $data['home_contact'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="initials" class="col-sm-3 control-label no-padding-right">Initials</label>
                    <div class="col-sm-9">
                     <input type="text" name='initials' id='initials' value='<?php print $data['initials'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fax" class="col-sm-3 control-label no-padding-right">Fax</label>
                    <div class="col-sm-9">
                     <input type="text" name='fax' id='fax' value='<?php print $data['fax'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address1" class="col-sm-3 control-label no-padding-right">Address1</label>
                    <div class="col-sm-9">
                     <input type="text" name='address1' id='address1' value='<?php print $data['address1'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address2" class="col-sm-3 control-label no-padding-right">Address2</label>
                    <div class="col-sm-9">
                     <input type="text" name='address2' id='address2' value='<?php print $data['address2'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label no-padding-right">Email</label>
                    <div class="col-sm-9">
                     <input type="text" name='email' id='email' value='<?php print $data['email'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sex" class="col-sm-3 control-label no-padding-right">Sex</label>
                    <div class="col-sm-9">
                     <input type="text" name='sex' id='sex' value='<?php print $data['sex'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-sm-3 control-label no-padding-right">City</label>
                    <div class="col-sm-9">
                     <input type="text" name='city' id='city' value='<?php print $data['city'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="state" class="col-sm-3 control-label no-padding-right">State</label>
                    <div class="col-sm-9">
                     <input type="text" name='state' id='state' value='<?php print $data['state'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="country" class="col-sm-3 control-label no-padding-right">Country</label>
                    <div class="col-sm-9">
                     <input type="text" name='country' id='country' value='<?php print $data['country']='US';?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="zip_code" class="col-sm-3 control-label no-padding-right">Zip Code</label>
                    <div class="col-sm-9">
                     <input type="text" name='zip_code' id='zip_code' value='<?php print $data['zipcode'];?>' class="col-xs-10 col-sm-5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="1099report" class="col-sm-3 control-label no-padding-right">1099Reportable</label>
                    <div class="col-sm-9">
                     <input type="checkbox" name='1099report' id='1099report' <?php if($data['1099reportables']=='Yes'){print 'checked';} ?> value='Yes' class="col-xs-">
<input type='hidden' name='1099report' value=''>
                    </div>
                  </div>


  
  <div class="form-group col-sm-6">
  <input type='submit' class="btn btn-primary pull-right" value="Submit" />
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
    </script>
     <script type="text/javascript">
                         $("#witness-body").hide();
                         $("#examiner-body").hide();
                         $("#ivm-body").hide();
                         $("#eloss-body").hide();
                         $("#sso-body").hide();


                         function lossdescription1(val)
                         {
                          lossdescription(val);
                         }
                         function lossdescription(val)
                         {
                          if(val=='Environmental loss')
                          {
                            var eloss ="<div id='eloss-body'> <div class='form-group'> <label for='eloss' class='col-sm-3 control-label no-padding-right'>Environmental Loss</label> <div class='col-sm-9'> <input type='radio' id='' name='eloss' <?php if($data['eloss']=='Fuel Spill peopleant'){echo 'checked=checked';}?> value='Fuel Spill peopleant'> Fuel Spill peopleant <input type='radio' id='' name='eloss' <?php if($data['eloss']=='Fuel Spill Insured'){echo 'checked=checked';}?> value='Fuel Spill Insured'> Fuel Spill Insured </div> </div> </div>";
                            $("#LD").html(eloss);
                          }else if(val=='Struck stationary object')
                          {
                            var sso = "<div id='sso-body'> <div class='form-group'> <label for='sso' class='col-sm-3 control-label no-padding-right'>Struck stationary object</label> <div class='col-sm-9'> <input type='radio' id='' name='sso[]' <?php if($data['sso']=='Parked_vehicle'){echo 'checked=checked';}?> value='Parked_vehicle'> Parked Vehicle <input type='radio' id='' name='sso' <?php if($data['sso']=='post'){echo 'checked=checked';}?> value='post'> Post <input type='radio' id='' name='sso' <?php if($data['sso']=='fence'){echo 'checked=checked';}?> value='fence'> Fence <input type='radio' id='' name='sso' <?php if($data['sso']=='overpass'){echo 'checked=checked';}?> value='overpass'> Overpass <input type='radio' id='' name='sso' <?php if($data['sso']=='Awning'){echo 'checked=checked';}?> value='Awning'> Awning <input type='radio' id='' name='sso' <?php if($data['sso']=='gaurd_rail'){echo 'checked=checked';}?> value='gaurd_rail'> Gaurd Rail<br/> <input type='radio' id='' name='sso' <?php if($data['sso']=='utility_pole'){echo 'checked=checked';}?> value='utility_pole'> Utility pole <input type='radio' id='' name='sso' <?php if($data['sso']=='Mailbox'){echo 'checked=checked';}?> value='Mailbox'> Mailbox <input type='radio' id='' name='sso' <?php if($data['sso']=='trees_shrubs_landscape'){echo 'checked=checked';}?> value='trees_shrubs_landscape'> Trees/shrubs/landscape <input type='radio' id='' name='sso' <?php if($data['sso']=='curb'){echo 'checked=checked';}?> value='curb'> Curb <input type='radio' id='' name='sso' <?php if($data['sso']=='sign'){echo 'checked=checked';}?> value='sign'> Sign <input type='radio' id='' name='sso' <?php if($data['sso']=='Building'){echo 'checked=checked';}?> value='Building'> Building <input type='radio' id='' name='sso' <?php if($data['sso']=='Dock'){echo 'checked=checked';}?> value='Dock'> Dock <input type='radio' id='' name='sso' <?php if($data['sso']=='other'){echo 'checked=checked';}?> value='othet'> Other </div> </div> </div>";
                            $("#LD").html(sso);
                          }
                          else
                          {
                            $("#LD").html('');
                          }

                         }
                          function kkk1(value) {
                            kkk(value);
                          }
                          function kkk(value) {
                            if(value=='Changing Lanes')
                            {
                              var ivm = "<div id='ivm-body'> <div class='form-group'> <label for='changing_lanes' class='col-sm-3 control-label no-padding-right'>Changing Lanes </label> <div class='col-sm-9'> <input type='radio' id='' name='changing_lanes' <?php if($data['changing_lanes']=='turning_left'){echo 'checked=checked';}?> value='turning_left'> Turning Left <input type='radio' id='' name='changing_lanes' <?php if($data['changing_lanes']=='turning_right'){echo 'checked=checked';}?> value='turning_right'> Turning Right <input type='radio' id='' name='changing_lanes' <?php if($data['changing_lanes']=='merging_onto_roadway'){echo 'checked=checked';}?> value='merging_onto_roadway'> Merging onto Roadway </div> </div> </div>";
                              $('#IVM').html(ivm);
                            }
                            else
                            {
                              $('#IVM').html('');
                            }
                          }
                          function personsOptions1(value) {
                            personsOptions(value);
                          }
                          function personsOptions(value) {
                          switch (value) {
                              case 'Insured driver':
                                $("#PI").html('');
                                break;
                              case 'Other':
                                $("#PI").html('');
                                break;
                              case 'CSP':
                                $('#PI').html("\
                                  <div class='form-group'> \
                                    <label for='driver_id' class='col-sm-3 control-label no-padding-right'> Driver Id </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='driver_id' class='col-xs-10 col-sm-5' placeholder='Enter Driver Id' name='csp_driverid' value='<?php echo $data['csp_driverid'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='driver_type' class='col-sm-3 control-label no-padding-right'> Driver Tpe </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='driver_type' class='col-xs-10 col-sm-5' placeholder='Enter Driver Type' name='csp_drivertype' value='<?php echo $data['csp_drivertype'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='last_name' class='col-sm-3 control-label no-padding-right'> Last Name </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='last_name' class='col-xs-10 col-sm-5' placeholder='Enter Last Name' name='csp_lastname' value='<?php echo $data['csp_lastname'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='first_name' class='col-sm-3 control-label no-padding-right'> First Name </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='first_name' class='col-xs-10 col-sm-5' placeholder='Enter First Name' name='csp_firstname' value='<?php echo $data['csp_firstname'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='cell_phone' class='col-sm-3 control-label no-padding-right'> Cell Phone </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='cell_phone' class='col-xs-10 col-sm-5' placeholder='Enter Cell Phone No.' name='csp_cellphone' value='<?php echo $data['csp_mobile'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='driver_email' class='col-sm-3 control-label no-padding-right'> Driver Email </label> \
                                    <div class='col-sm-9'> \
                                      <input type='email' id='driver_email' class='col-xs-10 col-sm-5' placeholder='Enter Driver Email' name='csp_driveremail' value='<?php echo $data['csp_email'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='contractor_DBA' class='col-sm-3 control-label no-padding-right'> Contractor DBA </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='contractor_DBA' class='col-xs-10 col-sm-5' placeholder='Enter Contractor DBA' name='contractor_dba' value='<?php echo $data['contractor_dba'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='AO_first_name' class='col-sm-3 control-label no-padding-right'> AO First Name </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='AO_first_name' class='col-xs-10 col-sm-5' placeholder='Enter AO First Name' name='ao_firstname' value='<?php echo $data['ao_firstname'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='AO_last_name' class='col-sm-3 control-label no-padding-right'> AO Last Name </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='AO_last_name' class='col-xs-10 col-sm-5' placeholder='Enter AO Last Name' name='ao_lastname' value='<?php echo $data['ao_lastname'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='AO_email' class='col-sm-3 control-label no-padding-right'> AO Email </label> \
                                    <div class='col-sm-9'> \
                                      <input type='email' id='AO_email' class='col-xs-10 col-sm-5' placeholder='Enter AO Email' name='ao_email' value='<?php echo $data['ao_email'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='attorney' class='col-sm-3 control-label no-padding-right'> Attorney </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='attorney' class='col-xs-10 col-sm-5' placeholder='Enter Attorney' name='csp_attorney' value='<?php echo $data['csp_attorney'];?>'> \
                                    </div> \
                                  </div>\
                                  ");
                                break;                                
                              case 'Police Department':
                                $('#PI').html("\
                                  <div class='form-group'> \
                                    <label for='police_dpt' class='col-sm-3 control-label no-padding-right'> Yes/No </label> \
                                    <div class='col-sm-9'> \
                                      <input type='radio' id='police_dpt' name='police_dpt' <?php if($data['police_involvment']=='Yes'){echo 'checked=checked';}?> value='Yes'> Yes\
                                      <input type='radio' id='police_dpt' name='police_dpt' <?php if($data['police_involvment']=='No'){echo 'checked=checked';}?> value='No'> No\
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='which_dpt' class='col-sm-3 control-label no-padding-right'> Which Department </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='which_dpt' class='col-xs-10 col-sm-5' placeholder='Enter Department' name='which_dpt' value='<?php echo $data['which_department'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='any_citations' class='col-sm-3 control-label no-padding-right'> Any citations and to who </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='any_citations' class='col-xs-10 col-sm-5' placeholder='Enter Any Citations' name='any_citations' value='<?php echo $data['citations_who'];?>'> \
                                    </div> \
                                  </div>\
                                  ");
                                break;
                              case 'peopleant':
                                $('#PI').html("\
                                  <div class='form-group'> \
                                    <label for='peopleant_type' class='col-sm-3 control-label no-padding-right'>peopleant Type </label> \
                                    <div class='col-sm-9'> \
                                      <input type='radio' id='peopleant_type' name='peopleant_type' <?php if($data['peopleant_type']=='pedestrian'){echo 'checked=checked';}?> value='pedestrian'> Pedestrian\
                                      <input type='radio' id='peopleant_type' name='peopleant_type' <?php if($data['peopleant_type']=='driver'){echo 'checked=checked';}?> value='driver'> Driver\
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='peopleant_first_name' class='col-sm-3 control-label no-padding-right'> peopleant First Name </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='peopleant_first_name' class='col-xs-10 col-sm-5' placeholder='Enter peopleant First Name' name='peopleant_firstname' value='<?php echo $data['peopleant_firstname'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='peopleant_last_name' class='col-sm-3 control-label no-padding-right'> peopleant Last Name </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='peopleant_last_name' class='col-xs-10 col-sm-5' placeholder='Enter peopleant Last Name' name='peopleant_lastname' value='<?php echo $data['peopleant_lastname'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='peopleant_address' class='col-sm-3 control-label no-padding-right'> peopleant Address </label> \
                                    <div class='col-sm-9'> \
                                      <textarea name='peopleant_address' id='peopleant_address' class='col-xs-10 col-sm-5'><?php echo $data['peopleant_address'];?></textarea>\
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='peopleant_cell_phone' class='col-sm-3 control-label no-padding-right'>peopleant Cell Phone </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='peopleant_cell_phone' class='col-xs-10 col-sm-5' placeholder='Enter peopleant Cell Phone No.' name='peopleant_cellphone' value='<?php echo $data['peopleant_mobile'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='peopleant_email' class='col-sm-3 control-label no-padding-right'> peopleant Email </label> \
                                    <div class='col-sm-9'> \
                                      <input type='email' id='peopleant_email' class='col-xs-10 col-sm-5' placeholder='Enter peopleant Email' name='peopleant_email' value='<?php echo $data['peopleant_email'];?>'> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='peopleant_peoplement' class='col-sm-3 control-label no-padding-right'> peopleant Statement </label> \
                                    <div class='col-sm-9'> \
                                      <textarea id='peopleant_peoplement' class='col-xs-10 col-sm-5' placeholder='Enter peopleant peoplement' name='peopleant_statement' ><?php echo $data['peopleant_statement'];?></textarea> \
                                    </div> \
                                  </div>\
                                  <div class='form-group'> \
                                    <label for='attorney' class='col-sm-3 control-label no-padding-right'> Attorney </label> \
                                    <div class='col-sm-9'> \
                                      <input type='text' id='peopleant_attorney' class='col-xs-10 col-sm-5' placeholder='Enter Attorney' name='peopleant_attorney' value='<?php echo $data['peopleant_attorney'];?>'> \
                                    </div> \
                                  </div>\
                                  ");
                                break;
                              case 'Witness':
                                var witness = "<div id='witness-body'> <div class='form-group'> <label for='peopleant_type' class='col-sm-3 control-label no-padding-right'>Witness Type </label> <div class='col-sm-9'> <input type='radio' id='witness_type' name='witness_type' <?php if($data['witness_type']=='pedestrian'){echo 'checked=checked';}?> value='pedestrian'> Pedestrian <input type='radio' id='witness_type' name='witness_type' <?php if($data['witness_type']=='driver'){echo 'checked=checked';}?> value='driver'> Driver </div> </div> <div class='form-group'> <label for='witness_firstname' class='col-sm-3 control-label no-padding-right'> First Name </label><div class='col-sm-9'> <input type='text' id='witness_firstname' class='col-xs-10 col-sm-5' placeholder='First Name' name='witness_firstname' value='<?php echo $data['witness_firstname'];?>'> </div> </div> <div class='form-group'> <label for='witness_lastname' class='col-sm-3 control-label no-padding-right'> Last Name </label><div class='col-sm-9'> <input type='text' id='witness_lastname' class='col-xs-10 col-sm-5' placeholder='Last Name' name='witness_lastname' value='<?php echo $data['witness_lastname'];?>'> </div> </div> <div class='form-group'> <label for='witness_mobile' class='col-sm-3 control-label no-padding-right'>Mobile </label><div class='col-sm-9'> <input type='text' id='witness_mobile' class='col-xs-10 col-sm-5' placeholder='Last Name' name='witness_cellphone' value='<?php echo $data['witness_mobile'];?>'> </div> </div> <div class='form-group'> <label for='witness_email' class='col-sm-3 control-label no-padding-right'> Email </label><div class='col-sm-9'> <input type='text' id='witness_email' class='col-xs-10 col-sm-5' placeholder='Last Name' name='witness_email' value='<?php echo $data['witness_email'];?>'> </div> </div> <div class='form-group'> <label for='witness_address' class='col-sm-3 control-label no-padding-right'>Address </label><div class='col-sm-9'> <textarea id='witness_address' class='col-xs-10 col-sm-5' placeholder='Address' name='witness_address' ><?php echo $data['witness_address'];?></textarea> </div> </div> <div class='form-group'> <label for='witness_statement' class='col-sm-3 control-label no-padding-right'>Statement </label><div class='col-sm-9'> <textarea id='witness_statement' class='col-xs-10 col-sm-5' placeholder='peoplement' name='witness_statement' ><?php echo $data['witness_statement'];?></textarea> </div> </div><div class='form-group'> <label for='witness_attorney' class='col-sm-3 control-label no-padding-right'>Attorney </label><div class='col-sm-9'> <input type='text' id='witness_attorney' class='col-xs-10 col-sm-5' placeholder='Attorney' name='witness_attorney'  value='<?php echo $data['witness_attorney'];?>' > </div> </div> </div>";
                                $('#PI').html(witness);
                                break;
                              case 'Examiners':
                                var examiner = "<div id='examiner-body'> <div class='form-group'> <label for='litigation_manager' class='col-sm-3 control-label no-padding-right'> peoples Litigation Manager </label><div class='col-sm-9'> <input type='text' id='litigation_manager' class='col-xs-10 col-sm-5' placeholder='peoples Litigation Manager' name='litigation_manager' value='<?php echo $data['litigation_manager'];?>'> </div> </div> <div class='form-group'> <label for='project_manager' class='col-sm-3 control-label no-padding-right'> Project Manager </label><div class='col-sm-9'> <input type='text' id='project_manager' class='col-xs-10 col-sm-5' placeholder='Project Manager' name='project_manager' value='<?php echo $data['project_manager'];?>'> </div> </div> <div class='form-group'> <label for='examiner1' class='col-sm-3 control-label no-padding-right'> Examiner1 </label><div class='col-sm-9'> <input type='text' id='examiner1' class='col-xs-10 col-sm-5' placeholder='Examiner 1' name='examiner1' value='<?php echo $data['examiner1'];?>'> </div> </div> <div class='form-group'> <label for='examiner2' class='col-sm-3 control-label no-padding-right'> Examiner2 </label><div class='col-sm-9'> <input type='text' id='examiner2' class='col-xs-10 col-sm-5' placeholder='Examiner 2' name='examiner2' value='<?php echo $data['examiner2'];?>'> </div> </div> </div>";
                                $('#PI').html(examiner);
                                break;
                              default:
                                
                                break;
                            }
                          }
                        </script>
<?php
if($data!='')
{
?>
<script type="text/javascript">
  personsOptions1('<?php print $data['person_involved'];?>');
  kkk1('<?php print $data['insd_veh_maneuver'];?>');
  lossdescription('<?php print $data['loss_description'];?>');
</script>
<?php
}
?>
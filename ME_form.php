<?php
if($_POST['offset']!='' or !empty($_POST['offset'])){
  $data = array(
                'claim_no' => $records[0]['claim_no'],
                'claim_id' => $records[0]['claim_id'],
                'rrts' => $records[0]['rrts'],
                'me_case_name' => explode('~',$records[0]['me_case_name']),
                'me_case_no' => explode('~',$records[0]['me_case_no']),
                'me_state_venue' => explode('~',$records[0]['me_state_venue']),
                'me_def_name' => explode('~',$records[0]['me_def_name']),
                'me_qualifiedA' => explode('~',$records[0]['me_qualifiedA']),
                'me_qualifiedB' => explode('~',$records[0]['me_qualifiedB']),
                'me_qualifiedC' => explode('~',$records[0]['me_qualifiedC']),
                'me_qualifiedD' => explode('~',$records[0]['me_qualifiedD']),
                'me_clm_no' => explode('~',$records[0]['me_clm_no']),
                'me_soc_no' => explode('~',$records[0]['me_soc_no']),
                'me_inj_lname' => explode('~',$records[0]['me_inj_lname']),
                'me_inj_fname' => explode('~',$records[0]['me_inj_fname']),
                'me_inj_mname' => explode('~',$records[0]['me_inj_mname']),
                'me_gender' => explode('~',$records[0]['me_gender']),
                'me_dob' => explode('~',$records[0]['me_dob']),
                'me_deceased' => explode('~',$records[0]['me_deceased']),
                'me_dod' => explode('~',$records[0]['me_dod']),
                'me_CMS_date' => explode('~',$records[0]['me_CMS_date']),
                'me_industry_date' => explode('~',$records[0]['me_industry_date']),
                'me_alleged_cause' => explode('~',$records[0]['me_alleged_cause']),
                'me_diagnosis_code' => explode('~',$records[0]['me_diagnosis_code']),
                'me_code2' => explode('~',$records[0]['me_code2']),
                'me_code3' => explode('~',$records[0]['me_code3']),
                'me_code4' => explode('~',$records[0]['me_code4']),
                'me_code5' => explode('~',$records[0]['me_code5']),
                'me_code6' => explode('~',$records[0]['me_code6']),
                'me_illness_desc' => explode('~',$records[0]['me_illness_desc']),
                'me_claimant_rpt' => explode('~',$records[0]['me_claimant_rpt']),
                'me_claimant_rpt_lname' => explode('~',$records[0]['me_claimant_rpt_lname']),
                'me_claimant_rpt_fname' => explode('~',$records[0]['me_claimant_rpt_fname']),
                'me_claimant_rpt_finame' => explode('~',$records[0]['me_claimant_rpt_finame']),
                'me_tin_ssn' => explode('~',$records[0]['me_tin_ssn']),
                'me_rpt_email' => explode('~',$records[0]['me_rpt_email']),
                'me_city' => explode('~',$records[0]['me_city']),
                'me_state' => explode('~',$records[0]['me_state']),
                'me_zip' => explode('~',$records[0]['me_zip']),
                'me_phone' => explode('~',$records[0]['me_phone']),
                'me_ext' => explode('~',$records[0]['me_ext']),
                'me_claimant_rel' => explode('~',$records[0]['me_claimant_rel']),
                'me_tin_indi' => explode('~',$records[0]['me_tin_indi']),
                'me_claimant_lname' => explode('~',$records[0]['me_claimant_lname']),
                'me_claimant_fname' => explode('~',$records[0]['me_claimant_fname']),
                'me_claimant_minitial' => explode('~',$records[0]['me_claimant_minitial']),
                'me_claimant_EO_name' => explode('~',$records[0]['me_claimant_EO_name']),
                'me_mailing_add' => explode('~',$records[0]['me_mailing_add']),
                'me_claimant_city' => explode('~',$records[0]['me_claimant_city']),
                'me_claimant_state' => explode('~',$records[0]['me_claimant_state']),
                'me_claimant_zip' => explode('~',$records[0]['me_claimant_zip']),
                'me_claimant_phone' => explode('~',$records[0]['me_claimant_phone']),
                'me_claimant_ext' => explode('~',$records[0]['me_claimant_ext']),
                'me_settlement_date' => explode('~',$records[0]['me_settlement_date']),
                'me_settlement_amount' => explode('~',$records[0]['me_settlement_amount']),
                'me_loc_clm_no' => explode('~',$records[0]['me_loc_clm_no']),
                'me_loc_soc_no' => explode('~',$records[0]['me_loc_soc_no']),
                'me_loc_lname' => explode('~',$records[0]['me_loc_lname']),
                'me_loc_fname' => explode('~',$records[0]['me_loc_fname']),
                'me_loc_mname' => explode('~',$records[0]['me_loc_mname']),
                'me_loc_gender' => explode('~',$records[0]['me_loc_gender']),
                'me_loc_dob' => explode('~',$records[0]['me_loc_dob']),
                'me_loc_deceased' => explode('~',$records[0]['me_loc_deceased']),
                'me_loc_dod' => explode('~',$records[0]['me_loc_dod']),
                'me_loc_alleged_cause' => explode('~',$records[0]['me_loc_alleged_cause']),
                'me_loc_diagnosis_code' => explode('~',$records[0]['me_loc_diagnosis_code']),
                'me_loc_sign' => explode('~',$records[0]['me_loc_sign']),
                'me_loc_date' => explode('~',$records[0]['me_loc_date']),
                'me_loc_pname' => explode('~',$records[0]['me_loc_pname']),
                'me_case_name1' => explode('~',$records[0]['me_case_name1']),
                'me_case_no1' => explode('~',$records[0]['me_case_no1']),
                'me_def_name1' => explode('~',$records[0]['me_def_name1']),
                'me_claimant_rpt1' => explode('~',$records[0]['me_claimant_rpt1']),
                'me_claimant_rpt_lname1' => explode('~',$records[0]['me_claimant_rpt_lname1']),
                'me_claimant_rpt_fname1' => explode('~',$records[0]['me_claimant_rpt_fname1']),
                'me_claimant_rpt_finame1' => explode('~',$records[0]['me_claimant_rpt_finame1']),
                'me_tin_ssn1' => explode('~',$records[0]['me_tin_ssn1']),
                'me_rpt_email1' => explode('~',$records[0]['me_rpt_email1']),
                'me_city1' => explode('~',$records[0]['me_city1']),
                'me_state1' => explode('~',$records[0]['me_state1']),
                'me_zip1' => explode('~',$records[0]['me_zip1']),
                'me_phone1' => explode('~',$records[0]['me_phone1']),
                'me_ext1' => explode('~',$records[0]['me_ext1']),
                'me_rpt_email2' => explode('~',$records[0]['me_rpt_email2']),
                'me_city2' => explode('~',$records[0]['me_city2']),
                'me_state2' => explode('~',$records[0]['me_state2']),
                'me_zip2' => explode('~',$records[0]['me_zip2']),
                'me_phone2' => explode('~',$records[0]['me_phone2']),
                'me_ext2' => explode('~',$records[0]['me_ext2']),
                'me_claimant_injured_party' => explode('~',$records[0]['me_claimant_injured_party']),
                'me_tin_ssn2' => explode('~',$records[0]['me_tin_ssn2']),
                'me_claimant_lname2' => explode('~',$records[0]['me_claimant_lname2']),
                'me_claimant_fname2' => explode('~',$records[0]['me_claimant_fname2']),
                'me_claimant_middle' => explode('~',$records[0]['me_claimant_middle']),
                'claimant_orgname' => explode('~',$records[0]['claimant_orgname']),
                'claimant_mail2' => explode('~',$records[0]['claimant_mail2']),
                'me_city3' => explode('~',$records[0]['me_city3']),
                'me_state3' => explode('~',$records[0]['me_state3']),
                'me_zip3' => explode('~',$records[0]['me_zip3']),
                'me_phone3' => explode('~',$records[0]['me_phone3']),
                'me_ext3' => explode('~',$records[0]['me_ext3']),
                'me_claimant_rpt2' => explode('~',$records[0]['me_claimant_rpt2']),
                'me_claimant_rpt_lname3' => explode('~',$records[0]['me_claimant_rpt_lname3']),
                'me_claimant_rpt_fname3' => explode('~',$records[0]['me_claimant_rpt_fname3']),
                'me_claimant_rpt_finame3' => explode('~',$records[0]['me_claimant_rpt_finame3']),
                'me_tin_ssn3' => explode('~',$records[0]['me_tin_ssn3']),
                'me_rpt_email3' => explode('~',$records[0]['me_rpt_email3']),
                'me_city4' => explode('~',$records[0]['me_city4']),
                'me_state4' => explode('~',$records[0]['me_state4']),
                'me_zip4' => explode('~',$records[0]['me_zip4']),
                'me_phone4' => explode('~',$records[0]['me_phone4']),
                'me_ext4' => explode('~',$records[0]['me_ext4']),
                'me_diagnosis_code7' => explode('~',$records[0]['me_diagnosis_code7']),
                'me_diagnosis_code8' => explode('~',$records[0]['me_diagnosis_code8']),
                'me_diagnosis_code9' => explode('~',$records[0]['me_diagnosis_code9']),
                'me_diagnosis_code10' => explode('~',$records[0]['me_diagnosis_code10']),
                'me_diagnosis_code11' => explode('~',$records[0]['me_diagnosis_code11']),
                'me_diagnosis_code12' => explode('~',$records[0]['me_diagnosis_code12']),
                'me_diagnosis_code13' => explode('~',$records[0]['me_diagnosis_code13']),
                'me_diagnosis_code14' => explode('~',$records[0]['me_diagnosis_code14']),
                'me_diagnosis_code15' => explode('~',$records[0]['me_diagnosis_code15']),
                'me_diagnosis_code16' => explode('~',$records[0]['me_diagnosis_code16']),
                'me_diagnosis_code17' => explode('~',$records[0]['me_diagnosis_code17']),
                'me_diagnosis_code18' => explode('~',$records[0]['me_diagnosis_code18']),
                'me_diagnosis_code19' => explode('~',$records[0]['me_diagnosis_code19'])
            );
}else{
  $data = array(
                'claim_no' => '',
                'claim_id' => '',
                'rrts' => '',
                'me_case_name' => '',
                'me_case_no' => '',
                'me_state_venue' => '',
                'me_def_name' => '',
                'me_qualifiedA' => '',
                'me_qualifiedB' => '',
                'me_qualifiedC' => '',
                'me_qualifiedD' => '',
                'me_clm_no' => '',
                'me_soc_no' => '',
                'me_inj_lname' => '',
                'me_inj_fname' => '',
                'me_inj_mname' => '',
                'me_gender' => '',
                'me_dob' => '',
                'me_deceased' => '',
                'me_dod' => '',
                'me_CMS_date' => '',
                'me_industry_date' => '',
                'me_alleged_cause' => '',
                'me_diagnosis_code' => '',
                'me_code2' => '',
                'me_code3' => '',
                'me_code4' => '',
                'me_code5' => '',
                'me_code6' => '',
                'me_illness_desc' => '',
                'me_claimant_rpt' => '',
                'me_claimant_rpt_lname' => '',
                'me_claimant_rpt_fname' => '',
                'me_claimant_rpt_finame' => '',
                'me_tin_ssn' => '',
                'me_rpt_email' => '',
                'me_city' => '',
                'me_state' => '',
                'me_zip' => '',
                'me_phone' => '',
                'me_ext' => '',
                'me_claimant_rel' => '',
                'me_tin_indi' => '',
                'me_claimant_lname' => '',
                'me_claimant_fname' => '',
                'me_claimant_minitial' => '',
                'me_claimant_EO_name' => '',
                'me_mailing_add' => '',
                'me_claimant_city' => '',
                'me_claimant_state' => '',
                'me_claimant_zip' => '',
                'me_claimant_phone' => '',
                'me_claimant_ext' => '',
                'me_settlement_date' => '',
                'me_settlement_amount' => '',
                'me_loc_clm_no' => '',
                'me_loc_soc_no' => '',
                'me_loc_lname' => '',
                'me_loc_fname' => '',
                'me_loc_mname' => '',
                'me_loc_gender' => '',
                'me_loc_dob' => '',
                'me_loc_deceased' => '',
                'me_loc_dod' => '',
                'me_loc_alleged_cause' => '',
                'me_loc_diagnosis_code' => '',
                'me_loc_sign' => '',
                'me_loc_date' => '',
                'me_loc_pname' => '',
                'me_case_name1' => '',
                'me_case_no1' => '',
                'me_def_name1' => '',
                'me_claimant_rpt1' => '',
                'me_claimant_rpt_lname1' => '',
                'me_claimant_rpt_fname1' => '',
                'me_claimant_rpt_finame1' => '',
                'me_tin_ssn1' => '',
                'me_rpt_email1' => '',
                'me_city1' => '',
                'me_state1' => '',
                'me_zip1' => '',
                'me_phone1' => '',
                'me_ext1' => '',
                'me_rpt_email2' => '',
                'me_city2' => '',
                'me_state2' => '',
                'me_zip2' => '',
                'me_phone2' => '',
                'me_ext2' => '',
                'me_claimant_injured_party' => '',
                'me_tin_ssn2' => '',
                'me_claimant_lname2' => '',
                'me_claimant_fname2' => '',
                'me_claimant_middle' => '',
                'claimant_orgname' => '',
                'claimant_mail2' => '',
                'me_city3' => '',
                'me_state3' => '',
                'me_zip3' => '',
                'me_phone3' => '',
                'me_ext3' => '',
                'me_claimant_rpt2' => '',
                'me_claimant_rpt_lname3' => '',
                'me_claimant_rpt_fname3' => '',
                'me_claimant_rpt_finame3' => '',
                'me_tin_ssn3' => '',
                'me_rpt_email3' => '',
                'me_city4' => '',
                'me_state4' => '',
                'me_zip4' => '',
                'me_phone4' => '',
                'me_ext4' => '',
                'me_diagnosis_code7' => '',
                'me_diagnosis_code8' => '',
                'me_diagnosis_code9' => '',
                'me_diagnosis_code10' => '',
                'me_diagnosis_code11' => '',
                'me_diagnosis_code12' => '',
                'me_diagnosis_code13' => '',
                'me_diagnosis_code14' => '',
                'me_diagnosis_code15' => '',
                'me_diagnosis_code16' => '',
                'me_diagnosis_code17' => '',
                'me_diagnosis_code18' => '',
                'me_diagnosis_code19' => ''
            );
}
$formno = 1;
if(isset($_POST['no_of_claimants']))
{
    $formno = $_POST['no_of_claimants'];
}else if(isset($_POST['offset']))
{
    $formno = $_POST['offset']+1;
}
?>

<div class='form-group'> 
  <div class='col-sm-12'> 
    <div class="widget-header" align="center">
      <h4 class="widget-title">Medicare Confidential Reporting Information* [FORM B]</h4>
      <p class="ME_small">Pursuant to Section 111 of the Medicare, Medicaid and SCHIP Extension Action of 2007 (Rev 04-13)</p>
    </div>
  </div>
</div>
<div class='form-group'> 
  <div class='col-sm-12'> 
    <div class='col-sm-4'> 
      <label for='me_case_name' class='col-sm-4  no-padding-left'>Case Name:</label>
      <div class='col-sm-8'> 
        <input type='text' id='me_case_name' class='col-xs-10 col-sm-12' name='me_case_name[]' value="<?php print $data['me_case_name'][$offset];?>"> 
      </div>
    </div>
    <div class=' col-sm-4'> 
      <label for='me_case_no' class='col-sm-4 no-padding-left'>Case Number:</label>
      <div class='col-sm-8'> 
        <input type='text' id='me_case_no' class='col-xs-10 col-sm-12' name='me_case_no[]' value="<?php print $data['me_case_no'][$offset];?>"> 
      </div>
    </div>
    <div class=' col-sm-4'> 
      <label for='me_state_venue' class='col-sm-4 no-padding-left'>State of Venue:</label>
      <div class='col-sm-8'> 
        <input type='text' id='me_state_venue' class='col-xs-10 col-sm-12 ' name='me_state_venue[]'  value="<?php print $data['me_state_venue'][$offset];?>"> 
      </div>
    </div>
  </div>
</div>
<div class='form-group'> 
  <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_def_name' class='col-sm-2  no-padding-left'>Defendant Name:</label>
          <div class='col-sm-5'> 
            <input type='text' id='me_def_name' class='col-xs-10 col-sm-12' name='me_def_name[]' value="<?php print $data['me_def_name'][$offset];?>"> 
          </div>
      </div>
  </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'>
        <div class='col-sm-12'>
            <b>Is the injured party presently or has he/she ever qualified for or been enrolled in Medicare </b>
        </div>
    </div>
    <div class='col-sm-12' align="left">
        <div class=' col-sm-3'> 
            <label for="me_qualifiedA"><b>Part A</b></label>
        </div>
        <div class=' col-sm-3'> 
            <label for="me_qualifiedB"><b>Part B</b></label>
        </div>
        <div class=' col-sm-3'> 
            <label for="me_qualifiedC"><b>Part C</b></label>
        </div>
        <div class=' col-sm-3'> 
            <label for="me_qualifiedD"><b>Part D</b></label>
        </div>
    </div>
    <div class='col-sm-12' align="left"> 
        <div class='col-sm-3'> 
            <label class="block pull-left">
              <input type='radio' id='me_qualifiedA' class='ace input-sm' name='me_qualifiedA<?php echo $formno;?>' value="Yes" <?php if($data['me_qualifiedA'][$offset]=="Yes"){ echo "checked='checked'"; } ?> > 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              Yes
            </label>
            <label class="block pull-left">
              <input type='radio' id='me_qualifiedA' class='ace input-sm' name='me_qualifiedA<?php echo $formno;?>' value="No" <?php if($data['me_qualifiedA'][$offset]=="No"){ echo "checked='checked'"; } ?> > 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              No
            </label>
        </div>
        <div class=' col-sm-3'> 
            <label class="block pull-left">
              <input type='radio' id='me_qualifiedB' class='ace input-sm' name='me_qualifiedB<?php echo $formno;?>' value="Yes" <?php if($data['me_qualifiedB'][$offset]=="Yes"){ echo "checked='checked'"; } ?> > 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              Yes
            </label>
            <label class="block pull-left">
              <input type='radio' id='me_qualifiedB' class='ace input-sm' name='me_qualifiedB<?php echo $formno;?>' value="No" <?php if($data['me_qualifiedB'][$offset]=="No"){ echo "checked='checked'"; } ?> > 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              No
            </label> 
        </div>
        <div class=' col-sm-3'>  
            <label class="block pull-left">
              <input type='radio' id='me_qualifiedC' class='ace input-sm' name='me_qualifiedC<?php echo $formno;?>' value="Yes" <?php if($data['me_qualifiedC'][$offset]=="Yes"){ echo "checked='checked'"; } ?> > 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              Yes
            </label>
            <label class="block pull-left">
              <input type='radio' id='me_qualifiedC' class='ace input-sm' name='me_qualifiedC<?php echo $formno;?>' value="No" <?php if($data['me_qualifiedC'][$offset]=="No"){ echo "checked='checked'"; } ?> > 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              No
            </label> 
        </div>
        <div class=' col-sm-3'>  
            <label class="block pull-left">
              <input type='radio' id='me_qualifiedD' class='ace input-sm' name='me_qualifiedD<?php echo $formno;?>' value="Yes" <?php if($data['me_qualifiedD'][$offset]=="Yes"){ echo "checked='checked'"; } ?> > 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              Yes
            </label>
            <label class="block pull-left">
              <input type='radio' id='me_qualifiedD' class='ace input-sm' name='me_qualifiedD<?php echo $formno;?>' value="No" <?php if($data['me_qualifiedD'][$offset]=="No"){ echo "checked='checked'"; } ?> > 
              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
              No
            </label> 
        </div>
    </div>
</div>
<div class='form-group'> 
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>Section A</b></label>
          <div class='col-sm-9'> 
            <b>ALLEGED INJURED PARTY INFORMATION <i>(If living, provide address in Section G)</i></b> 
          </div>
      </div>
  </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_clm_no' class='col-sm-3  no-padding-left'>4. Medicare Claim Number: <br/>
          <p class="redText">(also known as HICN)</p></label>
          <div class='col-sm-5'> 
            <input type='text' id='me_clm_no' class='col-xs-10 col-sm-12' name='me_clm_no[]' value="<?php print $data['me_clm_no'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-5'> 
          <label for='me_soc_no' class='col-sm-6  no-padding-left'>5. Social Security Number: <br/>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_soc_no' class='col-xs-10 col-sm-12' name='me_soc_no[]' value="<?php print $data['me_soc_no'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-7'> 
          <label for='me_inj_lname' class='col-sm-6  no-padding-left'>6. Injured Party Last Name: <br/>
            <p class="redText">(Please print name as it appears on Social Security card.)</p>
          </label>
          <div class='col-sm-5'> 
            <input type='text' id='me_inj_lname' class='col-xs-10 col-sm-12' name='me_inj_lname[]' value="<?php print $data['me_inj_lname'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='me_inj_fname' class='col-sm-6  no-padding-left'>7. Injured Party First Name: <br/>
            <p class="redText"> (Please print name exactly as it appears on Social Security card.)</p>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_inj_fname' class='col-xs-10 col-sm-12' name='me_inj_fname[]' value="<?php print $data['me_inj_fname'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_inj_mname' class='col-sm-6  no-padding-left'>8. Injured Party Middle Name: <br/>
            <p class="redText">(Please print name exactly as it appears on Social Security card.)</p>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_inj_mname' class='col-xs-10 col-sm-12' name='me_inj_mname[]' value="<?php print $data['me_inj_mname'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class="form-group">
    <div align="left" class="col-sm-12"> 
        <div class="col-sm-2"> 
            
            <label for="me_gender">
            9.Gender:
            </label><br>
            <label class="block pull-left">

              <input type="radio" value="Male" name="me_gender<?php echo $formno;?>" <?php if($data['me_gender'][$offset]=="Male"){ echo "checked='checked'"; } ?> class="ace input-sm" id="me_gender"> 
              <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
              Male
            </label>
            <label class="block pull-left">
              <input type="radio" value="Female" name="me_gender<?php echo $formno;?>" class="ace input-sm" id="me_gender" <?php if($data['me_gender'][$offset]=="Female"){ echo "checked='checked'"; } ?>> 
              <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
              Female
            </label>
        </div>
        <div class=" col-sm-4"> 
            <label class="col-sm-5  no-padding-left" for="me_dob">10. Date Of Birth</label>
            <div class="col-sm-7"> 
                <input type="text" name="me_dob[]" class="col-xs-10 col-sm-12 hasDatepicker datepicker" id="me_dob" value="<?php print $data['me_dob'][$offset];?>"> 
            </div>
        </div>
        <div class=" col-sm-2">  
            <label for="me_deceased">
                Deceased?
            </label><br>
            <label class="block pull-left">

              <input type="radio" value="Yes" name="me_deceased<?php echo $formno;?>" class="ace input-sm" id="me_deceased" <?php if($data['me_deceased'][$offset]=="Yes"){ echo "checked='checked'"; } ?>> 
              <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
              Yes
            </label>
            <label class="block pull-left">
              <input type="radio" value="No" name="me_deceased<?php echo $formno;?>" class="ace input-sm" id="me_deceased" <?php if($data['me_deceased'][$offset]=="No"){ echo "checked='checked'"; } ?>> 
              <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
              No
            </label>
        </div>
        <div class=" col-sm-4">  
            <label class="col-sm-5  no-padding-left" for="me_dod">Date Of Death</label>
            <div class="col-sm-7"> 
                <input type="text" name="me_dod[]" class="col-xs-10 col-sm-12 hasDatepicker datepicker" id="me_dod" value="<?php print $data['me_dod'][$offset];?>"> 
            </div>
        </div>
    </div>
</div>
<div class='form-group'> 
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>Section B</b></label>
          <div class='col-sm-9'> 
            <b>ALLEGED INCIDENT INFORMATION </b> 
          </div>
      </div>
  </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_CMS_date' class='col-sm-9  no-padding-left'>12. CMS Date of Incident:   <br/>
          <p class="ME_small">Please state the date of the accident or date of <span class="redText">first exposure</span>, ingestion, or implantation with respect to settling defendant’s product and/or premises:</p></label>
          <div class='col-sm-3'> 
            <input type="text" name="me_CMS_date[]" class="col-xs-10 col-sm-12 hasDatepicker datepicker" id="me_CMS_date" value="<?php print $data['me_CMS_date'][$offset];?>">
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_industry_date' class='col-sm-9  no-padding-left'>13. Industry Date of Incident:<br/>
          <p class="ME_small">Please state the date of accident or date of <span class="redText">last exposure</span>, ingestion, or implantation with respect to settling defendant’s product and/or premises</p></label>
          <div class='col-sm-3'> 
            <input type="text" name="me_industry_date[]" class="col-xs-10 col-sm-12 hasDatepicker datepicker" id="me_industry_date" value="<?php print $data['me_industry_date'][$offset];?>">
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'>  
          <label for='me_alleged_cause' class='col-sm-9  no-padding-left'>15. Alleged Cause of Injury, <i>Illness or Incident <span class="redText">(“e” codes only – no “v” codes)</span> optional field:</i> </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_alleged_cause[]" class="col-xs-10 col-sm-12 " id="me_alleged_cause" value="<?php print $data['me_alleged_cause'][$offset];?>">
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_diagnosis_code' class='col-sm-9  no-padding-left'>19.  ICD-9/10 Diagnosis Code 1 (no decimal):
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code" value="<?php print $data['me_diagnosis_code'][$offset];?>">
          </div>
      </div>
      <br/>
      <div class="col-sm-12">  
            <p class="ME_small">Provide valid ICD-9-CM Codes for any injury or illness you allege arose from the allegations made against settling defendant.</p>
      </div>
    </div>
</div>
<div class="form-group">
    <div align="left" class="col-sm-12"> 
        <div style="width:38%;" class="col-sm-4 no-padding-left no-padding-right"> 
            <div class="col-sm-6 no-padding-left no-padding-right"> 
                <label class="col-sm-7 no-padding-right no-padding-left" for="me_code2">21. ICD-9/10 <br>Diagnosis Code 2:  </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" name="me_code2[]" class="col-xs-10 col-sm-12  no-padding-right no-padding-left" id="me_code2" value="<?php print $data['me_code2'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right"> 
                <label class="col-sm-7 no-padding-right no-padding-left" for="me_code3">23. ICD-9/10<br> Diagnostic Code 3:  </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" name="me_code3[]" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" id="me_code3" value="<?php print $data['me_code3'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div style="width:37%;" class=" col-sm-4 no-padding-left no-padding-right">
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label class="col-sm-7 no-padding-right no-padding-left" for="me_code4">25. ICD-9/10<br> Diagnosis Code 4:  </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" name="me_code4[]" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" id="me_code4" value="<?php print $data['me_code4'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label class="col-sm-7 no-padding-right no-padding-left" for="me_code5">27. ICD-9/10<br> Diagnosis Code 5:  </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" name="me_code5[]" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" id="me_code5" value="<?php print $data['me_code5'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div class=" col-sm-4 no-padding-left no-padding-right" style="width:19%;">
            <div class=" col-sm-12 no-padding-left no-padding-right">  
                <label class="col-sm-7  no-padding-left no-padding-right" for="me_code6">25. ICD-9/10 <br>Diagnosis Code 6:  </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" name="me_code6[]" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" id="me_code6" value="<?php print $data['me_code6'][$offset];?>"> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_illness_desc' class='col-sm-6  no-padding-left'>Description of Illness/Injury (Free Form Text Description):
          </label>
          <div class='col-sm-6'> 
            <input type="text" name="me_illness_desc[]" class="col-xs-10 col-sm-12 " id="me_illness_desc" value="<?php print $data['me_illness_desc'][$offset];?>">
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>Section C</b></label>
          <div class='col-sm-9'> 
            <b>ALLEGED INJURED PARTY’S ATTORNEY or OTHER REPRESENTATIVE INFORMATION </b> 
          </div>
      </div>
  </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_claimant_rpt' class='col-sm-12  no-padding-left'>84. Claimant Representative Type (please check one):     
          </label>
          <div class='col-sm-12'> 
                <label class="block pull-left">
                  <input type="radio" value="A" name="me_claimant_rpt<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_rpt'][$offset]=="A"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  A=Attorney
                </label>
                <label class="block pull-left">
                  <input type="radio" value="P" name="me_claimant_rpt<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_rpt'][$offset]=="P"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  P=Power of Attorney
                </label>
                <label class="block pull-left">
                  <input type="radio" value="G" name="me_claimant_rpt<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_rpt'][$offset]=="G"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  G=Guardian/Conservator
                </label>
                <label class="block pull-left">
                  <input type="radio" value="O" name="me_claimant_rpt<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_rpt'][$offset]=="O"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  O=Other
                </label>
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-4'> 
          <label for='me_claimant_rpt_lname' class='col-sm-6  no-padding-left'>85.  Claimant  Representative Last Name 
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_rpt_lname' class='col-xs-10 col-sm-12' name='me_claimant_rpt_lname[]' value="<?php print $data['me_claimant_rpt_lname'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-4'> 
          <label for='me_claimant_rpt_fname' class='col-sm-6  no-padding-left'>86.  Claimant Representative First Name
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_rpt_fname' class='col-xs-10 col-sm-12' name='me_claimant_rpt_fname[]' value="<?php print $data['me_claimant_rpt_fname'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-4'> 
          <label for='me_claimant_rpt_finame' class='col-sm-6  no-padding-left'>87. Claimant  Representative Firm Name: 
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_rpt_finame' class='col-xs-10 col-sm-12' name='me_claimant_rpt_finame[]' value="<?php print $data['me_claimant_rpt_finame'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='me_tin_ssn' class='col-sm-6  no-padding-left'>88. TIN/EIN, if Firm Entity; SSN. if Individual:  
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_tin_ssn' class='col-xs-10 col-sm-12' name='me_tin_ssn[]' value="<?php print $data['me_tin_ssn'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_rpt_email' class='col-sm-6  no-padding-left'>89-90. Representative  Mailing Address:  
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_rpt_email' class='col-xs-10 col-sm-12' name='me_rpt_email[]' value="<?php print $data['me_rpt_email'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class="form-group">
    <div align="left" class="col-sm-12"> 
        <div class="col-sm-4 no-padding-left no-padding-right" style="width:38%;"> 
            <div class="col-sm-6 no-padding-right"> 
                <label for="me_city" class="col-sm-4 no-padding-right no-padding-left">91. City: </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_city" class="col-xs-10 col-sm-12  no-padding-right no-padding-left" name="me_city[]" value="<?php print $data['me_city'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right"> 
                <label for="me_state" class="col-sm-4 no-padding-right no-padding-left">92.  State:  </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_state" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_state[]" value="<?php print $data['me_state'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div class=" col-sm-4 no-padding-left no-padding-right" style="width:42%;">
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_zip" class="col-sm-7 no-padding-right no-padding-left">93-94.  Zip Code +4:    </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" id="me_zip" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_zip[]" value="<?php print $data['me_zip'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_phone" class="col-sm-5 no-padding-right no-padding-left">95.  Phone:  </label>
                <div class="col-sm-7 no-padding-left"> 
                    <input type="text" id="me_phone" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_phone[]" value="<?php print $data['me_phone'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div style="width:19%;" class=" col-sm-4 no-padding-left no-padding-right">
            <div class=" col-sm-12 no-padding-left no-padding-right">  
                <label for="me_ext" class="col-sm-6  no-padding-left no-padding-right">96.  Ext. (if any):  </label>
                <div class="col-sm-6 no-padding-left"> 
                    <input type="text" id="me_ext" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_ext[]" value="<?php print $data['me_ext'][$offset];?>"> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class='form-group marginBZ'> 
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>OPTIONAL</b></label>
          <div class='col-sm-9'> 
            <b>CLAIMANT INFORMATION <i>(Use only if Alleged Injured Party in Section A is deceased)</i></b> 
          </div>
      </div>
  </div>
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'>Section D</label>
          <div class='col-sm-10'> 
            <b>If Section D Claimant has a representative other than Section C Representative, complete Section F</b> 
          </div>
      </div>
  </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_claimant_rel' class='col-sm-12  no-padding-left'><i>104. Claimant Relationship to Alleged Injured Party (please check one):</i>     
          </label>
          <div class='col-sm-12'> 
                <label class="block pull-left">
                  <input type="radio" value="E" name="me_claimant_rel<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rel" <?php if($data['me_claimant_rel'][$offset]=="E"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  E=Estate (Individual)
                </label>
                <label class="block pull-left">
                  <input type="radio" value="X" name="me_claimant_rel<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rel" <?php if($data['me_claimant_rel'][$offset]=="X"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  X=Estate (Entity)
                </label>
                <label class="block pull-left">
                  <input type="radio" value="F" name="me_claimant_rel<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rel" <?php if($data['me_claimant_rel'][$offset]=="F"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  F=Family (Individual)
                </label>
                <label class="block pull-left">
                  <input type="radio" value="FE" name="me_claimant_rel<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rel" <?php if($data['me_claimant_rel'][$offset]=="FE"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  F=Family (Entity)
                </label>
                <label class="block pull-left">
                  <input type="radio" value="O" name="me_claimant_rel<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rel" <?php if($data['me_claimant_rel'][$offset]=="O"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  O=Other (Individual)
                </label>
                <label class="block pull-left">
                  <input type="radio" value="Z" name="me_claimant_rel<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rel" <?php if($data['me_claimant_rel'][$offset]=="Z"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  Z=Other (Entity)
                </label>
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='me_tin_indi' class='col-sm-6  no-padding-left'><i>105.  TIN/EIN (Social Security, if individuals):   </i>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_tin_indi' class='col-xs-10 col-sm-12' name='me_tin_indi[]' value="<?php print $data['me_tin_indi'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_claimant_lname' class='col-sm-6  no-padding-left'><i>106.  Claimant Last Name:  </i>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_lname' class='col-xs-10 col-sm-12' name='me_claimant_lname[]' value="<?php print $data['me_claimant_lname'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='me_claimant_fname' class='col-sm-6  no-padding-left'><i>107.  Claimant First Name:     </i>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_fname' class='col-xs-10 col-sm-12' name='me_claimant_fname[]' value="<?php print $data['me_claimant_fname'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_claimant_minitial' class='col-sm-6  no-padding-left'><i>108.  Claimant Middle Initial:    </i>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_minitial' class='col-xs-10 col-sm-12' name='me_claimant_minitial[]' value="<?php print $data['me_claimant_minitial'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_claimant_EO_name' class='col-sm-6  no-padding-left'><i>109.  Claimant Entity/Organization Name:   </i>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_EO_name' class='col-xs-10 col-sm-12' name='me_claimant_EO_name[]' value="<?php print $data['me_claimant_EO_name'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_mailing_add' class='col-sm-4  no-padding-left'><i>Mailing Address:   </i>
          </label>
          <div class='col-sm-8'> 
            <input type='text' id='me_mailing_add' class='col-xs-10 col-sm-12' name='me_mailing_add[]' value="<?php print $data['me_mailing_add'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class="form-group optFeild marginBZ" >
    <div align="left" class="col-sm-12"> 
        <div class="col-sm-4 no-padding-left no-padding-right" style="width:38%;"> 
            <div class="col-sm-6 no-padding-right"> 
                <label for="me_claimant_city" class="col-sm-4 no-padding-right no-padding-left"><i>112. City:</i> </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_claimant_city" class="col-xs-10 col-sm-12  no-padding-right no-padding-left" name="me_claimant_city[]" value="<?php print $data['me_claimant_city'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right"> 
                <label for="me_claimant_state" class="col-sm-4 no-padding-right no-padding-left"><i>113.  State: </i> </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_claimant_state" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_claimant_state[]" value="<?php print $data['me_claimant_state'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div class=" col-sm-4 no-padding-left no-padding-right" style="width:42%;">
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_claimant_zip" class="col-sm-7 no-padding-right no-padding-left"><i>114.  Zip Code +4:  </i>  </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" id="me_claimant_zip" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_claimant_zip[]" value="<?php print $data['me_claimant_zip'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_claimant_phone" class="col-sm-5 no-padding-right no-padding-left"><i>116.  Phone: </i> </label>
                <div class="col-sm-7 no-padding-left"> 
                    <input type="text" id="me_claimant_phone" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_claimant_phone[]" value="<?php print $data['me_claimant_phone'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div style="width:19%;" class=" col-sm-4 no-padding-left no-padding-right">
            <div class=" col-sm-12 no-padding-left no-padding-right">  
                <label for="me_claimant_ext" class="col-sm-6  no-padding-left no-padding-right"><i>117.  Ext. (if any): </i> </label>
                <div class="col-sm-6 no-padding-left"> 
                    <input type="text" id="me_claimant_ext" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_claimant_ext[]" value="<?php print $data['me_claimant_ext'][$offset];?>"> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12 section_back'> 
        <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>Section E</b></label>
          <div class='col-sm-9'> 
            <b>SETTLEMENT INFORMATION</b> 
          </div>
        </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='me_settlement_date' class='col-sm-6  no-padding-left'>100.  Date of Settlement:      
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_settlement_date' class='col-xs-10 col-sm-12' name='me_settlement_date[]' value="<?php print $data['me_settlement_date'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_settlement_amount' class='col-sm-6  no-padding-left'>101.  Amount of Settlement:      
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_settlement_amount' class='col-xs-10 col-sm-12' name='me_settlement_amount[]' value="<?php print $data['me_settlement_amount'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>Section A-LOC</b></label>
          <div class='col-sm-9'> 
            <b>LOSS OF CONSORTIUM PLAINTIFF INFORMATION <br/>THIS SECTION MUST BE COMPLETED ONLY IF THE NON-EXPOSED PLAINTIFF(S) ALLEGES LOSS OF CONSORTIUM,  IS MEDICARE ELIGIBLE AND EFFECTIVELY RELEASES MEDICAL CARE/TREATMENT PROVIDE ESTATE INFORMATION IN SECTION D
            </b> 
          </div>
      </div>
  </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_loc_clm_no' class='col-sm-4  no-padding-left'>4-LOC.  Medicare Claim Number: <br/>
          <p class="redText">(also known as HICN)</p></label>
          <div class='col-sm-5'> 
            <input type='text' id='me_loc_clm_no' class='col-xs-10 col-sm-12' name='me_loc_clm_no[]' value="<?php print $data['me_loc_clm_no'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-5'> 
          <label for='me_loc_soc_no' class='col-sm-6  no-padding-left'>5-LOC.  Social Security Number: <br/>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_loc_soc_no' class='col-xs-10 col-sm-12' name='me_loc_soc_no[]' value="<?php print $data['me_loc_soc_no'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-7'> 
          <label for='me_loc_lname' class='col-sm-6  no-padding-left'>6-LOC.  Last Name: <br/>
            <p class="redText">  (Please print name exactly as it appears on Social Security card.) </p>
          </label>
          <div class='col-sm-5'> 
            <input type='text' id='me_loc_lname' class='col-xs-10 col-sm-12' name='me_loc_lname[]' value="<?php print $data['me_loc_lname'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='me_loc_fname' class='col-sm-6  no-padding-left'>7-LOC.  First Name: <br/>
            <p class="redText">  (Please print name exactly as it appears on Social Security card.)  </p>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_loc_fname' class='col-xs-10 col-sm-12' name='me_loc_fname[]' value="<?php print $data['me_loc_fname'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_loc_mname' class='col-sm-6  no-padding-left'>8-LOC.  Middle Name: <br/>
            <p class="redText">(Please print name/initial exactly as it appears on Social Security card.)  </p>
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_loc_mname' class='col-xs-10 col-sm-12' name='me_loc_mname[]' value="<?php print $data['me_loc_mname'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class="form-group">
    <div align="left" class="col-sm-12"> 
        <div class="col-sm-2"> 
            
            <label for="me_loc_gender">
            9-LOC  Gender:
            </label><br>
            <label class="block pull-left">

              <input type="radio" value="Male" name="me_loc_gender<?php echo $formno;?>" class="ace input-sm" id="me_loc_gender" <?php if($data['me_loc_gender'][$offset]=="Male"){ echo "checked='checked'"; } ?>> 
              <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
              Male
            </label>
            <label class="block pull-left">
              <input type="radio" value="Female" name="me_loc_gender<?php echo $formno;?>" class="ace input-sm" id="me_loc_gender" <?php if($data['me_loc_gender'][$offset]=="Female"){ echo "checked='checked'"; } ?>> 
              <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
              Female
            </label>
        </div>
        <div class=" col-sm-4"> 
            <label class="col-sm-5  no-padding-left" for="me_loc_dob">10-LOC. Date of Birth:</label>
            <div class="col-sm-7"> 
                <input type="text" name="me_loc_dob[]" class="col-xs-10 col-sm-12 hasDatepicker datepicker" id="me_loc_dob" value="<?php print $data['me_loc_dob'][$offset];?>"> 
            </div>
        </div>
        <div class=" col-sm-2">  
            <label for="me_loc_deceased">
                Deceased?
            </label><br>
            <label class="block pull-left">

              <input type="radio" value="Yes" name="me_loc_deceased<?php echo $formno;?>" class="ace input-sm" id="me_loc_deceased" <?php if($data['me_loc_deceased'][$offset]=="Yes"){ echo "checked='checked'"; } ?>> 
              <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
              Yes
            </label>
            <label class="block pull-left">
              <input type="radio" value="No" name="me_loc_deceased<?php echo $formno;?>" class="ace input-sm" id="me_loc_deceased" <?php if($data['me_loc_deceased'][$offset]=="No"){ echo "checked='checked'"; } ?>> 
              <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
              No
            </label>
        </div>
        <div class=" col-sm-4">  
            <label class="col-sm-5  no-padding-left" for="me_loc_dod">Date Of Death</label>
            <div class="col-sm-7"> 
                <input type="text" name="me_loc_dod[]" class="col-xs-10 col-sm-12 hasDatepicker datepicker" id="me_loc_dod" value="<?php print $data['me_loc_dod'][$offset];?>"> 
            </div>
        </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'>  
          <label for='me_loc_alleged_cause' class='col-sm-8  no-padding-left'>15-LOC.  Alleged Cause of Injury, Illness or Incident <span class="redText">(“e” codes only – no “v” codes)</span>:
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_loc_alleged_cause[]" class="col-xs-10 col-sm-12 " id="me_loc_alleged_cause" value="<?php print $data['me_loc_alleged_cause'][$offset];?>">
          </div>
      </div>
      <br/>
      <div class="col-sm-12"> <p class="redText"> (Use “NOINJ” code if LOC claimant did not have treatment nor submit medical expense to Medicare, if NOINJ is used here, it must be used in Field 19-LOC)</p>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='me_loc_diagnosis_code' class='col-sm-4  no-padding-left'>19-LOC.  ICD-9 Diagnosis:
          </label>
          <div class='col-sm-5'> 
            <input type="text" name="me_loc_diagnosis_code[]" class="col-xs-10 col-sm-12 " id="me_loc_diagnosis_code" value="<?php print $data['me_loc_diagnosis_code'][$offset];?>">
          </div>
      </div>
      <br/>
      <div class="col-sm-12">  
            <p class="redText"> (Use “NOINJ” code if LOC claimant did not have treatment nor submit medical expense to Medicare, if NOINJ is used here, it must be used in Field 15-LOC)</p>
      </div>
    </div>
</div>
<div class='form-group'> 
    <div class='col-sm-12'> 
      <div class='col-sm-5'> 
            <input type="text" name="me_loc_sign[]" class="col-xs-10 col-sm-12 " id="me_loc_sign" value="<?php print $data['me_loc_sign'][$offset];?>">
            <label for='me_loc_sign'>Signature of Attorney representing Plaintiff/Claimant(s)</label>
      </div>
      <div class="col-sm-2" align='right'>  
            <input type="text" name="me_loc_date[]" class="col-xs-10 col-sm-12 hasDatepicker datepicker" id="me_loc_date" value="<?php print $data['me_loc_date'][$offset];?>">
            <label for='me_loc_date'  >Date</label>
      </div>
      <div class="col-sm-5" align='center'>  
            <input type="text" name="me_loc_pname[]" class="col-xs-10 col-sm-12 " id="me_loc_pname" value="<?php print $data['me_loc_pname'][$offset];?>">
            <label for='me_loc_pname' >Printed Name</label>
      </div>
      <p class="ME_small" align="center">The signature of the attorney hereto constitutes a certificate by him/her that he/she has read the information supplied in this form and that all information stated herein is well grounded in fact to the best of his/her knowledge, information and belief formed after reasonably inquiry.</p>
      <p class="redText" align="center"><b>*Numbers reflect claim input file field numbers, as set forth in Version 3.4 of the Official NGHP User Guide by CMS.</b></p>
    </div>
</div>
<div class='form-group'> 
  <div class='col-sm-12'> 
    <div class='col-sm-6'> 
      <label for='me_case_name1' class='col-sm-4  no-padding-left'>Case Name:</label>
      <div class='col-sm-8'> 
        <input type='text' id='me_case_name1' class='col-xs-10 col-sm-12' name='me_case_name1[]' value='<?php print $data['me_case_name1'][$offset];?>' > 
      </div>
    </div>
    <div class=' col-sm-6'> 
      <label for='me_case_no1' class='col-sm-4 no-padding-left'>Case Number:</label>
      <div class='col-sm-8'> 
        <input type='text' id='me_case_no1' class='col-xs-10 col-sm-12' name='me_case_no1[]' value='<?php print $data['me_case_no1'][$offset];?>' > 
      </div>
    </div>
  </div>
</div>
 <div class='form-group optFeild marginBZ'> 
  <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_def_name1' class='col-sm-2  no-padding-left'>Defendant Name:</label>
          <div class='col-sm-5'> 
            <input type='text' id='me_def_name1' class='col-xs-10 col-sm-12' name='me_def_name1[]' value='<?php print $data['me_def_name1'][$offset];?>' > 
          </div>
      </div>
  </div>
</div>
<div class="">
    <div class='form-group'> 
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>Optional Section F</b></label>
          <div class='col-sm-9'> 
            <b> CLAIMANT’S (found in Section D) ATTORNEY OR OTHER REPRESENTATIVE INFORMATION</b>
          </div>
      </div>
  </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_claimant_rpt1' class='col-sm-12  no-padding-left'>119. Claimant Representative Type (please check one):     
          </label>
          <div class='col-sm-12'> 
                <label class="block pull-left">
                  <input type="radio" value="A" name="me_claimant_rpt1<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt1" <?php if($data['me_claimant_rpt1'][$offset]=="A"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  A=Attorney
                </label>
                <label class="block pull-left">
                  <input type="radio" value="P" name="me_claimant_rpt1<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt1" <?php if($data['me_claimant_rpt1'][$offset]=="P"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  P=Power of Attorney
                </label>
                <label class="block pull-left">
                  <input type="radio" value="G" name="me_claimant_rpt1<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt1" <?php if($data['me_claimant_rpt1'][$offset]=="G"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  G=Guardian/Conservator
                </label>
                <label class="block pull-left">
                  <input type="radio" value="O" name="me_claimant_rpt1<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt1" <?php if($data['me_claimant_rpt1'][$offset]=="O"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  O=Other
                </label>
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-4'> 
          <label for='me_claimant_rpt_lname1' class='col-sm-6  no-padding-left'>120.  Claimant  Representative Last Name 
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_rpt_lname1' class='col-xs-10 col-sm-12' name='me_claimant_rpt_lname1[]' value='<?php print $data['me_claimant_rpt_lname1'][$offset];?>'> 
          </div>
      </div>
      <div class='col-sm-4'> 
          <label for='me_claimant_rpt_fname1' class='col-sm-6  no-padding-left'>121.  Claimant Representative First Name
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_rpt_fname1' class='col-xs-10 col-sm-12' name='me_claimant_rpt_fname1[]' value="<?php print $data['me_claimant_rpt_fname1'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-4'> 
          <label for='me_claimant_rpt_finame1' class='col-sm-6  no-padding-left'>122. Claimant  Representative Firm Name: 
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_rpt_finame1' class='col-xs-10 col-sm-12' name='me_claimant_rpt_finame1[]' value="<?php print $data['me_claimant_rpt_finame1'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='me_tin_ssn1' class='col-sm-6  no-padding-left'>123. TIN/EIN, if Firm Entity; SSN. if Individual:  
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_tin_ssn1' class='col-xs-10 col-sm-12' name='me_tin_ssn1[]' value="<?php print $data['me_tin_ssn1'][$offset];?>"> 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_rpt_email1' class='col-sm-6  no-padding-left'>124. Representative  Mailing Address:  
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_rpt_email1' class='col-xs-10 col-sm-12' name='me_rpt_email1[]' value="<?php print $data['me_rpt_email1'][$offset];?>"> 
          </div>
      </div>
    </div>
</div>

<div class="form-group optFeild marginBZ">
    <div align="left" class="col-sm-12"> 
        <div class="col-sm-4 no-padding-left no-padding-right" style="width:38%;"> 
            <div class="col-sm-6 no-padding-right"> 
                <label for="me_city1" class="col-sm-4 no-padding-right no-padding-left">126. City: </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_city1" class="col-xs-10 col-sm-12  no-padding-right no-padding-left" name="me_city1[]" value="<?php print $data['me_city1'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right"> 
                <label for="me_state1" class="col-sm-4 no-padding-right no-padding-left">127.  State:  </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_state1" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_state1[]" value="<?php print $data['me_state1'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div class=" col-sm-4 no-padding-left no-padding-right" style="width:42%;">
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_zip1" class="col-sm-7 no-padding-right no-padding-left">128.  Zip Code +4:    </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" id="me_zip1" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_zip1[]" value="<?php print $data['me_zip1'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_phone1" class="col-sm-5 no-padding-right no-padding-left">129.  Phone:  </label>
                <div class="col-sm-7 no-padding-left"> 
                    <input type="text" id="me_phone1" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_phone1[]" value="<?php print $data['me_phone1'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div style="width:19%;" class=" col-sm-4 no-padding-left no-padding-right">
            <div class=" col-sm-12 no-padding-left no-padding-right">  
                <label for="me_ext1" class="col-sm-6  no-padding-left no-padding-right">130.  Ext. (if any):  </label>
                <div class="col-sm-6 no-padding-left"> 
                    <input type="text" id="me_ext1" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_ext1[]" value="<?php print $data['me_ext1'][$offset];?>"> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class='form-group'> 
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>Section G</b></label>
          <div class='col-sm-9'> 
             <b>ALLEGED INJURED PARTY’S ADDRESS </b>
          </div>
      </div>
  </div>
</div>
<div class="form-group">
    <div class='col-sm-8'> 
          <label for='me_rpt_email2' class='col-sm-4 no-padding-left'> Representative  Mailing Address:  
          </label>
          <div class='col-sm-8'> 
            <input type='text' id='me_rpt_email2' class='col-xs-10 col-sm-12' name='me_rpt_email2[]' value="<?php print $data['me_rpt_email2'][$offset];?>"> 
          </div>
      </div>
</div>
<div class="form-group">
    <div align="left" class="col-sm-12"> 
        <div class="col-sm-4 no-padding-left no-padding-right" style="width:38%;"> 
            <div class="col-sm-6 no-padding-right"> 
                <label for="me_city2" class="col-sm-4 no-padding-right no-padding-left"> City: </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_city2" class="col-xs-10 col-sm-12  no-padding-right no-padding-left" name="me_city2[]" value="<?php print $data['me_city2'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right"> 
                <label for="me_state2" class="col-sm-4 no-padding-right no-padding-left"> State:  </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_state2" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_state2[]" value="<?php print $data['me_state2'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div class=" col-sm-4 no-padding-left no-padding-right" style="width:42%;">
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_zip2" class="col-sm-7 no-padding-right no-padding-left">  Zip Code +4:    </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" id="me_zip2" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_zip2[]" value="<?php print $data['me_zip2'][$offset];?>"> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_phone2" class="col-sm-5 no-padding-right no-padding-left">Phone:  </label>
                <div class="col-sm-7 no-padding-left"> 
                    <input type="text" id="me_phone2" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_phone2[]" value="<?php print $data['me_phone2'][$offset];?>"> 
                </div>
            </div>
        </div>
        <div style="width:19%;" class=" col-sm-4 no-padding-left no-padding-right">
            <div class=" col-sm-12 no-padding-left no-padding-right">  
                <label for="me_ext2" class="col-sm-6  no-padding-left no-padding-right"> Ext. (if any):  </label>
                <div class="col-sm-6 no-padding-left"> 
                    <input type="text" id="me_ext2" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_ext2[]" value="<?php print $data['me_ext2'][$offset];?>"> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class='form-group'> 
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>Optional 
Section D cont.</b></label>
          <div class='col-sm-9'> 
             <b>ADDITIONAL CLAIMANT INFORMATION (Use only if Alleged Injured Party in Section A is deceased)</b>

          </div>
      </div>
  </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_claimant_injured_party' class='col-sm-12  no-padding-left'> Claimant Relation to Alleged Injured Party (please check one):     
          </label>
          <div class='col-sm-12'> 
              <label class="block pull-left">
                  <input type="radio" value="E" name="me_claimant_injured_party<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_injured_party'][$offset]=="E"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  E=Estate(Entity)
                </label>
                 <label class="block pull-left">
                  <input type="radio" value="EI" name="me_claimant_injured_party<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_injured_party'][$offset]=="EI"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  E=Estate(Individual)
                </label>
               <label class="block pull-left">
                  <input type="radio" value="F" name="me_claimant_injured_party<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_injured_party'][$offset]=="F"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  F=Family(Entity)
                </label>
                 <label class="block pull-left">
                  <input type="radio" value="FI" name="me_claimant_injured_party<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_injured_party'][$offset]=="FI"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  F=Family(Individual)
                </label>
                <label class="block pull-left">
                  <input type="radio" value="O" name="me_claimant_injured_party<?php echo $formno;?>[]" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_injured_party'][$offset]=="O"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  O=Other(Entity)
                </label>
                 <label class="block pull-left">
                  <input type="radio" value="OI" name="me_claimant_injured_party<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt" <?php if($data['me_claimant_injured_party'][$offset]=="OI"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  O=Other(Individual)
                </label>
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
     <div class='form-group'> 
    <div class='col-sm-6'> 
          <label for='me_tin_ssn2' class='col-sm-6  no-padding-left'>TIN/EIN,(Social security if Individual):  
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_tin_ssn2' class='col-xs-10 col-sm-12' name='me_tin_ssn2[]' value='<?php print $data['me_tin_ssn2'][$offset];?>'> 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_claimant_lname2' class='col-sm-6  no-padding-left'> Claimant   Last Name 
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_lname2' class='col-xs-10 col-sm-12' name='me_claimant_lname2[]' value='<?php print $data['me_claimant_lname2'][$offset];?>'> 
          </div>
      </div>
      </div>
      <div class='form-group'> 
      <div class='col-sm-6'> 
          <label for='me_claimant_fname2' class='col-sm-6  no-padding-left'> Claimant  First Name
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_fname2' class='col-xs-10 col-sm-12' name='me_claimant_fname2[]' value='<?php print $data['me_claimant_fname2'][$offset];?>'> 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_claimant_middle' class='col-sm-6  no-padding-left'>122. Claimant  Middle Initial: 
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_middle' class='col-xs-10 col-sm-12' name='me_claimant_middle[]' value='<?php print $data['me_claimant_middle'][$offset];?>'> 
          </div>
      </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      
      <div class='col-sm-6'> 
          <label for='claimant_orgname' class='col-sm-6  no-padding-left'>Claimant Entity/Organization name:
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='claimant_orgname' class='col-xs-10 col-sm-12' name='claimant_orgname[]' value='<?php print $data['claimant_orgname'][$offset];?>' > 
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='claimant_mail2' class='col-sm-6  no-padding-left'>Mailing Address:
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='claimant_mail2' class='col-xs-10 col-sm-12' name='claimant_mail2[]' value='<?php print $data['claimant_mail2'][$offset];?>' > 
          </div>
      </div>
    </div>
</div>
<div class="form-group optFeild marginBZ">
    <div align="left" class="col-sm-12"> 
        <div class="col-sm-4 no-padding-left no-padding-right" style="width:38%;"> 
            <div class="col-sm-6 no-padding-right"> 
                <label for="me_city3" class="col-sm-4 no-padding-right no-padding-left"> City: </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_city3" class="col-xs-10 col-sm-12  no-padding-right no-padding-left" name="me_city3[]" value='<?php print $data['me_city3'][$offset];?>'> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right"> 
                <label for="me_state3" class="col-sm-4 no-padding-right no-padding-left"> State:  </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_state3" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_state3[]" value='<?php print $data['me_state3'][$offset];?>'> 
                </div>
            </div>
        </div>
        <div class=" col-sm-4 no-padding-left no-padding-right" style="width:42%;">
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_zip3" class="col-sm-7 no-padding-right no-padding-left"> Zip Code +4:    </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" id="me_zip3" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_zip3[]" value='<?php print $data['me_zip3'][$offset];?>'> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_phone3" class="col-sm-5 no-padding-right no-padding-left">Phone:  </label>
                <div class="col-sm-7 no-padding-left"> 
                    <input type="text" id="me_phone3" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_phone3[]" value='<?php print $data['me_phone3'][$offset];?>'> 
                </div>
            </div>
        </div>
        <div style="width:19%;" class=" col-sm-4 no-padding-left no-padding-right">
            <div class=" col-sm-12 no-padding-left no-padding-right">  
                <label for="me_ext3" class="col-sm-6  no-padding-left no-padding-right">Ext. (if any):  </label>
                <div class="col-sm-6 no-padding-left"> 
                    <input type="text" id="me_ext3" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_ext3[]" value='<?php print $data['me_ext3'][$offset];?>'> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-9'> 
          <label for='me_claimant_rpt2' class='col-sm-12  no-padding-left'>Claimant Representative Type (please check one):     
          </label>
          <div class='col-sm-12'> 
                <label class="block pull-left">
                  <input type="radio" value="A" name="me_claimant_rpt2<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt2" <?php if($data['me_claimant_rpt2'][$offset]=="A"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  A=Attorney
                </label>
                <label class="block pull-left">
                  <input type="radio" value="P" name="me_claimant_rpt2<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt2" <?php if($data['me_claimant_rpt2'][$offset]=="P"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  P=Power of Attorney
                </label>
                <label class="block pull-left">
                  <input type="radio" value="G" name="me_claimant_rpt2<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt2" <?php if($data['me_claimant_rpt2'][$offset]=="G"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  G=Guardian/Conservator
                </label>
                <label class="block pull-left">
                  <input type="radio" value="O" name="me_claimant_rpt2<?php echo $formno;?>" class="ace input-sm" id="me_claimant_rpt2" <?php if($data['me_claimant_rpt2'][$offset]=="O"){ echo "checked='checked'"; } ?>> 
                  <span style="margin-top:5px;" class="lbl bigger-120"> </span> 
                  O=Other
                </label>
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-4'> 
          <label for='me_claimant_rpt_lname3' class='col-sm-6  no-padding-left'> Claimant  Representative Last Name 
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_rpt_lname3' class='col-xs-10 col-sm-12' name='me_claimant_rpt_lname3[]' value='<?php print $data['me_claimant_rpt_lname3'][$offset];?>'> 
          </div>
      </div>
      <div class='col-sm-4'> 
          <label for='me_claimant_rpt_fname3' class='col-sm-6  no-padding-left'>121.  Claimant Representative First Name
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_rpt_fname3' class='col-xs-10 col-sm-12' name='me_claimant_rpt_fname3[]' value='<?php print $data['me_claimant_rpt_fname3'][$offset];?>' > 
          </div>
      </div>
      <div class='col-sm-4'> 
          <label for='me_claimant_rpt_finame3' class='col-sm-6  no-padding-left'>122. Claimant  Representative Firm Name: 
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_claimant_rpt_finame3' class='col-xs-10 col-sm-12' name='me_claimant_rpt_finame3[]' value='<?php print $data['me_claimant_rpt_finame3'][$offset];?>' > 
          </div>
      </div>
    </div>
</div>
<div class='form-group optFeild marginBZ'> 
    <div class='col-sm-12'> 
      <div class='col-sm-6'> 
          <label for='me_tin_ssn3' class='col-sm-6  no-padding-left'>123. TIN/EIN, if Firm Entity; SSN. if Individual:  
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_tin_ssn3' class='col-xs-10 col-sm-12' name='me_tin_ssn3[]' value='<?php print $data['me_tin_ssn3'][$offset];?>' > 
          </div>
      </div>
      <div class='col-sm-6'> 
          <label for='me_rpt_email3' class='col-sm-6  no-padding-left'> Representative  Mailing Address:  
          </label>
          <div class='col-sm-6'> 
            <input type='text' id='me_rpt_email3' class='col-xs-10 col-sm-12' name='me_rpt_email3[]' value='<?php print $data['me_rpt_email3'][$offset];?>'> 
          </div>
      </div>
    </div>
</div>
<div class="form-group optFeild marginBZ">
    <div align="left" class="col-sm-12"> 
        <div class="col-sm-4 no-padding-left no-padding-right" style="width:38%;"> 
            <div class="col-sm-6 no-padding-right"> 
                <label for="me_city4" class="col-sm-4 no-padding-right no-padding-left"> City: </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_city4" class="col-xs-10 col-sm-12  no-padding-right no-padding-left" name="me_city4[]" value='<?php print $data['me_city4'][$offset];?>'> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right"> 
                <label for="me_state4" class="col-sm-4 no-padding-right no-padding-left"> State:  </label>
                <div class="col-sm-8 no-padding-left"> 
                    <input type="text" id="me_state4" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_state4[]" value='<?php print $data['me_state4'][$offset];?>'> 
                </div>
            </div>
        </div>
        <div class=" col-sm-4 no-padding-left no-padding-right" style="width:42%;">
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_zip4" class="col-sm-7 no-padding-right no-padding-left"> Zip Code +4:    </label>
                <div class="col-sm-5 no-padding-left"> 
                    <input type="text" id="me_zip4" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_zip4[]" value='<?php print $data['me_zip4'][$offset];?>'> 
                </div>
            </div>
            <div class=" col-sm-6 no-padding-left no-padding-right">  
                <label for="me_phone4" class="col-sm-5 no-padding-right no-padding-left">Phone:  </label>
                <div class="col-sm-7 no-padding-left"> 
                    <input type="text" id="me_phone4" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_phone4[]" value='<?php print $data['me_phone4'][$offset];?>'> 
                </div>
            </div>
        </div>
        <div style="width:19%;" class=" col-sm-4 no-padding-left no-padding-right">
            <div class=" col-sm-12 no-padding-left no-padding-right">  
                <label for="me_ext4" class="col-sm-6  no-padding-left no-padding-right"> Ext. (if any):  </label>
                <div class="col-sm-6 no-padding-left"> 
                    <input type="text" id="me_ext4" class="col-xs-10 col-sm-12 no-padding-right no-padding-left" name="me_ext4[]" value='<?php print $data['me_ext4'][$offset];?>'> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class='form-group'> 
  <div class='col-sm-12 section_back'> 
      <div class='col-sm-9'> 
          <label for='' class='col-sm-2  no-padding-left'><b>Section B cont.</b></label>
          <div class='col-sm-9'> 
             <b>Additional ICD-9 fields, if necessary</b>
          </div>
      </div>
  </div>
</div>
<div class="form-group">
    <div class='col-sm-4'> 
          <label for='me_diagnosis_code7' class='col-sm-9  no-padding-left'>31.  ICD-9 Diagnosis Code 7 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code7[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code7" value="<?php print $data['me_diagnosis_code7'][$offset];?>">
        </div>
    </div>
    <div class='col-sm-4'> 
          <label for='me_diagnosis_code8' class='col-sm-9  no-padding-left'> 33. ICD-9 Diagnosis Code 8 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code8[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code8" value="<?php print $data['me_diagnosis_code8'][$offset];?>">
        </div>
    </div>
     <div class='col-sm-4'> 
          <label for='me_diagnosis_code9' class='col-sm-9  no-padding-left'> 35. ICD-9 Diagnosis Code 9 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code9[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code9" value="<?php print $data['me_diagnosis_code9'][$offset];?>">
        </div>
    </div>
    </div>
     <div class="form-group">
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code10' class='col-sm-9  no-padding-left'> 37.  ICD-9 Diagnosis Code 10 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code10[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code10" value="<?php print $data['me_diagnosis_code10'][$offset];?>">
        </div>
    </div>
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code11' class='col-sm-9  no-padding-left'> 39.  ICD-9 Diagnosis Code 11 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code11[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code11" value="<?php print $data['me_diagnosis_code11'][$offset];?>">
        </div>
    </div>
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code12' class='col-sm-9  no-padding-left'> 41. ICD-9 Diagnosis Code 12 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code12[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code12" value="<?php print $data['me_diagnosis_code12'][$offset];?>">
        </div>
    </div>
    </div>
     <div class="form-group">
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code13' class='col-sm-9  no-padding-left'> 43. ICD-9 Diagnosis Code 13 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code13[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code13" value="<?php print $data['me_diagnosis_code13'][$offset];?>">
        </div>
    </div>
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code14' class='col-sm-9  no-padding-left'> 45. ICD-9 Diagnosis Code 14 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code14[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code14" value="<?php print $data['me_diagnosis_code14'][$offset];?>">
        </div>
    </div>
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code15' class='col-sm-9  no-padding-left'> 47. ICD-9 Diagnosis Code 15:
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code15[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code15" value="<?php print $data['me_diagnosis_code15'][$offset];?>">
        </div>
    </div>
    </div>
     <div class="form-group">
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code16' class='col-sm-9  no-padding-left'> 49. ICD-9 Diagnosis Code 16:
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code16[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code16" value="<?php print $data['me_diagnosis_code16'][$offset];?>">
        </div>
    </div>
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code17' class='col-sm-9  no-padding-left'> 51. ICD-9 Diagnosis Code 17 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code17[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code17" value="<?php print $data['me_diagnosis_code17'][$offset];?>">
        </div>
    </div>
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code18' class='col-sm-9  no-padding-left'> 53. ICD-9 Diagnosis Code 18 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code18[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code18" value="<?php print $data['me_diagnosis_code18'][$offset];?>">
        </div>
    </div>
    </div>
     <div class="form-group">
      <div class='col-sm-4'> 
          <label for='me_diagnosis_code19' class='col-sm-9  no-padding-left'> 55. ICD-9 Diagnosis Code 19 :
          </label>
          <div class='col-sm-3'> 
            <input type="text" name="me_diagnosis_code19[]" class="col-xs-10 col-sm-12 " id="me_diagnosis_code19" value="<?php print $data['me_diagnosis_code19'][$offset];?>">
        </div>
    </div>
    </div>
</div>

<p align="center">
    <strong style='color:red'><u>If additional Section D Claimants exist, use page 3 and duplicate page, if necessary.</u></strong>
</p>
<table class="table table-responsive table-bordered">
    <tbody>
        <tr>
            <td>
                <p align="center">
                    <strong>Field#</strong>
                </p>
            </td>
            <td width="157"  valign="top">
                <p>
                    <strong>Field Name</strong>
                </p>
            </td>
            <td width="539" valign="top" colspan="2">
                <p>
                    <strong>Definition:</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    4
                </p>
            </td>
            <td>
                <p>
                    MEDICARE CLAIM NUMBER (HICN)
                </p>
            </td>
            <td >
                <p>
                    Provide Alleged Injured Party's Medicare Health Insurance Claim Number (if one has been issued).This number can be found on Medicare Card
                    if available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    5
                </p>
            </td>
            <td>
                <p>
                    SOCIAL SECURITY NUMBER
                </p>
            </td>
            <td >
                <p>
                    Provide Alleged Injured Party's Social Security Number if Medicare Claim Number (HICN) is not available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    6
                </p>
            </td>
            <td>
                <p>
                    LAST NAME
                </p>
            </td>
            <td >
                <p>
                    Provide last name of Alleged Injured Party <strong>EXACTLY AS IT APPEARS ON SOCIAL SECURITY CARD </strong>or Medicare Card if available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    7
                </p>
            </td>
            <td>
                <p>
                    FIRST NAME
                </p>
            </td>
            <td >
                <p>
                    Provide first name of Alleged Injured Party <strong>EXACTLY AS IT APPEARS ON SOCIAL SECURITY CARD </strong>or Medicare Card if available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    8
                </p>
            </td>
            <td>
                <p>
                    MIDDLE INITIAL
                </p>
            </td>
            <td >
                <p>
                    Provide middle initial of Alleged Injured Party <strong>EXACTLY AS IT APPEARS ON SOCIAL SECURITYCARD </strong>or Medicare Card if
                    available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    9
                </p>
            </td>
            <td>
                <p>
                    GENDER
                </p>
            </td>
            <td >
                <p>
                    Indicate Alleged Injured Party's gender by selecting MALE or FEMALE.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    10
                </p>
            </td>
            <td>
                <p>
                    DATE OF BIRTH
                </p>
            </td>
            <td >
                <p>
                    Provide Alleged Injured Party's Date of Birth.
                </p>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <p>
                    DECEASED?
                </p>
            </td>
            <td >
                <p>
                    Indicate if the Alleged Injured Party is deceased by selecting YES or NO.
                </p>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <p>
                    DATE OF DEATH
                </p>
            </td>
            <td >
                <p>
                    Provide the date the Alleged Injured Party deceased.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    12
                </p>
            </td>
            <td>
                <p>
                    CMS DATE OF INCIDENT
                </p>
            </td>
            <td >
                <p>
                    Provide Date of Incident (DOI). DOI as defined by CMS: For an automobile wreck or other accident, the date of incident is the date of the
                    accident. For claims involving exposure (including, for example, occupational disease and any associated cumulative injury) the DOI is the
                    date of FIRST exposure. For claims involving ingestion (for example, a recalled drug), it is the date of FIRST ingestion. For claims
                    involving implants it is the date of the implant (or date of the first implant if there are multiple implants).
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    13
                </p>
            </td>
            <td>
                <p>
                    INDUSTRY DATE OF INCIDENT
                </p>
            </td>
            <td >
                <p>
                    Provide Industry Date of Incident (DOI) routinely used by the insurance/workers' compensation industry: For an automobile wreck or other
                    accident, the date of incident is the date of the accident. For claims involving exposure, or implantation, the date of incident is the
                    date of LAST exposure, ingestion, or implantation.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    15
                </p>
            </td>
            <td>
                <p>
                    OPTIONAL FIELD
                </p>
                <p>
                    ALLEGED CUASE OF INJURY, ILLNESS OR INCIDENT
                </p>
            </td>
            <td >
                <p>
Claimant must provide either: 1) <strong>both</strong> a valid Alleged Cause of Injury, Incident or Illness Code (Field 15)<strong>and</strong> at least one valid ICD-9 Diagnosis Code (Field 19) <strong>OR</strong> 2) the Description of Illness/Injury(Field 57).                    <strong>Claims submitted on or after 1/1/11</strong>, Claimant must provide <strong>both</strong> a valid Alleged Cause of Injury,
                    Incident,or Illness Code (Field 15) <strong>and</strong> at least one valid ICD-9 Diagnosis Code. (See notes above for Spouse injury codes)
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    17
                </p>
            </td>
            <td>
                <p>
                    STATE OF VENUE
                </p>
            </td>
            <td >
                <p>
                    Provide the US postal abbreviation corresponding to the US State whose state law controls resolution of the claim. Use "US" where the claim
                    is a Federal Tor Claims Act liability insurance matter or a Federal workers' compensation claim.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    19-55
                </p>
            </td>
            <td>
                <p>
                    ICD-9 DIAGNOSIS CODE 1 - 19
                </p>
            </td>
            <td >
                <p>
                    (International Classification of Diseases, Ninth Revision, Clinical Modification) - Must be on the current list of valid codes accepted by
                    CMS found at www.cms.hhs.gov/ICD9ProviderDiagnosticCodes/06_codes.asp At least one valid diagnostic code must NOT be on the list of
                    insufficient codes (found in Appendix H to the NGHP User Guide, V. 2.0,and NOT an E or a V Code). (See notes above for Spouse injury codes)
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    57
                </p>
            </td>
            <td>
                <p>
                    RESERVED FOR FUTURE USE
                </p>
            </td>
            <td >
                <p>
                    Formerly used for the obsolete – Description of Illness / Injury
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    84
                </p>
            </td>
            <td>
                <p>
                    REPRESENTATIVE TYPE
                </p>
            </td>
            <td >
                <p>
                    Indicate the type of representative that the Alleged Injured Party has. Select from the options provided:
                </p>
                <p>
                    A = Attorney G = Guardian/Conservator P = Power of Attorney O= Other. If Alleged Injured Party has more than one representative, provide
                    attorney information, if available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    85
                </p>
            </td>
            <td>
                <p>
                    REPRESENTATIVE LAST NAME
                </p>
            </td>
            <td >
                <p>
                    Provide Last Name of Representative.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    86
                </p>
            </td>
            <td>
                <p>
                    REPRESENTATIVE FIRST NAME
                </p>
            </td>
            <td >
                <p>
                    Provide First Name of Representative.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    87
                </p>
            </td>
            <td>
                <p>
                    REPRESETNATIVE FIRM NAME
                </p>
            </td>
            <td >
                <p>
                    Provide the Name of the Representative's Firm.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    88
                </p>
            </td>
            <td>
                <p>
                    TIN/EIN, IF FIRM/ENTITY;SOCIAL SECURITY NUMBERIF INDIVIDUAL
                </p>
            </td>
            <td >
                <p>
                    Provide Alleged Injury Party's Representative's Federal Tax Identification Number (TIN). If representative is part of a firm, supply the
                    firm's Employer Identification Number (EIN), otherwise supply the representative's Social Security Number (SSN).
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    89
                </p>
            </td>
            <td>
                <p>
                    MAILING ADDRESS
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address for the alleged injured party's representative named above.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    91
                </p>
            </td>
            <td>
                <p>
                    CITY
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address city for the alleged injured party's representative named above.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    92
                </p>
            </td>
            <td>
                <p>
                    STATE
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address state for the alleged injured party's representative named above
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    93
                </p>
            </td>
            <td>
                <p>
                    ZIP CODE +4
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address zip code for the alleged injured party's representative named above. IncludeZip+4 code if known; if not known enter
                    0000.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    95
                </p>
            </td>
            <td>
                <p>
                    PHONE
                </p>
            </td>
            <td >
                <p>
                    Provide telephone number of alleged injured party's representative.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    96
                </p>
            </td>
            <td>
                <p>
                    PHONE EXTENSION, IF ANY
                </p>
            </td>
            <td >
                <p>
                    Provide telephone extension of alleged injured party's representative, if extension is available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    100
                </p>
            </td>
            <td>
                <p>
                    DATE OF SETTLEMENT
                </p>
            </td>
            <td >
                <p>
                    Date the Release is signed unless court approval is required - then it is the later of the date the Release is signed or thedate of court
                    approval. If there is no written agreement, then it is the date of payment.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    101
                </p>
            </td>
            <td>
                <p>
                    AMOUNT OF SETTLEMENT
                </p>
            </td>
            <td >
                <p>
                    Provide total amount of Settlement
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    104
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT’S RELATIONSHIP TO ALLEGED INJURED PARTY
                </p>
            </td>
            <td >
                <p>
                    Indicate relationship of the claimant to the alleged injured party/Medicare beneficiary by selecting from the options provided: E = Estate,
                    individual Name Provided F = Family Member, Individual Name Provided
                </p>
                <p>
                    O = Other, Individual Name Provided X = Estate, Entity Name Provided (e.g. "The Estate of John Doe")Y = Family, Entity Name Provided (e.g.
                    "The Family of John Doe") Z = Other, Entity Name Provided (e.g. "The Trust of John Doe") Blank = Not applicable (rest of the section will
                    be ignored)
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    105
                </p>
            </td>
            <td>
                <p>
                    TIN/EIN, IF ENTITY;SOCIAL SECURITY NUMBER,IF INDIVIDUAL
                </p>
            </td>
            <td >
                <p>
                    Provide Claimant's Social Security Number (SSN) if individual or Federal Tax Identification Number(TIN)/Employer Identification Number
                    (EIN) if claimant is an entity.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    106
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT LAST NAME
                </p>
            </td>
            <td >
                <p>
                    If claimant is an individual (claimant relationship is 'E','F', or 'O'), provide last name.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    107
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT FIRST NAME
                </p>
            </td>
            <td >
                <p>
                    If claimant is an individual (claimant relationship is 'E','F', or 'O'), provide first name.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    108
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT MIDDLE INITIAL
                </p>
            </td>
            <td >
                <p>
                    If claimant is an individual (claimant relationship is 'E','F', or 'O'), provide middle initial.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    109
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT ENTITY/ORGANIZATION NAME
                </p>
            </td>
            <td >
                <p>
                    If claimant is an entity or organization (claimant relationship is 'X', 'Y', or 'Z'), provide entity name; e.g. "The Estate of John Doe",
                    "The Family of John Doe", "The Trust of John Doe", etc.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    110
                </p>
            </td>
            <td>
                <p>
                    MAILING ADDRESS
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address for claimant.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    112
                </p>
            </td>
            <td>
                <p>
                    CITY
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address city of the claimant.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    113
                </p>
            </td>
            <td>
                <p>
                    STATE
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address state of the claimant.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    114
                </p>
            </td>
            <td>
                <p>
                    ZIP CODE +4
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address zip code for the claimant. Include Zip +4 code if available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    116
                </p>
            </td>
            <td>
                <p>
                    PHONE
                </p>
            </td>
            <td >
                <p>
                    Provide telephone number of the claimant
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    117
                </p>
            </td>
            <td>
                <p>
                    PHONE EXTENSION, IF ANY
                </p>
            </td>
            <td >
                <p>
                    Provide telephone extension of claimant, if extension is available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    119
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE TYPE
                </p>
            </td>
            <td >
                <p>
                    Indicate the type of representative the claimant has by selecting from the option types provided:
                </p>
                <p>
                    A = Attorney G = Guardian/Conservator P = Power of Attorney O = Other Blank = Not applicable (rest of the section will be ignored
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    120
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE LAST NAME
                </p>
            </td>
            <td >
                <p>
                    Provide the last name of the Claimant's Representative.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    121
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE FIRST NAME
                </p>
            </td>
            <td >
                <p>
                    Provide the first name of the Claimant's Representative.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    122
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE FIRM NAME
                </p>
            </td>
            <td >
                <p>
                    Provide the Name of the Claimant's Representative's Firm or Entity.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    123
                </p>
            </td>
            <td>
                <p>
                    TIN/EIN, IF FIRM/ENTITY; SOCIALSECURITY NUMBER, IF INDIVIDUAL
                </p>
            </td>
            <td >
                <p>
                    Claimant's Representative's Federal Tax Identification Number (TIN). If representative is part of a firm, supply the firm's Employer
                    Identification Number (EIN), otherwise supply the representative's Social Security Number (SSN).
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    124
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE MAILING ADDRESS
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address for the claimant's representative.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    126
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE CITY
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address city for the claimant's representative.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    127
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE STATE
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address state for the claimant's representative.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    128
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE ZIP CODE +4
                </p>
            </td>
            <td >
                <p>
                    Provide mailing address zip code for the claimant's representative.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    130
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE PHONE
                </p>
            </td>
            <td >
                <p>
                    Provide telephone extension of claimant's representative, if extension is available.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p align="center">
                    131
                </p>
            </td>
            <td>
                <p>
                    CLAIMANT REPRESENTATIVE PHONE EXTENSION, IF ANY
                </p>
            </td>
            <td >
                <p>
                    Provide telephone extension of claimant's representative, if extension is available.
                </p>
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
   $( ".datepicker" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: false,

        });
        $('.input-mask-date').mask('99:99:99');
        /*$('.date-timepicker1').datetimepicker({format: 'YYYY-MM-DD HH:mm'}).next().on(ace.click_event, function(){
          $(this).prev().focus();
        });*/
</script>
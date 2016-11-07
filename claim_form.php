<?php
if(isset($_GET['did'])){
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
<script>
var did = '<?php echo $_GET["did"]; ?>';
$(document).ready(function(){   
   $(".nav-tabs li:nth-child(1)").removeClass("active");
    $(".nav-tabs li:nth-child(5)").addClass("active");
    $("#home").removeClass("active in");
    $("#menu4").addClass("active in");
    getAllClaimNotes();
});
$(window).load(function(){
        $('#di<?php echo $_GET["did"]?>').modal('show');
    });
</script>
    <?php
}
?>
<?php
if(isset($_GET['view'])){
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
<script>
$(window).load(function(){  
    $("#viewClose").html("<a href='javascript:void(0)' class='pull-right' id='claim_close' onclick='window.history.back();'> <i class='fa fa-times'></i></a>");
    });
</script>
    <?php
    }?>
<style type="text/css">
  input[type=radio] {
    margin-top: 11px;
  }
  .block{
    margin-right: 4px !important;
  }
  #emp_div, #CSP_div, #PD_div, #Claimant_div, #Witness_div, #Examiners_div, #Insd_driver ,.isInjured_div,#isBI{
    display: none;
  }
  .ac_note_head{
    font-size: 18px;
    font-weight: bold;
  }
  .ac_quotes{
    font-style: italic;
  }
  .ac_date, .ac_user_name{
    font-size: 13px;
    color: #868686;
  }
  .ME_small, .redText{
    font-size: 10px;
  }
  .redText{
    color: red;
  }
  .section_back{
    background: black;
    color: white;
  }
  .optFeild{
    background: #ddd;
    padding-top:5px; 
    padding-bottom:1%; 
  }
  .marginBZ{
    margin-bottom: 0px;
  }

</style>

<?php
if($disabled=='Yes')
{
if((in_array(3, $_SESSION['access_functions'])==false) && $_SESSION['user']!='arcclaims'){ 
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
<script>
$(document).ready(function(){
    $(".disabl input").attr("disabled","true");
$(".disabl select").attr("disabled","true");
$(".disabl textarea").attr("disabled","true");
$(".hni").attr("disabled","true");
$(".ed_btns").html();
$("#claim_close").hide();
});

</script>
<style>
    .tab-content{margin-bottom: 50px;}
    .upd, .sub{display: none;}
</style>
<?php
}
}
$usermail = explode("@",$_SESSION['email']);
$code = explode('.',$usermail[1]);
if($code[0]=='hni')
{
?>
<script>
console.log("hiiiiiiiiii");
$(".disabl input").attr("disabled","true");
$(".disabl select").attr("disabled","true");
$(".disabl textarea").attr("disabled","true");
$(".hni").attr("disabled","true");
</script>
<?php
}
else if($code[0]=='rrts')
{
?>
<script>
$(".disabl input").attr("disabled","true");
$(".disabl select").attr("disabled","true");
$(".rrts").attr("disabled","true");
</script>
<?php
}
else
{
}
?>
<?php

$db_name =  $this->db->database;
$sel = mysql_query("SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = '$db_name'
AND   TABLE_NAME   = 'claims'") or die(mysql_error());
$fet = mysql_fetch_assoc($sel);
$last_id = 10000+($fet['AUTO_INCREMENT']);
$auto_gen_id = "CLM".date("Y").$last_id;

$data = Array
        (
            'id' => '',
            'status' => '',
            'type' => '',
            'loc' => '',
            'time_zone' => '',
            'physical_damage' => '',
            'report_date' => '',
            'report_time' => '',
            'f_m_first_name'=>'',
            'f_m_last_name'=>'',
            'f_m_phone'=>'',
            'f_m_email'=>'',
            'dolly_no' => '',
            'claimant_street' => '',
            'claimant_city' => '',
            'claimant_state' => '',
            'claimant_attorney_adds' => '',
            'csp_attorney_name' => '',
            'csp_attorney_phone' => '',
            'csp_attorney_email' => '',
            'csp_attorney_adds' => '',
            'claimant_zip' => '',
            'attach_claim' => '',
            'ins_driver_id' => '',
            'claimant_attorney_name' => '',
            'claimant_attorney_phone' => '',
            'claimant_attorney_email' => '',
            'claimant_attorney_email' => '',
            'pd_phone' => '',
            'pd_report' => '',
            'notes_date' => '',
            'note_name' => '',
            'notes' => '',
            'ins_first_name' => '',
            'ins_last_name' => '',
            'severity' => '',
            'frequency' => '',
            'tractor_no' => '',
            'trailer_no_1' => '',
            'trailer_no_2' => '',
            'adjuster' => '',
            'street' => '',
            'm_city' => '',
            'state' => '',
            'zip' => '',
            'country' => '',
            'claim_no' => '',
            'attach_file' => '',
            'dol' => '',
            'tol' => '',
            'terminal_location' => '',
            'emp_con_name' => '',
            'emp_con_lname' => '',
            'emp_con_id' => '',
            'emp_con_cell' => '',
            'emp_con_email' => '',
            'rrts' => '',
            'rrts2' => '',
            'vehicle_id' => '',
            'person_involved' => '',
            'csp_driverid' => '',
            'csp_drivertype' => '',
            'csp_firstname' => '',
            'csp_lastname' => '',
            'csp_mobile' => '',
            'csp_email' => '',
            'contractor_dba' => '',
            'ao_firstname' => '',
            'ao_lastname' => '',
            'ao_email' => '',
            'csp_attorney' => '',
            'police_involvment' => '',
            'which_department' => '',
            'citations_who' => '',
            'claimant_type' => '',
            'claimant_company' => '',
            'claimant_dot' => '',
            'claimant_lp' => '',
            'claimant_vin' => '',
            'claimant_dl' => '',
            'claimant_firstname' => '',
            'claimant_lastname' => '',
            'claimant_address' => '',
            'claimant_mobile' => '',
            'claimant_email' => '',
            'claimant_statement' => '',
            'vehicle_description' => '',
            'claimant_attorney' => '',
            'witness_type' => '',
            'witness_firstname' => '',
            'witness_lastname' => '',
            'witness_address' => '',
            'witness_email' => '',
            'witness_mobile' => '',
            'witness_statement' => '',
            'witness_attorney' => '',
            'witness_attorney_name' => '',
            'witness_attorney_phone' => '',
            'witness_attorney_email' => '',
            'witness_attorney_adds' => '',
            'litigation_manager' => '',
            'project_manager' => '',
            'examiner1' => '',
            'examiner2' => '',
            'injuries_to_driver' => '',
            'injuries_to_CSPAO' => '', 
            'cargo_damage' => '',
            'insd_veh_maneuver' => '',
            'changing_lanes' => '',
            'loss_description' => '', 
             'loss_description_desc' => '',
            'eloss' => '',
            'sso' => '',
            'roadway' => '',
            'weather' => '',
            'added_on' => ''
        );

if($record!=''){

if($record[0]['report_date']=='0000-00-00')
{
$report_date = '';
}
else
{
    $report_date = strtotime($record[0]['report_date']);
    $report_date = date("m/d/Y",$report_date);
}
if($record[0]['report_time']=='00:00:00')
{
$report_time = '';
}
else
{
$report_time = $record[0]['report_time'];
}
if($record[0]['dol']=='0000-00-00' and $record[0]['dol']=='1969-12-31')
{
$dol= '';
}
else
{
    $dol = strtotime($record[0]['dol']);
    $dol = date("m/d/Y",$dol);
}
if($record[0]['tol']=='00:00:00')
{
$tol= '';
}
else
{
$tol= $record[0]['tol'];
}
  $data = Array
        (
            'id' => $record[0]['id'],
            'status' => $record[0]['status'],
            'type' => $record[0]['type'],
            'time_zone' => $record[0]['time_zone'],
            'f_m_first_name'=>$record[0]['f_m_first_name'],
            'f_m_last_name'=>$record[0]['f_m_last_name'],
            'f_m_phone'=>$record[0]['f_m_phone'],
            'f_m_email'=>$record[0]['f_m_email'],
            'loc' => $record[0]['loc'],
            'physical_damage' => $record[0]['physical_damage'],
            'report_date' => $report_date,
            'dolly_no' => $record[0]['dolly_no'],
            'claimant_street' => $record[0]['claimant_street'],
            'claimant_attorney_adds' => $record[0]['claimant_attorney_adds'],
            'csp_attorney_name' => $record[0]['csp_attorney_name'],
            'csp_attorney_phone' => $record[0]['csp_attorney_phone'],
            'csp_attorney_email' => $record[0]['csp_attorney_email'],
            'csp_attorney_adds' => $record[0]['csp_attorney_adds'],
            //'claimant_city' => $record[0]['claimant_city'],
            //'claimant_state' => $record[0]['claimant_state'],
            //'claimant_zip' => $record[0]['claimant_zip'],
            //'claimant_attorney_name' => $record[0]['claimant_attorney_name'],
           // 'claimant_attorney_phone' => $record[0]['claimant_attorney_phone'],
            //'claimant_attorney_email' => $record[0]['claimant_attorney_email'],
           // 'claimant_attorney_email' => $record[0]['claimant_attorney_email'],
            'pd_phone' => $record[0]['pd_phone'],
            'pd_report' => $record[0]['pd_report'],
            'notes_date' => $record[0]['notes_date'],
            'note_name' => $record[0]['note_name'],
            'notes' => $record[0]['notes'],
            'attach_claim' => $record[0]['attach_claim'],
            'ins_driver_id' => $record[0]['ins_driver_id'],
            'ins_first_name' => $record[0]['ins_first_name'],
            'ins_last_name' => $record[0]['ins_last_name'],
            'severity' => $record[0]['severity'],
            'frequency' => $record[0]['frequency'],
            'tractor_no' => $record[0]['tractor_no'],
            'trailer_no_1' => $record[0]['trailer_no_1'],
            'trailer_no_2' => $record[0]['trailer_no_2'],
            'adjuster' => $record[0]['adjuster'],
            'street' => $record[0]['street'],
            'm_city' => $record[0]['m_city'],
            'state' => $record[0]['state'],
            'zip' => $record[0]['zip'],
            'country' => $record[0]['country'],
            'claim_no' => $record[0]['claim_no'],
            'attach_file' => $record[0]['attach_file'],
            'dol' => $dol,
            'terminal_location' => $record[0]['terminal_location'],
            'emp_con_name' => $record[0]['emp_con_name'],
            'emp_con_lname' => $record[0]['emp_con_lname'],
            'emp_con_id' => $record[0]['emp_con_id'],
            'emp_con_cell' => $record[0]['emp_con_cell'],
            'emp_con_email' => $record[0]['emp_con_email'],
            'rrts' => $record[0]['rrts'],
            'rrts2' => $record[0]['rrts2'],
            'vehicle_id' => $record[0]['vehicle_id'],
            'person_involved' => $record[0]['person_involved'],
            'csp_driverid' => $record[0]['csp_driverid'],
            'csp_drivertype' => $record[0]['csp_drivertype'],
            'csp_firstname' => $record[0]['csp_firstname'],
            'csp_lastname' => $record[0]['csp_lastname'],
            'csp_mobile' => $record[0]['csp_mobile'],
            'csp_email' => $record[0]['csp_email'],
            'contractor_dba' => $record[0]['contractor_dba'],
            'ao_firstname' => $record[0]['ao_firstname'],
            'ao_lastname' => $record[0]['ao_lastname'],
            'ao_email' => $record[0]['ao_email'],
            'csp_attorney' => $record[0]['csp_attorney'],
            'police_involvment' => $record[0]['police_involvment'],
            'which_department' => $record[0]['which_department'],
            'citations_who' => $record[0]['citations_who'],

            'claimant_type' => explode('~',$record[0]['claimant_type']),
            'claimant_position' => explode('~',$record[0]['claimant_position']),
            'claimant_company' => explode('~',$record[0]['claimant_company']),
            'claimant_dot' => explode('~',$record[0]['claimant_dot']),
            'claimant_lp' => explode('~',$record[0]['claimant_lp']),
            'claimant_vin' => explode('~',$record[0]['claimant_vin']),
            'claimant_dl' => explode('~',$record[0]['claimant_dl']),
            'claimant_firstname' => explode('~',$record[0]['claimant_firstname']),
            'claimant_lastname' => explode('~',$record[0]['claimant_lastname']),
            'claimant_city' => explode('~',$record[0]['claimant_city']),
            'claimant_state' => explode('~',$record[0]['claimant_state']),
            'claimant_street' => explode('~',$record[0]['claimant_street']),
            'claimant_zip' => explode('~',$record[0]['claimant_zip']),
            'claimant_mobile' => explode('~',$record[0]['claimant_mobile']),
            'claimant_email' => explode('~',$record[0]['claimant_email']),
            'claimant_statement' => explode('~',$record[0]['claimant_statement']),
            'claimant_attorney' => explode('~',$record[0]['claimant_attorney']),
            'claimant_attorney_name' =>explode('~',$record[0]['claimant_attorney_name']),
            'claimant_attorney_phone' => explode('~',$record[0]['claimant_attorney_phone']),
            'claimant_attorney_adds' => explode('~',$record[0]['claimant_attorney_adds']),
            'claimant_attorney_email' => explode('~',$record[0]['claimant_attorney_email']),
            'claimant_injured' => explode('~',$record[0]['claimant_injured']),
            'claimant_dob' => explode('~',$record[0]['claimant_dob']),
            'claimant_soc' => explode('~',$record[0]['claimant_soc']),
            'claimant_gender' => explode('~',$record[0]['claimant_gender']),
            'claimant_ME' => explode('~',$record[0]['claimant_ME']),
            'vehicle_description' => explode('~',$record[0]['vehicle_description']),

            'witness_type' => $record[0]['witness_type'],
            'witness_firstname' => $record[0]['witness_firstname'],
            'witness_lastname' => $record[0]['witness_lastname'],
            'witness_address' => $record[0]['witness_address'],
            'witness_email' => $record[0]['witness_email'],
            'witness_mobile' => $record[0]['witness_mobile'],
            'witness_statement' => $record[0]['witness_statement'],
            'witness_attorney' => $record[0]['witness_attorney'],
            'witness_attorney_name' => $record[0]['witness_attorney_name'],
            'witness_attorney_phone' => $record[0]['witness_attorney_phone'],
            'witness_attorney_email' => $record[0]['witness_attorney_email'],
            'witness_attorney_adds' => $record[0]['witness_attorney_adds'],
            'litigation_manager' => $record[0]['litigation_manager'],
            'project_manager' => $record[0]['project_manager'],
            'examiner1' => $record[0]['examiner1'],
            'examiner2' => $record[0]['examiner2'],
            'injuries_to_driver' => $record[0]['injuries_to_driver'],
            'injuries_to_CSPAO' => $record[0]['injuries_to_CSPAO'], 
            'cargo_damage' => $record[0]['cargo_damage'],
            'insd_veh_maneuver' => $record[0]['insd_veh_maneuver'],
            'changing_lanes' => $record[0]['changing_lanes'],
            'loss_description' => $record[0]['loss_description'],
            'loss_description_desc' => $record[0]['loss_description_desc'],
  
            'eloss' => $record[0]['eloss'],
            'sso' => $record[0]['sso'],
            'roadway' => $record[0]['roadway'],
            'weather' => $record[0]['weather'],
            'added_on' => $record[0]['added_on']
        );
$count = sizeof($data['claimant_type']);
}
$person_involved_val = explode(",", $data['person_involved']);
 if($record!=''){
  $claim_no = $data['claim_no'];
}else{ 
  $claim_no = $auto_gen_id;
}
//Fetch the Recovery data from DB

if(isset($recovery)){
  //recovery  
  $OPDVal = round($recovery[0]['OPD'],2);  
  //for OPD paid
  $totalOPDPaid = round($totalpaidcollection["OPD"]["paid"],2);
  //OPD Collection
  $totalOPDCollection = round($totalpaidcollection["OPD"]["collection"],2);
  $recovery_percent = $totalOPDPaid*$totalOPDCollection/100;
	
}else{
	
	$OPDVal = 0;
	$totalOPDPaid = 0;
	$totalOPDCollection = 0;
	$recovery_percent = 0;
}
?>
<div class="alert alert-block alert-success" id="updmsg" style="display:none;">
    <i class="ace-icon fa fa-check green"></i>
    Claim updated successfully!
</div>
  
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="widget-header">
                  <h4 class="widget-title"><?php echo $claim_no;?> <?php if($data['id']!=''){ echo "OPCO: ".$data['rrts']; } ?>

                  <span id="viewClose">
                      <a href='javascript:void(0)' class="pull-right" id='claim_close' onclick="javascript:location.reload();"> <i class="fa fa-times"></i></a>
                  </span>
                  </h4>
                </div>
                <div class="space-4"></div>
                <form enctype="multipart/form-data" role="form" name="insertClaim" id="insertClaim" class="form-horizontal disabl" <?php
            if($record!=''){
              ?>
              action="#"<?php
            }else{ ?>
              action="<?php echo base_url('claims/claimInsert');?>"
              <?php
            }?>  method="post">
            <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#home">Claim Information</a></li>
                  <li><a data-toggle="tab" href="#safety">SAFETY</a></li>
                  <li><a data-toggle="tab" href="#menu1" onclick="callMap();">Location of Accident (LOA)</a></li>
                  <li><a data-toggle="tab" href="#menu2" onclick="getAllInputValues()">Persons Involved</a></li>
                <?php
                if($_SESSION['user']=='arcclaims' or in_array(7, $_SESSION['access_functions']))
                {
                ?>
                  <li><a data-toggle="tab" href="#menu3" onclick='fundsView()'>Funds</a></li>
                <?php
                }else
{
                ?>
                  <li><a data-toggle="tab" href="#menu3"  style='display:none'>Funds</a></li>
                <?php
}
                ?>
                  <li><a data-toggle="tab" href="#menu4" onclick="getAllClaimNotes()" style="background:#ffff33;">Notes</a></li>

                  <?php
                  if($record!=''){
                  ?>
                   <li><a data-toggle="tab" href="#menu5"> Documents </a></li>
                  <?php
                    }
                  ?>
                </ul>

                <div class="tab-content">
                  <div id="home" class="tab-pane fade in active row">
                    <div class="col-xs-10 col-sm-8">
                        <input type="hidden" value='<?php echo $record[0]['id'];?>' name='id' id='claim_autoid'> 
                        <!-- #section:elements.form -->
                        <div class="form-group">
                          <label for="claim_no" class="col-sm-3 control-label no-padding-right"> Claim Number </label>

                          <div class="col-sm-9">
                            <input type="text" class="col-xs-10 col-sm-8" placeholder="Enter Claim No." id="claim_no" name="claim_no" value="<?php echo $claim_no;?>" readonly>
                            <input type="hidden" name="event_no_old" id="claim_no_old"  value="<?php echo $data['claim_no'];?>" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="dol" class="col-sm-3 control-label no-padding-right"> DOL </label>

                          <div class="col-sm-9">
                          <input type="text" id="dol" class="col-xs-10 col-sm-8 hasDatepicker datepicker" placeholder="Enter Date of Loss" name="dol" value="<?php if($record!=''){ echo $dol; } ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="physical_damage" class="col-sm-3 control-label no-padding-right"> Physical Damage (PD) </label>

                          <div class="col-sm-9">
                          <input type="radio" id="physical_damage" class="" name="physical_damage" value="Yes" <?php if($data['physical_damage']=='Yes'){ echo "checked";}?>> Yes
                          <input type="radio" id="physical_damage" class="" name="physical_damage" value="No" <?php if($data['physical_damage']=='No'){ echo "checked";}?>> No
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tol" class="col-sm-3 control-label no-padding-right"> TOL </label>

                          <div class="col-sm-9">
                          <input type="text" id="tol" class="col-xs-10 col-sm-8 timepicker1" placeholder="Enter Time of Loss" name="tol" value="<?php if($record!=''){ echo $tol; } ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="time_zone" class="col-sm-3 control-label no-padding-right"> Time Zone </label>

                          <div class="col-sm-9">
                            <select name="time_zone" id="time_zone" class="col-xs-10 col-sm-8" >
                              <option value=""> Select</option>
                              <option <?php if($data['time_zone']=='PT'){ echo "selected";}?> value='PT'> PT</option>
                              <option <?php if($data['time_zone']=='EST'){ echo "selected";}?> value='EST'> EST</option>
                              <option <?php if($data['time_zone']=='CT'){ echo "selected";}?> value='CT'> CT</option>
                              <option <?php if($data['time_zone']=='MT'){ echo "selected";}?> value='MT'> MT</option>
                            </select>
                            
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="report_date" class="col-sm-3 control-label no-padding-right"> Report Date </label>

                          <div class="col-sm-9">
                          <input type="text" id="report_date" class="col-xs-10 col-sm-8 hasDatepicker datepicker" placeholder="Enter Report Date" name="report_date" value="<?php if($record!=''){ echo $report_date; }else{print date('m/d/Y');} ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="report_time" class="col-sm-3 control-label no-padding-right"> Report Time </label>

                          <div class="col-sm-9">
                          <input type="text" id="report_time" class="col-xs-10 col-sm-8 timepicker1" placeholder="Enter Report Time" name="report_time" value="<?php if($record!=''){ echo $report_time; }else{print date('H:i:s');} ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="rrts" class="col-sm-3 control-label no-padding-right"> OPCO </label>

                          <div class="col-sm-9">
                            <div class="opco_codes"></div>
                          </div>
                        </div>
                          <div class="subopco"></div>
                          <div class="subcode"></div>
                        <!-- <div class="form-group">
                          <label for="terminal_location" class="col-sm-3 control-label no-padding-right"> Terminal Location </label>

                          <div class="col-sm-9">
                          <textarea id="terminal_location" name="terminal_location" class="col-xs-10 col-sm-5" placeholder="Enter Address"><?php echo $data['terminal_location'];?></textarea>
                          </div>
                        </div> -->
                        <div class="form-group">
                          <label for="vehicle_id" class="col-sm-3 control-label no-padding-right"> Under Dispatch </label>

                          <div class="col-sm-9">
                          <input type="radio" id="vehicle_id" class="" name="vehicle_id" value="Yes" <?php if($data['vehicle_id']=='Yes'){ echo "checked";}?>> Yes
                          <input type="radio" id="vehicle_id" class="" name="vehicle_id" value="No" <?php if($data['vehicle_id']=='No'){ echo "checked";}?>> No
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="status" class="col-sm-3 control-label no-padding-right"> Status </label>
                          <div class="col-sm-9">
                            <select name="status" id="status" class="col-xs-10 col-sm-8" onchange='statusChange(this.value)'>
                              <option <?php if($data['status']=='Pending'){ echo "selected";}?> value='Pending'> Pending</option>
                              <option <?php if($data['status']=='Open'){ echo "selected";}?> value='Open'> Open</option>
                              <option <?php if($data['status']=='Closed'){ echo "selected";}?> value='Closed'> Closed</option>
                              <option <?php if($data['status']=='Re-opened'){ echo "selected";}?> value='Re-opened'> Re-opened</option>
                            </select>
                            
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="type" class="col-sm-3 control-label no-padding-right"> Type </label>
                          <div class="col-sm-9">
                            <select name="type" id="type" class="col-xs-10 col-sm-8">
                              <option <?php if($data['type']=='Liability'){ echo "selected";}?> value='Liability'> Liability </option>
                              <option <?php if($data['type']=='Firstparty'){ echo "selected";}?> value='Firstparty'> First Party</option>
                             </select>
                            
                          </div>
                        </div>
                        <div class="form-group" style="display:none;">
                          <label for="severity" class="col-sm-3 control-label no-padding-right"> Severity </label>
                          <div class="col-sm-9">
                            <select name="severity" id="severity" class="col-xs-10 col-sm-8">
                              <option <?php if($data['severity']=='0'){ echo "selected";}?> value="0"> Select</option>
                              <option <?php if($data['severity']=='25'){ echo "selected";}?> value='25'> 0-25k</option>
                              <option <?php if($data['severity']=='50'){ echo "selected";}?> value='50'> 25-50k</option>
                              <option <?php if($data['severity']=='75'){ echo "selected";}?> value='75'> 50-75k</option>
                              <option <?php if($data['severity']=='100'){ echo "selected";}?> value='100'> 75-100k</option>
                            </select>
                          </div>
                        </div>
                        <!-- <div class="form-group">
                          <label for="frequency" class="col-sm-3 control-label no-padding-right"> Frequency </label>

                          <div class="col-sm-9">
                          <input type="text" name="frequency" id="frequency" class="col-xs-10 col-sm-5" placeholder="Enter Frequency" name="vehicle_id" value="<?php echo $data['frequency'];?>">
                          </div>
                        </div> -->
                        <div class="form-group" style="display:none;">
                          <label for="injuries_to_driver" class="col-sm-3 control-label no-padding-right"> Injuries To Driver </label>
                          <div class="col-sm-9">
                            <input type='radio' id='injuries_to_driver' name='injuries_to_driver' <?php if($data['injuries_to_driver']=='Yes'){echo 'checked=checked';}?> value='Yes'>  Yes
                            <input type='radio' id='injuries_to_driver' name='injuries_to_driver' <?php if($data['injuries_to_driver']=='No'){echo 'checked=checked';}?> value='No'>  No
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="injuries_to_cspao" class="col-sm-3 control-label no-padding-right"> Injuries To Driver </label>
                          <div class="col-sm-9">
                            <select name="injuries_to_cspao" id="injuries_to_cspao" class="col-xs-10 col-sm-8">
                              <option <?php if($data['injuries_to_CSPAO']=='BlankUnknown'){ echo "selected";}?> value='BlankUnknown'> Blank/Unknown</option>
                              <option <?php if($data['injuries_to_CSPAO']=='NoInjuries'){ echo "selected";}?> value='NoInjuries'> No Injuries</option>
                              <option <?php if($data['injuries_to_CSPAO']=='Abraisions/Scratches'){ echo "selected";}?> value='Abraisions/Scratches'> Abraisions/Scratches</option>
                              <option <?php if($data['injuries_to_CSPAO']=='Lacerations'){ echo "selected";}?> value='Lacerations'> Lacerations</option>
                              <option <?php if($data['injuries_to_CSPAO']=='SoftTissue'){ echo "selected";}?> value='SoftTissue'> Soft Tissue</option>
                              <option <?php if($data['injuries_to_CSPAO']=='Fractures'){ echo "selected";}?> value='Fractures'> Fractures</option>
                              <option <?php if($data['injuries_to_CSPAO']=='InternalInjuries'){ echo "selected";}?> value='InternalInjuries'> Internal Injuries</option>
                              <option <?php if($data['injuries_to_CSPAO']=='Fatality'){ echo "selected";}?> value='Fatality'> Fatality</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class='form-group'>  
                          <label for='cargo_damage' class='col-sm-3 control-label no-padding-right'> Cargo Damage </label> 
                          <div class='col-sm-9'>  
                            <input type='radio' id='cargo_damage' name='cargo_damage' value='yes' <?php if($data['cargo_damage']=='yes'){echo 'checked=checked';}?> value='pedestrian'>  Yes
                            <input type='radio' id='cargo_damage' name='cargo_damage' value='no' <?php if($data['cargo_damage']=='no'){echo 'checked=checked';}?> value='driver'>  No
                          </div> 
                        </div>
                        <div class="form-group">
                          <label for="insdvehmaneuver" class="col-sm-3 control-label no-padding-right"> Insd Veh Maneuver </label>
                          <div class="col-sm-9">
                            <select name="insdvehmaneuver" id="insdvehmaneuver" class="col-xs-10 col-sm-8" onchange="kkk(this.value)">
                              <option <?php if($data['insd_veh_maneuver']=='BlankUnknown'){ echo "selected";}?> value='BlankUnknown'> Blank/Unknown</option>
                              <option <?php if($data['insd_veh_maneuver']=='Park-Unocuppied'){ echo "selected";}?> value='Park-Unocuppied'> Park-Unocuppied</option>
                              <option <?php if($data['insd_veh_maneuver']=='Park-ocuppied'){ echo "selected";}?> value='Park-ocuppied'> Park-ocuppied</option>
                              <option <?php if($data['insd_veh_maneuver']=='Stopped in Roadway'){ echo "selected";}?> value='Stopped in Roadway'> Stopped in Roadway</option>
                              <option <?php if($data['insd_veh_maneuver']=='Proceeding Forward'){ echo "selected";}?> value='Proceeding Forward'> Proceeding Forward</option>
                              <option <?php if($data['insd_veh_maneuver']=='Backing'){ echo "selected";}?> value='Backing'> Backing</option>
                              <option <?php if($data['insd_veh_maneuver']=='Changing Lanes'){ echo "selected";}?> value='Changing Lanes'> Changing Lanes</option>
                            </select>
                          </div>
                        </div>
                        <div id='IVM'> </div>
                        
                        <div class="form-group">
                          <label for="loss_description" class="col-sm-3 control-label no-padding-right"> Loss Description </label>
                          <div class="col-sm-9">
                            <select name="loss_description" id="loss_description" class="col-xs-10 col-sm-8" onchange="lossdescription(this.value);">
                              <option <?php if($data['loss_description']=='BlankUnknown'){ echo "selected";}?> value='BlankUnknown'> Blank/Unknown</option>
                              <option <?php if($data['loss_description']=='Other vehicle hit insured vehicle'){ echo "selected";}?> value='Other vehicle hit insured vehicle'> Other vehicle hit insured vehicle</option>
                              <option <?php if($data['loss_description']=='Claimant sideswiped Insd same direction'){ echo "selected";}?> value='Claimant sideswiped Insd same direction'> Claimant sideswiped Insd same direction</option>
                              <option <?php if($data['loss_description']=='Insd sideswiped Claimant same direction'){ echo "selected";}?> value='Insd sideswiped Claimant same direction'> Insd sideswiped Claimant same direction</option>
                              <option <?php if($data['loss_description']=='Claimant sideswiped Insd opposite direction'){ echo "selected";}?> value='Claimant sideswiped Insd opposite direction'> Claimant sideswiped Insd opposite direction</option>
                              <option <?php if($data['loss_description']=='Insd sideswiped Claimant opposite direction'){ echo "selected";}?> value='Insd sideswiped Claimant opposite direction'> Insd sideswiped Claimant opposite direction</option>
                              <option <?php if($data['loss_description']=='Right turn squeeze'){ echo "selected";}?> value='Right turn squeeze'> Right turn squeeze</option>
                              <option <?php if($data['loss_description']=='Insured rear-ended claimant'){ echo "selected";}?> value='Insured rear-ended claimant'> Insured rear-ended claimant</option>
                              <option <?php if($data['loss_description']=='Claimant rear-ended insured'){ echo "selected";}?> value='Claimant rear-ended insured'> Claimant rear-ended insured</option>
                              <option <?php if($data['loss_description']=='Insured backed into claimant'){ echo "selected";}?> value='Insured backed into claimant'> Insured backed into claimant</option>
                              <option <?php if($data['loss_description']=='Claimant backed into insured'){ echo "selected";}?> value='Claimant backed into insured'> Claimant backed into insured</option>
                              <option <?php if($data['loss_description']=='Intersectional accident straight'){ echo "selected";}?> value='Intersectional accident straight'> Intersectional accident straight</option>
                              <option <?php if($data['loss_description']=='Intersectional right turn'){ echo "selected";}?> value='Intersectional right turn'> Intersectional right turn</option>
                              <option <?php if($data['loss_description']=='Intersectional left turn'){ echo "selected";}?> value='Intersectional left turn'> Intersectional left turn</option>
                              <option <?php if($data['loss_description']=='Theft'){ echo "selected";}?> value='Theft'> Theft</option>
                              <option <?php if($data['loss_description']=='Tire Blowout'){ echo "selected";}?> value='Tire Blowout'> Tire Blowout</option>
                              <option <?php if($data['loss_description']=='Vandalism'){ echo "selected";}?> value='Vandalism'> Vandalism</option>
                              <option <?php if($data['loss_description']=='Struck Wild Animal'){ echo "selected";}?> value='Struck Wild Animal'> Struck Wild Animal</option>
                              <option <?php if($data['loss_description']=='Struck Owned Animal'){ echo "selected";}?> value='Struck Owned Animal'> Struck Owned Animal</option>
                              <option <?php if($data['loss_description']=='Road Debris'){ echo "selected";}?> value='Road Debris'> Road Debris</option>
                              <option <?php if($data['loss_description']=='Claimant ran under insured'){ echo "selected";}?> value='Claimant ran under insured'> Claimant ran under insured </option>
                              <option <?php if($data['loss_description']=='Dropped trailer'){ echo "selected";}?> value='Dropped trailer'> Dropped trailer</option>
                              <option <?php if($data['loss_description']=='U-turn'){ echo "selected";}?> value='U-turn'> U-turn</option>
                              <option <?php if($data['loss_description']=='Environmental loss'){ echo "selected";}?> value='Environmental loss'> Environmental loss</option>
                              <option <?php if($data['loss_description']=='Fire'){ echo "selected";}?> value='Fire'> Fire</option>
                              <option <?php if($data['loss_description']=='Mechanical Failure'){ echo "selected";}?> value='Mechanical Failure'> Mechanical Failure</option>
                              <option <?php if($data['loss_description']=='Jackknife'){ echo "selected";}?> value='Jackknife'> Jackknife</option>
                              <option <?php if($data['loss_description']=='Insured lost control'){ echo "selected";}?> value='Insured lost control'> Insured lost control</option>
                              <option <?php if($data['loss_description']=='Insured ran clt off road'){ echo "selected";}?> value='Insured ran clt off road'> Insured ran clt off road</option>
                              <option <?php if($data['loss_description']=='Overturned trailer'){ echo "selected";}?> value='Overturned trailer'> Overturned trailer</option>
                              <option <?php if($data['loss_description']=='Struck stationary object'){ echo "selected";}?> value='Struck stationary object'> Struck stationary object</option>
                            </select>
                          </div>
                        </div>
                            <div class="form-group"> 
                              <label class="col-sm-3 control-label no-padding-right" for="loss_description_desc"> Description </label>
                              <div class="col-sm-9"> 
                                <textarea name="loss_description_desc" placeholder="Loss Description" class="col-xs-10 col-sm-8" id="loss_description_desc"><?php print $data['loss_description_desc'];?></textarea>
                              </div>
                            </div>
                        <div id='LD'> </div>
                        <div class="form-group">
                          <label for="roadway" class="col-sm-3 control-label no-padding-right"> Road Way </label>
                          <div class="col-sm-9">
                            <select name="roadway" id="roadway" class="col-xs-10 col-sm-8">
                              <option <?php if($data['roadway']=='BlankUnknown'){ echo "selected";}?> value='BlankUnknown'> Blank/Unknown</option>
                              <option <?php if($data['roadway']=='2 lane - 1 each direction'){ echo "selected";}?> value='2 lane - 1 each direction'> 2 lane - 1 each direction</option>
                              <option <?php if($data['roadway']=='4 lane - 2 each direction'){ echo "selected";}?> value='4 lane - 2 each direction'> 4 lane - 2 each direction</option>
                              <option <?php if($data['roadway']=='> 4 land divided'){ echo "selected";}?> value='4 land divided'> 4 lane divided</option>
                              <option <?php if($data['roadway']=='3 or more lanes each direction'){ echo "selected";}?> value='3 or more lanes each direction'> 3 or more lanes each direction</option>
                              <option <?php if($data['roadway']=='Parking Lot'){ echo "selected";}?> value='Parking Lot'> Parking Lot</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="weather" class="col-sm-3 control-label no-padding-right"> Weather </label>
                          <div class="col-sm-9">
                            <select name="weather" id="weather" class="col-xs-10 col-sm-8">
                              <option <?php if($data['weather']=='BlankUnknown'){ echo "selected";}?> value='BlankUnknown'> Blank/Unknown</option>
                              <option <?php if($data['weather']=='Clear/Dry'){ echo "selected";}?> value='Clear/Dry'> Clear/Dry</option>
                              <option <?php if($data['weather']=='Rain'){ echo "selected";}?> value='Rain'> Rain</option>
                              <option <?php if($data['weather']=='Snow'){ echo "selected";}?> value='Snow'> Snow</option>
                              <option <?php if($data['weather']=='Ice'){ echo "selected";}?> value='Ice'> Ice</option>
                              <option <?php if($data['weather']=='Wind'){ echo "selected";}?> value='Wind'> Wind</option>
                              <option <?php if($data['weather']=='Sleet'){ echo "selected";}?> value='Sleet'> Sleet</option>
                              <option <?php if($data['weather']=='Hail'){ echo "selected";}?> value='Hail'> Hail</option>
                              <option <?php if($data['weather']=='Tornado'){ echo "selected";}?> value='Tornado'> Tornado</option>
                            </select>
                          </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                          <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="tractor_no">Tractor Number:</label>
                          <div class="col-sm-9">
                            <input type="text" id="tractor_no" class="col-xs-10 col-sm-8" placeholder="Enter Tractor Number" name="tractor_no" value="<?php echo $data['tractor_no'];?>">
                          </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                          <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="trailer_no_1">Trailer 1 Number:</label>
                          <div class="col-sm-9">
                            <input type="text" id="trailer_no_1" class="col-xs-10 col-sm-8" placeholder="Enter Trailer 1 Number" name="trailer_no_1" value="<?php echo $data['trailer_no_1'];?>">
                          </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                          <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="trailer_no_2">Container:</label>
                          <div class="col-sm-9">
                            <input type="text" id="trailer_no_2" class="col-xs-10 col-sm-8" placeholder="Enter Container" name="trailer_no_2" value="<?php echo $data['trailer_no_2'];?>">
                          </div>
                        </div>
                        <div class="form-group" style='display:none'>
                          <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="dolly_no">Dolly Number:</label>
                          <div class="col-sm-9">
                            <input type="text" id="dolly_no" class="col-xs-10 col-sm-8" placeholder="Enter Dolly Number" name="dolly_no" value="<?php echo $data['dolly_no'];?>">
                          </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                          <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="adjuster">Adjuster</label>
                          <div class="col-sm-9">
                            <span id="adjuster_users"></span>
                          </div>
                        </div>
                        <script type="text/javascript">
                            var adjuster_user = '<?php echo $data['adjuster']; ?>'
                            $.post("<?php echo base_url();?>main/getArcclaimsUsers/", {"name":"adjuster","user":adjuster_user}, function(data){
                                $('#adjuster_users').html(data);
                            });
                            
                        </script>
                        <div class="form-group">
                          <label for="attach_file" class="col-sm-3 control-label no-padding-right"> Attach files/Photos </label>
                          <div class="col-sm-1">
                            <label class="block pull-left">
                              <input type="checkbox" class="ace input-lg" id="attach_file" name="attach_file" value="Yes" <?php if($data['attach_file']=='Yes'){ echo "checked";}?>> 
                              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                              Yes
                            </label>
                          </div>
                          <!-- <div id='mssg' class="3"></div> -->

                        </div>
                        <div class="form-group" id='att_req' <?php if($data['attach_file']=='No' or $data['attach_file']==''){?>style="display:none;"<?php }?>>
                        <?php 
                          $email = base64_encode("demo@demo.com");
                          $p = base64_encode(123456);
                          $path = base_url()."sharefile/access/process_login.php?email=".$email."&p=".$p;
                          $fClId = $data['claim_no'];
                          $selFolder = mysql_query("SELECT id FROM folders WHERE title = '$fClId' ORDER BY id desc limit 1") or die(mysql_error());
                          $fetFolder = mysql_fetch_assoc($selFolder);
                          $folderId = $fetFolder['id'];
                          ?>
                        <label for="fxg_et" class="col-sm-3 control-label no-padding-right" id="folder_id" style='display:none'><a href="<?php echo $path.'&path='.$folderId; ?>" target="_blank">View Documents</a> (or) </label>
                        <div class="col-sm-9">
                            <input type="file" id="attach_claim" class="col-md-offset-4 col-xs-10 col-sm-8"  name="attach_claim">
                            <input type="hidden" id="attach_claim_old" class="col-xs-10 col-sm-8"  name="attach_claim_old" value="<?php echo $data['attach_claim']?>">
                        </div>
                      </div>
                    </div>
                    <?php
                    function getData($table,$field,$value,$rfield)
                    {
                        //echo "SELECT $rfield FROM $table WHERE $field = '$value'";
                        $sel = mysql_query("SELECT $rfield FROM $table WHERE $field = '$value'");
                          $sel_rec = mysql_fetch_assoc($sel);
                          return  $sel_rec[$rfield];
                    }
                    ?>
                    <div class="col-xs-10 col-sm-4">
                    <?php
                    if($data['id']!='')
                    {
                        ?>
                        <div class="form-group" style="border: 1px solid #ddd;padding: 2%;margin-right: 2%; ">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="block pull-left" style="margin-top:5px;">
                                      <input type="checkbox"  id="em1" name="em1" onclick="getThisEmail(this.value,this.id);" value="cmerches@rrts.com"> 
                                      cmerches@rrts.com
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="block pull-left" style="margin-top:5px;">
                                      <input type="checkbox"  id="em2" name="em2" onclick="getThisEmail(this.value,this.id);" value="rmilane@rrts.com"> 
                                      rmilane@rrts.com
                                    </label>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="block pull-left" style="margin-top:5px;">
                                      <input type="checkbox"  id="em3" name="em3" onclick="getThisEmail(this.value,this.id);" value="lcavett@rrts.com"> 
                                      lcavett@rrts.com
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="block pull-left" style="margin-top:5px;">
                                    <?php
                                    $varrr2 = getData('users','name',$data['adjuster'],'email');
                                    if($data['adjuster']!='' and $varrr2!=''){
                                        ?>
                                      <input type="checkbox"  id="em5" name="em5" onclick="getThisEmail(this.value,this.id);" value="<?php echo $varrr2; ?>"> 
                                     <?php echo $varrr2; ?>
                                         <?php
                                    }
                                    ?>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="block pull-left" style="margin-top:5px;">
                                    <?php
                                    $varrr1 = getData('company_list_sub','c_loc',$data['terminal_location'],'opco_email');
                                    if($data['terminal_location']!='' and $varrr1!=''){
                                        ?>
                                      <input type="checkbox"  id="em4" name="em4" onclick="getThisEmail(this.value,this.id);" value="<?php echo $varrr1; ?>"> 
                                     <?php echo $varrr1; ?>
                                        <?php
                                    }
                                    ?>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="block pull-left" style="margin-top:5px;">
                                    <?php
                                    $varrr = getData('company_list_sub','c_loc',$data['terminal_location'],'rsd_email');
                                    if($data['terminal_location']!='' and $varrr!=''){
                                        ?>
                                      <input type="checkbox"  id="em6" name="" onclick="getThisEmail(this.value,this.id);" value="<?php echo $varrr; ?>"> 
                                     <?php echo $varrr; ?>
                                         <?php
                                    }
                                    ?>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                <input type="hidden" id='sendToReports' >
                                    <button type="button" class="btn btn-xs btn-primary btn-block" onclick="sendToReport()">Send</button>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                    <script type="text/javascript">
                    pValuesabc = [];
                        function getThisEmail(val,id) {
                            if(document.getElementById(id).checked){
                                pValuesabc.push(val);
                            //alert(pValuesabc);
                            }else{
                                position = pValuesabc.indexOf(val);
                                pValuesabc.splice(position,1);
                            //alert(pValuesabc);
                            }
                            $("#sendToReports").val(pValuesabc);
                        }
                        function sendToReport() {
                            var pValuesabc = $("#sendToReports").val();
                            var pValues1 = pValuesabc.replace(/(^,)|(,$)/g, "");
                            var id = "<?php echo $record[0]['id'] ?>";
                            window.location.href="<?php echo base_url();?>claims/claimsMail/"+id+"?val="+pValues1+"";
                            
                        }
                    </script>
                  </div>
                  <div id="safety" class="tab-pane fade">
                      <div class="form-group">
                        <label for="rrts" class="col-sm-3 control-label no-padding-right"> OPCO </label>

                        <div class="col-sm-9">
                            <div class="opco_codes1"></div>
                        </div>
                      </div>
                      <div class="subopco1"></div>
                      <div class="subcode1"></div>
                      <div class="opcoDetails"></div>
                  </div>
                  <div id="menu1" class="tab-pane fade">
                     <div class="row"> 
                     <div class="col-md-5">
                      <div class='form-group'>  
                        <label for='loa_street' class='col-sm-3 control-label no-padding-right'>  Street </label>  
                        <div class='col-sm-9'>  
                          <input type='text' id='loa_street' class='col-xs-10 col-sm-12' placeholder='Enter Street' name="street" value='<?php echo $data['street'];?>' >  
                        </div> 
                      </div>
                      <div class='form-group'>  
                        <label for='loa_city' class='col-sm-3 control-label no-padding-right'>  City </label>  
                        <div class='col-sm-9'>  
                          <input type='text' id='loa_city' class='col-xs-10 col-sm-12' placeholder='Enter City' name="m_city" value='<?php echo $data['m_city'];?>' >  
                        </div> 
                      </div> 
                      <div class='form-group'>  
                        <label for='loa_state' class='col-sm-3 control-label no-padding-right'>  State </label>  
                        <div class='col-sm-9'>  
                          <input type='text' id='loa_state' class='col-xs-10 col-sm-12' name="state" placeholder='Enter State' name='examiner1' value='<?php echo $data['state'];?>'>  
                        </div> 
                      </div> 
                      <div class='form-group'> 
                        <label for='loa_zip' class='col-sm-3 control-label no-padding-right'>Zip</label>
                        <div class='col-sm-9'> 
                          <input type='text' id='loa_zip' class='col-xs-10 col-sm-12' placeholder='Enter Zip.' name='zip' value='<?php echo $data['zip'];?>'> 
                        </div>
                      </div>
                      <div class='form-group' > 
                        <label for='loa_country' class='col-sm-3 control-label no-padding-right'>Country</label>
                        <div class='col-sm-9'> 
                          <input type='text' id='loa_country' class='col-xs-10 col-sm-12' placeholder='Enter Country.' name='country' value='<?php echo $data['country'];?>'> 
                        </div>
                      </div> 
                      </div>
                     <div class="col-md-7" style="height:300px;" id="mapDisplay"> 
                      </div>
                      </div> 
                  </div>
                  <div id="menu2" class="tab-pane fade">
                    <div class="form-group">
                      <label for="person_involved" class="col-sm-2 control-label no-padding-right">  </label>

                      <div class="col-sm-10">
                          <div class="col-xs-10 col-sm-12">
                            <label class="block pull-left">
                              <input type="checkbox" value="Insured_driver" name="person_involved" id="Insured_driver" class="ace input-lg" onclick="personsOptions(this.value,this.id);getAllInputValues();" <?php if(in_array("Insured_driver", $person_involved_val)){ echo "checked ='checked'"; }?>> 
                              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                              <span id="filled_inputs">Insured driver</span>
                            </label>
                            <label class="block pull-left">
                              <input type="checkbox" value="Emp_Contracter" name="person_involved" id="emp" class="ace input-lg"  onclick="personsOptions(this.value,this.id);getAllInputValues();" <?php if(in_array("Emp_Contracter", $person_involved_val)){ echo "checked ='checked'"; }?>> 
                              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                              <span id="filled_inputs1">Emp/Contractor</span>
                            </label>
                            <!-- <label class="block pull-left">
                              <input type="checkbox" value="CSP" name="person_involved" id="CSP" class="ace input-lg"  onclick="personsOptions(this.value,this.id)" <?php if(in_array("CSP", $person_involved_val)){ echo "checked ='checked'"; }?>> 
                              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                              CSP
                            </label> -->
                            <label class="block pull-left">
                              <input type="checkbox" value="Police_Department" name="person_involved" id="Police_Department" class="ace input-lg"   onclick="personsOptions(this.value,this.id);getAllInputValues();" <?php if(in_array("Police_Department", $person_involved_val)){ echo "checked ='checked'"; }?>> 
                              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                              <span id="filled_inputs2">Police Department</span>
                            </label>
                            <label class="block pull-left">
                              <input type="checkbox" value="Claimant" name="person_involved" id="Claimant" class="ace input-lg"   onclick="personsOptions(this.value,this.id);getAllInputValues();" <?php if(in_array("Claimant", $person_involved_val)){ echo "checked ='checked'"; }?>> 
                              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                              <span id="filled_inputs3">Claimant</span>
                            </label>
                            <label class="block pull-left">
                              <input type="checkbox" value="Witness" name="person_involved" id="Witness" class="ace input-lg"   onclick="personsOptions(this.value,this.id);getAllInputValues();" <?php if(in_array("Witness", $person_involved_val)){ echo "checked ='checked'"; }?>> 
                              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                              <span id="filled_inputs4">Witness</span>
                            </label>
                            <label class="block pull-left">
                              <input type="checkbox" value="Other" name="person_involved" id="Other" class="ace input-lg"   onclick="personsOptions(this.value,this.id);getAllInputValues();" <?php if(in_array("Other", $person_involved_val)){ echo "checked ='checked'"; }?>> 
                              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                              Other
                            </label>
                            <!-- <label class="block pull-left">
                              <input type="checkbox" value="Examiners" name="person_involved" id="Examiners" class="ace input-lg"   onclick="personsOptions(this.value,this.id)" <?php if(in_array("Examiners", $person_involved_val)){ echo "checked ='checked'"; }?>> 
                              <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                              Examiners
                            </label> -->
                          </div>
                      </div>
                    </div>
                    <input type="hidden" id="exp_123" name="person_involved_arr" value="<?php echo $data['person_involved']; ?>">
                    <!-- <div id="Examiners_div" <?php if(in_array("Examiners", $person_involved_val)){ echo "style='display:block;'"; }?>>
                      <div class="widget-header">
                        <h4 class="widget-title">Examiners</h4>
                      </div>
                      <div class="space-4"></div>
                      <div class='form-group'>  
                        <label for='litigation_manager' class='col-sm-3 control-label no-padding-right'>  Claims Litigation Manager </label>
                        <div class='col-sm-9'>  
                          <input type='text' id='litigation_manager' class='col-xs-10 col-sm-5' placeholder='Claims Litigation Manager' name='litigation_manager' value='<?php echo $data['litigation_manager'];?>'>  
                        </div> 
                      </div> 
                      <div class='form-group'>  
                        <label for='project_manager' class='col-sm-3 control-label no-padding-right'>  Project Manager </label>
                        <div class='col-sm-9'>  
                          <input type='text' id='project_manager' class='col-xs-10 col-sm-5' placeholder='Project Manager' name='project_manager' value='<?php echo $data['project_manager'];?>'>  
                        </div> 
                      </div> 
                      <div class='form-group'>  
                        <label for='examiner1' class='col-sm-3 control-label no-padding-right'>  Examiner1 </label>  
                        <div class='col-sm-9'>  
                          <input type='text' id='examiner1' class='col-xs-10 col-sm-5' placeholder='Examiner 1' name='examiner1' value='<?php echo $data['examiner1'];?>'>  
                        </div> 
                      </div> 
                      <div class='form-group'>  
                        <label for='examiner2' class='col-sm-3 control-label no-padding-right'>  Examiner2 </label>
                        <div class='col-sm-9'>  
                          <input type='text' id='examiner2' class='col-xs-10 col-sm-5' placeholder='Examiner 2' name='examiner2' value='<?php echo $data['examiner2'];?>'>  
                        </div> 
                      </div>
                    </div> -->
                    <div id="Witness_div" <?php if(in_array("Witness", $person_involved_val)){ echo "style='display:block;'"; }?>>  
                      <div class="widget-header">
                        <h4 class="widget-title">Witness</h4>
                      </div>
                      <div class="space-4"></div>
                      <!-- <div class='form-group'> 
                        <label for='claimant_type' class='col-sm-3 control-label no-padding-right'> Witness Type </label> 
                        <div class='col-sm-9'>  
                          <input type='radio' id='witness_type' name='witness_type' <?php if($data['witness_type']=='pedestrian'){echo 'checked=checked';}?> value='pedestrian'>  Pedestrian 
                          <input type='radio' id='witness_type' name='witness_type' <?php if($data['witness_type']=='driver'){echo 'checked=checked';}?> value='driver'>  Driver 
                        </div> 
                      </div> --> 
                      <div class='form-group'>  
                        <label for='witness_firstname' class='col-sm-3 control-label no-padding-right'>  First Name </label>
                        <div class='col-sm-9'>  
                          <input type='text' id='witness_firstname' class='col-xs-10 col-sm-5' placeholder='First Name' name='witness_firstname' value='<?php echo $data['witness_firstname'];?>'>  
                        </div> 
                      </div> 
                      <div class='form-group'>  
                        <label for='witness_lastname' class='col-sm-3 control-label no-padding-right'>  Last Name </label>
                        <div class='col-sm-9'>  
                          <input type='text' id='witness_lastname' class='col-xs-10 col-sm-5' placeholder='Last Name' name='witness_lastname' value='<?php echo $data['witness_lastname'];?>'>  
                        </div> 
                      </div> 
                      <div class='form-group'>  
                        <label for='witness_mobile' class='col-sm-3 control-label no-padding-right'> Mobile </label>
                        <div class='col-sm-9'>  
                          <input type='text' id='witness_mobile' class='col-xs-10 col-sm-5' placeholder='Last Name' name='witness_cellphone' value='<?php echo $data['witness_mobile'];?>'>  
                        </div> 
                      </div> 
                      <div class='form-group'>  
                        <label for='witness_email' class='col-sm-3 control-label no-padding-right'>  Email </label>
                        <div class='col-sm-9'>  
                          <input type='text' id='witness_email' class='col-xs-10 col-sm-5' placeholder='Last Name' name='witness_email' value='<?php echo $data['witness_email'];?>'>  
                        </div> 
                      </div> 
                      <div class='form-group'>  
                        <label for='witness_address' class='col-sm-3 control-label no-padding-right'> Address </label>
                        <div class='col-sm-9'>  
                          <textarea id='witness_address' class='col-xs-10 col-sm-5' placeholder='Address' name='witness_address' ><?php echo $data['witness_address'];?></textarea> 
                        </div> 
                      </div> 
                      <div class='form-group'>  
                        <label for='witness_statement' class='col-sm-3 control-label no-padding-right'> Statement </label>
                        <div class='col-sm-9'>  
                          <textarea id='witness_statement' class='col-xs-10 col-sm-5' placeholder='' name='witness_statement' ><?php echo $data['witness_statement'];?></textarea> 
                        </div> 
                      </div>
                      <div class='form-group'>  
                          <label for='witness_attorney' class='col-sm-3 control-label no-padding-right'> Attorney </label>
                          <div class='col-sm-9'>
                          <input type="radio" name="witness_attorney" value="No" <?php if($data['witness_attorney']=='No'){ echo "echo checked = 'checked'" ;}?> onclick="attorneyBox(this.value,'witness');"> No
                          <input type="radio" name="witness_attorney" value="Yes" <?php if($data['witness_attorney']=='Yes'){ echo "echo checked = 'checked'" ;}?> onclick="attorneyBox(this.value,'witness');"> Yes
                            <!-- <input type='text' id='witness_attorney' class='col-xs-10 col-sm-5' placeholder='Attorney' name='witness_attorney'  value='<?php echo $data['witness_attorney'];?>' >  -->
                          </div> 
                        </div> 
                    </div>
                    <div id="Claimant_div" <?php if(in_array("Claimant", $person_involved_val)){ echo "style='display:block;'"; }?>>
                      <div class="widget-header">
                        <h4 class="widget-title">Claimants</h4>
                        <span class="pull-right"><button type="button" class="btn btn-xs btn-success" id="addMoreClaimants">Add</button></span>
                      </div>
                      <div id="more_claimants">
                      <?php
                      if($record!='')
                      {
                        for($i=0;$i<$count;$i++)
                        {
                          ?> 
                          <div class="more_claimants">
                        <h3>Claimant <?php print $i+1;?></h3>
                        <div class="space-4"></div>
                        <div class='form-group'> 
                          <label for='claimant_type' class='col-sm-3 control-label no-padding-right'> Claimant Type </label>
                          <div class='col-sm-9'> 
                            <select name="claimant_type[]" id="" class="col-xs-10 col-sm-5" onchange="claimantType(this.value,this)">
                              <option <?php if($data['claimant_type'][$i]=='None'){ echo "selected";}?> value='None'> Select</option>
                              <option <?php if($data['claimant_type'][$i]=='PD'){ echo "selected";}?> value='PD'> Property Damage (PD)</option>
                              <option <?php if($data['claimant_type'][$i]=='BI'){ echo "selected";}?> value='BI'> Bodily Injury (BI)</option>
                            </select>
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_position' class='col-sm-3 control-label no-padding-right'> Person</label>
                          <div class='col-sm-9'> 
                            <select name='claimant_position[]' id='claimant_position' class='col-xs-10 col-sm-5'>
                              <option <?php if($data['claimant_position'][$i]=='None'){ echo "selected";}?> value='None'> Select</option>
 <option <?php if($data['claimant_position'][$i]=='Owner'){ echo "selected";}?> value='Owner'> Owner</option>
                              <option <?php if($data['claimant_position'][$i]=='Driver'){ echo "selected";}?> value='Driver'> Driver</option>
                              <option <?php if($data['claimant_position'][$i]=='Passenger'){ echo "selected";}?> value='Passenger'> Passenger</option>
                              <option <?php if($data['claimant_position'][$i]=='Pedestrian'){ echo "selected";}?> value='Pedestrian'> Pedestrian</option>
                              <option <?php if($data['claimant_position'][$i]=='Motorcyclist'){ echo "selected";}?> value='Motorcyclist'> Motorcyclist</option>
                              <option <?php if($data['claimant_position'][$i]=='Bicyclist'){ echo "selected";}?> value='Bicyclist'> Bicyclist</option>
                            </select>
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_company' class='col-sm-3 control-label no-padding-right'>  Company </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_company' class='col-xs-10 col-sm-5 tortfeasor_company
' placeholder='' name='claimant_company[]' value='<?php echo $data['claimant_company'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_dot' class='col-sm-3 control-label no-padding-right'>  DOT# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_dot' class='col-xs-10 col-sm-5' placeholder='' name='claimant_dot[]' value='<?php echo $data['claimant_dot'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_lp' class='col-sm-3 control-label no-padding-right'>  L/P# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_lp' class='col-xs-10 col-sm-5' placeholder='' name='claimant_lp[]' value='<?php echo $data['claimant_lp'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_vin' class='col-sm-3 control-label no-padding-right'>  Vin# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_vin' class='col-xs-10 col-sm-5' placeholder='' name='claimant_vin[]' value='<?php echo $data['claimant_vin'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_dl' class='col-sm-3 control-label no-padding-right'>  D/L# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_dl' class='col-xs-10 col-sm-5' placeholder='' name='claimant_dl[]' value='<?php echo $data['claimant_dl'][$i];?>'> 
                          </div>
                        </div>
                         <div class='form-group'> 
                          <label for='claimant_first_name' class='col-sm-3 control-label no-padding-right'>  First Name </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_first_name' class='col-xs-10 col-sm-5 recovery_fname' placeholder='' name='claimant_firstname[]' value='<?php echo $data['claimant_firstname'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_last_name' class='col-sm-3 control-label no-padding-right'>   Last Name </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_last_name' class='col-xs-10 col-sm-5 recovery_lname' placeholder='' name='claimant_lastname[]' value='<?php echo $data['claimant_lastname'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_street' class='col-sm-3 control-label no-padding-right'> Street </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_street' class='col-xs-10 col-sm-5' placeholder='' name='claimant_street[]' value='<?php echo $data['claimant_street'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_city' class='col-sm-3 control-label no-padding-right'>  City </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_city' class='col-xs-10 col-sm-5' placeholder='' name='claimant_city[]' value='<?php echo $data['claimant_city'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_state' class='col-sm-3 control-label no-padding-right'>   State </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_state' class='col-xs-10 col-sm-5' placeholder='' name='claimant_state[]' value='<?php echo $data['claimant_state'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_zip' class='col-sm-3 control-label no-padding-right'>Zip </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_zip' class='col-xs-10 col-sm-5' placeholder='' name='claimant_zip[]' value='<?php echo $data['claimant_zip'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group' style='display:none;'> 
                          <label for='claimant_country' class='col-sm-3 control-label no-padding-right'> Country </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_country' class='col-xs-10 col-sm-5' placeholder='' name='claimant_country[]' value='<?php echo $data['claimant_country'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_cell_phone' class='col-sm-3 control-label no-padding-right'>  Phone no. </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_cell_phone' class='col-xs-10 col-sm-5' placeholder='' name='claimant_cellphone[]' value='<?php echo $data['claimant_mobile'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_email' class='col-sm-3 control-label no-padding-right'>   Email </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_email' class='col-xs-10 col-sm-5' placeholder='' name='claimant_email[]' value='<?php echo $data['claimant_email'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_claimment' class='col-sm-3 control-label no-padding-right'>   Statement </label>
                          <div class='col-sm-9'> 
                            <textarea id='claimant_claimment' class='col-xs-10 col-sm-5' placeholder='' name='claimant_statement[]' ><?php echo $data['claimant_statement'][$i];?></textarea>
                          </div>
                        </div>
                         <div class='form-group'> 
                          <label for='vehicle_description' class='col-sm-3 control-label no-padding-right'>   Vehicle Description</label>
                          <div class='col-sm-9'> 
                            <textarea id='vehicle_description' class='col-xs-10 col-sm-5' placeholder='' name='vehicle_description[]' ><?php echo $data['vehicle_description'][$i];?></textarea>
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='attorney' class='col-sm-3 control-label no-padding-right'>  Attorney </label>
                          <div class='col-sm-9'>
                            <input type="radio" name="claimant_attorney<?php print $i+1;?>" value="No" <?php if($data['claimant_attorney'][$i]=='No'){ echo "echo checked = 'checked'" ;}?> onclick="attorneyBoxes(this.value,this);"> No
                            <input type="radio" name="claimant_attorney<?php print $i+1;?>" value="Yes" <?php if($data['claimant_attorney'][$i]=='Yes'){ echo "echo checked = 'checked'" ;}?> onclick="attorneyBoxes(this.value,this);"> Yes 
                            <!-- <input type='text' id='claimant_attorney' class='col-xs-10 col-sm-5' placeholder='Enter Attorney' name='claimant_attorney' value='<?php echo $data['claimant_attorney'];?>'>  -->
                          </div>
                        </div>
                        <div class="claimant_modal modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Claimant Attorney <?php print $i+1;?></h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="cont" >
              <div class='form-group'> 
                <label for='claimant_attorney_name' class='col-sm-3 control-label no-padding-right'>Name</label>
                <div class='col-sm-9'> 
                  <input type='text' id='claimant_attorney_name' class='col-xs-10 col-sm-7' placeholder='Enter Name.' name='claimant_attorney_name[]' value='<?php echo $data['claimant_attorney_name'][$i];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='claimant_attorney_phone' class='col-sm-3 control-label no-padding-right'>Phone no.</label>
                <div class='col-sm-9'> 
                  <input type='number' id='claimant_attorney_phone' class='col-xs-10 col-sm-7' placeholder='Enter Phone.' name='claimant_attorney_phone[]' value='<?php echo $data['claimant_attorney_phone'][$i];?>' min='0'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='claimant_attorney_email' class='col-sm-3 control-label no-padding-right'>Email</label>
                <div class='col-sm-9'> 
                  <input type='text' id='claimant_attorney_email' class='col-xs-10 col-sm-7' placeholder='Enter Email.' name='claimant_attorney_email[]' value='<?php echo $data['claimant_attorney_email'][$i];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='claimant_attorney_adds' class='col-sm-3 control-label no-padding-right'>   Address </label>
                <div class='col-sm-9'> 
                  <textarea id='claimant_attorney_adds' class='col-xs-10 col-sm-7' placeholder='' name='claimant_attorney_adds[]' ><?php echo $data['claimant_attorney_adds'][$i];?></textarea>
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
                        <div id="<?php if($data['claimant_type'][$i]!="BI"){ echo "isBI"; } ?>" class='<?php if($data['claimant_type'][$i]!="BI"){ echo "isBI"; } ?>'>
                            <div class='form-group'> 
                              <label for='claimant_injured' class='col-sm-3 control-label no-padding-right'>  Injured </label>
                              <div class='col-sm-9'> 
                                <label class="block pull-left">
                                  <input type='checkbox' class='ace input-sm' name='claimant_injured[]' value="Yes" <?php if($data['claimant_injured'][$i]=="Yes"){ echo "checked='checked'"; } ?> onclick="isClaimantInjured(this)"> 
                                  <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                                  Yes
                                </label>
                              </div>
                            </div>
                            <div class='form-group'> 
                              <label for='claimant_ME' class='col-sm-3 control-label no-padding-right'>  Medicare Eligible </label>
                              <div class='col-sm-9'> 
                                <label class="block pull-left">
                                  <input type='checkbox' class='claimant_ME ace input-sm' class='ace input-sm' name='claimant_ME[]' value="Yes" <?php if($data['claimant_ME'][$i]=="Yes"){ echo "checked='checked'"; } ?> onclick="isME(this)"> 
                                  <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                                  Yes
                                </label>
                              </div>
                            </div>
                            
                            <div class="<?php if($data['claimant_injured'][$i]!="Yes"){ echo "isInjured_div"; } ?>">
                                <div class='form-group'> 
                                  <label for='claimant_dob' class='col-sm-3 control-label no-padding-right'>Date Of Birth</label>
                                  <div class='col-sm-9'> 
                                    <input type='text' id='claimant_dob' value='<?php print $data['claimant_dob'][$i]; ?>' class='col-xs-10 col-sm-5 hasDatepicker datepicker' name='claimant_dob[]'> 
                                  </div>
                                </div>
                                <div class='form-group'> 
                                  <label for='claimant_soc' class='col-sm-3 control-label no-padding-right'>Social Security number</label>
                                  <div class='col-sm-9'> 
                                    <input type='text' id='claimant_soc' class='col-xs-10 col-sm-5' name='claimant_soc[]' value='<?php print $data['claimant_soc'][$i]; ?>'> 
                                  </div>
                                </div>
                                <div class='form-group'> 
                                  <label for='claimant_gender' class='col-sm-3 control-label no-padding-right'>Gender</label>
                                  <div class='col-sm-9'> 
                                    <label class="block pull-left">
                                      <input type='radio' id='claimant_gender' class='ace input-sm' name='claimant_gender<?php print $i+1;?>' value="Male" <?php if($data['claimant_gender'][$i]=="Male"){ echo "checked='checked'"; } ?>> 
                                      <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                                      Male
                                    </label>
                                    <label class="block pull-left">
                                      <input type='radio' id='claimant_gender' class='ace input-sm' name='claimant_gender<?php print $i+1;?>' value="Female" <?php if($data['claimant_gender'][$i]=="Female"){ echo "checked='checked'"; } ?>> 
                                      <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                                      Female
                                    </label>
                                  </div>
                                </div>
                            </div>
                            <div id="ME_div<?php echo $i; ?>" class="ME_div"></div>
                            <?php
                             if($data['claimant_ME'][$i]=="Yes"){
                              ?>
                              <script>
                                var claim_id = '<?php echo $data['id']; ?>';
                                var claim_no = '<?php echo $data['claim_no']; ?>';
                                var offset = '<?php echo $i; ?>';
                                $.post("<?php echo base_url();?>claims/getMEForm/", {"claim_id":claim_id,"claim_no":claim_no,"offset":offset}, function(data){
                                    $('#ME_div<?php echo $i; ?>').html(data);
                                });
                              </script>
                              <?php
                             }
                            ?>
                        </div>
                        </div>
                          <?php
                        }
                      }
                      else
                      {
                      ?>

                      <div class="more_claimants">
                        <h3>Claimant 1</h3>
                        <div class="space-4"></div>
                        <div class='form-group'> 
                          <label for='claimant_type' class='col-sm-3 control-label no-padding-right'> Claimant Type </label>
                          <div class='col-sm-9'> 
                            <!-- <input type='radio' id='claimant_type' name='claimant_type' <?php if($data['claimant_type']=='pedestrian'){echo 'checked=checked';}?> value='pedestrian'>  Pedestrian
                            <input type='radio' id='claimant_type' name='claimant_type' <?php if($data['claimant_type']=='driver'){echo 'checked=checked';}?> value='driver'>  Driver -->
                            <select name="claimant_type[]" id="" class="col-xs-10 col-sm-5" onchange="claimantType(this.value,this)">
                              <option <?php if($data['claimant_type']=='None'){ echo "selected";}?> value='None'> Select</option>
                              <option <?php if($data['claimant_type']=='PD'){ echo "selected";}?> value='PD'> Property Damage (PD)</option>
                              <option <?php if($data['claimant_type']=='BI'){ echo "selected";}?> value='BI'> Bodily Injury (BI)</option>
                            </select>
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_position' class='col-sm-3 control-label no-padding-right'> Person</label>
                          <div class='col-sm-9'> 
                            <select name='claimant_position[]' id='claimant_position' class='col-xs-10 col-sm-5'>
                              <option <?php if($data['claimant_position']=='None'){ echo "selected";}?> value='None'> Select</option>
 <option <?php if($data['claimant_position'][$i]=='Owner'){ echo "selected";}?> value='Owner'> Owner</option>
                              <option <?php if($data['claimant_position']=='Driver'){ echo "selected";}?> value='Driver'> Driver</option>
                              <option <?php if($data['claimant_position']=='Passenger'){ echo "selected";}?> value='Passenger'> Passenger</option>
                              <option <?php if($data['claimant_position']=='Pedestrian'){ echo "selected";}?> value='Pedestrian'> Pedestrian</option>
                              <option <?php if($data['claimant_position']=='Motorcyclist'){ echo "selected";}?> value='Motorcyclist'> Motorcyclist</option>
                              <option <?php if($data['claimant_position']=='Bicyclist'){ echo "selected";}?> value='Bicyclist'> Bicyclist</option>
                            </select>
                          </div>
                        </div>
                                                <div class='form-group'> 
                          <label for='claimant_company' class='col-sm-3 control-label no-padding-right'>  Company </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_company' class='col-xs-10 col-sm-5 tortfeasor_company
' placeholder='' name='claimant_company[]' value='<?php echo $data['claimant_company'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_dot' class='col-sm-3 control-label no-padding-right'>  DOT# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_dot' class='col-xs-10 col-sm-5' placeholder='' name='claimant_dot[]' value='<?php echo $data['claimant_dot'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_lp' class='col-sm-3 control-label no-padding-right'>  L/P# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_lp' class='col-xs-10 col-sm-5' placeholder='' name='claimant_lp[]' value='<?php echo $data['claimant_lp'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_vin' class='col-sm-3 control-label no-padding-right'>  Vin# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_vin' class='col-xs-10 col-sm-5' placeholder='' name='claimant_vin[]' value='<?php echo $data['claimant_vin'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_dl' class='col-sm-3 control-label no-padding-right'>  D/L# </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_dl' class='col-xs-10 col-sm-5' placeholder='' name='claimant_dl[]' value='<?php echo $data['claimant_dl'][$i];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_first_name' class='col-sm-3 control-label no-padding-right'>  First Name </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_first_name' class='col-xs-10 col-sm-5 recovery_fname' placeholder='' name='claimant_firstname[]' value='<?php echo $data['claimant_firstname'];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_last_name' class='col-sm-3 control-label no-padding-right'>   Last Name </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_last_name' class='col-xs-10 col-sm-5 recovery_lname' placeholder='' name='claimant_lastname[]' value='<?php echo $data['claimant_lastname'];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_street' class='col-sm-3 control-label no-padding-right'> Street </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_street' class='col-xs-10 col-sm-5' placeholder='' name='claimant_street[]' value='<?php echo $data['claimant_street'];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_city' class='col-sm-3 control-label no-padding-right'>  City </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_city' class='col-xs-10 col-sm-5' placeholder='' name='claimant_city[]' value='<?php echo $data['claimant_city'];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_state' class='col-sm-3 control-label no-padding-right'>   State </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_state' class='col-xs-10 col-sm-5' placeholder='' name='claimant_state[]' value='<?php echo $data['claimant_state'];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_zip' class='col-sm-3 control-label no-padding-right'>Zip </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_zip' class='col-xs-10 col-sm-5' placeholder='' name='claimant_zip[]' value='<?php echo $data['claimant_zip'];?>'> 
                          </div>
                        </div>
                        <div class='form-group' style='display:none;'> 
                          <label for='claimant_country' class='col-sm-3 control-label no-padding-right'> Country </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_country' class='col-xs-10 col-sm-5' placeholder='' name='claimant_country[]' value='<?php echo $data['claimant_country'];?>'> 
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
                            <input type='text' id='claimant_cell_phone' class='col-xs-10 col-sm-5' placeholder='' name='claimant_cellphone[]' value='<?php echo $data['claimant_mobile'];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_email' class='col-sm-3 control-label no-padding-right'>   Email </label>
                          <div class='col-sm-9'> 
                            <input type='text' id='claimant_email' class='col-xs-10 col-sm-5' placeholder='' name='claimant_email[]' value='<?php echo $data['claimant_email'];?>'> 
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='claimant_claimment' class='col-sm-3 control-label no-padding-right'>   Statement </label>
                          <div class='col-sm-9'> 
                            <textarea id='claimant_claimment' class='col-xs-10 col-sm-5' placeholder='' name='claimant_statement[]' ><?php echo $data['claimant_statement'];?></textarea>
                          </div>
                        </div>
<div class='form-group'> 
                          <label for='vehicle_description' class='col-sm-3 control-label no-padding-right'>   Vehicle Description</label>
                          <div class='col-sm-9'> 
                            <textarea id='vehicle_description' class='col-xs-10 col-sm-5' placeholder='' name='vehicle_description[]' ><?php echo $data['vehicle_description'][$i];?></textarea>
                          </div>
                        </div>
                        <div class='form-group'> 
                          <label for='attorney' class='col-sm-3 control-label no-padding-right'>  Attorney </label>
                          <div class='col-sm-9'>
                            <input type="radio" name="claimant_attorney1" value="No" <?php if($data['claimant_attorney']=='No'){ echo "echo checked = 'checked'" ;}?> onclick="attorneyBoxes(this.value,this);"> No
                            <input type="radio" name="claimant_attorney1" value="Yes" <?php if($data['claimant_attorney']=='Yes'){ echo "echo checked = 'checked'" ;}?> onclick="attorneyBoxes(this.value,this);"> Yes 
                            <!-- <input type='text' id='claimant_attorney' class='col-xs-10 col-sm-5' placeholder='Enter Attorney' name='claimant_attorney' value='<?php echo $data['claimant_attorney'];?>'>  -->
                          </div>
                        </div>
                        <div class="claimant_modal modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Claimant Attorney</h4>
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
                  <input type='number' id='claimant_attorney_phone' class='col-xs-10 col-sm-7' placeholder='Enter Phone.' name='claimant_attorney_phone[]' value='<?php echo $data['claimant_attorney_phone'];?>' min='0'> 
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
                                  <input type='checkbox' class='ace input-sm' name='claimant_injured[]' value="Yes" <?php if($data['claimant_injured']=="Yes"){ echo "checked='checked'"; } ?> onclick="isClaimantInjured(this)"> 
                                  <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                                  Yes
                                </label>
                              </div>
                            </div>
                            <div class='form-group'> 
                              <label for='claimant_ME' class='col-sm-3 control-label no-padding-right'>  Medicare Eligible </label>
                              <div class='col-sm-9'> 
                                <label class="block pull-left">
                                  <input type='checkbox' class='claimant_ME ace input-sm' class='ace input-sm' name='claimant_ME[]' value="Yes" <?php if($data['claimant_ME']=="Yes"){ echo "checked='checked'"; } ?> onclick="isME(this)"> 
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
                                      <input type='radio' id='claimant_gender' class='ace input-sm' name='claimant_gender' value="Male" <?php if($data['claimant_gender']=="Male"){ echo "checked='checked'"; } ?>> 
                                      <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                                      Male
                                    </label>
                                    <label class="block pull-left">
                                      <input type='radio' id='claimant_gender' class='ace input-sm' name='claimant_gender' value="Male" <?php if($data['claimant_gender']=="Female"){ echo "checked='checked'"; } ?>> 
                                      <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                                      Female
                                    </label>
                                  </div>
                                </div>
                            </div>
                            <div id="ME_div" class="ME_div"></div>

                        </div>
                        </div>
                        <?php
                      }
                      ?>
                        <!--  -->
                      </div>
                    </div>
                    <div id="PD_div" <?php if(in_array("Police_Department", $person_involved_val)){ echo "style='display:block;'"; }?>>
                      <div class="widget-header">
                        <h4 class="widget-title">Police Department</h4>
                      </div>
                      <div class="space-4"></div>
                      <div class='form-group'> 
                        <label for='police_dpt' class='col-sm-3 control-label no-padding-right'>  Yes/No </label>
                        <div class='col-sm-9'> 
                          <input type='radio' id='police_dpt' name='police_dpt' <?php if($data['police_involvment']=='Yes'){echo 'checked=checked';}?> value='Yes'>  Yes
                          <input type='radio' id='police_dpt' name='police_dpt' <?php if($data['police_involvment']=='No'){echo 'checked=checked';}?> value='No'>  No
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='pd_phone' class='col-sm-3 control-label no-padding-right'>  Phone no.</label>
                        <div class='col-sm-9'> 
                          <input type='number' id='pd_phone' class='col-xs-10 col-sm-5' placeholder='Enter Phone' name='pd_phone' value='<?php echo $data['pd_phone'];?>' min='0'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='pd_report' class='col-sm-3 control-label no-padding-right'>  Report no.</label>
                        <div class='col-sm-9'> 
                          <input type='text' id='pd_report' class='col-xs-10 col-sm-5' placeholder='Enter Report' name='pd_report' value='<?php echo $data['pd_report'];?>' min='0'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='which_dpt' class='col-sm-3 control-label no-padding-right'>  Which Department </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='which_dpt' class='col-xs-10 col-sm-5' placeholder='Enter Department' name='which_dpt' value='<?php echo $data['which_department'];?>'> 
                        </div>
                      </div>
                      
                      <div class='form-group'> 
                        <label for='any_citations' class='col-sm-3 control-label no-padding-right'>  Any citations </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='any_citations' class='col-xs-10 col-sm-5' placeholder='Enter Any Citations' name='any_citations' value='<?php echo $data['citations_who'];?>'> 
                        </div>
                      </div>
                    </div>
                    <!-- <div id="CSP_div" <?php if(in_array("CSP", $person_involved_val)){ echo "style='display:block;'"; }?>>
                      <div class="widget-header">
                        <h4 class="widget-title">CSP</h4>
                      </div>
                      <div class="space-4"></div>
                      <div class='form-group'> 
                        <label for='driver_id' class='col-sm-3 control-label no-padding-right'>  Driver Id </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='driver_id' class='col-xs-10 col-sm-5' placeholder='Enter Driver Id' name='csp_driverid' value='<?php echo $data['csp_driverid'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='driver_type' class='col-sm-3 control-label no-padding-right'>  Driver Type </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='driver_type' class='col-xs-10 col-sm-5' placeholder='Enter Driver Type' name='csp_drivertype' value='<?php echo $data['csp_drivertype'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='first_name' class='col-sm-3 control-label no-padding-right'>  First Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='first_name' class='col-xs-10 col-sm-5' placeholder='Enter First Name' name='csp_firstname' value='<?php echo $data['csp_firstname'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='last_name' class='col-sm-3 control-label no-padding-right'>  Last Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='last_name' class='col-xs-10 col-sm-5' placeholder='Enter Last Name' name='csp_lastname' value='<?php echo $data['csp_lastname'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='cell_phone' class='col-sm-3 control-label no-padding-right'>  Cell Phone </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='cell_phone' class='col-xs-10 col-sm-5' placeholder='Enter Cell Phone No.' name='csp_cellphone' value='<?php echo $data['csp_mobile'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='driver_email' class='col-sm-3 control-label no-padding-right'>  Driver Email </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='driver_email' class='col-xs-10 col-sm-5' placeholder='Enter Driver Email' name='csp_driveremail' value='<?php echo $data['csp_email'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='contractor_DBA' class='col-sm-3 control-label no-padding-right'>  Contractor DBA </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='contractor_DBA' class='col-xs-10 col-sm-5' placeholder='Enter Contractor DBA' name='contractor_dba' value='<?php echo $data['contractor_dba'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='AO_first_name' class='col-sm-3 control-label no-padding-right'>  AO First Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='AO_first_name' class='col-xs-10 col-sm-5' placeholder='Enter AO First Name' name='ao_firstname' value='<?php echo $data['ao_firstname'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='AO_last_name' class='col-sm-3 control-label no-padding-right'>  AO Last Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='AO_last_name' class='col-xs-10 col-sm-5' placeholder='Enter AO Last Name' name='ao_lastname' value='<?php echo $data['ao_lastname'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='AO_email' class='col-sm-3 control-label no-padding-right'>  AO Email </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='AO_email' class='col-xs-10 col-sm-5' placeholder='Enter AO Email' name='ao_email' value='<?php echo $data['ao_email'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='attorney' class='col-sm-3 control-label no-padding-right'>  Attorney </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='attorney' class='col-xs-10 col-sm-5' placeholder='Enter Attorney' name='csp_attorney' value='<?php echo $data['csp_attorney'];?>'> 
                        </div>
                      </div>
                    </div> -->
                    <div id="emp_div" <?php if(in_array("Emp_Contracter", $person_involved_val)){ echo "style='display:block;'"; }?>>
                      <div class="widget-header">
                        <h4 class="widget-title">Emp/Contractor</h4>
                      </div>
                      <div class="space-4"></div>
                      <div class='form-group'> 
                        <label for='emp_con_name' class='col-sm-3 control-label no-padding-right'> First Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='emp_con_name' class='col-xs-10 col-sm-5' placeholder='Enter First Name' name='emp_con_name' value='<?php echo $data['emp_con_name'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='emp_con_lname' class='col-sm-3 control-label no-padding-right'> Last Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='emp_con_lname' class='col-xs-10 col-sm-5' placeholder='Enter Last Name' name='emp_con_lname' value='<?php echo $data['emp_con_lname'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='emp_con_id' class='col-sm-3 control-label no-padding-right'> Emp/Contractor Id </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='emp_con_id' class='col-xs-10 col-sm-5' placeholder='Enter Id' name='emp_con_id' value='<?php echo $data['emp_con_id'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='emp_con_cell' class='col-sm-3 control-label no-padding-right'> Emp/Contractor Phone no.</label>
                        <div class='col-sm-9'> 
                          <input type='text' id='emp_con_cell' class='col-xs-10 col-sm-5' placeholder='Enter Phone No.' name='emp_con_cell' value='<?php echo $data['emp_con_cell'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='emp_con_email' class='col-sm-3 control-label no-padding-right'>  Emp/Contractor Email </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='emp_con_email' class='col-xs-10 col-sm-5' placeholder='Enter Email' name='emp_con_email' value='<?php echo $data['emp_con_email'];?>'> 
                        </div>
                      </div>
                    </div>
                    <div id="Insd_driver" <?php if(in_array("Insured_driver", $person_involved_val)){ echo "style='display:block;'"; }?>>
                      <!-- <div class="widget-header">
                        <h4 class="widget-title">Insured Driver</h4>
                      </div>
                      <div class="space-4"></div>
                      <div class='form-group'> 
                        <label for='ins_driver_id' class='col-sm-3 control-label no-padding-right'> Driver Id </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='ins_driver_id' class='col-xs-10 col-sm-5' placeholder='Enter Id' name='ins_driver_id' value='<?php echo $data['ins_driver_id'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='ins_first_name' class='col-sm-3 control-label no-padding-right'> First Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='ins_first_name' class='col-xs-10 col-sm-5' placeholder='Enter First Name' name='ins_first_name' value='<?php echo $data['ins_first_name'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='ins_last_name' class='col-sm-3 control-label no-padding-right'> Last Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='ins_last_name' class='col-xs-10 col-sm-5' placeholder='Enter Last Name' name='ins_last_name' value='<?php echo $data['ins_last_name'];?>'> 
                        </div>
                      </div> -->
                      <div class="widget-header">
                        <h4 class="widget-title">Insured Driver</h4>
                      </div>
                      <div class="space-4"></div>
                      <div class='form-group'> 
                        <label for='driver_id' class='col-sm-3 control-label no-padding-right'>  Driver Id </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='driver_id' class='col-xs-10 col-sm-5' placeholder='Enter Driver Id' name='csp_driverid' value='<?php echo $data['csp_driverid'];?>'> 
                        </div>
                      </div>
					<div class='form-group'> 
						<label for='driver_type' class='col-sm-3 control-label no-padding-right'>  Driver Type </label>
						<div class='col-sm-9'>                          
					<?php
						if($data['csp_drivertype'] == 'C' || $data['csp_drivertype'] == 'E' || $data['csp_drivertype'] == ''){
						?>
							<select name="csp_drivertype" id="driver_type" class="col-xs-10 col-sm-5">	  
								<option  value='C' <?php echo ($data['csp_drivertype'] == 'C')?'selected':''?>> Contractor </option>
								<option  value='E' <?php echo ($data['csp_drivertype'] == 'E')?'selected':''?>> Employee (OPCO) </option>
							</select>
							<?php }else{
						echo "<input type='text' id='driver_type' class='col-xs-10 col-sm-5' placeholder='Enter Driver Type' name='csp_drivertype' value='".$data['csp_drivertype']."'>'";
					}?>						  
						</div>
					</div>
                      <div class='form-group'> 
                        <label for='first_name' class='col-sm-3 control-label no-padding-right'>  First Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='first_name' class='col-xs-10 col-sm-5' placeholder='Enter First Name' name='csp_firstname' value='<?php echo $data['csp_firstname'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='last_name' class='col-sm-3 control-label no-padding-right'>  Last Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='last_name' class='col-xs-10 col-sm-5' placeholder='Enter Last Name' name='csp_lastname' value='<?php echo $data['csp_lastname'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='cell_phone' class='col-sm-3 control-label no-padding-right'>  Phone no. </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='cell_phone' class='col-xs-10 col-sm-5' placeholder='Enter Phone No.' name='csp_cellphone' value='<?php echo $data['csp_mobile'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='driver_email' class='col-sm-3 control-label no-padding-right'>  Driver Email </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='driver_email' class='col-xs-10 col-sm-5' placeholder='Enter Driver Email' name='csp_driveremail' value='<?php echo $data['csp_email'];?>'> 
                        </div>
                      </div>
                      <div class='form-group' > 
                        <label for='f_m_first_name' class='col-sm-3 control-label no-padding-right'>  Fleet Manager First Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='f_m_first_name' class='col-xs-10 col-sm-5' placeholder='Enter First Name' name='f_m_first_name' value='<?php echo $data['f_m_first_name'];?>'> 
                        </div>
                      </div>
                      <div class='form-group' > 
                        <label for='f_m_last_name' class='col-sm-3 control-label no-padding-right'>  Fleet Manager Last Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='f_m_last_name' class='col-xs-10 col-sm-5' placeholder='Enter Last Name' name='f_m_last_name' value='<?php echo $data['f_m_last_name'];?>'> 
                        </div>
                      </div>
                      <div class='form-group' > 
                        <label for='f_m_phone' class='col-sm-3 control-label no-padding-right'>  Fleet Manager Phone no.</label>
                        <div class='col-sm-9'> 
                          <input type='text' id='f_m_phone' class='col-xs-10 col-sm-5' placeholder='Enter Phone' name='f_m_phone' value='<?php echo $data['f_m_phone'];?>'> 
                        </div>
                      </div>
                      <div class='form-group' > 
                        <label for='f_m_email' class='col-sm-3 control-label no-padding-right'>  Fleet Manager Email </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='f_m_email' class='col-xs-10 col-sm-5' placeholder='Enter Email' name='f_m_email' value='<?php echo $data['f_m_email'];?>'> 
                        </div>
                      </div>
                      <div class='form-group' style="display:none;"> 
                        <label for='contractor_DBA' class='col-sm-3 control-label no-padding-right'>  Contractor DBA </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='contractor_DBA' class='col-xs-10 col-sm-5' placeholder='Enter Contractor DBA' name='contractor_dba' value='<?php echo $data['contractor_dba'];?>'> 
                        </div>
                      </div>
                      <div class='form-group' style="display:none;"> 
                        <label for='AO_first_name' class='col-sm-3 control-label no-padding-right'>  AO First Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='AO_first_name' class='col-xs-10 col-sm-5' placeholder='Enter AO First Name' name='ao_firstname' value='<?php echo $data['ao_firstname'];?>'> 
                        </div>
                      </div>
                      <div class='form-group' style="display:none;"> 
                        <label for='AO_last_name' class='col-sm-3 control-label no-padding-right'>  AO Last Name </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='AO_last_name' class='col-xs-10 col-sm-5' placeholder='Enter AO Last Name' name='ao_lastname' value='<?php echo $data['ao_lastname'];?>'> 
                        </div>
                      </div>
                      <div class='form-group' style="display:none;"> 
                        <label for='AO_email' class='col-sm-3 control-label no-padding-right'>  AO Email </label>
                        <div class='col-sm-9'> 
                          <input type='text' id='AO_email' class='col-xs-10 col-sm-5' placeholder='Enter AO Email' name='ao_email' value='<?php echo $data['ao_email'];?>'> 
                        </div>
                      </div>
                      <div class='form-group'> 
                        <label for='attorney' class='col-sm-3 control-label no-padding-right'>  Attorney </label>
                        <div class='col-sm-9'> 
                         <input type="radio" name="csp_attorney" value="No" <?php if($data['csp_attorney']=='No'){ echo "echo checked = 'checked'" ;}?> onclick="attorneyBox(this.value,'csp');"> No
                          <input type="radio" name="csp_attorney" value="Yes" <?php if($data['csp_attorney']=='Yes'){ echo "echo checked = 'checked'" ;}?> onclick="attorneyBox(this.value,'csp');"> Yes
                          <!-- <input type='text' id='attorney' class='col-xs-10 col-sm-5' placeholder='Enter Attorney' name='csp_attorney' value='<?php echo $data['csp_attorney'];?>'> --> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="menu3" class="tab-pane fade">
                  
                  <div class='form-group'> 
<?php
                    if($_SESSION['user']=='arcclaims' or in_array(9, $_SESSION['access_functions']))
                    {
                    ?>
                  <button id="his_pay" type="button" onclick="getPaymentHistory();">Payment History</button>
                  <?php
}
                    if($_SESSION['user']=='arcclaims' or in_array(8, $_SESSION['access_functions']))
                    {
                        ?>
                            <span id='if_status'>
                                <button type="button" id="add_fund" <?php if($data['status']=='Closed'){ ?> class="disabled" disabled="" data-toggle="tooltip" title="Sorry! payment cannot be add when a claim is closed." <?php } ?>>Add Payment</button>
                            </span>
                            
                      <button id="set_reserve_btn" type="button" <?php if($data['status']=='Closed'){ ?> class="disabled" disabled="" data-toggle="tooltip" title="Sorry! Reserve cannot be add when a claim is closed." <?php } ?>>Set Reserve</button>
                      <button id="approve_reserve_btn" type="button">Approve Reserve</button>
					  <button id="approve_recovery_btn" type="button">Recovery</button>
                    <?php
                    }
                    ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                    $("#add_fund").on("click", function(){ 
                      $("#fund_add").css({"display":"block"});
                      $("#pay_his").css({"display":"none"});
                      $("#reserve_his").css({"display":"none"});
					  $("#recovery_add").css({"display":"none"});
                    });
					// When Clicks on recovery button
					$("#approve_recovery_btn").on("click", function(){
					  var c_no = '<?php  echo $data["claim_no"];?>';
                      $("#recovery_add").css({"display":"block"});
                      $("#pay_his").css({"display":"none"});
                      $("#reserve_his").css({"display":"none"});
		      $("#fund_add").css({"display":"none"});	
                     var r_c = $(".tortfeasor_company").val();  
                     var r_fn = $(".recovery_fname").val();  
                     var r_ln = $(".recovery_lname").val(); 
                     var caid = $("#claim_autoid").val();
                       $.post("<?php echo base_url();?>claims/setRecovery/", {"claim_no":'<?php  echo $claim_no;?>','rc':r_c,'rfn':r_fn,'rln':r_ln,'cid':caid}, function(data){
                      $("#recovery_add").html(data);
                        });				  				  
                    });
                      var c_no = '<?php  echo $data["claim_no"];?>';
                      var status = '<?php  echo $data["status"];?>';
                    
                    $.post("<?php echo base_url();?>claims/reserveTotal/"+c_no+"", {"status":status}, function(data){
                      $("#reserve_his").html(data);
                      var incurred_total = 0;
                      incurred_total = $("#incurred_total").val();
                      var user_range = <?php print($approve);?>;//console.log(incurred_total);console.log(user_range);
                      if(incurred_total>user_range || user_range==0)
                      {
                        $("#approve_reserve_btn").hide();
                      }else
                      {
                        $("#approve_reserve_btn").show();
                      }
                    });
                    
                  </script>
                    </div>
                    <div id="reserve_his">
                    </div>
                    <div id="pay_his"></div>

                  <div id="fund_add" style="display:none;">
                    <div class='form-group'> 
                      <label for='dob' class='col-sm-3 control-label no-padding-right'>Date Of Birth</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='dob' class='col-xs-10 col-sm-5 hasDatepicker datepicker' placeholder='Enter Date Of Birth' name='dob' > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='social_security_number' class='col-sm-3 control-label no-padding-right'>Social Security number</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='social_security_number' class='col-xs-10 col-sm-5' placeholder='Enter Social Security number' name='social_security_number' > 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='medicare_eligible' class='col-sm-3 control-label no-padding-right'>Medicare Eligible</label>
                      <div class='col-sm-9'> 
                     <input type='radio' name='medicare_eligible' value="Yes"> Yes
                     <input type='radio' name='medicare_eligible' value="No"> No
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='back_account' class='col-sm-3 control-label no-padding-right'>Bank Account</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='back_account' class='col-xs-10 col-sm-5' placeholder='Enter Bank Account.' name='back_account' value='<?php echo $data['back_account'];?>'> 
                      </div>
                    </div>




                    <div class='form-group'> 
                      <label for='trans_date' class='col-sm-3 control-label no-padding-right'>Transaction Date</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='trans_date' class='col-xs-10 col-sm-5 hasDatepicker datepicker' placeholder='Enter Transaction Date.' name='trans_date' value='<?php echo $data['trans_date'];?>'> 
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="payee_type" class="col-sm-3 control-label no-padding-right"> Payee Type </label>
                      <div class="col-sm-9">
                        <select name="payee_type" id="payee_type" class="col-xs-10 col-sm-5" onchange="changeBalance(this.value);">
                          <option  value='select' > Select </option>
                          <option <?php if($data['payee_type']=='PD'){ echo "selected";}?> value='PD'> Property Damage (PD)</option>
                          <option <?php if($data['payee_type']=='BI'){ echo "selected";}?> value='BI'> Bodily Injury (BI)</option>
                          <option <?php if($data['payee_type']=='LE'){ echo "selected";}?> value='LE'> Legal Expense (LE)</option>
                          <option <?php if($data['payee_type']=='ALAE'){ echo "selected";}?> value='ALAE'> ALAE</option>
                          <option <?php if($data['payee_type']=='OPD'){ echo "selected";}?> value='OPD'>Owned Physical Damage (OPD)</option>
                        </select>
                        <div class="col-xs-10 col-sm-7">
                            <div class="alert alert-sm alert-danger"  id="reservError" style="margin-bottom:0px;padding:5px;display:none;">
                                <button onclick="hideError(this)"  class="close" type="button">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                Please make sure to enter paid or collection amount!
                            </div>
                        </div>
                      </div>
                    </div>               
                    <div class='form-group' style="display:none;"> 
                      <label for='f_balance' class='col-sm-3 control-label no-padding-right'>Balance</label>
                      <div class='col-sm-9'> 
                      <input type='hidden' id='f_balance' class='col-xs-10 col-sm-5 '  placeholder='' name='f_balance'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_paid' class='col-sm-3 control-label no-padding-right'>Paid</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_paid' class='col-xs-10 col-sm-5 ' onchange="checkPaidAmount()" placeholder='Enter Paid.' name='f_paid' value='<?php echo $data['f_paid'];?>' max=""> 
                        <div class="col-xs-10 col-sm-7">
                            <div class="alert alert-sm alert-danger"  id="payError" style="margin-bottom:0px;padding:5px;display:none;">
                                <button onclick="hideError(this)"  class="close" type="button">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                Check reserve, enter a valid paid or collection amount!
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class='form-group'> 
                      <label for='f_collection' class='col-sm-3 control-label no-padding-right'>Collection</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='f_collection' class='col-xs-10 col-sm-5 ' placeholder='Enter Collection.' name='f_collection' value='<?php echo $data['f_collection'];?>' onchange="checkCollectionAmount()"> 
                      </div>
                    </div>
                    <div class='form-group' style="display:none;"> 
                      <label for='f_incurred' class='col-sm-3 control-label no-padding-right'>Incurred</label>
                      <div class='col-sm-9'> 
                      <input type='number' id='f_incurred' class='col-xs-10 col-sm-5 ' placeholder='Enter Incurred.' name='f_incurred' value='<?php echo $data['f_incurred'];?>' min='0'> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="f_status" class="col-sm-3 control-label no-padding-right"> Status </label>
                      <div class="col-sm-9">
                        <select name="f_status" id="f_status" class="col-xs-10 col-sm-5">
                          <option <?php if($data['f_status']=='Closed'){ echo "selected";}?> value='Closed'> Closed</option>
                          <option <?php if($data['f_status']=='Pending'){ echo "selected";}?> value='Pending'> Pending</option>
                        </select>
                      </div>
                    </div>                    
                    <div class='form-group'> 
                      <label for='f_first_name' class='col-sm-3 control-label no-padding-right'>First Name</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_first_name' class='col-xs-10 col-sm-5' placeholder='Enter First Name.' name='f_first_name' value='<?php echo $data['f_first_name'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_last_name' class='col-sm-3 control-label no-padding-right'>Last Name</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_last_name' class='col-xs-10 col-sm-5' placeholder='Enter Last Name.' name='f_last_name' value='<?php echo $data['f_last_name'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='tax_id' class='col-sm-3 control-label no-padding-right'>Tax ID</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='tax_id' class='col-xs-10 col-sm-5' placeholder='Enter Tax Id.' name='tax_id' value='<?php echo $data['tax_id'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_address1' class='col-sm-3 control-label no-padding-right'>Address 1</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_address1' class='col-xs-10 col-sm-5' placeholder='Enter Address.' name='f_address1' value='<?php echo $data['f_address1'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_address2' class='col-sm-3 control-label no-padding-right'>Address 2</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_address2' class='col-xs-10 col-sm-5' placeholder='Enter Address.' name='f_address2' value='<?php echo $data['f_address2'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_city' class='col-sm-3 control-label no-padding-right'>City</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_city' class='col-xs-10 col-sm-5' placeholder='Enter City.' name='f_city' value='<?php echo $data['f_city'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_state' class='col-sm-3 control-label no-padding-right'>Sate</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_state' class='col-xs-10 col-sm-5' placeholder='Enter State.' name='f_state' value='<?php echo $data['f_state'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_zip' class='col-sm-3 control-label no-padding-right'>Zip</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_zip' class='col-xs-10 col-sm-5' placeholder='Enter Zip.' name='f_zip' value='<?php echo $data['f_zip'];?>'> 
                      </div>
                    </div>
                    <div class='form-group' style='display:none;'> 
                      <label for='f_country' class='col-sm-3 control-label no-padding-right'>Country</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_country' class='col-xs-10 col-sm-5' placeholder='Enter Country.' name='f_country' value='<?php echo $data['f_country'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'>  
                      <label for='f_enclosure' class='col-sm-3 control-label no-padding-right'>  Enclosure </label>
                      <div class='col-sm-9'> 
                        <input type="checkbox" value="f_enclosure" name="f_enclosure" id="f_enclosure" class="ace input-lg" value="Yes"> 
                        <span class="lbl bigger-120" style="margin-top:5px;"> </span>  
                      </div> 
                    </div>
                    <div class='form-group'>  
                      <label for='f_auto_check' class='col-sm-3 control-label no-padding-right'>  Auto Check? </label>
                      <div class='col-sm-9'> 
                        <input type="checkbox" value="f_auto_check" name="f_auto_check" id="f_auto_check" class="ace input-lg"    value="Yes"> 
                        <span class="lbl bigger-120" style="margin-top:5px;"> </span> 
                      </div> 
                    </div>
                    <div class='form-group'> 
                      <label for='f_check_status' class='col-sm-3 control-label no-padding-right'>Check Status</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_check_status' class='col-xs-10 col-sm-5' placeholder='Enter Check Status.' name='f_check_status' value='<?php echo $data['f_check_status'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_check_date' class='col-sm-3 control-label no-padding-right'>Check Date</label>
                      <div class='col-sm-9'> 
                      <input type='text' id='f_check_date' class='col-xs-10 col-sm-5 hasDatepicker datepicker' placeholder='Enter Check Date.' name='f_check_date' value='<?php echo $data['f_check_date'];?>'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_check_no' class='col-sm-3 control-label no-padding-right'>Check Number</label>
                      <div class='col-sm-9'> 
                        <input type='number' id='f_check_no' class='col-xs-10 col-sm-5' placeholder='Enter Check Number.' name='f_check_no' value='<?php echo $data['f_check_no'];?>' min='0'> 
                      </div>
                    </div>
                    <div class='form-group'> 
                      <label for='f_check_memo' class='col-sm-3 control-label no-padding-right'>Check Memo</label>
                      <div class='col-sm-9'> 
                        <input type='text' id='f_check_memo' class='col-xs-10 col-sm-5' placeholder='Enter Check Memo.' name='f_check_memo' value='<?php echo $data['f_check_memo'];?>'> 
                      </div>
                    </div>
                    </div>
<div id="recovery_add" style="display:none;">
									
            </div>

                  </div>
                  <div id="menu4" class="tab-pane fade">
<?php
if($_SESSION['user']=='arcclaims' or in_array(4, $_SESSION['access_functions']))
{
?>
  <button class="btn btn-xs btn-info" id="add_notes" type="button">Add Notes</button>
<?php
}
if($_SESSION['user']=='arcclaims' or in_array(13, $_SESSION['access_functions']))
{
?>
                &nbsp;<button class="btn btn-xs btn-primary" onclick="addDiary()" id="add_diary" type="button">Add Diary</button>
<?php
}
if($_SESSION['user']=='arcclaims' or in_array(4, $_SESSION['access_functions']))
{
?>
  <button class="btn btn-xs btn-info" id="display_all_notes" type="button">All Notes</button>
<?php
}
?>

                <span class="notes_msg"></span>
                    <div id="all_notes"> 
                    </div>
                    <div class='form-group' style="display:none;"> 
                      <label for='notes_date' class='col-sm-3 control-label no-padding-right'></label>
                      <div class='col-sm-9'> 
                        <input type='text' id='notes_date' class='col-xs-10 col-sm-5 date-timepicker1'  name='notes_date' value='<?php echo $data['notes_date'];?>' placeholder="Enter Date" >
                      </div>
                    </div>
                    <div class='form-group' style="display:none;"> 
                      <label for='note_name' class='col-sm-3 control-label no-padding-right'></label>
                      <div class='col-sm-9'> 
                        <input type='text' id='note_name' class='col-xs-10 col-sm-5 '  name='note_name' value='<?php echo $data['note_name'];?>' placeholder="Enter Name">
                      </div>
                    </div>
                    <div class='form-group' style="display:none;"> 
                      <label for='notes' class='col-sm-3 control-label no-padding-right'></label>
                      <div class='col-sm-9'> 
                        <textarea id='notes' class='col-xs-10 col-sm-5' placeholder='Enter notes here' name='notes' ><?php echo $data['notes'];?></textarea>
                      </div>
                    </div>
                  </div>
<div id="menu5" class="tab-pane fade">
                    <div style="margin:20px;">
                    <?php
                    if($_SESSION['user']=='arcclaims' or in_array(11, $_SESSION['access_functions']))
                    {
                        $del = base64_encode("false");
                        if($_SESSION['user']=='arcclaims' or in_array(12, $_SESSION['access_functions']))
                    {
                        $del = base64_encode("true");
                    }
                    ?>
                        <iframe src="<?php echo $path.'&path='.$folderId.'&del='.$del; ?>" width="100%" height='700px'></iframe>
                        <?php
                    }else
                    {
                        echo "You don't have access to view this, Please contact admin! ";
                    }
                    ?>
                    </div>
                  </div>
                </div>
                <div class="space-4"></div>
  <div class="form-group col-sm-6">
<?php
if($data['id']!='')
{
?>
  <input type='button'  class="btn btn-info pull-right enabl upd" value="Update" onclick="return updateClaim();"/>
<?php
}else
{
?>
  <input type='button'  class="btn btn-primary pull-right sub" value="Submit"  onclick="return createFolder();"/>
<?php
}
?>

<script type="text/javascript">

    function updateClaim() {
        $(".upd").attr('disabled','true');
        var data = $("#insertClaim").serializeArray();
        var file_data = $('#attach_claim').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('attach_claim', file_data);
        $("form#insertClaim").serializeArray().forEach(function(field) {
          form_data.append(field.name, field.value);
        })
        var currentTab = $(".nav-tabs li.active").find('a').attr("href");
        var payee_type = $("#payee_type").val();   
         $.ajax({
                url: '<?php echo base_url();?>claims/claimUpdate/"', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(html){
                if(html==1){
                $("#updmsg").show();
                $('html,body').animate({
                        scrollTop: $("#updmsg").offset().top},
                        'slow');
                $(".upd").removeAttr('disabled');
                var cno = $("#claim_no").val();
                var status = $("#status").val();
                refreshfundstab(cno,status);
                if(payee_type!='select' && currentTab=='#menu3'){
                    $("#his_pay").trigger('click');
                }
                $("#payee_type").val("select");
                $("#f_paid").val("");
                $("#f_collection").val("");
            }else{
                $("#updmsg").html("Error, please try again!");
                $('html,body').animate({
                        scrollTop: $("#updmsg").offset().top},
                        'slow');
                $(".upd").removeAttr('disabled');
                if(payee_type!='select' && currentTab=='#menu3'){
                    $("#his_pay").trigger('click');
                }
                $("#payee_type").val("select");
                $("#f_paid").val("");
                $("#f_collection").val("");
            }
			$('#attach_claim').val('');
            callMap();
        }
        });
    }

function callMap()
{
    var location_address={'name':$("#loa_street").val()+" , "+$("#loa_city").val()+" , "+$("#loa_state").val()+" , "+$("#loa_zip").val()+" , "+$("#loa_country").val()};

 $.ajax({
        url: "<?php echo base_url()?>/claims/mapDisplay",
        type: "post",
        data:  location_address,
        success: function (response) {
           // you will get response from your php page (what you echo or print)   
            $("#mapDisplay").html(response);
        }
    });
}    

function refreshfundstab(c_no,status)
{
        $.post("<?php echo base_url();?>claims/reserveTotal/"+c_no+"", {"status":status}, function(data){
      $("#reserve_his").html(data);
      var incurred_total = 0;
      incurred_total = $("#incurred_total").val();
      var user_range = <?php print($approve);?>;console.log(incurred_total);console.log(user_range);
      if(incurred_total>user_range || user_range==0)
      {
        $("#approve_reserve_btn").hide();
        if(status=='Closed')
        {
            $("#set_reserve_btn").attr("disabled",true);
        }else
        {
            $("#set_reserve_btn").attr("disabled",false);
        }
      }
       var incurred_total1 =$("#incurred_total").val();
        var data_in = {"incurred_total1":incurred_total1}
        $.post("<?php echo base_url();?>claims/updateSetReserveIncurred/"+c_no+"", data_in, function(html){
        });
    });
}
</script>
  </div>
<div id="display_all_notes_div" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">All Notes</h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="display_all_notes_cont" style="height:300px;overflow-y:scroll;">
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
<div id="add_notes_div" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Add Notes</h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="cont" >
              <div class='form-group'> 
                <label for='notes_activity' class='col-sm-3 control-label no-padding-right'>Activity</label>
                <div class='col-sm-9'> 
                  <input type='text' id='notes_activity' class='col-xs-10 col-sm-7' name='notes_activity'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='notes_attach_to' class='col-sm-3 control-label no-padding-right'>Attach to</label>
                <div class='col-sm-9'> 
                  <input type='text' id='notes_attach_to' class='col-xs-10 col-sm-7' name='notes_attach_to' value='<?php if($data['id']!=''){ echo $data['claim_no']; }else{ echo $auto_gen_id; } ?>' disabled readonly> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='notes_type' class='col-sm-3 control-label no-padding-right'>Note Type</label>
                <div class='col-sm-9'> 
                  <input type='text' id='notes_type' class='col-xs-10 col-sm-7' name='notes_type' value=''> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='notes_text' class='col-sm-3 control-label no-padding-right'>  Text </label>
                <div class='col-sm-9'> 
                  <textarea id='notes_text' class='col-xs-10 col-sm-7' name='notes_text' ></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer wizard-actions">

          <button class="btn btn-danger btn-sm pull-right" data-dismiss="modal">
            <i class="ace-icon fa fa-times"></i>
            Close
          </button>
          <button class="btn btn-success btn-sm pull-right" data-dismiss="modal" onclick="addNotes()">
            <i class="ace-icon fa fa-check"></i>
            Ok
          </button>
        </div>
        </div>
      </div>
    </div>
</div>
<div id="witness" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Witness Attorney</h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="cont" >
              <div class='form-group'> 
                <label for='witness_attorney_name' class='col-sm-3 control-label no-padding-right'>Name</label>
                <div class='col-sm-9'> 
                  <input type='text' id='witness_attorney_name' class='col-xs-10 col-sm-7' placeholder='Enter Name.' name='witness_attorney_name' value='<?php echo $data['witness_attorney_name'];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='witness_attorney_phone' class='col-sm-3 control-label no-padding-right'>Phone no.</label>
                <div class='col-sm-9'> 
                  <input type='number' id='witness_attorney_phone' class='col-xs-10 col-sm-7' placeholder='Enter Phone.' name='witness_attorney_phone' value='<?php echo $data['witness_attorney_phone'];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='witness_attorney_phone' class='col-sm-3 control-label no-padding-right'>Email</label>
                <div class='col-sm-9'> 
                  <input type='text' id='witness_attorney_email' class='col-xs-10 col-sm-7' placeholder='Enter Email.' name='witness_attorney_email' value='<?php echo $data['witness_attorney_email'];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='witness_attorney_adds' class='col-sm-3 control-label no-padding-right'>   Address </label>
                <div class='col-sm-9'> 
                  <textarea id='witness_attorney_adds' class='col-xs-10 col-sm-7' placeholder='' name='witness_attorney_adds' ><?php echo $data['witness_attorney_adds'];?></textarea>
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

<div  class="modal claimants123">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Claimant Attorney</h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="cont123" >
              
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
<div id="csp" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Insured Driver Attorney</h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="cont" >
              <div class='form-group'> 
                <label for='csp_attorney_name' class='col-sm-3 control-label no-padding-right'>Name</label>
                <div class='col-sm-9'> 
                  <input type='text' id='csp_attorney_name' class='col-xs-10 col-sm-7' placeholder='Enter Name.' name='csp_attorney_name' value='<?php echo $data['csp_attorney_name'];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='csp_attorney_phone' class='col-sm-3 control-label no-padding-right'>Phone no.</label>
                <div class='col-sm-9'> 
                  <input type='number' id='csp_attorney_phone' class='col-xs-10 col-sm-7' placeholder='Enter Phone.' name='csp_attorney_phone' value='<?php echo $data['csp_attorney_phone'];?>' min='0'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='csp_attorney_email' class='col-sm-3 control-label no-padding-right'>Email</label>
                <div class='col-sm-9'> 
                  <input type='text' id='csp_attorney_email' class='col-xs-10 col-sm-7' placeholder='Enter Email.' name='csp_attorney_email' value='<?php echo $data['csp_attorney_email'];?>'> 
                </div>
              </div>
              <div class='form-group'> 
                <label for='csp_attorney_adds' class='col-sm-3 control-label no-padding-right'>   Address </label>
                <div class='col-sm-9'> 
                  <textarea id='csp_attorney_adds' class='col-xs-10 col-sm-7' placeholder='' name='csp_attorney_adds' ><?php echo $data['csp_attorney_adds'];?></textarea>
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
<div id="approve_reserve_div" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Approve Reserve</h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="reserve_approve_cont" >
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
<div id="approved_reserve_div" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Approved Reserves</h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="approved_reserve_cont" >
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
<div id="set_reserve_div" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="modal-wizard-container">
          <div class="modal-header">
            <div class="widget-header">
              <h4 class="widget-title">Set Reserve</h4>
            </div>
          </div>

          <div class="modal-body step-content">
            <div id="cont" >
              <div class="form-group">
                <label for="set_reserve" class="col-sm-3 control-label no-padding-right"> Reserve </label>
                <div class="col-sm-9">
                  <select name="set_reserve" id="set_reserve" class="col-xs-10 col-sm-7" onchange="setReserveFields(this.value)">
                    <option  value='BI'> BI-R1</option>
                    <option  value='PD'> PD-R2</option>
                    <option  value='LE'> LE-R3</option>
                    <option  value='ALAE'> ALAE-R4</option>
                    <option  value='OPD'> OPD-R5</option>
                  </select>
                </div>
              </div>
              <div class='form-group'> 
                <label for='reserve_funds' class='col-sm-3 control-label no-padding-right'>Funds</label>
                <div class='col-sm-9'> 
                  <input type='text' id='reserve_funds' class='col-xs-10 col-sm-7' placeholder='Enter Amount.' name='reserve_funds' onchnage="validateFundInput()"> 
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer wizard-actions">

          <button type="button" class="btn btn-danger btn-sm pull-right" id="closeSetModal" data-dismiss="modal">
            <i class="ace-icon fa fa-times"></i>
            Close
          </button>
          <button class="btn btn-success btn-sm pull-right hni rrts" type="button"  onclick="setReserves()">
            <i class="ace-icon fa fa-check"></i>
            Ok
          </button>
          <script type="text/javascript">
              function setReserves() {
                if(validateFundInput()){

                  var setReserve = $("#set_reserve").val();
                  var reserveFunds = $("#reserve_funds").val();
                  
                  switch (setReserve) {
                    case 'BI':
                      $("#BI_val").html("$"+reserveFunds+".00");
                      $("#BI_input").val(reserveFunds);
                      break;
                    case 'LE':
                      $("#LE_val").html("$"+reserveFunds+".00");
                      $("#LE_input").val(reserveFunds);
                      break;
                    case 'PD':
                      $("#PD_val").html("$"+reserveFunds+".00");
                      $("#PD_input").val(reserveFunds);
                      break;
                    case 'ALAE':
                      $("#ALAE_val").html("$"+reserveFunds+".00");
                      $("#ALAE_input").val(reserveFunds);
                      break;
                    case 'OPD':
                      $("#OPD_val").html("$"+reserveFunds+".00");
                      $("#OPD_input").val(reserveFunds);
                      break;
                    default:
                      break;
                  }
                  var BI_input = $("#BI_input").val();
                  var bi_paid_total = $("#bi_paid_total").val();
                  var bi_collection_total = $("#bi_collection_total").val();
                  var PD_input = $("#PD_input").val();
                  var pd_paid_total = $("#pd_paid_total").val();
                  var pd_collection_total = $("#pd_collection_total").val();
                  var LE_input = $("#LE_input").val();
                  var le_paid_total = $("#le_paid_total").val();
                  var le_collection_total = $("#le_collection_total").val();
                  var ALAE_input = $("#ALAE_input").val();
                  var alae_paid_total = $("#alae_paid_total").val();
                  var alae_collection_total = $("#alae_collection_total").val();
                  var OPD_input = $("#OPD_input").val();
                  var opd_paid_total = $("#opd_paid_total").val();
                  var opd_collection_total = $("#opd_collection_total").val();
                  var incurred_total = $("#incurred_total").val();
                  var set_reserve = $("#set_reserve").val();
                  var reserve_funds = $("#reserve_funds").val();
                  var opco1 = $("#rrts").val();
                  opco1 = opco1.split("~");
                  var opco = opco1[0];
                  var clmNO = '<?php echo $claim_no;?>';
                  var data = {"BI_input":BI_input,"bi_paid_total":bi_paid_total,"bi_collection_total":bi_collection_total,"PD_input":PD_input,"pd_paid_total":pd_paid_total,"pd_collection_total":pd_collection_total,"LE_input":LE_input,"le_paid_total":le_paid_total,"le_collection_total":le_collection_total,"ALAE_input":ALAE_input,"alae_paid_total":alae_paid_total,"alae_collection_total":alae_collection_total,"OPD_input":OPD_input,"opd_paid_total":opd_paid_total,"opd_collection_total":opd_collection_total,"incurred_total":incurred_total,"setReserve":setReserve,"set_reserve":set_reserve,"reserve_funds":reserve_funds,"action":"dynamic","rrts":opco};
                    $.post("<?php echo base_url();?>claims/manageReserves/"+clmNO+"", data, function(html){
                        $("#reserve_his").html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
                        $("#reserve_his").html(html);
                        var incurred_total1 = $("#incurred_total").val();
                      var incurred_totalkg = $("#incurred_total").val();
                      var user_rangekg = <?php print($approve);?>;console.log(incurred_totalkg);console.log(user_rangekg);
                      if(incurred_totalkg>user_rangekg || user_rangekg==0)
                      {
                        $("#approve_reserve_btn").hide();
                      }else
                      {
                        $("#approve_reserve_btn").show();
                      }
                        var data_in = {"incurred_total1":incurred_total1}
                        $.post("<?php echo base_url();?>claims/updateSetReserveIncurred/"+clmNO+"", data_in, function(html){
                            
                        });

                    });  
                    $("#closeSetModal").trigger('click');
                }
              }
          </script>
            <!-- <button class="btn btn-success btn-sm pull-right hni rrts" data-dismiss="modal" onclick="setReserveVal()">
              <i class="ace-icon fa fa-check"></i>
              Ok
            </button>
           
          <button class="btn btn-success btn-sm pull-right hni rrts" data-dismiss="modal" onclick="setReserveVal()">
            <i class="ace-icon fa fa-check"></i>
            Ok
          </button> -->
        </div>
        </div>
      </div>
    </div>
</div>
<?php 
if($record!=''){
    $fClId = $data['claim_no'];
    $selFolder = mysql_query("SELECT id FROM folders WHERE title = '$fClId' ORDER BY id desc limit 1") or die(mysql_error());
    $fetFolder = mysql_fetch_assoc($selFolder);
    $folderId = $fetFolder['id'];
}else{
    $folderId = '';
}
?>
<input type="hidden" id="folder_id_input" name="folder_id_input" value="<?php echo $folderId; ?>">
                </form>
              </div><!-- /.col -->
            </div>
<?php
if($record!='' or !empty($record)){
?>
<script>
  var selVal = "<?php echo $data['rrts'];?>";
  $.post("<?php echo base_url();?>main/getCompanylist/", {"selVal":selVal}, function(data){
    $(".opco_codes").html(data);
    
<?php

if($code[0]=='hni' or $code[0]=='rrts')
{
?>
$('select').attr('disabled','true');
<?php
}
?>
  });
  //for safety
  $.post("<?php echo base_url();?>main/getCompanylist1/", {"selVal":selVal}, function(data){
    $(".opco_codes1").html(data);

<?php

if($code[0]=='hni' or $code[0]=='rrts')
{
?>
$('select').attr('disabled','true');
<?php
}
?>
  });
  <?php 
  $cod = $data['rrts']; 
  $sel = mysql_query("select * from company_list where c_code='$cod'");
  $rec = mysql_fetch_assoc($sel);
  ?>
  var var1 = "<?php echo $rec['c_name'];?>";
  var c_code = "<?php echo $data['rrts2'];?>";
  $.post("<?php echo base_url();?>main/getSubCompanylist/", {"var1":var1,"c_code":c_code}, function(data){
    $(".subopco").html(data);
    getSubCode(c_code);

  });
  //for safety
  $.post("<?php echo base_url();?>main/getSubCompanylist1/", {"var1":var1,"c_code":c_code}, function(data){
    $(".subopco1").html(data);
    getSubCode_c(c_code);

  });
</script>
<?php
}else{
  ?>
  <script>
    $.post("<?php echo base_url();?>main/getCompanylist/", function(data){
      $(".opco_codes").html(data);
    });
    //for safety
    $.post("<?php echo base_url();?>main/getCompanylist1/", function(data){
      $(".opco_codes1").html(data);
    });

  </script>
  <?php
}
?>
<script type="text/javascript">
 function getSubComp(varr1) {
      var varr = varr1.split("~");
      var var1 = varr[1];
      var var2 = varr[0];
      $.post("<?php echo base_url();?>main/getSubCompanylist/", {"var1":var1}, function(data){
        $(".subopco").html(data);
        getSubCode(var2);


      });
      $('#rrts_c').val(varr1).trigger('change');
    } 
    function getSubCode(var1) {
      $.post("<?php echo base_url();?>main/getLocCode/", {"var1":var1}, function(data){
        $(".subcode").html(data);
      });
      $('#rrts2_c').val(var1).trigger('change');
    }
//for safety
     function getSubComp_c(varr1) {
      var varr = varr1.split("~");
      var var1 = varr[1];
      var var2 = varr[0];
      $.post("<?php echo base_url();?>main/getSubCompanylist1/", {"var1":var1}, function(data){
        $(".subopco1").html(data);
        getSubCode_c(var2);


      });
      //$('#rrts').val(varr1).trigger('change');
    } 
    function getSubCode_c(var1) {
      $.post("<?php echo base_url();?>main/getLocCode1/", {"var1":var1}, function(data){
        $(".subcode1").html(data);
      });
    }
function addNotes() {
  var claim_rrts = '<?php  echo $data["rrts"];?>';
  var activity = $("#notes_activity").val();
  var notes_attach_to = $("#notes_attach_to").val();
  var notes_type = $("#notes_type").val();
  var notes_text = $("#notes_text").val();
  $.post("<?php echo base_url();?>claims/addClaimNotes/", {"notes_attach_to":notes_attach_to,"claim_rrts":claim_rrts,"activity":activity,"notes_type":notes_type,"notes_text":notes_text}, function(data){
    getAllClaimNotes();
    activity = $("#notes_activity").val("");
    notes_type = $("#notes_type").val("");
    notes_text = $("#notes_text").val("");
  });
}
function getAllClaimNotes() {
  var data = '<?php echo $data["claim_no"];?>';
    if(data!=''){
        var cl_no_notes = '<?php echo $data["claim_no"]; ?>';
    }else{
        var cl_no_notes = $("#claim_no").val();
    }
  $.post("<?php echo base_url();?>claims/allClaimNotes/", {"cl_no_notes":cl_no_notes}, function(data){
    $("#all_notes").html(data);
  });
}
function fundsView()
{
     $("#reserve_his").css({"display":"block"});
    $("#fund_add").css({"display":"none"});
    $("#pay_his").css({"display":"none"});
	$("#recovery_add").css({"display":"none"});
}
/*function setAllNotes() {
  var activity = $("#notes_activity").val();
  var notes_attach_to = $("#notes_attach_to").val();
  var notes_type = $("#notes_type").val();
  var note_text = $("#note_text").val();
  var user_email = '<?php print_r($this->session->userdata('email')); ?>';
  var user_id = '<?php print_r($this->session->userdata('id')); ?>';
  var user_name = '<?php print_r(ucwords($this->session->userdata('name'))); ?>';
  $("#all_notes").prepend("\
                        <div class='form-group'> \
                          <label for='notes_type_input' class='col-sm-3 control-label no-padding-right'>  </label>\
                          <div class='col-sm-6'> \
                            <span class='ac_note_head'>"+notes_type+"</span> <input type='hidden' name='notes_type_input[]' value='"+notes_type+"'><input type='hidden' name='notes_attach_to_input' value='"+notes_attach_to+"'>\
                          </div>\
                        </div>\
                        <div class='form-group'> \
                          <label for='note_text_input' class='col-sm-3 control-label no-padding-right'>  </label>\
                          <div class='col-sm-6'> \
                            <span class='ac_quotes'>&#34;"+note_text+"&#34;</span> <input type='hidden' name='note_text_input[]' value='"+note_text+"'>\
                          </div>\
                        </div>\
                        <div class='form-group'> \
                          <label for='activity_input' class='col-sm-3 control-label no-padding-right'>  </label>\
                          <div class='col-sm-6'> \
                            <span class='pull-left ac_date'>"+activity+"</span> <span class='pull-right ac_user_name'>"+user_name+"</span> <input type='hidden' name='activity_input[]' value='"+activity+"'> <input type='hidden' name='user_name[]' value='"+user_name+"'><input type='hidden' name='user_email[]' value='"+user_email+"'>\
                          </div>\
                        </div>\
                        ");
}*/
function setReserveFields(v1) {
    var inp = $("#"+v1+"_input").val();
    if(inp==0){
      $("#reserve_funds").val("");
    }else{
      $("#reserve_funds").val(inp);
    }
}
function setReserveVal() {
  var setReserve = $("#set_reserve").val();
  var reserveFunds = $("#reserve_funds").val();
  switch (setReserve) {
    case 'BI':
      $("#BI_val").html("$"+reserveFunds);
      $("#BI_input").val(reserveFunds);
      break;
    case 'LE':
      $("#LE_val").html("$"+reserveFunds);
      $("#LE_input").val(reserveFunds);
      break;
    case 'PD':
      $("#PD_val").html("$"+reserveFunds);
      $("#PD_input").val(reserveFunds);
      break;
    case 'ALAE':
      $("#ALAE_val").html("$"+reserveFunds);
      $("#ALAE_input").val(reserveFunds);
      break;
    case 'OPD':
      $("#OPD_val").html("$"+reserveFunds);
      $("#OPD_input").val(reserveFunds);
      break;
    default:
      break;
  }
  var BI = $("#BI_input").val();
  var LE = $("#LE_input").val();
  var PD = $("#PD_input").val();
  var ALAE = $("#ALAE_input").val();
  var OPD = $("#OPD_input").val();
  var total = parseInt(BI)+parseInt(LE)+parseInt(PD)+parseInt(ALAE)+parseInt(OPD);
  $("#total").html("$"+total+".00");
}
function getPaymentHistory() {
  var cl_no = '<?php  echo $data["claim_no"];?>';
  var status = $("#status").val();
  $.post("<?php echo base_url();?>claims/fundsTotal/", {"cl_no":cl_no,"status":status}, function(data){
    $("#reserve_his").css({"display":"none"});
    $("#fund_add").css({"display":"none"});
    $("#pay_his").css({"display":"block"});
	$("#recovery_add").css({"display":"none"});
    $("#pay_his").html(data);
  });
}
function approveThisReserve(id) {
    var clm = '<?php echo $claim_no?>';
    var usr = '<?php echo $this->session->userdata('id')?>';
    $.post("<?php echo base_url();?>claims/approveReserve/", {"id":id}, function(data){
        alert("Reserve Approved Successfully");
    });
}

$('#approve_reserve_btn').on('click',function(){
    $("#reserve_his").css({"display":"block"});
    $("#fund_add").css({"display":"none"});
    $("#pay_his").css({"display":"none"});
	$("#recovery_add").css({"display":"none"});
    $("#reserve_approve_cont").html("<p align='center'>Loading....</p>");
    var clm = '<?php echo $claim_no?>';
    var usr = '<?php echo $this->session->userdata('id')?>';
    $.post("<?php echo base_url();?>claims/UnApprovedReserves/", {"claim_no":clm,"user":usr}, function(data){
        $("#reserve_approve_cont").html(data);
    });
  $('#approve_reserve_div').modal({
          show: 'false'
        });
});
function getApprovedReserves(reserveType) {
    var clm = '<?php echo $claim_no?>';
    var usr = '<?php echo $this->session->userdata('id')?>';
    $("#approved_reserve_cont").html("Loading...");
    $.post("<?php echo base_url();?>claims/approvedReserves/", {"claim_no":clm,"user":usr,"reserveType":reserveType}, function(data){
        $("#approved_reserve_cont").html(data);
    });
    $('#approved_reserve_div').modal({
          show: 'false'
    });
}
$('#set_reserve_btn').on('click',function(){
    var c_no = '<?php echo $claim_no?>';
    var status = '<?php echo $data["status"]?>';
    $("#reserve_his").css({"display":"block"});
    $("#fund_add").css({"display":"none"});
    $("#pay_his").css({"display":"none"});
	$("#recovery_add").css({"display":"none"});
    $.post("<?php echo base_url();?>claims/reserveTotal/"+c_no+"", {"status":status}, function(data){
                      $("#reserve_his").html(data);
var incurred_total = 0;
                      incurred_total = $("#incurred_total").val();
                      var user_range = <?php print($approve);?>;console.log(incurred_total);console.log(user_range);
                      if(incurred_total>user_range || user_range==0)
                      {
                        $("#approve_reserve_btn").hide();
                      }
                    });
  $('#set_reserve_div').modal({
          show: 'false'
        });

});
$("#add_notes").on('click',function(){
   $('#add_notes_div').modal({
          show: 'false'
        });
   $('#add_notes_div').modal({
          show: 'false'
        });
 $("#notes_text").removeAttr("disabled");
 $("#notes_activity").removeAttr("disabled");
 $("#notes_type").removeAttr("disabled");
  
});
$("#display_all_notes").on('click',function(){
   var clm_f = '<?php echo $claim_no?>';
   
    $.post("<?php echo base_url();?>claims/displayAllnotes/", {"claim_no":clm_f}, function(data){
        $("#display_all_notes_cont").html("Loading...");
        $("#display_all_notes_cont").html(data);
    });
    $('#display_all_notes_div').modal({
          show: 'false'
        });
});
  function attorneyBox(val,val1) {
    var clVal = val1.id;
    if(val=='Yes'){
      if(val1=="witness"){
        $('#'+val1+'').modal({
          show: 'false'
        });
      }
      if(val1=="claimant"){
        if(val=='Yes'){
          $('#'+val1+'').modal({
            show: 'false'
          });
        }
      }
      if (clVal=="claimant") {
        if(val=='Yes'){
          $("#cont123").html("<div class='form-group'> \
                            <label for='claimant_attorney_name' class='col-sm-3 control-label no-padding-right'> Name </label>\
                            <div class='col-sm-9'> \
                            <input type='text' id='claimant_attorney_name' class='col-xs-10 col-sm-7' placeholder='Enter Name.' name='claimant_attorney_name[]'>\
                            </div>\
                          </div>\  <div class='form-group'> \
                            <label for='claimant_attorney_phone' class='col-sm-3 control-label no-padding-right'> Phone no. </label>\
                            <div class='col-sm-9'> \
                            <input type='number' id='claimant_attorney_phone' class='col-xs-10 col-sm-7' placeholder='Enter Phone no.' name='claimant_attorney_phone[]'>\
                            </div>\
                          </div>\ <div class='form-group'> \
                            <label for='claimant_attorney_email' class='col-sm-3 control-label no-padding-right'> Email </label>\
                            <div class='col-sm-9'> \
                            <input type='text' id='claimant_attorney_email' class='col-xs-10 col-sm-7' placeholder='Enter Email' name='claimant_attorney_email[]'>\
                            </div>\
                          </div>\ <div class='form-group'> \
                            <label for='claimant_attorney_adds' class='col-sm-3 control-label no-padding-right'> Address </label>\
                            <div class='col-sm-9'> \
                            <textarea id='claimant_attorney_adds' class='col-xs-10 col-sm-7' placeholder='' name='claimant_attorney_adds[]' ></textarea>\
                            </div>\
                          </div>\ ");
          $('.claimants123').modal({
            show: 'false'
          });
        }
      }
      if(val1=="csp"){
        $('#'+val1+'').modal({
          show: 'false'
        });
      }
    }
   } 
</script>
                            
<script type="text/javascript">
function hideError(element) {
    var id = $(element).closest("div").attr("id");
    $("#"+id+"").hide();
}
var claimant_no = 1;
<?php
if($count>0)
{
    ?>
    claimant_no = <?php echo $count;?>;
    <?php
}
?>
function closeCliam(id) {
          document.getElementById('clm_'+id+'').remove();
          claimant_no--;
        }
function createFolder() {
    if (checkPaidAmount()) {
        var folder_name = '<?php  echo $claim_no;?>';
            $.post("<?php echo base_url();?>main/folderAction/", {"f_name":folder_name,"action":"create"}, function(data){
             $.post("<?php echo base_url();?>main/getFolderId/", {"title":folder_name}, function(data1){
                var path = "<?php echo $path;?>"+"&path="+data1+"";
                $("#folder_id" ).html("<a href='"+path+"' target='_blank'>View Documents</a> (or) ");
                var valll = $("#folder_id_input" ).val(data1);
                document.insertClaim.submit();
                return true;
              });
            });    
    }
    
}
      jQuery(function($) {
        $("#addMoreClaimants").on('click', function(){
          claimant_no++;
          $.post("<?php print base_url();?>claims/claimant_Multiple",{"cno":claimant_no},function(res){
             $("#more_claimants").append(res);

          });
        });
        $("#attach_file").on('click', function(){
          if(this.checked==true){
            /*var folder_name = '<?php  echo $claim_no;?>';
            $.post("<?php echo base_url();?>main/folderAction/", {"f_name":folder_name,"action":"create"}, function(data){
             $.post("<?php echo base_url();?>main/getFolderId/", {"title":folder_name}, function(data1){
                var path = "<?php echo $path;?>"+"&path="+data1+"";
                $("#folder_id" ).html("<a href='"+path+"' target='_blank'>View Documents</a> (or) ");
                $("#folder_id_input" ).val(data1);
              });
            });
            $("#mssg" ).html("<span class='alert alert-success'> "+folder_name+" Folder Created</span>");*/
            $("#att_req" ).show(); 
          }
          if(this.checked==false){
            /*var folder_name = '<?php echo $claim_no;?>';
            var conf = confirm("Are you sure! You wnt to delete this folder!");
            if(conf){

              $.post("<?php echo base_url();?>main/folderAction/", {"f_name":folder_name,"action":"delete"}, function(data){
                $("#folder_id_input" ).val("");
              });
            $("#mssg" ).html("<span class='alert alert-danger'> "+folder_name+" Folder Deleted</span>");
            }else{
              this.checked=true;
            }*/
            $("#att_req" ).hide(); 
          }
           
        });
        $( ".datepicker" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: false,

        });
        $('.timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: false,
            showMeridian: false,
            defaultTime: '09:00',
            disableFocus: true
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
        $('.input-mask-date').mask('99:99:99');
        /*$('.date-timepicker1').datetimepicker({format: 'YYYY-MM-DD hh:mm'}).next().on(ace.click_event, function(){
          $(this).prev().focus();
        });*/
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
                            var eloss ="<div id='eloss-body'>  <div class='form-group'>  <label for='eloss' class='col-sm-3 control-label no-padding-right'> Environmental Loss</label> <div class='col-sm-9'>  <input type='radio' id='' name='eloss' <?php if($data['eloss']=='Fuel Spill Claimant'){echo 'checked=checked';}?> value='Fuel Spill Claimant'>  Fuel Spill Claimant <input type='radio' id='' name='eloss' <?php if($data['eloss']=='Fuel Spill Insured'){echo 'checked=checked';}?> value='Fuel Spill Insured'>  Fuel Spill Insured </div> </div> </div>";
                            $("#LD").html(eloss);
                          }else if(val=='Struck stationary object')
                          {

                            var sso = "<div id='sso-body'>  \
                            <div class='form-group'>  \
    <label for='sso' class='col-sm-3 control-label no-padding-right'>  Struck stationary object </label>\
    <div class='col-sm-9'>  \
      <select name='sso' class='col-xs-10 col-sm-5'>\
        <option value='Parked_vehicle' <?php if($data['sso']=='Parked_vehicle'){echo 'selected';}?>> Parked Vehicle</option>\
        <option value='Post' <?php if($data['sso']=='Post'){echo 'selected';}?>> Post</option>\
        <option value='fence' <?php if($data['sso']=='fence'){echo 'selected';}?>> Fence</option>\
        <option value='Tree' <?php if($data['sso']=='Tree'){echo 'selected';}?>> Tree</option>\
        <option value='overpass' <?php if($data['sso']=='overpass'){echo 'selected';}?>> Overpass</option>\
        <option value='Awning' <?php if($data['sso']=='Awning'){echo 'selected';}?>> Awning</option>\
        <option value='Awning' <?php if($data['sso']=='Awning'){echo 'selected';}?>> Gaurd Rail</option>\
        <option value='gaurd_rail' <?php if($data['sso']=='gaurd_rail'){echo 'selected';}?>> Utility Pole</option>\
        <option value='utility_pole' <?php if($data['sso']=='utility_pole'){echo 'selected';}?>> Mailbox</option>\
        <option value='Mailbox' <?php if($data['sso']=='Mailbox'){echo 'selected';}?>>Curb</option>\
        <option value='sign' <?php if($data['sso']=='sign'){echo 'selected';}?>> Sign </option>\
        <option value='Building' <?php if($data['sso']=='Building'){echo 'selected';}?>> Building </option>\
        <option value='Dock' <?php if($data['sso']=='Dock'){echo 'selected';}?>> Dock </option>\
        <option value='other' <?php if($data['sso']=='other'){echo 'selected';}?>> Other </option>\
      </select> \
    </div> \
  </div>\
  ";
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
                              var ivm = "<div id='ivm-body'>  <div class='form-group'>  <label for='changing_lanes' class='col-sm-3 control-label no-padding-right'> Changing Lanes </label> <div class='col-sm-9'>  <input type='radio' id='' name='changing_lanes' <?php if($data['changing_lanes']=='turning_left'){echo 'checked=checked';}?> value='turning_left'>  Turning Left <input type='radio' id='' name='changing_lanes' <?php if($data['changing_lanes']=='turning_right'){echo 'checked=checked';}?> value='turning_right'>  Turning Right <input type='radio' id='' name='changing_lanes' <?php if($data['changing_lanes']=='merging_onto_roadway'){echo 'checked=checked';}?> value='merging_onto_roadway'>  Merging onto Roadway </div> </div> </div>";
                              $('#IVM').html(ivm);
                            }
                            else
                            {
                              $('#IVM').html('');
                            }
                          }
                          /*function personsOptions1(value,id) {
                            personsOptions(value,id);
                          }*/
                          var pValues = [];
                          var position = 0;
                          <?php //echo $person_involved_val;?>
                          pValues = '<?php echo $data["person_involved"];?>';
                          pValues = pValues.split(",");
                          function personsOptions(value,id) {
                            //$("#person_involved_input").val(pValues);
                          switch (value) {
                              case 'Insured_driver':
                                 if(document.getElementById(id).checked){
                                   pValues.push(value);
                                    $("#exp_123").val(pValues);
                                   $("#Insd_driver").show();
                                  }else{
                                    position = pValues.indexOf(value);
                                    pValues.splice(position,1);
                                    $("#exp_123").val(pValues);
                                    $("#Insd_driver").hide();
                                  }
                                break;
                                case 'Other':
                                 if(document.getElementById(id).checked){
                                   pValues.push(value);
                                    $("#exp_123").val(pValues);
                                  }else{
                                    position = pValues.indexOf(value);
                                    pValues.splice(position,1);
                                    $("#exp_123").val(pValues);
                                  }
                                break;
                              case 'Emp_Contracter':
                                 if(document.getElementById(id).checked){
                                   $("#emp_div").show();
                                   pValues.push(value);
                                    $("#exp_123").val(pValues);
                                  }else{
                                    $("#emp_div").hide();
                                    position = pValues.indexOf(value);
                                    pValues.splice(position,1);
                                    $("#exp_123").val(pValues);
                                  }
                                break;                
                              case 'CSP':
                                   if(document.getElementById(id).checked){
                                      $("#CSP_div").show();
                                      pValues.push(value);
                                    $("#exp_123").val(pValues);
                                    }else{
                                      $("#CSP_div").hide();
                                      position = pValues.indexOf(value);
                                    pValues.splice(position,1);
                                    $("#exp_123").val(pValues);
                                    }
                                break;                                
                              case 'Police_Department':
                                 if(document.getElementById(id).checked){
                                    $("#PD_div").show();
                                    pValues.push(value);
                                    $("#exp_123").val(pValues);
                                  }else{
                                    $("#PD_div").hide();
                                    position = pValues.indexOf(value);
                                    pValues.splice(position,1);
                                    $("#exp_123").val(pValues);
                                  }
                                break;
                              case 'Claimant':
                                   if(document.getElementById(id).checked){
                                      $("#Claimant_div").show();
                                      pValues.push(value);
                                    $("#exp_123").val(pValues);
                                    }else{
                                      $("#Claimant_div").hide();
                                      position = pValues.indexOf(value);
                                    pValues.splice(position,1);
                                    $("#exp_123").val(pValues);
                                    }
                                break;
                              case 'Witness':
                                 if(document.getElementById(id).checked){
                                    $("#Witness_div").show();
                                    pValues.push(value);
                                    $("#exp_123").val(pValues);
                                  }else{
                                    $("#Witness_div").hide();
                                    position = pValues.indexOf(value);
                                    pValues.splice(position,1);
                                    $("#exp_123").val(pValues);
                                  }
                                break;
                              case 'Examiners':
                                 if(document.getElementById(id).checked){
                                    $("#Examiners_div").show();
                                    pValues.push(value);
                                    $("#exp_123").val(pValues);
                                  }else{
                                    $("#Examiners_div").hide();
                                    position = pValues.indexOf(value);
                                    pValues.splice(position,1);
                                    $("#exp_123").val(pValues);
                                  }
                                break;
                              default:
                                
                                break;
                            }     
                                
                          }
function statusChange(val)
{
    //add payment display none
    if(val=='Closed'){
        /*if($("#fund_add").is(":hidden")){
            alert("hiii");
        }else{
            alert("bye");
        }*/
        $("#fund_add").hide();
        $('[data-toggle="tooltip"]').tooltip('enable');
        $("#add_fund").attr({"disabled":"true","title":"Sorry! payment cannot be add when a claim is closed."});
        $("#set_reserve_btn").attr({"disabled":"true","title":"Sorry! Reserves cannot be add when a claim is closed."});
    }else{
        //$("#add_fund").attr({"disabled":"false"});
        $('[data-toggle="tooltip"]').tooltip('disable');
        document.getElementById('add_fund').disabled=false;
        document.getElementById('set_reserve_btn').disabled=false;
    }

    $(".funds_status").html(val);
}
function changeBalance(id){
    checkPaidAndCollection();
    checkPaidAmount();
    $.post("<?php echo base_url();?>claims/getBalance/", { id: id, claim_no:'<?php echo $data['claim_no']; ?>'}).done(function(data){
    $("#f_balance").val(data);$("#f_paid").attr({"max" : data});
    });
}
//function for checcking valid fund amount
function validateFundInput() {

   var numbers = /^(?=\D*\d)\d*(\.\d+)?$/
   $("[data-dismiss=modal]");
   var set_reserve = $("#set_reserve").val();
   var reserve_funds = $("#reserve_funds").val();

   switch (set_reserve) {
    case 'BI':
     var paid_total = $("#bi_paid_total").val();
      break;
    case 'LE':
       var paid_total = $("#pd_paid_total").val();
      break;
    case 'PD':
      var paid_total = $("#le_paid_total").val();
      break;
    case 'ALAE':
       var paid_total = $("#alae_paid_total").val();
      break;
    case 'OPD':
       var paid_total = $("#opd_paid_total").val();
    default:
      break;
  }
   //if(parseInt(reserve_funds)<parseInt(paid_total)){
   //     alert("please check the amount!");
  //      return false;
  //  }
   if(reserve_funds!='' && reserve_funds.match(numbers)){
        $("#reserve_funds").css({"border":"1px solid #ddd"});
        return true;
    }else{
        alert("Please enter a valid amount");
        $("#reserve_funds").val("");
        $("#reserve_funds").css({"border":"1px solid red"});
        return false;
    }
    //return false;
   /*var numbers = /^(?=\D*\d)\d*(\.\d+)?$/;
        if(f_balance!='' && f_balance.match(numbers)){
          $("#f_balance").css({"border":"1px solid #ddd"});
          return true;
        }else{
            $("#f_balance").val("");
            $("#f_balance").css({"border":"1px solid red"});
            return false;
        }
   */

}
function checkPaidAndCollection() {
    if($("#payee_type").val()!='select'){
        if($("#f_paid").val()=='' && $("#f_collection").val()==''){
            $("#reservError").show();
            return false;
        }else{
            $("#reservError").hide();
        $("#payError").hide();
            return true;
        }
    }else{
        $("#reservError").hide();
        $("#payError").hide();
    }
}

//function for checcking valid paid amount
function checkPaidAmount() {
   
   var f_balance = $("#f_balance").val();
   var paidAmount = $("#f_paid").val();
   var numbers = /^(?=\D*\d)\d*(\.\d+)?$/;
   var payee_type12 = $("#payee_type").val();
    if(payee_type12!='select'){

        if(f_balance==0 || parseInt(paidAmount)>parseInt(f_balance)){
            $("#payError").show();
            $("#f_paid").val("");
            $("#f_paid").css({"border":"1px solid red"});
            $('html,body').animate({
                        scrollTop: $("#f_paid").offset().top},
                        'slow');
            return false;
        }
        //$("#f_paid").attr({"required": true});
        if(paidAmount.match(numbers)){
          $("#payError").hide();
          $("#f_paid").css({"border":"1px solid #ddd"});
          return true;
        }else{
            $("#payError").show();
            $("#f_paid").val("");
            $("#f_paid").css({"border":"1px solid red"});
            $('html,body').animate({
                        scrollTop: $("#f_paid").offset().top},
                        'slow');
            return false;
        }
    }else{
        $("#payError").hide();
        $("#reservError").hide();
        $("#f_paid").attr({"required": false});
        $("#f_paid").css({"border":"1px solid #ddd"});
        return true;
    }

}
//function for checcking valid collection amount
function checkCollectionAmount() {
   var f_balance = $("#f_balance").val();
   var f_collection = $("#f_collection").val();
   var numbers = /^(?=\D*\d)\d*(\.\d+)?$/;
   var payee_type12 = $("#payee_type").val();
    if(payee_type12!='select'){

        if(f_balance==0 || parseInt(f_collection)>parseInt(f_balance)){
            
            $("#payError").show();
            $("#f_collection").val("");
            $("#f_collection").css({"border":"1px solid red"});
            $('html,body').animate({
                        scrollTop: $("#payee_type").offset().top},
                        'slow');
            return false;
        }
        $("#f_collection").attr({"required": true});
        if(f_collection.match(numbers)){
          $("#payError").hide();
          $("#reservError").hide();
          $("#f_collection").css({"border":"1px solid #ddd"});
          return true;
        }else{
            $("#payError").show();
            $("#f_collection").val("");
            $("#f_collection").css({"border":"1px solid red"});
            $('html,body').animate({
                        scrollTop: $("#f_collection").offset().top},
                        'slow');
            return false;
        }
    }else{
        $("#payError").hide();
        $("#reservError").hide();
        $("#f_collection").attr({"required": false});
        $("#f_collection").css({"border":"1px solid #ddd"});
        return true;
    }

}
</script>
<?php
if($data!='')
{
?>
<script type="text/javascript">
 // personsOptions1('<?php print $data['person_involved'];?>','<?php print $data['person_involved'];?>');
  kkk1('<?php print $data['insd_veh_maneuver'];?>');
  lossdescription('<?php print $data['loss_description'];?>');
</script>
<?php
}
?>

<script type="text/javascript">
    function claimantType(claimantType,id) {
        if(claimantType=='BI'){
        $(id).parents('.more_claimants').find(".isBI").show();
        $(id).parents('.more_claimants').find(".claimant_ME").attr('checked',false);
        }else{
            $(id).parents('.more_claimants').find(".isBI").hide();
            $(id).parents('.more_claimants').find(".ME_div").html("");
            $(id).parents('.more_claimants').find(".claimant_ME").attr('checked',false);
        }
    }
    function isClaimantInjured(id) {
        $(id).parents('.more_claimants').find(".isInjured_div").show();
        if($(id).is(':checked')){
        }else{
        $(id).parents('.more_claimants').find(".isInjured_div").hide();
        }
    }
    function isME(id) {
        if($(id).is(':checked')){
         $(id).parents('.more_claimants').find(".ME_div").html("<center><i class='fa fa-spinner fa-spin' style='font-size:30px'></i></center>");
        $.post("<?php echo base_url();?>claims/getMEForm/",{"no_of_claimants":claimant_no}, function(data){
            $(id).parents('.more_claimants').find(".ME_div").html(data);
        });
        }else{
             $(id).parents('.more_claimants').find(".ME_div").html("");
        }
    }
    function attorneyBoxes(val,id)
    {
        if(val=='Yes'){
           $(id).parents('.more_claimants').find('.claimant_modal').modal({
            show: 'false'
          });
        }
    }

$.post("<?php echo base_url();?>claims/getBalance/", { id: 'PD', claim_no:'<?php echo $data["claim_no"];?>'}).done(function(data){
$("#f_balance").val(data);
$("#f_paid").attr({"max" : data});
});

    </script>
<!-- diary popup -->
<div id="diary_modal" class="modal">
    <div class="modal-dialog" style="width:50%">
      <div class="modal-content">
        <div id="diary_div" >
          
        </div>
      </div>
    </div>
</div>
<script>
function addDiary()
{
    $('#diary_modal').modal({
            show: 'false'
        });
    var claim_no = $("#claim_no").val();
    $("#diary_div").html("<i class='fa fa-spinner fa-spin'></i>...");
    $.post("<?php echo base_url();?>claims/addEditDiary",{"claim_no":claim_no}, function(data){
        $("#diary_div").html(data);
         $.post("<?php print base_url();?>main/getUsers",function(data1){
        $("#usersDiv").html(data1);
       });
    });
    
}
function editDiary(id) {
    $('#diary_modal').modal({
            show: 'false'
        });
    $.post("<?php echo base_url();?>main/addEditDiary/"+id+"", {"action":"upd_diary"},function(data){

            $("#diary_div").html(data);
        });
}
</script>
<!-- color for person involved if not empty -->
<script type="text/javascript">
    function getAllInputValues() {
        //for insured diver
        var filled =false;
        var inputValues = [];
        $('#Insd_driver input').each(function() {
            var type = $(this).attr("type");
            if (type != "button" && type != "submit" && type != "radio") {
                inputValues.push($(this).val());
            }
            //alert(type);
            /*if ((type == "checkbox" || type == "radio") && this.checked) {
                inputValues.push($(this).val());
            }
            else if (type != "button" || type != "submit") {
                inputValues.push($(this).val());
            }*/
        })
        //alert(inputValues.join(','));
        for(var i = 0; i < inputValues.length; i++) {
            if(inputValues[i] != ""){
               filled=true;                                    
                break;
            }
        }
        if(filled){
        $("#filled_inputs").css({"color":"blue"});
        }else{
         $("#filled_inputs").css({"color":"#393939"});   
        }
        //for  Emp/Contractor
        var filled1 =false;
        var inputValues1 = [];
        $('#emp_div input').each(function() {
            var type1 = $(this).attr("type");
            if (type1 != "button" && type1 != "submit" && type1 != "radio") {
                inputValues1.push($(this).val());
            }
            //alert(type);
            /*if ((type == "checkbox" || type == "radio") && this.checked) {
                inputValues.push($(this).val());
            }
            else if (type != "button" || type != "submit") {
                inputValues.push($(this).val());
            }*/
        })
        //alert(inputValues.join(','));
        for(var i1 = 0; i1 < inputValues1.length; i1++) {
            if(inputValues1[i1] != ""){
               filled1=true;                                    
                break;
            }
        }
        if(filled1){
        $("#filled_inputs1").css({"color":"blue"});
        }else{
         $("#filled_inputs1").css({"color":"#393939"});   
        }
        //for  Police Department
        var filled2 =false;
        var inputValues2 = [];
        $('#PD_div input').each(function() {
            var type2 = $(this).attr("type");
            if (type2 != "button" && type2 != "submit" && type2 != "radio") {
                inputValues2.push($(this).val());
            }
            //alert(type);
            /*if ((type == "checkbox" || type == "radio") && this.checked) {
                inputValues.push($(this).val());
            }
            else if (type != "button" || type != "submit") {
                inputValues.push($(this).val());
            }*/
        })
        //alert(inputValues.join(','));
        for(var i2 = 0; i2 < inputValues2.length; i2++) {
            if(inputValues2[i2] != "" ){
               filled2=true;                                    
                break;
            }
        }
        if(filled2){
        $("#filled_inputs2").css({"color":"blue"});
        }else{
         $("#filled_inputs2").css({"color":"#393939"});   
        }
        //for   Claimant
        var filled3 =false;
        var inputValues3 = [];
        $('#Claimant_div input, #Claimant_div select').each(function() {
            var type3 = $(this).attr("type");
            //alert(type3);
            if (type3 != "button" && type3 != "submit" && type3 != "radio" && type3 != "checkbox") {
                inputValues3.push($(this).val());
            }
            //alert(type);
            /*if ((type == "checkbox" || type == "radio") && this.checked) {
                inputValues.push($(this).val());
            }
            else if (type != "button" || type != "submit") {
                inputValues.push($(this).val());
            }*/
        })
        //alert(inputValues.join(','));
        for(var i3 = 0; i3 < inputValues3.length; i3++) {
            if(inputValues3[i3] != "" && inputValues3[i3] != "None"){
               filled3=true;                                    
                break;
            }
        }
        if(filled3){
        $("#filled_inputs3").css({"color":"blue"});
        }else{
         $("#filled_inputs3").css({"color":"#393939"});   
        }
        //for   Witness
        var filled4 =false;
        var inputValues4 = [];
        $('#Witness_div input').each(function() {
            var type4 = $(this).attr("type");
            if (type4 != "button" && type4 != "submit" && type4 != "radio") {
                inputValues4.push($(this).val());
            }
            //alert(type);
            /*if ((type == "checkbox" || type == "radio") && this.checked) {
                inputValues.push($(this).val());
            }
            else if (type != "button" || type != "submit") {
                inputValues.push($(this).val());
            }*/
        })
        //alert(inputValues.join(','));
        for(var i4 = 0; i4 < inputValues4.length; i4++) {
            if(inputValues4[i4] != ""){
               filled4=true;                                    
                break;
            }
        }
        if(filled4){
        $("#filled_inputs4").css({"color":"blue"});
        }else{
         $("#filled_inputs4").css({"color":"#393939"});   
        }
        
        //return inputValues.join(',');
    }
</script>

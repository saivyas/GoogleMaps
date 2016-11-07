<style type="text/css">
  .dotted-line{cursor: pointer;border-bottom: 1px dotted blue;border-bottom-style: dashed;color: blue;}
</style>
<?php
if($action=='reserve_his_add'){
$status = 'Open';
if($_POST['status']!='')
{
$status = $_POST['status'];
}
?>
 <table id="" class="display table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>Reserve</th>
            <th>Balance</th>
            <th>Paid</th>
            <th>Collection</th>
            <th>Incurred</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>

            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('BI')">Bodily Injury</span></td>
              <td id="BI"><span id="BI_val">$0.00</span> <input type="hidden" id="BI_input" name="BI" value="0"></td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('PD')">Property Damage</span></td>
              <td id="PD"><span id="PD_val">$0.00</span><input type="hidden" id="PD_input" name="PD" value="0"></td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('LE')">Legal Expense</span></td>
              <td id="LE"><span id="LE_val">$0.00</span><input type="hidden" id="LE_input" name="LE" value="0"></td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('ALAE')">ALAE</span></td>
              <td id="ALAE"><span id="ALAE_val">$0.00</span> <input type="hidden" id="ALAE_input" name="ALAE" value="0"></td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('OPD')">OPD</span></td>
              <td id="OPD"><span id="OPD_val">$0.00</span> <input type="hidden" id="OPD_input" name="OPD" value="0"></td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td>Total --></td>
              <td id="total">$0.00</td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td>$0.00</td>
              <td></td>
            </tr>
    </tbody>
<?php
die();
}
if($action=='reserve_his_edit'){
$status = 'Open';
if($_POST['status']!='')
{
  $status = $_POST['status'];
}

  $BIVal = floatval($records[0]['BI']);
  $PDVal = floatval($records[0]['PD']);
  $LEVal = floatval($records[0]['LE']);
  $ALAEVal = floatval($records[0]['ALAE']);
  $OPDVal = floatval($records[0]['OPD']);
  $total1 = floatval($BIVal+$PDVal+$LEVal+$ALAEVal+$OPDVal);

//total paid for each payee type
//for BI paid
$totalBIPaid = floatval($totalpaidcollection["BI"]["paid"]);
//for PD paid
$totalPDPaid = floatval($totalpaidcollection["PD"]["paid"]);
//for LE paid
$totalLEPaid = floatval($totalpaidcollection["LE"]["paid"]);
//for ALAE paid
$totalALAEPaid = floatval($totalpaidcollection["ALAE"]["paid"]);
//for OPD paid
$totalOPDPaid = floatval($totalpaidcollection["OPD"]["paid"]);
//total paid
$totalPaid = floatval($totalBIPaid+$totalPDPaid+$totalLEPaid+$totalALAEPaid+$totalOPDPaid);

//total collection for each payee type
//for BI collection
$totalBICollection = floatval($totalpaidcollection["BI"]["collection"]);
//for PD collection
$totalPDCollection = floatval($totalpaidcollection["PD"]["collection"]);
//for LE collection
$totalLECollection = floatval($totalpaidcollection["LE"]["collection"]);
//for ALAE collection
$totalALAECollection = floatval($totalpaidcollection["ALAE"]["collection"]);
//for OPD collection
$totalOPDCollection = floatval($totalpaidcollection["OPD"]["collection"]);
//total collection
$totalCollection = floatval($totalBICollection+$totalPDCollection+$totalLECollection+$totalALAECollection+$totalOPDCollection);

//incured for BI
$totalBIIncurred = floatval(($BIVal+$totalBIPaid)-$totalBICollection);
//incured for PD
$totalPDIncurred = floatval(($PDVal+$totalPDPaid)-$totalPDCollection);
//incured for LE
$totalLEIncurred = floatval(($LEVal+$totalLEPaid)-$totalLECollection);
//incured for ALAE
$totalALAEIncurred = floatval(($ALAEVal+$totalALAEPaid)-$totalALAECollection);
//incured for OPD
$totalOPDIncurred = floatval(($OPDVal+$totalOPDPaid)-$totalOPDCollection);
//total incureds
$totalIncurred=floatval($totalBIIncurred+$totalPDIncurred+$totalLEIncurred+$totalALAEIncurred+$totalOPDIncurred);


//print_r($totalpaidcollection);
$bitotal=0;
$pdtotal=0;
$letotal=0;
$alaetotal=0;
$paidtotal=0;
$collection=0;
$incurred=0;
$opdtotal=0;

?>
 <table id="" class="display table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>Reserve</th>
            <th>Balance</th>
            <th>Paid</th>
            <th>Collection</th>
            <th>Incurred</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>

            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('BI')">Bodily Injury</span></td>
              <td id="BI"><span id="BI_val">$<?php echo $BIVal;?></span> 
              <input type="hidden" id="BI_input" name="BI" value="<?php echo $BIVal; ?>"></td>
              <td>$<?php
                  echo $totalBIPaid;
                  ?>
                    <input type="hidden" name="bi_paid_total" id="bi_paid_total" value="<?php  echo $totalBIPaid; ?>">
              </td>
              <td>$<?php 
                  echo $totalBICollection;
                 ?>
                 </td>
              <td>$<?php  echo $totalBIIncurred; ?></td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('PD')">Property Damage</span></td>
              <td id="PD"><span id="PD_val">$<?php  echo $PDVal; ?></span>
              <input type="hidden" id="PD_input" name="PD" value="<?php  echo $PDVal; ?>"></td>
              <td>$<?php
                  echo $totalPDPaid;
                  ?><input type="hidden" name="pd_paid_total" id="pd_paid_total" value="<?php  echo $totalPDPaid; ?>">
                  </td>
              <td>$<?php
                  echo $totalPDCollection;
                  ?>
                  </td>
              <td>$<?php echo $totalPDIncurred; ?></td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('LE')">Legal Expense</span></td>
              <td id="LE"><span id="LE_val">$<?php echo $LEVal; ?></span><input type="hidden" id="LE_input" name="LE" value="<?php echo $LEVal; ?>"></td>
              <td>$<?php 
                    echo $totalLEPaid;
                  ?><input type="hidden" name="le_paid_total" id="le_paid_total" value="<?php  echo $totalLEPaid; ?>">
                  </td>
              <td>$<?php 
                  echo $totalLECollection;
                ?>
                </td>
              <td>$<?php echo $totalLEIncurred; ?></td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('ALAE')">ALAE</span></td>
              <td id="ALAE"><span id="ALAE_val">$<?php echo $ALAEVal;?></span> <input type="hidden" id="ALAE_input" name="ALAE" value="<?php echo $ALAEVal;?>"></td>
              <td>$<?php 
                  echo $totalALAEPaid;
                  ?><input type="hidden" name="alae_paid_total" id="alae_paid_total" value="<?php  echo $totalALAEPaid; ?>">
                  </td>
              <td>$<?php 
                    echo $totalALAECollection;
                ?>
                </td>
              <td>$<?php echo $totalALAEIncurred; ?></td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td><span class='dotted-line' onclick="getApprovedReserves('OPD')">Owned Physical Damage</span></td>
              <td id="OPD"><span id="OPD_val">$<?php echo $OPDVal; ?></span> <input type="hidden" id="OPD_input" name="OPD" value="<?php echo $OPDVal; ?>"></td>
              <td>$<?php 
                  echo $totalOPDPaid;
                  ?><input type="hidden" name="opd_paid_total" id="opd_paid_total" value="<?php  echo $totalOPDPaid; ?>">
                  </td>
              <td>$<?php 
                    echo $totalOPDCollection;
                ?>
                </td>
              <td>$<?php echo $totalOPDIncurred; ?></td>
              <td class='funds_status'><?php print $status;?></td>
            </tr>
            <tr>
              <td>Total --></td>
              <td id="total">$<?php echo $total1;?></td>
              <td>$<?php echo $totalPaid; ?></td>
              <td>$<?php echo $totalCollection; ?></td>
              <td>$<?php  echo $totalIncurred; ?><input type="hidden" name="incurred_total" id="incurred_total" value="<?php  echo $totalIncurred; ?>"></td>
              <td></td>
            </tr>
    </tbody>
<?php
die();
}
$status = 'Open';
if($_POST['status']!='')
{
$status = $_POST['status'];
}

?>
<table id="table_id" class="display table table-bordered table-striped table-hover table-responsive">
  <thead>
      <tr>
          <th>Reserve</th>
          <th>Balance</th>
          <th>Paid</th>
          <th>Collection</th>
          <!-- <th>Incurred</th> -->
          <th>Status</th>
          <th>Print</th>
      </tr>
  </thead>
  <tbody>
        <?php

          foreach ($results as $key => $result) {
              $f_balance = $result['f_balance'];
              $f_paid = $result['f_paid'];
              $f_collection = $result['f_collection'];
              $f_incurred = $result['f_incurred'];
              $payee_type = $result['payee_type'];
              $f_incurred = $f_balance+$f_paid+$f_collection;
              $f_status = $result['f_status'];
              if($payee_type=='BI'){ 
               $reserve = 'Bodily Injury'; 
              }
              if($payee_type=='PD'){ 
               $reserve = 'Property Damage'; 
              }
              if($payee_type=='LE'){ 
               $reserve = 'Expense'; 
              }
              if($payee_type=='ALAE'){ 
               $reserve = 'ALAE'; 
              }
              if($payee_type=='OPD'){ 
               $reserve = 'Owned Physical Damage'; 
              }
              
            ?>
            <tr>
              <td><?php echo $reserve;?></td>
              <td><?php echo "$".$f_balance;?></td>
              <td><?php echo "$".$f_paid;?></td>
              <td><?php echo "$".$f_collection;?></td>
              <!--<td>--><?php //echo "$".$f_incurred.".00";?><!--</td>-->
              <td class='funds_status'><?php print $status;?></td>
              <td align="center">
              <a target="_blank" href='<?php echo base_url(); ?>main/fundsPrint/<?php print $result['id'];?>' title='Print'>
                 <i class='fa fa-print'></i></a></td>
            </tr>
            <?php
          }
        
          

            ?>
            <tr>
            <td>Total --></td>
            <td>$<?php echo $results1[0]['b_total_total'];?></td>
            <td>$<?php echo $results1[0]['f_paid_total'];?></td>
            <td>$<?php echo $results1[0]['f_collection_total'];?></td>
            <!--<td>$<?php echo $incurred_total = $results1[0]['b_total_total']+$results1[0]['f_paid_total']+$results1[0]['f_collection_total'];?></td>-->
            <td class='funds_status'><?php print $status;?></td>
            <td></td>
          </tr>
  </tbody>
  </table>
<?php

?>
  <script type="text/javascript">
     $(document).ready ( function () {
      $('#table_id').DataTable({
          ordering:  false
     });
      
      } );
  </script>
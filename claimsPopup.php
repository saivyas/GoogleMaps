<?php
$c = $_POST['company'];
$m = $_POST['month'];
$y = $_POST['year'];
?>
<div class="row">
<div class="col-sm-12">
<button class="btn btn-info btn-sm pull-right" data-dismiss="modal">
                          <i class="ace-icon fa fa-times"></i>
                          Close
                        </button>
                        </div>
<div class="col-md-offset-3 col-sm-7">
<lable class='col-sm-2'>OPCO :</lable> 
<select name="rrts" id="rrts2"  class="col-xs-10 col-sm-6" onchange="getClaimsGraph()">
 <option value="ALL" title="Select"> ALL</option>
                          <option value="AALOG" <?php if($c=='AALOG'){print "selected";} ?> title="AALOG">A & A LOGISTIC </option>
                          <option value="AAEXP" <?php if($c=='AAEXP'){print "selected";} ?> title="AAEXP">A & A EXPRESS</option>
                          <option value="AAMI" <?php if($c=='AAMI'){print "selected";} ?> title="AAMI">ACTIVE AERO</option>
                          <option value="ADRN" <?php if($c=='ADRN'){print "selected";} ?> title="ADRN">ADRIAN</option>
                          <option value="BRUEN" <?php if($c=='BRUEN'){print "selected";} ?> title="BRUEN">BRUENGER</option>
                          <option value="CCTL" <?php if($c=='CCTL'){print "selected";} ?> title="CCTL">CAPITOL TRANSP</option>
                          <option value="CENCA" <?php if($c=='CENCA'){print "selected";} ?> title="CENCA">CENTRAL CAL</option>
                          <option value="CTW" <?php if($c=='CTW'){print "selected";} ?> title="CTW">CTW TRANSPORT</option>
                          <option value="D & E" <?php if($c=='D & E'){print "selected";} ?> title="D & E">D & E TRANSPRT</option>
                          <option value="DCT" <?php if($c=='DCT'){print "selected";} ?> title="DCT">DIRECT CONNECT</option>
                          <option value="EFS" <?php if($c=='EFS'){print "selected";} ?> title="EFS">EXPEDITED FREI</option>
                          <option value="GGTS" <?php if($c=='GGTS'){print "selected";} ?> title="GGTS">GREAT NORTHERN</option>
                          <option value="ISI" <?php if($c=='ISI'){print "selected";} ?> title="ISI">ISI LOGISTICS</option>
                          <option value="MARI" <?php if($c=='MARI'){print "selected";} ?> title="MARI">MARISOL INTL</option>
                          <option value="MESCA" <?php if($c=='MESCA'){print "selected";} ?> title="MESCA">MESCA FREIGHT</option>
                          <option value="MOR S" <?php if($c=='MOR S'){print "selected";} ?> title="MOR S">MORGAN SOUTH</option>
                          <option value="PPRM" <?php if($c=='PPRM'){print "selected";} ?> title="PPRM">PRIME</option>
                          <option value="R & M" <?php if($c=='R & M'){print "selected";} ?> title="R & M">R & M</option>
                          <option value="RICH" <?php if($c=='RICH'){print "selected";} ?> title="RICH">RICH LOGISTICS</option>
                          <option value="RRCC" <?php if($c=='RRCC'){print "selected";} ?> title="RRCC">ROADRUNNER CAR</option>
                          <option value="RREX" <?php if($c=='RREX'){print "selected";} ?> title="RREX">ROADRUNNER EXP</option>
                          <option  value="RRINT" <?php if($c=='RRINT'){print "selected";} ?> title="RRINT">ROADRUNNER INT</option>
                          <option value="RRLTL" <?php if($c=='RRLTL'){print "selected";} ?> title="RRLTL">ROADRUNNER LTL</option>
                          <option value="SORT" <?php if($c=='SORT'){print "selected";} ?> title="SORT">SORTINO</option>
                          <option value="SRGNT" <?php if($c=='SRGNT'){print "selected";} ?> title="SRGNT">SARGENT</option>
                          <option value="UNIT" <?php if($c=='UNIT'){print "selected";} ?> title="UNIT">UNITRANS</option>
                          <option value="WANDO" <?php if($c=='WANDO'){print "selected";} ?> title="WANDO">WANDO</option>
                          <option value="STAGECOACH" <?php if($c=='STAGECOACH'){print "selected";} ?> title="STAGECOACH">STAGECOACH</option>
                          <option value="UNKNOWN" <?php if($c=='UNKNOWN'){print "selected";} ?> title="UNKNOWN">UNKNOWN</option>
                        </select>
                        <div class="row"></div>
                         <br>
                        <a href='javascript:void(0)' class="btn btn-sm" onclick="ytd2()" style="margin-left:200px"><i class='fa fa-filter'></i> Year To Date</a>
                        <a href='javascript:void(0)' class="btn btn-sm btn-warning" onclick="getClaimsGraph3()" style="margin-left:20px"><i class='fa fa-filter'></i> Last Week</a>
<a href='javascript:void(0)' class="btn btn-sm btn-info" onclick="getweekGraph2()" style="margin-left:20px"> <i class='fa fa-filter'></i> Weekly</a>
                        <br> <br>
 <select onchange="getClaimsGraph()" class="col-sm-4" id='myear2' class="form-control">
  <?php
  $mk = date('m');
   $yk = date('Y');
  for($i=2000;$i<=$yk;$i++)
  {
    ?>
    <option value='<?php print $i;?>' <?php if($y==$i){print "selected";}?>><?php print $i;?></option>
    <?php
  }
  ?>
</select>
 <select onchange="getClaimsGraph()" class="col-sm-4" id = 'mmonth2' class="form-control">
  <?php
  for ($i = 1; $i <= 12; $i++) {
    $monthName = date('F', mktime(0, 0, 0, $i, 10));
     ?>
    <option value='<?php print $i;?>' <?php if($m==$i){print "selected";}?>><?php print $monthName;?></option>
    <?php
  }
  ?>
</select><!-- 
<label class='col-md-2'>Frequency</label>
<select onchange="getClaimsGraph()" class="col-sm-2" id = 'freequency' class="form-control">
<option value="25">0-25</option>
<option value="50">26-50</option>
<option value="75">51-75</option>
<option value="100">76-100</option>
</select> -->
</div>
  <div class="col-xs-12" id='graphss'>
    
  </div>
</div><!-- /.row -->
<script type="text/javascript">
<?php
 if($_POST['ytd']=='ytd')
  {
    ?>
    ytd2();
  
    <?php
  }
else if($_POST['weeks']=='weeks')
  {
    ?>
    getweekGraphPop();
    <?php
  }
else
  {
    ?>
      getClaimsGraph4();
    <?php
  }
?>

function getweekGraphPop()
{
   $('#graphss').html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth").val();
  var y = $("#myear").val();
  var company = $("#rrts").val();
  var values = {"month":m,"year":y,"company":company,"popup":"popup"};
  $.post("<?php print base_url();?>main/getWeekWiseGraphs",values,function(data)
  {
    $('#graphss').html(data);
  });
}
function getweekGraph2()
{
   $('#graphss').html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth2").val();
  var y = $("#myear2").val();
  var company = $("#rrts2").val();
  var values = {"month":m,"year":y,"company":company,"popup":"popup"};
  $.post("<?php print base_url();?>main/getWeekWiseGraphs",values,function(data)
  {
    $('#graphss').html(data);
  });
}
function getClaimsGraph4()
{
  $('#graphss').html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth").val();
  var y = $("#myear").val();
  var company = $("#rrts").val();
  <?php
  if($_POST['week']!='')
  {
  ?>
  var values = {"month":m,"year":y,"company":company,"only":"claims","week":'<?php print $_POST['week'];?>'};
  <?php
  }
  else
  {
    ?>
    var values = {"month":m,"year":y,"company":company,"only":"claims"};
    <?php
  }
  ?>
  $.post("<?php print base_url();?>main/getClaimsGraph",values,function(data)
  {
    $('#graphss').html(data);
  });
}
function getClaimsGraph2()
{
  $('#graphss').html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth2").val();
  var y = $("#myear2").val();
  var values = {"month":m,"year":y,"company":"ALL","only":"claims"};
  $.post("<?php print base_url();?>main/getClaimsGraph",values,function(data)
  {
    $('#graphss').html(data);
  });
}
function getClaimsGraph3()
{
  $('#graphss').html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth2").val();
  var y = $("#myear2").val();
var company = $("#rrts2").val();
  var values = {"month":m,"year":y,"company":company,"week":'week',"only":"claims"};
  $.post("<?php print base_url();?>main/getClaimsGraph",values,function(data)
  {
    $('#graphss').html(data);
  });
}
function getClaimsGraph()
{
  $('#graphss').html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth2").val();
  var y = $("#myear2").val();
  var company = $("#rrts2").val();
if(company=='ALL')
{
getClaimsGraph2();
return false;
}
  var values = {"month":m,"year":y,"company":company,"only":"claims"};
if(company!='')
{
  $.post("<?php print base_url();?>main/getClaimsGraph",values,function(data)
  {
    $('#graphss').html(data);
  });
}
}
function ytd2()
{
  $('#graphss').html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var company = $("#rrts2").val();
  $.post("<?php print base_url();?>main/getClaimsGraphTotal",{'company':company,"ytd":'ytd'},function(data)
  {
    $('#graphss').html(data);
  });
}
    </script>
</script>
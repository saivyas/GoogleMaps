<center><h3><u><?php print $title;?></u></h3></center> 
<?php 
$tc = 0;
 $ticks = max($closed_claims)+max($claims)+2;
  $tc = ceil($ticks/6);


         $tot =0;
         foreach ($frequency as $keys => $fre) {
            $tot += $fre[25000];
            $tot += $fre[50000];
            $tot += $fre[100000];
            $tot += $fre[250000];
            $tot += $fre[500000];
            $tot += $fre[600000];
         }
         if($tot<=0)
         {
          $titles = "[No Severities at this time]";
         }else
         {
          $titles = '';
         }

 if(isset($_POST['week']))
        {
$week ='set';
}else
{
$week = '';
}
?>
    <script type="text/javascript">
  <?php
function sumofstates($array,$field) {
    $result=array();
    foreach ($array as $item) {
      foreach ($item['records'] as $key => $value) {
       
      if($value[$field]!='')
      {
         $id=$value[$field];
        if (isset($result[$id])) {
            $result[$id]=$result[$id]+1;
        } else {
            $result[$id]=1;
        }
      }
      }
    }
    return $result;
}
$insureds = sumofstates($insured,'insd_veh_maneuver');
  ?>
      google.charts.setOnLoadCallback(drawinsureds);
function drawinsureds() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
           ['Day', 'Claims',''],
         <?php 


         foreach ($insureds as $key => $value) {
           print "['".$key."',".$value.",0],";
         }
         ?>
      ]);

    var options = {
      tooltip: {isHtml: true},
      title : ' Vehicle Maneuver ',
      width : 500,
      height: 400,
sliceVisibilityThreshold:0,
      vAxis: {title: '',format:'0',minValue:0, maxValue :4},
      hAxis: {title: 'Policy Effective Range'},
      seriesType: 'bars',
      series: {1: {type: 'line'}}
    };

    var charts = new google.visualization.PieChart(document.getElementById('insured_div'));
         charts.setAction({
          id: 'sample',
          text: '',
          action: function() {
            selection = charts.getSelection();
            switch (selection[0].row) {
              <?php
               $sel = 0;
               foreach ($insureds as $key => $value) {
                   print " case ".$sel++.": getAll('".$key."','insured'); break;";
                }
               ?>
            }
       charts.draw(data, options);
          }
        });
    charts.draw(data, options);

  } 

      // Load the Visualization API and the corechart package.
      //google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChartFP);
      google.charts.setOnLoadCallback(drawFunds);
      google.charts.setOnLoadCallback(drawFundsOPD);
      google.charts.setOnLoadCallback(drawFundsOPD_PAID_COLL);
      google.charts.setOnLoadCallback(drawVisualization);
      google.charts.setOnLoadCallback(drawBasic);
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Day', 'Open Claims','Closed Claims'],
         <?php 
 $jk=0;$jkl=1;
         foreach ($claims as $key => $day) {
            if(isset($_POST['week']))
        {
           print "['".date("M d", strtotime($jk++." days ago"))."',".$day.",".$closed_claims[$key]."]";
        }
        else
        {
          print "['".date("F", mktime(0, 0, 0, $_POST['month'], 10)).$jkl++."',".$day.",".$closed_claims[$key]."]";
        }

++$key;
           if(!(count($days)==$key))
           {
            print ",";
           }
         }
         ?>
      ]);

    var options = {
      title : 'Number of Liability claims',
 tooltip: {isHtml: true,trigger: 'selection' },
      width : 500,
      height: 400,
      isStacked: true,maxAlternation: 1,colors: ['violet','green'],
      vAxis: {title: '',minValue:0, maxValue :4,  ticks: [<?php 
      for($tick=0;$tick<=$ticks;)
      {
        echo $tick."," ; $tick=$tick+$tc;
      }
      if($ticks<4){echo "0,1,2,3,4";}
      ?>]},
      hAxis: {title: 'Policy Effective Date'},
      seriesType: 'bars'
    };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
 chart.setAction({
          id: 'sample',
          text: 'View',
          action: function() {
            selection = chart.getSelection();
            var column = selection[0].column;
            switch (selection[0].row) {
               <?php 
               $selection = 0;
               $gk = 0;
               $mn=1;
               foreach ($claims as $key => $day) {
                if(isset($_POST['week']))
                {
                    ?>

                    case <?php echo $selection++;?> :getPopupClaims("<?php echo date("d", strtotime($gk++." days ago"));?>",'lastweek',column,'Liability'); break;
                  <?php
                }
                else
                {
               ?>
                case <?php echo $selection++;?> :getPopupClaimsMonth("<?php echo $mn++;?>",'month_only',column,'Liability'); break;
                <?php
                }
               }
               ?>
            }
           chart.draw(data, options);
          }
        });
        chart.draw(data, options);
      } 
function drawChartFP() {

        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Day', 'Open Claims','Closed Claims'],
         <?php 
 $jk=0;$jkl=1;
         foreach ($claims_fp as $key => $day) {
            if(isset($_POST['week']))
        {
           print "['".date("M d", strtotime($jk++." days ago"))."',".$day.",".$closed_claims_fp[$key]."]";
        }
        else
        {
          print "['".date("F", mktime(0, 0, 0, $_POST['month'], 10)).$jkl++."',".$day.",".$closed_claims_fp[$key]."]";
        }

++$key;
           if(!(count($days)==$key))
           {
            print ",";
           }
         }
         ?>
      ]);

    var options = {
      title : 'Number of First party claims',
 tooltip: {isHtml: true,trigger: 'selection' },
      width : 500,
      height: 400,
      isStacked: true,maxAlternation: 1,colors: ['violet','green'],
      vAxis: {title: '',minValue:0, maxValue :4,format:'0'},
      hAxis: {title: 'Policy Effective Date'},
      seriesType: 'bars'
    };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div_fp'));
 chart.setAction({
          id: 'sample',
          text: 'View',
          action: function() {
            selection = chart.getSelection();
            var column = selection[0].column;
            switch (selection[0].row) {
               <?php 
               $selection = 0;
               $gk = 0;
               $mn=1;
               foreach ($claims as $key => $day) {
                if(isset($_POST['week']))
                {
                    ?>

                    case <?php echo $selection++;?> :getPopupClaims("<?php echo date("d", strtotime($gk++." days ago"));?>",'lastweek',column,'Firstparty'); break;
                  <?php
                }
                else
                {
               ?>
                case <?php echo $selection++;?> :getPopupClaimsMonth("<?php echo $mn++;?>",'month_only',column,'Firstparty'); break;
                <?php
                }
               }
               ?>
            }
           chart.draw(data, options);
          }
        });
        chart.draw(data, options);
      } 


      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
           ['Day', 'Severity',''],
         <?php 
         $first =0;
         $sec =0;
         $three =0;
         $four =0;
         $fiv =0;
         $six =0;
         foreach ($frequency as $keys => $fre) {
            $first += $fre[25000];
            $sec += $fre[50000];
            $three += $fre[100000];
            $four += $fre[250000];
            $fiv += $fre[500000];
            $six += $fre[600000];
         }
               print "['0-25k',".$first.",0]";
              print ",['25-50k',".$sec.",0]";
              print ",['50-100k',".$three.",0]";
              print ",['100-250k',".$four.",0]";
              print ",['250-500k',".$fiv.",0]";
              print ",['500k+',".$six.",0]";
         ?>
      ]);

    var options = {
      tooltip: {isHtml: true,trigger: 'selection' },
      title : 'Severity <?php print $titles;?>',
      width : 500,
      height: 400,
sliceVisibilityThreshold:0,
      vAxis: {title: '',format:'0',minValue:0, maxValue :4},
      hAxis: {title: 'Policy Effective Range'},
      seriesType: 'bars',
      series: {1: {type: 'line'}}
    };

    var charts = new google.visualization.PieChart(document.getElementById('bar_div'));
     charts.setAction({
          id: 'sample',
          text: 'View',
          action: function() {
            selection = charts.getSelection();
            switch (selection[0].row) {
              case 0: getSeverity(25000,'0-5k'); break;
              case 1: getSeverity(50000,'25-50k'); break;
              case 2: getSeverity(100000,'50-100k'); break;
              case 3: getSeverity(250000,'100-250k'); break;
              case 4: getSeverity(500000,'250-500k'); break;
              case 5: getSeverity(600000,'500k+'); break;
            }
       charts.draw(data, options);
          }
        });
    charts.draw(data, options);

  }
function getSeverity(range,text)
{
  $("#severityrange").html(text);
   $('#my-modal').modal({
        show: 'false'
    }); 
   $("#cont").html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth").val();
  var y = $("#myear").val();
  var company = $("#rrts").val();
var rsd = $("#rsd").val();
var week = '<?php print $week;?>';
  $.post("<?php print base_url();?>main/getSeverity",{"range":range,"month":m,"year":y,"company":company,'week':week,"rsd":rsd},function(res){
    $("#cont").html(res);
  });
}

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Frequency');

      data.addRows([
         <?php 
         foreach ($claims as $key => $day) {
           print "[".++$key.",".$day."]";
           if(!(count($days)==$key))
           {
            print ",";
           }
         }
         ?>
      ]);

      var options = {
        title : 'Frequency',
        hAxis: {
          title: '',
          format:'0',minValue:1, maxValue :4
        },
        vAxis: {
          title: 'Claims',format:'0',minValue:0, maxValue :4
        }
      };
      var chart = new google.visualization.LineChart(document.getElementById('line_div'));

      chart.draw(data, options);
    }
function drawFunds1() {

        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Day', 'Total Reserves',''],
         <?php 
         foreach ($funds as $key => $day) {

           print "['Day ".++$key."',".$day.",0]";
           if(!(count($days)==$key))
           {
            print ",";
           }
         }
         ?>
      ]);

    var options = {
      tooltip: {isHtml: true},
      title : 'Total Reserves',
      width : 500,
      height: 400,
      vAxis: {title: '',format:'0',minValue:0, maxValue :4},
      hAxis: {title: 'Policy Effective Date'},
      seriesType: 'bars',
      series: {1: {type: 'line'}}
    };

        // Instantiate and draw our chart, passing in some options.
        var chart2 = new google.visualization.ComboChart(document.getElementById('funds_div'));
        chart2.setAction({
          id: 'sample',
          text: 'View Claims'/*,
          action: function() {
            selection = chart2.getSelection();
            switch (selection[0].row) {
              case 0: getSeverity(25); break;
              case 1: getSeverity(50); break;
              case 2: getSeverity(75); break;
              case 3: getSeverity(100); break;
            }
          }*/
        });
        chart2.draw(data, options);
      } 
      function drawFunds() {
       var data = google.visualization.arrayToDataTable([
        ['', 'PD', 'BI', 'LE', 'ALAE'],
    <?php 
         $g = 0;$gd = -1;$jk = 1;$jkl = 0;
         foreach ($claims as $key => $day) {
          $bi = 0;
          $pd = 0;
          $le = 0;
          $alae = 0;
          $opd = 0;
          if($FundsPayTypes[$g]['BI']!='' or $FundsPayTypes[$g]['BI']!=0)
          {
             $bi = $FundsPayTypes[$g]['BI'];
          }
          if($FundsPayTypes[$g]['PD']!='' or $FundsPayTypes[$g]['PD']!=0)
          {
            $pd = $FundsPayTypes[$g]['PD'];
          }
          if($FundsPayTypes[$g]['LE']!='' or $FundsPayTypes[$g]['LE']!=0)
          {
            $le = $FundsPayTypes[$g]['LE'];
          }
          if($FundsPayTypes[$g]['ALAE']!='' or $FundsPayTypes[$g]['ALAE']!=0)
          {
            $alae = $FundsPayTypes[$g]['ALAE'];
          }
          if($FundsPayTypes[$g]['OPD']!='' or $FundsPayTypes[$g]['OPD']!=0)
          {
            $opd = $FundsPayTypes[$g]['OPD'];
          }
          if(isset($_POST['week']))
            {

  print "['".date("M d", strtotime(++$gd." days ago"))."',".$pd.",".$bi.",".$le.",".$alae."],";
            }
            else
            {
  print "['".date("M", mktime(0, 0, 0, $_POST['month'], 10)).$jk++."',".$pd.",".$bi.",".$le.",".$alae."],";
            }

            ++$key;
            $g++;
         }
         ?>
      ]);
       
     var options = {
          tooltip: {isHtml: true,trigger: 'selection' },
legend: { position: 'top', maxLines: 3, textStyle: {color: 'black', fontSize: 12 } },
    isStacked: true,height:600,maxAlternation: 1,
    vAxis: {title: '',format:'0',minValue:0, maxValue :4},
    title: 'Total Incurred By Date Of Loss',
      };

        var chart = new google.visualization.ColumnChart(document.getElementById('funds_div'));
        chart.setAction({
          id: 'sample',
          text: 'View',
          action: function() {
            selection = chart.getSelection();

             switch (selection[0].row) {
               <?php 
               $selection = 0;
               $gk = 0;
               $mn=1;
               foreach ($claims as $key => $day) {
                if(isset($_POST['week']))
                {
print " case ".$selection++.": getPopupClaimsForIncurred(".date("d", strtotime($gk++." days ago")).",'lastweek',selection[0].column); break;";
                }
                else
                {
                print " case ".$selection++.": getPopupClaimsMonthForIncurred(".$mn++.",'month_only',selection[0].column); break;";
                }
               }
               ?>
            }
            chart.draw(data, options);
            
          }
        });
        chart.draw(data, options);
      }

            function drawFundsOPD() {
       var data = google.visualization.arrayToDataTable([
        ['','OPD RESERVE','OPD PAID'],
         <?php 
         $g = 0;$gd = -1;$jk = 1;$jkl = 0;
         foreach ($claims as $key => $day) {
          $opd = 0;
          $opdr = 0;
          $opd_paid = 0;
         if($FundsPayTypes[$g]['OPD']!='' or $FundsPayTypes[$g]['OPD']!=0)
          {
            $opd = $FundsPayTypes[$g]['OPD'];
          }
          if($FundsPayTypes[$g]['OPD_PAID']!='' or $FundsPayTypes[$g]['OPD_PAID']!=0)
          {
            $opd_paid = $FundsPayTypes[$g]['OPD_PAID'];
          }
          if($FundsPayTypes[$g]['OPD']!='' or $FundsPayTypes[$g]['OPD']!=0)
          {
            $opd = $FundsPayTypes[$g]['OPD'];
          }
          if($FundsPayTypes[$g]['OPD_RESERVE']!='' or $FundsPayTypes[$g]['OPD_RESERVE']!=0)
          {
            $opdr = $FundsPayTypes[$g]['OPD_RESERVE'];
          }
          if(isset($_POST['week']))
            {
                 print "['".date("M d", strtotime(++$gd." days ago"))."',".$opdr.",".$opd_paid."],";
            }
            else
            {
                print "['".date("M", mktime(0, 0, 0, $_POST['month'], 10)).$jk++."',".$opdr.",".$opd_paid."],";
            }
            ++$key;
            $g++;
         }
         ?>
      ]);
       
     var options = {
          tooltip: {isHtml: true,trigger: 'selection' },
        legend: { position: 'top', maxLines: 3, textStyle: {color: 'black', fontSize: 12 } },
    isStacked: true,height:600,width:550,colors: ['green','violet','orange'],
    vAxis: {title: '',format:'0',minValue:0, maxValue :4},
    title: 'Total Incurred By Date Of Loss',
      };

        var chart = new google.visualization.ColumnChart(document.getElementById('funds_divOPD'));
        chart.setAction({
          id: 'sample',
          text: 'View',
          action: function() {
            selection = chart.getSelection();
             switch (selection[0].row) {
               <?php 
               $selection = 0;
               $gk = 0;
               $mn=1;
               foreach ($claims as $key => $day) {
                if(isset($_POST['week']))
                {
                  print " case ".$selection++.": getPopupClaimsForIncurred(".date("d", strtotime($gk++." days ago")).",'lastweek',5); break;";
                }
                else
                {
                print " case ".$selection++.": getPopupClaimsMonthForIncurred(".$mn++.",'month_only',5); break;";
                }
               }
               ?>
            }
            chart.draw(data, options);
            
          }
        });
        chart.draw(data, options);
      }
      // Add our selection handler.

//opd paid and collection
function drawFundsOPD_PAID_COLL() {
       var data = google.visualization.arrayToDataTable([
        ['','OPD PAID','OPD COLLECTION'],
         <?php 
         $g = 0;$gd = -1;$jk = 1;$jkl = 0;
         foreach ($claims as $key => $day) {
          $opd_paid = 0;
          $opd_coll = 0;

          if($FundsPayTypes[$g]['OPD_PAID']!='' or $FundsPayTypes[$g]['OPD_PAID']!=0)
          {
            $opd_paid = $FundsPayTypes[$g]['OPD_PAID'];
          }
          if($FundsPayTypes[$g]['OPD_COLL']!='' or $FundsPayTypes[$g]['OPD_COLL']!=0)
          {
            $opd_coll = $FundsPayTypes[$g]['OPD_COLL'];
          }
          if(isset($_POST['week']))
            {
                print "['".date("M d", strtotime(++$gd." days ago"))."',".$opd_paid.",".$opd_coll."],";
            }
            else
            {
                print "['".date("M", mktime(0, 0, 0, $_POST['month'], 10)).$jk++."',".$opd_paid.",".$opd_coll."],";
            }
            ++$key;
            $g++;
         }
         ?>
      ]);
       
     var options = {
          tooltip: {isHtml: true,trigger: 'selection' },
        legend: { position: 'top', maxLines: 3, textStyle: {color: 'black', fontSize: 12 } },
    isStacked: true,height:600,width:550,colors: ['orange','green'],
    vAxis: {title: '',format:'0',minValue:0, maxValue :4},
    title: 'Total OPD Paid And Collection By Date Of Loss',
      };

        var chart = new google.visualization.ColumnChart(document.getElementById('fundsOPD_PAID_COLL'));
        chart.setAction({
          id: 'sample',
          text: 'View',
          action: function() {
            selection = chart.getSelection();
             switch (selection[0].row) {
               <?php 
               $selection = 0;
               $gk = 0;
               $mn=1;
               foreach ($claims as $key => $day) {
                if(isset($_POST['week']))
                {
                  print " case ".$selection++.": getPopupClaimsForIncurred(".date("d", strtotime($gk++." days ago")).",'lastweek',5); break;";
                }
                else
                {
                print " case ".$selection++.": getPopupClaimsMonthForIncurred(".$mn++.",'month_only',5); break;";
                }
               }
               ?>
            }
            chart.draw(data, options);
            
          }
        });
        chart.draw(data, options);
      }
//opd paid and collection end


    </script>

<div id="barchart_values" style=""></div>
<div class="row">
  <div class="col-xs-12">
    <div class="col-xs-6">
      <div id="chart_div"></div>
    </div>
    <div class="col-xs-6">
      <div id="chart_div_fp"></div>
    </div>
    <div class="col-xs-6">
      <div id="bar_div"></div>
    </div>
    <div class="col-xs-6" style='margin-top:10%'>
      <div id="line_div"></div>
    </div>
    </div>
    <div class="col-xs-12">
    <div class="col-xs-6">
      <div id="funds_div"></div>
    </div>
    <div class="col-xs-6">
     <div id="funds_divOPD" ></div>
    </div>
    <div class="col-xs-6">
     <div id="fundsOPD_PAID_COLL" ></div>
    </div>
    <div class="col-xs-6">
     <div id="insured_div"></div>
    </div>
  </div>
</div><!-- /.row -->
<script type="text/javascript">
  function switchs(id)
  {
    $("#funds_div").slideToggle('slow');
    $("#funds_divOPD").slideToggle('slow');
    var a = $(id).html();
    if(a=="OPD")
    {
      $(id).html('<i class="fa fa-backward" aria-hidden="true"></i>');
     // google.charts.setOnLoadCallback(drawFundsOPD);
    }else
    {
      $(id).html('OPD');
    }

  }
</script>
<div id="my-modal" class="modal">
                  <div class="modal-dialog" style="width:85%">
                    <div class="modal-content">
                      <div id="modal-wizard-container">
                        <div class="modal-header">
                          <div class="widget-header">
                            <h4 class="widget-title">Claims with severity <span id='severityrange'></span></h4>
                          </div>
                        </div>

                        <div class="modal-body step-content">
                          <div id="cont" style="height:400px;overflow:scroll;overflow-x:hidden"></div>
                        </div>
                        <div class="modal-footer wizard-actions">
                        <a href='javascript:void(0)' onclick="prints()" class="btn btn-sm"> <i class="fa fa-print"> </i>Print</a>
                        <button class="btn btn-danger btn-sm pull-right" data-dismiss="modal">
                          <i class="ace-icon fa fa-times"></i>
                          Close
                        </button>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
<div id="my-modal1" class="modal">
<div class="modal-dialog" style="width:75%">
<div class="modal-content">
<div class="modal-body step-content">
  <div id="conts" style="height:600px;overflow:scroll;overflow-x:hidden"></div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
function getPopupClaims(week_day,type,column,cl_type)
{
   $('#my-modal1').modal({
        show: 'false'
    }); 
   $("#conts").html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth").val();
  var y = $("#myear").val();
  var company = $("#rrts").val();
  var rsd = $("#rsd").val();
var week = '<?php print $week;?>';
  $.post("<?php print base_url();?>main/getPopupClaims",{"type":type,"month":m,"year":y,"company":company,"rsd":rsd,"week_day":week_day,'column':column,'cl_type':cl_type},function(res){ 
    $("#conts").html(res);
  });
}
function getPopupClaimsMonth(month_day,type,column,cl_type)
{
   $('#my-modal1').modal({
        show: 'false'
    }); 
   $("#conts").html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth").val();
  var y = $("#myear").val();
  var company = $("#rrts").val();
  var rsd = $("#rsd").val();
var week = '<?php print $week;?>';
  $.post("<?php print base_url();?>main/getPopupClaims",{"type":type,"month":m,"year":y,"company":company,"rsd":rsd,"month_day":month_day,'column':column,'cl_type':cl_type},function(res){ 
    $("#conts").html(res);
  });
}
function getPopupClaimsForIncurred(week_day,type,paye_type)
{
  var payee = '';
  switch(paye_type){
    case 1 : payee="PD"; break;
    case 2 : payee="BI"; break;
    case 3 : payee="LE"; break;
    case 4 : payee="ALAE"; break;
    case 5 : payee="OPD"; break;
  }
   $('#my-modal1').modal({
        show: 'false'
    }); 
   $("#conts").html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth").val();
  var y = $("#myear").val();
  var company = $("#rrts").val();
  var rsd = $("#rsd").val();
var week = '<?php print $week;?>';
  $.post("<?php print base_url();?>main/getPopupClaimsForIncurred",{"type":type,"month":m,"year":y,"company":company,"rsd":rsd,"week_day":week_day,"payee":payee},function(res){ 
    $("#conts").html(res);
  });
}
function getPopupClaimsMonthForIncurred(month_day,type,paye_type)
{
    var payee = '';
    switch(paye_type){
      case 1 : payee="PD"; break;
      case 2 : payee="BI"; break;
      case 3 : payee="LE"; break;
      case 4 : payee="ALAE"; break;
      case 5 : payee="OPD"; break;
    }
   $('#my-modal1').modal({
        show: 'false'
    }); 
   $("#conts").html("<i class='fa fa-spinner fa-spin' style='font-size:30px'></i>");
  var m = $("#mmonth").val();
  var y = $("#myear").val();
  var company = $("#rrts").val();
  var rsd = $("#rsd").val();
var week = '<?php print $week;?>';
  $.post("<?php print base_url();?>main/getPopupClaimsForIncurred",{"type":type,"month":m,"year":y,"company":company,"rsd":rsd,"month_day":month_day,"payee":payee},function(res){ 
    $("#conts").html(res);
  });
}
</script>

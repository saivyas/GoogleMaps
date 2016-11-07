<?php
//print_r($FundsPayTypes);
?>

<center><h3><u><?php print $title;?></u></h3></center>   
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      //google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChartc);
     // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChartc() {

        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Day', 'Total Claims',''],
          <?php 
 $jk=0;$jkl=1;
         foreach ($claims as $key => $day) {
          if(isset($_POST['week']))
        {
           print "['".date("M d", strtotime($jk++." days ago"))."',".$day.",0]";
        }
        else
        {
          print "['".date("F", mktime(0, 0, 0, $_POST['month'], 10)).$jkl++."',".$day.",0]";
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
      title : 'Number Of Claims',
      width : 500,
      height: 400,
      vAxis: {title: '',format:'0',minValue:0, maxValue :4},
      hAxis: {title: 'Policy Effective Date'},
      seriesType: 'bars',
      series: {1: {type: 'line'}}
    };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      } 
    </script>

<div id="barchart_values" style=""></div>
<div class="row">
  <div class="col-xs-12">
    <div class="col-md-offset-2 col-xs-6">
      <div id="chart_div2"></div>
    </div>
  </div>
</div><!-- /.row -->

<?php
?>
<center><h3><u><?php print $title;?></u></h3></center>   
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      //google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChartss);
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChartss() {

        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Day', 'Total Claims',''],
         <?php 
         foreach ($claims as $key => $day) {
           print "['".date('F', mktime(0, 0, 0, ++$key, 10))."',".$day.",0]";
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
        var chart = new google.visualization.ComboChart(document.getElementById('chart_div22'));
        chart.draw(data, options);
      } 
</script>

<div id="barchart_values" style=""></div>
<div class="row">
  <div class="col-xs-12">
    <div class="col-md-offset-2 col-xs-6">
      <div id="chart_div22"></div>
    </div>
  </div>
</div><!-- /.row -->
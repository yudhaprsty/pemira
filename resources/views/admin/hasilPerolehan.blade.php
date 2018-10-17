<?php session()->put('flag', 3); ?>
@extends('admin.adminPartial.master')

@section('content')
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        <?php foreach ($paslon as $paslons){?>
        ['Task', 'Hours per Day'],
        ['<?php echo $paslons->nomerurut ?>',     11],
      ]);
      <?php } ?>
      var options = {
        title: 'My Daily Activities'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Hasil Perolehan</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div id="piechart" style="width: 1000px; height: 500px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection

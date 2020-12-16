<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="30" >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>hasil</title>
</head>
<body>
  
<h1>My Web Page</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var calon1 = {{ $data->calon1}};
  var calon2 = {{ $data->calon2}};
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Calon 1', calon1],
  ['Calon 2', calon2]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Hasil pemungutan suara', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
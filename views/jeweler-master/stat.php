<?php
// Create connection and select db
$connection =mysqli_connect('localhost', 'root', '', 'ecommerce');
// Get data from database
$query = "SELECT mode_payement,COUNT(*) num FROM commande_det GROUP BY mode_payement DESC";
$query1= "SELECT ville,COUNT(*) num1 FROM commande_det GROUP BY ville DESC";
$result1=mysqli_query($connection,$query1);
$result=mysqli_query($connection, $query);
var_dump($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
      <?php
      if(mysqli_num_rows($result) > 0){
          while($row =mysqli_fetch_array($result)){
            echo "['".$row['mode_payement']."',".$row['num']."],";
          }
      }
      ?>
    ]);
    
 var options = {
          title: 'Mode de Payement',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
      <?php
      if(mysqli_num_rows($result1) > 0){
          while($row =mysqli_fetch_array($result1)){
            echo "['".$row['ville']."',".$row['num1']."],";
          }
      }
      ?>
    ]);
    
 var options = {
          title: 'Mode de Payement',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d1'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    <div id="piechart_3d1" style="width: 900px; height: 500px;"></div>

</body>
</html>



     
       
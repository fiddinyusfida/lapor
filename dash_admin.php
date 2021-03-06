<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'template/header.php';
include 'template/sidebar.php';
require 'db_config.php';

$query = "SELECT prioritas, count(prioritas) as jumlah from tb_laporan GROUP BY prioritas";
$result = mysqli_query($conn, $query);

$query = "SELECT status, count(status) as jumlah from tb_laporan GROUP BY status ";
$resultStatus = mysqli_query($conn, $query);
?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });

    google.charts.setOnLoadCallback(drawChartPrioritas);
    google.charts.setOnLoadCallback(drawChartStatus);


    function drawChartPrioritas() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],

            <?php
            while ($chart = mysqli_fetch_assoc($result)) {
                echo "['" . $chart["prioritas"] . "', " . $chart['jumlah'] . "],";
            }
            ?>
        ]);

        var options = {
            title: 'Chart Prioritas',
            fontSize:12,
            width: 400,
            height: 300,
            backgroundColor: '#f7f7f7'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chartPrioritas'));
        chart.draw(data, options);
    }


    function drawChartStatus() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],

            <?php
            while ($chart = mysqli_fetch_assoc($resultStatus)) {
                echo "['" . $chart["status"] . "', " . $chart['jumlah'] . "],";
            }
            ?>
        ]);

        var options = {
            title: 'Chart Status Laporan',
            fontSize:12,
            width: 400,
            height: 300,
            backgroundColor: '#f7f7f7'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chartStatus'));
        chart.draw(data, options);
    }
</script>

<h5>Dashboard Admin</h5>


<div class="row">
    <div class="col-md-6">
        <div id="chartPrioritas"></div>
    </div>
    <div class="col-md-6">
        <div id="chartStatus"></div>
    </div>
</div>
</div>



<?php include 'template/footer.php'; ?>
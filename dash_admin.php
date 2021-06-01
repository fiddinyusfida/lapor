<?php
include 'template/header.php';
include 'template/sidebar.php';
require 'db_config.php';

$query = "SELECT prioritas, count(prioritas) as jumlah from tb_laporan GROUP BY prioritas";
$result = mysqli_query($conn, $query);
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],

            <?php
            while ($chart = mysqli_fetch_assoc($result)) {
                echo "['" . $chart["prioritas"] . "', " . $chart['jumlah'] . "],";
            }
            ?>
        ]);

        var options = {
            title: 'Chart prioritas',
            height: 400,
            width: 500,
            backgroundColor: '#f7f7f7'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>

<h5>Dashboard Admin</h5>


<div class="row">
    <div class="col-md-6">
        <div id="piechart"></div>
    </div>
</div>



<?php include 'template/footer.php'; ?>
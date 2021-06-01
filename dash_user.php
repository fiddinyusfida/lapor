<?php
include 'template/header.php';
include 'template/sidebar_user.php';
require 'db_config.php';

$query = "SELECT prioritas, count(prioritas) as jumlah from tb_laporan GROUP BY prioritas";
$result = mysqli_query($conn, $query);

?>


<h5>Dashboard User</h5>


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
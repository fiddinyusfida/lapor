<?php

session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'template/header.php';
include 'template/sidebar_user.php';
require 'db_config.php';
?>


<h5>Dashboard User</h5>





<?php include 'template/footer.php'; ?>
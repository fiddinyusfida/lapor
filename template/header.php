<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">

    <!-- Custom Font  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">

    <title></title>
</head>

<body class="bg-light" id="home">
    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/laporUNS.png" alt="" width="150" class="d-inline-block align-text-bottom">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item"></li>
                </ul>
                <?php
                
                if (isset($_SESSION["login"])) {
                    $username = $_SESSION["username"];
                    echo 'hi, '.$username.' . ';
                    echo ' 
                    <form class="d-flex" action="logout.php" method="POST">
                    <button class="btn btn-outline-danger btn-sm" type="submit">Logout</button>
                    </form>
                    ';
                }
                ?>
            </div>
        </div>
    </nav>
    <!-- navbar end  -->
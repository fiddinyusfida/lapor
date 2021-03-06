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

<body id="home">

    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/laporUNS.png" alt="" width="150" class="d-inline-block align-text-bottom">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#why">Mengapa Lapor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#flow">Alur</a>
                    </li>
                </ul>
                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
            </div>
        </div>
    </nav>
    <!-- navbar end  -->

    <!-- about  -->
    <section id="about">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4">
                    <img src="assets/img/banner01.svg" alt="" style="height: 300px;">
                </div>
                <div class="col-md-8 text-center mt-5">
                    <h2 class="mb-3">Apa itu LaporUNS?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo eligendi tempore?
                        Placeat ipsa quidem maiores nostrum voluptatem aspernatur, iusto quae excepturi repellat natus
                        molestias? Optio alias, beatae quaerat modi a, laboriosam necessitatibus recusandae hic impedit
                        doloribus iste voluptates fuga sit, dolores commodi nisi enim quam facere sunt ratione natus.
                    </p>
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Lapor Sekarang</button>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- why -->
    <section id="why" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center mt-5">
                    <h2 class="mb-4">Mengapa LaporUNS?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo eligendi tempore?
                        Placeat ipsa quidem maiores nostrum voluptatem aspernatur, iusto quae excepturi repellat natus
                        molestias? Optio alias, beatae quaerat modi a, laboriosam necessitatibus recusandae hic impedit
                        doloribus iste voluptates fuga sit, dolores commodi nisi enim quam facere sunt ratione natus.
                    </p>
                    
                </div>
                <div class="col-md-4 mt-5">
                    <img src="assets/img/banner02.svg" alt="" style="height: 300px;">
                </div>
            </div>
        </div>
    </section>
    <!-- why end -->

    <!-- flow  -->
    <section id="flow">
        <div class="container">
            <div class="row">
                <div class="col text-center mt-5">
                    <h2 class="mb-4">Alur laporan</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <img src="assets/img/flowLapor.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- flow end -->

    <!-- footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Alamat </h5>
                    <p>Jl. Ir. Sutami No.36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/logo-uns.png" alt="">
                </div>
                <div class="col-md-4">
                    <h5>Social Media</h5>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title text-center" id="exampleModalLabel">Login/Register</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                <img src="assets/img/laporUNS.png" alt="" style="width: 200px;" class="thumbail mb-4">
                    <h6>Sudah punya akun LaporUNS?</h6>
                    <a href="login.php">
                        <button type="button" class="btn btn-primary mb-3 mt-2">Login Sekarang</button>
                    </a><br>
                    Belum punya akun? <a href="register.php">Buat akun LaporUNS</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script>
        var exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = exampleModal.querySelector('.modal-title')
            var modalBodyInput = exampleModal.querySelector('.modal-body input')

            // modalTitle.textContent = 'Login/register'
            // modalBodyInput.value = recipient
        })
    </script>

</body>

</html>
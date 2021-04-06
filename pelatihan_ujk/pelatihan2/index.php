<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Company Profile</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    $halaman = 'beranda';
    if (isset($_GET['page'])) {
        if ($_GET['page'] != '') {
            $halaman = $_GET['page'];
        }
    }

    ?>

    <!-- Logo Perusahaan -->
    <div class="jumbotron jumbotron-fluid">
        <img src="img/logo.jpg" alt="logo-perusahaan">
        <p>Join us to be part of
            <br>
            <b>Our Company</b>
        </p>
    </div>

    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="?page=beranda">PT Ariana</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-auto" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link a-active" href="?page=beranda">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="?page=gallery">Gallery</a>
                <a class="nav-link" href="?page=bukuTamu">Buku Tamu</a>
            </div>
        </div>
    </nav>


    <div class="row">
        <div class="col-md-8">
            <?php
            include $halaman . '.php';
            ?>
        </div>
        <div class="col-md-4">
            <div class="title-profile">
                <h3>Profile</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-4 col-12">
                    <div class="card" style="width: 20rem;">
                        <img src="https://cdn.pixabay.com/photo/2018/08/28/12/41/avatar-3637425_960_720.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-4 col-12">
                    <div class="card" style="width: 20rem;">
                        <img src="https://sman3lumajang.sch.id/wp-content/uploads/2019/09/users-vector-icon-png_260862.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-4 col-12">
                    <div class="card" style="width: 20rem;">
                        <img src="https://thumbs.dreamstime.com/b/businessman-icon-vector-male-avatar-profile-image-profile-businessman-icon-vector-male-avatar-profile-image-182095609.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer>
        <p>Created@ By M Agus Khamsinindo </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.alert').delay(500).fadeOut(3000);
        });

        let path = window.location.href;
        $('.navbar-nav .nav-link').each(function() {
            if (this.href === path) {
                $(this).addClass('a-active');
            } else {
                $(this).removeClass('a-active')
            }

        });
    </script>

</body>

</html>
<?php  
include 'proses.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css/bootstrap.min.css">
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Konten -->
    <div class="row">
        <!-- Kategori Link -->
        <div class="col-md-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos facere unde explicabo consectetur veniam et harum.
                Nisi cupiditate quam, quidem excepturi praesentium rem modi earum ut recusandae error obcaecati voluptatibus!</p>
        </div>
        <!-- Isi Kontent -->
        <div class="col-md-9">
            <div class="row">
                <!-- Konten Gallery -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quas, magni esse velit minima, in eum quibusdam voluptatum
                                culpa voluptates, maiores asperiores repudiandae voluptas. Enim dolorum inventore illum sapiente magni!</p>
                        </div>
                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quas, magni esse velit minima, in eum quibusdam voluptatum
                                culpa voluptates, maiores asperiores repudiandae voluptas. Enim dolorum inventore illum sapiente magni!</p>
                        </div>
                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quas, magni esse velit minima, in eum quibusdam voluptatum
                                culpa voluptates, maiores asperiores repudiandae voluptas. Enim dolorum inventore illum sapiente magni!</p>
                        </div>
                        <div class="col-6 col-md-4 shadow p-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quas, magni esse velit minima, in eum quibusdam voluptatum
                                culpa voluptates, maiores asperiores repudiandae voluptas. Enim dolorum inventore illum sapiente magni!</p>
                        </div>
                    </div>
                    <!-- Konten Form Komentar -->
                    <div class="col-12 mt-5">
                        <div class="container" >
                            <form action="" method="POST">
                                <label for="nm">Nama Buah</label>
                                <input type="text" name="namaBuah" class="form-control" id="nm">
                                <label for="num">Harga Buah</label>
                                <input type="number" name="hargaBuah" class="form-control" id="num">
                                <label for="al">Alamat Pengiriman</label>
                                <textarea name="alamat" id="al" class="form-control" cols="30" rows="10" id="al">
                        </textarea>

                                <input type="radio" name="jenis" id="jkl" value="Diskon">
                                <label for="jkl">Diskon</label>
                                <input type="radio" name="jenis" id="jkp" value="NoDiskon">
                                <label for="jkp">Tidak Diskon</label>
                                <br>
                                <!-- Array  -->
                                <label for="jb">Jenis Buah</label>
                                <select name="jenisBuah" id="jr" class="form-control">
                                <?php foreach ($buah as $buahan):?>
                                    <option value=" <?= $buahan; ?>">
                                    <?= $buahan; ?>
                                    </option>
                                    <?php endforeach?>
                                </select>

                                <br>
                                <button type="submit" name="data" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pemanggilan file jquery.js -->
    <script src="js/bootstrap.js/jquery.js"></script>
    <!-- pemanggilan file bootstrap.js -->
    <script src="js/bootstrap.js/bootstrap.min.js"></script>
</body>

</html>
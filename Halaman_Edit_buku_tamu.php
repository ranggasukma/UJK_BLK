<?php
require_once "MySQL_connection.php";

$id = $_GET['idTamu'];
$sql = "SELECT * FROM tb_tamu WHERE id_tamu='$id'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $nama = $row['nama_tamu'];
    $email = $row['email_tamu'];
    $pesan = $row['pesan_tamu'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
    <div class ="container mt-2">
        <div class="card">
            <div class="card-header">
                <h3 align="center">Form Edit Buku Tamu</h3>
            </div>
            <div class="card-body">
                <form action="Proses_insert_buku_tamu.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" readonly value="<?=$_GET['idTamu'];?>" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required value="<?=$nama;?>" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda"  required value="<?=$email;?>"/>
                    </div>
                    <div class="form-group">
                        <textarea name="pesan" class="form-control" placeholder="Masukkan Pesan dan Kesan Anda" required ><?=$pesan;?></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary btn-block" type="submit" value="Update"  />
                    </div>
                </form>
            </div>
            <div class="card-footer"><a href="Halaman_buku_tamu.php"></a></div>
        </div>
    </div>
    
</body>
</html>
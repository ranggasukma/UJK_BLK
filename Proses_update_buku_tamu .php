<?php
require_once "MySQL_connection.php";

// $nama = 'Ali';
// $email = 'ali@gmail.com';
// $pesan = 'Selamat Belajar';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
// Perintah SQL
$sql = "INSERT INTO tb_tamu VALUES('','$nama','$email','$pesan')";

// Eksekusi Perintah
if($conn->query($sql) === true){
    // header("location:Halaman_buku_tamu.php");
    echo"<script>
    alert('Berhasil Tersimpan');
    location.assign('Halaman_buku_tamu.php');
    </script>";
}else{
    echo "<script>
    echo ('Gagal tersimpan');
    location.assign('Halaman_buku_tamu.php');

</script>";
}


?>
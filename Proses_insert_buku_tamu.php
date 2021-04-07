<?php
require_once "MySQL_connection.php";

// $nama = 'Ali';
// $email = 'ali@gmail.com';
// $pesan = 'Selamat Belajar';

// star session
session_start();
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
// Perintah SQL
$sql = "INSERT INTO tb_tamu VALUES('','$nama','$email','$pesan')";

// Eksekusi Perintah
if($conn->query($sql) === true){
    $_SESSION['insert_status'] = 1;
    $_SESSION['insert_message'] = '<strong> Berhasil !!</strong> Data berhasil Dibuat';
    header("location:Halaman_buku_tamu.php");
   
    // Menggunakan Alert
    // header("location:Halaman_buku_tamu.php");
    // echo"<script>
    // alert('Berhasil Tersimpan');
    // location.assign('Halaman_buku_tamu.php');
    // </script>";
}else{

    $_SESSION['insert_status'] = 1;
    $_SESSION['insert_message'] = '<strong>Gagal !!</strong> Data gagal Dibuat';
    $conn->error;
    header("location:Halaman_buku_tamu.php");
    // Menggunakan Alert
//     echo "<script>
//     echo ('Gagal tersimpan');
//     location.assign('Halaman_buku_tamu.php');

// </script>";
}


?>
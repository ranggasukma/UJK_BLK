<?php
require_once "MySQL_connection.php";
session_start();

// $nama = 'Ali';
// $email = 'ali@gmail.com';
// $pesan = 'Selamat Belajar';

$id = $_GET['idTamu'];

// Perintah SQL
$sql = "DELETE FROM tb_tamu WHERE id_tamu='$id'";

// Eksekusi Perintah
if($conn->query($sql) === true){
    $_SESSION['delete_status'] = 1;
    $_SESSION['delete_message'] = '<strong> Berhasil !!</strong> Data berhasil Dihapus';
    header("location:Halaman_buku_tamu.php");

    // header("location:Halaman_buku_tamu.php");
    // echo"<script>
    // alert('Berhasil Terhapus');
    // location.assign('Halaman_buku_tamu.php');
    // </script>";
}else{
    $_SESSION['delete_status'] = 1;
    $_SESSION['delete_message'] = '<strong>Gagal !!</strong> Data gagal Dihapus';
    header("location:Halaman_buku_tamu.php");

//     echo "<script>
//     echo ('Gagal terhapus');
//     location.assign('Halaman_buku_tamu.php');

// </script>";
}


?>
<?php
require_once "MySQL_connection.php";

// start session
session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
// Perintah SQL
$sql = "UPDATE tb_tamu SET nama_tamu='$nama',email_tamu='$email',pesan_tamu='$pesan' WHERE id_tamu='$id'";

// Eksekusi Perintah
if($conn->query($sql) === true){
    $_SESSION['update_status'] = 1;
    $_SESSION['update_message'] = '<strong> Berhasil !!</strong> Data berhasil diUpdate';
    header("location:Halaman_buku_tamu.php");
    
}else{
    $_SESSION['update_status'] = 1;
    $_SESSION['update_message'] = '<strong>Gagal !!</strong> Data gagal diUpdate';
    header("location:Halaman_buku_tamu.php");
}

?>
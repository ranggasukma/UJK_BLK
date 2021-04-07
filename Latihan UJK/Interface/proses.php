<?php
    $buah = ['Apel','Nanas','Anggur'];

    // Proses Cek debugging ada 2 var_dump() dan print_r()
    // print_r($_POST);
    // var_dump($_POST);

    // Proses Menjalani
    if (isset($_POST["data"])){
    $namabuah = $_POST['namaBuah'];
    $hargabuah = $_POST['hargaBuah'];
    $alamatPembeli = $_POST['alamat'];
    $diskon = $_POST['jenis'];
    $JenisBuah = $_POST['jenisBuah'];
    echo dataInput($namabuah,$hargabuah,$alamatPembeli,$diskon,$JenisBuah);
    }

    function dataInput($nama = '', $harga='', $alamat='',$diskon='',$JnBuah='' )
    {
        if($diskon == 'Diskon'){
            $harga = prosesDiskon($harga);
        }
        $informasi = "Nama Buah = $nama, harga buah = $harga, 
        alamat rumah = $alamat, Jenis buah yang dikirim = $JnBuah";
        return $informasi;
    }

    function prosesDiskon($hargaAwal= ''){

        if($hargaAwal > 15000){
            $hargaDiskon = $hargaAwal * 0.5;
        }else if ($hargaAwal > 75000){
            $hargaDiskon = $hargaAwal * 0.3;
        }else{
            $hargaDiskon = $hargaAwal *0.1;
        }
        
        return $hargaDiskon;
    }
?>
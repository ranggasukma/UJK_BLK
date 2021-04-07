<?php 
    // variabel dan string bisa dibaca
    // $z = " ";
    // // tidak membaca variabel
    // $x = '$z '; 
    $z = 'Sukses';
    $x = "Sukses : $z";
    $angka = '13245';
    $angkaFloat = 12.05;
    $hasil = $angka + $angkaFloat;

    // contoh pertama
    $dataArray = ['Andi','Duna','Saya','Zila'];
    $ArrayDenganVariabel = ["$z","$angka","$angkaFloat","$hasil"];
    // contoh kedua
    $dataArray2 = array();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Struktur Data PHP String, Integer, Float -->
    <p><?php echo "$x".'$x'."<div> $angka </div>"; ?></p>
    <p>Hasilnya <?php echo "$hasil"; ?></p>
    <!-- Cara kedua memangil Variabel hasil -->
    <p><?php echo "Hasilnya : $hasil"; ?></p>
    <?= 'Hasilnya tidak pakai echo' .$angka. ' float '. $angkaFloat?><br>
    <!-- Cara Kedua -->
    <?= "Hasilnya tidak pakai echo $angka float $angkaFloat " ?><br>
    <hr/>

    <!-- Struktur Data PHP Array Contoh Pertama -->
    <!-- Cara Menggunakan/Memanggil data array -->
    <?php foreach($dataArray as $data) : ?>
        <p> <?php echo $data; ?></p>
    <?php endforeach; ?>
    <!-- penutup Contoh 1 -->
    <hr>
    
    <?php foreach ($dataArray as $data)  { ?>
        <p ><?php echo $data ?></p>
    <?php } ?>
    <!-- penutup contoh 2 -->
    
    <?php foreach ($dataArray as $data) : ?>
        <p><?= $data ?></p>
    <?php endforeach; ?>
    <!-- penutup contoh 3 -->
    
    <!-- Contoh Pakai For -->
    <?php for($i = 0; $i< count($dataArray); $i++) : ?>
        <?= $dataArray[$i]; ?>
    <?php endfor ?>
    <!-- Penutup pake for -->
    <hr/>
    
    <!-- Struktur Data PHP array contoh Kedua -->
    <?php foreach($ArrayDenganVariabel as $data) : ?>
        <p> <?php echo $data; ?></p>
    <?php endforeach; ?>

    <p><?= "Nama : $dataArray[3]"?></p>
    <p><?= $dataArray[1]?></p>
    
</body>
</html>
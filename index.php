<?php 
require 'koneksi.php';
$daftar_ktp = query("SELECT * FROM myktp");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar KTP</title>
</head>
<body>
     <h1>Daftar KTP</h1>
     <?php foreach ($daftar_ktp as $row) : ?>
        NIK : <?=$row['nik']?>
        Nama : <?=$row['nama']?>
        <br>
        <?php endforeach; ?>
</body>
</html>
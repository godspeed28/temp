<?php 
include "koneksi.php";
// require "proses_form.php";
if ( isset($_POST["submit"])){
 
    //cek apakah data berhasil ditambahkan atau tidak 
    if(tambah($_POST) > 0 ){
        echo"
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";

    }else{
        echo"
        <script>
         alert('data gagal ditambahkan!');
          document.location.href = 'form.php';
         </script>
        ";
    }
}


?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Form</title>
 </head>
 <body>
 <form action="" method="post">
    <table border=0>
    <tr>
        <th>NIK : </th>
        <td><input type="text" name="tnik"></td>
    </tr>
    <tr>
        <th>Nama : </th>
        <td><input type="text" name="tnama"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Submit" name="submit"></td>
        <td><input type="" value="Batal" name="btl"></td>
    </tr>
    </table>
    
 </form>
 </body>
 </html>
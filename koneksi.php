<?php  

//koneksi ke database
$conn = mysqli_connect("localhost","root", "","dbktpku");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data){

    global $conn;

    
    $nik = htmlspecialchars($data["tnik"]);
    $nama = htmlspecialchars($data["tnama"]);

    // query insert data
    $query = "INSERT INTO myktp
    VALUES
    ('$nik','$nama')
    ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}
 ?>

 
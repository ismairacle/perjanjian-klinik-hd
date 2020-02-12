<?php 

include '../koneksi.php';

$conn = open_db();

$id = $_GET["id"];

$query_select = "SELECT * FROM list_pejanji WHERE id= $id";

$results = $conn->query($query_select);

$data = $results->fetch_array(MYSQLI_ASSOC);

if (isset($_POST['submit'])) {
    
    $nama = $data['nama']; 
	$noaims = $data['noaims'];
	$id_majelis = $data['id_majelis'];
	$nominal = $data['nominal'];
    $penghasilan = $data['penghasilan'];
    
    $query_update = "UPDATE user SET nama='$nama', noaims='$noaims', id_majelis='$id_majelis', nominal=$nominal, penghasilan=$penghasilan WHERE id=$id";

    $results = $conn->query($query_update);

}

close_db($conn);


















?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>

    <p>Edit Data</p>
    <form action="" method="post"></form>
    <table>
        <tr>
            <td><label for="nama">Nama :</label></td>
            <td><input type="text" name="nama" id="nama" value="<?= $data["nama"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="noaims">Majelis :</label></td>
            <td><input type="text" name="noaims" id="noaims" value="<?= $data["noaims"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="id_majelis">ID Majelis :</label></td>
            <td><input type="text" name="id_majelis" id="id_majelis" value="<?= $data["is_majelis"]; ?>"></td>  
        </tr>
        <tr>
            <td><label for="nama">Nama :</label></td>
            <td><input type="text" name="nama" id="nama"value="<?= $data["nama"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="nominal">Nominal Perjanjian :</label></td>
            <td><input type="text" name="nominal" id="nominal" value="<?= $data["nama"]; ?>"></td>
        </tr>

        <tr>
            <td><label for="penghasilan">Jumlah Penghasilan :</label></td>
            <td><input type="text" name="penghasilan" id="penghasilan" value="<?= $data["nama"]; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="submit">Edit Data</button></td>
        </tr>
    
    
    
    
    
    
    
    
    
    
    
    
    </table>









</body>
</html>
<?php 

include '../koneksi.php';

$id = $_GET["id"];

$conn = open_db();

$query_hapus = "DELETE FROM list_pejanji WHERE id=$id";
$result = $conn->query($query_hapus);

header("location:index.php");

close_db($conn);
    
    


    



?>
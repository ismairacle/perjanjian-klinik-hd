<?php

$conn = mysqli_connect("localhost","root","","ismail_db");

function hapus($id) {
    global $conn;
    mysqli_query($conn," DELETE FROM ismail_db WHERE id =$id");
    
    return mysqli_affected_rows($conn);
}



?>
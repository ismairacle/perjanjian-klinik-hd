<?php 

function open_db()
{
	$dbhost = "localhost";	
	$dbuser = "root";		
	$dbpass = "";			
	$db = "ismail_db"; 
	
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

	return $conn;
}
 
function close_db($conn)
{
	$conn -> close();
}

?>
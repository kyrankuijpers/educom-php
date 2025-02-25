<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM `myGuests` WHERE `id`=3;";

if(mysqli_query($conn, $sql)){
    echo 'deleted';
} else{
    echo 'not deleted';
}

mysqli_close($conn);

?>

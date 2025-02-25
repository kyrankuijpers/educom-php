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

$sql = "UPDATE `myGuests` SET `firstname`='Joe', `lastname`='Schoo' WHERE `id`=2;";

$result = mysqli_query($conn, $sql);

if($result){
    echo "updated";
} else{
    echo mysqli_error($con);
}

mysqli_close($conn);

?>


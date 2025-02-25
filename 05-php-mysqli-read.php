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


//$sql = "SELECT `id`, `firstname`, `lastname` FROM `myGuests` WHERE `lastname`='Doe';";
$sql = "SELECT `id`, `firstname`, `lastname` FROM `myGuests` ORDER BY `lastname` LIMIT 5;";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    echo "<table>
    <tr><th>id</th><th>firstname</th><th>lastname</th></tr>";
    
    while($row = mysqli_fetch_assoc($result)){
        //print_r($row);
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td></tr>";
    }

    echo "</table>";

} else{
    echo "no results";
}

mysqli_close($conn);

?>


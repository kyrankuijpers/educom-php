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

/*
$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn, $sql)){
    echo "db created";
} else{
    echo mysqli_error($conn);
}


$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn, $sql))
{
    echo "created table";
}

*/

/*

$sql = "INSERT INTO `myGuests` (firstname, lastname, email) VALUES ('John', 'Doe', 'john@doe.com');";
$sql .= "INSERT INTO `myGuests` (firstname, lastname, email) VALUES ('Jane', 'Boe', 'jane@boe.com');";

*/

$prepared_statement = $conn->prepare("INSERT INTO `myGuests` (`firstname`, `lastname`, `email`) VALUES (?, ?, ?);");
$prepared_statement->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$prepared_statement->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$prepared_statement->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$prepared_statement->execute();

/*
if(mysqli_multi_query($conn, $sql)){
    echo "insertion";
    // $inserted_id = mysqli_insert_id($conn);
    // echo $inserted_id;
}
*/

$prepared_statement->close();
mysqli_close($conn);

?>

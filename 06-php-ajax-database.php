<?php
    
    /* Exported SQL from phpmyadmin to create table and rows, for testing purposes on other servers

    CREATE TABLE `06-php-ajax-database` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `firstname` varchar(16) NOT NULL,
    `lastname` varchar(32) NOT NULL,
    `job` varchar(32) NOT NULL,
    `planet` varchar(16) NOT NULL,
    `race` varchar(16) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

    INSERT INTO `06-php-ajax-database` (`id`, `firstname`, `lastname`, `job`, `planet`, `race`) VALUES
    (1, 'Jack', 'O\'Neill', 'Military', 'Earth', 'Human'),
    (2, 'Samantha', 'Carter', 'Scientist', 'Earth', 'Human'),
    (3, 'Daniel', 'Jackson', 'Archeologist', 'Earth', 'Human'),
    (4, 'Teal\'c', '', 'Military', 'Chulak', 'Jaffa');

    ALTER TABLE `06-php-ajax-database`
    ADD PRIMARY KEY (`id`);

    */
    
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost', 'root', '');
    if(!$con){
        die('ripperoni' . $mysqli_error($con));
    }

    mysqli_select_db($con, 'educom');
    $sql = "SELECT `firstname`, `lastname`, `job`, `planet`, `race` FROM `06-php-ajax-database` WHERE id = '" . $q . "';";
    $result = mysqli_query($con, $sql);

    echo "<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Job</th>
        <th>Planet</th>
        <th>Race</th>
    </tr>";

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['job'] . "</td>";
        echo "<td>" . $row['planet'] . "</td>";
        echo "<td>" . $row['race'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($con);
?>
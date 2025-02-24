<?php declare(strict_types=1);?>

<!DOCTYPE html>
<html>
<body>

    <?php

    $color = "red";

    echo "My car is " . $color . "<br>";

    var_dump($color);

    var_dump(5);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);

    $x = "John";
    echo "Hello $x";
    echo 'Hello $x';

    echo strlen('hello');
    echo str_word_count("Hello world");
    echo strpos("Hello world!", "world");
    $y = "hello world";
    echo str_replace("world", "Dolly", $y);
    
    $z = " hello world war 3   ";
    echo trim($z);

    $a = explode(" ", $z);
    print_r($a);

    $b = "Hello world";
    echo substr($b, 6, 5);
    
    $c = "We are \"Vikings\" from the north";

    $d = "Hello\tWorld";
    echo $d;

    $e = 12.3;
    $e_cast = (int)$e;
    var_dump($e_cast);

    define("GREETING", "welcome");
    echo GREETING;
    const MYCAR = 'citroen';
    echo MYCAR;
    
    echo $status = (empty($user)) ? "anon" : "logged in";
    echo $x = $username ?? 'anon';

    $i = 1;

    do {
        echo $i;
        $i++;
    } while($i < 6);

    function addNumbers(float $a, float $b) : float{
        return $a + $b;
    }

    echo addNumbers(12.5, 13.1);

    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );

    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    
    


    ?>

</body>
</html>


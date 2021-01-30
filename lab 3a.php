<?php 
    $randomNumber1 = rand(1,100);
    $randomNumber2 = rand(1,100);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo ("Optelsom $randomNumber1 + $randomNumber2 = "), $randomNumber1 + $randomNumber2, "<br>";
            echo ("Aftreksom $randomNumber1 - $randomNumber2 = "), $randomNumber1 - $randomNumber2, "<br>";
            echo ("Keersom $randomNumber1 * $randomNumber2 = "), $randomNumber1 * $randomNumber2, "<br>";
            echo ("Deelsom $randomNumber1 / $randomNumber2 = "), $randomNumber1 / $randomNumber2, "<br>";
        ?>
    </h1>
</body>
</html>
<?php
    function tafel($number){
        for ($i = 1; $i <= 10; $i++){
            echo ("$i * $number = "),$i * $number,"<br>";
        };
    }
    $numbers = array(3,5,8,12)
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- 1. -->
    <h1>
        <?php
            for ($i = 1; $i <= 10; $i++){
                echo ("$i * 6 = "),$i * 6,"<br>";
            }
        ?>
    </h1>
<!-- 2. -->
    <h1>
        <?php
            tafel(6);
        ?>
    </h1>
<!-- 3. -->
    <h1>
        <?php
            foreach ($numbers as $number){
                tafel($number);
                echo "<br>";
            }
        ?>
    </h1>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ciklai</title>
</head>

<style>
    body {
        word-break: break-all;
    }
</style>

<body>
    <?php
    # 1. Task ##############
    echo '<b>1. a: </b><br/>';
    $x = 1;
    $kiek = 400;

    do {
        echo "*";
        $x++;
    } while ($x <= $kiek);
    echo "<br/>";
    echo "<br/>";
    echo '<b>1. b: </b><br/>';
    $x = 0;
    $y = 50;
    $kiek = 400;

    do {
        echo "*";
        $x++;
        if ($x % 50 == 0) {
            echo "<br/>";
        }
    } while ($x < $kiek);



    ?>
</body>

</html>
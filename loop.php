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

    .edges {
        line-height: 12px;
        width: 118px;
        height: 115px;
        margin-left: calc(50% - 60px);
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

    echo "<br/>";
    # 2. Task ##############
    echo '<b>2. </b><br/>';
    $x = 0;
    $kiek = 0;
    do {
        $rand = rand(0, 300);
        if ($rand < 150) {
            $kiek++;
        }
        if ($rand >= 275) {
            echo "<b style='color:red;'>$rand </b>";
            continue;
        }
        echo $rand . "\n";
        $x++;
    } while ($x < 300);
    echo "<br/>";
    echo "<b>Tarp jų yra: $kiek</b>";

    echo "<br/>";
    echo "<br/>";
    # 3. Task ##############
    echo '<b>3. </b><br/>';

    $nuo = 0;
    $iki = 3000;
    do {
        $nuo++;
        if ($nuo == 77) {
            echo $nuo;
        } else if ($nuo % 77 == 0) {
            echo '<b>,</b> ' . $nuo;
        }
    } while ($nuo < $iki);

    echo "<br/>";
    echo "<br/>";
    # 4. Task ##############
    echo '<b>4. </b><br/>';

    $kiek = 100;
    echo "<div class='edges'>";
    for ($y = 1; $y <= $kiek; $y++) {
        echo " * ";
    }
    echo "</div>";

    echo "<br/>";
    echo "<br/>";
    # 5. Task ##############
    echo '<b>5. </b><br/>';


    $kiek = 100;
    $noun = 10;
    $x = 11;

    echo "<div class='edges'>";
    for ($y = 0; $y < 10; $y++) {
        for ($x = 0; $x < 10; $x++) {
            if ($x == $y || $x + $y == 9) {
                echo "<font color='red'> * </font>";
            } else {
                echo ' * ';
            }
        }
        echo '<br>';
    }
    echo "</div>";

    echo "<br/>";
    echo "<br/>";
    # 6. Task ##############
    echo '<b>6. </b><br/>';

    ?>
</body>

</html>
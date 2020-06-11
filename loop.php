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
        text-align: center;
    }

    .rombe {
        line-height: 12px;
        text-align: center;
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
    for ($y = 0; $y < $noun; $y++) {
        for ($x = 0; $x < $noun; $x++) {
            if ($x == $y || $x + $y == $noun - 1) {
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

    echo '<b>6.<br/> a: </b>';
    $h = 0;
    while (1 !== $h) {
        $coin = rand(0, 1);
        if (0 == $coin) {
            echo "H ";
            $h++;
        } else {
            echo "S ";
        }
    }
    echo "<br/>";

    echo '<b> b: </b>';
    $h = 0;
    while (3 !== $h) {
        $coin = rand(0, 1);
        if (0 == $coin) {
            echo "H ";
            $h++;
        } else {
            echo "S ";
        }
    }
    echo "<br/>";
    echo '<b> c: </b>';
    $h = 0;
    while (3 !== $h) {
        $coin = rand(0, 1);
        if (0 == $coin) {
            echo 'H ';
            $h++;
        } else {
            echo 'S ';
            $h = 0;
        }
    }
    echo "<br/>";

    echo "<br/>";
    # 7. Task ##############
    echo '<b>7. </b><br/>';


    $taskai = 0;
    $petroSuma = 0;
    $kazioSuma = 0;

    while (true) {
        $petroTaskai = rand(10, 20);
        $kazioTaskai = rand(5, 25);
        echo "Petras: $petroTaskai | ";
        echo "Kazys: $kazioTaskai | ";
        if ($petroTaskai > $kazioTaskai) {
            $petroSuma += $petroTaskai;
            echo "Petras Laimėjo! [$petroSuma]<br/>";
            if ($petroSuma >= 222) {
                echo "Petras surinko pirmas!<br/>";
                break;
            }
        } else {
            $kazioSuma += $kazioTaskai;
            echo "Kazys Laimėjo! [$kazioSuma]<br/>";
            if ($kazioSuma >= 222) {
                echo "Kazys surinko pirmas!<br/>";
                break;
            }
        }
    }
    echo "<br/>";

    echo "<br/>";
    # 8. Task ##############
    echo '<b>8. </b><br/>';


    for ($i = 1; $i <= 11; $i++) {
        echo "<div class='rombe'>";
        foreach (range(1, $i) as $value) {
            $r = rand(0, 255);
            $g = rand(0, 255);
            $b  = rand(0, 255);
            $color = "rgb($r, $g, $b)";
            echo "<span style='color:$color;'> * </span>";
        }
        echo "</div>";
    }
    for ($i = 10; $i >= 1; $i--) {
        echo "<div class='rombe'>";
        foreach (range(1, $i) as $value) {
            $r = rand(0, 255);
            $g = rand(0, 255);
            $b  = rand(0, 255);
            $color = "rgb($r, $g, $b)";
            echo "<span style='color:$color;'> * </span>";
        }
        echo "</div>";
    }



    echo "<br/>";
    echo "<br/>";
    # 9. Task ##############
    echo '<b>9. </b><br/>';

    $startDuble = microtime(true);
    $endDuble = 0;
    for ($i = 0; $i < 1000000; $i++) {
        $c = "10 bezdzioniu suvalge 20 bananu.";
    }
    $endDuble = microtime(true);
    $startOne = microtime(true);
    $endOne = 0;
    for ($i = 0; $i < 1000000; $i++) {
        $c = '10 bezdzioniu suvalge 20 bananu.';
    }
    $endOne = microtime(true);
    $dubleTime = $endDuble - $startDuble;
    $oneTime = $endOne - $startOne;
    echo "Stringas viengubose: $oneTime<br/>";
    echo "Stringas dvigubose: $dubleTime<br/>";

    echo "<br/>";
    echo "<br/>";
    # 10. Task ##############
    echo '<b>10.</b><br/>';

    $vnt = 5;
    $vinis = 85;
    $smugiai = 0;
    $kiekLetas = 0;
    $kiekGreitas = 0;
    $letas = rand(5, 20);
    $greitas = rand(20, 30);
    $hits = 0;


    function hits($vinis, $hits, $kiekLetas, $kiekGreitas, $vnt)
    {
        $greitas = rand(20, 30);

        do {
            $hits++;
            $letas = rand(5, 20);
            $kiekLetas += $letas;
        } while ($kiekLetas < $vinis * $vnt);
        echo "<b>a: </b>Lėtas kalimas | Smugiu: <b>$hits</b> ( Yra $vnt vynis po $vinis mm. )";
        $hits = 0;
        echo "<br/>";
        do {
            $hits++;
            $greitas = rand(20, 30);
            if (rand(0, 1) == 1) {
                $kiekGreitas += $greitas;
            } else {
                $kiekGreitas += 0;
            }
        } while ($kiekGreitas < $vinis * $vnt);
        echo "<b>b: </b>Greitas kalimas | Smugiu: <b>$hits</b> ( Yra $vnt vynis po $vinis mm. greitai smugiuojat yra tikimybe nepataikyt! )";
    }

    echo hits($vinis, $hits, $kiekLetas, $kiekGreitas, $vnt);


    echo "<br/>";
    echo "<br/>";
    # 11. Task ##############
    echo '<b>11.</b><br/>';

    $length = 50;
    $min = 1;
    $max = 200;
    $array = [];
    echo "<b>Unikalūs: </b>";
    foreach (range(0, $length - 1) as $i) {
        while (in_array($num = mt_rand($min, $max), $array));
        $array[] = $num;
        echo " $num ";
    }
    echo "<br/>";
    echo "<b>Pirminiai:</b> ";
    $new = [];
    foreach ($array as $key => $number) {
        $count = 0;
        for ($i = 1; $i <= $number; $i++) {
            if (($number % $i) == 0) {
                $count++;
            }
        }
        if ($number == 1) {
            continue;
        }
        if ($count < 3) {
            echo $number . " ";

            array_push($new, $number);
        }
    }
    echo "<br/>";
    echo "<b>Surūšiuoti:</b> ";
    sort($new);
    foreach ($new as $value) {
        echo $value . " ";
    }
    echo "<br/>";


    ?>
</body>

</html>
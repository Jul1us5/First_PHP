<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>

<body>
    <?php

    // Setting

    $space = "&nbsp;&nbsp;&nbsp;";

    # 1. Task ##############
    echo '<b>1. </b>';

    $array = array();
    $size = 30;
    for ($x = 1; $x <= $size; $x++) {
        $rand = rand(5, 25);
        array_push($array, $rand);
    }
    print("<pre>" . print_r($array, true) . "</pre>");

    echo "<br/>";
    # 2. Task ##############
    echo '<b>2.</b>';

    $kiek = 0;
    $suma = 0;
    $newArray = [];
    $minus = 0;
    $poriniai = [];
    $neporiniai = [];

    foreach ($array as $key => $value) {
        $suma += $value;
        if ($value > 10) $kiek++;
        $minus = $value - $key;
        array_push($newArray, $minus);
        if ($key % 2 == 0) {
            $poriniai[$key] = $value;
        } else {
            $neporiniai[$key] = $value;
        }
    }
    echo "<b> a:</b> Yra daugiau <b>| $kiek</b><br/>";
    $max = max($array);
    echo "$space<b> b:</b> Didžiausia: <b>| $max</b><br/>";
    echo "$space<b> c:</b> Suma: <b>| $suma</b><br/>";
    echo "$space<b> d:</b> Reikšmė minus Indeksas:<br/>";
    print("<pre>" . print_r($newArray, true) . "</pre>");

    $array = $newArray;
    $add = 10;
    for ($x = 1; $x <= $add; $x++) {
        $rand = rand(5, 25);
        array_push($array, $rand);
    }
    echo "$space<b> e:</b> Plius 10 elementų: <b></b><br/>";
    print("<pre>" . print_r($array, true) . "</pre>");
    echo "$space<b> e:</b> Poriniai: <b></b><br/>";
    print("<pre>" . print_r($poriniai, true) . "</pre>");
    echo "$space<b> ir </b> Neporiniai: <b></b><br/>";
    print("<pre>" . print_r($neporiniai, true) . "</pre>");

    $daugiau = 15;
    $koks = 0;
    foreach ($array as $key => $value) {
        if ($value > 15) $array[$key] = '0';
        else $array[$key] = $value;
    }
    echo "$space<b> g:</b><br/>";
    print("<pre>" . print_r($array, true) . "</pre>");

    foreach ($array as $key => $value) {
        if ($value > 10) {
            $koks = $key;
            break;
        }
    }
    echo "$space<b> h: </b>Mažiausias indeksas, kurio elemento reikšmė didesnė už 10 yra: <b>$koks</b><br/>";
    echo "<br/>";

    foreach ($array as $key => $value) {
        if ($key % 2 == 0) {
            unset($array[$key]);
        }
    }
    echo "$space<b> i:</b><br/>";
    print("<pre>" . print_r($array, true) . "</pre>");

    echo "<br/>";
    # 3. Task ##############
    echo '<b>3. </b><br/>';


    $add = 200;
    $array = [];
    for ($x = 1; $x <= $add; $x++) {

        $range = range('A', 'D');
        $index = array_rand($range);
        array_push($array, $range[$index]);
    }

    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;


    foreach ($array as $value) {
        if ($value == 'A') {
            $a++;
        } else if($value == 'B') {
            $b++;
        } else if($value == 'C') {
            $c++;
        } else {
            $d++;
        }
        echo $value . " ";
    }
    echo "<br/>";
    echo "<br/>";
    echo "<b>A</b> yra: $a<br/>";
    echo "<b>B</b> yra: $b<br/>";
    echo "<b>C</b> yra: $c<br/>";
    echo "<b>D</b> yra: $d<br/>";

    echo "<br/>";
    # 4. Task ##############
    echo '<b>4. </b><br/>';


    ?>

</body>

</html>
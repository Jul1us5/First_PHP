<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array 2</title>
</head>

<style>
    body {
        word-break: break-all;
        box-sizing: border-box;
    }

    .edges {
        display: inline-block;
        width: 170px;
        height: 170px;
        margin-left: calc(50% - 60px);
    }

    .symbol {
        display: inline-block;
        width: 15px;
        line-height: 15px;
        text-align: center;
        height: 15px;
        margin: 1px;
    }
</style>

<body>
    <?php

    // Setting

    $space = "&nbsp;&nbsp;&nbsp;";

    # 1. Task ##############
    echo '<b>1. </b>';


    $array = range(0, 9);
    $innerArray = range(1, 5);
    $multiArray = array();
    $newArray = [];
    $suma = 0;
    $kiek = 0;
    $steps = 0;
    $index0 = 0;
    $index1 = 0;
    $index2 = 0;
    $index3 = 0;
    $index4 = 0;
    $r = 0; // Rounds

    foreach ($array as $level) {
        $ret[$level] = array();
        foreach ($innerArray as $level2) {
            $lvl = rand(5, 25);

            if ($lvl > 10) $kiek++;
            $multiArray[$level][] = $lvl;
            if ($level == $steps) $suma += $lvl;
            $newArray[$level] = $suma;

            if ($level2 == 1) $index0 += $lvl;
            if ($level2 == 2) $index1 += $lvl;
            if ($level2 == 3) $index2 += $lvl;
            if ($level2 == 4) $index3 += $lvl;
            if ($level2 == 5) $index4 += $lvl;
        }
        $suma = 0;
        $steps++;
    }


    print("<pre>" . print_r($multiArray, true) . "</pre>");

    echo "<br/>";
    # 2. Task ##############
    echo '<b>2.</b>';
    $skaicius = 0;
    for ($i = 1; $i < count($multiArray); $i++) {
        for ($j = 0; $j < count($multiArray[$i]); $j++) {
            if ($multiArray[$i][$j] > $skaicius) {
                $skaicius = $multiArray[$i][$j];
            }
        }
    }
    echo "<b> a:</b> Daugiau už 10 yra <b>| $kiek</b> skaičiai<br/>";
    echo "$space<b> b:</b> Didžiausias skaičius: <b>| $skaicius</b><br/>";
    echo "$space<b> c:</b> index 0 suma: <b>$index0 </b><br/>";
    echo "$space $space index 1 suma: <b>$index1 </b><br/>";
    echo "$space $space index 2 suma: <b>$index2 </b><br/>";
    echo "$space $space index 3 suma: <b>$index3 </b><br/>";
    echo "$space $space index 4 suma: <b>$index4 </b><br/>";

    echo "$space<b> d:</b><br/>";
    foreach ($multiArray as $key => $array) {

        $last = 5;
        for ($i = 0; $i < 2; $i++) {
            $lvl = rand(5, 25);
            $multiArray[$key][$last++] = "$lvl";
        }
    }
    print("<pre>" . print_r($multiArray, true) . "</pre>");
    echo "$space<b> e: </b><br/>";

    print("<pre>" . print_r($newArray, true) . "</pre>");

    echo "<br/>";
    # 3. Task ##############
    echo '<b>3.</b>';

    $array = range(1, 10);
    $multiArray = array();
    $kiek = 0;
    foreach ($array as $level) {
        $iki = rand(2, 20);
        $innerArray = range(1, $iki);
        $ret[$level] = array();
        sort($multiArray);
        foreach ($innerArray as $level2) {
            $letter = chr(rand(65, 90));
            $lvl = $letter;
            $multiArray[$level][] = $lvl;
        }
        sort($multiArray[$level]);
    }

    sort($multiArray);

    print("<pre>" . print_r($multiArray, true) . "</pre>");

    echo "<br/>";
    # 4. Task ##############
    echo '<b>4.</b>';
    echo " Surūšiavau 3. punkte, kad nereiktu per naują kopijuot, kad parodyt tvarkingai :)<br/>";


    echo "<br/>";
    # 5. Task ##############
    echo '<b>5.</b>';

    $array = range(0, 29);
    $multiArray = array();

    foreach ($array as $level) {
        $ret[$level] = array();
        foreach ($array as $level) {
            $id = rand(1, 1000000);
            $row = rand(0, 100);

            $multiArray[$level]['user_id'] = $id;
            $multiArray[$level]['place_in_row'] = $row;
        }
    }

    print("<pre>" . print_r($multiArray, true) . "</pre>");


    echo "<br/>";
    # 6. Task ##############
    echo '<b>6.</b>';

    echo "$space<b> user_id didėjančia tvarka: </b><br/>";
    sort($multiArray);
    print("<pre>" . print_r($multiArray, true) . "</pre>");

    echo "$space<b> place_in_row mažėjančia tvarka: </b><br/>";

    function place_in_row($a, $b)
    {
        return strnatcmp($b['place_in_row'], $a['place_in_row']);
    }
    usort($multiArray, 'place_in_row');
    print("<pre>" . print_r($multiArray, true) . "</pre>");


    echo "<br/>";
    # 7. Task ##############
    echo '<b>7.</b>';

    $array = range(0, 29);
    $multiArray = array();

    $length = 3;
    function random($length)
    {
        return substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"), 0, $length);
    }


    foreach ($array as $level) {
        $ret[$level] = array();
        foreach ($array as $level) {
            $id = rand(1, 1000000);
            $row = rand(0, 100);
            $length = rand(5, 15);
            $string = substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"), 0, $length);

            $multiArray[$level]['user_id'] = $id;
            $multiArray[$level]['place_in_row'] = $row;
            $shuffled = str_shuffle($string);
            $multiArray[$level]['name'] = $shuffled;
            $shuffled = str_shuffle($string);
            $multiArray[$level]['surname'] = $shuffled;
        }
    }

    print("<pre>" . print_r($multiArray, true) . "</pre>");

    echo "<br/>";
    # 8. Task ##############
    echo '<b>8.</b>';

    $newArray = [];
    $array = range(0, 9);
    $multiArray = array();
    $suma = 0;
    foreach ($array as $level) {
        $ret[$level] = array();
        $kiek = rand(0, 5);;
        $innerArray = range(0, $kiek);
        foreach ($innerArray as $key => $level2) {
            if ($kiek == 0) {
                $nera = rand(1, 10);
                $multiArray[$level][$nera] = $nera;
                $suma += $nera;
            } else {
                $lvl = rand(0, 10);
                $multiArray[$level][] = $lvl;
                $suma += $lvl;
            }
        }
    }

    print("<pre>" . print_r($multiArray, true) . "</pre>");


    echo "<br/>";
    # 9. Task ##############
    echo '<b>9.</b>';

    usort($multiArray, 
    function($a, $b){
        return (is_array($a) ? array_sum($a) : $a) <=> (is_array($b) ? array_sum($b) : $b);
    }
);

    print("<pre>" . print_r($multiArray, true) . "</pre>");

    echo "<br/>";
    # 10. Task ##############
    echo '<b>10.</b>';

    $first = range(1, 10);
    $second = range(1, 10);
    $third = [];

    $multiArray = array();
    $rand = rand(1, 10);
    $kiek = 0;
    $i = 1;
    echo "<div class='edges'>";
    foreach ($first as $level) {
        $ret[$level] = array();
        foreach ($second as $key => $level2) {

            $value = substr(str_shuffle("#%+*@%"), 0, 1);
            $color = rand(111111, 999999);

            $third['value'] = $value;
            $third['color'] = '#' . $color;
            $multiArray[$level2][$level] = $third;

            echo "<div class='symbol'>";
            echo "<b style='color:#$color;'> $value </b>";
            echo "</div>";
        }
    }
    echo "</div>";
    print("<pre>" . print_r($multiArray, true) . "</pre>");

    echo "<br/>";
    # 11. Task ##############
    echo '<b>11.</b>';

    do {
        $a = rand(0, 1000);
        $b = rand(0, 1000);
    } while ($a == $b);
    $long = rand(10, 30);
    $sk1 = $sk2 = 0;
    echo '<h3>Skaičiai ' . $a . ' ir ' . $b . '</h3>';
    $c = [];
    for ($i = 0; $i < $long; $i++) {
        $c[] = array_rand(array_flip([$a, $b]));
    }
    $skaiciai = array_sum($c);
    $sk2 = ($skaiciai - $long * $a) / ($b - $a);
    $sk1 = $long - $sk2;
    echo '<h4>Masyvas:</h4>';
    echo '<pre>';
    print_r($c);
    echo '</pre>';
    echo '<h3>Skaičius ' . $a . '  yra pakartotas ' . $sk1 . ' kartų, o skaičius ' . $b . ' - ' . $sk2 . ' kartų.</h3>';

    ?>
</body>

</html>
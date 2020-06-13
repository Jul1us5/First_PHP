<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array 2</title>
</head>

<body>
    <?php

    // Setting

    $space = "&nbsp;&nbsp;&nbsp;";

    # 1. Task ##############
    echo '<b>1. </b>';

    $array = range(1, 10);
    $innerArray = range(1, 5);
    $multiArray = array();
    $kiek = 0;
    foreach ($array as $level) {
        $ret[$level] = array();
        foreach ($innerArray as $level2) {
            $lvl = rand(5, 25);
            if ($lvl > 10) $kiek++;
            $multiArray[$level][] = $lvl;
        }
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

    $index0 = 0;
    $index1 = 0;
    $index2 = 0;
    $index3 = 0;
    $index4 = 0;




    $carry = 0;
    $index0 = array_reduce($multiArray, function ($carry, $item) {
        $carry += $item[0];
        return $carry;
    });
    $carry = 0;
    $index1 = array_reduce($multiArray, function ($carry, $item) {
        $carry += $item[1];
        return $carry;
    });
    $carry = 0;
    $index2 = array_reduce($multiArray, function ($carry, $item) {
        $carry += $item[2];
        return $carry;
    });
    $carry = 0;
    $index3 = array_reduce($multiArray, function ($carry, $item) {
        $carry += $item[3];
        return $carry;
    });
    $carry = 0;
    $index4 = array_reduce($multiArray, function ($carry, $item) {
        $carry += $item[4];
        return $carry;
    });

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
    echo "$space<b> e: !!!!!!!!!!</b><br/>";

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
    echo " Surūšiavau 3. punkte, kad nereiktu per naują kopijuot, kad parodyt tvarkingai :) <b><br/>";


    echo "<br/>";
    # 5. Task ##############
    echo '<b>5.</b>';

    ?>
</body>

</html>
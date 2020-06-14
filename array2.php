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

    $array = range(0, 9);
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
            if($kiek == 0) {
                $nera = rand(1,10);
                $multiArray[$level][$nera] = "Masyvas nieko neturi";
                $suma += $nera;
            } else {
                $lvl = rand(0, 10);
                $multiArray[$level][] = $lvl;
                $suma += $lvl;
                
            }
            
            
        }
        
        if($suma > 10) {
            $multiArray[$level]['suma'] = $suma;
            $suma = 0;
        } else {
            $multiArray[$level]['suma'] = $suma  . " indexo reikšmė";
            $suma = 0;
        }
        
    }

    print("<pre>" . print_r($multiArray, true) . "</pre>");


    echo "<br/>";
    # 9. Task ##############
    echo '<b>9.</b>';

    function suma($a, $b)
    {
        return strnatcmp($b['suma'], $a['suma']);
    }
   
    usort($multiArray, 'suma');
    $a = array_reverse($multiArray);
    
    print("<pre>" . print_r($a, true) . "</pre>");


    ?>
</body>

</html>
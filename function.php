<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<style>
    body * {
        box-sizing: border-box;
        display: inline-block;
        padding: 0;
        margin: 0;
    }
</style>


<body>
    <?php

    // Setting

    $space = "&nbsp;&nbsp;&nbsp;";

    # 1. Task ##############
    echo '<b>1. ir 2. </b><br/>';
    echo "<br/>";

    function tags($text, $h)
    {
        return "<h$h>$text</h$h>";
    }
    echo tags('Labas Pasauli!', '1');

    echo "<br/>";
    echo "<br/>";
    # 3. Task ##############
    echo '<b>3.</b>';

    $random = rand(1, 6);
    $string = substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"), 0, $random);
    echo md5($string);
    echo "<br/>";
    echo "<br/>";
    $n = md5($string); // Numbers
    for ($i = 0; $i < strlen($n); $i++) {
        $wrap = 0;
        if (is_numeric($n[$i])) {
            $wrap += $n[$i];
            echo tags($wrap, '2');
        } else {
            echo $n[$i];
        }
    }

    echo "<br/>";
    echo "<br/>";
    # 4. Task ##############
    echo '<b>4.</b>';


    function number($number)
    {
        if (is_float($number) == false) {
            $kiek = 0;
            for ($i = 1; $i < $number; $i++) {
                if ($number % $i == 0) {
                    if ($i == 1) {
                        continue;
                    } else {
                        $kiek++;
                    }
                }
            }
            if ($kiek > 0) {
                echo " Skaičius: <b>$number</b> dalijasi be liekanos (išskyrus vienetą ir patį save) iš <b>$kiek</b> skaičiaus/ų";
            } else {
                echo " Pirminis skaičius | <b>$number</b>";
            }
        } else {
            echo " <b>Galima įvesti tik sveiką skaičių :)</b>";
        }
    }
    echo number(9);

    echo "<br/>";
    echo "<br/>";
    # 5. Task ##############
    echo '<b>5.</b>';
    echo "<br/>";

    $array = [];
    $size = 100;
    for ($x = 1; $x <= $size; $x++) {
        $rand = rand(33, 77);
        array_push($array, $rand);
    }

    function n($number) //  Funkciją, kuri skaičiuoja, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos
    {
        if (is_float($number) == false) {
            $kiek = 0;
            for ($i = 1; $i < $number; $i++) {
                if ($number % $i == 0) if ($i == 1) continue;
                else $kiek++;
            }
            // if ($kiek > 0) return $kiek;
            // else return 0;
            return $kiek;
        } else return 0;
    }

    usort(
        $array,
        function ($b, $a) {
            $a = n($a);
            $b = n($b);
            return (is_array($a) ? array_sum($a) : $a) <=> (is_array($b) ? array_sum($b) : $b);
        }
    );
    print("<pre>" . print_r($array, true) . "</pre>");

    echo "<br/>";
    echo "<br/>";
    # 6. Task ##############
    echo '<b>6. + Išrūšiuotas</b>';
    echo "<br/>";

    $array = [];
    $size = 100;
    for ($x = 1; $x <= $size; $x++) {
        $rand = rand(333, 777);
        if (n($rand) == 0) {
            continue;
        } else {
            array_push($array, $rand);
        }
    }
    sort($array);
    print("<pre>" . print_r($array, true) . "</pre>");

    echo "<br/>";
    echo "<br/>";
    # 7. Task ##############
    echo '<b>7. </b>';
    echo "<br/>";



    $levels = rand(10, 30);
    function multidimensional($levels)
    {
        static $lvlCount = 0;
        $lvlCount++;
        $array = [];
        $randomNumber = rand(10, 20);
        for ($i = 0; $i < $randomNumber; $i++) {
            if (($i + 1) == $randomNumber) {
                if ($lvlCount >= $levels) {
                    array_push($array, 0);
                } else {
                    $inner = multidimensional($levels);
                    array_push($array, $inner);
                }
            } else {
                array_push($array, rand(0, 10));
            }
        }
        return  $array;
    }
    $multi = multidimensional($levels);
    echo '<br>';
    print("<pre>" . print_r($multi, true) . "</pre>");
    echo '<br>';
    echo '<br>';

    echo "<br/>";
    echo "<br/>";
    # 8. Task ##############
    echo '<b>8. </b> ';

    function suma($array)
    {
        static $suma = 0;
        foreach ($array as $val) {
            if (is_array($val)) {
                suma($val);
            } else {
                $suma += $val;
            }
        }
        return $suma;
    }

    echo "Suma: <b>" . suma($multi) . "</b>";

    echo "<br/>";
    echo "<br/>";
    # 9. Task ##############
    echo '<b>9. </b> ';
    echo "<br/>";

    $elementas = 3;
    function add($elementas)
    {
        $array = [];
        for ($i = 0; $i < $elementas; $i++) {
            $random = rand(1, 33);
            $array[$i] = $random;
        }
        $kiek = 0;
        $arr = array_slice($array, -3, 3, true);
        $elem = $elementas - count($arr);
        for ($x = $elem; $x < $elementas; $x++) {

            if (n($arr[$x]) >= 1) {
                $kiek++;
            }
        }
        if ($kiek >= 1) {
            $elementas++;
            array_push($array, $random);
            return add($elementas);
        }
        return $array;
    }

    $array = add($elementas);
    print("<pre>" . print_r($array, true) . "</pre>");
    echo "<br/>";

    echo "<br/>";
    echo "<br/>";
    # 10. Task ##############
    echo '<b>10. </b> ';

    ?>
</body>

</html>
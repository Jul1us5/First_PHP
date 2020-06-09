<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    # 1. Task ##############
    $vardas = 'Julius';
    $pavarde = 'Pavardenis';
    $gimimoMetai = '1993';
    $metai = '2020';
    $kiek = $metai - $gimimoMetai;

    echo '<b>1. </b>';
    echo "Aš esu $vardas $pavarde. Man yra $kiek metai(ų)<br/>";
    echo "<br/>";

    # 2. Task ##############
    $pirmas = rand(0, 4);
    $antras = rand(0, 4);

    echo '<b>2. </b>';
    if ($pirmas > $antras) {
        if ($pirmas != 0 && $antras != 0) {
            $sum = $pirmas / $antras;
            $round = round($sum, 2);
            echo "$round";
        } else {
            echo 'Negalimas veiksmas';
        }
    } else if ($pirmas < $antras) {
        if ($antras != 0 && $pirmas != 0) {
            $sum = $pirmas / $antras;
            $round = round($sum, 2);
            echo "$round";
        } else {
            echo 'Negalimas veiksmas';
        }
    } else {
        echo 'Negalimas veiksmas';
    }
    echo '<br/>';
    echo "<br/>";

    # 3. Task ##############

    $pirmas = rand(0, 25);
    $antras = rand(0, 25);
    $trecias = rand(0, 25);

    echo '<b>3. </b>';
    $numbers = array($pirmas, $antras, $trecias);
    sort($numbers);
    print implode(", ", $numbers);
    echo " | ";
    echo "<b>";
    print implode(array_slice($numbers, 1, 1));
    echo "</b>";
    echo "<br/>";
    echo "<br/>";

    # 4. Task ##############

    echo '<b>4. </b>';
    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);

    echo "$a, $b, $c";
    if ($a == $b || $a == $c) {
        echo ' | <b>Negalima</b>';
    } else if ($b == $c || $b == $a) {
        echo ' | <b>Negalima</b>';
    } else if ($c == $a || $c == $b) {
        echo ' | <b>Negalima</b>';
    } else {
        echo ' | <b>Galima</b>';
    }
    echo "<br/>";
    echo "<br/>";

    # 5. Task ##############

    echo '<b>5. </b>';
    $a = rand(0, 2);
    $b = rand(0, 2);
    $c = rand(0, 2);
    $d = rand(0, 2);
    $nulis = 0;
    $vienas = 0;
    $du = 0;

    echo "$a, $b, $c, $d";


    if ($a == 0) {
        $nulis++;
    } else if ($a == 1) {
        $vienas++;
    } else {
        $du++;
    }
    if ($b == 0) {
        $nulis++;
    } else if ($b == 1) {
        $vienas++;
    } else {
        $du++;
    }
    if ($c == 0) {
        $nulis++;
    } else if ($c == 1) {
        $vienas++;
    } else {
        $du++;
    }
    if ($d == 0) {
        $nulis++;
    } else if ($d == 1) {
        $vienas++;
    } else {
        $du++;
    }

    echo "<br/>";
    echo "Nulis: $nulis<br/>";
    echo "Vienas: $vienas<br/>";
    echo "Du: $du<br/>";

    echo "<br/>";

    # 6. Task ##############

    echo '<b>6. </b>';

    $number = rand(1, 6);
    echo "<b>&#060;h$number&#062;$number&#060;/h$number&#062;</b>";

    echo "<br/>";
    echo "<br/>";

    # 7. Task ##############

    echo '<b>7. </b>';

    $pirmas = rand(-10, 10);
    $antras = rand(-10, 10);
    $trecias = rand(-10, 10);

    echo "$pirmas, $antras, $trecias";
    echo "<b> | </b>";

    if ($pirmas < 0) {
        echo "<font color='green'> $pirmas </font>";
    } else if ($pirmas > 0) {
        echo "<font color='blue'> $pirmas </font>";
    } else {
        echo "<font color='red'> $pirmas </font>";
    }

    if ($antras < 0) {
        echo "<font color='green'>$antras </font>";
    } else if ($antras > 0) {
        echo "<font color='blue'>$antras </font>";
    } else {
        echo "<font color='red'>$antras </font>";
    }

    if ($trecias < 0) {
        echo "<font color='green'>$trecias </font>";
    } else if ($trecias > 0) {
        echo "<font color='blue'>$trecias </font>";
    } else {
        echo "<font color='red'>$trecias </font>";
    }

    echo "<br/>";
    echo "<br/>";

    # 8. Task ##############

    echo '<b>8. </b>';

    $zvakes = rand(5, 3000);;

    echo "Žvakių: $zvakes<br/>";
    echo "1vnt. 1Eur<br/>";
    echo "Perkant > 1000vnt -3%<br/>";
    echo "Perkant > 2000vnt -4%<br/>";


    if ($zvakes > 2000) {
        $trys = $zvakes - ($zvakes * '.04');
        echo "Suma: $trys";
    } else if ($zvakes > 1000) {
        $keturi = $zvakes - ($zvakes * '.03');
        echo "Suma: $keturi";
    } else {
        echo "Suma: $zvakes";
    }

    echo "<br/>";
    echo "<br/>";

    # 9. Task ##############

    echo '<b>9. </b>';

    $a = rand(0, 100);
    $b = rand(0, 100);
    $c = rand(0, 100);

    $result = ($a + $b + $c) / 3;
    echo "$a $b $c<br/>";

    echo "Suapvalintas: ";
    echo (round($result));
    echo "<br/>";

    if ($a < 10 || $a > 90) {
        $result = ($b + $c) / 2;
        echo "Atmetus: ";
        echo (round($result));
    } else if ($b < 10 || $b > 90) {
        $result = ($a + $c) / 2;
        echo "Atmetus: ";
        echo (round($result));
    } else if ($c < 10 || $c > 90) {
        $result = ($a + $b) / 2;
        echo "Atmetus: ";
        echo (round($result));
    }

    echo "<br/>";
    echo "<br/>";

    # 10. Task ##############

    echo '<b>10. </b>';

    $val = rand(1, 12);
    $min = rand(1, 59);
    $sek = rand(1, 59);
    $add = rand(0, 300);
    $laikrodis = sprintf('%02d : %02d : %02d', $val, $min, $sek);

    echo "<b>Laikrodis: </b>$laikrodis";
    echo "<br/>";
    echo "Plius: +$add sek."; // Gautos sekundes nuo 0 iki 300
    echo "<br/>";

    // Viską paverčiu sekundėm..
    $getMin = $val * 60; // Gaunu minutes
    $getSek = (($getMin + $min) * 60) + $sek; // Gaunu sekundes
    $addSek = $getSek + $add; // Pridedu random sekundes

    // Visas gautas sekundes vėl paverčiu į Valandas, minutes..
    $val = floor($addSek / 3600);
    $min = floor($addSek / 60 % 60);
    $sek = floor($addSek % 60);

    $laikrodis = sprintf('%02d : %02d : %02d', $val, $min, $sek);
    echo "<b>Laikrodis: </b>$laikrodis";

    echo "<br/>";
    echo "<br/>";

    # 11. Task ##############

    echo '<b>11. </b>';

    $a = rand(1000, 9999);
    $b = rand(1000, 9999);
    $c = rand(1000, 9999);
    $d = rand(1000, 9999);
    $e = rand(1000, 9999);
    $f = rand(1000, 9999);

    $string = "$a $b $c $d $e $f";
    echo "$string";
    echo "<br/>";
    echo "....";
    echo "<br/>";



    ?>
</body>

</html>
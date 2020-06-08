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

    $number = rand(1,6);
    echo "<b>&#060;h$number&#062;$number&#060;/h$number&#062;</b>";

    echo "<br/>";
    echo "<br/>";

    # 7. Task ##############

    echo '<b>7. </b>';

    ?>
</body>

</html>
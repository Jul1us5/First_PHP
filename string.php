<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>

<body>
    <?php
    # 1. Task ##############

    $vardas = 'Julius';
    $pavarde = 'Pavardenis';
    echo '<b>1. </b>';
    echo "Veikėjas: $vardas $pavarde | ";

    if(strlen($vardas) > strlen($pavarde)) {
        echo "<b>$vardas</b>";
    } else {
        echo "<b>$pavarde</b>";
    }
    echo '<br/>';
    echo "<br/>";

    # 2. Task ##############
    echo '<b>2. </b>';
    $vardas = 'Julius';
    $pavarde = 'Pavardenis';

    $uppercase = strtoupper($vardas);
    $lowercase = strtolower($pavarde);
    echo "$uppercase $lowercase";

    echo '<br/>';
    echo "<br/>";

    # 3. Task ##############
    echo '<b>3. </b>';
    $vardas = 'Julius';
    $pavarde = 'Pavardenis';
    $first = "$vardas[0] $pavarde[0]";
    echo "$vardas $pavarde | ";
    echo "<b>$first</b>";

    echo '<br/>';
    echo "<br/>";

    # 4. Task ##############
    echo '<b>4. </b>';
    echo "$vardas $pavarde | ";
    $lastVardas = substr($vardas, -3);
    $lastPavarde = substr($pavarde, -3); 
    $last = "$lastVardas $lastPavarde";
    
    echo "<b>$last</b>";

    echo '<br/>';
    echo "<br/>";

    # 5. Task ##############
    echo '<b>5. </b>';
    echo 'An American in Paris | ';
    $string = 'An American in Paris';
    $replace = str_replace("A","<b>*</b>",$string);
    echo str_replace("a","<b>*</b>",$replace);

    echo '<br/>';
    echo "<br/>";

    # 6. Task ##############
    echo '<b>6. </b>';




    ?>

</body>

</html>
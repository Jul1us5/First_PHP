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

    ?>

</body>

</html>
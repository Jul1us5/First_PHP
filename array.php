<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>

<body>
    <?php

    # 1. Task ##############
    echo '<b>1. </b>';

    $array = array();
    $size = 30;
    for ($x = 1; $x <= $size; $x++) {
        $rand = rand(5, 25);
        array_push($array, $rand);
    }
    print("<pre>".print_r($array,true)."</pre>");

    echo "<br/>";
    # 2. Task ##############
    echo '<b>2. </b><br/>';


    ?>

</body>

</html>
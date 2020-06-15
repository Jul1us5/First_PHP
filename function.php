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


    

    ?>
</body>

</html>
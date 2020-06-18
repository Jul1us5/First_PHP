<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WEB 1</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .box {
        display: inline-block;
        width: 1000px;
        height: 1000px;
        float: right;
        background-color: black;
    }
</style>

<body>

    <?php

    // Setting

    $space = "&nbsp;&nbsp;&nbsp;";

    # 1. Task ##############
    echo $space . '<b>1. </b>';

    echo '<div class="box"></div>';

    echo "<br/>";
    echo "<br/>";


    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/web1.php">Linkas</a>' . " ( BE )<br/>";
    echo "<br/>";
    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/web1.php?color=1">Linkas</a>' . " ( SU )<br/>";



    if (isset($_GET['color'])) {
        if ($_GET['color'] == 1) {
            echo
                "<style>
                    .box {
                        background-color: red;
                    }
                </style>";
        }
    }


    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    # 2. Task ##############
    echo $space . '<b>2. </b>';

    echo "<br/>";
    echo "<br/>";

    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/web1.php?color=">Linkas</a>' . " (Spalvą įvesti linke)<br/>";

    if (isset($_GET['color'])) {
        $color = $_GET['color'];
            echo
            "<style>
                    .box {
                        background-color: #$color;
                    }
                </style>";
    }
    echo "<br/>";
    # 3. Task ##############
    echo $space . '<b>3. </b>';

    echo "<br/>";
    echo "<br/>";


    echo '<form action="" method="get">';
    echo $space . '#' . '<input type="text" name="color" maxlength="6">';
    echo '</form>';

    echo "<br/>";
    # 4. Task ##############
    echo $space . '<b>4. </b>';

    echo "<br/>";
    echo "<br/>";

    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/lemon.php">lemon.php</a>' . "<br/>";

    echo "<br/>";
    # 5. Task ##############
    echo $space . '<b>5. </b>';

    echo "<br/>";
    echo "<br/>";
    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/blue.php">blue.php</a>' . "<br/>";
    echo "<br/>";
    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/red.php">red.php</a>' . "<br/>";



    ?>
</body>

</html>
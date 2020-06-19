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
        height: 550px;
        float: right;
        background-color: black;
    }

    .green {
        display: inline-block;
        width: 100%;
        height: 150px;
        background-color: green;
    }

    .yellow {
        display: inline-block;
        width: 100%;
        height: 150px;
        background-color: yellow;
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


    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/WEB.php">Linkas</a>' . " ( BE )<br/>";
    echo "<br/>";
    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/WEB.php?color=1">Linkas</a>' . " ( SU )<br/>";



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

    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/WEB.php?color=">Linkas</a>' . " (Spalvą įvesti linke)<br/>";

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
    echo $space . '<b>5. ( Atskiri failai su atitinkamais pavadinimais )</b>';

    echo "<br/>";
    echo "<br/>";
    if (!empty($_GET) && isset($_GET['blue'])) {
        header("Location: http://192.168.64.2/PHP/First_PHP/web/red.php");
        die();
    }
    echo '<a href="./blue.php?blue">blue.php</a><br>';
    echo "<br/>";
    if (!empty($_GET) && isset($_GET['red'])) {
        header("Location: http://192.168.64.2/PHP/First_PHP/web/blue.php");
        die();
    }
    echo '<a href="./red.php?red">red.php</a><br>';

    echo "<br/>";
    # 6. and 7. Task ##############
    echo $space . '<b>6. ir 7. </b>';

    echo "<br/>";
    echo "<br/>";

    echo '<form action="" method="get">';
    echo $space . '<button type="submit">GET</button>';
    echo '</form>';

    echo '<form action="?color=yellow" method="post">';
    echo $space . '<button type="submit">POST</button>';
    echo '</form>';

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') echo "<div class='yellow'></div>";
    if ($method == 'GET') echo "<div class='green'></div>";


    echo "<br/>";
    # 8. Task ##############
    echo $space . '<b>8. </b>';

    echo "<br/>";
    echo "<br/>";
    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/pink.php">Linkas į Pink.php</a>' . "<br/>";

    echo "<br/>";
    # 9. and 10. Task ##############
    echo $space . '<b>9. ir 10.</b>';

    echo "<br/>";
    echo "<br/>";

    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/black.php">Linkas į Black page</a>' . "<br/>";


    ?>
</body>

</html>
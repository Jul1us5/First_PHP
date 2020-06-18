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
        width: 1200px;
        height: 120px;
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


    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/web1.php">web1.php</a>' . " ( BE )<br/>";
    echo "<br/>";
    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/web1.php?color=1">web1.php</a>' . " ( SU )<br/>";

    if (isset($_GET['color'])) {
        if($_GET['color'] == 1) {
            echo "<style>
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
    echo "<br/>";
    echo "<br/>";

    echo $space . '<a href="http://192.168.64.2/PHP/First_PHP/web/web1.php?color=">web1.php</a>' . "<br/>";




    ?>
</body>

</html>
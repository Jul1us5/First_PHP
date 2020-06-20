<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Žaidimas</title>
</head>
<style>
    body {
        box-sizing: border-box;
        width: 100%;
        height: 100vh;
        background-color: palegoldenrod;
    }

    .wrap {
        display: inline-block;
        width: 500px;
        height: 400px;
        margin-left: calc(50% - 250px);
        margin-top: calc(50vh - 350px);
        background-color: paleturquoise;
        border: 1px solid black;
        border-radius: 10px;

    }

    .title {
        display: inline-block;
        width: 500px;
        height: 40px;
        margin-left: calc(50% - 250px);
        margin-top: 150px;
        text-align: center;
        color: black;
        font-size: 30px;
        font-weight: bold;
    }

    .input {
        display: inline-block;
        width: 100%;
        float: left;
        height: 40px;
        text-align: center;
    }

    .input:first-of-type {
        padding-top: 100px;
    }

    .submit {
        display: inline-block;
        width: 500px;
        height: 40px;
        margin-top: 20px;
        margin-left: calc(50% - 40px);
    }

    img {
        display: inline-block;
        width: 15px;
        height: 15px;
        position: absolute;
        margin-left: 5px;
        margin-top: 2.5px;
    }
</style>

<body>
    <?php

    $first = '';
    $second = '';

    if (isset($_POST['first']) && !empty($_POST['first'])) {
        $first = $_POST['first'];
    }
    if (isset($_POST['second']) && !empty($_POST['second'])) {
        $second = $_POST['second'];
    }

    echo "<div class='title'>Žaidimas - Mesk Kauliuką</div>";
    echo "<div class='wrap'>";
    echo '<form action="" method="post" accept-charset="utf-8">';

    echo "<div class='input'>";
    echo '1. Player: <input type="text" name="first"> ';
    if ($first == null) {
        echo '<img src="https://image.flaticon.com/icons/png/512/1828/1828665.png">';
    } else {
        echo '<img src="https://image.flaticon.com/icons/svg/1632/1632596.svg">';
    }
    echo "</div>";

    echo "<div class='input'>";
    echo '2. Player: <input type="text" name="second">';
    if($second == null) {
        echo '<img src="https://image.flaticon.com/icons/png/512/1828/1828665.png">';
    } else {
        echo '<img src="https://image.flaticon.com/icons/svg/1632/1632596.svg">';
    }
    echo "</div>";

    echo "<div class='submit'>";
    echo '<button type="submit">Pradėti</button>';
    echo "</div>";

    echo '</form>';
    echo "</div>";



    ?>

</body>

</html>
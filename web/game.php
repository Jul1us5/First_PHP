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
        width: 30%;
        height: 40px;
        margin-left: 60px;
        text-align: center;
        padding-top: 20px;
    }
    .submit {
        display: inline-block;
        width: 500px;
        height: 40px;
        margin-top: 20px;
        margin-left: calc(50% - 40px);
    }
</style>

<body>
    <?php

    echo "<div class='title'>Žaidimas - Mesk Kauliuką</div>";
    echo "<div class='wrap'>";
    echo '<form action="" method="get">';


    echo "<div class='input'>";
    echo '1. Player: <input type="text">';
    echo "</div>";

    echo "<div class='input'>";
    echo '2. Player: <input type="text">';
    echo "</div>";

    echo "<div class='submit'>";
    echo '<button type="submit">Pradėti</button>';
    echo "</div>";
    
    echo '</form>';
    echo "</div>";


    ?>

</body>

</html>
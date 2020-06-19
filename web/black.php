<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Black</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: orange;
    }

    .white {
        background-color: white;
        width: 100%;
        height: 100vh;
    }
</style>

<body>

    <?php
    session_start();
    $kiek = 0;
    if (!empty($_GET) && isset($_GET['white'])) {
        echo "<div class='white'>";
        if (!empty($_POST) && !isset($_GET['check'])) {

            $checked = $_POST['check'];
            $count = count($checked);
            echo 'Buvo pažymėta checkboksų: <b>' . $count . '</b>';
            echo ' iš <b>' . $_SESSION["checkbox"] . '</b>';
        } else {
            echo 'Nieko nebuvo pažymėta...';
        }
        echo "</div>";
        die();
    }

    $char = range('A', 'Z');
    $random = rand(3, 10);

    echo '<form action="?white" method="post">';
    for ($i = 0; $i < $random; $i++) {
        $letter = $char[$i];
        $_SESSION["checkbox"] = $random;
        echo '<input type="checkbox" id="' . $letter . '" value="' . $letter . '" name = "check[]">';
        echo '<label for="' . $letter . '"> ' . $letter . '</label><br>';
    }

    echo '<button type="submit">Submit</button>';
    echo '</form>';
    ?>

</body>

</html>
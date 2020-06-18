


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>blue.php</title>
</head>

<style>
    body {
        background-color: blue;
    }
    a {
        color: black;
        text-decoration: none;
    }
</style>

<body>
    <?php

    // Setting

    $space = "&nbsp;&nbsp;&nbsp;";

    if (!empty($_GET) && isset($_GET['red'])) {
        header("Location: http://192.168.64.2/PHP/First_PHP/web/blue.php");
        die();
    }
    echo '<a href="./red.php?red">red.php</a><br>';




    ?>
</body>

</html>
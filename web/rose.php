<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ROSE</title>
</head>
<style>
body {
    background-color: #FF007F;
}

</style>

<body>
    <?php

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'GET') {
        header("Location: http://192.168.64.2/PHP/First_PHP/web/pink.php");
        die();
    }
    ?>

</body>

</html>
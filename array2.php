<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array 2</title>
</head>

<body>
    <?php

    // Setting

    $space = "&nbsp;&nbsp;&nbsp;";

    # 1. Task ##############
    echo '<b>1. </b>';
 
    $array = range(1,10); 
    $innerArray = range(1,5);
    


    $multiArray = array();
    foreach ($array as $level) {
        
        $ret[$level] = array();
        foreach ($innerArray as $level2) {
            $lvl = rand(5,25);
            $multiArray[$level][] = $lvl;
        }
    }

    print("<pre>" . print_r($multiArray, true) . "</pre>");

    echo "<br/>";
    # 2. Task ##############
    echo '<b>2.</b>';





    ?>
</body>

</html>
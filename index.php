<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learning</title>
</head>

<body>
    <?php
    // There is three scoup in variables
    // Local
    // Global
    // Static

    echo "Hello World";
    // Here i will create varibale

    $red = "THis is a red color";
    $name = "naimur rahman durjoy";
    echo $red;
    echo "naimur $name";
    // echo 

    $naimur = "It is me named naimur rahman durjoy";

    function testNaimurr()
    {
        global $naimur;
        echo $naimur;
    }


    $text1 = 50;
    $text2 = 50;

    $total_of_it = $text1 + $text2;

    function total()
    {
        global $total_of_it;
        echo $total_of_it;
    }


    total();
    // Working with arreys



    ?>




</body>

</html>
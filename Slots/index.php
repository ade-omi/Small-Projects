<!DOCTYPE html>
<!-- Name: Adedapo Omiyale
     Slate ID: Omiyale
     Student Number: 
     Date: Apr 1 2021
 -->

<html>
<meta name="viewport" content="width=device-width" , initial-scale="1.5">

<head>
    <title>Slots</title>
    <link rel="stylesheet" href="css/a3.css">
    <script src="javascript/a3.js"></script>
</head>

<body>
    <header>
        <h1>Slots!</h1>
    </header>
    <?php

    function displayRandomPhotoArea()
    {
        $slotImg = array("images/1.png", "images/2.png", "images/3.png", "images/4.png", "images/5.png", "images/6.png", "images/7.png");
        $randomNumber = array_rand($slotImg);
        $randomNumber2 = array_rand($slotImg);
        $randomNumber3 = array_rand($slotImg);
        $randomImage = $slotImg[$randomNumber];
        $randomImage2 = $slotImg[$randomNumber2];
        $randomImage3 = $slotImg[$randomNumber3];

        echo "<div class='slot'><img src=\"$randomImage\" width=\"100\" height=\"100\"></div>";
        echo "<div class='slot'><img src=\"$randomImage2\" width=\"100\" height=\"100\"></div>";
        echo "<div class='slot'><img src=\"$randomImage3\" width=\"100\" height=\"100\"></div>";

        //results
        if (($randomNumber == $randomNumber2 ) && ( $randomNumber2 == $randomNumber3)) {
            echo "<p> JACKPOT!!</p>";
        } else if (($randomNumber == $randomNumber2) || ($randomNumber2 == $randomNumber3) || ($randomNumber == $randomNumber3)) {
            echo "<p> YOU WIN !!</p>";
        } else {
            echo "<p> YOU LOSE  :-( !!</p>";
        }
    }
    displayRandomPhotoArea();
    ?>

    <button id="spin" onclick="spin();">Spin</button>

    

</body>
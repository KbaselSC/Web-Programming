<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./CSS/Main.css">
        <title>Ordered Coffee</title>
    </head>
    <body>
        <?php
        //Variables
        $name = $_POST["name"];
        $coffeeAmt = $_POST["coffeeAmt"];
        $size = $_POST["size"];
        $creamAmt = $_POST["creamAmt"];
        $sugarAmt = $_POST["sugarAmt"];
        echo "<h1> Thanks for ordering!</h1>";
        
        //cases for which size of coffee the person ordered as well as the amount
        //small
        if (($coffeeAmt == 1) && ($size == "sml")) {
            echo "<img src=./Images/cupsml.jpg>";
        } elseif (($coffeeAmt == 2) && ($size == "sml")) {
            echo "<img src=./Images/cupsml.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupsml.jpg>";
        } elseif (($coffeeAmt == 3) && ($size == "sml")) {
            echo "<img src=./Images/cupsml.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupsml.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupsml.jpg>";
        }
        elseif(($coffeeAmt == 4) && ($size == "sml")){
            echo "<img src=./Images/cupsml.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupsml.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupsml.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupsml.jpg>";
        }
        //medium
        if (($coffeeAmt == 1) && ($size == "med")) {
            echo "<img src=./Images/cupmed.jpg>";
        } elseif (($coffeeAmt == 2) && ($size == "med")) {
            echo "<img src=./Images/cupmed.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupmed.jpg>";
        } elseif (($coffeeAmt == 3) && ($size == "med")) {
            echo "<img src=./Images/cupmed.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupmed.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupmed.jpg>";
        }
        elseif(($coffeeAmt == 4) && ($size == "med")){
            echo "<img src=./Images/cupmed.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupmed.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupmed.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cupmed.jpg>";
        }
        //large
        if (($coffeeAmt == 1) && ($size == "lrg")) {
            echo "<img src=./Images/cuplrg.jpg>";
        } elseif (($coffeeAmt == 2) && ($size == "lrg")) {
            echo "<img src=./Images/cuplrg.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cuplrg.jpg>";
        } elseif (($coffeeAmt == 3) && ($size == "lrg")) {
            echo "<img src=./Images/cuplrg.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cuplrg.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cuplrg.jpg>";
        }
        elseif(($coffeeAmt == 4) && ($size == "lrg")){
            echo "<img src=./Images/cuplrg.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cuplrg.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cuplrg.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cuplrg.jpg>";
        }
        //extra large
        if (($coffeeAmt == 1) && ($size == "xlrg")) {
            echo "<img src=./Images/cup.jpg>";
        } elseif (($coffeeAmt == 2) && ($size == "xlrg")) {
            echo "<img src=./Images/cup.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cup.jpg>";
        } elseif (($coffeeAmt == 3) && ($size == "xlrg")) {
            echo "<img src=./Images/cup.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cup.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cup.jpg>";
        }
        elseif(($coffeeAmt == 4) && ($size == "xlrg")){
            echo "<img src=./Images/cup.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cup.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cup.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cup.jpg>";
        }
        //cream
        if ($creamAmt == 1) {
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cream.jpg>";
        } elseif ($creamAmt == 2) {
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cream.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cream.jpg>";
        } elseif ($creamAmt == 3) {
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cream.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cream.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/cream.jpg>";
        }
        //sugar
        if ($sugarAmt == 1) {
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/sugar.jpg>";
        } elseif ($sugarAmt == 2) {
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/sugar.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/sugar.jpg>";
        } elseif ($sugarAmt == 3) {
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/sugar.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/sugar.jpg>";
            echo "<img src=./Images/plus.jpg>";
            echo "<img src=./Images/sugar.jpg>";
        }
        ?>
    </body>
</html>

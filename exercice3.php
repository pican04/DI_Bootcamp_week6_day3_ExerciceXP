<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP3</title>
    </head>
    <body>
   <h1>Test Number</h1>
  <!--Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator-->   
   
    <?php
        function ternaryTest($number)
        {
            $testWhether = $number > 30
            ? "greater than 30"
            : ($number > 20
            ? "greater than 20"
            : ($number >10
            ? "greater than 10"
            : "Input a number atleast greater than 10!")); 
            echo $number." : ".$testWhether."\n";
        }
        ternaryTest(36);
        ternaryTest(22);
        ternaryTest(11);
        ternaryTest(5);
    ?>
    </body>
</html>
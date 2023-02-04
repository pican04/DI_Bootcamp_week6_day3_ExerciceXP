<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP1</title>
    </head>
    <body>
    <h1>Check Eligibility For Voting/h1>
  <!-- Write a PHP program to check if a person is eligible to vote or not.-->    
    <?php
    function eligibilityVoting()
    {
        $name = "Marlène";
        $age = 21;
        if ($age >= 18) 
        {
            echo $name . ", you Are Eligible For Vote";
        } else {
            echo $name . ", you are not eligible for vote. ";
        }
    }
    eligibilityVoting();

    ?>
    </body>
</html>
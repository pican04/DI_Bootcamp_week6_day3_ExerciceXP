<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP4</title>
    </head>
    <body>
   <h1>Convert Word To Digit</h1>
  <!--Write a PHP function to convert word to digit-->   
    <?php
        function word_digit($word) 
        {
            $chiffre = explode(';',$word);
            $result = '';
            foreach($chiffre as $value){
                switch(trim($value)){
                    case 'zero':
                        $result .= '0';
                        break;
                    case 'one':
                        $result .= '1';
                        break;
                    case 'two':
                        $result .= '2';
                        break;
                    case 'three':
                        $result .= '3';
                        break;
                    case 'four':
                        $result .= '4';
                        break;
                    case 'five':
                        $result .= '5';
                        break;
                    case 'six':
                        $result .= '6';
                        break;
                    case 'seven':
                        $result .= '7';
                        break;
                    case 'eight':
                        $result .= '8';
                        break;
                    case 'nine':
                        $result .= '9';
                        break;    
                }
            }
            return $result;
        }

        echo word_digit("zero;three;five;six;eight;one")."\n";
        echo word_digit("seven;zero;one")."\n";
    ?>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

    function greeting($message) {

    echo $message;        

    }

    greeting("<h1>Hi customer, how are you?</h1>");


    function calculate($number1, $number2) {

        $sum = $number1 + $number2;

        echo $sum;

    }

    calculate(48, 48);

?>

</body>
</html>
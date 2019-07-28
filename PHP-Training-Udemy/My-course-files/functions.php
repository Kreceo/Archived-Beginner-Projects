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

    function maths() {

        echo 25 + 30;

    }

    function statement() {

        echo "Above is the answer to my simple maths equation";

    }

    function maths_Statement() {

        maths();
        echo "<br>";
        statement();

    }

    maths_Statement();

    ?>

</body>
</html>
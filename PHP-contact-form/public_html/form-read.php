<?php

// If statement to check if button submit was clicked and data was sent successfully to contact-form.php
if(isset($_POST['submit'])) {

    // Mysql connection made to PHPMyAdmin
    $connection = mysqli_connect('localhost:8889', 'root', 'root', 'php_form_data');

    // Return message to show it's connected
    if($connection) {
        echo "Success, connection is made";
    }

    // Query data entered
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        echo "Query FAILED!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    
        <?php

        while($row = mysqli_fetch_assoc($result)) {
            
        ?>

        <pre>
        <?php
            print_r($row);
        }
        ?>
        </pre>
</body>
</html>

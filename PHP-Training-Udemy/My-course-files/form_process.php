<!-- External page submission for form data -->

<?php

if(isset($_POST['submit'])) {

    $name = array("Edwin", "Student", "Peter", "Samit", "Maria", "Mohad", "Jane", "Tom", "Darrell", "Sam");
    $minimum = 5;
    $maxiumum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum) {

    echo "Username has to be minimum of 5 characters";
    
    }

    if (strlen($password) > $maxiumum) {

    echo "Username can not be longer than 10 characters";

    }

    if(!in_array($username, $name)) {

        echo "Sorry you are not allowed";

    } else {

        echo "Welcome!";

    }

}

?>

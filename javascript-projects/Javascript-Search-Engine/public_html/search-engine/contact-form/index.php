
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/nomalize.css">
    <title>Javascript Search Engine</title>
</head>

<body background="../../assets/images/background-blur-blurred-255379(1).jpg">

      <!-- Link here to code for the header bar with links -->
    
    <div class="navBar-Container">
        <div class="navBar-group">
            <div class="navBar-item">
                <h2>
                    <a href="../surface/index.html">Home </a>
                </h2>
            </div>
           <div class="navBar-item">
                <h2>
                    <a href="../who-we-are/index.html"> Who are we </a>
                </h2>
            </div>
            <div class="navBar-item">
                <h2>
                    <a href="../donate/index.html"> Donate </a>
                </h2>
            </div>
            <div class="navBar-item">
                <h2>
                   <a href="../help/index.html"> Help </a>
                </h2>
            </div>
            <div class="navBar-item">
                    <h2>
                       <a href=""> Contact form </a>
                    </h2>
            </div>
        </div>
    </div>

<!-- Link here to code for the header bar with links {end} -->

<!-- Validation form PHP script -->

<?php

    $firstNameErr = $lastNameErr = $emailErr = $numberErr = "";
    $firstName = $lastName = $email = $number = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["firstName"])) {
        $nameErr = "First name is required";
        } else {
        $name = test_input($_POST["firstName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
            $firstNameErr = "Only letters and white space allowed";
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["lastName"])) {
        $nameErr = "Last name is required";
        } else {
        $name = test_input($_POST["lastName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
            $lastNameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        }
        }
    }
}

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
  }

?>

<!-- PHP validation form script {end} -->

<!-- Contact form for data collection (HTML) -->

    <div class="contact-form-container">
        <p> CONTACT FORM</p>    
        <form action="index.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="firstName" placeholder="First Name.." value="<?php echo $firstName;?>"><br>
        <input type="text" name="lastName" placeholder="Last Name.." value="<?php echo $lastName;?>"><br>
        <input type="email" name="email" placeholder="Email Address.." value="<?php echo $email;?>"><br>
        <input type="text" name="number" placeholder="Contact Number.."><br>
        <textarea type="text" name="message" placeholder="Enter your message here"></textarea><br>             
        <input type="submit" class="submit-button">
        </form>
    </div>

<!-- Contact form for data collection {end} -->

<!-- Contact form Echo PHP -->

<?php

echo "Please confirm your details";
echo "<br>";
echo $firstName;
echo "<br>";
echo $lastName;
echo "<br>";
echo $email;

?>

<!-- Contact form Echo PHP {end} -->

<!-- Search engine page footer -->

<div class="footer-Container">
    <div class="footer-Text">
        <p>&copy;Copyright 2019<br />
        Javascript based Search Engine</p>
    </div>
</div>

<!-- Search engine page footer {end} -->



</body>

</html>

<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php

//  Step1: Make a form that submits one value to POST super global
	
// Below is form for submitting a username and password. The username must be longer than 10 characters to process.

	if (isset($_POST['submit'])) {

		$name = array('Darrell', 'Josh', 'Amba', 'Daniel');
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!in_array($username, $name)) {

			echo "Sorry you are not allowed";

		} else echo "Welcome" . " " . $username . ", Your password is " . $password; 

		if (strlen($username) < 10) {

			echo "Your username needs to be longer";

		} else echo "Welcome" . " " . $username . ", Your password is " . $password;

	}
	
	
	
	
	
	?>

<form action="6.php" method="post">

	<input type="username" placeholder="Please choose a username" name="username" style="width:300px;"><br><br>
	<input type="password" placeholder="Please choose a password" name="password" style="width:300px;"><br><br>
	<input type="submit" name="submit">


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:

		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 */

		$number1 = 10;
		$number2 = 20;

		echo $number1 + $number2;

		$number3 = [10];
		$number4 = [20];

		echo "<br>";

		echo $number3[0] . " " . $number4 [0]; 

		$number5 = ["number1" => 10, "number2" => 20];

		echo "<br>";

		echo $number5['number1'] . " " . $number5['number2'];


		?>

	<!-- This can become quite an effective data function for retrieving data from a database -->

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
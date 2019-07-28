<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it

	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */


 // Maths function

 function maths($number1, $number2) {

	$number1 = 2;

	$number2 = 2;

	$sum = $number2 + $number2;

 }

 maths(2,2);

 echo rand(1, 1000);

 echo "<br>";

 echo pow(8, 10);

 echo "<br>";


 // String function
 
$string = "This is a string function";

echo strlen($string);

echo "<br>";

echo strtoupper($string);

echo "<br>";

echo strtolower($string);

echo "<br>";

// Array function

$list = [39,1,4,5,325,642,421,1467,322];

echo max($list);

echo "<br>";

echo min($list);

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
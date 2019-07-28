<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

	$number1 = 10;
	$number2 = 20;

	echo $number1 + $number2;

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

 echo "<br>";

 function easyMaths($adding1, $adding2) {

	$total = $adding1 + $adding2;
	
	echo $total;

 }

	easyMaths(4, 4);
	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	if(4 < 8) {

		echo "4 is less than 8";

	}

	echo "<br>";

	for($number = 0; $number <= 5; $number++) {

		echo "4 is less than 10" . "<br>";

	}


	switch(28) {

		case 28:
		echo "You got it! I'm 28!";
		break;
		case 29:
		echo "I am not 29";
		break;
		case 30:
		echo "I am not 30";
		break;
		case 27:
		echo "I am not 27";
		break;
		case 26:
		echo "I am not 26";
		break;

		default:
		echo "You couldn't figure my age eh... haha!";

	}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>
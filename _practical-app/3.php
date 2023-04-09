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

 if(3 > 10){
	echo "three is less than ten";
} elseif( 4 > 5) {
	echo "of course four is less than five";
}
else {
	echo "I love PHP";
};

echo "<br>";

for($i = 0; $i < 10; $i++){
	echo $i;
}
echo "<br>";

$number = 11;

switch($number){
	case 11:
		echo "it is 11";
		break;
	case 37:
		echo "it is 37";
		break;
	case 35:
		echo "it is 35";
		break;
	case 7:
		echo "it is 7";
		break;
	case 3:
		echo "it is 3";
		break;
	default:
		echo "we could not find anything";
}



	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>
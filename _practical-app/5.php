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

 echo pow(3,2);
 echo "<br>";
 echo strlen("Hello World");
 echo "<br>";

 echo rand(1,1000);
 echo "<br>";

//explode() function breaks a string into an array.
 $string = "Hello World";
 $array = explode(" ", $string);
 echo $array[0];
 echo "<br>";
 echo $array[1];

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
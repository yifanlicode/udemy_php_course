<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php 

$x = "outside"; // global

function convert() {
global $x;
$x = "inside"; // local 

}


echo $x; // outside

echo "<br>";

convert(); // call the function
echo "<br>";

echo $x; // inside
echo "<br>"; 

echo $x; // inside

    
    
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

$number = array('juanita', 'maria', 'jose');

print_r($number);
echo "<br>";  

echo $number[0] . "<br>";
echo "<br>";  


// Associative Array Below 
// Key => Value
// 因为有时候我们不关心数组的顺序，而是关心数组的键值，这时候我们就可以使用关联数组
// 我们会在工作中经常使用关联数组，因为我们经常需要使用键值来访问数组中的元素

$names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz' );

print_r($names);
echo "<br>";  

echo $names['first_name'] . " " . $names['Last_Name'];
    
    
?>

</body>
</html>
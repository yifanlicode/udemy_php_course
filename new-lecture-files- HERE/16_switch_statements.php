<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<!-- php 中 switch 的用法

为什么要用switch ？  
为if 语句太多了， 用switch 语句可以简化代码

如何考察自己的代码是否可以用switch 语句呢？ 
 1. 有很多的if 语句
 2. if 语句中的条件是相同的变量
 3. if 语句中的条件是相同的变量， 但是值不同

 为什么要用 break 语句呢？


-->

<?php 


$number = 34;

switch($number){

    case 34:
    echo "it is 34";
    break; // break 语句是用来跳出switch 语句的
    case 37:
    echo "is it 34";
    break;
    case 35:
    echo "is it 34";
     break;
    case 24:
    echo "is it 24";
      break;
    
    default : 
     echo "we could not find anything";
    break;


}
    
    
    
?>
    
</body>
</html>
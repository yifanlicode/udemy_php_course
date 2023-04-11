<?php 

if(isset($_POST['submit'])) {
    
$name = ["Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "tom"];
    
    $minimun = 5;
    $maximun = 10;

$username = $_POST['username']; // 通过 $_POST 可以获取表单中的数据
$password = $_POST['password']; // 通过 $_POST 可以获取表单中的数据

// echo "Hello" . $username;
// echo "Your Password is " . $password;
    
  if(strlen($username) < $minimun ) {
  
      echo "Username has to be longer than five";
  
  }  
    
    if(strlen($username) > $maximun  ) {
  
      echo "Username cannot be longer than 10 ";
  
  }  
    
    if(!in_array($username,$name)) {
    
        echo " Sorry you are not allowed";
    
    } else {
    
    echo "Welcome";
    }
    
    
    
    


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- action 定了表单数据将被发送到的 URL-->
<!-- method 定了发送数据的 HTTP 方法--> 
<form action="31_32_33_form.php" method="post">

<!-- <label> 元素是与文本字段相关联的标签，并且具有一个 "for" 属性，该属性关联到字段的 "id" 属性-->
<label for="username">Username</label> 
<input type="text" name="username" placeholder="Enter Username" id="username" >
<br>
<label for="password">Password</label>
<input type="password" name="password" placeholder="Enter Password" id="password">
<input type="submit" name="submit">
    
    
</form>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action="login.php" method="post">
  <label for="login">Username:</label><br>
  <input type="text" id="login" name="login"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Submit">
</form> 

<?php

if (isset($_POST['login']) && isset($_POST['password'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];

  if ($login == "ab" && $password == "cd") {
    header('Location: wel.HTML');
  } else {
    header('Location: sorry.HTML');
  }
}
?>




</body>
</html>
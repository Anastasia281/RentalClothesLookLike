<?php
$mysqli = mysqli_connect('localhost', 'root', 'root', 'diplom');
if (mysqli_connect_errno()) {
    echo "Подключение невозможно: " . mysqli_connect_error();
} 
else 
{
  session_start();
  session_unset();
  unset($_COOKIE['PHPSESSID']);
  setcookie("PHPSESSID","",time() -300,"/");
  header("Location: ../pages/index.php");
}
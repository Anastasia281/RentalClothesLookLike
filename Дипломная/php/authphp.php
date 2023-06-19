<?php
$mysqli = mysqli_connect('localhost', 'root', 'root', 'diplom');
if (mysqli_connect_errno()) {
    echo "Подключение невозможно: " . mysqli_connect_error();
} 
else 
{
  $login = $_POST['phone'];
  $login = preg_replace('/[^0-9]/', '', $login);
  $password = $_POST['password'];
  $zapros = mysqli_query($mysqli, "SELECT * FROM `user` 
  WHERE `Phone` = '$login' AND `Password` = '$password'");
  $result = mysqli_fetch_all($zapros, MYSQLI_ASSOC); 
  $row = mysqli_num_rows($zapros);
  if (empty($row)) {
    header("Location: ../pages/Auth.php");
  } 
  else { 
    session_start();
    foreach($result as $column)
    {
      $_SESSION['Id'] = $column['Id'];
      $_SESSION['Name'] = $column['Name'];
      $_SESSION['Surname'] = $column['Surname'];
      $_SESSION['Patronymic'] = $column['Patronymic'];
      $_SESSION['Phone'] = $column['Phone'];
      $_SESSION['Password'] = $column['Password'];
      $_SESSION['Role'] = $column['Role'];
    }
    header("Location: ../pages/index.php");
  }
}
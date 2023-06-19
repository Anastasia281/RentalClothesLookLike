<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'diplom');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  else 
  {
    $password = $_POST['password'];
    $name = $_POST['nameUser'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $telephone = $_POST['phone'];
    $telephone= preg_replace('/[^0-9]/', '', $telephone);
    $password = password_hash($password, PASSWORD_BCRYPT);
    $zapros1 = mysqli_query($mysqli,"INSERT `user` (`Surname`,`Name`,`Patronymic`,`Phone`,`Password`, `Role`) 
    VALUES ('$surname', '$name', '$patronymic', '$telephone', '$password', 1)");
    $zapros2 = mysqli_query($mysqli,"SELECT * FROM `user` ORDER BY Id DESC LIMIT 1");
    $result =   $result = mysqli_fetch_all($zapros, MYSQLI_ASSOC);
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
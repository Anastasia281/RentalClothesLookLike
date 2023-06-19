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
    $role = $_POST['role'];
    $telephone= preg_replace('/[^0-9]/', '', $telephone);
    $password = password_hash($password, PASSWORD_BCRYPT);
    $zapros1 = mysqli_query($mysqli,"INSERT `user` (`Surname`,`Name`,`Patronymic`,`Phone`,`Password`, `Role`) 
    VALUES ('$surname', '$name', '$patronymic', '$telephone', '$password', $role)");
    header("Location: ../pages/AddWorker.php");
  }
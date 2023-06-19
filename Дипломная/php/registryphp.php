<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'diplom');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  else 
  {
    $user = $_SESSION["Id"];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $zapros = mysqli_query($mysqli,"INSERT `registry` (`IdKlient`,`Date`,`Time`) VALUES ('$user', '$date', '$time')");
    header("Location: ../pages/Registry.php");
  }
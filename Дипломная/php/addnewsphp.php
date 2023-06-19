<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'diplom');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  else 
  {
    $name = $_POST['header'];
    $date = date("m.d.y");
    $description = $_POST['description'];
    $photo = $_POST['photo'];
    $zapros = mysqli_query($mysqli,"INSERT `news` (`Header`,`Description`,`Date`, `Photo`) 
    VALUES ('$name','$description', '$date','$photo')");
    header("Location: ../pages/AddNews.php");
  }
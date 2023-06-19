<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'diplom');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  else 
  {
    $name = $_POST['nameItem'];
    $category = $_POST['category'];
    $color = $_POST['colorItem'];
    $description = $_POST['description'];
    $deposit = $_POST['deposit'];
    $rentPrice = $_POST['rentPrice'];
    $photo = $_POST['photo'];
    $zapros = mysqli_query($mysqli,"INSERT `items` (`Category`,`Name`,`Color`,`Description`,`Deposit`, `RentalPrice`, `Photo`) 
    VALUES ('$category', '$name', '$color', '$description', '$deposit', '$rentPrice', '$photo')");
    header("Location: ../pages/AddItems.php");
  }
<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'diplom');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  else 
  {
    $name = $_POST['reportName'];
    $reportAnonim = $_POST['reportNameAnonim'];
    $report = $_POST['reportText'];
    $date = date("m.d.y");
    $kod = $_SESSION["Id"];
    $zapros = mysqli_query($mysqli,"INSERT `reviews` (`IdUser`,`NameUser`,`Comment`,`Date`) 
    VALUES ('$kod', '$name', '$report', '$date')");
    header("Location: ../pages/Report.php");
  }
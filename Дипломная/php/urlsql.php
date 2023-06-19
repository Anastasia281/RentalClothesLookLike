<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'diplom');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  else 
  {
    $sql = mysqli_query($mysqli, "SELECT Id, Name, Photo FROM `items` ORDER BY Id DESC LIMIT 3;");
    $result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    $sql2 = mysqli_query($mysqli, "SELECT * FROM `news` ORDER BY IdNews DESC;");
    $result2 = mysqli_fetch_all($sql2, MYSQLI_ASSOC); 
    $sql3 = mysqli_query($mysqli, "SELECT * FROM `items` ORDER BY Id DESC");
    $result3 = mysqli_fetch_all($sql3, MYSQLI_ASSOC);
    $sql4 = mysqli_query($mysqli, "SELECT * FROM `coloritem`");
    $result4 = mysqli_fetch_all($sql4, MYSQLI_ASSOC);   
    $sql5 = mysqli_query($mysqli, "SELECT * FROM `category`");
    $result5 = mysqli_fetch_all($sql5, MYSQLI_ASSOC);    
    $sql6 = mysqli_query($mysqli, "SELECT Date, Time, CONCAT(Surname, ' ', Name, ' ', Patronymic) AS User FROM `registry` 
    JOIN user ON user.Id = registry.IdKlient WHERE DATEDIFF(Date, CURRENT_DATE()) >= 0 LIMIT 25;");
    $result6 = mysqli_fetch_all($sql6, MYSQLI_ASSOC);   
    $sql7 = mysqli_query($mysqli, "SELECT `booking`.Id AS Id, Date, Time, CONCAT(Surname, ' ', `user`.Name, ' ', Patronymic) AS User FROM `booking` 
    JOIN `user` ON `user`.`Id` = `booking`.`IdKlient` WHERE DATEDIFF(Date, CURRENT_DATE()) >= 0 LIMIT 30;");
    $result7 = mysqli_fetch_all($sql7, MYSQLI_ASSOC);
    $sql8 = mysqli_query($mysqli, "SELECT CONCAT(Surname, ' ', Name) AS User, Date, Comment FROM `reviews` 
    JOIN `user` ON `user`.Id = `reviews`.IdUser;");
    $result8 = mysqli_fetch_all($sql8, MYSQLI_ASSOC);   
    $sql9 = mysqli_query($mysqli, "SELECT `booking`.Id AS Id, Date, Time, CONCAT(Surname, ' ', `user`.Name, ' ', Patronymic) AS User FROM `booking` 
    JOIN `user` ON `user`.`Id` = `booking`.`IdKlient` WHERE DATEDIFF(Date, CURRENT_DATE()) < 0;");
    $result9 = mysqli_fetch_all($sql9, MYSQLI_ASSOC);  
    $sql10 = mysqli_query($mysqli, "SELECT Date, Time, CONCAT(Surname, ' ', Name, ' ', Patronymic) AS User FROM `registry` 
    JOIN user ON user.Id = registry.IdKlient WHERE DATEDIFF(Date, CURRENT_DATE()) < 0;");
    $result10 = mysqli_fetch_all($sql10, MYSQLI_ASSOC);              
  }
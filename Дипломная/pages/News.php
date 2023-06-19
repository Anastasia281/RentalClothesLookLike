<?php
session_start();
if (isset($_SESSION['Id'])) require("HeaderReg.html");
else require("HeaderUnreg.html");
require_once "../php/urlsql.php";
$Id = $_GET['news'];
$sql9 = mysqli_query($mysqli, "SELECT * FROM `news` WHERE IDNews = $Id;");
$result9 = mysqli_fetch_all($sql9, MYSQLI_ASSOC); 
?>
  <div class="news">
  <?php foreach ($result9 as $news) : ?>    
      <p class="newsDate"><?php echo $news['Date'] ?></p>    
    <h2 class="newsHeader"><?php echo $news['Header'] ?></h2>
    <img class="newsImg" src="../media/NewsPhoto/<?= $news['Photo'] ?>" alt="">
    <p class="newsText"><?php echo $news['Description'] ?></p>
    <a class="newsButton" href="index.php">Назад</a>
  <?php endforeach; ?>    
  </div>    
  <?php
require("Footer.html");
?>
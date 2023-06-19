<?php
if ($_SESSION['Role'] == 1) echo "Error 404!";
else {
session_start();
if (isset($_SESSION["Id"])) require("HeaderReg.html");
else require("HeaderUnreg.html");
require_once "../php/urlsql.php"
?>
<div class="reports">
  <h2>Отзывы</h2>
  <?php if ($_SESSION['Role'] == 1) { ?>
    <form action="../php/report.php" method="post">
    <textarea id="" cols="50" rows="4" placeholder="Ваш отзыв" name="reportText" class="reportText"></textarea>
    <button class="reportButton">Оставить отзыв</button>
  </form>
  <?php } ?>
  <div class="reportsList">
  <?php foreach ($result8 as $reviews) :?>
    <div class="report">
      <h4><?php echo $reviews['User'] ?></h4>
      <p><?php echo $reviews['Comment'] ?></p>
      <p><?php echo $reviews['Date'] ?></p>
    </div>        
        <?php endforeach; ?>
  </div>
</div>
<?php
require("Footer.html");
}
?>

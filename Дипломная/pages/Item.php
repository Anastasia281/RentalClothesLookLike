<?php
session_start();
if (isset($_SESSION["Id"])) require("HeaderReg.html");
else require("HeaderUnreg.html");
require_once "../php/urlsql.php";
$Id = $_GET['item'];
$sql8 = mysqli_query($mysqli, "SELECT `items`.Id AS Id, `items`.Name AS Name, `coloritem`.Name AS Color, Description, Deposit, RentalPrice, Photo 
FROM `items` JOIN `coloritem` ON `coloritem`.Id = `items`.Color JOIN `category` ON `category`.Id = `items`.Category WHERE `items`.Id = $Id;");
$result8 = mysqli_fetch_all($sql8, MYSQLI_ASSOC);   
?>
  <div class="items">
  <?php foreach ($result8 as $item) : ?>    
  <h2><?php echo $item['Name'] ?></h2>    
    <div class="itemImg">
      <img src="../media/CatalogImg/<?= $item['Photo'] ?>" alt="">
    </div>
    <div class="itemAbout">
      <p>Стоимость аренды: <?php echo $item['RentalPrice'] ?></p>
      <p>Залог: <?php echo $item['Deposit'] ?></p>
      <p>Цвет: <?php echo $item['Color'] ?></p>
      <label for="">Размер</label>
      <select name="" id="">
      <?php $sql9 = mysqli_query($mysqli, "SELECT * FROM `itemssize` WHERE Items = ".$item['Id']."");
      $result9 = mysqli_fetch_all($sql9, MYSQLI_ASSOC);
      foreach ($result9 as $size) : ?>        
        <option value="<?= $size['Id'] ?>"><?php echo $size['Size']?></option>
        <?php endforeach; ?>
      </select>
      <p><?php echo $item['Description'] ?></p>
      <?php
      if ($_SESSION["Role"] == 1) { ?>
      <a class="itemBack">Забронировать</a>        
      <?php } if ($_SESSION["Role"] == 2) { ?>
      <a class="itemBack" href="AddItems.php?item=<?= $item['Id'] ?>" >Редактировать</a>        
      <?php }  ?>
    <a class="itemBack" href="Catalog.php">Назад</a>      
    </div>
  <?php endforeach; ?>       
  </div>    
  <?php
require("Footer.html");
?>
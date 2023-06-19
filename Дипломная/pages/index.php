<?php
session_start();
if (isset($_SESSION['Id'])) 
{
  require("HeaderReg.html") ;
  echo  '<script>   
     history.pushState(null, null, location.href);
    window.onpopstate = function(event) {
    history.go(1);
    };
    </script>';  
}
else require("HeaderUnreg.html");
require_once "../php/urlsql.php";
?>
<img class="mainImg" src="../media/mainImg.jpg" alt="">
<?php 
if ($_SESSION["Role"] == 2) require("TableManager.php");
?>
<div class="aboutCompany">
  <p>Студия проката “Look Like” предоставляет прокат нарядных
    платьев, одежды и аксессуаров для детских и семейных
    фотосессий, утренников, выпускных, любых других праздников,
    а также платья для будущих мам, будуарные платья. </p>
</div>
<div class="MainNews">
  <h2>Наши новости</h2>
  <?php foreach ($result2 as $news) : ?>
    <div class="oneNews">
      <a href="News.php?news=<?= $news['IDNews'] ?>">
      <p class="newsDate"><?php echo $news['Date'] ?></p>
      <img class="mainNewsImg" src="../media/NewsPhoto/<?= $news['Photo'] ?>" alt="">
      <p class="mainNewsText"><?php echo $news['Header'] ?></p>        
      </a>
    </div>
  <?php endforeach; ?>
</div>
<h2 class="mainCatalogHeader">Каталог</h2>
<div class="mainCatalog">
  <?php foreach ($result as $catalog) : ?>
    <div class="mainCatalogLot">
      <a href="Item.php?item=<?= $catalog['Id'] ?>">
      <img class="mainCatalogImg" src="../media/CatalogImg/<?= $catalog['Photo'] ?>" alt="">
      <p class="mainCatalogText"><?php echo $catalog['Name'] ?></p>        
      </a>
    </div>
  <?php endforeach; ?>
</div>
<a class="mainCatalogButton" href="Catalog.php">Весь каталог</a>
<?php
require("Footer.html");
?>
<script>
  document.querySelector('.mainCatalogButton').onclick = function() {
  window.location.href = 'Catalog.php';
};
</script>

<?php
session_start();
if (isset($_SESSION['Id'])) require("HeaderReg.html");
else require("HeaderUnreg.html");
require_once "../php/urlsql.php"
?>
<div class="catalog">
  <h2 class="catalogHeader">Каталог</h2>
  <?php if ($_SESSION['Role'] == 2) { ?>
    <a href="AddItems.php" class="mainCatalogButton">Добавить новый лот</a>
    <?php } ?>
  <div class="catalogFiltrs">
    <h3>Фильтры</h3>
    <hr>
    <table class="tableFiltrs">
      <tr>
        <td>
          <div class="filtr">
            <p>Категория</p>
            <select name="" id="">
            <?php foreach ($result5 as $category) : ?>
              <option value="<?= $category['Id'] ?>"><?php echo $category['Name'] ?></option>
            <?php endforeach; ?>  
            </select> 
          </div>
        </td>
        <td>
          <div class="filtr">
            <p>Цена аренды</p>
            <select name="" id="">
              <option value="">до 300 руб</option>
              <option value="">301 - 600 руб</option>
              <option value="">601 - 800</option>
              <option value="">от 801 руб</option>
            </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="filtr">
            <p>Размер</p>
            <select name="" id="">
              <option value="">38-42</option>
              <option value="">44</option>
              <option value="">46</option>
              <option value="">48-54</option>
              <option value="">до 86 см</option>
              <option value="">92 - 110 см</option>
              <option value="">от 110 см</option>
              <option value="">без размера</option>
            </select>
          </div>
        </td>
        <td>
          <div class="filtr">
            <p>Цвет</p>
            <select name="" id="">
            <?php foreach ($result4 as $color) : ?>
              <option value="<?= $color['Id'] ?>"><?php echo $color['Name'] ?></option>
            <?php endforeach; ?>  
            </select>
          </div>
        </td>
      </tr>      
    </table>
    <hr>
            <div class="filtr">
            <h4>Сортировать по:</h4>
            <label class="sortLabel">Цена по убыванию</label>
            <input type="radio" name="sort" class="sort">
            <label class="sortLabel">Цена по возрастанию</label>
            <input type="radio" name="sort" class="sort">
            <label class="sortLabel">Новинки</label>
            <input type="radio" name="sort" checked class="sort">            
          </div>    
  </div>
  <div class="catalogLots">
  <?php foreach ($result3 as $catalog) : ?>
    <div class="catalogLot">
      <a href="Item.php?item=<?= $catalog['Id'] ?>">
        <img src="../media/CatalogImg/<?= $catalog['Photo'] ?>" alt="">
        <p><?php echo $catalog['Name'] ?></p>        
      </a>
    </div>
  <?php endforeach; ?>   
  </div>  
</div>

  <?php
require("Footer.html");
?>
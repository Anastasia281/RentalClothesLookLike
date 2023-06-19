<?php
session_start();
if ($_SESSION['Role'] != 2 && $_SESSION['Role'] != 3) echo "Error 404!";
else {
require("HeaderReg.html");
require_once("../php/urlsql.php");
?>
  <div class="additem">
    <form action="../php/additemphp.php" method="post">
    <h2>Добавление лота</h2>
    <div class="addItemsObject">
    <label for="">Название</label>
    <input type="text" name="nameItem">      
    </div>
    <div class="addItemsObject">
    <label for="">Категория товара</label>
    <select name="category" id="">
            <?php foreach ($result5 as $category) : ?>
              <option value="<?= $category['Id'] ?>"><?php echo $category['Name'] ?></option>
            <?php endforeach; ?>  
            </select>      
      </div>
      <div class="addItemsObject">
    <label for="">Цвет</label>
    <select name="colorItem" id="">
            <?php foreach ($result4 as $color) : ?>
              <option value="<?= $color['Id'] ?>"><?php echo $color['Name'] ?></option>
            <?php endforeach; ?>  
            </select>     
      </div>
      <div class="addItemsObject">
    <label for="">Описание</label>
    <textarea name="description" id="" cols="60" rows="5"></textarea>      
      </div>
      <div class="addItemsObject">
    <label for="">Размеры</label>
    <input type="text" name="deposit">      
      </div>
      <div class="addItemsObject">
    <label for="">Предоплата</label>
    <input type="number" name="deposit">      
      </div>
      <div class="addItemsObject">
    <label for="">Стоимость аренды</label>
    <input type="number" name="rentPrice">      
      </div>
    <div class="addItemsObject">
    <label for="">Файл изображения</label>
    <input type="file" width="200px" name="photo" accept=".png, .jpeg, .jpg">
    </div>
    <button class="buttonRegistry" type="submit">Добавить лот</button>
  </div>      
    </form>
  </div>
  <?php
require("Footer.html");
            }
?>
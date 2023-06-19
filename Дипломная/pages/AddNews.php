<?php
session_start();
if ($_SESSION['Role'] != 3) echo "Error 404!";
else {
require("HeaderReg.html");
?>
  <div class="addnews">
    <h2>Добавление новости</h2>
    <input type="text">
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <input type="img" onclick="AddImg()" alt="Добавить изображение">
    <button>Добавить новость</button>
  </div>
  <?php
require("Footer.html");
}
?>
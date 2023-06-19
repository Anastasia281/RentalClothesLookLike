<?php
if ($_SESSION['Role'] != 2 || $_SESSION['Role'] != 3) echo "Error 404!";
else {
require("HeaderReg.html");
?>
  <div class="addworker">
    <h2>Добавление сотрудника</h2>
    <label for="">Фамилия</label>
    <input type="text">
    <label for="">Имя</label>
    <input type="text">
    <label for="">Отчество</label>
    <input type="text">
    <label for="">Телефон</label>
    <input type="number">
    <label for="">Пароль</label>
    <input type="text">
    <button>Добавить сотрудника</button>
  </div>
  <?php
require("Footer.html");
}
?>
<?php
if (isset($_SESSION['Id'])) echo "Error 404!";
else {
session_start();
require("HeaderReg.html");
?>
  <div class="registy">
    <h2>Запись на примерку</h2>
    <p>Клиент: <?php echo $_SESSION['Surname']." ".$_SESSION['Name']." ".$_SESSION['Patronymic'];?></p>
    <p>Дата</p>
    <input type="date">
    <p>Время</p>
    <select name="" id="">
      <option value="">10:00</option>
      <option value="">10:30</option>      
    </select>
    <button class="buttonRegistry">Записаться</button>
  </div>
  <?php
require("Footer.html");
}
?>
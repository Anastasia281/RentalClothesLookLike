<?php
if (isset($_SESSION['Id'])) echo "Error 404!";
else {
session_start();
require("HeaderReg.html");
?>
  <div class="cabinetClient">
    <div class="clientData">
      <h3>Личные данные</h3>
      <p>Фамилия: <?php echo $_SESSION['Surname']?></p>
      <p>Имя: <?php echo $_SESSION['Name']?></p>
      <p>Отчество: <?php echo $_SESSION['Patronymic']?></p>
      <p>Телефон: <?php echo $_SESSION['Phone']?></p>
      <a href="../php/exitphp.php">Выйти</a>
      <!-- <p>Изменить телефон</p>
      <input type="text" class="phone">
      <p></p><button>Изменить телефон</button>
      <p>Новый пароль</p>
      <input type="password">
      <p>Повторите пароль</p>
      <input type="password">
      <p></p>
      <button>Сохранить новый пароль</button> -->
    </div>
    <div class="clientFunction">
      <?php 
      if ($_SESSION['Role'] == 1) 
      {?>
      <a class="buttonFunction" href="Registry.php">Записаться на примерку</a>
      <a class="buttonFunction" href="Booking.php">Бронированные вещи</a>
      <a class="buttonFunction" href="HistoryBooking.php">История заказов</a>        
      <?php } else if ($_SESSION['Role'] == 2) 
      {?>
        <a class="buttonFunction" href="RegistryTable.php">Записи на примерку</a>
        <a class="buttonFunction" href="BookingTable.php">Забронированные вещи</a>       
        <?php } else if ($_SESSION['Role'] == 3) 
      {?>
        <a class="buttonFunction" href="ListWorker.php">Список сотрудников</a>
        <a class="buttonFunction" href="AddNews.php">Добавление новостей</a>       
        <?php }?>
    </div>
  </div>
  <?php
require("Footer.html");
      }
?> 

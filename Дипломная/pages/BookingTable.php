<?php
session_start();
if ($_SESSION['Role'] != 2 && $_SESSION['Role'] != 3) echo "Error 404!";
else {
require("HeaderReg.html");
require_once("../php/urlsql.php"); 
?>
<div class="registryTable">
  <a href="BookingTable.php?page=2">Показать завершенные заказы</a>
  <h2>Забронированные лоты</h2>
  <table>
        <tr>
            <td width="100px">Дата</td>
            <td width="50px">Время</td>            
            <td width="250px">Клиент</td>
            <td>Список лотов</td>
            <td>Статус заказа</td>
        </tr>
        <?php
        $path_parts = pathinfo($_SERVER['REQUEST_URI']);
        $basename = $path_parts['basename'];
        if ($basename == "BookingTable.php?page=2") {
          $result7 = $result9;
        } foreach ($result7 as $booking) :?>
        <tr>
            <td><?php echo $booking['Date'] ?></td>
            <td><?php echo $booking['Time'] ?></td>            
            <td><?php echo $booking['User'] ?></td>
            <td>
              <select>
              <?php
                  $sql8 = mysqli_query($mysqli, "SELECT items.Id AS ID, items.Name AS Name, itemssize.Size AS Size FROM `itemsbooking` 
                  JOIN itemssize ON itemssize.Id = itemsbooking.IdItemSize JOIN items ON items.Id = itemssize.Items 
                  WHERE itemsbooking.IdBoking IN (SELECT booking.Id FROM `booking` JOIN `itemsbooking` ON `itemsbooking`.`IdBoking` = `booking`.`Id` 
                  WHERE booking.Id = ".$booking['Id'].");");
                  $result8 = mysqli_fetch_all($sql8, MYSQLI_ASSOC);  
                  foreach ($result8 as $bookingItems) : ?>
                <option value="<?= $bookingItems['ID'] ?>"><?php echo $bookingItems['Name']." (".$bookingItems['Size'].")" ?></option>
                <?php endforeach; ?>
              </select>
            </td>
            <td>
              <p>Новый</p>
              <select name="" id="">
                <option value="">Новый</option>
              </select>
              <button>Сохранить</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
  <?php
require("Footer.html");
                  }
?> 
 <?php require_once("../php/urlsql.php"); 
 $sql19 = mysqli_query($mysqli, "SELECT Time, CONCAT(Surname, ' ', Name, ' ', Patronymic) AS User FROM `registry` 
 JOIN user ON user.Id = registry.IdKlient WHERE DATEDIFF(Date, CURRENT_DATE()) = 0;"); 
 $result19 = mysqli_fetch_all($sql19, MYSQLI_ASSOC); 
 $sql20 = mysqli_query($mysqli, "SELECT `booking`.Id AS Id, Date, Time, CONCAT(Surname, ' ', `user`.Name, ' ', Patronymic) AS User FROM `booking` 
 JOIN `user` ON `user`.`Id` = `booking`.`IdKlient` WHERE DATEDIFF(Date, CURRENT_DATE()) >= 0 ORDER BY `booking`.Id DESC LIMIT 3;"); 
 $result20 = mysqli_fetch_all($sql20, MYSQLI_ASSOC);?>
  <div class="TableManager">
    <div class="mainTable">
    <table>
        <caption><b>Записи на сегодня</b></caption>
        <tr>
            <td width="50px">Время</td>            
            <td width="300px">Клиент</td>
        </tr>
        <?php foreach ($result19 as $registry) :?>
        <tr>
            <td><?php echo $registry['Time'] ?></td>            
            <td><?php echo $registry['User'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a class="mainTableButton" href="RegistryTable.php">Просмотреть все записи</a>        
    </div>
    <div class="mainTable">
    <table>
        <caption><b>Новые заказы на бронирование</b></caption>
        <tr>
            <td width="100px">Дата</td>
            <td width="50px">Время</td>
            <td width="200px">Клиент</td>
            <td width="200px">Заказ</td>
        </tr>
        <?php foreach ($result20 as $booking) :?>
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
        </tr>
        <?php endforeach; ?>
    </table>        
    <a class="mainTableButton" href="BookingTable.php">Просмотреть все заказы</a>    
    </div>
  </div>
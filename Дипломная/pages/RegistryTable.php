<?php
session_start();
if ($_SESSION['Role'] != 2 && $_SESSION['Role'] != 3) echo "Error 404!";
else {
require("HeaderReg.html");
require_once("../php/urlsql.php"); 
?>
<div class="registryTable">
  <a href="RegistryTable.php?page=2">Просмотреть завершенные примерки</a>
  <h2>Записи на примерку</h2>
  <table>
        <tr>
            <td width="100px">Дата</td>
            <td width="50px">Время</td>            
            <td width="300px">Клиент</td>
        </tr>
        <?php
        $path_parts = pathinfo($_SERVER['REQUEST_URI']);
        $basename = $path_parts['basename'];
        if ($basename == "RegistryTable.php?page=2") {
          $result6 = $result10;
        } foreach ($result6 as $registry) :?>
        <tr>
            <td><?php echo $registry['Date'] ?></td>
            <td><?php echo $registry['Time'] ?></td>            
            <td><?php echo $registry['User'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="Registry.php" class="buttonFunction">Записать на примерку</a>
</div>
  <?php
require("Footer.html");
        }
?> 
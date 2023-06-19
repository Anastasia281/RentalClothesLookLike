<?php
if ($_SESSION['Role'] == 1) echo "Error 404!";
else {
require("HeaderReg.html");
?> 
<div class="booking">
  <h2>Корзина</h2>
  <div class="bookingItem">
    <img src="../media/CatalogImg/9yhwdAidQeM.jpg" alt="">
    <div class="bookingItemData">
      <p><b>Платье роза</b></p>
      <p>Размер: 46</p>
      <p>Стоимость аренды: 800 руб</p>      
    </div>
    <button class="bookingItemButton">Удалить</button>
  </div>
  <div class="bookingDateTime">
    <label for="" class="bookingLabel">Дата: </label>
    <input type="date" class="bookingInput">
    <label for=""  class="bookingLabel">Время: </label>
    <input type="time" class="bookingInput">
  </div>
  <button class="buttonBooking">Оформить бронирование</button>
</div>
<?php
require("Footer.html");
}
?>
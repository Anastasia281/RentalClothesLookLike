<?php
require("HeaderUnreg.html");
?>
<div class="AuthReg">
  <a class="authRegUrl" href="../pages/Auth.php">Авторизация</a>
  <a class="authRegUrl">Регистрация</a>
</div>
<form action="../php/regphp.php" method="post">
  <div class="auth">
    <div class="authPhone">
      <p>Фамилия</p>
      <input type="text" name="surname" require>
    </div>
    <div class="authPhone">
      <p>Имя</p>
      <input type="text" name="nameUser" require>
    </div>
    <div class="authPhone">
      <p>Отчество</p>
      <input type="text" name="patronymic" require>
    </div>
    <div class="authPhone">
      <p>Телефон</p>
      <input type="text" class="phone" name="phone" require>
    </div>
    <div class="authPassword">
      <p>Пароль</p>
      <input type="password" name="password" require>
      <p>8 и более символов * не менее одного числа * не менее одной буквы</p>
    </div>
    <div class="authPassword">
      <p>Повторите пароль</p>
      <input type="password" name="secondPassword" require>
    </div>
    <div class="authPhone">
      <input type="checkbox" id="checkboxСonfidentInfo" require>
      <label for="checkboxСonfidentInfo">Я соглашаюсь с политикой конфедициальности компании</label>
    </div>
    <button class="authButton" type="submit">Регистрация</button>
  </div>
</form>
<?php
require("Footer.html");
?>
<script>
  function Toggle() {
  let checkboxCheck = document.querySelector('checkboxСonfidentInfo');    
  }
</script>
<script src="../js/imask.js"></script>
<script src="../js/main.js"></script>
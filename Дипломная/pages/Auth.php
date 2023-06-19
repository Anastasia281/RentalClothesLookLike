<?php
$path_parts = pathinfo($_SERVER['REQUEST_URI']);
$basename = $path_parts['basename'];
if ($basename == "Auth.php?war=1") {
  echo "<script>alert ('Неправильный телефон или пароль!!!')</script>";
}
require("HeaderUnreg.html");
?>
<div class="AuthReg">
  <a class="authRegUrl">Авторизация</a>
  <a class="authRegUrl" href="../pages/Reg.php">Регистрация</a>
</div>
<form action="../php/authphp.php" method="post">
  <div class="auth">
    <div class="authPhone">
      <p>Телефон</p>
      <input type="text" class="phone" name="phone">
    </div>
    <div class="authPassword">
      <p>Пароль</p>
      <input type="password" name="password">
    </div>
    <button class="authButton" type="submit" name="AuthButton">Войти</button>
  </div>
</form>
<?php
require("Footer.html");
?>
<script src="../js/imask.js"></script>
<script src="../js/main.js"></script>
<?php

include 'header.php';
include 'singInMesseage.php';

?>

<?php
//Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
//иначе выводим сообщение о том, что он уже авторизован
if (!isset($_SESSION["login"]) && !isset($_SESSION["password"])) {
    
?>
<div id="form_auth">
    <h2>Форма авторизации</h2>
    <form action="singIn.php" method="post" name="form_singIn">
        <fieldset>
            <input type="login" name="login" placeholder="Введите логин" required="required">
            <input type="password" name="password" placeholder="Введите пароль" required="required">
            <input type="submit" name="btn_submit_singIn" value="Войти">
        </fieldset>
    </form>
</div>

<?php
} else {
?>
<div id="authorized">
    <h2>Вы уже авторизованы</h2>
</div>

<?php
}
?>

<?php
//Подключение подвала
include 'footer.php';
?>
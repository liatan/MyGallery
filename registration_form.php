<?php
//Подключение шапки
include 'header.php';
include 'registrationMessage.php';

?>

<?php

if (!isset($_SESSION["login"]) && !isset($_SESSION["password"])) {
    
?>
<div id="form_register">
    <h2>Форма регистрации</h2>
    <form action="registration.php" method="post" name="form_registration">
        <fieldset>
            <input type="login" name="login" placeholder="Введите логин" required="required">
            <input type="password" name="password" placeholder="Введите пароль" required="required">
            <input type="submit" name="btn_submit_registration" value="Зарегистрироватся!">
        </fieldset>
    </form>
</div>
<?php
} else {
?>
<div id="authorized">
    <h2>Вы уже зарегистрированы</h2>
</div>
<?php
}
//Подключение подвала
include 'footer.php';
?>
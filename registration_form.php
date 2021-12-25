<?php
//Подключение шапки
include 'header.php';
?>

<?php

if (!isset($_SESSION["login"])) {
    if (isset($_SESSION["error_reg"])) {
        unset($_SESSION["error_reg"]);
        echo '<script type="text/javascript" src="JS/registration_error.jsx"></script>' ;
    }   
    
?>
<div id="registration_block">
    <h2>Форма регистрации</h2>
    <form action="registration.php" method="post">
        <fieldset>
            <input type="login" name="login" placeholder="Введите логин" required="required">
            <input type="email" name="email" placeholder="Введите email" required="required">
            <input type="password" name="password" placeholder="Введите пароль" required="required">
            <input type="password" name="password_confirm" placeholder="Повторите пароль" required="required">
            <input type="submit" name="btn_submit_registration" value="Зарегистрироватся!">
        </fieldset>
    </form>
</div>

<script src="JS/registration_form_validation.jsx"></script>
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
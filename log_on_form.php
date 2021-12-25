<?php

include 'header.php';

?>

<?php
//Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
//иначе выводим сообщение о том, что он уже авторизован
if (!isset($_SESSION["login"]) && !isset($_SESSION["password"])) {
    if (isset($_SESSION["error_log_on"])) {
        unset($_SESSION["error_log_on"]);
        echo '<script type="text/javascript" src="JS/log_on_error.jsx"></script>' ;
    }    
?>
<div id="authorization_block">
    <h2>Форма авторизации</h2>
    <form action="log_on.php" method="post" >
        <fieldset>
            <input type="login" name="login" placeholder="Введите логин" required="required">
            <input type="password" name="password" placeholder="Введите пароль" required="required">
            <input type="submit" name="btn_submit_log_on" value="Войти">
        </fieldset>
    </form>
</div>


<?php
} else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /index.php");
}
?>

<?php
//Подключение подвала
include 'footer.php';
?>
<?php

if(!empty($_SESSION["succes_log_on"]))
    {
        unset($_SESSION["succes_log_on"]);
        echo "<script>alert('Вы успешно прошли авторизацию');</script>";
    }

if(!empty($_SESSION["error_log_on"]))
    {
        unset($_SESSION["error_log_on"]);
        echo "<script>alert('Неверный логин или пароль!');</script>";
    }
    
?>
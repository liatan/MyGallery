<?php

if(!empty($_SESSION["succes_singIn"]))
    {
        unset($_SESSION["succes_singIn"]);
        echo "<script>alert('Вы успешно прошли авторизацию');</script>";
    }

if(!empty($_SESSION["error_singIn"]))
    {
        unset($_SESSION["error_singIn"]);
        echo "<script>alert('Неверный логин или пароль!');</script>";
    }
    
?>
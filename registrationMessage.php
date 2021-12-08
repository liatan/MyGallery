<?php

if(!empty($_SESSION["success_reg"]))
    {
        unset($_SESSION["success_reg"]);
        echo "<script>alert('Регистрация успешно пройдена!');</script>";
    }

if(!empty($_SESSION["error_reg"]))
    {
        unset($_SESSION["error_reg"]);
        echo "<script>alert('Пользователь с таким логином уже зарегистрирован');</script>";
    }
    
?>
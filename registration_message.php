<?php

if(!empty($_SESSION["success_reg"]))
    {
        unset($_SESSION["success_reg"]);
        echo "Регистрация успешно пройдена!";
    }

if(!empty($_SESSION["error_reg"]))
    {
        unset($_SESSION["error_reg"]);
        echo "Пользователь с таким логином уже зарегистрирован";
    }
    
?>
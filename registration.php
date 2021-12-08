<?php
    //Запускаем сессию
    session_start();
 
    //Добавляем файл подключения к БД
    include 'dbConnect.php';

    if(isset($_POST["btn_submit_registration"]) && !empty($_POST["btn_submit_registration"]))
    {
        if(isset($_POST["login"]))
        {
            //Обрезаем пробелы с начала и с конца строки
            $login = trim($_POST["login"]);
            $result_query_login = $mysqli->query("SELECT `userLogin` FROM `users` WHERE `userLogin`='".$login."'");
            if ($result_query_login -> num_rows == 1 ) 
            {
                $_SESSION["error_reg"] = 1;
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: /registration_form.php");
                exit();
            }       
        }
        
        if(isset($_POST["password"]))
        {
            $password = trim($_POST["password"]);
        }
        //Запрос на добавления пользователя в БД
        $result_query_insert = $mysqli->query("INSERT INTO `users` (userLogin, 	userPass) VALUES ('".$login."', '".$password."')");
        $_SESSION["success_reg"] = 1;
        //Отправляем пользователя на страницу авторизации
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /index.php");

    } else {
         exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=index.php> главную страницу </a>.</p>");
    }

?>
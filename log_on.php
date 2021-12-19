<?php
    //Запускаем сессию
    session_start();
 
    //Добавляем файл подключения к БД
    include 'db_connect.php';

    if(isset($_POST["btn_submit_log_on"]) && !empty($_POST["btn_submit_log_on"]))
    {
        if(isset($_POST["login"]))
        {
            //Обрезаем пробелы с начала и с конца строки
            $login = trim($_POST["login"]);
        } 

        if(isset($_POST["password"]))
        {
            $password = trim($_POST["password"]);
        } 

        $sql = "SELECT * FROM `users` WHERE `user_login` = '{$login}' AND `user_password` = '{$password}'";
        $result_query_login = $mysqli->query($sql);
        foreach($result_query_login as $row)
        {   
                $userid = $row["user_id"];
        }
        if ($result_query_login -> num_rows == 1 )
        {
            $_SESSION["id"] = $userid;
            $_SESSION["login"] = $login;
            $_SESSION["succes_log_on"] = 1;
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /index.php");
            exit();
        } else {
            $_SESSION["error_log_on"] = 1;
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /log_on_form.php");
            exit();
        }    
    } else {
        exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=/index.php> главную страницу </a>.</p>");
    }
?>
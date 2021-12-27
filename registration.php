<?php
    //Запускаем сессию
    session_start();
 
    //Добавляем файл подключения к БД
    include 'db_connect.php';

    if(isset($_POST["btn_submit_registration"]) && !empty($_POST["btn_submit_registration"]))
    {
        if(isset($_POST["login"]))
        {
            //Обрезаем пробелы с начала и с конца строки
            $login = trim($_POST["login"]);
            $sql = "SELECT `user_login` FROM `users` WHERE `user_login`='{$login}'";
            $result_query_login = $mysqli->query($sql);
            if ($result_query_login -> num_rows == 1 ) 
            {
                $_SESSION["error_reg"] = 1;
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: /registration_form.php");
                exit();
            }       
        }

        if(isset($_POST["email"]))
        {
            //Обрезаем пробелы с начала и с конца строки
            $email = trim($_POST["email"]);
            $sql = "SELECT `user_email` FROM `users` WHERE `user_email`='{$email}'";
            $result_query_email = $mysqli->query($sql);
            $hash = md5($login . time());
            $_SESSION["email"] = $email;
            $_SESSION["hash"] = $hash;
            
            
            if ($result_query_email -> num_rows == 1 ) 
            {
                $_SESSION["error_reg"] = 1;
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: /registration_form.php");
                exit();
            }       
        }
        
        if(isset($_POST["password"]))
        {
            $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);
        }
        $sql = "INSERT INTO users(user_login, user_password, user_email, user_hash ) VALUES ('{$login}', '{$password}', '{$email}','{$hash}' )";
        $mysqli->query($sql);
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /send.php"); 

    } else {
        header("Location: /index.php");
    }

?>
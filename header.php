<?php
    //Запускаем сессию
    session_start();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>MyGallery</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="main.ico">
    </head>
    <body>
    <div id="hdr">
        <div id="auth_block">
            <?php
            if(!isset($_SESSION["login"])){
                echo '<p id="userWelcome">Вы на сайте как <span id = "lastWord">Гость!</span></p>';  
            ?>
                <div id="link_register">
                    <a href="/registration_form.php">Регистрация</a>
                </div>
                <div id="link_auth">
                    <a href="/singIn_form.php">Авторизация</a>
                </div>
            <?php
            } else {
                echo '<p id="userWelcome">Вы на сайте как <span id = "lastWord">'.$_SESSION["login"].'!</span></p>';          
            //Если пользователь авторизован, то выводим ссылку Выход
            ?> 
            <div id="link_logout">
            <a href="/logout.php">Выход</a>
            </div>
            <?php
            }
            ?>
        </div>
        <h1>MyGallery</h1>
    </div>
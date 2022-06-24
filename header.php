<?php
//Запускаем сессию

session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <script src="JS/jquery-3.6.0.min.js"></script>
    <!-- <script src="JS/jquery.maskedinput.js"></script> -->
    <script src="JS/jquery.inputmask.js"></script>
    <title>MyGallery</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="main.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
    <div id="content">
        <div id="header">
            
            <div id="site_logo"><a href="/index.php">MyGallery</a></div>
                <ul id="site_navigation">
                    <li><a href="/gallery.php">Галерея</a></li>
                    <li><a href="/index.php">Новости</a></li>
                    <li><a href="/random_image.php">Случайная картинка</a></li>
                </ul>
            
            <ul id="user_menu">
            <?php
            if (isset($_SESSION["id"])) {
                echo '<p>' . $_SESSION["login"] . '</p>';
                //Если пользователь авторизован, то выводим ссылку Выход
            ?>
                <li>
                    
                    <ul>
                        <li><a id="profile" href="/user_profile.php">Профиль</a></li>
                        <li><a id="download" href="/image_download.php">Загрузка</a></li>
                        <li><a id="logout" href="/logout.php">Выход</a></li>
                    </ul>
                </li>
            </ul>
            <?php 
            } else {

                echo '<p>Гость</p>';
            ?>
            <ul>
                <li><a href="/registration_form.php">Регистрация</a></li>
                <li><a href="/log_on_form.php">Авторизация</a></li>
            </ul>
            </li>
            </ul>
            <?php
            }
            ?>
            <script type="text/javascript" src="JS/menu_slide.jsx"></script>
        </div>
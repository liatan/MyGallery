<?php
//Запускаем сессию

session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <script src="JS/jquery-3.6.0.min.js"></script>
    <title>MyGallery</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="main.ico">
</head>

<body>
    <div id="content">
        <div id="header">
            <h1><a href="/index.php">MyGallery</a></h1>
            <nav>
                <ul id="site_navigation">
                    <li><a href="/gallery.php">Галерея</a></li>
                    <li><a href="/index.php">Новости</a></li>
                    <li><a href="/random_image.php">Случайная картинка</a></li>
                </ul>
            </nav>
            <ul id="user_menu">
                <li>
                    <?php
            if (isset($_SESSION["id"])) {
                echo '<p>' . $_SESSION["login"] . '</p>';
                //Если пользователь авторизован, то выводим ссылку Выход
            ?>
                    <ul>
                        <li><a href="/user_profile.php">Настройки</a></li>
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
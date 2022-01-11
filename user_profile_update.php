<?php
session_start();
include 'db_connect.php';

$id = $_SESSION["id"];

if( isset($_POST["btn_submit_profile_info"]) && !empty($_POST["btn_submit_profile_info"]) ){
    
    if( isset($_POST["user_name"]) ) {
        $user_name = trim($_POST["user_name"]);  
    }

    if( isset($_POST["user_surname"]) ) {
        $user_surname = trim($_POST["user_surname"]);  
    }

    if( isset($_POST["user_middle_name"]) ) {
        $user_middle_name = trim($_POST["user_middle_name"]);  
    }

    if( isset($_POST["user_birthday"]) ) {
        $user_birthday = trim($_POST["user_birthday"]);  
    }

    if( isset($_POST["user_sex"]) ) {
        $user_sex = trim($_POST["user_sex"]);  
    }

    if( isset($_POST["user_tel"]) ) {
        $user_telephone = trim($_POST["user_tel"]);
        $sql = "UPDATE `user_profile` SET `user_telephone`='{$user_telephone}' WHERE `user_id` = '{$id}'";
        $mysqli->query($sql);
    }

    if( isset($_POST["user_email"]) ) {
        $user_email =trim(($_POST["user_email"])); 
        $sql = "UPDATE `users` SET `user_email`='{$user_email}' WHERE `user_id` = '{$id}'"; 
        $mysqli->query($sql);
    }

    $sql = "UPDATE `user_profile` SET `user_name`='{$user_name}', 
     `user_surname`='{$user_surname}',
     `user_middle_name`='{$user_middle_name}',
     `user_birthday`='{$user_birthday}',
     `user_sex`='{$user_sex}'
    WHERE `user_id` = '{$id}'";

    $mysqli->query($sql);
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /user_profile.php"); 
} else {
    echo "Ne to";
}

?>
<?php

# Удаляем картинку
if (($id = (int)$_GET["del"])) {
    $img = $mysqli->query("SELECT `image` FROM `userimg` WHERE `imageId`='{$id}'")->fetch_assoc();
    unlink($img["image"]);
    $mysqli->query("DELETE FROM `userimg` WHERE `imageId`='{$id}'");
    header("Location: /");
    exit;
}

?>
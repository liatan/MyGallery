<?php
if(isset($_GET["del"]) ){
if (($id = (int)$_GET["del"])) {
    $sql = " SELECT `user_image` FROM `user_img` WHERE `image_id`='{$id}' ";
    $img = $mysqli->query($sql)->fetch_assoc();
    unlink($img["user_image"]);
    $mysqli->query("DELETE FROM `user_img` WHERE `image_id`='{$id}'");
    header("Location: /gallery.php");
    exit;
}
}

?>
<?php
session_start();
$id = $_SESSION["id"];

if(isset($_SESSION["login"])){
?>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="image" />
	<button>Загрузить</button>
</form>

<?php

# Добавляем картинку
if($_SERVER["REQUEST_METHOD"] === 'POST') {

	$image = $_FILES["image"];
	$save = 'upload/img/' . md5(microtime()) . '.jpg';
	if(move_uploaded_file($image["tmp_name"], $save)) {
		$mysqli->query("INSERT INTO `userimg`(`userId`,`image`,`date`) VALUES('{$id}','{$save}',UNIX_TIMESTAMP())");
		header("Location: /");
		exit;
	}
}

# Удаляем картинку
if(($id = (int)$_GET["del"])) {
	$img = $mysqli->query("SELECT `image` FROM `userimg` WHERE `imageId`='{$id}'")->fetch_assoc();
	unlink($img["image"]);
	$mysqli->query("DELETE FROM `userimg` WHERE `imageId`='{$id}'");
	header("Location: /");
	exit;
}
}
?>
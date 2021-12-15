<?php
include 'dbConnect.php';
include 'header.php';

session_start();
$id = $_SESSION["id"];


if (isset($_SESSION["login"])) {
?>
<div id="downloadForm">
	<h2>Загрузка изображений</h2>
    <form action="" method="POST" enctype="multipart/form-data" >
		<div id = "downloadField"><span>Нажмите на область или перетяните файлы сюда</span>
		<input type="file" title=" " name="image[]" id = "myFiles"  multiple /></div>
        <!-- <input type="button" name="addDownloadBtn" onclick="addDownBtn()" /><br> -->
		<br><input type="submit" value="Загрузить" id ="submitBtn"/><br> 
    </form>
</div>

<script src="JS/dragAndDrop.jsx"></script>
<script src="JS/changedImg.jsx"></script>


<?php
	# Добавляем картинку
	if ($_SERVER["REQUEST_METHOD"] === 'POST') 
	{
		$countImage = count($_FILES["image"]["tmp_name"]);
		for ($i = 0; $i < $countImage; $i++) 
		{			
			$file = $_FILES["image"]["tmp_name"][$i];
			$fileType = $_FILES["image"]["type"][$i];
			$fileTypeStr = substr($fileType, strpos($fileType, '/') + 1);
			$fileSource = 'upload/img/';
			if (exif_imagetype($file)) 
			{	
				$fileName = md5(microtime()).'.'.$fileTypeStr;
				if (is_uploaded_file($file)) 
				{
					move_uploaded_file($file, $fileSource.$fileName);
					$mysqli->query("INSERT INTO `userimg`(`userId`,`image`,`date`) VALUES('{$id}','{$fileSource}{$fileName}',UNIX_TIMESTAMP())");
				}
			}
		}
	}
}


include 'footer.php';
?>
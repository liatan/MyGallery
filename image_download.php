<?php
include 'db_connect.php';
include 'header.php';


$id = $_SESSION["id"];


if (isset($_SESSION["login"])) {
?>
<div id="download_block">
    <h2>Загрузка изображений</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div id="download_drop_field"><span>Нажмите на область или перетяните файлы сюда</span>
            <input type="file" title=" " name="image[]" id="myFiles" multiple />
        </div>
        <!-- <input type="button" name="addDownloadBtn" onclick="addDownBtn()" /><br> -->
        <input type="submit" value="Загрузить" />
        <br>
        <div id="selected_image">
            <p id="image_push_field"></p>
        </div>
		<?php if( !empty($_SESSION["success_download"]) )
		{
			unset($_SESSION["success_download"]);
			echo '<p>Загрузка прошла успешно</p>';
		} ?>
		
    </form>
</div>

<script src="JS/dragAndDrop.jsx"></script>
<script src="JS/selected_images.jsx"></script>

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
					$sql = "INSERT INTO user_img(user_id, user_image, download_date) VALUES( {$id},'{$fileSource}{$fileName}',CURRENT_TIMESTAMP)";
					$mysqli->query($sql);
					$_SESSION["success_download"] = 1;
        			header("Location: /image_download.php");
				}
			}
		}
	}
}


include 'footer.php';
?>
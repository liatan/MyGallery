<?php 
session_start();

if(isset($_SESSION["login"])) 
{
	$id = $_SESSION["id"];
	$sql = 'SELECT * FROM `userimg` WHERE `userId` = "'.$id.'" ORDER BY `date` DESC';
	$query = $mysqli->query($sql);
	if ($query->num_rows > 0) 
	{
		echo '<table id = "userImg">';
		while($result = $query->fetch_assoc())
		{
			echo '<tr>
				<td><img width="200" src="' . $result["image"] . '" /></td>
				 </tr>
				<td><a href="?del=' . $result["imageId"] . '">Удалить</a></td>';
		}
		echo '</table>';
	} else {
		echo 'Картинок нету!';
	}
}  else {
	$sql = 'SELECT * FROM `userimg` ORDER BY `date` DESC';
	$query = $mysqli->query($sql);
	echo '<table id = "userImg">';
	while($result = $query->fetch_assoc())
		{
			echo '<tr>
				<td><img width="200" src="' . $result["image"] . '" /></td>
				 </tr>
				<td><a href="?del=' . $result["imageId"] . '">Удалить</a></td>';
		}
		echo '</table>';

}


?>
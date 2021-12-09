<?php
session_start();

if (isset($_SESSION["login"])) {
	$id = $_SESSION["id"];
	$sql = 'SELECT * FROM `userimg` WHERE `userId` = "' . $id . '" ORDER BY `date` DESC';
	$query = $mysqli->query($sql);

	if ($query->num_rows > 0) 
	{
		echo '<table id = "userImg">';
		echo '<tr>';
		$count = 0;
		while ($result = $query->fetch_assoc()) 
		{
			if ($count !=0 && $count%3 == 0 ) 
			{
				echo "</tr><tr>";
			}
			echo ' <td><img width="400" src="' . $result["image"] . '" />
				   <br><a href="?del=' . $result["imageId"] . '">Удалить</a></td>';
				   $count++;
		}
		echo '</tr>';
		echo '</table>';
	}
} else {
	$sql = 'SELECT * FROM `userimg` ORDER BY `date` DESC';
	$query = $mysqli->query($sql);
	echo '<table id = "userImg">';
	echo '<tr>';
	$count = 0;
	while ($result = $query->fetch_assoc()) 
	{
		if ($count !=0 && $count%3 == 0 ) 
		{
			echo "</tr><tr>";
		}
		echo '<td><img width="400" src="' . $result["image"] . '" /></td>';
		$count++;
	}
	echo '</tr>';
	echo '</table>';
}
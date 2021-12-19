
<script src="JS/jquery-3.6.0.min.js"></script>
<script src="JS/image_zoom_on_click.jsx"></script>

<?php
session_start();

if (isset($_SESSION["login"])) {
	$id = $_SESSION["id"];
	$sql = 'SELECT * FROM `user_img` WHERE `user_id` = "' . $id . '" ORDER BY `download_date` DESC';
	$query = $mysqli->query($sql);

	if ($query->num_rows > 0) 
	{
		echo '<table id = "user_img">';
		echo '<tr>';
		$count = 0;
		while ($result = $query->fetch_assoc()) 
		{
			if ($count !=0 && $count%4 == 0 ) 
			{
				echo "</tr><tr>";
			}
			echo ' <td><div class="image_animation"><img src="' . $result["user_image"] . '" class = "image"/>
				   <br><a href="?del=' . $result["image_id"] . '">У</a></td></div>';
				   $count++;
		}
		echo '</tr>';
		echo '</table>';
	}
} else {
	$sql = "SELECT * FROM `user_img` ORDER BY `download_date` DESC";
	$query = $mysqli->query($sql);
	echo '<table id = "all_img" >';
	echo '<tr>';
	$count = 0;
	while ($result = $query->fetch_assoc()) 
	{
		if ($count !=0 && $count%4 == 0 ) 
		{
			echo "</tr><tr>";
		}
		echo '<td><div class="image_animation"><img src="' . $result["user_image"] . '" class = "image" /></td></div>';
		$count++;
	}
	echo '</tr>';
	echo '</table>';
}
?>


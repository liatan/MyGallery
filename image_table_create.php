
<script src="JS/jquery-3.6.0.min.js"></script>
<script src="JS/image_zoom_on_click.jsx"></script>

<?php

	
	
	$sql = "SELECT * FROM `user_img` ORDER BY `download_date` DESC";
	$all_image_query = $mysqli->query($sql);


if (isset($_SESSION["login"])) { 

	$id = $_SESSION["id"];
	$sql = "SELECT * FROM `user_img` WHERE `user_id` = '{$id}' ORDER BY `download_date` DESC";
	$user_image_query = $mysqli->query($sql);
	$sql = "SELECT * FROM users WHERE user_id = '{$id}'";
	$confirm_query = $mysqli->query($sql);
	foreach($confirm_query as $row) {
		$email_confirmed = $row["user_email_confirmed"];
		$is_admin_confirmed = $row["is_admin"];
	}

	if($is_admin_confirmed == 1) {
		echo '<table id = "user_img" >';
		echo '<tr>';
		$count = 0;
		while ($result = $all_image_query->fetch_assoc()) 
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
	} elseif ( $email_confirmed == 0) {
		echo "<div id='confirm_form'><span> Подвердите свой email перейдя по ссылкe на вашей почте </span></div>";
		exit();
	} elseif ($user_image_query->num_rows > 0) {
		echo '<table id = "user_img">';
		echo '<tr>';
		$count = 0;
		while ($result = $user_image_query->fetch_assoc() ) 
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
	echo '<table id = "all_img" >';
	echo '<tr>';
	$count = 0;
	while ($result = $all_image_query->fetch_assoc()) 
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


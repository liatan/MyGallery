<?php
include 'db_connect.php';
include 'header.php';
?>

<?php
$sql = "SELECT * FROM `user_img` ORDER BY RAND() DESC";
	$query = $mysqli->query($sql);
    $result = $query->fetch_assoc();
	echo '<img  src="' . $result["user_image"] . '" id="random_image"  />';
?>

<?php
include 'footer.php'
?>
<?php
include 'db_connect.php';

if ( isset($_SESSION["id"]) ) {
  $id = $_SESSION["id"];
  $sql = "SELECT * FROM `user_profile` WHERE `user_id` = '{$id}' ";
  $user_profile_query = $mysqli->query($sql);
  foreach($user_profile_query as $row) {
	  $_SESSION["user_name"] = $row["user_name"];
		$_SESSION["user_surname"] = $row["user_surname"];
    $_SESSION["user_middle_name"] = $row["user_middle_name"];
    $_SESSION["user_birthday"] = $row["user_birthday"];
    $_SESSION["user_sex"] = $row["user_sex"];
	}
  if($_SESSION["user_sex"] == 0){ 
    $str1 = 'checked="true"';
    $str2 = NULL;
  } else {
    $str1 = NULL;
    $str2 = 'checked="true"';
  }
}

?>
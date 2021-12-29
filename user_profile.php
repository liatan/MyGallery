<?php
include 'header.php';
$id ="fdgsagags";
?>

<div id="user_profile_block">   
    <span>Имя</span><input type="text" name="user_name" value="<?php echo $id ?>"><a id="user_name_change" >Изменить</a><br> 
    <span>Фамилия:</span><input type="text" name="user_surname" value="<?php echo $id ?>"><br>
    <span>Отчество:</span><input type="text" name="user_middle_name" value="<?php echo $id ?>"><br>
</div>

<script src="JS/user_profile_change.jsx"></script>

<?php
include 'footer.php';
?>
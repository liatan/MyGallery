<?php
include 'header.php';
include 'PHP/user_profile_sql_request.php';
?>

<div id="user_profile_block">  
    <form action='user_profile_update.php' id="user_profile_form" method="post"> 
        <span>Имя:</span><input type="text" name="user_name" value="<?php echo $_SESSION["user_name"] ?>">
        <span>Фамилия:</span><input type="text" name="user_surname" value="<?php echo $_SESSION["user_surname"] ?>">
        <span>Отчество:</span><input type="text" name="user_middle_name" value="<?php echo $_SESSION["user_middle_name"] ?>">
        <span>День рождения:</span><input type="date" name="user_birthday" value="<?php echo $_SESSION["user_birthday"] ?>"> 
        <span>Пол:</span><input type="radio" name="user_sex" value="0"  <?php echo $str1 ?> >Мужской<input type="radio" name="user_sex" value="1" <?php echo $str2 ?>>Женский
        <input type="hidden" name="user_tel_session" value="<?php echo $_SESSION["user_tel"] ?>">
        <input type="hidden" name="user_email_session" value="<?php echo $_SESSION["user_email"] ?>">
        <a class="user_more_profile_info">Дополнительные настройки</a>
        <input type="submit" name="btn_submit_profile_info" value="Сохранить">
    </form>
</div>

<script src="JS/user_profile_change.js"></script>
<script src="JS/user_password_change.js"></script>


<?php
include 'footer.php';
?>
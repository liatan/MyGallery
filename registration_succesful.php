<?php
//Подключение шапки
include 'header.php';
include 'db_connect.php';

if($_GET["hash"] && strlen($_GET["hash"]) == 32) {
    $hash = $_GET["hash"];
    $sql = "SELECT * FROM users WHERE user_hash = '{$hash}' ";
    if( $result = $mysqli->query($sql) ) {
        foreach($result as $row) {
            $sql = "UPDATE users SET user_email_confirmed = TRUE WHERE user_id = '{$row["user_id"]}' ";
            $mysqli->query($sql);
            echo "<div id='confirm_form'><span> Вы успешно подтвердили свой email </span></div>";
        } 
    } else {
        echo "<div id='confirm_form'><span> Подвердите свой email перейдя по ссылкe на вашей почте </span></div>"; 
    } 
} else {
    echo "<div id='confirm_form'><span> Подвердите свой email перейдя по ссылкe на вашей почте </span></div>";
}
?>

<?php
//Подключение подвала
include 'footer.php';
?>
<?php 

include 'header.php';
include 'singInMesseage.php';

?>

<?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(!isset($_SESSION["login"]) && !isset($_SESSION["password"])){
?>
 
<a href="/index.php">Главная</a>
    <div id="form_auth">
        <h2>Форма авторизации</h2>
        <form action="singIn.php" method="post" name="form_singIn">
                <table>
                    <tr>
                        <td>Логин:</td>
                        <td><input type="text" name="login" placeholder="Введите логин" required="required">   
                    </tr>
                    <tr>
                        <td>Пароль:</td>
                        <td><input type="text" name="password" placeholder="Введите пароль" required="required">
                    </tr>
                    <tr>
                    <td></td>
                        <td>
                            <input type="submit" name="btn_submit_singIn" value="Войти">
                        </td>
                    </tr>
                </table>
            </form>
    </div>
 
<?php
    } else {
?>
    <div id="authorized">
        <h2>Вы уже авторизованы</h2>
    </div>
 
<?php
    }
?>
 
<?php
    //Подключение подвала
    include 'footer.php';
?>
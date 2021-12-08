<?php
    //Подключение шапки
    include 'header.php';
    include 'registrationMessage.php';

    if(!isset($_SESSION["login"]) && !isset($_SESSION["password"]))
    {
?>
<a href="/index.php">Главная</a>
     <div id="form_register">
            <h2>Форма регистрации</h2>
            <form action="registration.php" method="post" name="form_registration">
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
                            <input type="submit" name="btn_submit_registration" value="Зарегистрироватся!">
                        </td>
                    </tr>
                </table>
            </form>
    </div>
<?php
    }else{
?> 
    <div id="authorized">
            <h2>Вы уже зарегистрированы</h2>
    </div>
<?php
    } 
    //Подключение подвала
    include 'footer.php';
?>



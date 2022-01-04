$(document).ready(function()
{
        var login = $("input[name=login]");
        var email = $("input[name=email]");
        var pass = $("input[name=password]");
        var passCnf = $("input[name=password_confirm]");
        var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        $("form").submit(function()
        {
            $(".text-error").remove();
            if ( login.val().length < 5 )
            {
            login.after('<span class="text-error">Логин должен быть больше 4 символов</span>');
            return false;
            } 

            if ( email.val().search(pattern) != 0 )
            {
            email.after('<span class="text-error">Неверный тип email</span>');
            return false;
            } 

            if ( pass.val().length < 7 )
            {
            pass.after('<span class="text-error">Пароль должен быть больше 6 символов</span>');
            return false;
            } 

            if ( passCnf.val() != pass.val() )
            {
                passCnf.after('<span class="text-error">Пароли не совпадают</span>');
                return false;
            } 
        });


});
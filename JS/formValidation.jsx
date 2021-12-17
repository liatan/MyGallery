$(document).ready(function()
{
        var valid = $("input[type=submit]");
        var login = $("input[type=login]");
        var pass = $("#password");
        var passCnf = $("#passwordConfirm");
        login.keyup(function()
        {
            $("span").remove();
            if ( login.val().length < 5 )
            {
            login.after('<span class="text-error">Логин должен быть больше 4 символов</span>');
            valid.attr("disabled", true);
            } else {
            valid.attr("disabled", false); 
            }
        });

        pass.keyup(function()
        {
            $("span").remove();
            if ( pass.val().length < 7 )
            {
            pass.after('<span class="text-error">Пароль должен быть больше 6 символов</span>');
            valid.attr("disabled", true);
            } else {
            valid.attr("disabled", false); 
            }
        });

        passCnf.keyup(function()
        {
            $("span").remove();
            if ( passCnf.val() != pass.val() )
            {
                passCnf.after('<span class="text-error">Пароли не совпадают</span>');
            valid.attr("disabled", true);
            } else {
            valid.attr("disabled", false); 
            }
        });


});
$(document).ready(function(){
    var login = $("input[name=login]");
    var email = $("input[name=email]");
    var pass = $("input[name=password]");
    var passCnf = $("input[name=password_confirm]");

    $(".text-error").remove();
    login.css("border-color", "red");
    email.css("border-color", "red");
    pass.css("border-color", "red");
    passCnf.css("border-color", "red");
    passCnf.after('<span class="text-error">Такой пользователь уже существует</span>');
})
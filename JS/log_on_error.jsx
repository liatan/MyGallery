$(document).ready(function(){
    var pass = $("input[name=password]");
    var login = $("input[name=login]");
    $(".text-error").remove();
    login.css("border-color", "red");
    pass.css("border-color", "red");
    pass.after('<span class="text-error">Неверный логин или пароль</span>');
})
$(document).ready(function() {
    $(document).on("click", "#change", function() {
        $(".user_more_profile_info_cancel").before(`<div id='user_pass_block'>
        <span>Введите текущий пароль:</span>
        <input type='text' name='user_current_pass' id='user_current_pass' required='required'>
        <span>Введите новый пароль:</span>
        <input type='text' name='user_new_pass' id='user_new_pass' required='required'>
        <span>Повторите пароль:</span>
        <input type='text' name='user_new_pass_conf' id='user_new_pass_conf' required='required'>
        </div>`);
        $(".user_pass").append(`<a class='user_pass_change' id='cancel'>Отмена</a>`);
        $("#change").remove();

    })

    $(document).on("click", "#cancel", function() {
        $("#cancel").remove();
        $("#user_pass_block").remove();
        $(".user_pass").append(`<a class='user_pass_change' id='change'>Изменить</a>`);
    })
});
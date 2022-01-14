$(document).ready(function() {
    var submit_btn = $("input[name=btn_submit_profile_info");
    var user_tel = $("input[name=user_tel_session").val();
    var user_email = $("input[name=user_email_session").val();

    $(document).on('click', '.user_more_profile_info', function() {
        submit_btn.before(`<div id='user_more_info_block'>
        <span>Телефон</span>
        <input type='text' name='user_tel' id='user_tel' placeholder='+7' >
        <span>email</span>
        <input type='text' name='user_email' id='user_email' required='required'>
        <div class="user_pass"><span>Пароль</span><a class='user_pass_change' id='change'>Изменить</a></div>
        </div>`);
        $("#user_tel").val(user_tel);
        $("#user_tel").inputmask("+7(999)999-999-99", { "clearIncomplete": true });
        $("#user_email").val(user_email);
        $("#user_email").inputmask("email", { "clearIncomplete": true });
        $("#user_more_info_block").slideDown(350);
        $(".user_more_profile_info").remove();
        submit_btn.before("<a class='user_more_profile_info_cancel'>Отмена</a>");
    })

    $(document).on('click', '.user_more_profile_info_cancel', function() {
        $("#user_more_info_block").slideUp(350, function() {
            $(this).remove();
        });
        $(".user_more_profile_info_cancel").remove();
        submit_btn.before("<a class='user_more_profile_info'>Дополнительные настройки</a>");
    })

})
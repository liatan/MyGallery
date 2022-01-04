$(document).ready(function(){
    var submit_btn = $("input[name=btn_submit_profile_info");

    $(document).on('click', '#user_more_profile_info', function(){
        submit_btn.before(`<div id='user_more_info_block'>
        <span>Телефон:</span>
        <input type='text' name='user_telephonе' id='user_telephonе' placeholder='+7(000)000-000-00'>
        <span>email:</span>
        <input type='email' name='user_email' id='user_email'>
        <script> $("#user_telephonе").mask("+7(999)999-999-99")</script>
        </div>`);
        $('#user_more_profile_info').remove();
        submit_btn.before("<a id='user_more_info_cancel'>Отмена</a>");  
    })

    $(document).on('click','#user_more_info_cancel', function(){
        $("#user_more_info_block").remove();
        $('#user_more_info_cancel').remove();
        submit_btn.before("<a id='user_more_profile_info'>Дополнительные настройки</a>");
    }) 
}) 
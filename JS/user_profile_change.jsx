$(document).ready(function(){

    $(document).on('click', '#user_name_change', function(){
        $('input[name="user_middle_name"]').after("<br><form action='user_profile_update.php'>"+
                                    "<span>Введите новое имя</span>"+
                                    "<input type='text' name='new_user_name'>"+
                                    "<br><input type='submit' name='btn_submit_name_change'>"+
                                    "</form>");
        $('#user_name_change').remove();
        $('input[name="user_name"]').after("<a id='user_name_change_cancel'>Отмена</a>");  
    })

    $(document).on('click','#user_name_change_cancel', function(){
        $("form").remove();
        $('#user_name_change_cancel').remove();
        $('input[name="user_name"]').after("<a id='user_name_change'>Изменить</a>");
    }) 


})
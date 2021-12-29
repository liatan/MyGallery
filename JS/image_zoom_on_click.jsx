$(document).ready(function() 
{ // Ждём загрузки страницы
	$(".image").click(function()
    {	// Событие клика на маленькое изображение
	  	var img = $(this);	// Получаем изображение, на которое кликнули
		var src = img.attr('src'); // Достаем из этого изображения путь до картинки
		$("#header").css("z-index", "0");
		$("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
						 "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
						 "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
						 "</div>"); 
		$(".popup").fadeIn(300); // Медленно выводим изображение
		$(".popup_bg").click(function()
        {	// Событие клика на затемненный фон	
			$("#header").delay(500).queue(function(){
				$(this).css("z-index", "100").dequeue();    
				
			});  
			$(".popup").fadeOut(300);	// Медленно убираем всплывающее окно
			setTimeout(function() 
            {	// Выставляем таймер
			  $(".popup").remove(); // Удаляем разметку всплывающего окна
			}, 300);
		});
        $(".popup_img").click(function()
        {	// Событие клика на картинку 
			$("#header").delay(500).queue(function(){
				$(this).css("z-index", "100").dequeue();    	
			}); 
			$(".popup").fadeOut(300);
			setTimeout(function() 
            {	
			  $(".popup").remove(); 
			}, 300);
		});
	});
	
});
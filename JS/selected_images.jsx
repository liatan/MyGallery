$("#myFiles").on("change", function() 
{
    var fileCount = $("#myFiles")[0].files.length;
    var file =  $("#myFiles")[0].files;
    for (let i = 0; i < fileCount; i++) 
    {
        text = '<img src="'+URL.createObjectURL(file[i])+'" id = "image_preview" tabindex="0" />';
        $('#image_push_field').after(text);
    }
    
});
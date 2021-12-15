$("#myFiles").on("change", function() 
{
    var fileCount = $("#myFiles")[0].files.length;
    var file =  $("#myFiles")[0].files;
    for (let i = 0; i < fileCount; i++) 
    {
        text = '<img src="'+URL.createObjectURL(file[i])+'" id = "previewImage" tabindex="0" />';
        $('#downloadField').after(text);
    }
    
});
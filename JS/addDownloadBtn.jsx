function addDownBtn() {
    id = ($('#file').prop('id'));
    text = '<br><input type="file" name="image[]" />';
    $('#file').after(text);
    alert( id );
    
    //f = document.getElementById("download");
    //prev = f.previousSibling.value;
    //a = document.createElement("input");
    // a.type = "file";
    //a.id = "download-2";
    //f.after(a);
    //alert($('#download').prop("value"));
    //alert(prev);

};
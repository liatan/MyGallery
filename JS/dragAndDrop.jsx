$(document).ready(function () {
    $("#download_drop_field").hover(function () {
        $("#download_drop_field").css("opacity", "1");
    }, function () {
        $("#download_drop_field").css("opacity", "0.5");
    });
    $("#download_drop_field").on("dragover", function () {
        $("#download_drop_field").css("opacity", "1");
    });
    $("#download_drop_field").on("dragleave", function () {
        $("#download_drop_field").css("opacity", "0.5");
    })
});

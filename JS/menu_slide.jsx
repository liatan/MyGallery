$(document).ready(function () {
  $('#user_menu').hover(function () {
    $('ul', this).stop(true, true).slideDown(200);
  },
    function () {
      $('ul', this).stop(true, true).slideUp(200);
    });
});
$(document).ready(function () {
  $('#user_menu').hover(function () {
    $('ul', this).stop(true, true).slideDown(350);
  },
    function () {
      $('ul', this).stop(true, true).slideUp(350);
    });
});
$(document).ready(function() {
  $('body').addClass('js');
  var $menu = $('#menu-responsive'),
    $menulink = $('.menu-link');
  
$menulink.click(function() {
  $menulink.toggleClass('active');
  $menu.toggleClass('active');
  return false;
});});
(function($) {
    
  var allPanels = $('.accordion #links').hide();
    
  $('.accordion #coursenames').click(function() {
    allPanels.slideUp();
    $(this).next().slideDown();
    return false;
  });

})(jQuery);
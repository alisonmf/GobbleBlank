jQuery(function() {
  jQuery('#main-menu').smartmenus({
    mainMenuSubOffsetX: -1,
    subMenusSubOffsetX: 10,
    subMenusSubOffsetY: 0,
    subIndicators: false
  });
});

jQuery(document).ready(function(){
  jQuery(window).resize(function(){
      var footerHeight = jQuery('.footer').outerHeight();

      jQuery('.page-container').css({'marginBottom':'-' + footerHeight + 'px'});
    });

    jQuery(window).resize();
});

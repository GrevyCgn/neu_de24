(function ($) {
  $(document).ready(function () {
<<<<<<< HEAD
    $('.toolbar-tray.toolbar-tray-horizontal .menu-item.menu-item--expanded').hover(function () {
=======
    $('.toolbar-tray.is-active.toolbar-tray-horizontal .menu-item.menu-item--expanded').hover(function () {
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
      // At the current depth, we should delete all "hover-intent" classes.
      // Other wise we get unwanted behaviour where menu items are expanded while already in hovering other ones.
      $(this).parent().find('li').removeClass('hover-intent');
      $(this).addClass('hover-intent');
    },
      function () {
        $(this).removeClass('hover-intent');
      });
  });
})(jQuery);

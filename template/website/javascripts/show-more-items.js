(function($) {
  $.fn.showMoreItems = function(options) {
    
    var $totalItems     = $('.container_ps .pg_kajian').length,
        $visibleItems   = $('.container_ps .pg_kajian:visible').length,
        settings        = $.extend({}, $.fn.showMoreItems.defaults, options),
        i               = settings.count,
        countLess       = settings.count - 1;

    $('.container_ps .pg_kajian:lt(' + settings.count + ')').show();

    $('#tombol_pgkajian').click(function(el) {
      el.preventDefault();

      if ($visibleItems !== $totalItems) {
        if(i + settings.count <= $totalItems) {
          $visibleItems = i += settings.count;
          $('.container_ps .pg_kajian:lt('+ i +')').show();

          if(i == $totalItems) {
            $('#tombol_pgkajian').hide();//text("KE AWAL");
          }

        } else if (i !== $totalItems) {
          $('.container_ps .pg_kajian:gt(' + countLess + ')').show();
          $('#tombol_pgkajian').hide();//text("KE AWAL");
          $visibleItems = $totalItems;
          i = $totalItems;
        }
      } else if($visibleItems === $totalItems) {
        $('.container_ps .pg_kajian:gt(' + countLess + ')').hide();
        $('#tombol_pgkajian').text("LIHAT LAINNYA");
        $visibleItems = settings.count;
        i = settings.count;
      }

    });
  }

  $.fn.showMoreItems.defaults = {
    count: 15
  };
})(jQuery);


(function($) {

    $(function() {

        if ($('.compostedu-menu-item-desktop-1').is(':visible')) {

            $('.menu-item').click(function(e) {
                e.preventDefault();
            })

        }

        $('.expand-search-button-menu').click(function(e) {
            e.preventDefault();
            $(this).hide();
            $('.show-search-button-menu').show();
            $('.compostedu-menu-item-2').hide('slow');
            $('.show-search-menu').show('slow');
        })

    });

})( jQuery);
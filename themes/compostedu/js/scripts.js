(function($) {

    $(function() {

        if( $('body.post-type-archive-community_workshop').length 
        || $('body.post-type-archive-composting_for_kids').length){
            let viewCw = $('.view-cw');
            viewCw.click(function(e){
                e.preventDefault();
                let contentCw = $(this).siblings(".entry-content");
                if (contentCw.is(":visible")) {
                    $(this).text('View more');
                    $(this).siblings(".entry-content").hide('slow');
                } else {
                    $(this).text('View less');
                    $(this).siblings(".entry-content").show('slow');
                }
            });
        }

        if( $('body.page-fact-sheets').length) {
            $('.type-fs-content a').click(function(){
                $('html, body').animate({
                    scrollTop: $( $(this).attr('href') ).offset().top
                }, 500);
                return false;
            });
        }
    });

})( jQuery );
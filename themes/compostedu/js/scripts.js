(function($) {

    $(function() {

        if( $('body.post-type-archive-community_workshop').length 
            || $('body.post-type-archive-composting_for_kids').length
            || $('body.post-type-archive-intermediate_program').length
            || $('body.post-type-archive-high_school_program').length
            || $('body.page-third-party-resources').length
            || $('body.post-type-archive-product').length
            ){
            let view = $('.view-click');
            view.click(function(e) {
                e.preventDefault();
                let content = $(this).siblings(".displayed-content");
                if (content.is(":visible")) {
                    $(this).text('Read more');
                    $(this).siblings(".displayed-content").hide('slow');
                } else {
                    $(this).text('Read less');
                    $(this).siblings(".displayed-content").show('slow');
                }
            });
        }

        if( $('body.page-fact-sheets').length
            || $('body.page-third-party-resources').length) {
            $('.topic-anchor a').click(function() {
                $('html, body').animate({
                    scrollTop: $( $(this).attr('href') ).offset().top
                }, 500);
                return false;
            });
        }
    });

})( jQuery );
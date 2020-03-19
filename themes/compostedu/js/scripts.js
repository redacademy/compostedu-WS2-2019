(function($) {

    $(function() {

        if( $('body.blog').length ) {

            $.ajax({
                url: restVars.rest_url + 'wp/v2/posts/?per_page=1',
                context: document.body
            }).done(function(data) {
                if (typeof data !== 'undefined' && data.length > 0) {
                    let news = data[0];
                    $('.article-news-top').attr('id', `post-${news.id}-top`);
                }
            });

        }

        $('#new-next-button').click(function() {

            let articleId = $('.article-news-top').attr('id');
            let postId = articleId.split("-")[1];

            getPost(postId, function(news) {
                if (news.next) {
                    updateNewsImage(news.next.id);
                    getPost(news.next.id, updateNewsInformation);
                } else {
                    console.log('no next');
                }
            })

        });

        $('#new-previous-button').click(function() {

            let articleId = $('.article-news-top').attr('id');
            let postId = articleId.split("-")[1];

            getPost(postId, function(news) {
                if (news.previous) {
                    updateNewsImage(news.previous.id);
                    getPost(news.previous.id, updateNewsInformation);
                } else {
                    console.log('no previous');
                }
            })
            
        });
        

        function updateNewsImage(newsId) {
            $.ajax({
                url: restVars.rest_url + `acf/v3/posts/${newsId}/image`,
                context: document.body
            }).done(function(data) {
                $('.news-img-top').attr("src",data.image.url);
            });
        }

        function updateNewsInformation(data) {
            console.log('update information');
            $('.article-news-top').attr('id', `post-${data.id}-top`);
        }

        function getPost(id, callback) {
            $.ajax({
                url: restVars.rest_url + 'wp/v2/posts/' + id,
                context: document.body
            }).done(function(data) {
                callback(data);
            });
        }

        if( $('body.post-type-archive-community_workshop').length 
            || $('body.post-type-archive-composting_for_kids').length
            || $('body.post-type-archive-intermediate_program').length
            || $('body.post-type-archive-high_school_program').length
            || $('body.page-third-party-resources').length
            || $('body.post-type-archive-product').length
            || $('body.post-type-archive-people').length
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
(function($) {

    $(function() {

        // Adult Workshop DatePicker Filter

        $('.adult-workshop-datepicker').datepicker({
            dateFormat: 'yy-mm-dd',
            onSelect: function() {
                redirectForSearch('adult_workshop_date=' + this.value, restVars.base_url + '/adult_workshop/');
            }
        });

        let adultWorkshopDate = getParameterByName('adult_workshop_date');
        if (adultWorkshopDate) {
            $('.button-show-calendar').addClass('button-hide-calendar');
            $('.adult-workshop-datepicker').show();
            $('.adult-workshop-datepicker').datepicker( 'setDate', adultWorkshopDate );
        }

        function getParameterByName(name, url) {
            if (!url) { 
                url = window.location.href;
            }
            name = name.replace(/[[]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) {
                return null;
            }
            if (!results[2]) {
                return '';
            }
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

       // Adult Workshop CheckBox Filter

       $('.adult-workshop-filter').click(function() {
            let selectedFilters = [];
            $('.adult-workshop-all-filter').prop('checked', false );
            $('.adult-workshop-filter:checked').each(function() {
                selectedFilters.push($(this).val());
            });

            if (selectedFilters.length > 0) {
                let selectedFiltersText = selectedFilters.join(',');
                redirectForSearch('adult_workshop_taxonomy_name=' + selectedFiltersText, restVars.base_url + '/adult_workshop/');
            } else {
                redirectForSearch('', restVars.base_url + '/adult_workshop/');
            }
      });

        $('.adult-workshop-all-filter').click(function() {
            if ($(this).is(':checked')) {
                $('.adult-workshop-filter:checked').each(function() {
                    $(this).prop('checked', false );
                });
                redirectForSearch('adult_workshop_taxonomy_name=all', restVars.base_url + '/adult_workshop/');
            } else {
                redirectForSearch('', restVars.base_url + '/adult_workshop/');            
            }
        
        });

        let adultWorkshopTaxonomies = getParameterByName('adult_workshop_taxonomy_name');
        if (adultWorkshopTaxonomies && adultWorkshopTaxonomies.length > 0) {
            $('.button-show-filters').addClass('button-hide-filters');
            $('.filters-aw-list').show();
            let adultWorkshopTaxonomiesList = adultWorkshopTaxonomies.split(',');

            $('.adult-workshop-filter, .adult-workshop-all-filter').each(function() {

                let checkBoxElement = $(this);
                let taxonomyFilter = $(this).val();
                    
                adultWorkshopTaxonomiesList.forEach(function(queryStringTaxonomy) {
                    if (taxonomyFilter === queryStringTaxonomy) {
                        checkBoxElement.prop('checked', true );
                    }
                });
                    
            });
        }

      function redirectForSearch(queryString, url) {
            if (!url) { 
                url = window.location.href;
            }
            if(url.indexOf('?') > 0) {
                url = url.substring(0, url.indexOf('?'));
            } 
            url += '?' + queryString;
            window.location.replace(url);
      }

      // button show calendar

      $('.button-show-calendar').click(function() {
          if ($( '.adult-workshop-datepicker' ).is(':visible')) {
            $(this).removeClass('button-hide-calendar');
            $( '.adult-workshop-datepicker' ).hide( 'slow' );
          } else {
            $(this).addClass('button-hide-calendar');
            $( '.adult-workshop-datepicker' ).show( 'slow' );
          } 
          
      });

       // button show filtes

       $('.button-show-filters').click(function() {
        if ($( '.filters-aw-list' ).is(':visible')) {
          $(this).removeClass('button-hide-filters');
          $( '.filters-aw-list' ).hide( 'slow' );
        } else {
          $(this).addClass('button-hide-filters');
          $( '.filters-aw-list' ).show( 'slow' );
        } 
        
    });

        if( $('body.blog').length ) {

            $.ajax({
                url: restVars.rest_url + 'wp/v2/posts/?per_page=1',
                context: document.body
            }).done(function(data) {
                if (typeof data !== 'undefined' && data.length > 0) {
                    updateNewsImage(data[0].id);
                    updateNewsInformation(data[0]);
                }
            });

        }

        $('#new-next-button').click(function() {

            let articleId = $('.article-news-top').attr('id');
            let postId = articleId.split('-')[1];

            getPost(postId, function(news) {
                if (news.next) {
                    updateNewsImage(news.next.id);
                    getPost(news.next.id, updateNewsInformation);
                } else {
                    // to do
                }
            })

        });

        $('#new-previous-button').click(function() {

            let articleId = $('.article-news-top').attr('id');
            let postId = articleId.split('-')[1];

            getPost(postId, function(news) {
                if (news.previous) {
                    updateNewsImage(news.previous.id);
                    getPost(news.previous.id, updateNewsInformation);
                } else {
                    // to do
                }
            })
            
        });

        function updateNewsImage(newsId) {
            $.ajax({
                url: restVars.rest_url + `acf/v3/posts/${newsId}/image`,
                context: document.body
            }).done(function(data) {
                $('.news-img-top').attr('src',data.image.url);
            });
        }

        function updateNewsInformation(data) {
            $('.article-news-top').attr('id', `post-${data.id}-top`);

            $('.entry-title-top').text(data.title.rendered);
            $('.entry-content-top p').remove();

            let content = data.excerpt.rendered;
            if (content) {
                if (content.length > 153) {
                    content = content.substring(0, 150);
                    content = content.concat('...</p>');
                }
            } else {
                content = '<p>For more information click Read more.</p>'
            }

            $('.entry-content-top').append(content);

            updateNewsCategories(data.categories);

            let dateString = formatDate(new Date(data.modified));

            let dateDiv = $('.news-date-top');
            dateDiv.empty();
            dateDiv.append(dateString);

            updateButtonsStyle(data);

            $('.news-read-more').attr('href', data.link);
        }

        function updateButtonsStyle(news) {
            if (news.next) {
                $('.slider-next').prop('disabled', false);
            } else {
                $('.slider-next').prop('disabled', true);
            }

            if (news.previous) {
                $('.slider-previous').prop('disabled', false);
            } else {
                $('.slider-previous').prop('disabled', true);
            }
        }

        function formatDate(date) {

            const months = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December'
            ];

            const days = [
                'Sunday',
                'Monday',
                'Tueday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday'
            ];

            const ordinalDate = englishOrdinalSuffix(date);

            const monthIndex = date.getMonth();
            const monthName = months[monthIndex];

            const year = date.getFullYear();

            const dayIndex = date.getDay();
            const dayName = days[dayIndex];

            return dayName + ', ' + ordinalDate + ' ' + monthName + ' ' + year;

        }

        function englishOrdinalSuffix(dt) {
            return dt.getDate()+(dt.getDate() % 10 === 1 && dt.getDate() !== 11 ? 'st' : (dt.getDate() % 10 === 2 && dt.getDate() !== 12 ? 'nd' : (dt.getDate() % 10 === 3 && dt.getDate() !== 13 ? 'rd' : 'th'))); 
        }

        function getPost(id, callback) {
            $.ajax({
                url: restVars.rest_url + 'wp/v2/posts/' + id,
                context: document.body
            }).done(function(data) {
                callback(data);
            });
        }

        function updateNewsCategories(categoryIds) {
            $.ajax({
                url: restVars.rest_url + `wp/v2/categories?include=${categoryIds.join(',')}`,
                context: document.body
            }).done(function(data) {
                let categories = [];
                data.forEach(function(category) {
                    categories.push(category.name);
                });
                let categoriesDiv = $('.news-categories-top');
                categoriesDiv.empty();
                categoriesDiv.append(categories.join(' / '));
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
                let content = $(this).siblings('.displayed-content');
                
                if (content.is(':visible')) {
                    let parent = $(this).parent();
                    let id = parent.attr('id');
                    $(this).text('Read more');
                    $(this).siblings('.displayed-content').hide('slow', function() {
                        $('.expand-item').each(function() {
                            if ($(this).attr('id') !== id) {
                                $(this).height('');
                            }
                        });
                    });
                } else {
                    let parent = $(this).parent();
                    let height = parent.height();
                    let id = parent.attr('id');
                    $('.expand-item').each(function() {
                        
                        if ((!($(this).find('.displayed-content')).is(':visible'))) {
                                $(this).height(''); 
                        } else {
                                $(this).find('.view-click').text('Read more');
                                $(this).find('.displayed-content').hide();
                        }

                        if ($(this).attr('id') !== id) {
                            $(this).height(height);
                        }
                    });

                    $(this).text('Read less');
                    $(this).siblings('.displayed-content').slideDown('slow');
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

})( jQuery, this );
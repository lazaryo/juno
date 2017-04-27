(function($) {
    var Juno = {
    // All pages
        'common': {
            init: function() {
                // JavaScript to be fired on all pages
                $('.bars').on('click', function() {
                    $(this).removeAttr('href');
                    $('.lana').toggleClass('isOpen');
                    $('.off-canvas').toggleClass('show-canvas');
                });
                
                $('.post').on('mouseover', function() {
                    var postID = $(this).attr('id');
                    var hex = $('#' + postID + ' .color').val();
                    $('#' + postID + ' span').css({'background': hex});
                });
                
                $('.post').on('mouseout', function() {
                    var postID = $(this).attr('id');
                    var bg = $('#' + postID + ' .bg').val();
                    $('#' + postID + ' span').css({'background': 'url("' + bg + '")'});
                });

                $('#top-wrap a[href^="#"]').click( function(e){
                    $("html, body").animate({
                        scrollTop: 0
                    }, 600, 'swing');
                    e.preventDefault();
                });

                $('.nav li.menu-item-has-children > a').click( function(){
                    $(this).removeAttr('href');
                    var element = $(this).parent('li');
                    if (element.hasClass('open')) {
                        element.removeClass('open');
                        element.find('li').removeClass('open');
                        element.find('ul').slideUp(250);
                    } else {
                        element.addClass('open');
                        element.children('ul').slideDown(250);
                        element.siblings('li').children('ul').slideUp(250);
                        element.siblings('li').removeClass('open');
                        element.siblings('li').find('li').removeClass('open');
                        element.siblings('li').find('ul').slideUp(250);
                    }
                });
            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        
        // Home page
        'home': {
            init: function() {
                // JavaScript to be fired on the home page
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        
        // About us page, note the change from about-us to about_us.
        'about_us': {
            init: function() {
                // JavaScript to be fired on the about us page
            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var fire;
            var namespace = Juno;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

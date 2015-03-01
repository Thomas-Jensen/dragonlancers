/**
 * Created by ThomasJensen on 23/12/14.
 */
$(document).ready(function(){
    $('.menu-button').click(function(event){
        event.stopPropagation();
        $('.bar-1').toggleClass('cross-icon1');
        $('.bar-2').toggleClass('cross-icon2');
        $('.bar-3').toggleClass('cross-icon3');
        $('.menu').removeClass('animate fadeOut');
        $('.menu').toggleClass('animate fadeIn');
        $('.menu').toggle();
    });

    $(document).click(function(event) {


        if(!$(event.target).closest('.menu').length) { //checks if clicked element is ancestor
            if($('.menu').is(":visible")) {
                $('.menu').removeClass('animate fadeIn');
                $('.menu').addClass('animate fadeOut');
                $('.bar-1').removeClass('cross-icon1');
                $('.bar-2').removeClass('cross-icon2');
                $('.bar-3').removeClass('cross-icon3');
                $('.menu').hide();
            }
        }
    })

    $('.menu-button').hover(function() {
        $('.bar1').addClass('menu-hover');
        $('.bar2').toggleClass('menu-hover');
        $('.bar3').toggleClass('menu-hover');
    });

    $('.menu-button').hover(function(){
        $('.bar-1').toggleClass('menu-hover');
        $('.bar-2').toggleClass('menu-hover');
        $('.bar-3').toggleClass('menu-hover');
    });


    $('.thomas').hover(function() {
        $('.dl-text').toggle();
        $('.thomas-text').toggle();
        $(this).toggleClass('active');
    })

    $('.ilona').hover(function() {
        $('.dl-text').toggle();
        $('.ilona-text').toggle();
        $(this).toggleClass('active');
        $('.1').focus();

    })

    $('.1').hover(function(){
        $('.title1').toggle();
        $('.1').toggleClass('team-spanHover');
        $('.text1').toggle();
        $('.text1').toggleClass('team-headerHover');

    })

    $('.2').hover(function(){
        $('.title2').toggle();
        $('.2').toggleClass('team-spanHover');
        $('.text2').toggle();
        $('.text2').toggleClass('team-headerHover');

    })

    $('.3').hover(function(){
        $('.title3').toggle();
        $('.3').toggleClass('team-spanHover');
        $('.text3').toggle();
        $('.text3').toggleClass('team-headerHover');

    })

    $('.4').hover(function(){
        $('.title4').toggle();
        $('.4').toggleClass('team-spanHover');
        $('.text4').toggle();
        $('.text4').toggleClass('team-headerHover');

    })

    $('.5').hover(function(){
        $('.title5').toggle();
        $('.5').toggleClass('team-spanHover');
        $('.text5').toggle();
        $('.text5').toggleClass('team-headerHover');

    })

    $.fn.is_on_screen = function(){

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

    };

    if( $('.home').length > 0 ) { // if target element exists in DOM
        if( $('.home').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.home-link').addClass('active'); // log info
        } else {
            $('.home-link').removeClass('active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.home').length > 0 ) { // if target element exists in DOM
            if( $('.home').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.home-link').addClass('active'); // log info
            } else {
                $('.home-link').removeClass('active'); // log info
            }
        }
    });


    if( $('#videoElement').length > 0 ) { // if target element exists in DOM
        if( $('#videoElement').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('#videoElement')[0].play(); // log info
        } else {
            $('#videoElement')[0].pause(); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('#videoElement').length > 0 ) { // if target element exists in DOM
            if( $('#videoElement').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('#videoElement')[0].play(); // log info
            } else {
                $('#videoElement')[0].pause(); // log info
            }
        }
    });


    if( $('#videoElement1').length > 0 ) { // if target element exists in DOM
        if( $('#videoElement1').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('#videoElement1')[0].play(); // log info
        } else {
            $('#videoElement1')[0].pause(); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('#videoElement1').length > 0 ) { // if target element exists in DOM
            if( $('#videoElement1').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('#videoElement1')[0].play(); // log info
            } else {
                $('#videoElement1')[0].pause(); // log info
            }
        }
    });


    if( $('.philosophy').length > 0 ) { // if target element exists in DOM
        if( $('.philosophy').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.philosophy-link').addClass('active'); // log info
        } else {
            $('.philosophy-link').removeClass('active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.philosophy').length > 0 ) { // if target element exists in DOM
            if( $('.philosophy').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.philosophy-link').addClass('active'); // log info
            } else {
                $('.philosophy-link').removeClass('active'); // log info
            }
        }
    });



    if( $('.services').length > 0 ) { // if target element exists in DOM
        if( $('.services').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.services-link').addClass('active'); // log info
        } else {
            $('.services-link').removeClass('active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.services').length > 0 ) { // if target element exists in DOM
            if( $('.services').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.services-link').addClass('active'); // log info
            } else {
                $('.services-link').removeClass('active'); // log info
            }
        }
    });




    if( $('.work').length > 0 ) { // if target element exists in DOM
        if( $('.work').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.work-link').addClass('active'); // log info
        } else {
            $('.work-link').removeClass('active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.work').length > 0 ) { // if target element exists in DOM
            if( $('.work').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.work-link').addClass('active'); // log info
            } else {
                $('.work-link').removeClass('active'); // log info
            }
        }
    });


    if( $('.philosophy-right-top h2').length > 0 ) { // if target element exists in DOM
        if( $('.philosophy-right-top h2').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.philosophy-right-top h2').addClass('animate fadeIn'); // log info
        } else {
            $('.philosophy-right-top h2').removeClass('animate fadeIn'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.philosophy-right-top h2').length > 0 ) { // if target element exists in DOM
            if( $('.philosophy-right-top h2').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.philosophy-right-top h2').addClass('animate fadeIn'); // log info
            } else {
                $('.philosophy-right-top h2').removeClass('animate fadeIn'); // log info
            }
        }
    });


    if( $('.philosophy-left article h2').length > 0 ) { // if target element exists in DOM
        if( $('.philosophy-left article h2').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.philosophy-left article h2').addClass('animate fadeIn'); // log info
        } else {
            $('.philosophy-left article h2').removeClass('animate fadeIn'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.philosophy-left article h2').length > 0 ) { // if target element exists in DOM
            if( $('.philosophy-left article h2').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.philosophy-left article h2').addClass('animate fadeIn'); // log info
            } else {
                $('.philosophy-left article h2').removeClass('animate fadeIn'); // log info
            }
        }
    });


    if( $('.work-more').length > 0 ) { // if target element exists in DOM
        if( $('.work-more').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.work-more').addClass('animate fadeInUp'); // log info
        } else {
            $('.work-more').removeClass('animate fadeInUp'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.work-more').length > 0 ) { // if target element exists in DOM
            if( $('.work-more').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.work-more').addClass('animate fadeInUp'); // log info
            } else {
                $('.work-more').removeClass('animate fadeInUp'); // log info
            }
        }
    });


    if( $('.print').length > 0 ) { // if target element exists in DOM
        if( $('.print').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.print').addClass('animate fadeInLeft'); // add animate class
            $('.web').addClass('animate fadeInLeft'); // add animate class
            $('.apps').addClass('animate fadeInRight'); // add animate class
            $('.subs').addClass('animate fadeInRight'); // add animate class
        } else {
            $('.print').removeClass('animate fadeInLeft'); // remove animate class
            $('.web').removeClass('animate fadeInLeft'); // remove animate class
            $('.apps').removeClass('animate fadeInRight'); // remove animate class
            $('.subs').removeClass('animate fadeInRight'); // remove animate class
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.print').length > 0 ) { // if target element exists in DOM
            if( $('.print').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.print').addClass('animate fadeInLeft'); // add animate class
                $('.web').addClass('animate fadeInLeft'); // add animate class
                $('.apps').addClass('animate fadeInRight'); // add animate class
                $('.subs').addClass('animate fadeInRight'); // add animate class

            } else {
                $('.print').removeClass('animate fadeInLeft'); // remove animate class
                $('.web').removeClass('animate fadeInLeft'); // remove animate class
                $('.apps').removeClass('animate fadeInRight'); // remove animate class
                $('.subs').removeClass('animate fadeInRight'); // remove animate class
            }
        }
    });

    if( $('.qualities-small').length > 0 ) { // if target element exists in DOM
        if( $('.qualities-small').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.qualities-small').addClass('animate fadeIn'); // log info
        } else {
            $('.qualities-small').removeClass('animate fadeIn'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.qualities-small').length > 0 ) { // if target element exists in DOM
            if( $('.qualities-small').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.qualities-small').addClass('animate fadeIn'); // log info
            } else {
                $('.qualities-small').removeClass('animate fadeIn'); // log info
            }
        }
    });

    if( $('#intro').length > 0 ) { // if target element exists in DOM
        if( $('#intro').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.intro-circle').addClass('about-active'); // log info
        } else {
            $('.intro-circle').removeClass('about-active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('#intro').length > 0 ) { // if target element exists in DOM
            if( $('#intro').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.intro-circle').addClass('about-active'); // log info
            } else {
                $('.intro-circle').removeClass('about-active'); // log info
            }
        }
    });

    if( $('#values').length > 0 ) { // if target element exists in DOM
        if( $('#values').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.values-circle').addClass('about-active'); // log info
        } else {
            $('.values-circle').removeClass('about-active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('#values').length > 0 ) { // if target element exists in DOM
            if( $('#values').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.values-circle').addClass('about-active'); // log info
            } else {
                $('.values-circle').removeClass('about-active'); // log info
            }
        }
    });

    if( $('#process').length > 0 ) { // if target element exists in DOM
        if( $('#process').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.process-circle').addClass('about-active'); // log info
        } else {
            $('.process-circle').removeClass('about-active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('#process').length > 0 ) { // if target element exists in DOM
            if( $('#process').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.process-circle').addClass('about-active'); // log info
            } else {
                $('.process-circle').removeClass('about-active'); // log info
            }
        }
    });

    if( $('#team-info').length > 0 ) { // if target element exists in DOM
        if( $('#team-info').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.team-circle').addClass('about-active'); // log info
        } else {
            $('.team-circle').removeClass('about-active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('#team-info').length > 0 ) { // if target element exists in DOM
            if( $('#team-info').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.team-circle').addClass('about-active'); // log info
            } else {
                $('.team-circle').removeClass('about-active'); // log info
            }
        }
    });

    if( $('#dl-info').length > 0 ) { // if target element exists in DOM
        if( $('#dl-info').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.dl-circle').addClass('about-active'); // log info
        } else {
            $('.dl-circle').removeClass('about-active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('#dl-info').length > 0 ) { // if target element exists in DOM
            if( $('#dl-info').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.dl-circle').addClass('about-active'); // log info
            } else {
                $('.dl-circle').removeClass('about-active'); // log info
            }
        }
    });


    if( $('.team').length > 0 ) { // if target element exists in DOM
        if( $('.team').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.team-link').addClass('active'); // log info
            $('.left').addClass('animate fadeIn'); // add animate class
            $('.center').addClass('animate fadeIn'); // add animate class
            $('.right').addClass('animate fadeIn'); // add animate class
        } else {
            $('.team-link').removeClass('active'); // log info
            $('.left').removeClass('animate fadeIn'); // add animate class
            $('.center').removeClass('animate fadeIn'); // add animate class
            $('.right').removeClass('animate fadeIn'); // add animate class
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.team').length > 0 ) { // if target element exists in DOM
            if( $('.team').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.team-link').addClass('active'); // log info
                $('.left').addClass('animate fadeIn'); // add animate class
                $('.center').addClass('animate fadeIn'); // add animate class
                $('.right').addClass('animate fadeIn'); // add animate class
            } else {
                $('.team-link').removeClass('active'); // log info
                $('.left').removeClass('animate fadeIn'); // add animate class
                $('.center').removeClass('animate fadeIn'); // add animate class
                $('.right').removeClass('animate fadeIn'); // add animate class
            }
        }
    });


    if( $('.submit').length > 0 ) { // if target element exists in DOM
        if( $('.submit').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.submit').addClass('animate fadeIn'); // log info
            $('.name').addClass('animate fadeInLeft'); // log info
            $('.email').addClass('animate fadeInLeft'); // log info
            $('.message').addClass('animate fadeInLeft'); // log info

        } else {
            $('.submit').removeClass('animate fadeIn'); // log info
            $('.name').removeClass('animate fadeInLeft'); // log info
            $('.email').removeClass('animate fadeInLeft'); // log info
            $('.message').removeClass('animate fadeInLeft'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.submit').length > 0 ) { // if target element exists in DOM
            if( $('.submit').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.submit').addClass('animate fadeIn'); // log info
                $('.name').addClass('animate fadeInLeft'); // log info
                $('.email').addClass('animate fadeInLeft'); // log info
                $('.message').addClass('animate fadeInLeft'); // log info
            } else {
                $('.submit').removeClass('animate fadeIn'); // log info
                $('.name').removeClass('animate fadeInLeft'); // log info
                $('.email').removeClass('animate fadeInLeft'); // log info
                $('.message').removeClass('animate fadeInLeft'); // log info
            }
        }
    });



    if( $('.contact').length > 0 ) { // if target element exists in DOM
        if( $('.contact').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.contact-link').addClass('active'); // log info
        } else {
            $('.contact-link').removeClass('active'); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.contact').length > 0 ) { // if target element exists in DOM
            if( $('.contact').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.contact-link').addClass('active'); // log info
            } else {
                $('.contact-link').removeClass('active'); // log info
            }
        }
    });

    function checkPosition() {
        if (window.matchMedia('(max-width: 480px)').matches) {
            $('.philosophy-right-top').prepend('<img src="/img/POSTER-LANDING%20PAGE.png">');
        } else {
            $('.philosophy-right-top').prepend('')
        }
    }

    if( $('.videoElement').length > 0 ) { // if target element exists in DOM
        if( $('.videoElement').is_on_screen() ) { // if target element is visible on screen after DOM loaded
            $('.videoElement')[0].play(); // log info
        } else {
            $('.videoElement')[0].pause(); // log info
        }
    }
    $(window).scroll(function(){ // bind window scroll event
        if( $('.videoElement').length > 0 ) { // if target element exists in DOM
            if( $('.videoElement').is_on_screen() ) { // if target element is visible on screen after DOM loaded
                $('.videoElement')[0].play(); // log info
            } else {
                $('.videoElement')[0].pause(); // log info
            }
        }
    });

    $('.services-print').click(function() {
        $('.service-txt-print').show();
        $('.service-txt-web').hide();
        $('.service-txt-apps').hide();
        $('.service-txt-subs').hide();
        $('.service-img-print').show();
        $('.service-img-web').hide();
        $('.service-img-apps').hide();
        $('.service-img-subs').hide();
        $('.services-print').addClass('active-svg');
        $('.services-web').removeClass('active-svg');
        $('.services-apps').removeClass('active-svg');
        $('.services-subs').removeClass('active-svg');

    })

    $('.services-web').click(function() {
        $('.service-txt-web').show();
        $('.service-txt-print').hide();
        $('.service-txt-apps').hide();
        $('.service-txt-subs').hide();
        $('.service-img-print').hide();
        $('.service-img-web').show();
        $('.service-img-apps').hide();
        $('.service-img-subs').hide();
        $('.services-web').addClass('active-svg');
        $('.services-print').removeClass('active-svg');
        $('.services-apps').removeClass('active-svg');
        $('.services-subs').removeClass('active-svg');
    })

    $('.services-apps').click(function() {
        $('.service-txt-apps').show();
        $('.service-txt-print').hide();
        $('.service-txt-web').hide();
        $('.service-txt-subs').hide();
        $('.service-img-print').hide();
        $('.service-img-web').hide();
        $('.service-img-apps').show();
        $('.service-img-subs').hide();
        $('.services-apps').addClass('active-svg');
        $('.services-print').removeClass('active-svg');
        $('.services-web').removeClass('active-svg');
        $('.services-subs').removeClass('active-svg');
    })

    $('.services-subs').click(function() {
        $('.service-txt-subs').show();
        $('.service-txt-print').hide();
        $('.service-txt-web').hide();
        $('.service-txt-apps').hide();
        $('.service-img-print').hide();
        $('.service-img-web').hide();
        $('.service-img-apps').hide();
        $('.service-img-subs').show();
        $('.services-subs').addClass('active-svg');
        $('.services-print').removeClass('active-svg');
        $('.services-apps').removeClass('active-svg');
        $('.services-web').removeClass('active-svg');
    })

    $('.about-leadership').click(function() {
        $(this).addClass('active');
        $('.about-innovation').removeClass('active');
        $('.about-creative-process').removeClass('active');
        $('.about-perfectionism').removeClass('active');
        $('.about-technology').removeClass('active');
        $('#leadership-box').show();
        $('#innovation-box').hide();
        $('#creative-process-box').hide();
        $('#perfectionism-box').hide();
        $('#technology-box').hide();
    })

    $('.about-innovation').click(function() {
        $(this).addClass('active');
        $('.about-leadership').removeClass('active');
        $('.about-creative-process').removeClass('active');
        $('.about-perfectionism').removeClass('active');
        $('.about-technology').removeClass('active');
        $('#innovation-box').show();
        $('#leadership-box').hide();
        $('#creative-process-box').hide();
        $('#perfectionism-box').hide();
        $('#technology-box').hide();
    })

    $('.about-creative-process').click(function() {
        $(this).addClass('active');
        $('.about-innovation').removeClass('active');
        $('.about-leadership').removeClass('active');
        $('.about-perfectionism').removeClass('active');
        $('.about-technology').removeClass('active');
        $('#creative-process-box').show();
        $('#innovation-box').hide();
        $('#leadership-box').hide();
        $('#perfectionism-box').hide();
        $('#technology-box').hide();
    })

    $('.about-perfectionism').click(function() {
        $(this).addClass('active');
        $('.about-innovation').removeClass('active');
        $('.about-creative-process').removeClass('active');
        $('.about-leadership').removeClass('active');
        $('.about-technology').removeClass('active');
        $('#perfectionism-box').show();
        $('#innovation-box').hide();
        $('#creative-process-box').hide();
        $('#leadership-box').hide();
        $('#technology-box').hide();
    })

    $('.about-technology').click(function() {
        $(this).addClass('active');
        $('.about-innovation').removeClass('active');
        $('.about-creative-process').removeClass('active');
        $('.about-perfectionism').removeClass('active');
        $('.about-leadership').removeClass('active');
        $('#technology-box').show();
        $('#innovation-box').hide();
        $('#creative-process-box').hide();
        $('#perfectionism-box').hide();
        $('#leadership-box').hide();
    })

    $('.planning-button').click(function(){
        $(this).addClass('active-slide');
        $('.prod-slide-container').css('left', '0%');
        $('.design-button').removeClass('active-slide');
        $('.development-button').removeClass('active-slide');
        $('.finalizing-button').removeClass('active-slide');
        $('.launch-button').removeClass('active-slide');
    })

    $('.design-button').click(function(){
        $(this).addClass('active-slide');
        $('.prod-slide-container').css('left', '-100%');
        $('.planning-button').removeClass('active-slide');
        $('.development-button').removeClass('active-slide');
        $('.finalizing-button').removeClass('active-slide');
        $('.launch-button').removeClass('active-slide');
    })

    $('.development-button').click(function(){
        $(this).addClass('active-slide');
        $('.prod-slide-container').css('left', '-200%');
        $('.design-button').removeClass('active-slide');
        $('.planning-button').removeClass('active-slide');
        $('.finalizing-button').removeClass('active-slide');
        $('.launch-button').removeClass('active-slide');
    })

    $('.finalizing-button').click(function(){
        $(this).addClass('active-slide');
        $('.prod-slide-container').css('left', '-300%');
        $('.design-button').removeClass('active-slide');
        $('.development-button').removeClass('active-slide');
        $('.planning-button').removeClass('active-slide');
        $('.launch-button').removeClass('active-slide');
    })

    $('.launch-button').click(function(){
        $(this).addClass('active-slide');
        $('.prod-slide-container').css('left', '-400%');
        $('.design-button').removeClass('active-slide');
        $('.development-button').removeClass('active-slide');
        $('.finalizing-button').removeClass('active-slide');
        $('.planning-button').removeClass('active-slide');
    })


    $('.service-contact').click(function() {
        $(this).toggleClass('clicked');
    });

    $('.print').hover(function(){
        $('.print').toggleClass('active-svg-text');

    });
    $('.web').hover(function(){
        $('.web').toggleClass('active-svg-text');

    });
    $('.apps').hover(function(){
        $('.apps').toggleClass('active-svg-text2');

    });
    $('.subs').hover(function(){
        $('.subs').toggleClass('active-svg-text3');

    });

    $('.php-a').hide();
    $('.php-bg').hover(function()
        {
            $('.php-a').toggleClass('animate fadeIn');
            $('.php-a').toggle();
        }
    );

    $('.html-a').hide();
    $('.html-bg').hover(function()
        {
            $('.html-a').toggleClass('animate fadeIn');
            $('.html-a').toggle();
        }
    );

    $('.css-a').hide();
    $('.css-bg').hover(function()
        {
            $('.css-a').toggleClass('animate fadeIn');
            $('.css-a').toggle();
        }
    );

    $('.javascript-a').hide();
    $('.javascript-bg').hover(function()
        {
            $('.javascript-a').toggleClass('animate fadeIn');
            $('.javascript-a').toggle();
        }
    );

    $('.design-a').hide();
    $('.design-bg').hover(function()
        {
            $('.design-a').toggleClass('animate fadeIn');
            $('.design-a').toggle();
        }
    );

    $('.seo-a').hide();
    $('.seo-bg').hover(function()
        {
            $('.seo-a').toggleClass('animate fadeIn');
            $('.seo-a').toggle();
        }
    );

    $('.business-a').hide();
    $('.business-bg').hover(function()
        {
            $('.business-a').toggleClass('animate fadeIn');
            $('.business-a').toggle();
        }
    );

    $('.news-a').hide();
    $('.news-bg').hover(function()
        {
            $('.news-a').toggleClass('animate fadeIn');
            $('.news-a').toggle();
        }
    );







});
/*!
 * Stellar.js v0.6.2
 * http://markdalgleish.com/projects/stellar.js
 *
 * Copyright 2014, Mark Dalgleish
 * This content is released under the MIT license
 * http://markdalgleish.mit-license.org
 */

;(function($, window, document, undefined) {

    var pluginName = 'stellar',
        defaults = {
            scrollProperty: 'scroll',
            positionProperty: 'position',
            horizontalScrolling: true,
            verticalScrolling: true,
            horizontalOffset: 0,
            verticalOffset: 0,
            responsive: false,
            parallaxBackgrounds: true,
            parallaxElements: true,
            hideDistantElements: true,
            hideElement: function($elem) { $elem.hide(); },
            showElement: function($elem) { $elem.show(); }
        },

        scrollProperty = {
            scroll: {
                getLeft: function($elem) { return $elem.scrollLeft(); },
                setLeft: function($elem, val) { $elem.scrollLeft(val); },

                getTop: function($elem) { return $elem.scrollTop();	},
                setTop: function($elem, val) { $elem.scrollTop(val); }
            },
            position: {
                getLeft: function($elem) { return parseInt($elem.css('left'), 10) * -1; },
                getTop: function($elem) { return parseInt($elem.css('top'), 10) * -1; }
            },
            margin: {
                getLeft: function($elem) { return parseInt($elem.css('margin-left'), 10) * -1; },
                getTop: function($elem) { return parseInt($elem.css('margin-top'), 10) * -1; }
            },
            transform: {
                getLeft: function($elem) {
                    var computedTransform = getComputedStyle($elem[0])[prefixedTransform];
                    return (computedTransform !== 'none' ? parseInt(computedTransform.match(/(-?[0-9]+)/g)[4], 10) * -1 : 0);
                },
                getTop: function($elem) {
                    var computedTransform = getComputedStyle($elem[0])[prefixedTransform];
                    return (computedTransform !== 'none' ? parseInt(computedTransform.match(/(-?[0-9]+)/g)[5], 10) * -1 : 0);
                }
            }
        },

        positionProperty = {
            position: {
                setLeft: function($elem, left) { $elem.css('left', left); },
                setTop: function($elem, top) { $elem.css('top', top); }
            },
            transform: {
                setPosition: function($elem, left, startingLeft, top, startingTop) {
                    $elem[0].style[prefixedTransform] = 'translate3d(' + (left - startingLeft) + 'px, ' + (top - startingTop) + 'px, 0)';
                }
            }
        },

    // Returns a function which adds a vendor prefix to any CSS property name
        vendorPrefix = (function() {
            var prefixes = /^(Moz|Webkit|Khtml|O|ms|Icab)(?=[A-Z])/,
                style = $('script')[0].style,
                prefix = '',
                prop;

            for (prop in style) {
                if (prefixes.test(prop)) {
                    prefix = prop.match(prefixes)[0];
                    break;
                }
            }

            if ('WebkitOpacity' in style) { prefix = 'Webkit'; }
            if ('KhtmlOpacity' in style) { prefix = 'Khtml'; }

            return function(property) {
                return prefix + (prefix.length > 0 ? property.charAt(0).toUpperCase() + property.slice(1) : property);
            };
        }()),

        prefixedTransform = vendorPrefix('transform'),

        supportsBackgroundPositionXY = $('<div />', { style: 'background:#fff' }).css('background-position-x') !== undefined,

        setBackgroundPosition = (supportsBackgroundPositionXY ?
            function($elem, x, y) {
                $elem.css({
                    'background-position-x': x,
                    'background-position-y': y
                });
            } :
            function($elem, x, y) {
                $elem.css('background-position', x + ' ' + y);
            }
        ),

        getBackgroundPosition = (supportsBackgroundPositionXY ?
            function($elem) {
                return [
                    $elem.css('background-position-x'),
                    $elem.css('background-position-y')
                ];
            } :
            function($elem) {
                return $elem.css('background-position').split(' ');
            }
        ),

        requestAnimFrame = (
        window.requestAnimationFrame       ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame    ||
        window.oRequestAnimationFrame      ||
        window.msRequestAnimationFrame     ||
        function(callback) {
            setTimeout(callback, 1000 / 60);
        }
        );

    function Plugin(element, options) {
        this.element = element;
        this.options = $.extend({}, defaults, options);

        this._defaults = defaults;
        this._name = pluginName;

        this.init();
    }

    Plugin.prototype = {
        init: function() {
            this.options.name = pluginName + '_' + Math.floor(Math.random() * 1e9);

            this._defineElements();
            this._defineGetters();
            this._defineSetters();
            this._handleWindowLoadAndResize();
            this._detectViewport();

            this.refresh({ firstLoad: true });

            if (this.options.scrollProperty === 'scroll') {
                this._handleScrollEvent();
            } else {
                this._startAnimationLoop();
            }
        },
        _defineElements: function() {
            if (this.element === document.body) this.element = window;
            this.$scrollElement = $(this.element);
            this.$element = (this.element === window ? $('body') : this.$scrollElement);
            this.$viewportElement = (this.options.viewportElement !== undefined ? $(this.options.viewportElement) : (this.$scrollElement[0] === window || this.options.scrollProperty === 'scroll' ? this.$scrollElement : this.$scrollElement.parent()) );
        },
        _defineGetters: function() {
            var self = this,
                scrollPropertyAdapter = scrollProperty[self.options.scrollProperty];

            this._getScrollLeft = function() {
                return scrollPropertyAdapter.getLeft(self.$scrollElement);
            };

            this._getScrollTop = function() {
                return scrollPropertyAdapter.getTop(self.$scrollElement);
            };
        },
        _defineSetters: function() {
            var self = this,
                scrollPropertyAdapter = scrollProperty[self.options.scrollProperty],
                positionPropertyAdapter = positionProperty[self.options.positionProperty],
                setScrollLeft = scrollPropertyAdapter.setLeft,
                setScrollTop = scrollPropertyAdapter.setTop;

            this._setScrollLeft = (typeof setScrollLeft === 'function' ? function(val) {
                setScrollLeft(self.$scrollElement, val);
            } : $.noop);

            this._setScrollTop = (typeof setScrollTop === 'function' ? function(val) {
                setScrollTop(self.$scrollElement, val);
            } : $.noop);

            this._setPosition = positionPropertyAdapter.setPosition ||
            function($elem, left, startingLeft, top, startingTop) {
                if (self.options.horizontalScrolling) {
                    positionPropertyAdapter.setLeft($elem, left, startingLeft);
                }

                if (self.options.verticalScrolling) {
                    positionPropertyAdapter.setTop($elem, top, startingTop);
                }
            };
        },
        _handleWindowLoadAndResize: function() {
            var self = this,
                $window = $(window);

            if (self.options.responsive) {
                $window.bind('load.' + this.name, function() {
                    self.refresh();
                });
            }

            $window.bind('resize.' + this.name, function() {
                self._detectViewport();

                if (self.options.responsive) {
                    self.refresh();
                }
            });
        },
        refresh: function(options) {
            var self = this,
                oldLeft = self._getScrollLeft(),
                oldTop = self._getScrollTop();

            if (!options || !options.firstLoad) {
                this._reset();
            }

            this._setScrollLeft(0);
            this._setScrollTop(0);

            this._setOffsets();
            this._findParticles();
            this._findBackgrounds();

            // Fix for WebKit background rendering bug
            if (options && options.firstLoad && /WebKit/.test(navigator.userAgent)) {
                $(window).load(function() {
                    var oldLeft = self._getScrollLeft(),
                        oldTop = self._getScrollTop();

                    self._setScrollLeft(oldLeft + 1);
                    self._setScrollTop(oldTop + 1);

                    self._setScrollLeft(oldLeft);
                    self._setScrollTop(oldTop);
                });
            }

            this._setScrollLeft(oldLeft);
            this._setScrollTop(oldTop);
        },
        _detectViewport: function() {
            var viewportOffsets = this.$viewportElement.offset(),
                hasOffsets = viewportOffsets !== null && viewportOffsets !== undefined;

            this.viewportWidth = this.$viewportElement.width();
            this.viewportHeight = this.$viewportElement.height();

            this.viewportOffsetTop = (hasOffsets ? viewportOffsets.top : 0);
            this.viewportOffsetLeft = (hasOffsets ? viewportOffsets.left : 0);
        },
        _findParticles: function() {
            var self = this,
                scrollLeft = this._getScrollLeft(),
                scrollTop = this._getScrollTop();

            if (this.particles !== undefined) {
                for (var i = this.particles.length - 1; i >= 0; i--) {
                    this.particles[i].$element.data('stellar-elementIsActive', undefined);
                }
            }

            this.particles = [];

            if (!this.options.parallaxElements) return;

            this.$element.find('[data-stellar-ratio]').each(function(i) {
                var $this = $(this),
                    horizontalOffset,
                    verticalOffset,
                    positionLeft,
                    positionTop,
                    marginLeft,
                    marginTop,
                    $offsetParent,
                    offsetLeft,
                    offsetTop,
                    parentOffsetLeft = 0,
                    parentOffsetTop = 0,
                    tempParentOffsetLeft = 0,
                    tempParentOffsetTop = 0;

                // Ensure this element isn't already part of another scrolling element
                if (!$this.data('stellar-elementIsActive')) {
                    $this.data('stellar-elementIsActive', this);
                } else if ($this.data('stellar-elementIsActive') !== this) {
                    return;
                }

                self.options.showElement($this);

                // Save/restore the original top and left CSS values in case we refresh the particles or destroy the instance
                if (!$this.data('stellar-startingLeft')) {
                    $this.data('stellar-startingLeft', $this.css('left'));
                    $this.data('stellar-startingTop', $this.css('top'));
                } else {
                    $this.css('left', $this.data('stellar-startingLeft'));
                    $this.css('top', $this.data('stellar-startingTop'));
                }

                positionLeft = $this.position().left;
                positionTop = $this.position().top;

                // Catch-all for margin top/left properties (these evaluate to 'auto' in IE7 and IE8)
                marginLeft = ($this.css('margin-left') === 'auto') ? 0 : parseInt($this.css('margin-left'), 10);
                marginTop = ($this.css('margin-top') === 'auto') ? 0 : parseInt($this.css('margin-top'), 10);

                offsetLeft = $this.offset().left - marginLeft;
                offsetTop = $this.offset().top - marginTop;

                // Calculate the offset parent
                $this.parents().each(function() {
                    var $this = $(this);

                    if ($this.data('stellar-offset-parent') === true) {
                        parentOffsetLeft = tempParentOffsetLeft;
                        parentOffsetTop = tempParentOffsetTop;
                        $offsetParent = $this;

                        return false;
                    } else {
                        tempParentOffsetLeft += $this.position().left;
                        tempParentOffsetTop += $this.position().top;
                    }
                });

                // Detect the offsets
                horizontalOffset = ($this.data('stellar-horizontal-offset') !== undefined ? $this.data('stellar-horizontal-offset') : ($offsetParent !== undefined && $offsetParent.data('stellar-horizontal-offset') !== undefined ? $offsetParent.data('stellar-horizontal-offset') : self.horizontalOffset));
                verticalOffset = ($this.data('stellar-vertical-offset') !== undefined ? $this.data('stellar-vertical-offset') : ($offsetParent !== undefined && $offsetParent.data('stellar-vertical-offset') !== undefined ? $offsetParent.data('stellar-vertical-offset') : self.verticalOffset));

                // Add our object to the particles collection
                self.particles.push({
                    $element: $this,
                    $offsetParent: $offsetParent,
                    isFixed: $this.css('position') === 'fixed',
                    horizontalOffset: horizontalOffset,
                    verticalOffset: verticalOffset,
                    startingPositionLeft: positionLeft,
                    startingPositionTop: positionTop,
                    startingOffsetLeft: offsetLeft,
                    startingOffsetTop: offsetTop,
                    parentOffsetLeft: parentOffsetLeft,
                    parentOffsetTop: parentOffsetTop,
                    stellarRatio: ($this.data('stellar-ratio') !== undefined ? $this.data('stellar-ratio') : 1),
                    width: $this.outerWidth(true),
                    height: $this.outerHeight(true),
                    isHidden: false
                });
            });
        },
        _findBackgrounds: function() {
            var self = this,
                scrollLeft = this._getScrollLeft(),
                scrollTop = this._getScrollTop(),
                $backgroundElements;

            this.backgrounds = [];

            if (!this.options.parallaxBackgrounds) return;

            $backgroundElements = this.$element.find('[data-stellar-background-ratio]');

            if (this.$element.data('stellar-background-ratio')) {
                $backgroundElements = $backgroundElements.add(this.$element);
            }

            $backgroundElements.each(function() {
                var $this = $(this),
                    backgroundPosition = getBackgroundPosition($this),
                    horizontalOffset,
                    verticalOffset,
                    positionLeft,
                    positionTop,
                    marginLeft,
                    marginTop,
                    offsetLeft,
                    offsetTop,
                    $offsetParent,
                    parentOffsetLeft = 0,
                    parentOffsetTop = 0,
                    tempParentOffsetLeft = 0,
                    tempParentOffsetTop = 0;

                // Ensure this element isn't already part of another scrolling element
                if (!$this.data('stellar-backgroundIsActive')) {
                    $this.data('stellar-backgroundIsActive', this);
                } else if ($this.data('stellar-backgroundIsActive') !== this) {
                    return;
                }

                // Save/restore the original top and left CSS values in case we destroy the instance
                if (!$this.data('stellar-backgroundStartingLeft')) {
                    $this.data('stellar-backgroundStartingLeft', backgroundPosition[0]);
                    $this.data('stellar-backgroundStartingTop', backgroundPosition[1]);
                } else {
                    setBackgroundPosition($this, $this.data('stellar-backgroundStartingLeft'), $this.data('stellar-backgroundStartingTop'));
                }

                // Catch-all for margin top/left properties (these evaluate to 'auto' in IE7 and IE8)
                marginLeft = ($this.css('margin-left') === 'auto') ? 0 : parseInt($this.css('margin-left'), 10);
                marginTop = ($this.css('margin-top') === 'auto') ? 0 : parseInt($this.css('margin-top'), 10);

                offsetLeft = $this.offset().left - marginLeft - scrollLeft;
                offsetTop = $this.offset().top - marginTop - scrollTop;

                // Calculate the offset parent
                $this.parents().each(function() {
                    var $this = $(this);

                    if ($this.data('stellar-offset-parent') === true) {
                        parentOffsetLeft = tempParentOffsetLeft;
                        parentOffsetTop = tempParentOffsetTop;
                        $offsetParent = $this;

                        return false;
                    } else {
                        tempParentOffsetLeft += $this.position().left;
                        tempParentOffsetTop += $this.position().top;
                    }
                });

                // Detect the offsets
                horizontalOffset = ($this.data('stellar-horizontal-offset') !== undefined ? $this.data('stellar-horizontal-offset') : ($offsetParent !== undefined && $offsetParent.data('stellar-horizontal-offset') !== undefined ? $offsetParent.data('stellar-horizontal-offset') : self.horizontalOffset));
                verticalOffset = ($this.data('stellar-vertical-offset') !== undefined ? $this.data('stellar-vertical-offset') : ($offsetParent !== undefined && $offsetParent.data('stellar-vertical-offset') !== undefined ? $offsetParent.data('stellar-vertical-offset') : self.verticalOffset));

                self.backgrounds.push({
                    $element: $this,
                    $offsetParent: $offsetParent,
                    isFixed: $this.css('background-attachment') === 'fixed',
                    horizontalOffset: horizontalOffset,
                    verticalOffset: verticalOffset,
                    startingValueLeft: backgroundPosition[0],
                    startingValueTop: backgroundPosition[1],
                    startingBackgroundPositionLeft: (isNaN(parseInt(backgroundPosition[0], 10)) ? 0 : parseInt(backgroundPosition[0], 10)),
                    startingBackgroundPositionTop: (isNaN(parseInt(backgroundPosition[1], 10)) ? 0 : parseInt(backgroundPosition[1], 10)),
                    startingPositionLeft: $this.position().left,
                    startingPositionTop: $this.position().top,
                    startingOffsetLeft: offsetLeft,
                    startingOffsetTop: offsetTop,
                    parentOffsetLeft: parentOffsetLeft,
                    parentOffsetTop: parentOffsetTop,
                    stellarRatio: ($this.data('stellar-background-ratio') === undefined ? 1 : $this.data('stellar-background-ratio'))
                });
            });
        },
        _reset: function() {
            var particle,
                startingPositionLeft,
                startingPositionTop,
                background,
                i;

            for (i = this.particles.length - 1; i >= 0; i--) {
                particle = this.particles[i];
                startingPositionLeft = particle.$element.data('stellar-startingLeft');
                startingPositionTop = particle.$element.data('stellar-startingTop');

                this._setPosition(particle.$element, startingPositionLeft, startingPositionLeft, startingPositionTop, startingPositionTop);

                this.options.showElement(particle.$element);

                particle.$element.data('stellar-startingLeft', null).data('stellar-elementIsActive', null).data('stellar-backgroundIsActive', null);
            }

            for (i = this.backgrounds.length - 1; i >= 0; i--) {
                background = this.backgrounds[i];

                background.$element.data('stellar-backgroundStartingLeft', null).data('stellar-backgroundStartingTop', null);

                setBackgroundPosition(background.$element, background.startingValueLeft, background.startingValueTop);
            }
        },
        destroy: function() {
            this._reset();

            this.$scrollElement.unbind('resize.' + this.name).unbind('scroll.' + this.name);
            this._animationLoop = $.noop;

            $(window).unbind('load.' + this.name).unbind('resize.' + this.name);
        },
        _setOffsets: function() {
            var self = this,
                $window = $(window);

            $window.unbind('resize.horizontal-' + this.name).unbind('resize.vertical-' + this.name);

            if (typeof this.options.horizontalOffset === 'function') {
                this.horizontalOffset = this.options.horizontalOffset();
                $window.bind('resize.horizontal-' + this.name, function() {
                    self.horizontalOffset = self.options.horizontalOffset();
                });
            } else {
                this.horizontalOffset = this.options.horizontalOffset;
            }

            if (typeof this.options.verticalOffset === 'function') {
                this.verticalOffset = this.options.verticalOffset();
                $window.bind('resize.vertical-' + this.name, function() {
                    self.verticalOffset = self.options.verticalOffset();
                });
            } else {
                this.verticalOffset = this.options.verticalOffset;
            }
        },
        _repositionElements: function() {
            var scrollLeft = this._getScrollLeft(),
                scrollTop = this._getScrollTop(),
                horizontalOffset,
                verticalOffset,
                particle,
                fixedRatioOffset,
                background,
                bgLeft,
                bgTop,
                isVisibleVertical = true,
                isVisibleHorizontal = true,
                newPositionLeft,
                newPositionTop,
                newOffsetLeft,
                newOffsetTop,
                i;

            // First check that the scroll position or container size has changed
            if (this.currentScrollLeft === scrollLeft && this.currentScrollTop === scrollTop && this.currentWidth === this.viewportWidth && this.currentHeight === this.viewportHeight) {
                return;
            } else {
                this.currentScrollLeft = scrollLeft;
                this.currentScrollTop = scrollTop;
                this.currentWidth = this.viewportWidth;
                this.currentHeight = this.viewportHeight;
            }

            // Reposition elements
            for (i = this.particles.length - 1; i >= 0; i--) {
                particle = this.particles[i];

                fixedRatioOffset = (particle.isFixed ? 1 : 0);

                // Calculate position, then calculate what the particle's new offset will be (for visibility check)
                if (this.options.horizontalScrolling) {
                    newPositionLeft = (scrollLeft + particle.horizontalOffset + this.viewportOffsetLeft + particle.startingPositionLeft - particle.startingOffsetLeft + particle.parentOffsetLeft) * -(particle.stellarRatio + fixedRatioOffset - 1) + particle.startingPositionLeft;
                    newOffsetLeft = newPositionLeft - particle.startingPositionLeft + particle.startingOffsetLeft;
                } else {
                    newPositionLeft = particle.startingPositionLeft;
                    newOffsetLeft = particle.startingOffsetLeft;
                }

                if (this.options.verticalScrolling) {
                    newPositionTop = (scrollTop + particle.verticalOffset + this.viewportOffsetTop + particle.startingPositionTop - particle.startingOffsetTop + particle.parentOffsetTop) * -(particle.stellarRatio + fixedRatioOffset - 1) + particle.startingPositionTop;
                    newOffsetTop = newPositionTop - particle.startingPositionTop + particle.startingOffsetTop;
                } else {
                    newPositionTop = particle.startingPositionTop;
                    newOffsetTop = particle.startingOffsetTop;
                }

                // Check visibility
                if (this.options.hideDistantElements) {
                    isVisibleHorizontal = !this.options.horizontalScrolling || newOffsetLeft + particle.width > (particle.isFixed ? 0 : scrollLeft) && newOffsetLeft < (particle.isFixed ? 0 : scrollLeft) + this.viewportWidth + this.viewportOffsetLeft;
                    isVisibleVertical = !this.options.verticalScrolling || newOffsetTop + particle.height > (particle.isFixed ? 0 : scrollTop) && newOffsetTop < (particle.isFixed ? 0 : scrollTop) + this.viewportHeight + this.viewportOffsetTop;
                }

                if (isVisibleHorizontal && isVisibleVertical) {
                    if (particle.isHidden) {
                        this.options.showElement(particle.$element);
                        particle.isHidden = false;
                    }

                    this._setPosition(particle.$element, newPositionLeft, particle.startingPositionLeft, newPositionTop, particle.startingPositionTop);
                } else {
                    if (!particle.isHidden) {
                        this.options.hideElement(particle.$element);
                        particle.isHidden = true;
                    }
                }
            }

            // Reposition backgrounds
            for (i = this.backgrounds.length - 1; i >= 0; i--) {
                background = this.backgrounds[i];

                fixedRatioOffset = (background.isFixed ? 0 : 1);
                bgLeft = (this.options.horizontalScrolling ? (scrollLeft + background.horizontalOffset - this.viewportOffsetLeft - background.startingOffsetLeft + background.parentOffsetLeft - background.startingBackgroundPositionLeft) * (fixedRatioOffset - background.stellarRatio) + 'px' : background.startingValueLeft);
                bgTop = (this.options.verticalScrolling ? (scrollTop + background.verticalOffset - this.viewportOffsetTop - background.startingOffsetTop + background.parentOffsetTop - background.startingBackgroundPositionTop) * (fixedRatioOffset - background.stellarRatio) + 'px' : background.startingValueTop);

                setBackgroundPosition(background.$element, bgLeft, bgTop);
            }
        },
        _handleScrollEvent: function() {
            var self = this,
                ticking = false;

            var update = function() {
                self._repositionElements();
                ticking = false;
            };

            var requestTick = function() {
                if (!ticking) {
                    requestAnimFrame(update);
                    ticking = true;
                }
            };

            this.$scrollElement.bind('scroll.' + this.name, requestTick);
            requestTick();
        },
        _startAnimationLoop: function() {
            var self = this;

            this._animationLoop = function() {
                requestAnimFrame(self._animationLoop);
                self._repositionElements();
            };
            this._animationLoop();
        }
    };

    $.fn[pluginName] = function (options) {
        var args = arguments;
        if (options === undefined || typeof options === 'object') {
            return this.each(function () {
                if (!$.data(this, 'plugin_' + pluginName)) {
                    $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
                }
            });
        } else if (typeof options === 'string' && options[0] !== '_' && options !== 'init') {
            return this.each(function () {
                var instance = $.data(this, 'plugin_' + pluginName);
                if (instance instanceof Plugin && typeof instance[options] === 'function') {
                    instance[options].apply(instance, Array.prototype.slice.call(args, 1));
                }
                if (options === 'destroy') {
                    $.data(this, 'plugin_' + pluginName, null);
                }
            });
        }
    };

    $[pluginName] = function(options) {
        var $window = $(window);
        return $window.stellar.apply($window, Array.prototype.slice.call(arguments, 0));
    };

    // Expose the scroll and position property function hashes so they can be extended
    $[pluginName].scrollProperty = scrollProperty;
    $[pluginName].positionProperty = positionProperty;

    // Expose the plugin class so it can be modified
    window.Stellar = Plugin;
}(jQuery, this, document));
;(function(e){e.fn.visible=function(t,n,r){var i=e(this).eq(0),s=i.get(0),o=e(window),u=o.scrollTop(),a=u+o.height(),f=o.scrollLeft(),l=f+o.width(),c=i.offset().top,h=c+i.height(),p=i.offset().left,d=p+i.width(),v=t===true?h:c,m=t===true?c:h,g=t===true?d:p,y=t===true?p:d,b=n===true?s.offsetWidth*s.offsetHeight:true,r=r?r:"both";if(r==="both")return!!b&&m<=a&&v>=u&&y<=l&&g>=f;else if(r==="vertical")return!!b&&m<=a&&v>=u;else if(r==="horizontal")return!!b&&y<=l&&g>=f}})(jQuery);

/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-flexbox-cssclasses-testprop-testallprops-domprefixes
 */
;window.Modernizr=function(a,b,c){function x(a){j.cssText=a}function y(a,b){return x(prefixes.join(a+";")+(b||""))}function z(a,b){return typeof a===b}function A(a,b){return!!~(""+a).indexOf(b)}function B(a,b){for(var d in a){var e=a[d];if(!A(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function C(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:z(f,"function")?f.bind(d||b):f}return!1}function D(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+n.join(d+" ")+d).split(" ");return z(b,"string")||z(b,"undefined")?B(e,b):(e=(a+" "+o.join(d+" ")+d).split(" "),C(e,b,c))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m="Webkit Moz O ms",n=m.split(" "),o=m.toLowerCase().split(" "),p={},q={},r={},s=[],t=s.slice,u,v={}.hasOwnProperty,w;!z(v,"undefined")&&!z(v.call,"undefined")?w=function(a,b){return v.call(a,b)}:w=function(a,b){return b in a&&z(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=t.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(t.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(t.call(arguments)))};return e}),p.flexbox=function(){return D("flexWrap")};for(var E in p)w(p,E)&&(u=E.toLowerCase(),e[u]=p[E](),s.push((e[u]?"":"no-")+u));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)w(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},x(""),i=k=null,e._version=d,e._domPrefixes=o,e._cssomPrefixes=n,e.testProp=function(a){return B([a])},e.testAllProps=D,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+s.join(" "):""),e}(this,this.document);
/* http://prismjs.com/download.html?themes=prism-okaidia&languages=markup+css+css-extras+clike+javascript+php+php-extras+scss+bash+sql+git&plugins=line-numbers */
self="undefined"!=typeof window?window:"undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?self:{};var Prism=function(){var e=/\blang(?:uage)?-(?!\*)(\w+)\b/i,t=self.Prism={util:{encode:function(e){return e instanceof n?new n(e.type,t.util.encode(e.content),e.alias):"Array"===t.util.type(e)?e.map(t.util.encode):e.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/\u00a0/g," ")},type:function(e){return Object.prototype.toString.call(e).match(/\[object (\w+)\]/)[1]},clone:function(e){var n=t.util.type(e);switch(n){case"Object":var a={};for(var r in e)e.hasOwnProperty(r)&&(a[r]=t.util.clone(e[r]));return a;case"Array":return e.map(function(e){return t.util.clone(e)})}return e}},languages:{extend:function(e,n){var a=t.util.clone(t.languages[e]);for(var r in n)a[r]=n[r];return a},insertBefore:function(e,n,a,r){r=r||t.languages;var i=r[e];if(2==arguments.length){a=arguments[1];for(var l in a)a.hasOwnProperty(l)&&(i[l]=a[l]);return i}var s={};for(var o in i)if(i.hasOwnProperty(o)){if(o==n)for(var l in a)a.hasOwnProperty(l)&&(s[l]=a[l]);s[o]=i[o]}return t.languages.DFS(t.languages,function(t,n){n===r[e]&&t!=e&&(this[t]=s)}),r[e]=s},DFS:function(e,n,a){for(var r in e)e.hasOwnProperty(r)&&(n.call(e,r,e[r],a||r),"Object"===t.util.type(e[r])?t.languages.DFS(e[r],n):"Array"===t.util.type(e[r])&&t.languages.DFS(e[r],n,r))}},highlightAll:function(e,n){for(var a,r=document.querySelectorAll('code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'),i=0;a=r[i++];)t.highlightElement(a,e===!0,n)},highlightElement:function(a,r,i){for(var l,s,o=a;o&&!e.test(o.className);)o=o.parentNode;if(o&&(l=(o.className.match(e)||[,""])[1],s=t.languages[l]),s){a.className=a.className.replace(e,"").replace(/\s+/g," ")+" language-"+l,o=a.parentNode,/pre/i.test(o.nodeName)&&(o.className=o.className.replace(e,"").replace(/\s+/g," ")+" language-"+l);var u=a.textContent;if(u){u=u.replace(/^(?:\r?\n|\r)/,"");var g={element:a,language:l,grammar:s,code:u};if(t.hooks.run("before-highlight",g),r&&self.Worker){var c=new Worker(t.filename);c.onmessage=function(e){g.highlightedCode=n.stringify(JSON.parse(e.data),l),t.hooks.run("before-insert",g),g.element.innerHTML=g.highlightedCode,i&&i.call(g.element),t.hooks.run("after-highlight",g)},c.postMessage(JSON.stringify({language:g.language,code:g.code}))}else g.highlightedCode=t.highlight(g.code,g.grammar,g.language),t.hooks.run("before-insert",g),g.element.innerHTML=g.highlightedCode,i&&i.call(a),t.hooks.run("after-highlight",g)}}},highlight:function(e,a,r){var i=t.tokenize(e,a);return n.stringify(t.util.encode(i),r)},tokenize:function(e,n){var a=t.Token,r=[e],i=n.rest;if(i){for(var l in i)n[l]=i[l];delete n.rest}e:for(var l in n)if(n.hasOwnProperty(l)&&n[l]){var s=n[l];s="Array"===t.util.type(s)?s:[s];for(var o=0;o<s.length;++o){var u=s[o],g=u.inside,c=!!u.lookbehind,f=0,h=u.alias;u=u.pattern||u;for(var p=0;p<r.length;p++){var d=r[p];if(r.length>e.length)break e;if(!(d instanceof a)){u.lastIndex=0;var m=u.exec(d);if(m){c&&(f=m[1].length);var y=m.index-1+f,m=m[0].slice(f),v=m.length,k=y+v,b=d.slice(0,y+1),w=d.slice(k+1),N=[p,1];b&&N.push(b);var O=new a(l,g?t.tokenize(m,g):m,h);N.push(O),w&&N.push(w),Array.prototype.splice.apply(r,N)}}}}}return r},hooks:{all:{},add:function(e,n){var a=t.hooks.all;a[e]=a[e]||[],a[e].push(n)},run:function(e,n){var a=t.hooks.all[e];if(a&&a.length)for(var r,i=0;r=a[i++];)r(n)}}},n=t.Token=function(e,t,n){this.type=e,this.content=t,this.alias=n};if(n.stringify=function(e,a,r){if("string"==typeof e)return e;if("Array"===t.util.type(e))return e.map(function(t){return n.stringify(t,a,e)}).join("");var i={type:e.type,content:n.stringify(e.content,a,r),tag:"span",classes:["token",e.type],attributes:{},language:a,parent:r};if("comment"==i.type&&(i.attributes.spellcheck="true"),e.alias){var l="Array"===t.util.type(e.alias)?e.alias:[e.alias];Array.prototype.push.apply(i.classes,l)}t.hooks.run("wrap",i);var s="";for(var o in i.attributes)s+=o+'="'+(i.attributes[o]||"")+'"';return"<"+i.tag+' class="'+i.classes.join(" ")+'" '+s+">"+i.content+"</"+i.tag+">"},!self.document)return self.addEventListener?(self.addEventListener("message",function(e){var n=JSON.parse(e.data),a=n.language,r=n.code;self.postMessage(JSON.stringify(t.util.encode(t.tokenize(r,t.languages[a])))),self.close()},!1),self.Prism):self.Prism;var a=document.getElementsByTagName("script");return a=a[a.length-1],a&&(t.filename=a.src,document.addEventListener&&!a.hasAttribute("data-manual")&&document.addEventListener("DOMContentLoaded",t.highlightAll)),self.Prism}();"undefined"!=typeof module&&module.exports&&(module.exports=Prism);;
Prism.languages.markup={comment:/<!--[\w\W]*?-->/g,prolog:/<\?.+?\?>/,doctype:/<!DOCTYPE.+?>/,cdata:/<!\[CDATA\[[\w\W]*?]]>/i,tag:{pattern:/<\/?[\w:-]+\s*(?:\s+[\w:-]+(?:=(?:("|')(\\?[\w\W])*?\1|[^\s'">=]+))?\s*)*\/?>/gi,inside:{tag:{pattern:/^<\/?[\w:-]+/i,inside:{punctuation:/^<\/?/,namespace:/^[\w-]+?:/}},"attr-value":{pattern:/=(?:('|")[\w\W]*?(\1)|[^\s>]+)/gi,inside:{punctuation:/=|>|"/g}},punctuation:/\/?>/g,"attr-name":{pattern:/[\w:-]+/g,inside:{namespace:/^[\w-]+?:/}}}},entity:/&#?[\da-z]{1,8};/gi},Prism.hooks.add("wrap",function(t){"entity"===t.type&&(t.attributes.title=t.content.replace(/&amp;/,"&"))});;
Prism.languages.css={comment:/\/\*[\w\W]*?\*\//g,atrule:{pattern:/@[\w-]+?.*?(;|(?=\s*\{))/gi,inside:{punctuation:/[;:]/g}},url:/url\((?:(["'])(\\\n|\\?.)*?\1|.*?)\)/gi,selector:/[^\{\}\s][^\{\};]*(?=\s*\{)/g,string:/("|')(\\\n|\\?.)*?\1/g,property:/(\b|\B)[\w-]+(?=\s*:)/gi,important:/\B!important\b/gi,punctuation:/[\{\};:]/g,"function":/[-a-z0-9]+(?=\()/gi},Prism.languages.markup&&(Prism.languages.insertBefore("markup","tag",{style:{pattern:/<style[\w\W]*?>[\w\W]*?<\/style>/gi,inside:{tag:{pattern:/<style[\w\W]*?>|<\/style>/gi,inside:Prism.languages.markup.tag.inside},rest:Prism.languages.css},alias:"language-css"}}),Prism.languages.insertBefore("inside","attr-value",{"style-attr":{pattern:/\s*style=("|').+?\1/gi,inside:{"attr-name":{pattern:/^\s*style/gi,inside:Prism.languages.markup.tag.inside},punctuation:/^\s*=\s*['"]|['"]\s*$/,"attr-value":{pattern:/.+/gi,inside:Prism.languages.css}},alias:"language-css"}},Prism.languages.markup.tag));;
Prism.languages.css.selector={pattern:/[^\{\}\s][^\{\}]*(?=\s*\{)/g,inside:{"pseudo-element":/:(?:after|before|first-letter|first-line|selection)|::[-\w]+/g,"pseudo-class":/:[-\w]+(?:\(.*\))?/g,"class":/\.[-:\.\w]+/g,id:/#[-:\.\w]+/g}},Prism.languages.insertBefore("css","function",{hexcode:/#[\da-f]{3,6}/gi,entity:/\\[\da-f]{1,8}/gi,number:/[\d%\.]+/g});;
Prism.languages.clike={comment:[{pattern:/(^|[^\\])\/\*[\w\W]*?\*\//g,lookbehind:!0},{pattern:/(^|[^\\:])\/\/.*?(\r?\n|$)/g,lookbehind:!0}],string:/("|')(\\\n|\\?.)*?\1/g,"class-name":{pattern:/((?:(?:class|interface|extends|implements|trait|instanceof|new)\s+)|(?:catch\s+\())[a-z0-9_\.\\]+/gi,lookbehind:!0,inside:{punctuation:/(\.|\\)/}},keyword:/\b(if|else|while|do|for|return|in|instanceof|function|new|try|throw|catch|finally|null|break|continue)\b/g,"boolean":/\b(true|false)\b/g,"function":{pattern:/[a-z0-9_]+\(/gi,inside:{punctuation:/\(/}},number:/\b-?(0x[\dA-Fa-f]+|\d*\.?\d+([Ee]-?\d+)?)\b/g,operator:/[-+]{1,2}|!|<=?|>=?|={1,3}|&{1,2}|\|?\||\?|\*|\/|~|\^|%/g,ignore:/&(lt|gt|amp);/gi,punctuation:/[{}[\];(),.:]/g};;
Prism.languages.javascript=Prism.languages.extend("clike",{keyword:/\b(break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|false|finally|for|function|get|if|implements|import|in|instanceof|interface|let|new|null|package|private|protected|public|return|set|static|super|switch|this|throw|true|try|typeof|var|void|while|with|yield)\b/g,number:/\b-?(0x[\dA-Fa-f]+|\d*\.?\d+([Ee][+-]?\d+)?|NaN|-?Infinity)\b/g,"function":/(?!\d)[a-z0-9_$]+(?=\()/gi}),Prism.languages.insertBefore("javascript","keyword",{regex:{pattern:/(^|[^/])\/(?!\/)(\[.+?]|\\.|[^/\r\n])+\/[gim]{0,3}(?=\s*($|[\r\n,.;})]))/g,lookbehind:!0}}),Prism.languages.markup&&Prism.languages.insertBefore("markup","tag",{script:{pattern:/<script[\w\W]*?>[\w\W]*?<\/script>/gi,inside:{tag:{pattern:/<script[\w\W]*?>|<\/script>/gi,inside:Prism.languages.markup.tag.inside},rest:Prism.languages.javascript},alias:"language-javascript"}});;
Prism.languages.php=Prism.languages.extend("clike",{keyword:/\b(and|or|xor|array|as|break|case|cfunction|class|const|continue|declare|default|die|do|else|elseif|enddeclare|endfor|endforeach|endif|endswitch|endwhile|extends|for|foreach|function|include|include_once|global|if|new|return|static|switch|use|require|require_once|var|while|abstract|interface|public|implements|private|protected|parent|throw|null|echo|print|trait|namespace|final|yield|goto|instanceof|finally|try|catch)\b/gi,constant:/\b[A-Z0-9_]{2,}\b/g,comment:{pattern:/(^|[^\\])(\/\*[\w\W]*?\*\/|(^|[^:])(\/\/).*?(\r?\n|$))/g,lookbehind:!0}}),Prism.languages.insertBefore("php","class-name",{"shell-comment":{pattern:/(^|[^\\])#.*?(\r?\n|$)/g,lookbehind:!0,alias:"comment"}}),Prism.languages.insertBefore("php","keyword",{delimiter:/(\?>|<\?php|<\?)/gi,variable:/(\$\w+)\b/gi,"package":{pattern:/(\\|namespace\s+|use\s+)[\w\\]+/g,lookbehind:!0,inside:{punctuation:/\\/}}}),Prism.languages.insertBefore("php","operator",{property:{pattern:/(->)[\w]+/g,lookbehind:!0}}),Prism.languages.markup&&(Prism.hooks.add("before-highlight",function(e){"php"===e.language&&(e.tokenStack=[],e.backupCode=e.code,e.code=e.code.replace(/(?:<\?php|<\?)[\w\W]*?(?:\?>)/gi,function(n){return e.tokenStack.push(n),"{{{PHP"+e.tokenStack.length+"}}}"}))}),Prism.hooks.add("before-insert",function(e){"php"===e.language&&(e.code=e.backupCode,delete e.backupCode)}),Prism.hooks.add("after-highlight",function(e){if("php"===e.language){for(var n,a=0;n=e.tokenStack[a];a++)e.highlightedCode=e.highlightedCode.replace("{{{PHP"+(a+1)+"}}}",Prism.highlight(n,e.grammar,"php"));e.element.innerHTML=e.highlightedCode}}),Prism.hooks.add("wrap",function(e){"php"===e.language&&"markup"===e.type&&(e.content=e.content.replace(/(\{\{\{PHP[0-9]+\}\}\})/g,'<span class="token php">$1</span>'))}),Prism.languages.insertBefore("php","comment",{markup:{pattern:/<[^?]\/?(.*?)>/g,inside:Prism.languages.markup},php:/\{\{\{PHP[0-9]+\}\}\}/g}));;
Prism.languages.insertBefore("php","variable",{"this":/\$this/g,global:/\$_?(GLOBALS|SERVER|GET|POST|FILES|REQUEST|SESSION|ENV|COOKIE|HTTP_RAW_POST_DATA|argc|argv|php_errormsg|http_response_header)/g,scope:{pattern:/\b[\w\\]+::/g,inside:{keyword:/(static|self|parent)/,punctuation:/(::|\\)/}}});;
Prism.languages.scss=Prism.languages.extend("css",{comment:{pattern:/(^|[^\\])(\/\*[\w\W]*?\*\/|\/\/.*?(\r?\n|$))/g,lookbehind:!0},atrule:/@[\w-]+(?=\s+(\(|\{|;))/gi,url:/([-a-z]+-)*url(?=\()/gi,selector:/([^@;\{\}\(\)]?([^@;\{\}\(\)]|&|#\{\$[-_\w]+\})+)(?=\s*\{(\}|\s|[^\}]+(:|\{)[^\}]+))/gm}),Prism.languages.insertBefore("scss","atrule",{keyword:/@(if|else if|else|for|each|while|import|extend|debug|warn|mixin|include|function|return|content)|(?=@for\s+\$[-_\w]+\s)+from/i}),Prism.languages.insertBefore("scss","property",{variable:/((\$[-_\w]+)|(#\{\$[-_\w]+\}))/i}),Prism.languages.insertBefore("scss","function",{placeholder:/%[-_\w]+/i,statement:/\B!(default|optional)\b/gi,"boolean":/\b(true|false)\b/g,"null":/\b(null)\b/g,operator:/\s+([-+]{1,2}|={1,2}|!=|\|?\||\?|\*|\/|%)\s+/g});;
Prism.languages.bash=Prism.languages.extend("clike",{comment:{pattern:/(^|[^"{\\])(#.*?(\r?\n|$))/g,lookbehind:!0},string:{pattern:/("|')(\\?[\s\S])*?\1/g,inside:{property:/\$([a-zA-Z0-9_#\?\-\*!@]+|\{[^\}]+\})/g}},keyword:/\b(if|then|else|elif|fi|for|break|continue|while|in|case|function|select|do|done|until|echo|exit|return|set|declare)\b/g}),Prism.languages.insertBefore("bash","keyword",{property:/\$([a-zA-Z0-9_#\?\-\*!@]+|\{[^}]+\})/g}),Prism.languages.insertBefore("bash","comment",{important:/(^#!\s*\/bin\/bash)|(^#!\s*\/bin\/sh)/g});;
Prism.languages.sql={comment:{pattern:/(^|[^\\])(\/\*[\w\W]*?\*\/|((--)|(\/\/)|#).*?(\r?\n|$))/g,lookbehind:!0},string:{pattern:/(^|[^@])("|')(\\?[\s\S])*?\2/g,lookbehind:!0},variable:/@[\w.$]+|@("|'|`)(\\?[\s\S])+?\1/g,"function":/\b(?:COUNT|SUM|AVG|MIN|MAX|FIRST|LAST|UCASE|LCASE|MID|LEN|ROUND|NOW|FORMAT)(?=\s*\()/gi,keyword:/\b(?:ACTION|ADD|AFTER|ALGORITHM|ALTER|ANALYZE|APPLY|AS|ASC|AUTHORIZATION|BACKUP|BDB|BEGIN|BERKELEYDB|BIGINT|BINARY|BIT|BLOB|BOOL|BOOLEAN|BREAK|BROWSE|BTREE|BULK|BY|CALL|CASCADE|CASCADED|CASE|CHAIN|CHAR VARYING|CHARACTER VARYING|CHECK|CHECKPOINT|CLOSE|CLUSTERED|COALESCE|COLUMN|COLUMNS|COMMENT|COMMIT|COMMITTED|COMPUTE|CONNECT|CONSISTENT|CONSTRAINT|CONTAINS|CONTAINSTABLE|CONTINUE|CONVERT|CREATE|CROSS|CURRENT|CURRENT_DATE|CURRENT_TIME|CURRENT_TIMESTAMP|CURRENT_USER|CURSOR|DATA|DATABASE|DATABASES|DATETIME|DBCC|DEALLOCATE|DEC|DECIMAL|DECLARE|DEFAULT|DEFINER|DELAYED|DELETE|DENY|DESC|DESCRIBE|DETERMINISTIC|DISABLE|DISCARD|DISK|DISTINCT|DISTINCTROW|DISTRIBUTED|DO|DOUBLE|DOUBLE PRECISION|DROP|DUMMY|DUMP|DUMPFILE|DUPLICATE KEY|ELSE|ENABLE|ENCLOSED BY|END|ENGINE|ENUM|ERRLVL|ERRORS|ESCAPE|ESCAPED BY|EXCEPT|EXEC|EXECUTE|EXIT|EXPLAIN|EXTENDED|FETCH|FIELDS|FILE|FILLFACTOR|FIRST|FIXED|FLOAT|FOLLOWING|FOR|FOR EACH ROW|FORCE|FOREIGN|FREETEXT|FREETEXTTABLE|FROM|FULL|FUNCTION|GEOMETRY|GEOMETRYCOLLECTION|GLOBAL|GOTO|GRANT|GROUP|HANDLER|HASH|HAVING|HOLDLOCK|IDENTITY|IDENTITY_INSERT|IDENTITYCOL|IF|IGNORE|IMPORT|INDEX|INFILE|INNER|INNODB|INOUT|INSERT|INT|INTEGER|INTERSECT|INTO|INVOKER|ISOLATION LEVEL|JOIN|KEY|KEYS|KILL|LANGUAGE SQL|LAST|LEFT|LIMIT|LINENO|LINES|LINESTRING|LOAD|LOCAL|LOCK|LONGBLOB|LONGTEXT|MATCH|MATCHED|MEDIUMBLOB|MEDIUMINT|MEDIUMTEXT|MERGE|MIDDLEINT|MODIFIES SQL DATA|MODIFY|MULTILINESTRING|MULTIPOINT|MULTIPOLYGON|NATIONAL|NATIONAL CHAR VARYING|NATIONAL CHARACTER|NATIONAL CHARACTER VARYING|NATIONAL VARCHAR|NATURAL|NCHAR|NCHAR VARCHAR|NEXT|NO|NO SQL|NOCHECK|NOCYCLE|NONCLUSTERED|NULLIF|NUMERIC|OF|OFF|OFFSETS|ON|OPEN|OPENDATASOURCE|OPENQUERY|OPENROWSET|OPTIMIZE|OPTION|OPTIONALLY|ORDER|OUT|OUTER|OUTFILE|OVER|PARTIAL|PARTITION|PERCENT|PIVOT|PLAN|POINT|POLYGON|PRECEDING|PRECISION|PREV|PRIMARY|PRINT|PRIVILEGES|PROC|PROCEDURE|PUBLIC|PURGE|QUICK|RAISERROR|READ|READS SQL DATA|READTEXT|REAL|RECONFIGURE|REFERENCES|RELEASE|RENAME|REPEATABLE|REPLICATION|REQUIRE|RESTORE|RESTRICT|RETURN|RETURNS|REVOKE|RIGHT|ROLLBACK|ROUTINE|ROWCOUNT|ROWGUIDCOL|ROWS?|RTREE|RULE|SAVE|SAVEPOINT|SCHEMA|SELECT|SERIAL|SERIALIZABLE|SESSION|SESSION_USER|SET|SETUSER|SHARE MODE|SHOW|SHUTDOWN|SIMPLE|SMALLINT|SNAPSHOT|SOME|SONAME|START|STARTING BY|STATISTICS|STATUS|STRIPED|SYSTEM_USER|TABLE|TABLES|TABLESPACE|TEMP(?:ORARY)?|TEMPTABLE|TERMINATED BY|TEXT|TEXTSIZE|THEN|TIMESTAMP|TINYBLOB|TINYINT|TINYTEXT|TO|TOP|TRAN|TRANSACTION|TRANSACTIONS|TRIGGER|TRUNCATE|TSEQUAL|TYPE|TYPES|UNBOUNDED|UNCOMMITTED|UNDEFINED|UNION|UNPIVOT|UPDATE|UPDATETEXT|USAGE|USE|USER|USING|VALUE|VALUES|VARBINARY|VARCHAR|VARCHARACTER|VARYING|VIEW|WAITFOR|WARNINGS|WHEN|WHERE|WHILE|WITH|WITH ROLLUP|WITHIN|WORK|WRITE|WRITETEXT)\b/gi,"boolean":/\b(?:TRUE|FALSE|NULL)\b/gi,number:/\b-?(0x)?\d*\.?[\da-f]+\b/g,operator:/\b(?:ALL|AND|ANY|BETWEEN|EXISTS|IN|LIKE|NOT|OR|IS|UNIQUE|CHARACTER SET|COLLATE|DIV|OFFSET|REGEXP|RLIKE|SOUNDS LIKE|XOR)\b|[-+]{1}|!|[=<>]{1,2}|(&){1,2}|\|?\||\?|\*|\//gi,punctuation:/[;[\]()`,.]/g};;
Prism.languages.git={comment:/^#.*$/m,string:/("|')(\\?.)*?\1/gm,command:{pattern:/^.*\$ git .*$/m,inside:{parameter:/\s(--|-)\w+/m}},coord:/^@@.*@@$/m,deleted:/^-(?!-).+$/m,inserted:/^\+(?!\+).+$/m,commit_sha1:/^commit \w{40}$/m};;
Prism.hooks.add("after-highlight",function(e){var n=e.element.parentNode;if(n&&/pre/i.test(n.nodeName)&&-1!==n.className.indexOf("line-numbers")){var t,a=1+e.code.split("\n").length;lines=new Array(a),lines=lines.join("<span></span>"),t=document.createElement("span"),t.className="line-numbers-rows",t.innerHTML=lines,n.hasAttribute("data-start")&&(n.style.counterReset="linenumber "+(parseInt(n.getAttribute("data-start"),10)-1)),e.element.appendChild(t)}});;

(function (root, factory) {
    if ( typeof define === 'function' && define.amd ) {
        define('smoothScroll', factory(root));
    } else if ( typeof exports === 'object' ) {
        module.exports = factory(root);
    } else {
        root.smoothScroll = factory(root);
    }
})(window || this, function (root) {

    'use strict';

    //
    // Variables
    //

    var smoothScroll = {}; // Object for public APIs
    var supports = !!document.querySelector && !!root.addEventListener; // Feature test
    var settings, eventTimeout, fixedHeader;

    // Default settings
    var defaults = {
        speed: 500,
        easing: 'easeInOutCubic',
        offset: 0,
        updateURL: true,
        callbackBefore: function () {},
        callbackAfter: function () {}
    };


    //
    // Methods
    //

    /**
     * A simple forEach() implementation for Arrays, Objects and NodeLists
     * @private
     * @param {Array|Object|NodeList} collection Collection of items to iterate
     * @param {Function} callback Callback function for each iteration
     * @param {Array|Object|NodeList} scope Object/NodeList/Array that forEach is iterating over (aka `this`)
     */
    var forEach = function (collection, callback, scope) {
        if (Object.prototype.toString.call(collection) === '[object Object]') {
            for (var prop in collection) {
                if (Object.prototype.hasOwnProperty.call(collection, prop)) {
                    callback.call(scope, collection[prop], prop, collection);
                }
            }
        } else {
            for (var i = 0, len = collection.length; i < len; i++) {
                callback.call(scope, collection[i], i, collection);
            }
        }
    };

    /**
     * Merge defaults with user options
     * @private
     * @param {Object} defaults Default settings
     * @param {Object} options User options
     * @returns {Object} Merged values of defaults and options
     */
    var extend = function ( defaults, options ) {
        var extended = {};
        forEach(defaults, function (value, prop) {
            extended[prop] = defaults[prop];
        });
        forEach(options, function (value, prop) {
            extended[prop] = options[prop];
        });
        return extended;
    };

    /**
     * Get the closest matching element up the DOM tree
     * @param {Element} elem Starting element
     * @param {String} selector Selector to match against (class, ID, or data attribute)
     * @return {Boolean|Element} Returns false if not match found
     */
    var getClosest = function (elem, selector) {
        var firstChar = selector.charAt(0);
        for ( ; elem && elem !== document; elem = elem.parentNode ) {
            if ( firstChar === '.' ) {
                if ( elem.classList.contains( selector.substr(1) ) ) {
                    return elem;
                }
            } else if ( firstChar === '#' ) {
                if ( elem.id === selector.substr(1) ) {
                    return elem;
                }
            } else if ( firstChar === '[' ) {
                if ( elem.hasAttribute( selector.substr(1, selector.length - 2) ) ) {
                    return elem;
                }
            }
        }
        return false;
    };

    /**
     * Get the height of an element
     * @private
     * @param  {Node]} elem The element
     * @return {Number}     The element's height
     */
    var getHeight = function (elem) {
        return Math.max( elem.scrollHeight, elem.offsetHeight, elem.clientHeight );
    };

    /**
     * Escape special characters for use with querySelector
     * @private
     * @param {String} id The anchor ID to escape
     * @author Mathias Bynens
     * @link https://github.com/mathiasbynens/CSS.escape
     */
    var escapeCharacters = function ( id ) {
        var string = String(id);
        var length = string.length;
        var index = -1;
        var codeUnit;
        var result = '';
        var firstCodeUnit = string.charCodeAt(0);
        while (++index < length) {
            codeUnit = string.charCodeAt(index);
            // Note: there’s no need to special-case astral symbols, surrogate
            // pairs, or lone surrogates.

            // If the character is NULL (U+0000), then throw an
            // `InvalidCharacterError` exception and terminate these steps.
            if (codeUnit === 0x0000) {
                throw new InvalidCharacterError(
                    'Invalid character: the input contains U+0000.'
                );
            }

            if (
                // If the character is in the range [\1-\1F] (U+0001 to U+001F) or is
            // U+007F, […]
            (codeUnit >= 0x0001 && codeUnit <= 0x001F) || codeUnit == 0x007F ||
                // If the character is the first character and is in the range [0-9]
                // (U+0030 to U+0039), […]
            (index === 0 && codeUnit >= 0x0030 && codeUnit <= 0x0039) ||
                // If the character is the second character and is in the range [0-9]
                // (U+0030 to U+0039) and the first character is a `-` (U+002D), […]
            (
            index === 1 &&
            codeUnit >= 0x0030 && codeUnit <= 0x0039 &&
            firstCodeUnit === 0x002D
            )
            ) {
                // http://dev.w3.org/csswg/cssom/#escape-a-character-as-code-point
                result += '\\' + codeUnit.toString(16) + ' ';
                continue;
            }

            // If the character is not handled by one of the above rules and is
            // greater than or equal to U+0080, is `-` (U+002D) or `_` (U+005F), or
            // is in one of the ranges [0-9] (U+0030 to U+0039), [A-Z] (U+0041 to
            // U+005A), or [a-z] (U+0061 to U+007A), […]
            if (
                codeUnit >= 0x0080 ||
                codeUnit === 0x002D ||
                codeUnit === 0x005F ||
                codeUnit >= 0x0030 && codeUnit <= 0x0039 ||
                codeUnit >= 0x0041 && codeUnit <= 0x005A ||
                codeUnit >= 0x0061 && codeUnit <= 0x007A
            ) {
                // the character itself
                result += string.charAt(index);
                continue;
            }

            // Otherwise, the escaped character.
            // http://dev.w3.org/csswg/cssom/#escape-a-character
            result += '\\' + string.charAt(index);

        }
        return result;
    };

    /**
     * Calculate the easing pattern
     * @private
     * @link https://gist.github.com/gre/1650294
     * @param {String} type Easing pattern
     * @param {Number} time Time animation should take to complete
     * @returns {Number}
     */
    var easingPattern = function ( type, time ) {
        var pattern;
        if ( type === 'easeInQuad' ) pattern = time * time; // accelerating from zero velocity
        if ( type === 'easeOutQuad' ) pattern = time * (2 - time); // decelerating to zero velocity
        if ( type === 'easeInOutQuad' ) pattern = time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time; // acceleration until halfway, then deceleration
        if ( type === 'easeInCubic' ) pattern = time * time * time; // accelerating from zero velocity
        if ( type === 'easeOutCubic' ) pattern = (--time) * time * time + 1; // decelerating to zero velocity
        if ( type === 'easeInOutCubic' ) pattern = time < 0.5 ? 4 * time * time * time : (time - 1) * (2 * time - 2) * (2 * time - 2) + 1; // acceleration until halfway, then deceleration
        if ( type === 'easeInQuart' ) pattern = time * time * time * time; // accelerating from zero velocity
        if ( type === 'easeOutQuart' ) pattern = 1 - (--time) * time * time * time; // decelerating to zero velocity
        if ( type === 'easeInOutQuart' ) pattern = time < 0.5 ? 8 * time * time * time * time : 1 - 8 * (--time) * time * time * time; // acceleration until halfway, then deceleration
        if ( type === 'easeInQuint' ) pattern = time * time * time * time * time; // accelerating from zero velocity
        if ( type === 'easeOutQuint' ) pattern = 1 + (--time) * time * time * time * time; // decelerating to zero velocity
        if ( type === 'easeInOutQuint' ) pattern = time < 0.5 ? 16 * time * time * time * time * time : 1 + 16 * (--time) * time * time * time * time; // acceleration until halfway, then deceleration
        return pattern || time; // no easing, no acceleration
    };

    /**
     * Calculate how far to scroll
     * @private
     * @param {Element} anchor The anchor element to scroll to
     * @param {Number} headerHeight Height of a fixed header, if any
     * @param {Number} offset Number of pixels by which to offset scroll
     * @returns {Number}
     */
    var getEndLocation = function ( anchor, headerHeight, offset ) {
        var location = 0;
        if (anchor.offsetParent) {
            do {
                location += anchor.offsetTop;
                anchor = anchor.offsetParent;
            } while (anchor);
        }
        location = location - headerHeight - offset;
        return location >= 0 ? location : 0;
    };

    /**
     * Determine the document's height
     * @private
     * @returns {Number}
     */
    var getDocumentHeight = function () {
        return Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
        );
    };

    /**
     * Convert data-options attribute into an object of key/value pairs
     * @private
     * @param {String} options Link-specific options as a data attribute string
     * @returns {Object}
     */
    var getDataOptions = function ( options ) {
        return !options || !(typeof JSON === 'object' && typeof JSON.parse === 'function') ? {} : JSON.parse( options );
    };

    /**
     * Update the URL
     * @private
     * @param {Element} anchor The element to scroll to
     * @param {Boolean} url Whether or not to update the URL history
     */
    var updateUrl = function ( anchor, url ) {
        if ( history.pushState && (url || url === 'true') ) {
            history.pushState( null, null, [root.location.protocol, '//', root.location.host, root.location.pathname, root.location.search, anchor].join('') );
        }
    };

    /**
     * Start/stop the scrolling animation
     * @public
     * @param {Element} toggle The element that toggled the scroll event
     * @param {Element} anchor The element to scroll to
     * @param {Object} options
     */
    smoothScroll.animateScroll = function ( toggle, anchor, options ) {

        // Options and overrides
        var settings = extend( settings || defaults, options || {} );  // Merge user options with defaults
        var overrides = getDataOptions( toggle ? toggle.getAttribute('data-options') : null );
        settings = extend( settings, overrides );
        anchor = '#' + escapeCharacters(anchor.substr(1)); // Escape special characters and leading numbers

        // Selectors and variables
        var anchorElem = anchor === '#' ? document.documentElement : document.querySelector(anchor);
        var startLocation = root.pageYOffset; // Current location on the page
        if ( !fixedHeader ) { fixedHeader = document.querySelector('[data-scroll-header]'); }  // Get the fixed header if not already set
        var headerHeight = fixedHeader === null ? 0 : ( getHeight( fixedHeader ) + fixedHeader.offsetTop ); // Get the height of a fixed header if one exists
        var endLocation = getEndLocation( anchorElem, headerHeight, parseInt(settings.offset, 10) ); // Scroll to location
        var animationInterval; // interval timer
        var distance = endLocation - startLocation; // distance to travel
        var documentHeight = getDocumentHeight();
        var timeLapsed = 0;
        var percentage, position;

        // Update URL
        updateUrl(anchor, settings.updateURL);

        /**
         * Stop the scroll animation when it reaches its target (or the bottom/top of page)
         * @private
         * @param {Number} position Current position on the page
         * @param {Number} endLocation Scroll to location
         * @param {Number} animationInterval How much to scroll on this loop
         */
        var stopAnimateScroll = function (position, endLocation, animationInterval) {
            var currentLocation = root.pageYOffset;
            if ( position == endLocation || currentLocation == endLocation || ( (root.innerHeight + currentLocation) >= documentHeight ) ) {
                clearInterval(animationInterval);
                anchorElem.focus();
                settings.callbackAfter( toggle, anchor ); // Run callbacks after animation complete
            }
        };

        /**
         * Loop scrolling animation
         * @private
         */
        var loopAnimateScroll = function () {
            timeLapsed += 16;
            percentage = ( timeLapsed / parseInt(settings.speed, 10) );
            percentage = ( percentage > 1 ) ? 1 : percentage;
            position = startLocation + ( distance * easingPattern(settings.easing, percentage) );
            root.scrollTo( 0, Math.floor(position) );
            stopAnimateScroll(position, endLocation, animationInterval);
        };

        /**
         * Set interval timer
         * @private
         */
        var startAnimateScroll = function () {
            settings.callbackBefore( toggle, anchor ); // Run callbacks before animating scroll
            animationInterval = setInterval(loopAnimateScroll, 16);
        };

        /**
         * Reset position to fix weird iOS bug
         * @link https://github.com/cferdinandi/smooth-scroll/issues/45
         */
        if ( root.pageYOffset === 0 ) {
            root.scrollTo( 0, 0 );
        }

        // Start scrolling animation
        startAnimateScroll();

    };

    /**
     * If smooth scroll element clicked, animate scroll
     * @private
     */
    var eventHandler = function (event) {
        var toggle = getClosest(event.target, '[data-scroll]');
        if ( toggle && toggle.tagName.toLowerCase() === 'a' ) {
            event.preventDefault(); // Prevent default click event
            smoothScroll.animateScroll( toggle, toggle.hash, settings); // Animate scroll
        }
    };

    /**
     * On window scroll and resize, only run events at a rate of 15fps for better performance
     * @private
     * @param  {Function} eventTimeout Timeout function
     * @param  {Object} settings
     */
    var eventThrottler = function (event) {
        if ( !eventTimeout ) {
            eventTimeout = setTimeout(function() {
                eventTimeout = null; // Reset timeout
                var headerHeight;
                headerHeight = fixedHeader === null ? 0 : ( getHeight( fixedHeader ) + fixedHeader.offsetTop ); // Get the height of a fixed header if one exists
            }, 66);
        }
    };

    /**
     * Destroy the current initialization.
     * @public
     */
    smoothScroll.destroy = function () {

        // If plugin isn't already initialized, stop
        if ( !settings ) return;

        // Remove event listeners
        document.removeEventListener( 'click', eventHandler, false );
        root.removeEventListener( 'resize', eventThrottler, false );

        // Reset varaibles
        settings = null;
        eventTimeout = null;
        fixedHeader = null;
    };

    /**
     * Initialize Smooth Scroll
     * @public
     * @param {Object} options User settings
     */
    smoothScroll.init = function ( options ) {

        // feature test
        if ( !supports ) return;

        // Destroy any existing initializations
        smoothScroll.destroy();

        // Selectors and variables
        settings = extend( defaults, options || {} ); // Merge user options with defaults
        fixedHeader = document.querySelector('[data-scroll-header]'); // Get the fixed header

        // When a toggle is clicked, run the click handler
        document.addEventListener('click', eventHandler, false );
        if ( fixedHeader ) { root.addEventListener( 'resize', eventThrottler, false ); }

    };


    //
    // Public APIs
    //

    return smoothScroll;

});
/**
 * Created by ThomasJensen on 14/12/14.
 */
    // create social networking pop-ups
(function() {
    // link selector and pop-up window size
    var Config = {
        Link: "a.share",
        Width: 500,
        Height: 500
    };

    // add handler links
    var slink = document.querySelectorAll(Config.Link);
    for (var a = 0; a < slink.length; a++) {
        slink[a].onclick = PopupHandler;
    }

    // create popup
    function PopupHandler(e) {

        e = (e ? e : window.event);
        var t = (e.target ? e.target : e.srcElement);

        // popup position
        var
            px = Math.floor(((screen.availWidth || 1024) - Config.Width) / 2),
            py = Math.floor(((screen.availHeight || 700) - Config.Height) / 2);

        // open popup
        var popup = window.open(t.href, "social",
            "width="+Config.Width+",height="+Config.Height+
            ",left="+px+",top="+py+
            ",location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1");
        if (popup) {
            popup.focus();
            if (e.preventDefault) e.preventDefault();
            e.returnValue = false;
        }

        return !!popup;
    }

}());

(function(){function r(t){t=t?t:window.event;var n=t.target?t.target:t.srcElement;var r=Math.floor(((screen.availWidth||1024)-e.Width)/2),i=Math.floor(((screen.availHeight||700)-e.Height)/2);var s=window.open(n.href,"social","width="+e.Width+",height="+e.Height+",left="+r+",top="+i+",location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1");if(s){s.focus();if(t.preventDefault)t.preventDefault();t.returnValue=false}return!!s}var e={Link:"a.share",Width:500,Height:500};var t=document.querySelectorAll(e.Link);for(var n=0;n<t.length;n++){t[n].onclick=r}})()
// The MIT License (MIT)

// Typed.js | Copyright (c) 2014 Matt Boldt | www.mattboldt.com

// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:

// The above copyright notice and this permission notice shall be included in
// all copies or substantial portions of the Software.

// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.




! function($) {

    "use strict";

    var Typed = function(el, options) {

        // chosen element to manipulate text
        this.el = $(el);

        // options
        this.options = $.extend({}, $.fn.typed.defaults, options);

        // attribute to type into
        this.isInput = this.el.is('input');
        this.attr = this.options.attr;

        // show cursor
        this.showCursor = this.isInput ? false : this.options.showCursor;

        // text content of element
        this.elContent = this.attr ? this.el.attr(this.attr) : this.el.text()

        // html or plain text
        this.contentType = this.options.contentType;

        // typing speed
        this.typeSpeed = this.options.typeSpeed;

        // add a delay before typing starts
        this.startDelay = this.options.startDelay;

        // backspacing speed
        this.backSpeed = this.options.backSpeed;

        // amount of time to wait before backspacing
        this.backDelay = this.options.backDelay;

        // input strings of text
        this.strings = this.options.strings;

        // character number position of current string
        this.strPos = 0;

        // current array position
        this.arrayPos = 0;

        // number to stop backspacing on.
        // default 0, can change depending on how many chars
        // you want to remove at the time
        this.stopNum = 0;

        // Looping logic
        this.loop = this.options.loop;
        this.loopCount = this.options.loopCount;
        this.curLoop = 0;

        // for stopping
        this.stop = false;

        // custom cursor
        this.cursorChar = this.options.cursorChar;

        // All systems go!
        this.build();
    };

    Typed.prototype = {

        constructor: Typed

        ,
        init: function() {
            // begin the loop w/ first current string (global self.string)
            // current string will be passed as an argument each time after this
            var self = this;
            self.timeout = setTimeout(function() {
                // Start typing
                self.typewrite(self.strings[self.arrayPos], self.strPos);
            }, self.startDelay);
        }

        ,
        build: function() {
            // Insert cursor
            if (this.showCursor === true) {
                this.cursor = $("<span class=\"typed-cursor\">" + this.cursorChar + "</span>");
                this.el.after(this.cursor);
            }
            this.init();
        }

        // pass current string state to each function, types 1 char per call
        ,
        typewrite: function(curString, curStrPos) {
            // exit when stopped
            if (this.stop === true) {
                return;
            }

            // varying values for setTimeout during typing
            // can't be global since number changes each time loop is executed
            var humanize = Math.round(Math.random() * (100 - 30)) + this.typeSpeed;
            var self = this;

            // ------------- optional ------------- //
            // backpaces a certain string faster
            // ------------------------------------ //
            // if (self.arrayPos == 1){
            //  self.backDelay = 50;
            // }
            // else{ self.backDelay = 500; }

            // contain typing function in a timeout humanize'd delay
            self.timeout = setTimeout(function() {
                // check for an escape character before a pause value
                // format: \^\d+ .. eg: ^1000 .. should be able to print the ^ too using ^^
                // single ^ are removed from string
                var charPause = 0;
                var substr = curString.substr(curStrPos);
                if (substr.charAt(0) === '^') {
                    var skip = 1; // skip atleast 1
                    if (/^\^\d+/.test(substr)) {
                        substr = /\d+/.exec(substr)[0];
                        skip += substr.length;
                        charPause = parseInt(substr);
                    }

                    // strip out the escape character and pause value so they're not printed
                    curString = curString.substring(0, curStrPos) + curString.substring(curStrPos + skip);
                }

                if (self.contentType === 'html') {
                    // skip over html tags while typing
                    if (curString.substr(curStrPos).charAt(0) === '<') {
                        var tag = '';
                        while (curString.substr(curStrPos).charAt(0) !== '>') {
                            tag += curString.substr(curStrPos).charAt(0);
                            curStrPos++;
                        }
                        curStrPos++;
                        tag += '>';
                    }
                }

                // timeout for any pause after a character
                self.timeout = setTimeout(function() {
                    if (curStrPos === curString.length) {
                        // fires callback function
                        self.options.onStringTyped(self.arrayPos);

                        // is this the final string
                        if (self.arrayPos === self.strings.length - 1) {
                            // animation that occurs on the last typed string
                            self.options.callback();

                            self.curLoop++;

                            // quit if we wont loop back
                            if (self.loop === false || self.curLoop === self.loopCount)
                                return;
                        }

                        self.timeout = setTimeout(function() {
                            self.backspace(curString, curStrPos);
                        }, self.backDelay);
                    } else {

                        /* call before functions if applicable */
                        if (curStrPos === 0)
                            self.options.preStringTyped(self.arrayPos);

                        // start typing each new char into existing string
                        // curString: arg, self.el.html: original text inside element
                        var nextString = curString.substr(0, curStrPos + 1);
                        if (self.attr) {
                            self.el.attr(self.attr, nextString);
                        } else {
                            if (self.isInput) {
                                self.el.val(nextString);
                            } else if (self.contentType === 'html') {
                                self.el.html(nextString);
                            } else {
                                self.el.text(nextString);
                            }
                        }

                        // add characters one by one
                        curStrPos++;
                        // loop the function
                        self.typewrite(curString, curStrPos);
                    }
                    // end of character pause
                }, charPause);

                // humanized value for typing
            }, humanize);

        }

        ,
        backspace: function(curString, curStrPos) {
            // exit when stopped
            if (this.stop === true) {
                return;
            }

            // varying values for setTimeout during typing
            // can't be global since number changes each time loop is executed
            var humanize = Math.round(Math.random() * (100 - 30)) + this.backSpeed;
            var self = this;

            self.timeout = setTimeout(function() {

                // ----- this part is optional ----- //
                // check string array position
                // on the first string, only delete one word
                // the stopNum actually represents the amount of chars to
                // keep in the current string. In my case it's 14.
                // if (self.arrayPos == 1){
                //  self.stopNum = 14;
                // }
                //every other time, delete the whole typed string
                // else{
                //  self.stopNum = 0;
                // }

                if (self.contentType === 'html') {
                    // skip over html tags while backspacing
                    if (curString.substr(curStrPos).charAt(0) === '>') {
                        var tag = '';
                        while (curString.substr(curStrPos).charAt(0) !== '<') {
                            tag -= curString.substr(curStrPos).charAt(0);
                            curStrPos--;
                        }
                        curStrPos--;
                        tag += '<';
                    }
                }

                // ----- continue important stuff ----- //
                // replace text with base text + typed characters
                var nextString = curString.substr(0, curStrPos);
                if (self.attr) {
                    self.el.attr(self.attr, nextString);
                } else {
                    if (self.isInput) {
                        self.el.val(nextString);
                    } else if (self.contentType === 'html') {
                        self.el.html(nextString);
                    } else {
                        self.el.text(nextString);
                    }
                }

                // if the number (id of character in current string) is
                // less than the stop number, keep going
                if (curStrPos > self.stopNum) {
                    // subtract characters one by one
                    curStrPos--;
                    // loop the function
                    self.backspace(curString, curStrPos);
                }
                // if the stop number has been reached, increase
                // array position to next string
                else if (curStrPos <= self.stopNum) {
                    self.arrayPos++;

                    if (self.arrayPos === self.strings.length) {
                        self.arrayPos = 0;
                        self.init();
                    } else
                        self.typewrite(self.strings[self.arrayPos], curStrPos);
                }

                // humanized value for typing
            }, humanize);

        }

        // Start & Stop currently not working

        // , stop: function() {
        //     var self = this;

        //     self.stop = true;
        //     clearInterval(self.timeout);
        // }

        // , start: function() {
        //     var self = this;
        //     if(self.stop === false)
        //        return;

        //     this.stop = false;
        //     this.init();
        // }

        // Reset and rebuild the element
        ,
        reset: function() {
            var self = this;
            clearInterval(self.timeout);
            var id = this.el.attr('id');
            this.el.after('<span id="' + id + '"/>')
            this.el.remove();
            if (typeof this.cursor !== 'undefined') {
                this.cursor.remove();
            }
            // Send the callback
            self.options.resetCallback();
        }

    };

    $.fn.typed = function(option) {
        return this.each(function() {
            var $this = $(this),
                data = $this.data('typed'),
                options = typeof option == 'object' && option;
            if (!data) $this.data('typed', (data = new Typed(this, options)));
            if (typeof option == 'string') data[option]();
        });
    };

    $.fn.typed.defaults = {
        strings: ["These are the default values...", "You know what you should do?", "Use your own!", "Have a great day!"],
        // typing speed
        typeSpeed: 0,
        // time before typing starts
        startDelay: 0,
        // backspacing speed
        backSpeed: 0,
        // time before backspacing
        backDelay: 500,
        // loop
        loop: false,
        // false = infinite
        loopCount: false,
        // show cursor
        showCursor: true,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: null,
        // either html or text
        contentType: 'html',
        // call when done callback function
        callback: function() {},
        // starting callback function before each string
        preStringTyped: function() {},
        //callback for every typed string
        onStringTyped: function() {},
        // callback for reset
        resetCallback: function() {}
    };


}(window.jQuery);

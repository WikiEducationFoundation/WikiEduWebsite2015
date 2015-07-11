/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        $('.show-mobile-menu').on('click',function(e){
          e.preventDefault();
          $('.mobile-nav').toggleClass('open');
        });

        $('.mobile-nav a').on('click',function(e){
          $('.mobile-nav').toggleClass('open');
        });

        $('.mobile-nav-close').on('click',function(e){
          e.preventDefault();
          $('.mobile-nav').removeClass('open');
        });
        $('.hero-slider').slick();
        var heros = document.querySelectorAll('.hero');
        imagesLoaded( heros, function() {
          var self = this;
          setTimeout(function(){
            $(self.elements[0]).addClass('active');
          },1000);
        });
        $('.search-form-container').on('click', function(){
          $target = $(this);
          if(!$target.hasClass('active')) {
            $target.addClass('active');
            setTimeout(function(){
              $target.find('input').first().focus();
            },200);

          }
        });

        // Didn't want to do this by disabling wpautop in case other pages rely on it
        $('p:empty').remove();
        $('.page-id-5596').find('br').remove();

        var slickInit = function(){
          $('.slideable-content-block').slick({
            slide: 'section',
            dots: true,
            infinite: false
          });
        };

        enquire.register("(min-width: 767px)", {
          match: function(){
            if ( $('.slick-initialized').length ) {
              $('.slideable-content-block').slick('unslick');
            }
          },
          unmatch: function(){
            slickInit();
          },
          setup: function(){
            if ( $(window).width() <= 767) {
              slickInit();
            }
          }
        });

        // Add class with JS because there isn't way from within theme PHP files
        if ( $('.footer-img-w-link').length ) {
          $('body').addClass('brochure-page');
        }

        $(window).on('resize', function(){
          if(!$('.search-form--header input').is(':focus')){
            $('.search-form-container').removeClass('active');
          }
          $('.mobile-nav').removeClass('open');
        });
        $(window).on('scroll', function(){
          if(!$('.search-form--header input').is(':focus')){
            $('.search-form-container').removeClass('active');
          }
        });

        // Fix WP automatically adding <p> tags, even in the HTML editor
        $('cite').closest('p').addClass('cite-parent-p');

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
    // Home page
    'search': {
      init: function() {

        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
        $target = $('.search-form-container');
        
        setTimeout(function(){
          $target.addClass('active');
        },500);
        
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
      var namespace = Sage;
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

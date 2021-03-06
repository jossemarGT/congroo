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
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {
  'use strict';

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
    }
  },
  // Home page
  blog: {
    init: function() {
      //TODO: Change this with localize script
      var endpoint = 'api/get_post/';

      // JavaScript to be fired on the home page
      $('.read-more').on('click', function(e){
        var $this = $(this),
            $parent = $this.parents('.post'),
            $content = $('.entry-content', $parent) ;

        if(!$parent.hasClass('content-loaded')){
          $parent.addClass('loading');

          $.ajax({
            url: endpoint,
            data: {id: $this.attr('data-post-id')},
            dataType: 'json',
          })
          .done(function(data){
            $content
            .append(data.post.content)
            .slideDown();

            $.scrollTo($content, {duration: 700, offset:{top: -200}});
          })
          .fail(function(jqXHR, status){
            cosole.log(status);
          })
          .always(function(jqXHR, status){
            $parent
            .removeClass('loading')
            .addClass('active content-loaded');
          });
        } else {
          $parent.toggleClass('active');
          $content.slideToggle();

          if( !$parent.hasClass('active') ) {
            $.scrollTo($parent , {duration: 700});
          } else {
            $.scrollTo($content, {duration: 700, offset:{top: -200}});
          }
        }

        e.preventDefault();
      });
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

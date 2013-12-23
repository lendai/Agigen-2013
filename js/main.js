(function($, window, undefined) {
    "use strict";

    $(window).on('resize', function() {
        $('.agigen-section__container').height(window.innerHeight)
        $('.agigen-section').height(window.innerHeight*1.2)
    }).trigger('resize')

    skrollr.init({
        forceHeight: false,
        smoothScrolling: false
    })
})(jQuery, window);

(function($, window, undefined) {
    "use strict";

    $(window).on('resize', function() {
        $('.agigen-section').height(window.innerHeight*1.2)
        $('.agigen-section--footer, .agigen-section__container').height(window.innerHeight)
    }).trigger('resize')

    skrollr.init({
        forceHeight: false,
        smoothScrolling: false
    })
})(jQuery, window);

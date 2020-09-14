import 'magnific-popup';

$(function() {
    'use strict';

    function magnificPopup() {
        // Inline HTML
        $('.js-popup-inline').magnificPopup({
            type: 'inline',
            midClick: true,
        });

        // Ajax HTML
        $('a.js-popup-ajax, label.js-popup-ajax a, span.js-popup-ajax a').magnificPopup({
            type: 'ajax',
            midClick: true,
        });
    }

    magnificPopup();
});
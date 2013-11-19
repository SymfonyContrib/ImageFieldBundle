(function ($) {
'use strict';

var imagefield = {
    done: function (e, data) {
        var files = data.getFilesFromResponse(data);
        data.context.each(function (index) {
            var file = files[index] || {error: 'Empty file upload result'};
            var $node = $(this);
            $node.find('.imagefield-preview img').attr('src', file.uri);
        });
    }
};

$('.filefield-upload').bind('fileuploaddone', imagefield.done);

})(jQuery);

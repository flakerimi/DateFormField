/**
 *
 * jQuery object to handle on/off interactions.
 * Selected value is stored in hidden input field.
 *
 * @package ImpressPages
 *
 */


(function($) {
    "use strict";

    var methods = {

        init : function(options) {

            if (typeof(options) === 'undefined') {
                options = {};
            }

            return this.each(function() {

                var $this = $(this);
                var $input = $this.find('input');
                var $on = $this.find('.ipsOn');
                var $off = $this.find('.ipsOff');

                var data = $this.data('onOffField');
                if (!data) {

                    $this.data('onOffField', {initialized: 1});

                    var switchValue = function() {

                        if ($input.val() == '1') {
                            $input.val(0);
                            $on.addClass('hidden');
                            $off.removeClass('hidden');
                        } else {
                            $input.val(1);
                            $on.removeClass('hidden');
                            $off.addClass('hidden');
                        }

                    }

                    $on.on('click', switchValue);
                    $off.on('click', switchValue);


                }
            });
        }


    };




    $.fn.onOffField = function(method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exist on jQuery.ipFormRepositoryFile');
        }

    };

})(jQuery);






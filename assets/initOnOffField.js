/**
 * On/Off field require JS to function. But some forms might appear on the page using AJAX so we can't rely on document ready event.
 * ImpressPages has special 'ipInitForms' event to notify all JS libraries that there are new forms appeared on the page.
 * Here we catch 'ipInitForms' event and initialize On/Off related js
 */
$(document).on('ipInitForms', function() {
    "use strict";
    $('.ipsModuleFormAdmin .type-onoff').onOffField(); //initializing forms if we are in admin interface
    $('.ipsModuleFormPublic .type-onoff').onOffField(); //initializing forms in public interface
});

<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: maskas
 * Date: 6/3/14
 * Time: 3:36 PM
 */

namespace Plugin\CustomFormField;


class Event
{
    public static function ipBeforeController()
    {
        //just add js and css
        ipAddJs('assets/onOffField.js');
        ipAddJs('assets/initOnOffField.js');
        ipAddCss('assets/onoff.css');
    }
}

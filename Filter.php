<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: mangirdas
 * Date: 6/30/14
 * Time: 2:32 PM
 */

namespace Plugin\CustomFormField;


class Filter
{
    public static function ipWidgetFormFieldTypes($fieldTypes, $info = null)
    {
        $fieldTitle = __('On / Off', 'CustomFormField', false);

        $fieldTypes['OnOffField'] = new \Ip\Internal\Content\FieldType('OnOffField', '\Plugin\CustomFormField\OnOffField', $fieldTitle);

        return $fieldTypes;
    }
}

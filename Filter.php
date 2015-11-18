<?php
/**
 * @package   DateFormField
 */


/**
 * Created by MetroLLC.
 * User: flakerimi
 * Date: 6/30/14
 * Time: 2:32 PM
 */

namespace Plugin\DateFormField;


class Filter
{
    public static function ipWidgetFormFieldTypes($fieldTypes, $info = null)
    {
        $fieldTitle = __('Date', 'DateFormField', false);

        $fieldTypes['DateField'] = new \Ip\Internal\Content\FieldType('DateField', '\Plugin\DateFormField\DateField', $fieldTitle);

        return $fieldTypes;
    }
}

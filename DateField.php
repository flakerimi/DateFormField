<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: maskas
 * Date: 6/3/14
 * Time: 2:48 PM
 */

namespace Plugin\DateFormField;

/**
 * Main field class responsible to render the field.
 * Class OnOffField
 * @package Plugin\DateFormField
 */
class DateField extends \Ip\Form\Field
{

    public function render($doctype, $environment) {
        return '
        
        <input type="date" '.$this->getAttributesStr($doctype).' class="form-control '.implode(' ',$this->getClasses()).'" name="'.htmlspecialchars($this->getName()).'" '.$this->getValidationAttributesStr($doctype).' value="'.htmlspecialchars($this->getValue()).'" />
        
        ';
    }

    /**
     * CSS class that should be applied to surrounding element of this field. By default empty. Extending classes should specify their value.
     */
    public function getTypeClass() {
        return 'date';
    }


}

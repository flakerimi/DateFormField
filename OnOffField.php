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

namespace Plugin\CustomFormField;

/**
 * Main field class responsible to render the field.
 * Class OnOffField
 * @package Plugin\CustomFormField
 */
class OnOffField extends \Ip\Form\Field
{

    public function render($doctype, $environment) {
        return '
        <div>
        <span class="ipsOn ' . ($this->getValue() ? '' : 'hidden') . '">On</span>
        <span class="ipsOff ' . ($this->getValue() ? 'hidden' : '') . '">Off</span>
        <input type="hidden" '.$this->getAttributesStr($doctype).' class="form-control '.implode(' ',$this->getClasses()).'" name="'.htmlspecialchars($this->getName()).'" '.$this->getValidationAttributesStr($doctype).' value="'.htmlspecialchars($this->getValue()).'" />
        </div>
        ';
    }

    /**
     * CSS class that should be applied to surrounding element of this field. By default empty. Extending classes should specify their value.
     */
    public function getTypeClass() {
        return 'onoff';
    }


}

<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: mangirdas
 * Date: 6/3/14
 * Time: 11:36 PM
 */

namespace Plugin\CustomFormField;


class SiteController
{

    /**
     * Render example form with on / off field
     * Access this controller by visiting example.com?sa=CustomFormField
     * @return string
     */
    public function index()
    {
        $content = '';

        $content .= ipRenderWidget('Heading', array('title' => 'Example usage'));

        $form = new \Ip\Form();


        $field = new \Ip\Form\Field\Text (
            array(
                'name' => 'someText', // HTML "name" attribute
                'label' => 'Some text just for fun', // Field label that will be displayed next to input field
            ));
        $form->addField($field);

        $field = new \Plugin\CustomFormField\OnOffField(
            array(
                'name' => 'inputFieldName', // HTML "name" attribute
                'label' => 'Set something on / off', // Field label that will be displayed next to input field
                'value' => 1 //1 means on by default
            ));
        $form->addField($field);

        $field = new \Ip\Form\Field\Submit (
            array(
                'value' => 'Submit', // HTML "name" attribute
            ));
        $form->addField($field);

        $content .= $form->render();

        return $content;

    }
}

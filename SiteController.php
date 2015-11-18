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

namespace Plugin\DateFormField;


class SiteController
{

    /**
     * Render example form with date field
     * Access this controller by visiting example.com?sa=DateFormField
     * @return string
     */
    public function index()
    {
        $content = '';

        $content .= ipRenderWidget('Heading', array('title' => 'Example Date Field usage'));

        $form = new \Ip\Form();


        $field = new \Ip\Form\Field\Text (
            array(
                'name' => 'someText', // HTML "name" attribute
                'label' => 'Some text just for fun', // Field label that will be displayed next to input field
            ));
        $form->addField($field);

        $field = new \Plugin\DateFormField\DateField(
            array(
                'name' => 'date', // HTML "name" attribute
                'label' => 'Choose a Date', // Field label that will be displayed next to input field
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

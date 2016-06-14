<?php
class Webmasterei_Slider_Model_Frameworkselect
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'', 'label'=>'None'),
            array('value'=>'bootstrap_3', 'label'=>'Twitter Bootstrap 3'),
            array('value'=>'foundation_5', 'label'=>'Zurb Foundation 5'),
        );
    }
}
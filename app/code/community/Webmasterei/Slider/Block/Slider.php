<?php
// app/code/local/Envato/WidgetLinks/Block/Links.php
class Webmasterei_Slider_Block_Slider
    extends Mage_Core_Block_Html_Link
    implements Mage_Widget_Block_Interface
{
    /**
     * Initialize entity model
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_entityResource = Mage::getResourceSingleton('catalog/product');
    }
}
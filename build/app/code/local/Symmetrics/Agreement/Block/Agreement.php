<?php

class Symmetrics_Agreement_Block_Agreement extends Mage_Checkout_Block_Agreements 
{
    protected function _toHtml()
    {
        $html = parent::_toHtml();

        // TODO: SYM: @eg Add event to observe _toHtml-Event
         
        $_layout = Mage::app()->getFrontController()->getAction()->getLayout();
        $template = $_layout->createBlock('core/template')->setTemplate('config/orderinfo.phtml')->toHtml();

        $html .= $template;
         
        return $html;
    }
}
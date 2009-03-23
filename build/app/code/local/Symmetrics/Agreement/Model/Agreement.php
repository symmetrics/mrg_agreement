<?php
/**
 * @category    Symmetrics
 * @package     Symmetrics_Agreement
 * @author      symmetrics gmbh <info@symmetrics.de>, Eugen Gitin <eg@symmetrics.de>
 */
class Symmetrics_Agreement_Model_Agreement extends Mage_Checkout_Model_Agreement 
{
    /**
     * Adding filter to the normal agreement window content
     *
     * @return string
     */
    function getContent()
    {
        $content = parent::getContent();
        $processor = Mage::getModel('core/email_template_filter');
        $html = $processor->filter($content);
        return $html;
    }
}
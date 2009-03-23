<?php
/**
 * @category    Symmetrics
 * @package     Symmetrics_Agreement
 * @author      symmetrics gmbh <info@symmetrics.de>, Eugen Gitin <eg@symmetrics.de>
 */
class Symmetrics_Agreement_Model_Observer
{
    /**
     * Setting the template for agreements
     *
     * @return
     */
    public function setTheme($observer)
    {
        Mage::getDesign()->setTheme('agreement');
    }
}
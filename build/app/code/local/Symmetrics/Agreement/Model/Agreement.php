<?php

class Symmetrics_Agreement_Model_Agreement extends Mage_Checkout_Model_Agreement 
{
	function getContent()
	{
		$content = parent::getContent();
		$processor = Mage::getModel('core/email_template_filter');
		$html = $processor->filter($content);
		return $html;
	}
}
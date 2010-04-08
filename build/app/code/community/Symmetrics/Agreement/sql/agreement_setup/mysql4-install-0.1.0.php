<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category  Symmetrics
 * @package   Symmetrics_Agreement
 * @author    symmetrics gmbh <info@symmetrics.de>
 * @author    Eric Reiche <er@symmetrics.de>
 * @author    Eugen Gitin <eg@symmetrics.de>
 * @copyright 2010 symmetrics gmbh
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      http://www.symmetrics.de/
 */

$installer = $this;
$installer->startSetup();

$data = array();
// creating agreements for the order process. they will be shown at the end of the checkout.
$data[] = array(
    'name' => 'AGB',
    'content' => '{{block type="cms/block" block_id="agb"}}',
    'checkbox_text' => 'Ich habe die Allgemeinen Geschäftsbedingungen gelesen und stimme diesen ausdrücklich zu.'
);

$data[] = array(
    'name' => 'Widerrufsbelehrung',
    'content' => '{{block type="cms/block" block_id="widerruf"}}',
    'checkbox_text' => 'Ich habe die Widerrufsbelehrung gelesen.'
);
foreach ($data as $agreement) {
    $this->createAgreement($agreement);
}

$data = array();

$data[] = array(
    'title' => 'AGB',
    'root_template' => 'one_column',
    'identifier' => 'agb',
    'content' => '{{block type="cms/block" block_id="agb"}}'
);

$data[] = array(
    'title' => 'Widerrufsbelehrung',
    'root_template' => 'one_column',
    'identifier' => 'widerruf',
    'content' => '{{block type="cms/block" block_id="widerruf"}}'
);
foreach ($data as $page) {
    $this->createCmsPage($page);
}

$data = array();

$data[] = array(
    'title' => 'AGB',
    'identifier' => 'sym_agb',
    'content' => '<h2>AGB</h2><p>[MUSTER]</p>'
);

$data[] = array(
    'title' => 'Widerrufsbelehrung',
    'identifier' => 'sym_widerruf',
    'content' => '<h2>Widerrufsbelehrung</h2><p>[MUSTER]</p>'
);
foreach ($data as $block) {
    $this->createCmsBlock($block, false);
}

$installer->setConfigData('checkout/options/enable_agreements', '1');

$installer->endSetup();
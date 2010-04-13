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

// creating agreements for the order process. they will be shown at the end of the checkout.
$data['name'] = 'AGB';
$data['content'] = '{{block type="cms/block" block_id="sym_agb"}}';
$data['checkbox_text'] = 'Ich habe die Allgemeinen Geschäftsbedingungen gelesen und stimme diesen ausdrücklich zu.';
$this->createAgreement($data);

$data['name'] = 'Widerrufsbelehrung';
$data['content'] = '{{block type="cms/block" block_id="sym_widerruf"}}';
$data['checkbox_text'] = 'Ich habe die Widerrufsbelehrung gelesen.';
$this->createAgreement($data);

unset($data);

// creating agreements pages
$data['title'] = 'AGB';
$data['root_template'] = 'one_column';
$data['identifier'] = 'agb';
$data['content'] = '{{block type="cms/block" block_id="sym_agb"}}';
$this->createCmsPage($data);

$data['title'] = 'Widerrufsbelehrung';
$data['root_template'] = 'one_column';
$data['identifier'] = 'widerruf';
$data['content'] = '{{block type="cms/block" block_id="sym_widerruf"}}';
$this->createCmsPage($data);

// checking if blocks sym_agb and sym_widerruf are already in the db. they 
// could be created by the customer or by the Symmetrics_ConfigGermanTexts module
$agreementBlock = $installer->getConnection()->fetchRow("
    SELECT COUNT(block_id) AS counter FROM {$installer->getTable('cms_block')} WHERE identifier='sym_agb'
");

if ($agreementBlock['counter'] == 0) {
    // if block not found -> create block
    $data['title'] = 'AGB';
    $data['identifier'] = 'sym_agb';
    $data['content'] = '<h2>AGB</h2><p>[MUSTER]</p>';
    $this->createCmsBlock($data);
}

$agreementBlock = $installer->getConnection()->fetchRow("
    SELECT COUNT(block_id) AS counter FROM {$installer->getTable('cms_block')} WHERE identifier='sym_widerruf'
");

if ($agreementBlock['counter'] == 0) {
    // if block not found -> create block
    $data['title'] = 'Widerrufsbelehrung';
    $data['identifier'] = 'sym_widerruf';
    $data['content'] = '<h2>Widerrufsbelehrung</h2><p>[MUSTER]</p>';
    $this->createCmsBlock($data);
}

$installer->setConfigData('checkout/options/enable_agreements', '1');

$installer->endSetup();
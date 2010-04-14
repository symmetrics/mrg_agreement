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

/**
 * Setup model for creating agreements + cms blocks and pages
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
class Symmetrics_Agreement_Model_Setup extends Mage_Eav_Model_Entity_Setup
{    
    /**
     * Collect data and create agreement
     *
     * @param array $agreementData agreement data
     *
     * @return void
     */
    public function createAgreement($agreementData)
    {
        $agreementData['is_active'] = '1';
        $agreementData['is_html'] = '1';
        $agreementData['stores'] = array('0');
        
        $agreement = Mage::getModel('checkout/agreement');
        $agreement->setData($agreementData)
            ->save();
    }
    
    /**
     * Define which strings to replace with what
     * 
     * @return array
     */
    protected function _getReplaceStrings()
    {
        $strings['search'] = array(
            '{{block type="symmetrics_impressum/impressum" value="shopname"}}',
            '{{block type="symmetrics_impressum/impressum" value="company1"}}',
            '{{block type="symmetrics_impressum/impressum" value="company2"}}',
            '{{block type="symmetrics_impressum/impressum" value="street"}}',
            '{{block type="symmetrics_impressum/impressum" value="zip"}}',
            '{{block type="symmetrics_impressum/impressum" value="city"}}',
            '{{block type="symmetrics_impressum/impressum" value="telephone"}}',
            '{{block type="symmetrics_impressum/impressum" value="fax"}}',
            '{{block type="symmetrics_impressum/impressum" value="email"}}',
            '{{block type="symmetrics_impressum/impressum" value="web"}}',
            '{{block type="symmetrics_impressum/impressum" value="taxnumber"}}',
            '{{block type="symmetrics_impressum/impressum" value="vatid"}}',
            '{{block type="symmetrics_impressum/impressum" value="court"}}',
            '{{block type="symmetrics_impressum/impressum" value="taxoffice"}}',
            '{{block type="symmetrics_impressum/impressum" value="ceo"}}',
            '{{block type="symmetrics_impressum/impressum" value="hrb"}}',
            '{{block type="symmetrics_impressum/impressum" value="legal"}}',
            '{{block type="symmetrics_impressum/impressum" value="bankaccountowner"}}',
            '{{block type="symmetrics_impressum/impressum" value="bankaccount"}}',
            '{{block type="symmetrics_impressum/impressum" value="bankcodenumber"}}',
            '{{block type="symmetrics_impressum/impressum" value="bankname"}}',
            '{{block type="symmetrics_impressum/impressum" value="swift"}}',
            '{{block type="symmetrics_impressum/impressum" value="iban"}}',
            '{{block type="symmetrics_impressum/impressum" value="bank"}}',
            
            '{{block type="symmetrics_impressum/impressum" value="emailfooter"}}',
            '{{block type="symmetrics_impressum/impressum" value="address"}}',
            '{{block type="symmetrics_impressum/impressum" value="communication"}}',
            '{{block type="symmetrics_impressum/impressum" value="legal"}}',
            '{{block type="symmetrics_impressum/impressum" value="tax"}}',
            '{{block type="symmetrics_impressum/impressum" value="bank"}}',
            
            '{{block type="symmetrics_impressum/impressum" value="web_href"}}',
            '{{block type="symmetrics_impressum/impressum" value="email_href"}}',
            
            '{{block type="symmetrics_impressum/impressum" value="imprint"}}',
            
            '{{block type="symmetrics_impressum/impressum" value="imprintplain"}}'
        );
        
        $strings['replace'] = array(
            '{{block type="imprint/field" value="shop_name"}}',
            '{{block type="imprint/field" value="company_first"}}',
            '{{block type="imprint/field" value="company_second"}}',
            '{{block type="imprint/field" value="street"}}',
            '{{block type="imprint/field" value="zip"}}',
            '{{block type="imprint/field" value="city"}}',
            '{{block type="imprint/field" value="telephone"}}',
            '{{block type="imprint/field" value="fax"}}',
            '{{block type="imprint/field" value="email"}}',
            '{{block type="imprint/field" value="web"}}',
            '{{block type="imprint/field" value="tax_number"}}',
            '{{block type="imprint/field" value="vat_id"}}',
            '{{block type="imprint/field" value="court"}}',
            '{{block type="imprint/field" value="financial_office"}}',
            '{{block type="imprint/field" value="ceo"}}',
            '{{block type="imprint/field" value="register_number"}}',
            '{{block type="imprint/field" value="business_rules"}}',
            '{{block type="imprint/field" value="bank_account_owner"}}',
            '{{block type="imprint/field" value="bank_account"}}',
            '{{block type="imprint/field" value="bank_code_number"}}',
            '{{block type="imprint/field" value="bank_name"}}',
            '{{block type="imprint/field" value="swift"}}',
            '{{block type="imprint/field" value="iban"}}',
            
            '{{block type="imprint/content" template="symmetrics/imprint/email/footer.phtml"}}',
            '{{block type="imprint/content" template="symmetrics/imprint/address.phtml"}}',
            '{{block type="imprint/content" template="symmetrics/imprint/communication.phtml"}}',
            '{{block type="imprint/content" template="symmetrics/imprint/legal.phtml"}}',
            '{{block type="imprint/content" template="symmetrics/imprint/tax.phtml"}}',
            '{{block type="imprint/content" template="symmetrics/imprint/bank.phtml"}}',
            
            '{{block type="imprint/field" value="web"}}',
            '{{block type="imprint/field" value="email"}}',
            
            '{{block type="imprint/content" template="symmetrics/imprint/email/footer.phtml"}}
            {{block type="imprint/content" template="symmetrics/imprint/tax.phtml"}}
            {{block type="imprint/content" template="symmetrics/imprint/legal.phtml"}}
            {{block type="imprint/content" template="symmetrics/imprint/bank.phtml"}}',
            
            '{{block type="imprint/content" template="symmetrics/imprint/email/footer.phtml"}}
            {{block type="imprint/content" template="symmetrics/imprint/tax.phtml"}}
            {{block type="imprint/content" template="symmetrics/imprint/legal.phtml"}}
            {{block type="imprint/content" template="symmetrics/imprint/bank.phtml"}}',
        );
        
        return $strings;
    }
    
    /**
     * Replace some old values for upgrading
     * 
     * @param string $content   content ro replace
     * @param string $storeurls replace store url notation
     *                          only in symmetrics blocks
     * 
     * @return string
     */
    protected function _replaceContent($content, $storeUrls=true)
    {
        $content = str_replace(
            '{{block type="cms/block" block_id="sym_agb"}}',
            '{{block type="cms/block" block_id="symmetrics_business_terms"}}',
            $content
        );
        $content = str_replace(
            '{{block type="cms/block" block_id="sym_widerruf"}}',
            '{{block type="cms/block" block_id="symmetrics_revocation"}}',
            $content
        );
        
        $content = preg_replace('!\{\{store url=""\}\}([^\"\>\}]+)!', '{{store url="$1"}}', $content);
        
        $replaceStrings = $this->_getReplaceStrings();
        $content = str_replace($replaceStrings['search'], $replaceStrings['replace'], $content);

        return $content;
    }
    
    /**
     * Update agreements if upgrading from previous versions
     *
     * @return void
     */
    public function updateAgreements()
    {
        /**
         * @var $agreementCollection Mage_Checkout_Model_Mysql4_Agreement_Collection
         */
        $agreementCollection = Mage::getModel('checkout/agreement')
            ->getCollection();
        foreach ($agreementCollection as $agreement) {
            $content = $agreement->getContent();
            $content = $this->_replaceContent($content);
            $agreement->setContent($content)
                ->save();
        }
    }
}
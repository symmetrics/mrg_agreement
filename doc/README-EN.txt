* DOCUMENTATION

** INSTALLATION
Extract content of this archive in your Magento directory.
It might be necessary to clear/ refresh the Magento cache.

** USAGE
The module creates order conditions (Terms and Conditions and
Revocation Policy), which must be accepted by customers at the end of the ordering process. Besides, the module provides a possibility to use block calls as  {{block type ...}} in the field in which in checkout the texts are displayed. Blocks themselves are not created by the module. They should be created either manually via CMS static blocks or with the help of module Symmetrics_ConfigGermanTexts. Blocks (identifier) should be called
"mrg_business_terms" and "mrg_revocation".

Symmetrics_Agreement also creates CMS pages Terms and Conditions, and
Revocation Policy which are filled either with texts using Symmetrics_ConfigGermanTexts or manually.

** FUNCTIONALITY
*** A: Activates the agreements in the system configuration
        under " System-> Configuration-> Sales-> To checkout
-> Payment options-> Enable Terms and Conditions "
*** B: Creates pages Terms and Conditions and Revocation Policy
*** C: Creates blocks "mrg_business_terms" and
        "mrg_revocation"
*** D: Inserts rendering for the field "Order conditions" and "Checkbox text" in
        checkout, so that calls as {{block .}} could be used there
        The order conditions are found in backend under
        Sales / Order conditions.
*** E: Binds blocks created under b) to the agreeements


** TECHNICAL
Overwrites the block Mage_Checkout_Model_Agreement and applies
the standard template filter to the contents of the agreements.
Pages, blocks and agreements are created via migration script.

** PROBLEMS
The agreement.phtml template escapes HTML content for the checkbox text. The content box text is not affected by this.

* TESTCASES
** BASIC
*** A: Check whether the option is active under "System-> Configuration->
        Sales-> To checkout -> Payment options -> Enable Terms and
        Conditions" and the corresponding blocks are displayed in Checkout review (the last step).
*** B: Check whether these pages exist in frontend and backend.
*** C: Check whether these blocks exist in frontend and backend.
*** D: Try different calls in the agreements and check,
        whether these appear so in the Checkout / Review step.
        Examples:
        {{block type = "cms/block" block_id = "cms_block_name"}}
        Where cms_block_name should correspond to an available CMS Block Identifier.

*** E: 1. The migration script should provide agreements with the following contents:
           {{block type = "cms/block" block_id = "mrg_revocation"}} for the
           Revocation Policy and
           {{block type = "cms/block" block_id = "mrg_business_terms"}} for the
           Terms and Conditions.
       2. Check in the backend, whether these contents are found in the agreements.
       3. Check in the frontend in Checkout / Review step, whether these blocks
           really correspond to that, which is entered in the backend under CMS/blocks for the blocks mrg_revocation or mrg_business_terms.

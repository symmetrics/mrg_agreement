<?php

$dateTime = date('Y-m-d H:i:s');

$installer = $this;
$installer->startSetup();

$query = <<< EOF
INSERT INTO `checkout_agreement` (`name`, `content`, `content_height`, `checkbox_text`, `is_active`, `is_html`) VALUES
('AGB', '{{block type="cms/block" block_id="sym_agb"}}', '', 'Ich habe die Allgemeinen Geschäftsbedingungen gelesen und stimme diesen ausdrücklich zu.', 1, 1);
EOF;
$installer->run($query);
	
$newEntityId = $installer->getConnection()->lastInsertId();
$query = <<< EOF
INSERT INTO `checkout_agreement_store` (`agreement_id`, `store_id`) VALUES ('$newEntityId', '0');
EOF;
$installer->run($query);

$query = <<< EOF
INSERT INTO `checkout_agreement` (`name`, `content`, `content_height`, `checkbox_text`, `is_active`, `is_html`) VALUES
('Widerrufsbelehrung', '{{block type="cms/block" block_id="sym_widerruf"}}', '', 'Ich habe die Widerrufsbelehrung gelesen.', 1, 1);
EOF;
$installer->run($query);
    
$newEntityId = $installer->getConnection()->lastInsertId();
$query = <<< EOF
INSERT INTO `checkout_agreement_store` (`agreement_id`, `store_id`) VALUES ('$newEntityId', '0');
EOF;
$installer->run($query);

$query = <<< EOF
INSERT INTO `cms_page` (`title`, `root_template`, `meta_keywords`, `meta_description`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`, `sort_order`, `layout_update_xml`, `custom_theme`, `custom_theme_from`, `custom_theme_to`) VALUES
('AGB', 'one_column', '', '', 'agb', '{{block type="cms/block" block_id="sym_agb"}}', '$dateTime', '$dateTime', 1, 0, '', '', NULL, NULL);
EOF;
$installer->run($query);
    
$newEntityId = $installer->getConnection()->lastInsertId();
$query = <<< EOF
INSERT INTO `cms_page_store` (`page_id`, `store_id`) VALUES ('$newEntityId', '0');
EOF;
$installer->run($query);

$query = <<< EOF
INSERT INTO `cms_page` (`title`, `root_template`, `meta_keywords`, `meta_description`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`, `sort_order`, `layout_update_xml`, `custom_theme`, `custom_theme_from`, `custom_theme_to`) VALUES
('Widerrufsbelehrung', 'one_column', '', '', 'widerruf', '{{block type="cms/block" block_id="sym_widerruf"}}', '$dateTime', '$dateTime', 1, 0, '', '', NULL, NULL);
EOF;
$installer->run($query);
    
$newEntityId = $installer->getConnection()->lastInsertId();
$query = <<< EOF
INSERT INTO `cms_page_store` (`page_id`, `store_id`) VALUES ('$newEntityId', '0');
EOF;
$installer->run($query);

$agbBlock = $installer->getConnection()->fetchRow("
    SELECT COUNT(block_id) AS counter FROM {$installer->getTable('cms_block')} WHERE identifier='sym_agb'
");

if($agbBlock['counter'] == 0)
{
    $query = <<< EOF
    INSERT INTO `cms_block` (`title`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`) VALUES ('AGB', 'sym_agb', '<h2>AGB</h2><p>[MUSTER]</p>', '$dateTime', '$dateTime', 1);
EOF;
    $installer->run($query);

    $newEntityId = $installer->getConnection()->lastInsertId();
    $query = "INSERT INTO `cms_block_store` (`block_id`, `store_id`) VALUES ('$newEntityId', '0');";
    $installer->run($query);
}

$widerrufBlock = $installer->getConnection()->fetchRow("
    SELECT COUNT(block_id) AS counter FROM {$installer->getTable('cms_block')} WHERE identifier='sym_widerruf'
");

if($widerrufBlock['counter'] == 0)
{
    $query = <<< EOF
    INSERT INTO `cms_block` (`title`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`) VALUES ('Widerrufsbelehrung', 'sym_widerruf', '<h2>Widerrufsbelehrung</h2><p>[MUSTER]</p>', '$dateTime', '$dateTime', 1);
EOF;
    $installer->run($query);

    $newEntityId = $installer->getConnection()->lastInsertId();
    $query = "INSERT INTO `cms_block_store` (`block_id`, `store_id`) VALUES ('$newEntityId', '0');";
    $installer->run($query);
}

$installer->setConfigData('checkout/options/enable_agreements', '1');

$installer->endSetup();
<?php
$installer = $this;
$installer->startSetup();
$installer->run("UPDATE eav_attribute SET is_required = 0 WHERE attribute_code = 'lastname';");
$installer->run("UPDATE customer_eav_attribute SET validate_rules = 'a:1:{s:15:\"max_text_length\";i:255;}' WHERE customer_eav_attribute.attribute_id = 7;");
$installer->run("UPDATE customer_eav_attribute SET validate_rules = 'a:1:{s:15:\"max_text_length\";i:255;}' WHERE customer_eav_attribute.attribute_id = 22;");
$installer->endSetup();
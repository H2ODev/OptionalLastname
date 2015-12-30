# Optional Lastname 1.0.0

## Installation
You may want to customize the template folder under `design/frontend` as it needs to be your current template,
if you use `modman` you have to edit `line 7` in the modman file too.

## Uninstall
The database customization this extension does can only be reverted manually with the following SQL Queries:

- `UPDATE eav_attribute SET is_required = 1 WHERE attribute_code = 'lastname';`
- `UPDATE customer_eav_attribute SET validate_rules = 'a:2:{s:15:\"max_text_length\";i:255;s:15:\"min_text_length\";i:1;}' WHERE customer_eav_attribute.attribute_id = 7;"`
- `UPDATE customer_eav_attribute SET validate_rules = 'a:2:{s:15:\"max_text_length\";i:255;s:15:\"min_text_length\";i:1;}' WHERE customer_eav_attribute.attribute_id = 22;"`

## Credits

Based on an awesome [Article](http://www.douglasradburn.co.uk/how-to-make-last-name-optional-in-magento-1-9/) from [@Douglas Radburn](https://twitter.com/douglasradburn/)
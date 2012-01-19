<?php
/**
 * Default properties for AnchorMan snippet
 *
 * @package getvalue
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'scheme',
        'desc' => 'The makeUrl scheme for generating links. Defaults to link_tag_scheme from Settings, or full if not set.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
);

return $properties;
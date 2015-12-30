<?php
return array(
    'base_dir'               => '.',
    'archive_files'          => 'build.tar',
    'extension_name'         => getenv('project_name'),
    'extension_version'      => getenv('project_version'),
    'skip_version_compare'   => false,
    'auto_detect_version'    => false,
    'path_output'            => getenv('HOME') . '/'.getenv('module_name').'/release',
    'stability'              => 'stable',
    'license'                => 'All rights reserved © H2O Development',
    'channel'                => 'community',
    'summary'                => 'makes the customer attribute and customer address attribute lastname optional',
    'description'            => 'makes the customer attribute and customer address attribute lastname optional',
    'notes'                  => '',
    'author_name'            => 'Marvin Oßwald',
    'author_user'            => 'admin',
    'author_email'           => 'mo@h2om.de',
    'php_min'                => '5.4.0',
    'php_max'                => '5.6.0',
    'extensions'             => array()
);
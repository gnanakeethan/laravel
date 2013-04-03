<?php
return array(
    'directories' => array(
       // '/your/less/path' => '/your/css/path',
        
    ),
    'files' => array(
       // '/your/less/file.less' => '/your/css/file.css',
        
    ),
    'snippets' => array(
        //'#custom_id { a {color:red;} }' => '/your/snippet/file.css',
        
    ),
    'formatter' => 'compressed',
    'preserveComments' => false,
    'variables' => array(
        'color' => 'red',
        'base'  => '960px',
    ),
    'recompile' => false,
);
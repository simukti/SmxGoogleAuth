<?php 
return array(
    'template_map' => array(
        'smx-google-auth/layout'            => realpath(__DIR__ . '/../view/smx-google-auth/layout/layout.phtml'),
        'smx-google-auth/flashmessenger'    => realpath(__DIR__ . '/../view/smx-google-auth/layout/flashmessenger.phtml'),
        'smx-google-auth/index/login'       => realpath(__DIR__ . '/../view/smx-google-auth/index/login.phtml'),
    ),
    'template_path_stack' => array(
       realpath(__DIR__ . '/../view')
    )
);
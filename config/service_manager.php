<?php 
return array(
    'factories' => array(
        'smx.googleauth.service.session'  => 'SmxGoogleAuth\Service\SessionFactory',
        'smx.googleauth.service.auth'     => 'SmxGoogleAuth\Service\AuthFactory',
    ),
    'aliases' => array(
        'Zend\Authentication\AuthenticationService' => 'default_authentication_service',
    ),
    'invokables' => array(
        'default_authentication_service' => 'Zend\Authentication\AuthenticationService',
    ),
);
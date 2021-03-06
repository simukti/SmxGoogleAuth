<?php 
return array(
    'routes' => array(
        'smx.auth.login' => array(
            'type' => 'Literal',
            'options' => array(
                'route' => '/login',
                'defaults' => array(
                    'controller'    => 'smx.googleauth.controller.index',
                    'action'        => 'login',
                ),
            ),
            'may_terminate' => true,
        ),
        'smx.auth.oauth' => array(
            'type' => 'Literal',
            'options' => array(
                'route' => '/google-oauth',
                'defaults' => array(
                    'controller'    => 'smx.googleauth.controller.index',
                    'action'        => 'google-auth',
                ),
            ),
            'may_terminate' => true,
        ),
        'smx.auth.callback' => array(
            'type' => 'Literal',
            'options' => array(
                'route' => '/oauth-callback',
                'defaults' => array(
                    'controller'    => 'smx.googleauth.controller.index',
                    'action'        => 'oauth-callback',
                ),
            ),
            'may_terminate' => true,
        ),
        'smx.auth.logout' => array(
            'type' => 'Literal',
            'options' => array(
                'route' => '/logout',
                'defaults' => array(
                    'controller'    => 'smx.googleauth.controller.index',
                    'action'        => 'logout',
                ),
            ),
            'may_terminate' => true,
        ),
    )
);
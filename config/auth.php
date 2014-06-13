<?php
/**
 * Konfigurasi yang ada disini akan di override oleh konfigurasi yang ada di local.php
 * saya menyarankan untuk mengisi konfigurasi di application/autoload/local.php 
 * karena secara default local.php di-ignore otomatis waktu git push.
 */
return array(
    'session' => array(
        'Name'              => 'auth-module',
        'SavePath'          => sys_get_temp_dir(),
        'UseCookies'        => true,
        'CookiePath'        => '/',
        'CookieDomain'      => '',
        'CookieSecure'      => false,
        'CookieHttpOnly'    => true,
        'RememberMeSeconds' => 3600 * 24 * 7,
        'HashFunction'      => 'gost',
        'HashBitsPerCharacter' => 2,
    ),
    'google_auth' => array(
        // domain google apps yang digunakan
        // hanya user dengan email berakhiran domain ini yang valid
        'domain'              => '',
        // 
        'clientId'            => '',
        // 
        'clientSecret'        => '',
        // nama login route
        'login_route'         => 'smx.auth.login',
        // nama logout route
        'logout_route'        => 'smx.auth.logout',
        // nama route yang dituju setelah logout
        'route_after_logout'  => 'smx.auth.login',
        // nama route yang dituju setelah login sukses
        'route_after_login'   => 'home',
        // callback url
        'callback_route'      => 'smx.auth.callback',
    )
);
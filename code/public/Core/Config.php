<?php 

namespace OTS\Core;

class Config {
    private static $config = [
        'version'             =>  '0.0.1',
        'root_dir'            => '',  //  This will likely be / on a live server
        'default_controller'  => 'Bible',  // The default home controller
        'default_layout'      => 'default', // Default layout that is used
        'default_site_title'  => 'Bible Blog', // Default Site title
        'db_host'             => 'db8.hostpark.net', // DB host please use IP address not domain
        'db_name'             => 'schmidschluch7', // DB name
        'db_user'             => 'schmidschluch7', // DB user
        'db_password'         => '3903Schlucht', // DB password
        'login_cookie_name'   => 'hak34532g1l8a' // Login cookie name
    ];

    public static function get($key) {
        return array_key_exists($key, self::$config)? self::$config[$key] : NULL;
    }
}
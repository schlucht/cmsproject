<?php

namespace OTS\Core;

class Config
{
  private static $config = [
    'site'                => 'Bible Page',
    'version'             => '0.0.1',
    'root_dir'            => '/public',
    'default_controller'  => 'Blog',
    'default_layout'      => 'default',
    'default_site_title'  => 'Bible Blog',
    'db_host'             => 'db8.hostpark.net',
    'db_name'             => 'schmidschluch7',
    'db_user'             => 'schmidschluch7',
    'db_password'         => '3904Schlucht',
    'login_cookie_name'   => 'dehjts45l6490',
  ];

  public static function get(string $key): string
  {
    return array_key_exists($key, self::$config) ? self::$config[$key] : NULL;
  }
}

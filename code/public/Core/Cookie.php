<?php

namespace OTS\Core;

class Cookie
{
    public static function get(string $name): string  | bool
    {
        if (self::exists($name)) {
            return $_COOKIE[$name];
        }
        return false;
    }

    public static function set(string $name, string $value, int $expiry): bool
    {
        if (setCookie($name, $value, time() + $expiry, '/')) {
            return true;
        }
        return false;
    }

    public static function delete(string $name): bool
    {
        return self::set($name, '', -1);
    }

    public static function exists(string $name): bool
    {
        return isset($_COOKIE[$name]);
    }
}


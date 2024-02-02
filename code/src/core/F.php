<?php
namespace ots\core;

class F
{
    /**
     * Debugging function to dump data
     */
    public static function dd($data, $die = true)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        if ($die) {
            die();
        }
    }
}

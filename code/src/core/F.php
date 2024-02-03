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

    public static function message(string $message, mixed $data = null)
    {
        //$arr = array_merge(['message' => $message], $data);
        return json_encode(['message' => $message, 'data' => json_encode($data)]);
    }
}

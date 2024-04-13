<?php
// src/models/utils/dotEnv.php - (created by: logicinfo.com.br/ael)
class Dotenv
{
    protected static $data = null;

    protected static function load()
    {
        if (self::$data !== null) {
            return;
        }

        self::$data = [];

        $filePath = '.env';

        if (!file_exists($filePath)) {
            return;
        }

        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {

            list($key, $value) = explode('=', $line, 2);
            self::$data[trim($key)] = trim($value);
        }
    }



    public static function get($key, $default = null)
    {
        self::load();

        return self::$data[$key] ?? $default;
    }
}
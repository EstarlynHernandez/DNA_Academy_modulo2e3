<?php

namespace php\Class\File;

class File
{
    private static string $dir = 'File/';
    private static string $ext = '.txt';

    public static function read($fileName): string|bool
    {
        if(file_exists(self::$dir . $fileName . self::$ext)){
            return file_get_contents(self::$dir . $fileName . self::$ext);
        }

        return false;
    }

    public static function exist($fileName): bool
    {
        return file_exists(self::$dir . $fileName . self::$ext);
    }

    public static function make(string $fileName, string $message): int|bool
    {
        return file_put_contents(self::$dir . $fileName . self::$ext, $message);
    }
}
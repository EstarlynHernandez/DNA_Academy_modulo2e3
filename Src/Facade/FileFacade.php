<?php

namespace php\Facade;

use php\Class\File\File;

class FileFacade
{
    public static function read($fileName): string
    {
        if (File::exist($fileName)) {
            return File::read($fileName);
        }

        return "Error: Il file non e stato trovato!";
    }

    public static function exist($fileName): string
    {
        if (File::exist($fileName)) {
            return "Il file esiste";
        }

        return "Il file no e stato trovato";
    }

    public static function make(string $fileName, string $message, bool $overWrite = false): int|string
    {
        if (File::exist($fileName) && !$overWrite) {
            return ("Error: Il file gia esiste");
        }

        File::make($fileName, $message);
        return "File creato/aggiornato con esito";
    }
}
<?php

namespace php\Facade;

use php\Http\DB;
use php\Logger\Logger;

class LoggerFacade
{
    private Logger $Logger;
    private DB $DB;

    public function __construct()
    {
        $this->DB = DB::getInstance();
        $this->Logger = Logger::getInstance();
    }

    public function writeError($message): void
    {
        $this->Logger->setLogMessage($message);
        $this->DB->query("INSERT INTO errors (message) VALUES ('$message')");
        echo $message;
    }
}
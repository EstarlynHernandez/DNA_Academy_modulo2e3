<?php

namespace php\Logger;

class Logger
{
    private static ?self $instance = null;
    private string $logFile = 'log/.log';

    private function __construct(){}

    private function __clone(): void{}

    public function __wakeup(): void{}

    public static function getInstance(): ?self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function setLogMessage($message): void
    {
        file_put_contents($this->logFile, "$message\n", FILE_APPEND);
    }

    public function getLogMessage(): bool|string
    {
        return file_get_contents($this->logFile);
    }

    public function getLogFile(): string
    {
        return $this->logFile;
    }

    public function setLogFile(string $logFile): void
    {
        $this->logFile = $logFile;
    }
}
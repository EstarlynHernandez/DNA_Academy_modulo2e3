<?php

namespace php\Http\Config;

class SessionManager
{
    private static ?self $instance = null;

    private function __construct(){
        session_start();
    }

    public function __wakeup(): void{}

    private function __clone(): void{}

    static function getInstance(): ?SessionManager
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function setData($key, $value): void
    {
        $_SESSION[$key] = $value;
    }
    public function getData($key): mixed
    {
        return $_SESSION[$key] ?? null;
    }

    public function destroyData($key): void
    {
        unset($_SESSION[$key]);
    }

    public function destroySession(): void
    {
        session_reset();
        session_destroy();
        self::$instance = null;
    }

    public function resetData(): void
    {
        session_reset();
    }
}
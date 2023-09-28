<?php

namespace php\Http\Config;

class Config
{
    private static ?Config $instance = null;
    private string $dbUser = 'root';
    private string $dbPassword = 'root';
    private string $dbName = 'test';
    private string $dbHost = 'localhost';

    private function __construct(){}

    private function __clone(): void{}

    public function __wakeup(): void{}

    public function getDbHost(): string
    {
        return $this->dbHost;
    }

    public function setDbHost(string $dbHost): void
    {
        $this->dbHost = $dbHost;
    }

    public function getDbName(): string
    {
        return $this->dbName;
    }

    public function setDbName(string $dbName): void
    {
        $this->dbName = $dbName;
    }

    public function getDbUser(): string
    {
        return $this->dbUser;
    }

    public function setDbUser(string $dbUser): void
    {
        $this->dbUser = $dbUser;
    }

    public function getDbPassword(): string
    {
        return $this->dbPassword;
    }

    public function setDbPassword(string $dbPassword): void
    {
        $this->dbPassword = $dbPassword;
    }

    public static function getInstance(): ?Config
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
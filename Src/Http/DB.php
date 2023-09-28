<?php

namespace php\Http;

class DB
{
    private static ?self $instance = null;
    private \mysqli|null $connection = null;
    private string $dbUser = 'root';
    private string $dbPassword = '';
    private string $dbDatabases = 'test';
    private string $dbHostname = 'localhost';
    private string|bool $error = false;
    private array $errors = [];

    private function __construct()
    {
        $this->openConnection();
    }

    private function __clone(): void{}

    public function __invoke(){}

    public function query($query): bool|\mysqli_result
    {
        $this->error = false;
        try {
            return $this->connection->query($query);
        } catch (\Throwable $errors) {
            $this->errors[] = $errors->getMessage();
            $this->error = $errors->getMessage();
        }

        return false;
    }

    public function getError(): bool|string
    {
        return $this->error;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function closeConnection(): void
    {
        $this->errors = [];
        $this->error = false;
        $this->connection->close();
    }

    public function openConnection(): string|bool
    {
        try {
            $this->connection = new \mysqli($this->dbHostname, $this->dbUser, $this->dbPassword, $this->dbDatabases);
            $this->error = false;
            $this->errors = [];
        } catch (\Throwable $errors) {
            $this->errors[] = $errors->getMessage();
            $this->error = $errors->getMessage();
        }

        return $this->error;
    }

    public static function getInstance(): ?DB
    {
        if (self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }
}
<?php

declare(strict_types=1);

class Database
{
    private ?PDO $connection = null;

    public function connect(): PDO
    {
        if ($this->connection === null) {

            $host = getenv('DB_HOST') ?: 'mysql';
            $database = getenv('DB_NAME') ?: 'whatsapp_support';
            $username = getenv('DB_USER') ?: 'wauser';
            $password = getenv('DB_PASSWORD') ?: 'wapassword';

            $dsn = sprintf(
                'mysql:host=%s;dbname=%s;charset=utf8mb4',
                $host,
                $database
            );

            $this->connection = new PDO(
                $dsn,
                $username,
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        }

        return $this->connection;
    }
}
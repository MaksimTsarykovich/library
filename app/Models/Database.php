<?php

class Database
{
    private static ?Database $instance = null;
    private ?PDO $connection = null;
    private string $host = 'localhost';
    private string $user = 'user';
    private string $pass = 'password';
    private string $databaseName = 'database';


    private function __construct()
    {

    }

    public function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        if ($this->connection === null) {
            try {
                $this->connection = new PDO("mysql:host={$this->host};dbname={$this->databaseName}", $this->user, $this->pass);
            } catch (PDOException $e) {
                die("Database connection failed" . $e->getMessage());
            }
        }
        return $this->connection;
    }

    public function setHost(string $host): Database
    {
        $this->checkConnectionNotEstablished();
        $this->host = $host;
        return $this;
    }

    public function setUser(string $user): Database
    {
        $this->checkConnectionNotEstablished();
        $this->user = $user;
        return $this;
    }

    public function setPass(string $pass): Database
    {
        $this->checkConnectionNotEstablished();
        $this->pass = $pass;
        return $this;
    }

    public function setDatabaseName(string $databaseName): Database
    {
        $this->checkConnectionNotEstablished();
        $this->databaseName = $databaseName;
        return $this;
    }

    private function checkConnectionNotEstablished(): void
    {
        if (self::$instance === null) {
            throw new Exception("Cannot modify configuration after connection is established");
        }
    }

}
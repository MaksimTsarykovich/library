<?php

require_once '../Config/DatabaseConfig.php';

class Database
{
    private static ?Database $instance = null;
    private ?PDO $connection = null;
    private DatabaseConfig $config;


    private function __construct($config)
    {
        $this->config = $config;
    }

    public static function getInstance(DatabaseConfig $config): self
    {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    public function connectToDatabase(): PDO
    {
        if ($this->connection === null) {
            $dsn = "mysql:host={$this->config->getHost()};dbname={$this->config->getDatabaseName()};charset={$this->config->getCharset()}";
            $this->connection = new PDO($dsn, $this->config->getUsername(), $this->config->getPassword());
        }
        return $this->connection;
    }


}
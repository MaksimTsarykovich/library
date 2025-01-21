<?php


class DatabaseConfig
{
    private string $host;
    private string $databaseName;
    private string $user;
    private string $password;
    private string $charset;

    public function __construct($host, $databaseName, $user, $password, $charset)
    {
        $this->host = $host;
        $this->databaseName = $databaseName;
        $this->user = $user;
        $this->password = $password;
        $this->charset = $charset;

    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }

    public function getUsername(): string
    {
        return $this->user;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCharset(): string
    {
        return $this->charset;
    }

}
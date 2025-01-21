<?php

abstract class BaseModel
{
    private Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }



}
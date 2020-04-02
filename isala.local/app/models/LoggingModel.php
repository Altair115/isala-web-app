<?php

require_once('../app/database/connection.php');

class LoggingModel
{
    private $db;

    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function getDB()
    {
        return $this->db;
    }
}
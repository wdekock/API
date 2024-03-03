<?php
// src/utils/Database.php

class Database {
    private $db;

    public function __construct() {
        require_once __DIR__ . '/../../config.php';
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection() {
        return $this->db;
    }
}

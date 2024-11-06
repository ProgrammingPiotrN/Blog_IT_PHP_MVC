<?php


class Database
{
    private $host = "localhost";
    private $db_name = "php_mvc_blog";
    private $username = "root";
    private $password = "Student!@2024";
    public $connection; // PDO connection object

    // Database connection object creation
    public function __construct()
    {
        try {
            // Create a new PDO Connection
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name, $this->username, $this->password");
            // Set character set to UTF-8
            $this->connection->exec("Set names utf8");
            echo "Connected successfully";
        } catch(PDOException $exception) {
            // Handle connection errors
            echo "Connection error: " . $exception->getMessage();
        }
    }
}

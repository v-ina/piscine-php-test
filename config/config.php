<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_set_cookie_params(3600);

$dsn = 'mysql:host=localhost:3306;dbname=piscine_blog_php';
$username = 'root';
$password = '';

class DbConnection {
    private $dsn;
    private $username;
    private $password;

    function __construct() {
        $this->dsn = 'mysql:host=localhost:3306;dbname=piscine_blog_php';
        $this->username = 'root';
        $this->password = '';
    }

    public function connect() {
        try {
            $pdo = new PDO($this->dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
}


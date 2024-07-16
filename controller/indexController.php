<?php

class IndexController {

    public function index(){
        require_once('../config/config.php');

        $dbConnection = new DbConnection();
        $pdo = $dbConnection->connect();
        $stmt = $pdo->query("SELECT * FROM article");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        include_once('../templates/page/index.php');
    }
}

$indexController = new IndexController();
$indexController->index();
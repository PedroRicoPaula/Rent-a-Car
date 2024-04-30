<?php
try{
    $host = '127.0.0.1';
    $dbname = 'familyrentcar';
    $user = 'root';
    $pass = 'root';
    $port = '3306';
    $connection = new PDO("mysql:host=$host:$port;dbname=$dbname", $user, $pass);
} catch (Exception $e) {
    echo "Impossivel Ligar" . $e->getMessage();
    exit;
}
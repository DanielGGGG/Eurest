<?php

$server = 'localhost';
$port = '8889';
$username = 'root';
$password = 'root';
$database = 'eurest';

try{
    $conn = new PDO("mysql:host=$server;port=$port;dbname=$database;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die( "Connection failed: " . $e->getMessage());
}
<?php

// parametri di connessione
$host = 'localhost';
$db = 'film';
$user = 'root';
$pw = ''; // password
$charset = 'utf8';

// configuro data source name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// oggetto che rappresenta connessione al database
$pdo = new PDO($dsn, $user, $pw);

// query = interrogazione
$stmt = $pdo->query('SELECT * FROM film');
json_encode($stmt->fetchAll());
var_dump($stmt);
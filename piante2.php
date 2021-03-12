<?php

// parametri di connessione
$host = 'localhost';
$db = 'vivaio2';
$user = 'root';
$pw = ''; // password
$charset = 'utf8';

// configuro data source name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// oggetto che rappresenta connessione al database
$pdo = new PDO($dsn, $user, $pw);

// query = interrogazione
$stmt = $pdo->query('SELECT vivaio2.cliente.nominativo FROM vivaio2.cliente, intervento
                            WHERE vivaio2.cliente.ID = vivaio2.intervento.id_cliente');
echo json_encode($stmt->fetchAll());ì
var_dump($stmt);
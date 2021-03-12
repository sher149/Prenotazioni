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
$stmt = $pdo->query('SELECT nome, cognome, qualifica FROM vivaio2.personale 
                            WHERE anno_assunzione > 2005 and qualifica = "Operaio" ' );
echo json_encode($stmt->fetchAll());
var_dump($stmt);
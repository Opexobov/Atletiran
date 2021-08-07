<?php 

$pdo = new PDO('sqlite:DB\AtletiranPredictions.db');

$statement = $pdo->query("SELECT * FROM  Users");

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

print_r($rows);

<?php

require __DIR__. '/__connect_db.php';

$stmt = $pdo->query("SELECT * FROM housebo");

$row = $stmt->fetchAll();

//print_r($row);
echo json_encode($row);
<?php
require_once("connect.php");

$sql4 = "SELECT * FROM `Users` Where `email` like? and `Password` like?";
$result = $pdo->prepare($sql4);
$result->execute([$safe_login, $safe_pass]);
$line5 = $result->fetch();

$sql1 = "SELECT * FROM `ServicesAndTickets`";
$result = $pdo->prepare($sql1);
$result->execute();
$line = $result->fetchAll();

$sql2 = "SELECT * FROM `AnimalCatalog`";
$result = $pdo->prepare($sql2);
$result->execute();
$line2 = $result->fetchAll();


<?php
    require_once("./connect.php");
    session_start();
    $id = $_GET['ed']; 
    echo $id;
    $sql5 = "SELECT `Price` FROM `ServicesAndTickets` Where `id` = ?";
    $result = $pdo->prepare($sql5);
    $result->execute([$id]);
    $line6 = $result->fetch();

    $sql = "INSERT INTO `Purchased_Tickets`(`id_ticket`, `id_user`, `price`) 
    VALUES (?,?,?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id, $_SESSION['id'], $line6['Price']]);

    header("Location: index.php");
?>
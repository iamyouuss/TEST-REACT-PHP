<?php 
include 'db.php';
$id_msg = $_GET['id'];
$deleteRequest = "DELETE FROM messages WHERE id = $id_msg";
$deleteExec = $pdo->exec($deleteRequest);
header("Location:../public/index.php");
exit;
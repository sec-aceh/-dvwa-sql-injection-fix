<?php
// CODE RENTAN - JANGAN PAKAI INI
// $query = "SELECT * FROM users WHERE id = '$id'";

// CODE AMAN - PAKAI INI
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
?>

<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.html");
    exit;
}

echo "Welcome to the admin panel!";
?>

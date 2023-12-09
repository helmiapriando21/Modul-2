<?php
session_start();

if (isset($_GET['harga'])) {
    $_SESSION['harga'] = $_GET['harga'];
}
?>

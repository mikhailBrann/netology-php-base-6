<?php
session_start();
$count = $_SESSION['count'] ?? 0;
$count++;
$_SESSION['count'] = $count;

if ($count % 3 === 0) {
    header('Location: ./getCountPage.php');
}

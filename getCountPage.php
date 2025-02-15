<?php
session_start();
$count = $_SESSION['count'] ?? 0;

echo "Страница setCountPage.php открыта: $count раз";

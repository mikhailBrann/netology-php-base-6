<?php
$text = $_GET['text'];

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="download.txt"');
header('Content-Length: ' . strlen($text));

echo $text;
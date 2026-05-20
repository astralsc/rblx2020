<?php
ob_start();
include $_SERVER['DOCUMENT_ROOT'] . '/index.php';
echo ob_get_clean();
?>

<head>
    <base href="/">
</head>
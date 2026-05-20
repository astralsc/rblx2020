<?php
ob_start();
include $_SERVER['DOCUMENT_ROOT'] . '/Login/index.php';
$html = ob_get_clean();

$html = str_replace(
    '<head>',
    '<head><base href="/Login/">',
    $html
);

echo $html;
?>
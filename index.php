<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/public/main.php';
        break;
    case '':
        require __DIR__ . '/public/index.php';
        break;
    case '/admin':
        require __DIR__ . '/public/admin.php';
        break;
    case '/tinting':
        require __DIR__ . '/public/services/tinting.php';
        break;
    case '/cleaning':
        require __DIR__ . '/public/services/cleaning.php';
        break;
    case '/polishing':
        require __DIR__ . '/public/services/polishing.php';
        break;
    case '/protecting':
        require __DIR__ . '/public/services/protecting.php';
        break;
    case '/soundproofing':
        require __DIR__ . '/public/services/soundproofing.php';
        break;
    case '/vinyl':
        require __DIR__ . '/public/services/vinyl.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
?>
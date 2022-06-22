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
    case '/admin/tinting':
        require __DIR__ . '/public/adminpanel/tinting.php';
        break;
    case '/admin/protecting':
        require __DIR__ . '/public/adminpanel/protecting.php';
        break;
    case '/admin/cleaning':
        require __DIR__ . '/public/adminpanel/cleaning.php';
        break;
    case '/admin/polishing':
        require __DIR__ . '/public/adminpanel/polishing.php';
        break;
    case '/admin/soundproofing':
        require __DIR__ . '/public/adminpanel/soundproofing.php';
        break;
    case '/admin/vinyl':
        require __DIR__ . '/public/adminpanel/vinyl.php';
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
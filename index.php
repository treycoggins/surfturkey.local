<?php
// Get the requested URL
$requestPath = $_SERVER['REQUEST_URI'];
$viewsDir = '/pages';
// Define your routing rules
switch ($requestPath) {
    case '/':
    case'/home': 
        require __DIR__ . $viewsDir . '/home.php';
        break;
    case '/about':
        require __DIR__ . $viewsDir . '/about.php';
        break;
    case '/blog':
        require __DIR__ . $viewsDir . '/blog.php';
        break;
    case '/contact':
        require __DIR__ . $viewsDir . '/contact.php';
        break;
    case '/projects':
        require __DIR__ . $viewsDir . '/projects.php';
        break;
    case '/get-started':
        require __DIR__ . $viewsDir . '/get-started.php';
        break;
    case '/form-response':
        require __DIR__ . $viewsDir . '/form-response.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . $viewsDir . '/404.php';
    }
?>
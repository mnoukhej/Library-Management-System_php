<?php
// config/config.php

// Detect protocol
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";

// Host
$host = $_SERVER['HTTP_HOST'];

// Get project root folder automatically
$documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$currentDir   = str_replace('\\', '/', dirname(__DIR__));

// Remove document root from current directory
$projectPath = str_replace($documentRoot, '', $currentDir);

// Ensure trailing slash
$projectPath = rtrim($projectPath, '/') . '/';

define('BASE_URL', $protocol . $host . $projectPath);

// Environment
if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
    define('ENVIRONMENT', 'local');
} else {
    define('ENVIRONMENT', 'production');
}

// Error handling
if (ENVIRONMENT === 'local') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}


<?php
// Prevent direct access to this file
if (!defined('APP_RUNNING')) {
    die('Direct access not permitted');
}

// API Configuration
define('API_BASE_URL', 'https://aswservice.com/hotdealapi/');
define('API_TIMEOUT', 30);
define('ASSET_PATH', 'https://aswservice.com/hotdeal/');

// Application Configuration
define('APP_NAME', 'Hot Deal');
define('APP_VERSION', '1.0.0');
define('APP_ENV', 'development'); // or 'production'

// Session Configuration
define('SESSION_LIFETIME', 3600); // 1 hour
define('SESSION_NAME', 'hotdeal_session');

// Database Configuration (if needed later)
define('DB_HOST', 'localhost');
define('DB_NAME', 'hotdeal');
define('DB_USER', 'root');
define('DB_PASS', '');

// File Upload Configuration
define('UPLOAD_MAX_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'gif']);

// Error Reporting
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Time Zone
date_default_timezone_set('Asia/Bangkok'); 
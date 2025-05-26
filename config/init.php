<?php
// Define that the application is running
define('APP_RUNNING', true);

// Load configuration
require_once __DIR__ . '/config.php';

// Set session configuration BEFORE starting the session
ini_set('session.gc_maxlifetime', SESSION_LIFETIME);
ini_set('session.cookie_lifetime', SESSION_LIFETIME);
session_name(SESSION_NAME);

// Start session
session_start();

// Function to get configuration value
function config($key, $default = null) {
    return defined($key) ? constant($key) : $default;
}

// Function to get environment variable
function env($key, $default = null) {
    return getenv($key) ?: $default;
}

// Function to check if we're in development mode
function is_dev() {
    return config('APP_ENV') === 'development';
}

// Function to check if we're in production mode
function is_prod() {
    return config('APP_ENV') === 'production';
} 
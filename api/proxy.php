<?php
require_once __DIR__ . '/../config/init.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$endpoint = $_GET['endpoint'] ?? '';
$method = $_SERVER['REQUEST_METHOD'];

// Get request body for POST requests
$requestBody = file_get_contents('php://input');

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, API_BASE_URL . $endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, API_TIMEOUT);

// Set method and headers
if ($method === 'POST') {
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($requestBody)
    ]);
}

// Execute cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode([
        'status' => 500,
        'message' => 'API Error: ' . curl_error($ch),
        'debug' => is_dev() ? [
            'endpoint' => $endpoint,
            'method' => $method,
            'request' => $requestBody
        ] : null
    ]);
    exit();
}

// Close cURL session
curl_close($ch);

// Return the API response
echo $response; 
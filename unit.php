<?php
$unitId = $_GET['id'] ?? '';
if (empty($unitId)) {
    header('Location: /');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Details - Hot Deal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-gray-100">
    <?php include 'components/header.php'; ?>

    <div class="container mx-auto px-4 py-8">
        <div id="unit-details" class="bg-white rounded-lg shadow-lg p-6">
            <!-- Unit details will be loaded here -->
            <div class="animate-pulse">
                <div class="h-4 bg-gray-200 rounded w-3/4 mb-4"></div>
                <div class="h-4 bg-gray-200 rounded w-1/2 mb-4"></div>
                <div class="h-4 bg-gray-200 rounded w-2/3"></div>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html> 
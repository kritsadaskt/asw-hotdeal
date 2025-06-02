<?php
$unitId = $_GET['id'] ?? '';
if (empty($unitId)) {
    header('Location: /');
    exit;
}
include '../components/header.php';
?>
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
    <?php include '../components/footer.php'; ?>
</body>

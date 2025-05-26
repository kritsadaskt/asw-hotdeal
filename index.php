<?php
require_once __DIR__ . '/config/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?> - Premium Properties</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-gray-100">
    <?php include 'components/header.php'; ?>
    <?php include 'service/apiservice.php'; ?>
    <?php $banners = getHomeBanners(); ?>
    <!-- Hero Banner Section -->
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
          <?php foreach ($banners['data'] as $banner) : ?>
            <div class="swiper-slide">
              <img src="<?php echo ASSET_PATH . $banner['resource']['filePath']; ?>" alt="" class="w-full h-[600px] object-cover">
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Units Section -->
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold mb-8">ยูนิตทั้งหมด</h2>
        <div id="units-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Units will be loaded here -->
        </div>
    </div>

    <?php include 'components/login-modal.php'; ?>
    <?php include 'components/otp-modal.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jwt-decode/build/jwt-decode.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html> 
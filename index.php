<?php
  require_once __DIR__ . '/config/init.php';
  include 'components/header.php';
?>
<body class="bg-gray-100">
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
        <h2 class="text-3xl font-medium mb-8">ยูนิตทั้งหมด</h2>
        <?php include 'components/homeUnitListed.php'; ?>
    </div>

    <?php include 'components/footer.php'; ?>

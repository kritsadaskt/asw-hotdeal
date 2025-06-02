<?php
include_once 'utils.php';


$units = getUnits();
// echo '<pre>';
// print_r($units['units']);
// echo '</pre>';
?>

<div id="units-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  <?php foreach ($units['units'] as $unit) : ?>
    <?php 
      $unitImagePath = str_replace('\\', '/', $unit['headerImage']['resource']['filePath']); 
      $originalPrice = number_format($unit['sellingPrice'] / 1000000, 2);
      $specialPrice = number_format($unit['discountPrice'] / 1000000, 2);
    ?>
    <div class="unit-card flex flex-col bg-white shadow-md rounded-lg">
      <div class="aspect-square rounded-t-lg" style="background-image: url('<?php echo ASSET_PATH . $unitImagePath; ?>'); background-size: cover; background-position: center;"></div>
      <div class="px-6 py-5 flex flex-col justify-between h-full">
        <div class="top">
          <h3 class="text-lg font-medium text-neutral-700"><?php echo getProjectName($unit['projectID']); ?></h3>
          <p class="text-primary text-3xl font-bold"><?php echo $unit['unitCode']; ?></p>
          <div class="flex items-center justify-between -mt-4">
            <div>
              <span class="line-through">ปกติ <?php echo $originalPrice; ?> ล้าน</span>
              <span class="text-custom-orange text-[20px]"> พิเศษ <span class="text-[48px] font-medium"><?php echo $specialPrice; ?></span> ล้าน</span>
            </div>
          </div>
          <hr class="w-full h-[1px] bg-neutral-300 my-4">
          <div class="card-benefits mb-4">
            <?php echo $unit['benefits']; ?>
          </div>
        </div>
        <div class="card-actions flex justify-between items-center">
          <a href="/unit?id=<?php echo $unit['id']; ?>" class="btn text-neutral-700 hover:text-neutral-900">ดูรายละเอียด</a>
          <button class="btn bg-custom-orange text-white px-4 py-2 rounded-md">สนใจยูนิตนี้</button>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
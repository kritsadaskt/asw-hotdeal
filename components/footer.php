<?php 
$footerMenus = [
    'menu1' => [
        [
            'id' => 1,
            'name' => 'คอนโดมิเนียม',
            'link' => 'https://assetwise.co.th/th/condominium'
        ],
        [
            'id' => 2,
            'name' => 'บ้านและทาวน์โฮม', 
            'link' => 'https://assetwise.co.th/th/house'
        ],
        [
            'id' => 3,
            'name' => 'โปรโมชั่น',
            'link' => 'https://assetwise.co.th/th/house'
        ],
        [
            'id' => 4,
            'name' => 'รู้จักแอสเซทไวส์',
            'link' => 'https://assetwise.co.th/th/about-us'
        ],
        [
            'id' => 5,
            'name' => 'นักลงทุนสัมพันธ์',
            'link' => 'https://investor.assetwise.co.th/th/home'
        ],
        [
            'id' => 6,
            'name' => 'แอสเซทไวส์คลับ',
            'link' => 'https://assetwise.co.th/th/club'
        ],
        [
            'id' => 7,
            'name' => 'ข่าวสาร',
            'link' => 'https://assetwise.co.th/th/news'
        ],
        [
            'id' => 8,
            'name' => 'บล็อก',
            'link' => 'https://assetwise.co.th/th/blog'
        ]
    ],
    'menu2' => [
        [
            'id' => 1,
            'name' => 'Bank Matching',
            'link' => 'https://aswinno.assetwise.co.th/bankmatching'
        ]
    ],
    'menu3' => [
        [
            'id' => 1,
            'name' => 'เสนอขายที่ดิน',
            'link' => 'https://aswland.assetwise.co.th/'
        ],
        [
            'id' => 2,
            'name' => 'ฝากขาย-ฝากเช่า',
            'link' => 'https://www.assetaplus.com/'
        ],
        [
            'id' => 3,
            'name' => 'ร่วมงานกับเรา',
            'link' => 'https://careers.assetwise.co.th/'
        ]
    ],
    'menu4' => [
        [
            'id' => 1,
            'name' => 'ติดต่อเรา',
            'link' => 'https://assetwise.co.th/th/contact'
        ],
        [
            'id' => 2,
            'name' => 'ร้องเรียนธรรมาภิบาล',
            'link' => 'https://assetwise.co.th/th/appeal-form'
        ],
        [
            'id' => 3,
            'name' => 'ติดต่อผู้คุ้มครองข้อมูลส่วนบุคคล',
            'link' => 'https://services.assetwise.co.th/DSRM/DSRForm'
        ],
        [
            'id' => 4,
            'name' => 'นโยบายข้อมูลส่วนบุคคล',
            'link' => 'https://assetwise.co.th/privacy-policy/'
        ]
    ]
];
?>
<footer class="bg-neutral-800 pt-9 pb-4">
  <div class="container mx-auto px-4">
    <div class="w-full flex flex-col md:flex-row">
      <div class="w-full md:w-4/12 flex flex-col gap-3 mb-5 md:mb-0">
          <img src='https://assetwise.co.th/wp-content/themes/seed-spring/img/th/logo-asw.png' alt="" width="160" height="35" />
          <h4 class="text-white text-[30px]">ติดตามแอสเซทไวส์</h4>
          <div class="social-listed flex w-2/3 gap-3">
              <a href="https://th-th.facebook.com/AssetWiseThailand/" title="Facebook">
                <img src="/assets/images/fb-o.png" alt="Facbook" width="30" height="30">
              </a>
              <a href="https://page.line.me/assetwise" title="Line">
                  <img src="/assets/images/line-o.png" alt="Line" width="30" height="30">
              </a>
              <a href="https://www.instagram.com/assetwisethailand" title="Instagram">
                  <img src="/assets/images/ig-o.png" alt="Instagram" width="30" height="30">
              </a>
              <a href="https://www.youtube.com/c/AssetwiseChannel" title="Youtube">
                  <img src="/assets/images/yt-o.png" alt="Youtube" width="30" height="30">
              </a>
              <a href="https://www.tiktok.com/@assetwise" title="Tiktok">
                  <img src="/assets/images/tt-o.png" alt="Tiktok" width="30" height="30">
              </a>
          </div>
      </div>
      <div class="w-full md:w-8/12 grid grid-cols-2 md:grid-cols-4 gap-5 md:gap-0 md:flex-row justify-between">
          <div class="menu-footer">
              <h4 class="text-white text-[20px] mb-3">แอสเซทไวส์</h4>
              <ul class="flex flex-col gap-2">
                  <?php foreach ($footerMenus['menu1'] as $menu) : ?>
                    <li>
                      <a href="<?php echo $menu['link']; ?>" class="text-neutral-400 text-[16px] hover:text-white transition"><?php echo $menu['name']; ?></a>
                    </li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <div class="menu-footer">
              <h4 class="text-white text-[20px] mb-3">บริการ</h4>
              <ul class="flex flex-col gap-2">
                  <?php foreach ($footerMenus['menu2'] as $menu) : ?>
                    <li>
                      <a href="<?php echo $menu['link']; ?>" class="text-neutral-400 text-[16px] hover:text-white transition"><?php echo $menu['name']; ?></a>
                    </li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <div class="menu-footer">
              <h4 class="text-white text-[20px] mb-3">สนใจทำธุรกิจกับเรา</h4>
              <ul class="flex flex-col gap-2">
                  <?php foreach ($footerMenus['menu3'] as $menu) : ?>
                    <li>
                      <a href="<?php echo $menu['link']; ?>" class="text-neutral-400 text-[16px] hover:text-white transition"><?php echo $menu['name']; ?></a>
                    </li>
                  <?php endforeach; ?>
              </ul>
          </div>
          <div class="menu-footer">
              <h4 class="text-white text-[20px] mb-3">ติดต่อ</h4>
              <ul class="flex flex-col gap-2">
                  <?php foreach ($footerMenus['menu4'] as $menu) : ?>
                    <li>
                      <a href="<?php echo $menu['link']; ?>" class="text-neutral-400 text-[16px] hover:text-white transition"><?php echo $menu['name']; ?></a>
                    </li>
                  <?php endforeach; ?>
              </ul>
          </div>
      </div>
    </div>
    <p class="text-neutral-400 text-sm text-center pt-4 mt-4 border-t border-t-neutral-400">© สงวนลิขสิทธิ์ พ.ศ. 2568 บริษัท แอสเซทไวส์ จำกัด (มหาชน)</p>
  </div>
</footer>

  <?php include 'login-modal.php'; ?>
  <?php include 'otp-modal.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jwt-decode/build/jwt-decode.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/animejs/lib/anime.iife.min.js"></script>
  <script>
    const { animate, stagger } = anime;
  </script>
  <script src="assets/js/main.js"></script>
</body>
</html> 
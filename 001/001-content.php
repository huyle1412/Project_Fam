<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<style>
    
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;

    }
    .swiper-pagination.swiper-pagination-bullets{
        bottom: 400px;
    }
  </style>
<div class="001">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(images/banner/1-1.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(images/banner/1-2.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(images/banner/1-3.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(images/banner/1-4.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(images/banner/1-5.jpg)"></div>

            <div class="swiper-slide" style="background-image:url(images/banner/1-1.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(images/banner/1-2.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(images/banner/1-3.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(images/banner/1-4.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(images/banner/1-5.jpg)"></div>
        </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 4,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</div>


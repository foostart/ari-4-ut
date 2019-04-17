<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-196">
    <div class="homepage_brands">
        <div class="container">
            <h3 class="page_heading">BRANDS</h3>
            <div class="row">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#"><img src="images/custom_brand1_img.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="images/custom_brand2_img.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="images/custom_brand3_img.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="images/custom_brand4_img.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="images/custom_brand5_img.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="images/custom_brand6_img.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
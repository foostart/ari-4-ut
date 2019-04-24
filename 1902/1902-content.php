<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1902">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php echo $url_path ?>/images/demo1.jpg" alt="error" class="img-responsive"/></div>
                        <div class="swiper-slide"><img src="<?php echo $url_path ?>/images/demo2.jpg" alt="error" class="img-responsive"/></div>
                        <div class="swiper-slide"><img src="<?php echo $url_path ?>/images/demo3.jpg" alt="error" class="img-responsive"/></div>
                        <div class="swiper-slide"><img src="<?php echo $url_path ?>/images/demo2.jpg" alt="error" class="img-responsive"/></div>
                        <div class="swiper-slide"><img src="<?php echo $url_path ?>/images/demo1.jpg" alt="error" class="img-responsive"/></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
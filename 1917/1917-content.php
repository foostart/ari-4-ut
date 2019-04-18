<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1917">
    <div class="container">

        <div class="wrapper-img">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1460686998899">
                        <a href="#" target="_self" class="image-wrapper">
                            <img width="1170" height="380" src="images/about-banner.jpg" class="img-responsive" alt="" sizes="(max-width: 1170px) 100vw, 1170px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>

        <div class="wrapper-text">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wpb_wrapper">
                        <ul class="about-menu">
                            <li><a href="#">Introduction </a></li>
                            <li><a href="#">Protection</a></li>
                            <li><a href="#"> Customer Reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
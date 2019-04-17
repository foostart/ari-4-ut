<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-200">
    <div class="container-fluid">
        <div class="row">
                Gentelella - Bootstrap Admin Template by
                <a href="#"> Colorlib</a>
            </footer>
        </div>
        <div id="back-to-top"><i class="fa fa-chevron-up"></i></div>
    </div>
</div>
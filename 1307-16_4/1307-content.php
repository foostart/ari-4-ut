<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1307">
    <div class="clearfix"></div>
    <div class="container">
        <div class="logo">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="search">
                        <input aria-hidden="true" placeholder="Search" class="fa fa-search" id="search-input" name="search-input" type="text">
                        <button id="search-click" type="submit" class="s-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="img-logo">
                        <img src="<?php echo $url_path ?>/images/logo.png" alt=""/>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="logoright">
                        <ul class="checkout">
                            <li><a class="heart" href="#"><i class="fa fa-heart-o"></i>wishlist</a></li>
                            <li><a class="cart" href="#"><i class="fa fa-shopping-cart"></i>checklist</a></li>
                        </ul>
                        <div class="w_likes">
                            <span>3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="#">CATEGORY</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a class="home" href="#">HOME</a></li>
                    <li  class="active"><a href="#">SHOP</a></li>
                    <li><a class="access" href="#">ACCESSORIES</a></li> 
                    <li><a class="pages" href="#">PAGES</a></li>
                    <li><a class="block" href="#">BLOCK</a></li> 

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">  <img src="images/bag.png" alt=""/> Cart:2Item</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="clearfix"></div>
</div>
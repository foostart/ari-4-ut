<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1900">
    <div class="header-top">
        <div class="container">
            <!--First top-->
            <div class="row">
                <div class="contact-row">
                    <div class="col-md-6 col-sm-12">
                        <div class="left-contact">
                            <p>
                                <i class="fa fa-phone-square"></i> Call Center Support 24/7: 
                                <span class="span-text">040 3824 668</span> or 
                                <span class="span-text">909 3305 44221</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="top-extra-link">
                            <a href="#"><i class="fa fa-user"></i> My Account</a>
                            <a href="#"><i class="fa fa-heart"></i> Wishlist</a>
                            <a href="#"><i class="fa fa-toggle-on"></i> Compare</a>
                            <a href="#"><i class="fa fa-train"></i> Delivery</a>
                            <a href="#"><i class="fa fa-comment"></i> Help</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <!--Second top-->
            <div class="row">
                <div class="header-second">
                    <div class="col-md-4 col-sm-3">
                        <div class="logo-top">
                            <a class="logo" href="#">
                                <img src="images/logo-top.png" class="img-responsive" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="smart-search">
                            <div class="select-category">
                                <a href="#" class="category-toggle-link">All Categories</a>
                                <button class="btn-collapse" type="button" data-toggle="collapse" data-target="#collap" aria-expanded="false"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                <ul id="collap" class="list-category-toggle sub-menu-top collapse" style="">
                                    <li class="active"><a href="#" data-filter="">All Categories</a></li>
                                    <li class="item"><a href="#" data-filter=".accessories">Accessories</a></li>
                                    <li class="item"><a href="#" data-filter=".android">Android</a></li>
                                    <li class="item"><a href="#" data-filter=".bags">Bags</a></li>
                                    <li class="item"><a href="#" data-filter=".basketball">Basketball</a></li>
                                    <!--<div class="mCSB_scrollTools"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; height: 30px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position: relative; line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div>-->
                                </ul>
                            </div>
                            <form class="smart-search-form" action="#">
                                <input type="text" name="s" value="I am shopping for..." onfocus="">
                                <input type="hidden" name="post_type" value="product">
                                <input class="cat-value" type="hidden" name="product_cat" value="">
                                <button class="icon-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <div class="mini-cart">
                            <button class="icon-cart" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                            <a href="#" class="header-mini-cart">
                                <span class="total-mini-cart-item">
                                    <span class="cart-item-count set-cart-number">0</span> Item(s) - 
                                </span>
                                <span class="total-mini-cart-price set-cart-price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>0.00</span>
                                </span>
                            </a>
                            <div class="content-mini-cart">
                                <h2>(<span class="cart-item-count set-cart-number">0</span>) ITEMS IN MY CART</h2>
                                <div class="mini-cart-content mini-cart-main-content"></div>                    
                                <div class="total-default hidden"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-top">
        <div class="content">
            <div class="container">
                <div class="row">

                    <!-- menu nav -->
                    <div class="menunav">
                        <span class="menuiconnav">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <div class="menumobile">
                            <div class="col-sm-10 col-md-8 col-xs-2 mmcontext">
                                <ul>
                                    <!--Item Home-->
                                    <li>
                                        <div class="title">
                                            <a href="#">HOME <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="context">
                                            <ul>
                                                <li><a href="#"><p>Home 1</p></a></li>
                                                <li><a href="#"><p>Home 2</p></a></li>
                                                <li><a href="#"><p>Home 3</p></a></li>
                                                <li><a href="#"><p>Home 4</p></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--Item Vendors-->
                                    <li>
                                        <div class="title">
                                            <a href="#">Vendors <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="context">
                                            <ul>
                                                <li><a href="#"><p>Vendors page</p></a></li>
                                                <li><a href="#"><p>Vendor Dashboard</p></a></li>
                                                <li><a href="#"><p>Orders</p></a></li>
                                                <li><a href="#"><p>Shop Settings</p></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--Item Shop-->
                                    <li>
                                        <div class="title">
                                            <a href="#">Shops <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </div>

                                        <div class="contextshop">
                                            <div class="col-sm-4">
                                                <h2>Shop Pages</h2>
                                                <div class="contextinformation">
                                                    <ul>
                                                        <li><a href="#"><p>Shop</p></a></li>
                                                        <li><a href="#"><p>Shop list</p></a></li>
                                                        <li><a href="#"><p>Shop list full</p></a></li>
                                                        <li><a href="#"><p>Shop grid – Sidebar style2</p></a></li>
                                                        <li><a href="#"><p>Shop list – Sidebar style2</p></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h2>Product Pages</h2>
                                                <div class="contextinformation">
                                                    <ul>
                                                        <li><a href="#"><p>Product Simple</p></a></li>
                                                        <li><a href="#"><p>Product Variable</p></a></li>
                                                        <li><a href="#"><p>Product Grouped</p></a></li>
                                                        <li><a href="#"><p>Product External</p></a></li>
                                                        <li><a href="#"><p>Product Deals</p></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h2>MORE PAGES...</h2>
                                                <div class="contextinformation">
                                                    <ul>
                                                        <li><a href="#"><p>Cart</p></a></li>
                                                        <li><a href="#"><p>Checkout</p></a></li>
                                                        <li><a href="#"><p>My account</p></a></li>
                                                        <li><a href="#"><p>Wishlist</p></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Item Blog-->
                                    <li>
                                        <div class="title">
                                            <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="context">
                                            <ul>
                                                <li><a href="#"><p>Blog default</p></a></li>
                                                <li><a href="#"><p>Blog full</p></a></li>
                                                <li><a href="#"><p>Blog list</p></a></li>
                                                <li>
                                                    <a href="#"><p>Blog grid <i class="fa fa-angle-right" aria-hidden="true"></i></p></a>
                                                    <!--Sub menu for parent-->
                                                    <div class="subcontext">
                                                        <ul>
                                                            <li><a href="#"><p>Blog grid</p></a></li>
                                                            <li><a href="#"><p>Blog grid – 2 column</p></a></li>
                                                            <li><a href="#"><p>Blog grid – 4 column</p></a></li>
                                                            <li><a href="#"><p>Blog grid – 5 column</p></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#"><p>Posts Detail <i class="fa fa-angle-right" aria-hidden="true"></i></p></a>
                                                    <div class="subcontext">
                                                        <ul>
                                                            <li><a href="#"><p>Post format: Standard</p></a></li>
                                                            <li><a href="#"><p>Post format: Image</p></a></li>
                                                            <li><a href="#"><p>Post format: Gallery</p></a></li>
                                                            <li><a href="#"><p>Post format: Video</p></a></li>
                                                            <li><a href="#"><p>Post format: Audio</p></a></li>
                                                            <li><a href="#"><p>Post: Left Sidebar</p></a></li>
                                                            <li><a href="#"><p>Post: No Sidebar</p></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--Item MegaMenu-->
                                    <li>
                                        <div class="title">
                                            <a href="#">Mega Menu <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="contextmega">
                                            <div class="col-sm-4">
                                                <div class="megaone">
                                                    <h2>Categories</h2>
                                                    <div class="megacategory">
                                                        <ul>
                                                            <li><a href="#"><p>Shop</p></a></li>
                                                            <li><a href="#"><p>Shop list</p></a></li>
                                                            <li><a href="#"><p>Shop list full</p></a></li>
                                                            <li><a href="#"><p>Shop grid – Sidebar style2</p></a></li>
                                                            <li><a href="#"><p>Shop list – Sidebar style2</p></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="megaone">
                                                    <h2>Deal Of The Day</h2>
                                                    <a href="#" class="image">
                                                        <img src="./images/banner-header.jpg" alt="null">
                                                    </a>
                                                    <h4>Travel shop</h4>
                                                    <h4 class="upto">Upto</h4>
                                                    <h3 class="sale">70% off</h3>
                                                    <a class="shop-button" href="#">shop now</a>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="megaone">
                                                    <h2>Top Sellers</h2>
                                                    <div class="megacategory">
                                                        <ul>
                                                            <li><a href="#"><p>Shop</p></a></li>
                                                            <li><a href="#"><p>Shop list</p></a></li>
                                                            <li><a href="#"><p>Shop list full</p></a></li>
                                                            <li><a href="#"><p>Shop grid – Sidebar style2</p></a></li>
                                                            <li><a href="#"><p>Shop list – Sidebar style2</p></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!--Item About-->
                                    <li>
                                        <div class="title">
                                            <a href="#">About</a>
                                        </div>
                                    </li>
                                    <!--Item Contact-->
                                    <li>
                                        <div class="title">
                                            <a href="#">Contact</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="buttonclosemenu">
                            <span><i class="fa fa-times" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <a href="#" class="toggle-mobile-menu"><span>Menu</span></a>

                    <div class="right-menu col-sm-2 col-xs-6">
                        <div class="right-category-dropdown">
                            <span class="menu-right" data-toggle="collapse" data-target="#collape">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </span>
                        </div>

                        <ul id="collape" class="list-category-dropdown collapse">
                            <li class="has-cat-mega">
                                <a href="#">Computers
                                    <img width="20" height="16" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/03/cat2.png" class="attachment-full size-full" alt="">
                                </a>
                                <!--                                        <div class="cat-mega-menu cat-mega-style1">
                                                                            <div class="vc_row wpb_row">
                                                                                <div class="wpb_column column_container col-sm-4">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1459225921151 list-cat-mega-menu">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <h2 class="title-cat-mega-menu">Women’s</h2>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Dresses</a></li>
                                                                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                                                                        <li><a href="#">Blouses &amp; Shirts</a></li>
                                                                                                        <li><a href="#">Tops &amp; Tees</a></li>
                                                                                                        <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                                                                        <li><a href="#">Intimates</a></li>
                                                                                                        <li><a href="#">Swimwear</a></li>
                                                                                                        <li><a href="#">Pants &amp; Capris</a></li>
                                                                                                        <li><a href="#">Sweaters</a></li>
                                                                                                        <li><a href="#">Accessories</a></li>
                                                                                                    </ul>
                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wpb_column column_container col-sm-4">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  list-cat-mega-menu">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <h2 class="title-cat-mega-menu">Men’s</h2>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Tops &amp; Tees</a></li>
                                                                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                                                                        <li><a href="#">Underwear</a></li>
                                                                                                        <li><a href="#">Shirts</a></li>
                                                                                                        <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                                                                        <li><a href="#">Jeans</a></li>
                                                                                                        <li><a href="#">Pants</a></li>
                                                                                                        <li><a href="#">Suits &amp; Blazer</a></li>
                                                                                                        <li><a href="#">Shorts</a></li>
                                                                                                        <li><a href="#">Accessories</a></li>
                                                                                                    </ul>
                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wpb_column column_container col-sm-4">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_single_image wpb_content_element vc_align_left   zoom-image-thumb">
                                
                                                                                                <figure class="wpb_wrapper vc_figure">
                                                                                                    <a href="#" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="340" height="290" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/03/cat-computer.png" class="vc_single_image-img attachment-full" alt="" srcset="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/03/cat-computer.png 340w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/03/cat-computer-300x256.png 300w" sizes="(max-width: 340px) 100vw, 340px"></a>
                                                                                                </figure>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                            </li>
                            <li class="has-cat-mega">
                                <a href="#">Electronis
                                    <img width="20" height="19" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/03/cat3.png" class="attachment-full size-full" alt="">
                                </a>
                                <!--                                        <div class="cat-mega-menu cat-mega-style2">
                                                                            <h2 class="title-cat-mega-menu">Special products</h2>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-sm-3">
                                                                                    <div class="item-category-featured-product first-item">
                                                                                        <div class="product-thumb">
                                                                                            <a class="product-thumb-link" href="http://7uptheme.com/wordpress/aloshop/product/blackberry-passpost-2/"><img width="199" height="239" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-199x239.jpg" class="first-thumb wp-post-image" alt="" srcset="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-199x239.jpg 199w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2.jpg 600w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-250x300.jpg 250w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-300x360.jpg 300w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-268x322.jpg 268w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-150x180.jpg 150w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-100x120.jpg 100w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-213x256.jpg 213w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-200x240.jpg 200w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/2-2-450x540.jpg 450w" sizes="(max-width: 199px) 100vw, 199px"><img width="199" height="239" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-199x239.jpg" class="second-thumb" alt="" srcset="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-199x239.jpg 199w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-600x720.jpg 600w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-250x300.jpg 250w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-768x922.jpg 768w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-300x360.jpg 300w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-268x322.jpg 268w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-150x180.jpg 150w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-100x120.jpg 100w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-213x256.jpg 213w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-450x540.jpg 450w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-200x240.jpg 200w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1.jpg 800w" sizes="(max-width: 199px) 100vw, 199px"></a>
                                                                                            <div class="product-info-cart">
                                                                                                <div class="product-extra-link product">
                                                                                                    <a href="/wordpress/aloshop/home-6/?add_to_wishlist=866" class="add_to_wishlist product-wishlist" rel="nofollow" data-product-id="866"><i class="fa fa-heart-o"></i></a>
                                                                                                    <a href="/wordpress/aloshop/home-6/?action=yith-woocompare-add-product&amp;id=866" class="product-compare compare compare-link" data-product_id="866"><i class="fa fa-toggle-on"></i></a>
                                                                                                    <a data-product-id="866" href="http://7uptheme.com/wordpress/aloshop/product/blackberry-passpost-2/" class="product-quick-view quickview-link"><i class="fa fa-search"></i></a>
                                                                                                </div>
                                                                                                <a href="/wordpress/aloshop/home-6/?add-to-cart=866" rel="nofollow" data-product_id="866" data-product_sku="a10083" data-quantity="1" class="add_to_cart_button addcart-link product_type_simple"><i class="fa fa-shopping-basket"></i>Add to cart</a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product-info">
                                                                                            <h3 class="title-product"><a href="http://7uptheme.com/wordpress/aloshop/product/blackberry-passpost-2/">Blackberry Passpost</a></h3>
                                                                                            <div class="info-price">
                                                                                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>646.00</span></ins>
                                                                                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>686.00</span></del></div>
                                                                                            <div class="product-rating ">
                                                                                                <div class="inner-rating" style="width:0%;"></div><span>(0s)</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-3">
                                                                                    <div class="item-category-featured-product first-item">
                                                                                        <div class="product-thumb">
                                                                                            <a class="product-thumb-link" href="http://7uptheme.com/wordpress/aloshop/product/sony-z5-premium-2/"><img width="199" height="239" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-199x239.jpg" class="first-thumb wp-post-image" alt="" srcset="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-199x239.jpg 199w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-600x720.jpg 600w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-250x300.jpg 250w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-768x922.jpg 768w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-300x360.jpg 300w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-268x322.jpg 268w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-150x180.jpg 150w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-100x120.jpg 100w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-213x256.jpg 213w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-450x540.jpg 450w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1-200x240.jpg 200w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/3-1.jpg 800w" sizes="(max-width: 199px) 100vw, 199px"><img width="199" height="239" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-199x239.jpg" class="second-thumb" alt="" srcset="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-199x239.jpg 199w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1.jpg 600w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-250x300.jpg 250w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-300x360.jpg 300w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-268x322.jpg 268w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-150x180.jpg 150w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-100x120.jpg 100w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-213x256.jpg 213w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-450x540.jpg 450w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/10-1-200x240.jpg 200w" sizes="(max-width: 199px) 100vw, 199px"></a>
                                                                                            <div class="product-info-cart">
                                                                                                <div class="product-extra-link product">
                                                                                                    <a href="/wordpress/aloshop/home-6/?add_to_wishlist=860" class="add_to_wishlist product-wishlist" rel="nofollow" data-product-id="860"><i class="fa fa-heart-o"></i></a>
                                                                                                    <a href="/wordpress/aloshop/home-6/?action=yith-woocompare-add-product&amp;id=860" class="product-compare compare compare-link" data-product_id="860"><i class="fa fa-toggle-on"></i></a>
                                                                                                    <a data-product-id="860" href="http://7uptheme.com/wordpress/aloshop/product/sony-z5-premium-2/" class="product-quick-view quickview-link"><i class="fa fa-search"></i></a>
                                                                                                </div>
                                                                                                <a href="/wordpress/aloshop/home-6/?add-to-cart=860" rel="nofollow" data-product_id="860" data-product_sku="a10077" data-quantity="1" class="add_to_cart_button addcart-link product_type_simple"><i class="fa fa-shopping-basket"></i>Add to cart</a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product-info">
                                                                                            <h3 class="title-product"><a href="http://7uptheme.com/wordpress/aloshop/product/sony-z5-premium-2/">Sony Z5 Premium</a></h3>
                                                                                            <div class="info-price">
                                                                                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>620.00</span></ins>
                                                                                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>648.00</span></del></div>
                                                                                            <div class="product-rating ">
                                                                                                <div class="inner-rating" style="width:0%;"></div><span>(0s)</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-3">
                                                                                    <div class="item-category-featured-product first-item">
                                                                                        <div class="product-thumb">
                                                                                            <a class="product-thumb-link" href="http://7uptheme.com/wordpress/aloshop/product/ipad-4-16gb-hdm-2/"><img width="199" height="239" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1-199x239.jpg" class="first-thumb wp-post-image" alt="" srcset="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1-199x239.jpg 199w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1.jpg 600w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1-250x300.jpg 250w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1-268x322.jpg 268w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1-300x360.jpg 300w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1-150x180.jpg 150w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1-213x256.jpg 213w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1-200x240.jpg 200w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/9-1-450x540.jpg 450w" sizes="(max-width: 199px) 100vw, 199px"><img width="199" height="239" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1-199x239.jpg" class="second-thumb" alt="" srcset="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1-199x239.jpg 199w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1.jpg 600w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1-250x300.jpg 250w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1-268x322.jpg 268w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1-300x360.jpg 300w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1-150x180.jpg 150w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1-213x256.jpg 213w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1-200x240.jpg 200w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/05/5-1-450x540.jpg 450w" sizes="(max-width: 199px) 100vw, 199px"></a>
                                                                                            <div class="product-info-cart">
                                                                                                <div class="product-extra-link product">
                                                                                                    <a href="/wordpress/aloshop/home-6/?add_to_wishlist=848" class="add_to_wishlist product-wishlist" rel="nofollow" data-product-id="848"><i class="fa fa-heart-o"></i></a>
                                                                                                    <a href="/wordpress/aloshop/home-6/?action=yith-woocompare-add-product&amp;id=848" class="product-compare compare compare-link" data-product_id="848"><i class="fa fa-toggle-on"></i></a>
                                                                                                    <a data-product-id="848" href="http://7uptheme.com/wordpress/aloshop/product/ipad-4-16gb-hdm-2/" class="product-quick-view quickview-link"><i class="fa fa-search"></i></a>
                                                                                                </div>
                                                                                                <a href="/wordpress/aloshop/home-6/?add-to-cart=848" rel="nofollow" data-product_id="848" data-product_sku="a10065" data-quantity="1" class="add_to_cart_button addcart-link product_type_simple"><i class="fa fa-shopping-basket"></i>Add to cart</a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="product-info">
                                                                                            <h3 class="title-product"><a href="http://7uptheme.com/wordpress/aloshop/product/ipad-4-16gb-hdm-2/">iPad 4 16Gb HDM</a></h3>
                                                                                            <div class="info-price">
                                                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>135.00</span>
                                                                                            </div>
                                                                                            <div class="product-rating ">
                                                                                                <div class="inner-rating" style="width:0%;"></div><span>(0s)</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                            </li>
                            <li class="">
                                <a href="http://7uptheme.com/wordpress/aloshop/product-category/fashion/">Fashion
                                    <img width="20" height="19" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/03/cat4.png" class="attachment-full size-full" alt="">
                                </a>

                            </li>
                            <li class="has-cat-mega">
                                <a href="http://7uptheme.com/wordpress/aloshop/product-category/food/">Food
                                    <img width="20" height="21" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/03/cat7.png" class="attachment-full size-full" alt="">
                                </a>
                                <!--                                        <div class="cat-mega-menu cat-mega-style1">
                                                                            <div class="vc_row wpb_row">
                                                                                <div class="wpb_column column_container col-sm-4">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1459225921151 list-cat-mega-menu">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <h2 class="title-cat-mega-menu">Women’s</h2>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Dresses</a></li>
                                                                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                                                                        <li><a href="#">Blouses &amp; Shirts</a></li>
                                                                                                        <li><a href="#">Tops &amp; Tees</a></li>
                                                                                                        <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                                                                        <li><a href="#">Intimates</a></li>
                                                                                                        <li><a href="#">Swimwear</a></li>
                                                                                                        <li><a href="#">Pants &amp; Capris</a></li>
                                                                                                        <li><a href="#">Sweaters</a></li>
                                                                                                        <li><a href="#">Accessories</a></li>
                                                                                                    </ul>
                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wpb_column column_container col-sm-4">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  list-cat-mega-menu">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <h2 class="title-cat-mega-menu">Men’s</h2>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Tops &amp; Tees</a></li>
                                                                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                                                                        <li><a href="#">Underwear</a></li>
                                                                                                        <li><a href="#">Shirts</a></li>
                                                                                                        <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                                                                        <li><a href="#">Jeans</a></li>
                                                                                                        <li><a href="#">Pants</a></li>
                                                                                                        <li><a href="#">Suits &amp; Blazer</a></li>
                                                                                                        <li><a href="#">Shorts</a></li>
                                                                                                        <li><a href="#">Accessories</a></li>
                                                                                                    </ul>
                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wpb_column column_container col-sm-4">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_single_image wpb_content_element vc_align_left   zoom-image-thumb">
                                
                                                                                                <figure class="wpb_wrapper vc_figure">
                                                                                                    <a href="#" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="340" height="290" src="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/06/cat-accessories.png" class="vc_single_image-img attachment-full" alt="" srcset="http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/06/cat-accessories.png 340w, http://7uptheme.com/wordpress/aloshop/wp-content/uploads/2016/06/cat-accessories-300x256.png 300w" sizes="(max-width: 340px) 100vw, 340px"></a>
                                                                                                </figure>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                            </li>
                        </ul>
                        <a href="#" class="expand-category-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
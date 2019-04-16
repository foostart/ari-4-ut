<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

        <div class="type-232">
            <div class="container">
                <!--Menu-->
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo logo-header">
                            <a href="#"><h1><span><i class="fa fa-building-o" aria-hidden="true"></i>BIGC</span></h1></a>	
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="main-nav">
                            <ul class="main-menu">
                                <li><a href="#">Home</a> </li>
                                <li><a href="#">featureds <sup class="title-hot">Hot</sup></a></li>           
                                <li><a href="#">Shop categories<sup class="title-new">New</sup></a></li> 
                                <li><a href="#">Blog</a> </li>                                
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                            <div class="mobile-menu">
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--Link-->
                <div class="main-content content-single">
                    <div class="bread-crumb">
                        <a href="#">Home</a>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <span><a href="#">Blog-Single Post </a><i class="fa fa-chevron-right" aria-hidden="true"></i></span> 
                        <span><a href="#">Hot Deals</a></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--HOT DEALS-->
                <h2 class="post-title">HOT DEALS</h2>
                <div class="post-info">
                    <p>
                        <label>Post by:</label> 
                        <a href="#" class="post-author">7uptheme</a> 
                        <span class="post-date">- on Jan 18, 2016</span>
                    </p>
                    <div class="share-social">
                        <label>Share:</label>
                        <a href="#"><i class="fa fa-facebook-square face"></i></a>
                        <a href="#"><i class="fa fa-twitter-square twit"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square pin"></i></a>
                        <a href="#"><i class="fa fa-youtube-square you"></i></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--NAV TABS-->
                <div class="product-grid tab-content">
                    <div role="tabpanel" class="tab-pane active" id="furniture">
                        <ul class="list-product row list-unstyled">            
                            <li class="col-md-3 col-sm-6 col-xs-12">
                                <div class="item-product">
                                    <div class="item-product-thumb">
                                        <a href="#"><img class="img-responsive" src="<?php echo $url_path ?>/images/4.png" alt=""></a>
                                    </div>
                                    <div class="item-product-info">
                                        <h3 class="title-product"><a href="#">DUBHEN CAUNOITENG KUG</a></h3>
                                        <div class="info-price">
                                            <span>$50.00</span>
                                            <del>$59.80</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12">
                                <div class="item-product">
                                    <div class="item-product-thumb">
                                        <a href="#" class="product-thumb-link"><img src="<?php echo $url_path ?>/images/16.png" alt=""></a>
                                    </div>
                                    <div class="item-product-info">
                                        <h3 class="title-product"><a href="#">XOCRAC HENCIN KOOPER</a></h3>
                                        <div class="info-price">
                                            <span>$30.00 </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12">
                                <div class="item-product">
                                    <div class="item-product-thumb">
                                        <a href="#" class="product-thumb-link"><img src="<?php echo $url_path ?>/images/11.png" alt=""></a>  
                                    </div>
                                    <div class="item-product-info">
                                        <h3 class="title-product"><a href="#">COOC HUYING PHALE</a></h3>
                                        <div class="info-price">
                                            <span>$17.00 </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 col-xs-12">
                                <div class="item-product">
                                    <div class="item-product-thumb">
                                        <a href="#" class="product-thumb-link"><img src="<?php echo $url_path ?>/images/19.png" alt=""></a>
                                    </div>
                                    <div class="item-product-info">
                                        <h3 class="title-product"><a href="#">APPLE RED COOL</a></h3>
                                        <div class="info-price">
                                            <span>$69.23</span>
                                            <del>$75.99</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Bath&Bed -->
                </div>

                <p class="tab">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                <p class="tab">Poluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanti um, totam aperiam, eaque ipsa quae ab illo inventore.</p>
                <!---------------------------------->
                <div class="list-post-tags">
                    <label>Tags:</label> 
                    <a href="#">Furniter</a> 
                    <a href="#">Table</a> 
                    <a href="#">Chair</a> 
                    <a href="#">Wood</a> 
                </div>
                <!------------------------------>
                <div class="control-post">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                            <a href="#" class="prev-post"><i class="fa fa-arrow-left" aria-hidden="true"> Prev</i></a>
                            <h3 class=" hidden-xs"><a href="#">Aliquam erat volutpat tincidunt metus</a></h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <a href="#" class="next-post">Next<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            <h3 class="hidden-xs"><a href="#">Erat volutpat tincidunt metus</a></h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>             
            <!-----------Footer------------>
            <div id="footer">
                <div class="footer footer-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="logo logo-footer">
                                    <a href="#" class="sub-title"><span></span><i class="fa fa-building-o" aria-hidden="true"></i> bigc.ltd.,</a>
                                </div>
                                <div class="download">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <img class="img-responsive" src="images/img-download.png"alt="">
                                        </div>	
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <p>Architecto beatae vitae dicta sunt explicabo. Nemo enim</p>
                                            <ul class="download-link list-unstyled">
                                                <li><a href="#"><span><i class="fa fa-download" aria-hidden="true"></i></span>Download Profile</a></li>
                                                <li><a href="#"><span><i class="fa fa-download" aria-hidden="true"></i></span>Download Catalog</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-phone">
                                    <label class="sub-title">hot-line:</label>
                                    <span class="phone-number">(090) 345 9669</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-nav">
                                    <h2 class="sub-title">Account</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Orders and Returns</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Search Terms</a></li>
                                        <li><a href="#">Advanced Search</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="newsletter">
                                    <h2 class="sub-title">newsletter</h2>
                                    <p>Make sure you dont miss interesting happenings by joining our newsletter program.</p>
                                    <form>
                                        <input type="text" value="Email" onfocus="if (this.value == this.defaultValue)
                                                    this.value = ''" onblur="if (this.value == '')
                                                                this.value = this.defaultValue">
                                        <input class="btn-link-default" type="submit" value="subscribe">
                                    </form>
                                </div>
                                <ul class="list-inline share-social">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="menu-footer">
                                        <ul class="list-inline">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Terms of Service </a></li>
                                            <li><a href="#">Privacy Guidelines</a></li>
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="copyright">
                                        <p>Design by <a href="#">7uptheme.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-230"> 
    <!--MENU-->
    <div class="header">
        <!-- Top Contact Info -->
        <div class="row logo-top-info">
            <div class="container">
                <div class="col-md-4 logo">
                    <!-- Main Logo -->
                    <a href="#" rel="home" >
                        <img src="<?php echo $url_path ?>/images/logo.png" alt="logo" >
                    </a>
                    <h1 class="site-title hidden">
                        <a href="#" rel="home">Offshore</a>
                    </h1>
                    <p class="site-description hidden">Responsive Gas &amp; Oil Industry HTML Template</p>  
                </div>
                <div class="col-md-8 top-info-social">
                    <div class="pull-right">
                        <div class="top-widgets">
                            <div class="widget">
                                <h3>Call Us</h3>			
                                <p>1800 425 4646</p>
                            </div>
                            <div class="widget">
                                <h3>Email Us</h3>			
                                <p>info@offshoreindustry.com</p>
                            </div>
                            <div class="widget">
                                <h3>Market</h3>
                                <p>143.17<span class="forex"><i class="fa fa-caret-down" aria-hidden="true"></i> -0.17 </span></p>
                            </div>
                            <div class="widget soc">
                                <div class="social">                
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>                    
                                    </ul>
                                </div>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="navbar">
            <nav class="navbar navbar-default navbar-static-top main-menu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collap">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="container">
                    <div id="navbar" class="navbar-collapse">
                        <ul id="collap" class="nav navbar-nav collapse">
                            <li class="active"><a href="#" class="">Home</a></li>
                            <li class=" dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Add New</a></li>
                                </ul>
                            </li>
                            <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Team</a></li>
                                </ul>
                            </li>
                            <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Team Single</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                            </li>
                            <li class="down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact US <span class="caret"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>
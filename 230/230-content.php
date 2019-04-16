<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
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
                <div class="col-md-3 logo">
                    <!-- Main Logo -->
                    <a href="#" rel="home" >
                        <img src="<?php echo $url_path ?>/images/logo.png" alt="logo" >
                    </a>
                    <h1 class="site-title hidden">
                        <a href="#" rel="home">Offshore</a>
                    </h1>
                    <p class="site-description hidden">Responsive Gas &amp; Oil Industry HTML Template</p>  
                </div>
                <div class="col-md-9 top-info-social">
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
                            <div class="widget">
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav main-menu">
                            <li class="active"><a title="Home" href="#">Home</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">About <span class="caret"></span></a>
                                <ul role="menu">
                                    <li><a href="#">The Company</a></li>
                                    <li><a href="#">Vision &amp; Mission</a></li>
                                    <li><a href="#">Our Approach</a></li>
                                    <li><a href="#">Our Team</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Services <span class="caret"></span></a>
                                <ul role="menu">
                                    <li><a href="#">Services List</a></li>
                                    <li><a href="#">Services Single</a></li>
                                    <li><a href="#">Services Single Full Width</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">News &amp; Media</a></li>
                            <li><a href="#">Blog</a></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages <span class="caret"></span></a>
                                <ul role="menu">
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Blog Single</a></li>
                                    <li><a href="#">Careers Single</a></li>
                                    <li><a href="#">Shortcodes</a></li>
                                    <li><a href="#">404 Page</a></li>
                                    <li><a href="#">Blank Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>      
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("main-menu").toggle("collapse in");
        });
    });

</script>
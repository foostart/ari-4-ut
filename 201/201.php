<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/tables_dynamic.less', 'css/tables_dynamic.css');
        ?>
        <link rel="stylesheet" href="css/tables_dynamic.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="tables_dynamic">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-md-2 left_col">
                        <div class="nav-sidemenu">
                            <div class="navbar nav_logo">
                                <a href="../dashboard2/index.php" class="site_title">
                                    <i class="fa fa-paw"></i>
                                    <span>Gentelella Alela!</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="nav_profile clearfix">
                                <div class="profile_pic">
                                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                                </div>
                                <div class="profile_info">
                                    <span>Welcome,</span>
                                    <h2>John Doe</h2>
                                </div>
                            </div>
                            <div class="nav_mainmenu">
                                <div class="menu-list">
                                    <h3>General</h3>
                                    <ul class="nav side-menu panel-group" id="collapsed">
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-home">
                                                <i class="fa fa-home"></i> Home 
                                                <i class="down fa fa-chevron-down"></i></a>
                                            <ul class="nav child_menu collapse" id="nav-home">
                                                <li><a href="#">Dashboard</a></li>
                                                <li><a href="../dashboard2/index.php">Dashboard2</a></li>
                                                <li><a href="../dashboard3/index2.php">Dashboard3</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-forms">
                                                <i class="fa fa-edit"></i>
                                                Forms
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-forms">
                                                <li><a href="#">General Form</a></li>
                                                <li><a href="#">Advanced Components</a></li>
                                                <li><a href="#">Form Validation</a></li>
                                                <li><a href="#">Form Wizard</a></li>
                                                <li><a href="#">Form Upload</a></li>
                                                <li><a href="#">Form Buttons</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-ui">
                                                <i class="fa fa-desktop"></i> UI Elements 
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-ui">
                                                <li><a href="#">General Elements</a></li>
                                                <li><a href="#">Media Gallery</a></li>
                                                <li><a href="#">Typography</a></li>
                                                <li><a href="#">Icons</a></li>
                                                <li><a href="../glyphicons/glyphicons.php">Glyphicons</a></li>
                                                <li><a href="#">Widgets</a></li>
                                                <li><a href="../invoice/invoice.php">Invoice</a></li>
                                                <li><a href="#">Inbox</a></li>
                                                <li><a href="#">Calendar</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-tables">
                                                <i class="fa fa-table"></i> Tables
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-tables">
                                                <li><a href="../tables/tables.php">Tables</a></li>
                                                <li><a href="tables_dynamic.php">Table Dynamic</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-data">
                                                <i class="fa fa-bar-chart-o"></i> Data Presentation
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-data">
                                                <li><a href="#">Chart JS</a></li>
                                                <li><a href="#">Chart JS2</a></li>
                                                <li><a href="#">Moris JS</a></li>
                                                <li><a href="#">ECharts</a></li>
                                                <li><a href="#">Other Charts</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-layouts">
                                                <i class="fa fa-clone"></i>Layouts 
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-layouts">
                                                <li><a href="#">Fixed Sidebar</a></li>
                                                <li><a href="#">Fixed Footer</a></li>
                                            </ul>
                                        </li>
                                        <h3 class="live-on">Live On</h3>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-pages">
                                                <i class="fa fa-bug"></i> Additional Pages 
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-pages">
                                                <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                                <li><a href="../projects/projects.php">Projects</a></li>
                                                <li><a href="../project_detail/project_detail.php">Project Detail</a></li>
                                                <li><a href="../contacts/contacts.php">Contacts</a></li>
                                                <li><a href="../profile/profile.php">Profile</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-ex">
                                                <i class="fa fa-windows"></i> Extras
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-ex">
                                                <li><a href="#">403 Error</a></li>
                                                <li><a href="#">404 Error</a></li>
                                                <li><a href="#">500 Error</a></li>
                                                <li><a href="#">Plain Page</a></li>
                                                <li><a href="../login/login.php">Login Page</a></li>
                                                <li><a href="../pricing_tables/pricing_tables.php">Pricing Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-multilevel">
                                                <i class="fa fa-sitemap"></i> Multilevel Menu
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-multilevel">
                                                <li>
                                                    <a href="#level1_1">Level One</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="collapse" href="#nav-levelOne">
                                                        Level One<span class="fa fa-chevron-down"></span>
                                                    </a>
                                                    <ul class="nav child_menu collapse" id="nav-levelOne">
                                                        <li><a href="#">Level Two</a></li>
                                                        <li><a href="#">Level Two</a></li>
                                                        <li><a href="#">Level Two</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Level One</a></li>
                                            </ul>
                                        </li>                  
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-laptop"></i> Landing Page 
                                                <span class="label label-success pull-right">Coming Soon</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div><!-- End Sidebar Menu -->
                            <div class="nav_footer hidden-small">
                                <a href="#">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                        <div class="nav_response">
                            <div class="logo-res">
                                <a href="../dashboard2/index.php"><i class="fa fa-paw"></i></a>
                            </div>
                            <nav class="menu-res">
                                <ul>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-home"></i><h5>Home</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dashboard</a></li>
                                            <li><a href="../dashboard2/index.php">Dashboard2</a></li>
                                            <li><a href="../dashboard3/index2.php">Dashboard3</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-edit"></i><h5>Form</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">General Form</a></li>
                                            <li><a href="#">Advanced Components</a></li>
                                            <li><a href="#">Form Validation</a></li>
                                            <li><a href="#">Form Wizard</a></li>
                                            <li><a href="#">Form Upload</a></li>
                                            <li><a href="#">Form Buttons</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-laptop"></i><h5>UI Elements</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">General Elements</a></li>
                                            <li><a href="#">Media Gallery</a></li>
                                            <li><a href="#">Typography</a></li>
                                            <li><a href="#">Icons</a></li>
                                            <li><a href="../glyphicons/glyphicons.php">Glyphicons</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="../invoice/invoice.php">Invoice</a></li>
                                            <li><a href="#">Inbox</a></li>
                                            <li><a href="#">Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-table"></i><h5>Tables</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../tables/tables.php">Tables</a></li>
                                            <li><a href="tables_dynamic.php">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bar-chart-o"></i><h5>Data Present</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Chart JS</a></li>
                                            <li><a href="#">Chart JS2</a></li>
                                            <li><a href="#">Moris JS</a></li>
                                            <li><a href="#">Echarts</a></li>
                                            <li><a href="#">Other Charts</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-clone"></i><h5>Layouts</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Fixed Sidebar</a></li>
                                            <li><a href="#">Fixed Footer</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bug"></i><h5>Additional Pages</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                            <li><a href="../projects/projects.php">Projects</a></li>
                                            <li><a href="../project_detail/project_detail.php">Project Detail</a></li>                                    
                                            <li><a href="../contacts/contacts.php">Contacts</a></li>
                                            <li><a href="../profile/profile.php">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-windows"></i><h5>Extras</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">403 Error</a></li>
                                            <li><a href="#">404 Error</a></li>
                                            <li><a href="#">500 Error</a></li>                                    
                                            <li><a href="#">Plain Page</a></li>
                                            <li><a href="../login/login.php">Login Page</a></li>
                                            <li><a href="../pricing_tables/pricing_tables.php">Pricing Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-sitemap"></i><h5>Mullevel Menu</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>    
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            <i class="fa fa-laptop"></i><h5>Landing page</h5>
                                        </a>
                                        <span class="label label-success pull-right">Comming Soon</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-10 right_col">
                        <div class="top-nav">
                            <div class="nav_menu">
                                <nav>
                                    <a href="#menu-toggle" id="menu-toggle" class="btn btn-default toggled"><i class="fa fa-bars"></i></a>
                                    <ul class="nav navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <img src="images/img.jpg" alt="">John Doe
                                                <i class="fa fa-angle-down"></i>
                                            </a>


                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>Settings</span>
                                                        <span class="badge">50%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Help</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Logout<i class="fa fa-sign-out"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle info-number" data-toggle="dropdown">
                                                <i class="fa fa-envelope-o"></i>
                                                <span class="badge">6</span>
                                            </a>

                                            <ul class="dropdown-menu msg_list">
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="Profile image">
                                                        </span>
                                                        <span>
                                                            <span class="name">John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="msg">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="Profile image">
                                                        </span>
                                                        <span>
                                                            <span class="name">John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="msg">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="Profile image">
                                                        </span>
                                                        <span>
                                                            <span class="name">John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="msg">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="text-center">
                                                        <a href="#">
                                                            <strong>See All Alerts</strong>
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="content">
                                <div class="row">
                                    <div class="content-left col-md-6 col-sm-6 col-xs-6">
                                        <h3>Users <small>Some examples to get you started </small></h3>
                                    </div>
                                    <div class="content-right col-md-6 col-sm-6 col-xs-6">
                                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>  
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel">
                                        <div class="admin-title">
                                            <h3>
                                                Default Example  
                                                <small>Users</small>
                                            </h3>
                                            <ul class="items">
                                                <li>
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-wrench"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Settings 1</a></li>
                                                        <li><a href="#">Settings 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="close-link">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="admin-content">
                                            <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code></p>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="show-data">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="data">
                                                                    Show 
                                                                    <select class="form-control form-select">
                                                                        <option value="5">5</option>
                                                                        <option value="5">10</option>
                                                                        <option value="5">15</option>
                                                                        <option value="5">20</option>
                                                                    </select>
                                                                    entries 
                                                                </span>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="search-query">
                                                                    Search: <input type="search" id="input" onkeyup="searchDataTable();" class="form-control form-search" placeholder="Search for name..." title="Type in a name">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="data-table table table-bordered" id="table">
                                                            <thead>
                                                                <tr>
                                                                    <th onclick="sortTable(0)">Name</th>
                                                                    <th onclick="sortTable(1)">Position</th>
                                                                    <th onclick="sortTable(2)">Office</th>
                                                                    <th onclick="sortTable(3)">Age</th>
                                                                    <th onclick="sortTable(4)">Start date</th>
                                                                    <th onclick="sortTable(5)">Salary</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="myDataTable">
                                                                <tr>
                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>41</td>
                                                                    <td>2012/10/13</td>
                                                                    <td>$132,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brenden Wagner</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>28</td>
                                                                    <td>2011/06/07</td>
                                                                    <td>$206,850</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Brielle Williamson</td>
                                                                    <td>Integration Specialist</td>
                                                                    <td>New York</td>
                                                                    <td>61</td>
                                                                    <td>2012/12/02</td>
                                                                    <td>$372,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bruno Nash</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>38</td>
                                                                    <td>2011/05/03</td>
                                                                    <td>$163,500</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Caesar Vance</td>
                                                                    <td>Pre-Sales Support</td>
                                                                    <td>New York</td>
                                                                    <td>21</td>
                                                                    <td>2011/12/12</td>
                                                                    <td>$106,450</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cara Stevens</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>New York</td>
                                                                    <td>46</td>
                                                                    <td>2011/12/06</td>
                                                                    <td>$145,600</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cara Stevens</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>New York</td>
                                                                    <td>46</td>
                                                                    <td>2011/12/06</td>
                                                                    <td>$145,600</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <p>Showing 1 to 5 of 12 entries</p>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <ul class="pagination page" id="myPager">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel">
                                        <div class="admin-title">
                                            <h3>
                                                Plus Table Design
                                            </h3>
                                            <ul class="items">
                                                <li>
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-wrench"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Settings 1</a></li>
                                                        <li><a href="#">Settings 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="close-link">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="admin-content">
                                            <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code></p>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="show-data">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="data">
                                                                    Show 
                                                                    <select class="form-control form-select">
                                                                        <option value="5">5</option>
                                                                        <option value="5">10</option>
                                                                        <option value="5">15</option>
                                                                        <option value="5">20</option>
                                                                    </select>
                                                                    entries 
                                                                </span>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="search-query">
                                                                    Search: <input type="search" id="input2" onkeyup="searchDataTable2();" class="form-control form-search" placeholder="Search for name..." title="Type in a name">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="data-table table table-bordered" id="table2">
                                                            <thead>
                                                                <tr role="row" class="">
                                                                    <th style="width: 6px;">
                                                                    </th>
                                                                    <th style="width: 34px;">
                                                                        <input type="checkbox" class="item" onclick="checkAll('item', this)">
                                                                    </th>
                                                                    <th onclick="sortTable2(1)" style="width: 141px;">Name</th>
                                                                    <th onclick="sortTable2(2)" style="width: 233px;">Position</th>
                                                                    <th onclick="sortTable2(3)" style="width: 103px;">Office</th>
                                                                    <th onclick="sortTable2(4)" style="width: 50px;">Age</th>
                                                                    <th onclick="sortTable2(5)" style="width: 99px;">Start date</th>
                                                                    <th onclick="sortTable2(6)" style="width: 76px;">Salary</th></tr>
                                                            </thead>
                                                            <tbody id="myDataTable2">
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Garrett Winters</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>63</td>
                                                                    <td>2011/07/25</td>
                                                                    <td>$170,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>

                                                                </tr>
                                                                <tr >
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Garrett Winters</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>63</td>
                                                                    <td>2011/07/25</td>
                                                                    <td>$170,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>

                                                                </tr>
                                                                <tr >
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Garrett Winters</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>63</td>
                                                                    <td>2011/07/25</td>
                                                                    <td>$170,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Garrett Winters</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>63</td>
                                                                    <td>2011/07/25</td>
                                                                    <td>$170,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>

                                                                </tr>
                                                                <tr >
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Garrett Winters</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>63</td>
                                                                    <td>2011/07/25</td>
                                                                    <td>$170,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>

                                                                </tr>
                                                                <tr >
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Garrett Winters</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>63</td>
                                                                    <td>2011/07/25</td>
                                                                    <td>$170,750</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <th>
                                                                        <input type="checkbox" class="item">
                                                                    </th>

                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>

                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <p>Showing 1 to 5 of 12 entries</p>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <ul class="pagination page" id="myPager2">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel">
                                        <div class="admin-title">
                                            <h3>
                                                Button Example <small>Users</small>
                                            </h3>
                                            <ul class="items">
                                                <li>
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-wrench"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Settings 1</a></li>
                                                        <li><a href="#">Settings 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="close-link">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="admin-content">
                                            <p>
                                                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.</p>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="show-data">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="data">
                                                                    Show 
                                                                    <select class="form-control form-select">
                                                                        <option value="5">5</option>
                                                                        <option value="5">10</option>
                                                                        <option value="5">15</option>
                                                                        <option value="5">20</option>
                                                                    </select>
                                                                    entries 
                                                                </span>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="search-query">
                                                                    Search: <input type="search" id="input3" onkeyup="searchDataTable3();" class="form-control form-search" placeholder="Search for name..." title="Type in a name">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="data-table table table-bordered" id="table3">
                                                            <thead>
                                                                <tr>
                                                                    <th onclick="sortTable3(0)">Name</th>
                                                                    <th onclick="sortTable3(1)">Position</th>
                                                                    <th onclick="sortTable3(2)">Office</th>
                                                                    <th onclick="sortTable3(3)">Age</th>
                                                                    <th onclick="sortTable3(4)">Start date</th>
                                                                    <th onclick="sortTable3(5)">Salary</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="myDataTable3">
                                                                <tr>
                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>41</td>
                                                                    <td>2012/10/13</td>
                                                                    <td>$132,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brenden Wagner</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>28</td>
                                                                    <td>2011/06/07</td>
                                                                    <td>$206,850</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Brielle Williamson</td>
                                                                    <td>Integration Specialist</td>
                                                                    <td>New York</td>
                                                                    <td>61</td>
                                                                    <td>2012/12/02</td>
                                                                    <td>$372,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bruno Nash</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>38</td>
                                                                    <td>2011/05/03</td>
                                                                    <td>$163,500</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Caesar Vance</td>
                                                                    <td>Pre-Sales Support</td>
                                                                    <td>New York</td>
                                                                    <td>21</td>
                                                                    <td>2011/12/12</td>
                                                                    <td>$106,450</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cara Stevens</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>New York</td>
                                                                    <td>46</td>
                                                                    <td>2011/12/06</td>
                                                                    <td>$145,600</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cara Stevens</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>New York</td>
                                                                    <td>46</td>
                                                                    <td>2011/12/06</td>
                                                                    <td>$145,600</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <p>Showing 1 to 5 of 12 entries</p>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <ul class="pagination page" id="myPager3">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel">
                                        <div class="admin-title">
                                            <h3>
                                                Fixed Header Example  
                                                <small>Users</small>
                                            </h3>
                                            <ul class="items">
                                                <li>
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-wrench"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Settings 1</a></li>
                                                        <li><a href="#">Settings 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="close-link">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="admin-content">
                                            <p>This example shows FixedHeader being styling by the Bootstrap CSS framework.</p>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="show-data">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="data">
                                                                    Show 
                                                                    <select class="form-control form-select">
                                                                        <option value="5">5</option>
                                                                        <option value="5">10</option>
                                                                        <option value="5">15</option>
                                                                        <option value="5">20</option>
                                                                    </select>
                                                                    entries 
                                                                </span>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="search-query">
                                                                    Search: <input type="search" id="input4" onkeyup="searchDataTable4();" class="form-control form-search" placeholder="Search for name..." title="Type in a name">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="data-table table table-bordered" id="table4">
                                                            <thead>
                                                                <tr>
                                                                    <th onclick="sortTable4(0)">Name</th>
                                                                    <th onclick="sortTable4(1)">Position</th>
                                                                    <th onclick="sortTable4(2)">Office</th>
                                                                    <th onclick="sortTable4(3)">Age</th>
                                                                    <th onclick="sortTable4(4)">Start date</th>
                                                                    <th onclick="sortTable4(5)">Salary</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="myDataTable4">
                                                                <tr>
                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>41</td>
                                                                    <td>2012/10/13</td>
                                                                    <td>$132,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brenden Wagner</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>28</td>
                                                                    <td>2011/06/07</td>
                                                                    <td>$206,850</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Brielle Williamson</td>
                                                                    <td>Integration Specialist</td>
                                                                    <td>New York</td>
                                                                    <td>61</td>
                                                                    <td>2012/12/02</td>
                                                                    <td>$372,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bruno Nash</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>38</td>
                                                                    <td>2011/05/03</td>
                                                                    <td>$163,500</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Caesar Vance</td>
                                                                    <td>Pre-Sales Support</td>
                                                                    <td>New York</td>
                                                                    <td>21</td>
                                                                    <td>2011/12/12</td>
                                                                    <td>$106,450</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cara Stevens</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>New York</td>
                                                                    <td>46</td>
                                                                    <td>2011/12/06</td>
                                                                    <td>$145,600</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cara Stevens</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>New York</td>
                                                                    <td>46</td>
                                                                    <td>2011/12/06</td>
                                                                    <td>$145,600</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <p>Showing 1 to 5 of 12 entries</p>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <ul class="pagination page" id="myPager4">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel">
                                        <div class="admin-title">
                                            <h3>
                                                KeyTable example 
                                                <small>Users</small>
                                            </h3>
                                            <ul class="items">
                                                <li>
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-wrench"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Settings 1</a></li>
                                                        <li><a href="#">Settings 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="close-link">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="admin-content">
                                            <p>KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.</p>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="show-data">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="data">
                                                                    Show 
                                                                    <select class="form-control form-select">
                                                                        <option value="5">5</option>
                                                                        <option value="5">10</option>
                                                                        <option value="5">15</option>
                                                                        <option value="5">20</option>
                                                                    </select>
                                                                    entries 
                                                                </span>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="search-query">
                                                                    Search: <input type="search" id="input5" onkeyup="searchDataTable5();" class="form-control form-search" placeholder="Search for name..." title="Type in a name">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="data-table table table-bordered" id="table5">
                                                            <thead>
                                                                <tr>
                                                                    <th onclick="sortTable5(0)">Name</th>
                                                                    <th onclick="sortTable5(1)">Position</th>
                                                                    <th onclick="sortTable5(2)">Office</th>
                                                                    <th onclick="sortTable5(3)">Age</th>
                                                                    <th onclick="sortTable5(4)">Start date</th>
                                                                    <th onclick="sortTable5(5)">Salary</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="myDataTable5">
                                                                <tr>
                                                                    <td>Ashton Cox</td>
                                                                    <td>Junior Technical Author</td>
                                                                    <td>San Francisco</td>
                                                                    <td>66</td>
                                                                    <td>2009/01/12</td>
                                                                    <td>$86,000</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Bradley Greer</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>41</td>
                                                                    <td>2012/10/13</td>
                                                                    <td>$132,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Brenden Wagner</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>28</td>
                                                                    <td>2011/06/07</td>
                                                                    <td>$206,850</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Brielle Williamson</td>
                                                                    <td>Integration Specialist</td>
                                                                    <td>New York</td>
                                                                    <td>61</td>
                                                                    <td>2012/12/02</td>
                                                                    <td>$372,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bruno Nash</td>
                                                                    <td>Software Engineer</td>
                                                                    <td>London</td>
                                                                    <td>38</td>
                                                                    <td>2011/05/03</td>
                                                                    <td>$163,500</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Caesar Vance</td>
                                                                    <td>Pre-Sales Support</td>
                                                                    <td>New York</td>
                                                                    <td>21</td>
                                                                    <td>2011/12/12</td>
                                                                    <td>$106,450</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cara Stevens</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>New York</td>
                                                                    <td>46</td>
                                                                    <td>2011/12/06</td>
                                                                    <td>$145,600</td>
                                                                </tr>
                                                                <tr >
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cara Stevens</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>New York</td>
                                                                    <td>46</td>
                                                                    <td>2011/12/06</td>
                                                                    <td>$145,600</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Cedric Kelly</td>
                                                                    <td>Senior Javascript Developer</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>22</td>
                                                                    <td>2012/03/29</td>
                                                                    <td>$433,060</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <p>Showing 1 to 5 of 12 entries</p>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <ul class="pagination page" id="myPager5">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel">
                                        <div class="admin-title">
                                            <h3>
                                                Responsive example 
                                                <small>Users</small>
                                            </h3>
                                            <ul class="items">
                                                <li>
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-wrench"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Settings 1</a></li>
                                                        <li><a href="#">Settings 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="close-link">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="admin-content">
                                            <p>Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="show-data">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="data">
                                                                    Show 
                                                                    <select class="form-control form-select">
                                                                        <option value="5">5</option>
                                                                        <option value="5">10</option>
                                                                        <option value="5">15</option>
                                                                        <option value="5">20</option>
                                                                    </select>
                                                                    entries 
                                                                </span>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <span class="search-query">
                                                                    Search: <input type="search" id="input6" onkeyup="searchDataTable6();" class="form-control form-search" placeholder="Search for name..." title="Type in a name">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="data-table table table-bordered" id="table6">
                                                            <thead>
                                                                <tr>
                                                                    <th onclick="sortTable6(0)" style="width: 71px;">First name</th>
                                                                    <th onclick="sortTable6(1)" style="width: 69px;">Last Name</th>
                                                                    <th onclick="sortTable6(2)" style="width: 155px;">Position</th>
                                                                    <th onclick="sortTable6(3)" style="width: 118px;">Office</th>
                                                                    <th onclick="sortTable6(4)" style="width: 67px;">Age</th>
                                                                    <th onclick="sortTable6(5)" style="width: 87px;">Start date</th>
                                                                    <th onclick="sortTable6(6)" style="width: 64px;">Salary</th>
                                                                    <th onclick="sortTable6(7)" style="width: 46px;">Extn.</th>
                                                                    <th onclick="sortTable6(8)" style="width: 148px;">Email</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="myDataTable6">
                                                                <tr>
                                                                    <td>Cara</td>
                                                                    <td>Stevens</td>
                                                                    <td>Sales Assistant</td>
                                                                    <td>New York</td>
                                                                    <td>46</td>
                                                                    <td>2011/12/06</td>
                                                                    <td>$145,600</td>
                                                                    <td>3990</td>
                                                                    <td>c.stevens@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Hermione</td>
                                                                    <td>Butler</td>
                                                                    <td>Regional Director</td>
                                                                    <td>London</td>
                                                                    <td>47</td>
                                                                    <td>2011/03/21</td>
                                                                    <td>$356,250</td>
                                                                    <td>1016</td>
                                                                    <td>h.butler@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lael</td>
                                                                    <td>Greer</td>
                                                                    <td>Systems Administrator</td>
                                                                    <td>London</td>
                                                                    <td>21</td>
                                                                    <td>2009/02/27</td>
                                                                    <td>$103,500</td>
                                                                    <td>6733</td>
                                                                    <td>l.greer@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jonas</td>
                                                                    <td>Alexander</td>
                                                                    <td>Developer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>30</td>
                                                                    <td>2010/07/14</td>
                                                                    <td>$86,500</td>
                                                                    <td>8196</td>
                                                                    <td>j.alexander@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Shad</td>
                                                                    <td>Decker</td>
                                                                    <td>Regional Director</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>51</td>
                                                                    <td>2008/11/13</td>
                                                                    <td>$183,000</td>
                                                                    <td>6373</td>
                                                                    <td>s.decker@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Michael</td>
                                                                    <td>Bruce</td>
                                                                    <td>Javascript Developer</td>
                                                                    <td>Singapore</td>
                                                                    <td>29</td>
                                                                    <td>2011/06/27</td>
                                                                    <td>$183,000</td>
                                                                    <td>5384</td>
                                                                    <td>m.bruce@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Donna</td>
                                                                    <td>Snider</td>
                                                                    <td>Customer Support</td>
                                                                    <td>New York</td>
                                                                    <td>27</td>
                                                                    <td>2011/01/25</td>
                                                                    <td>$112,000</td>
                                                                    <td>4226</td>
                                                                    <td>d.snider@datatables.net</td>
                                                                </tr>   
                                                                <tr>
                                                                    <td>Lael</td>
                                                                    <td>Greer</td>
                                                                    <td>Systems Administrator</td>
                                                                    <td>London</td>
                                                                    <td>21</td>
                                                                    <td>2009/02/27</td>
                                                                    <td>$103,500</td>
                                                                    <td>6733</td>
                                                                    <td>l.greer@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jonas</td>
                                                                    <td>Alexander</td>
                                                                    <td>Developer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>30</td>
                                                                    <td>2010/07/14</td>
                                                                    <td>$86,500</td>
                                                                    <td>8196</td>
                                                                    <td>j.alexander@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Shad</td>
                                                                    <td>Decker</td>
                                                                    <td>Regional Director</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>51</td>
                                                                    <td>2008/11/13</td>
                                                                    <td>$183,000</td>
                                                                    <td>6373</td>
                                                                    <td>s.decker@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Michael</td>
                                                                    <td>Bruce</td>
                                                                    <td>Javascript Developer</td>
                                                                    <td>Singapore</td>
                                                                    <td>29</td>
                                                                    <td>2011/06/27</td>
                                                                    <td>$183,000</td>
                                                                    <td>5384</td>
                                                                    <td>m.bruce@datatables.net</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Donna</td>
                                                                    <td>Snider</td>
                                                                    <td>Customer Support</td>
                                                                    <td>New York</td>
                                                                    <td>27</td>
                                                                    <td>2011/01/25</td>
                                                                    <td>$112,000</td>
                                                                    <td>4226</td>
                                                                    <td>d.snider@datatables.net</td>
                                                                </tr>   
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <p>Showing 1 to 5 of 12 entries</p>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <ul class="pagination page" id="myPager6">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <footer>
                        Gentelella - Bootstrap Admin Template by
                        <a href="#"> Colorlib</a>
                    </footer>
                </div>
                <div id="back-to-top"><i class="fa fa-chevron-up"></i></div>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/364.less', 'css/364.css');
        ?>
        <link href="css/364.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-364">
            <div class="homepage_brands">
                <div class="container">
                    <h3 class="page_heading">BRANDS</h3>
                    <div class="row" style=" padding-left: 15px; line-height: 8;">  
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#"><img src="images/custom_brand1_img.jpg" alt=""></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#"><img src="images/custom_brand2_img.jpg" alt=""></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#"><img src="images/custom_brand3_img.jpg" alt=""></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#"><img src="images/custom_brand4_img.jpg" alt=""></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#"><img src="images/custom_brand5_img.jpg" alt=""></a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#"><img src="images/custom_brand6_img.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php

/* @var $this \yii\web\View */
/* @var $content string */
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bussa - Consulting & Business Template">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">


    <!-- ========== Page Title ========== -->
    <title>万裕房地产开发</title>
    <?php $this->head()?>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="home/img/favicon.ico" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="/home/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/home/css/flaticon-set.css" rel="stylesheet" />
    <link href="/home/css/themify-icons.css" rel="stylesheet" />
    <link href="/home/css/magnific-popup.css" rel="stylesheet" />
    <link href="/home/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/home/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/home/css/animate.css" rel="stylesheet" />
    <link href="/home/css/bootsnav.css" rel="stylesheet" />
    <link href="/home/css/style.css" rel="stylesheet">
    <link href="/home/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/home/js/html5/html5shiv.min.js"></script>
    <script src="/home/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>
<body>
<!-- Start Header Top
============================================= -->
<div class="top-bar-area bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 address-info text-left">
                <div class="info box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="ti-map-alt"></i>
                            </div>
                            <div class="info">
                                <span>地址</span> 深圳市福田车公庙, 金润大厦 6L
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="info">
                                <span>Email</span> it_admin@maxyee.com
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="ti-time"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 contact">
                <h4>
                    <i class="ti-headphone"></i> 电话 <strong> +123 456 7890</strong>
                </h4>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header
   ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= Url::toRoute('site/index')?>">
                    <img src="/home/img/logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="dropdown">
                        <a href="<?= Url::toRoute('site/index')?>" class="dropdown-toggle active" data-toggle="dropdown" >首页</a>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >走进万裕</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= Url::toRoute('site/about')?>">企业介绍</a></li>
                            <li><a href="contact.html">创始人致辞</a></li>
                            <li><a href="pricing-table.html">视频播放</a></li>
                            <li><a href="404.html">开发中...</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >万裕业务</a>
                        <ul class="dropdown-menu">
                            <li><a href="services-grid.html">地产开发</a></li>
                            <li><a href="services-carousel.html">医药产业</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >新闻中心</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= Url::toRoute('news/news')?>">集团新闻</a></li>
                            <li><a href="<?= Url::toRoute('news/dynamic')?>">最新公告</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >人力资源</a>
                        <ul class="dropdown-menu">
                            <li><a href=" <?= Url::toRoute('hr/idea')?>">人才理念</a></li>

                            <li><a href=" <?= Url::toRoute('hr/index')?>">招聘岗位</a></li>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >联系我们</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-standard.html">各地公司</a></li>
                            <li><a href="blog-left-sidebar.html">服务热线</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->


<!-- Start Banner
   ============================================= -->
<div class="banner-area">
    <div id="bootcarousel" class="carousel slide text-large carousel-fade animate_text" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner text-light carousel-zoom">
            <div class="item active">
                <div class="slider-thumb bg-cover" style="background-image: url(home/img/banner/2.jpg);"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h1 data-animation="animated slideInLeft">我们将 为您<strong>提供</strong> 最优质的 服务</h1>
                                        <div class="lists" data-animation="animated slideInUp">
                                            <ul>
                                                <li>
                                                    <i class="flaticon-hamburger"></i> 地产
                                                </li>
                                                <li>
                                                    <i class="flaticon-champagne-glass"></i> 医药
                                                </li>
                                                <li>
                                                    <i class="flaticon-coffee-cup"></i> 其他产业
                                                </li>
                                            </ul>
                                        </div>
                                        <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">查看项目</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-thumb bg-cover" style="background-image: url(home/img/banner/1.jpg);"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h1 data-animation="animated slideInLeft">我们将 为您 <strong>输送</strong>最优质的产业链</h1>
                                        <div class="lists" data-animation="animated slideInUp">
                                            <ul>
                                                <li>
                                                    <i class="flaticon-hamburger"></i> 地产
                                                </li>
                                                <li>
                                                    <i class="flaticon-champagne-glass"></i> 医药
                                                </li>
                                                <li>
                                                    <i class="flaticon-coffee-cup"></i> 其他产业
                                                </li>
                                            </ul>
                                        </div>
                                        <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">跳转到连接</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- End Banner -->



<?= $content ?>

<!-- Start Footer
   ============================================= -->
<footer class="bg-dark text-light">

    <!-- Start Footer Bottom -->
    <div class="footer-bottom text-center bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>万裕集团 &copy; 版权所有 粤ICP备19141582 </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->


<!-- jQuery Frameworks
  ============================================= -->
<script src="/home/js/jquery-1.12.4.min.js"></script>
<script src="/home/js/bootstrap.min.js"></script>
<script src="/home/js/equal-height.min.js"></script>
<script src="/home/js/jquery.appear.js"></script>
<script src="/home/js/jquery.easing.min.js"></script>
<script src="/home/js/jquery.magnific-popup.min.js"></script>
<script src="/home/js/modernizr.custom.13711.js"></script>
<script src="/home/js/owl.carousel.min.js"></script>
<script src="/home/js/wow.min.js"></script>
<script src="/home/js/progress-bar.min.js"></script>
<script src="/home/js/isotope.pkgd.min.js"></script>
<script src="/home/js/imagesloaded.pkgd.min.js"></script>
<script src="/home/js/count-to.js"></script>
<script src="/home/js/YTPlayer.min.js"></script>
<script src="/home/js/bootsnav.js"></script>
<script src="/home/js/main.js"></script>


</body>
</html>
<?php $this->endPage()?>


<?php
use yii\helpers\Url;

$layout = 'index';
?>

<!-- Start Breadcrumb
============================================= -->
<div class="breadcrumb-area bg-fixed text-center text-light" style="background-image: url(home/img/banner/3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!--<div class="breadcrumb-items">
                    <h1>Single Left Sidebar</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">SIngle Left Sidebar</li>
                    </ul>
                </div>
                -->
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
============================================= -->


<!-- Start Our About
  ============================================= -->
<div class="about-area default-padding">
    <!-- Side Bg -->
    <div class="side-bg">
        <img src="home/img/shape-2.png" alt="Thumb">
    </div>
    <!-- End Side Bg -->
    <div class="container">
        <div class="row">
            <!-- Start About -->
            <div class="about-content">
                <div class="col-md-6 about-items left-content">
                    <h2>万裕房地产开发集团有限公司</h2>
                    <p>
                        <b>万裕</b>创于一九八六年的香港“汉华企业”起步，万裕集团经过二十多载的岁月洗礼，市场磨砺和文化积淀，今天已经发展成为一家以文化产业为主业，带动房地产，生物制药业发展，以感光器材、防伪技术、物业管理、建筑、贸易及包装材料为副业，在香港、美国、新加坡和中国大陆各地均有子集团和分支公司及机构，拥有近二十多亿资产和三千多名员工的多元化大型跨国企业集团.
                    </p>
                    <ul>
                    </ul> 
                </div>
                <div class="col-md-6 thumb-box inc-video">
                    <div class="thumb">
                        <a href="<?= Url::toRoute('site/about')?>"><img src="home/img/about/6.jpg" alt="Thumb"></a>
                    </div>
                </div>
            </div>
            <!-- End About -->
        </div>
    </div>
</div>
<!-- End Our About -->





<!-- Start Services
   ============================================= -->
<div class="services-area carousel-shadow inc-list bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>业务介绍</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="services-items services-carousel owl-carousel owl-theme text-center">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="home/img/services/1.jpg" alt="Thumb">
                            <div class="icon">
                                <i class="flaticon-analysis-1"></i>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">房地产开发</a>
                            </h4>
                            <div class="list">
                                <ul>
                                    <li>Make a budget</li>
                                    <li>Track your expenses</li>
                                    <li>Start saving</li>
                                </ul>
                            </div>
                            <a href="#" class="btn circle btn-theme border btn-sm">阅读更多</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="home/img/services/2.jpg" alt="Thumb">
                            <div class="icon">
                                <i class="flaticon-plan"></i>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">昆明制药</a>
                            </h4>
                            <div class="list">
                                <ul>
                                    <li>Provident Fund</li>
                                    <li>Fixed deposit</li>
                                    <li>Taxable Bonds</li>
                                </ul>
                            </div>
                            <a href="#" class="btn circle btn-theme border btn-sm">阅读更多</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="home/img/services/3.jpg" alt="Thumb">
                            <div class="icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">教育行业</a>
                            </h4>
                            <div class="list">
                                <ul>
                                    <li>Money Market</li>
                                    <li>California Municipal</li>
                                    <li>Sure Budget</li>
                                </ul>
                            </div>
                            <a href="#" class="btn circle btn-theme border btn-sm">阅读更多</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/services/4.jpg" alt="Thumb">
                            <div class="icon">
                                <i class="flaticon-money"></i>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Saving & Investments</a>
                            </h4>
                            <div class="list">
                                <ul>
                                    <li>Direct equity</li>
                                    <li>National Pension</li>
                                    <li>Public Provident</li>
                                </ul>
                            </div>
                            <a href="#" class="btn circle btn-theme border btn-sm">Read More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->
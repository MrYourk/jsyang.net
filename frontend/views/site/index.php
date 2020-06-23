<?php
use yii\helpers\Url;


?>

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
                                                    <i class="flaticon-hamburger"></i> 房地产
                                                </li>
                                                <li>
                                                    <i class="flaticon-champagne-glass"></i> 金融
                                                </li>
                                                <li>
                                                    <i class="flaticon-coffee-cup"></i> 物业管理
                                                </li>
                                                <li>
                                                     <i class="flaticon-coffee-cup"></i> 康养
                                                </li>
                                                <li>
                                                     <i class="flaticon-coffee-cup"></i> 公益慈善
                                                </li>
                                            </ul>
                                        </div>
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
                                                    <i class="flaticon-hamburger"></i> 房地产
                                                </li>
                                                <li>
                                                    <i class="flaticon-champagne-glass"></i> 教育
                                                </li>
                                                <li>
                                                    <i class="flaticon-coffee-cup"></i> 烟配
                                                </li>
                                                <li>
                                                    <i class="flaticon-coffee-cup"></i> 康养
                                                </li>
                                                <li>
                                                    <i class="flaticon-coffee-cup"></i> 科技
                                                </li>
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
        <!-- End Wrapper for slides -->


    </div>
</div>
<!-- End Banner -->

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
                    <p style="line-height: 33px">
                        <b>万裕</b>创于一九八六年的香港“汉华企业”起步，万裕集团经过二十多载的岁月洗礼，市场磨砺和文化积淀，今天已经发展成为一家以文化产业为主业，带动房地产，生物制药业发展，以感光器材、防伪技术、物业管理、建筑、贸易及包装材料为副业，在香港、美国、新加坡和中国大陆各地均有子集团和分支公司及机构，拥有近二十多亿资产和三千多名员工的多元化大型跨国企业集团.
                    </p>
                    <ul>
                    </ul>                 
                </div>
                <div class="col-md-6 thumb-box inc-video">
                    <div class="thumb">
                        <a href="<?= Url::toRoute('site/about')?>"><img src="home/img/about/qiantai1.jpg" alt="Thumb"></a>
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
                                <a href="#">房地产</a>
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
                                <a href="#">金融</a>
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
                                <a href="#">教育</a>
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
                                <a href="#">康养</a>
                            </h4>
                            <div class="list">
                                <ul>
                                    <li>Direct equity</li>
                                    <li>National Pension</li>
                                    <li>Public Provident</li>
                                </ul>
                            </div>
                            <a href="#" class="btn circle btn-theme border btn-sm">阅读更多</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->



  <!-- Start Office Environment 
    ============================================= -->
    <div class="office-environment-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 heading">
                    <h2>员工风采</h2>
                    <p>
                        文案采集中
                    </p>
                    <!--<a href="#" class="btn btn-theme border btn-md"></a>-->
                </div>
                <div class="col-md-8">
                    <div class="office-environment-items text-light environment-carousel owl-carousel owl-theme">
                        <div class="item">
                            <a href="#">
                                <img src="home/img/environment/yuangon.jpg" alt="Thumb">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="home/img/environment/2.jpg" alt="Thumb">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Office Environment -->
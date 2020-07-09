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
                <div class="slider-thumb bg-cover" style="background-image: url(home/img/banner/1.jpg);"></div>
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
                <div class="slider-thumb bg-cover" style="background-image: url(home/img/banner/2.jpg);"></div>
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
                    <h2>万裕（集团）有限公司</h2>
                    <p style="line-height: 33px">
                        万裕集团自始创于1986年的香港“汉华企业”一路走来，历经30多年的市场磨砺和文化积淀，如今已成为以万裕集团为核心，旗下拥有上市公司陕西金叶科教集团（股票代码：000812）、深圳市瑞丰新材料科技集团，及西安明德理工学院、城建学院等多家企业集团及大学院校，业务遍布广东、陕西、云南、江苏等地，融合教育产业、烟配行业、包装印刷、房地产、金融投资、康养产业、防伪科技、物业管理等多种业态于一体的多元化综合集团公司。
                    </p>
                    <ul>
                    </ul>                 
                </div>
                <div class="col-md-6 thumb-box inc-video">
                    <div class="thumb">
                        <a href="<?= Url::toRoute('site/about')?>"><img src="home/img/about/qiantai.jpg" alt="Thumb"></a>
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
                                <a href="<?= Url::toRoute('business/index')?>">房地产</a>
                            </h4>
                            <div class="list">
                                <ul>
                                    <li>坚持精准定位</li>
                                    <li>重点布局，不断进取</li>
                                </ul>
                            </div>
                            <a href="<?= Url::toRoute('business/index')?>" class="btn circle btn-theme border btn-sm">阅读更多</a>
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
                                <a href="<?= Url::toRoute('business/index_1')?>">教育</a>
                            </h4>
                            <div class="list">
                                <ul>
                                    <li>西安明德理工学院</li>
                                    <li>城建学院</li>
                                </ul>
                            </div>
                            <a href="<?= Url::toRoute('business/index_1')?>" class="btn circle btn-theme border btn-sm">阅读更多</a>
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
                                <a href="<?= Url::toRoute('business/index_2')?>">烟配</a>
                            </h4>
                            <div class="list">
                                <ul>
                                    <li>拥于60多项专利技术</li>
                                    <li>主导产品销售网络遍布全国</li>
                                </ul>
                            </div>
                            <a href="<?= Url::toRoute('business/index_2')?>" class="btn circle btn-theme border btn-sm">阅读更多</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="home/img/services/6.jpg" alt="Thumb">
                            <div class="icon">
                                <i class="flaticon-money"></i>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="<?= Url::toRoute('business/index_3')?>">康养</a>
                            </h4>
                            <div class="list">
                                <ul>
                                    <li>响应国家“康养产业”</li>
                                    <li>引领“健康向上”</li>
                                </ul>
                            </div>
                            <a href="<?= Url::toRoute('business/index_3')?>" class="btn circle btn-theme border btn-sm">阅读更多</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                                <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="home/img/services/5.jpg" alt="Thumb">
                            <div class="icon">
                                <i class="flaticon-money"></i>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="<?= Url::toRoute('business/index_4')?>">科技</a>
                            </h4>   
                            <div class="list">
                                <ul>
                                    <li>求科技战略性新兴产业</li>
                                    <li>“智慧校园”无线网络开发</li>
                                </ul>
                            </div>
                            <a href="<?= Url::toRoute('business/index_4')?>" class="btn circle btn-theme border btn-sm">阅读更多</a>
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
                        首先不论做什么工作，心态一定要放好；其次，一定要有过硬的专业知识；然后，一定要站在客户的角度上想问题，一切以为客户解决问题为出发点，这样客户才会对你放心，才会更加信任你；还有，不论是在工作还是生活中，一定要给人一种积极向上的感觉，感染他人，影响他人，传播正能量。
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Office Environment -->
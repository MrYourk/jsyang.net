<?php
use yii\helpers\Url;

?>

<!-- Start Breadcrumb
============================================= -->
<div class="breadcrumb-area bg-fixed text-center text-light" style="background-image: url(home/img/banner/1.jpg);">
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

<!-- Start Blog ============================================= -->
<div class="blog-area single full-blog left-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">
                    <div class="item">
                        <!-- Start Post Thumb -->
                        <div class="thumb">
                            <a href="#">
                                <img src="home/img/blog/v2.jpg" alt="Thumb">
                            </a>
                        </div>
                        <!-- Start Post Thumb -->
                            <div class="info content-box">
                            <div class="cats">
                                <a href="#">测试</a>
                                <a href="#">用例</a>
                            </div>                             
                            <h3>Common so wicket appear to sudden</h3>
                            <p>
                                Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her. 
                            </p>
                        </div>
                    </div>
                </div>
                 
                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <aside>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>上市板块</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                   <li>
                                        <a href="#">科技 </a>
                                    </li>
                                    <li>
                                        <a href="#">烟配</a>
                                    </li>
                                     <li>
                                        <a href="#">教育</a>
                                    </li>
                                     <li>
                                        <a href="#">康养</a>
                                    </li>
                                     <li>
                                        <a href="#">基金会</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>业务板块</h4>
                            </div>
                            <ul>
                                <li>
                                    <a href="<?= Url::toRoute('business/medicine') ?>">上市板块</a>
                              </li>
                                <li>
                                    <a href="<?= Url::toRoute('business/medicine')?>">非上市板块 </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
    <!-- End Blog -->

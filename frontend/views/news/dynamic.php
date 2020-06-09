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

<!-- Start Blog
  ============================================= -->
<div class="blog-area full-blog left-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">
                    <div class="item-box">
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="home/img/blog/mingde.jpg" alt="Thumb">
                                    </a>

                                </div>
                                <div class="info">
                                    <div class="cats">
                                        <a href="#">来源：邦尼成长</a>
                                    </div>
                                    <h4>
                                        <a href="#">热烈庆祝明德学院二十周年院庆</a>
                                    </h4>
                                    <p>
                                        砥砺奋进二十载，继往开来新时代。

                                        2019年10月19日，西北工业大学明德学院迎来二十周年校庆。

                                        中南山下润桃李，沣河之盼育英才。

                                        西北工业大学明德学院是2005年经教育部批准，由陕西金叶科教集团股份有限公司与西北工业大学在1999年成立的金叶信息技术学院成功办学的基础上，共同申办的全日制本科独立学院。

                                    </p>
                                    <div class="bottom">
                                        <a class="more-btn" href="<?= Url::toRoute('news/news_one')?>">阅读更多</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="home/img/blog/v2.jpg" alt="Thumb">
                                    </a>

                                </div>
                                <div class="info">
                                    <div class="cats">
                                        <a href="#">公司标签</a>
                                    </div>
                                    <h4>
                                        <a href="#">标题 </a>
                                    </h4>
                                    <p>
                                        内容简介
                                    </p>
                                    <div class="bottom">
                                        <a class="more-btn" href="#">阅读更多</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                    <!-- Pagination -->
                    <div class="pagi-area">
                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="title">
                                <h4>搜索</h4>
                            </div>
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" class="form-control">
                                    <button type="submit">
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>新闻中心</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="<?= Url::toRoute('news/news')?>">集团新闻 <span></span></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('news/dynamic')?>">最新公告 <span></span></a>
                                    </li>
                                    <li>

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>最新公告</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="home/img/portfolio/2.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">热烈庆祝明德学院二十周年院庆</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="ti-time"></i> 12 Feb, 2020</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="home/img/portfolio/3.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">热烈庆祝明德学院二十周年院庆 </a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="ti-time"></i> 12 Feb, 2020</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="home/img/portfolio/4.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">热烈庆祝明德学院二十周年院庆</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="ti-time"></i> 12 Feb, 2020</span>
                                        </div>
                                    </div>
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
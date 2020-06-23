<?php

use yii\helpers\Url;
?>


<style>
    .img1{
        width: 100%;
        height: 410px;
    }
</style>
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
                                    <a href="<?= Url::toRoute('news/news_1')?>">
                                        <img src="home/img/blog/jinye.jpg" alt="Thumb" class="img1">
                                    </a>

                                </div>
                                <div class="info">
                                    <div class="cats">
                                        <a href="http://www.jinyegroup.cn/" target="_blank">来源：陕西金叶</a>
                                    </div>
                                    <h4>
                                        <a href="<?= Url::toRoute('news/news_1')?>" >金叶集团与兴业银行西安分行签署战略合作协议</a>
                                    </h4>
                                    <p>
                                        6 月 12 日下午，金叶集团裕兴业银行西安分行银企战略合作签约协议在西安明德理工学院隆重举行
                                    </p>
                                    <div class="bottom">
                                        <a class="more-btn" href="<?= Url::toRoute('news/news_1')?>">阅读更多</a>
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
                                        <img src="home/img/blog/m2.png" alt="Thumb" class="img1">
                                    </a>

                                </div>
                                <div class="info">
                                    <div class="cats">
                                        <a href="#">来源：明德学院</a>
                                    </div>
                                    <h4>
                                        <a href="<?= Url::toRoute('news/news_2')?>">明德学院在第十八届西安市青少年科普知识竞赛中喜获佳绩 </a>
                                    </h4>
                                    <p></p>
                                    <div class="bottom">
                                        <a class="more-btn" href="<?= Url::toRoute('news/news_2')?>">阅读更多</a>
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
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>新闻中心</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="<?= Url::toRoute('news/news')?>">最新公告 <span></span></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('news/dynamic')?>">集团新闻 <span></span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>集团新闻</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="home/img/blog/jinye.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="<?= Url::toRoute('news/news_1')?>">金叶集团与兴业银行西安分行签署战略合作协议</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="ti-time"></i> 10月19日, 2019</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="home/img/blog/m2" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">热烈庆祝明德学院二十周年院庆 </a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="ti-time"></i> 10月19日, 2019</span>
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
                                <li>
                                    <div class="bottom" style="border-top: 0px;">
                                        <a class="more-btn" href="<?= Url::toRoute('news/dynamic')?>">阅读更多</a>
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
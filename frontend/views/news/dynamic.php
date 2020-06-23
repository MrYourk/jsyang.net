<?php

use yii\helpers\Url;
?>

<style>
    .list{
        padding-bottom:20px
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
                                <div class="info">
                                    <h4><a href="<?= Url::toRoute('news/news_2')?>">热烈庆祝明德学院二十周年院庆</a> </h4>
                                    <div class="cats"><a href="#" class="list"> 6月15日  2020年</a></div>
                                    
                                    <h4><a href="<?= Url::toRoute('news/news_1')?>">金叶集团与兴业银行西安分行签署战略合作协议</a> </h4>
                                    <div class="cats"><a href="#" class="list"> 6月12日  2020年</a></div>
                                  
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
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
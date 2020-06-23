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
                                    <h4><a href="#">金叶集团与兴业银行西安分行签署战略合作协议</a> </h4>
                                    <div class="cats"><a href="#" class="list"> 6月12日  2019年</a></div>
                                    
                                    <h4><a href="#">热烈庆祝明德学院二十周年院庆</a> </h4>
                                    <div class="cats"><a href="#"> 6月12日  2019年</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>

                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <aside>
                        <!--<div class="sidebar-item search">
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
                        -->
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
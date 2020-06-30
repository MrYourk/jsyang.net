<?php

use yii\helpers\Url;

?>

<!-- Start Breadcrumb
============================================= -->
<!--<div class="breadcrumb-area bg-fixed text-center text-light" style="background-image: url(home/img/banner/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breadcrumb-items">
                    <h1>Single Left Sidebar</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">SIngle Left Sidebar</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
 -->
<!-- End Breadcrumb -->


<!-- Start Blog
============================================= -->

<div class="blog-area single full-blog left-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">
                    <blockquote>
                            <h2>地理位置</h2><br>
                            <h4>万裕（集团）有限公司</h4><br>
                            <p>地址：深圳市福田区深南大道6019号金润大厦6楼</p>
                        </blockquote>
                        <!-- Start Post Thumb -->
                        <div class="thumb">
                            <iframe width='600' height='330' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://surl.amap.com/3kVPdW1ydCR'></iframe>
                        </div>
                        <!-- Start Post Thumb -->

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
                                <h4>联系我们</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="<?= Url::toRoute('contact/contact')?>">联系方式 <span></span></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('contact/position')?>">地理位置 <span></span></a>
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
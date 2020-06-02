<?php

use yii\helpers\Url;

?>


<!-- Start Blog
============================================= -->

<div class="blog-area single full-blog left-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">

                    <div class="item">

                        <!-- Start Post Thumb -->
                        <div class="thumb">
                            <a href="#">
                                <img src="home/img/blog/v1.jpg" alt="Thumb">
                            </a>
                        </div>
                        <!-- Start Post Thumb -->

                        <div class="info content-box">

                            <blockquote>


                                <p>
                                    说明
                                </p>
                            </blockquote>

                            <!-- Start Post Pagination -->
                            <div class="post-pagi-area">
                                <a href="#"><i class="fas fa-angle-double-left"></i> 上一篇</a>
                                <a href="#">下一篇 <i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <!-- End Post Pagination -->

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
                                <h4>类别列表</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="<?= Url::toRoute('hr/idea')?>">人才理念 <span></span></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('hr/index')?>">招聘岗位 <span></span></a>
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
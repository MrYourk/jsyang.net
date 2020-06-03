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
                                        <a class="more-btn" href="#">Read More</a>

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
                                        <img src="home/img/blog/v3.jpg" alt="Thumb">
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
                                <h4>Search</h4>
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
                                <h4>category list</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="#">national <span>69</span></a>
                                    </li>
                                    <li>
                                        <a href="#">national <span>25</span></a>
                                    </li>
                                    <li>
                                        <a href="#">sports <span>18</span></a>
                                    </li>
                                    <li>
                                        <a href="#">megazine <span>37</span></a>
                                    </li>
                                    <li>
                                        <a href="#">health <span>12</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Recent Post</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="home/img/portfolio/2.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Participate in staff meetingness</a>
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
                                        <a href="#">Future Plan & Strategy for Consutruction </a>
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
                                        <a href="#">Melancholy particular devonshire alteration</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="ti-time"></i> 12 Feb, 2020</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-item archives">
                            <div class="title">
                                <h4>Archives</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li><a href="#">Aug 2020</a></li>
                                    <li><a href="#">Sept 2020</a></li>
                                    <li><a href="#">Nov 2020</a></li>
                                    <li><a href="#">Dec 2020</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item gallery">
                            <div class="title">
                                <h4>Gallery</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="home/img/portfolio/8.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="home/img/portfolio/7.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="home/img/portfolio/6.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="home/img/portfolio/5.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="home/img/portfolio/3.jpg" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="home/img/portfolio/2.jpg" alt="thumb">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item social-sidebar">
                            <div class="title">
                                <h4>follow us</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="g-plus">
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
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
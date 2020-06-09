<?php

use yii\helpers\Url;
$layout = 'test';
?>

<!-- Start Breadcrumb
============================================= -->
<div class="breadcrumb-area bg-fixed text-center text-light" style="background-image: url(home/img/banner/3.jpg);">
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

<div class="blog-area single full-blog left-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">

                    <div class="item">
                        <div class="info content-box">
                            <h3>法务经理</h3>
                            <h5>岗位职责:</h5>
                            <blockquote>
                                <p>1、建立和完善集团的法务管理体系，包括合同法务管理、投资法务管理、诉讼法务管理、综合法务管理；</p>
                                <p>2、为集团各项经营管理活动及各区域公司重大经营管理活动提供法律咨询与支持，出具法律意见；</p>
                                <p>3、对集团各类合同、协议及各区域公司上报的合同、协议进行审查，提供法律意见，保障集团的合法利益；</p>
                                <p>4、对集团各类规章制度出具法律意见、提供法律支持；</p>
                                <p>5、对集团投资并购项目安排协调法律尽职调查，安排起草、审核投资项目协议，指导并购项目的交割落地；</p>
                                <p>6、处理集团各类法律纠纷及各区域公司上报的经济、民事、行政等诉讼、仲裁活动；</p>
                                <p>7、负责与集团外聘常年法律顾问及各专项法律事务工作外聘律师的联络工作，并对其工作进行监督与评价；</p>
                                <p>8、为集团的商业秘密、商标、著作权、互联网域名、源代码等知识产权事务出具法律意见；</p>
                                <p>9、参与各区域法务负责人、各区域法务工作的考核；</p>
                                <p>10、对集团内部涉嫌违法行为，提出纠正意见，负责协调有关部门予以整改，构成犯罪的移交司法机关依法处理</p>
                            </blockquote>
                            <h5>岗位要求：</h5>
                            <blockquote>
                                <p> 1、本科及以上学历，法学相关专业，取得法律职业资格证；</p>
                                <p> 2、3-5年相关工作经验；</p>
                                <p> 3、熟悉公司法，合同法，经济法，物权法等，掌握公司治理诉讼等专业技能；</p>
                                <p> 4、具备较强的文字表达能力、组织协调能力和沟通能力；</p>
                                <p> 5、思维活跃，有良好的责任心和职业素养具备出色的沟通应变能力和沉稳细致的行事风格</p>
                            </blockquote>
                          
                            <!-- Start Post Pagination -->
                            <div class="post-pagi-area">
                                <a href="#"><i class="fas fa-angle-double-left"></i> 上一篇</a>
                                <a href="<?= Url::toRoute('hr/hr_1')?>">下一篇 <i class="fas fa-angle-double-right"></i></a>
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
                                <h4>加入我们</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="<?= Url::toRoute('hr/idea')?>">人才理念 <span></span></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('hr/index')?>">招聘岗位 <span>3</span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>岗位信息</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="home/img/portfolio/2.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">岗位1</a>
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
                                        <a href="<?= Url::toRoute('hr/index')?>">法务经理 </a>
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
                                        <a href="#">岗位三</a>
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
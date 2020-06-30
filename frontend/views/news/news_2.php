<?php

use yii\helpers\Url;
?>

<style>
    .list{
        padding-bottom:20px
    }
    p{
        text-indent: 2em;
        font-size: 16px;
        line-height: 30px;
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
                                    <h3 style=" text-align: center;">明德学院在第十八届西安市青少年科普知识竞赛中喜获佳绩</h3>
                                    <p>近日，由西安市科学技术学会、共青团西安市委、西安市教育局等单位共同主办的第十八届西安市科普知识竞赛圆满落幕。</p>
                                    <p>此次科普知识竞赛围绕“青少年身边的科学”这个中心，涉及环保、能源、气象、航天、化学等18个方面的科学知识。陕西省1100多所学校的20余万名青少年参加了本次竞赛。</p>
                                    <p>经评审，明德学院荣获第十八届西安市青少年科普知识竞赛“先进单位”；学院高长江、祝卫杰荣获西安市青少年科普知识竞赛“先进个人”，101011802班蒲子怡同学荣获（大学组）一等奖、10311703班王艺伟等2名同学荣获（大学组）二等奖、104021802班宋颖同学等19位同学获得（大学组）三等奖。</p>
                                    <p>据悉，西安市青少年科普知识竞赛已成功举办了十八届，是全面贯彻落实《全民科学素质行动计划纲要》的大型科普活动，本届竞赛在促使同学们了解科学、了解社会、了解陕西，开拓视野、培养科技兴趣等方面起到了积极的作用。（文/任伟  明德学院）</p>
                                    <img src="home/img/blog/m2.jpg"/>

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
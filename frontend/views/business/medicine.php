<?php
use yii\helpers\Url;

?>

<style>
    .img1{
        width: 100%;
        height: 460px;
    }
    p{
        text-indent: 2em;
        padding-top: 20px;
        line-height: 30px;
    }
</style>
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
                                <img src="home/img/blog/jinron.jpg" alt="Thumb" class="img1">
                            </a>
                        </div>
                        <!-- Start Post Thumb -->
                            <div class="info content-box">
                            <p>万裕集团立足于集团业务的发展愿景，承载着构建集团新金融版图的使命，秉持着“万和众兴，裕民足国”的理念，致力于成为中国最值得尊重的新金融服务机构之一。</p>
                        </div>
                    </div>
                </div>
                 
                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <aside>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>非上市板块</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="<?= Url::toRoute('business/medicine')?>">金融 </a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('business/medicine1')?>">房地产</a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('business/medicine2')?>">物业管理</a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('business/medicine3')?>">康养</a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('business/medicine4')?>">公益慈善</a>
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
                                    <a href="<?= Url::toRoute('business/index') ?>">上市板块</a>
                                </li>
                                <li>
                                    <a href="<?= Url::toRoute('business/medicine') ?>">非上市板块 </a>
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

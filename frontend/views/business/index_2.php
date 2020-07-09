<?php

use yii\helpers\Url;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
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
                            <img src="home/img/business/yanpei.jpg" alt="Thumb" >
                        </div>
                        <!-- Start Post Thumb -->
                        <div class="info content-box">
                                        
                             <div class="cats">

                            </div>   
                            <p>集团一直关注于烟草配套行业的发展，拥于60多项专利技术。开展烟标、烟配行业印刷及烟用滤嘴棒生产和销售，公司主导产品销售网络遍布湖北、陕西、川渝、河南、云南、贵州、江苏等全国重点烟草集团以及泰国、香港等海外市场，积累了稳定优质的客户资源，行业影响力不断扩展。 </p>
                        </div>
                    </div>
                </div>
                 
                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <aside>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>上市板块</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="<?= Url::toRoute('business/index')?>">房地产</a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('business/index_1')?>">教育 </a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('business/index_2')?>">烟配</a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('business/index_3')?>">康养</a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('business/index_4')?>">科技</a>
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
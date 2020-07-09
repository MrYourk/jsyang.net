<?php

use yii\helpers\Url;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
    .img1{
        width: 100%
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
                            <img src="home/img/business/kangyang1.jpg" alt="Thumb" class="img1">
                        </div>
                        <!-- Start Post Thumb -->
                        <div class="info content-box">
                                        
                             <div class="cats">

                            </div>   
                            <p>积极响应国家“康养产业”发展战略布局，开启健康养老全新模式，引领“健康向上”的发展轨迹，践行“万和众兴、裕民足国”的大健康产业发展。</p>
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
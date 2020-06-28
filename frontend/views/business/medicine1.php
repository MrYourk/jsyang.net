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
                            <a href="#">
                                <img src="home/img/blog/fandic1.jpg" alt="Thumb">
                            </a>
                        </div>
                        <!-- Start Post Thumb -->
                            <div class="info content-box">        
                            <p>坚持精准定位，重点布局，不断进取，探索美好生活方式 ，秉承“万家乐安居”的理念，在粤港澳大湾区的依托下，保持市场领先优势。</p>
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
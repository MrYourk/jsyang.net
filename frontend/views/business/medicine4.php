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
                                <img src="home/img/blog/.jpg" alt="Thumb">
                            </a>
                        </div>
                        <!-- Start Post Thumb -->
                        <div class="info content-box">
                            <p>为了弘扬中国传统的人文文化，促进慈善公益事业的发展，深圳市汉源慈善公益基金会旨在通过开展形式多样、内容丰富的公益慈善活动，关爱老少边穷地区的基础教育事业，救助贫困边区的失学儿童、残障儿童，赈灾援助、帮残助教等，促进社会和谐发展，家庭和睦幸福。</p>
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
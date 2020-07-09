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
                           
                            <img src="home/img/business/keji1.png" alt="Thumb" >
                        </div>
                        <!-- Start Post Thumb -->
                        <div class="info content-box">
                                        
                             <div class="cats">

                            </div>   
                            <p>公司业务方向涉及云计算、大数据、移动互联、物联网、信息安全等领域，主要业务领域涵盖系统集成、软件开发、IT规划咨询、系统运维等。公司在高校教育领域深耕多年，已成功培育出“智慧校园”互联网项目，并深度介入校园网络管理、教学管理的信息化系统，同时还具备了丰富的在线教育、公开课、技能培训等教育教学共享资源与“慕课”平台知识体系的积累。公司目前已在陕西、河南、山东、湖北、云南等地的多所万人规模以上高校成功实施了校园无线网络的投资建设与运营。</p>
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
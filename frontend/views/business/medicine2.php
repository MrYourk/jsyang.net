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
                                <img src="home/img/business/wuye.jpg" alt="Thumb">
                            </a>
                        </div>
                        <!-- Start Post Thumb -->
                            <div class="info content-box">
                            <p>住宅小区的物业管理：房屋管理、房屋装修管理服务；物业共用设施设备管理服务；环境清洁卫生管理服务；绿化管理服务；安全管理服务包括物业管理区域内的治安防范、消防管理和车辆管理三大方面；文化、娱乐服务；其它同时惠及全体业主、使用人的服务；</p>
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
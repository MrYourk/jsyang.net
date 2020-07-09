<?php

use yii\helpers\Url;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
    #vc_row{
        padding-bottom: 10px!important;
        margin-bottom: 30px;
        border-bottom: 1px solid #e8e8e8;
    }
    .before{
        width: 100%;
        float: left;
    }
    .mk_title{
        float: left; 
        width: 42%;
    }
    .md_title{
        float:left; 
        width: 58%;
    }
    h3{
        
        color: #00cdcd;
    }
</style>


 <!-- Start Blog ============================================= -->
<div class="blog-area single full-blog left-sidebar full-blog default-padding" class="card">
    
    <div class="container">
        
        <div class="row">
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
            
            <!-- Single Item -->
            <div class="blog-items">
                <div id="vc_row" class="blog-content col-md-8">
                    <div class="item before">
                        <div class="thumb mk_title">
                            <a href="" title="万裕地产"><img src="home/img/business/fandic.jpg" alt="Thumb"></a>
                        </div>
                        
                        <div class="info content-box md_title"> 
                            <h3>万裕. 椰风海岸</h3>
                            
                            <p>[万裕. 椰风海岸]用地面积21965.9平方米，总建筑面积约70500平方米，其中上市交易的住宅面积53770平方米，地铺面积1580平方米，地下室及设计的地下车库、设备房面积工12000平方米。工程性质为小高层住宅，层数为12-17层不等，小区住户约560户，居住人数逾2000人，停车位约350个，绿化率约45%以上，住户实用面积率为50%以上。</p>
                        </div>
                    </div>
                </div>
                
                <div id="vc_row" class="blog-content col-md-8">
                    <div class="item before">
                        <div class="thumb mk_title">
                            <a href="" title="万裕地产"><img src="home/img/business/longting.jpg" alt="Thumb"></a>
                        </div>
                        
                        <div class="info content-box md_title"> 
                            <h3>万裕. 龙庭水岸</h3>
                            <p>公司在南京的第一个项目正式命名为[万裕. 龙庭水岸]。项目占地约319.2亩，总建筑面积约27万平方米，建设多层住宅122栋，小高层25栋的高尚人文自然景观小区。地块位于南京江宁科学院学九路以南，学四路有以东地块，距离南京市区18公路。</p>
                        </div>
                    </div>
                </div>   
                <div id="vc_row" class="blog-content col-md-8">
                    <div class="item before">
                        <div class="thumb mk_title">
                            <a href="" title="万裕地产"><img src="home/img/business/kunming.jpg" alt="Thumb"></a>
                        </div>
                        
                        <div class="info content-box md_title"> 
                            <h3>万裕（昆明）房地产开发有限公司</h3>
                            <p>万裕（昆明）房地产开发有限公司 是万裕集团全资子公司，于一九九二年在昆明注册，具有城市房地产综合开发二级资质的外商独资企业。注册资本三千五百万港元，是集团公司的主要附属公司。公司主要从事昆明国际商品交易会开发的房地产开发，昆明高新技术产业开发区、昆明海埂旅游度假等新品别墅、商住楼、生产性建筑的开发、经营、销售及配套设施的建设。</p>
                        </div>
                    </div>
                </div> 

            </div>
            <!-- End Single Item -->
          
        </div>
    </div>
</div>
    <!-- End Blog -->
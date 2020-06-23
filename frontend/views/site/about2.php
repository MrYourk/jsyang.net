<?php
use yii\helpers\Url;

?>


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
                                <img src="home/img/blog/v2.jpg" alt="Thumb">
                            </a>
                        </div>
                        <!-- Start Post Thumb -->
                            <div class="info content-box">
                            <div class="cats">
                                <a href="#">测试</a>
                                <a href="#">用例</a>
                            </div>                             
                            <h3>Common so wicket appear to sudden</h3>
                            <p>
                                Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her. 
                            </p>
                        </div>
                    </div>
                </div>
                 
                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <aside>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>关于万裕</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                   <li>
                                        <a href="<?= Url::toRoute('site/about')?>">企业介绍 </a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('site/about1')?>">企业文化</a>
                                    </li>
                                     <li>
                                        <a href="<?= Url::toRoute('site/about2')?>">组织架构</a>
                                    </li>
                                     <li>
                                        <a href="<?= Url::toRoute('site/speech')?>">创始人致辞</a>
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
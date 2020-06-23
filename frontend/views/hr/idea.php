<?php

use yii\helpers\Url;

?>

<!-- Start Breadcrumb
============================================= -->
<div class="breadcrumb-area bg-fixed text-center text-light" style="background-image: url(home/img/banner/5.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!--<div class="breadcrumb-items">
                    <h1>Single Left Sidebar</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">SIngle Left Sidebar</li>
                    </ul>
                </div>
                -->
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<!-- Start Blog
============================================= -->

<div class="blog-area single full-blog left-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">
                        <div class="info content-box">

                            <blockquote>
                                <h3 style="text-align:left">人才理念</h3>
                                <h4 style="text-align: center">以宏伟愿景聚才&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;以良好环境育才&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 以卓越成就励才</h4>
                                <p style="text-indent: 2em; line-height: 33px ">企业的竞争，归根结底是人才的竞争。金叶集团“纳百川成海业，思进取赢未来”的宏伟愿景激发每一位金叶人的工作热情，让员工对个人与企业在未来的发展有更深的期待。</p><br>
                                <p style="text-indent: 2em; line-height: 33px " >我们致力于营造快乐的工作环境和良好的组织氛围！通过组织学习、自我学习与内外部培训等方式，为员工提供自我提升和进步的机会；通过培训学习，不仅提升各级员工的主观能动性及团队合作意识，更使员工在适合自身职业发展的岗位上充分发挥才能，真正做到人尽其才。我们建立健全企业考核机制，除切实发挥以目标管理为导向的考核效果外，更为重要的是针对员工的工作成果与工作能力，建议其接受适合自己的训练及发展目标，以有效地提高工作能力与发展潜能。</p>
                            </blockquote>

                        </div>
                </div>

                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <aside>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>加入我们</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="<?= Url::toRoute('hr/idea')?>">人才理念 <span></span></a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('hr/index')?>">人才招聘 <span></span></a>
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
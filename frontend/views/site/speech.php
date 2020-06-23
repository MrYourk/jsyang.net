<?php
use yii\helpers\Url;

?>

<style>
    p{
        text-indent: 2em;
        line-height: 30px;
    }
    .blog-area .blog-items .info {
        padding: 0px;
        padding-top: 20px;
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
                                <img src="home/img/blog/v1.jpg" alt="Thumb">
                            </a>
                        </div>
                        <!-- Start Post Thumb -->
                            <div class="info content-box">
                            <div class="cats">
                            </div>                             
                            <h3>董事局主席致辞</h3>
                            <h5>MESSAGE FROM THE PRESIDENT</h5><br>
                            <p>集团自始创于1986年的香港“汉华企业”一路走来，历经30多年的市场磨砺和文化积淀，如今已成为以万裕集团为核心，旗下拥有上市公司陕西金叶科教集团（股票代码：000812）、深圳市瑞丰新材料科技集团，及西安明德理工学院、城建学院等多家企业集团及大学院校，业务遍布广东、陕西、云南、江苏等地，融合教育产业、烟配行业、包装印刷、房地产、金融投资、康养产业、防伪科技、物业管理等多种业态于一体的多元化综合集团公司。</p>
                            <p>新时期，新起点。集团董事局主席兼总裁袁汉源先生高瞻远瞩、与时俱进，提出了“再创业，大发展”宏伟战略，为铸就“百年万裕”的历史丰碑注入了崭新动力。</p>
                            <p>我们信奉“德才兼备”的选才准则，打造了一支敢想敢拼、富有激情的团队；同时倡导“追求创新、蓬勃向上”的工作氛围；为每位员工提供广阔发展空间的同时，努力为大家打造最优的职业上升通道，使每位员工均可获得良性竞争的工作环境，以及可持续发展的平台和机会；您在为集团做出贡献的同时，集团也为您提供实现人生价值的契机。</p>
                            <p>我们引领“健康向上”的发展轨迹，践行“万和众兴、裕民足国”的企业理念，秉承“勤奋、求实、诚信、创新”的核心价值观，以“顽强拼搏，永不言败”的万裕精神，努力达成“创造卓越文化生活”的使命，力争实现成为一流企业集团的战略目标。</p>
                            <p>三十载，春秋风雨；忆往昔，岁月峥嵘；</p>
                            <p>拓疆土，滇陕苏粤；泽寰宇，止于至善。</p>
                            <p>再创业，激情澎湃；看今朝，勇铸新峰；</p>
                            <p>布全局，多点开花；万世基，与君共勉。</p>
                            <p>我们愿与您一道为实现目标孜孜不倦的奋斗，您的贡献将成为实现集团战略愿景的重要基石。</p>
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
                                        <a href="<?= Url::toRoute('site/speech')?>">创始人致辞</a>
                                    </li>
                                   <li>
                                        <a href="<?= Url::toRoute('site/about')?>">企业介绍 </a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('site/about1')?>">企业文化</a>
                                    </li>
                                     <li>
                                        <a href="<?= Url::toRoute('site/about2')?>">组织架构</a>
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
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
                            <h3>董事会主席致辞</h3>
                            <h5>MESSAGE FROM THE PRESIDENT</h5><br>
                            <p>万裕，作为一家多元化的跨国集团，二十多年来一向以“万家乐安居“为己任，以“裕业展宏图”为目标，励精图治不断开拓，成绩斐然。近年来，万裕集团与时俱进，以“创造卓越文化生活”为精神使命，致力于文化产业的创新开发力求为全球客户提供满意的文化产品和文化衍生产品跨越迈进，再创辉煌</p>
                            <p>今天的万裕集团，以文化产业为主业，带动房地产开发，生物制药业发展，同时广涉彩色包装印刷、感光器材等多项事业，分布远至美国，新加坡等地，拥有员工三千多人，资产逾二十多亿</p>
                            <p>万裕发展为一家贡献社会前景广阔的集团公司，实在有赖于公司发展定位准确，行业进取富有发展潜力，宽广而又良好的客户网路，社会各方面的大力支持与配合。董事局皆为社会精英，决策非同凡响，员工对公司的忠诚，对事业的执著对业务的开拓，进而推动企业快速持续发展</p>
                            <p>借此机会，本人由衷地感谢董事局成员及全体员工多年来的努力进取，敢于承担!感谢广大客户的信赖与支持！感谢各界朋友的关怀与厚爱！感谢同行先进友好的大力帮助！</p>
                            <p>本集团将整合优质资源，随时准备与各界同仁紧密合作，力争经济效益百尺竿头，更进一步，并与新老朋友一道，携手创造市场经济的繁荣，构筑人类社会更加广阔的空间</p>
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
                                        <a href="<?= Url::toRoute('site/about1')?>">企业介绍 </a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::toRoute('site/about2')?>">企业文化</a>
                                    </li>
                                     <li>
                                        <a href="<?= Url::toRoute('site/about3')?>">组织架构</a>
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
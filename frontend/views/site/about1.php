<?php
use yii\helpers\Url;

?>
<style>
    p{
        text-indent: 2em;
        font-size: 16px;
        line-height: 30px;
    }
    h3{
        font-weight: bold;
    }
</style>

<!-- Start Blog ============================================= -->
<div class="blog-area single full-blog left-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">
                    <div class="item">
                        <div class="info content-box">                      
                            <h3>企业理念</h3>
                            <p>万世基业，裕泽寰宇 &nbsp;&nbsp;&nbsp;&nbsp;万和众兴，裕民足国</p>
                            <h3>企业精神</h3>
                            <p>诚信丶务实丶团队、创新</p>
                            <h3>企业使命</h3>
                            <p>创造卓越文化生活</p>
                            
                            <p>	&bull; 万裕集团及所有海内外的万裕员工矢志追求在文化、地产、医药等领域的卓越表现；</p>
                            <p>	&bull; 万裕集团倡导“以人為本”的企业文化，充分尊重每位员工个人的价值，期待每个“万裕   人”为集团的美好前景和个人的美好生活贡献力量；</p>
                            <p>	&bull; 万裕集团是“与时俱进”的社区文化的传播人，“万裕文化”是全球所有万裕集团所在社区文化的代表；</p>
                            
                            <h3>企业愿景</h3>
                            <p>成为提供卓越文化生活产品的一流国际企业集团</p>
                            <p>	&bull; 万裕集团秉承全球化的战略视角，围绕文化丶地产开发、医药制造等领域开展竞争，价值创造，为全球客戶提供满意的文化产品及衍生产品；</p>
                            <p>	&bull; 万裕集团的成长来自对“文化生活产品”的理解和創创新集团通过对出版、印刷、发行、动漫影视传媒、地产开发、医药等行业的资源整合，形成独树一帜的、可持续发展的盈利模式; </p>
                            <p>	&bull; 万裕集团保持全球范围內各业务的高速增长・跻身世界一流跨国集团的行列，受同行瞩目；</p>
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
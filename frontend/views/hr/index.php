<?php

use yii\helpers\Url;
$layout = 'test';
?>

<style>
 
    p{
        line-height: 20px;
    }
    info{
        padding: 1px;
    }
</style>
<!-- Start Breadcrumb
============================================= -->
<div class="breadcrumb-area bg-fixed text-center text-light" style="background-image: url(home/img/banner/3.jpg);">
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
                    <div class="item">
                        <h3 class="span1" onclick="fun();">法务经理（工作地点：深圳）</h3>
                        <div class="" class="info content-box" > 
                            <h5>岗位职责:</h5>
                            <blockquote>
                                <p>1、建立和完善集团的法务管理体系，包括合同法务管理、投资法务管理、诉讼法务管理、综合法务管理；</p>
                                <p>2、为集团各项经营管理活动及各区域公司重大经营管理活动提供法律咨询与支持，出具法律意见；</p>
                                <p>3、对集团各类合同、协议及各区域公司上报的合同、协议进行审查，提供法律意见，保障集团的合法利益；</p>
                                <p>4、对集团各类规章制度出具法律意见、提供法律支持；</p>
                                <p>5、对集团投资并购项目安排协调法律尽职调查，安排起草、审核投资项目协议，指导并购项目的交割落地；</p>
                                <p>6、处理集团各类法律纠纷及各区域公司上报的经济、民事、行政等诉讼、仲裁活动；</p>
                                <p>7、负责与集团外聘常年法律顾问及各专项法律事务工作外聘律师的联络工作，并对其工作进行监督与评价；</p>
                                <p>8、为集团的商业秘密、商标、著作权、互联网域名、源代码等知识产权事务出具法律意见；</p>
                                <p>9、参与各区域法务负责人、各区域法务工作的考核；</p>
                                <p>10、对集团内部涉嫌违法行为，提出纠正意见，负责协调有关部门予以整改，构成犯罪的移交司法机关依法处理</p>
                            </blockquote>
                            <h5>任职资格：</h5>
                            <blockquote>
                                <p>1、会计、财务管理或金融专业本科以上学历，有中级会计师及以上职称；</p>
                                <p>2、5年以上集团公司同等职位的财务管理工作经验；</p>
                                <p>3、熟悉会计、审计、税务相关法律法规，较强的财务分析、融资和资金管理能力；</p>
                                <p>4、对风险管理、风险体系有深刻理解，良好的风险控制能力和管理素养；</p>
                                <p>5、熟练掌握财务管理软件和办公软件；</p>
                                <p>6、良好的组织、协调能力，良好的表达能力和团队合作精神。</p>
                            </blockquote>
                        </div>
                        
                        <!--                        
                        <h3 class="span1" onclick="fun2();">总经理（工作地点：云南玉溪）</h3>
                        <div id="con2" style="display: none" class="info content-box">
                            <h5>岗位职责:</h5>
                            <blockquote>
                                <p>1、根据集团的发展战略，负责制订经营管理方案以及发展经营计划，包括财务预算、工程计划、营销计划、资金计划和人事计划等，经总裁批准后组织实施；</p>
                                <p>2、负责企业日常经营管理工作，全面执行和检查落实各项工作计划，召集主持总经理会议、检查督促、指导和协调各分子公司的工作进展；</p>
                                <p>3、负责各项目开发建设的战略研究、节奏控制，部署、落实年度、月度工作计划；</p>
                                <p>4、负责寻找、筛选新项目，组织对所寻找的项目进行评估、论证、投资估算、规划设计、产品定位和成本控制，编制可行性研究报告，为集团领导的决策提供依据；</p>
                                <p>5、负责搭建经营管理团队，组织安排相关专业知识的培训，建立健全统一、高效的组织体系和工作体系，建立健全各项规章制度和管理流程，并监督执行；</p>
                                <p>6、执行集团决议，保证经营管理、效益、利润目标的实现，及时、足额地完成集团下达的各项指标和任务；</p>
                                <p>7、负责与政府及相关管理部门的联络及沟通，保持良好的公共关系和人脉资源；</p>
                                <p>8、完成领导交办的其他工作。</p>
                            </blockquote>
                            <h5>任职资格：</h5>
                            <blockquote>
                                <p>1、30-45岁，全日制本科及以上学历，十年以上生产运营型企业工作经验，3年以上企业高层管理经验；</p>
                                <p>2、熟悉企业经营管理和企业运作及各部门的工作流程；</p>
                                <p>3、具有出众的领导能力、分析和判断能力、决策能力、沟通能力以及卓越战略眼光；作风严谨稳健、富有创新意识和开拓精神；务实、敬业，能够承受较大的工作压力。</p>
                                <p>4、具有全局意识、战略思维和统筹安排的能力，以及卓越的综合协调能力。</p>
                                <p>5、有烟配、防伪行业经验优先。</p>
                            </blockquote>
                        </div>
                                
                        <h3 class="span1" onclick="fun3();">副总经理（生产管理）（工作地点：云南玉溪）</h3>
                        <div id="con3" style="display: none" class="info content-box">
                            <h5>岗位职责:</h5>
                            <blockquote>
                                <p>1、协助总经理开展工作日常生产经营活动；</p>
                                <p>2、负责工厂的组织管理、人员配置、设备配置及生产计划安排；；</p>
                                <p>3、协调各部门之间的沟通与合作，及时解决生产中出现的各类问题；</p>
                                <p>4、组织生产、设备、安全、环保等制度拟订、检查、监督、控制及执行；</p>
                                <p>5、负责编制生产管理制度及产品质量标准化体系的搭建，并组织实施；</p>
                                <p>6、负责公司企业生产安全，保证生产及车间一切安全措施的执行实施，实现零意外发生；</p>
                                <p>7、参与企业日常管理工作。</p>
                            </blockquote>
                            <h5>任职资格：</h5>
                            <blockquote>
                                <p>1、年龄27-45岁，生产管理或相关专业本科毕业；</p>
                                <p>2、五年以上生产制造企业高层管理经验，有烟配行业或印刷行业工作经验优先；</p>
                                <p>3、具备良好的计划能力、指导能力、决策能力，较强的综合协调能力和组织管理能力；</p>
                                <p>4、有丰富的生产管理、成本控制、质量管理、设备、物流、生产管理流程等实务管理经验；</p>
                                <p>5、熟悉生产工艺管理和生产规范，具备全面的精益生产理念和丰富的精益生产实践经验。</p>
                            </blockquote>
                        </div>
                                        
                        <h3 class="span1" onclick="fun4();">销售经理（工作地点：云南玉溪）</h3>
                        <div id="con4" style="display: none" class="info content-box">
                            <h5>岗位职责:</h5>
                            <blockquote>
                                <p>1、根据公司发展战略组织制定营销战略规划，参与公司重大经营决策；</p>
                                <p>2、负责组织搜集产品相关行业政策、竞争对手信息、客户信息等，分析市场发展趋势；</p>
                                <p>3、定期、准确向公司总经理和相关部门提供有关销售情况、费用控制情况、销售收入等反映公司营销工作现状的信息，为公司重大决策提供信息支持；</p>
                                <p>4、参与制定年度销售目标和计划，提请公司领导决策，并监督检查实施情况；</p>
                                <p>5、组织制定公司的销售管理制度，全面调动销售人员的积极性，建立完善的销售网络，提高产品市场占有率；</p>
                                <p>6、配合产品销售进度，制定部门阶段工作计划，合理安排部门工作。管理、检查、考核各部门经理的各项工作计划执行情况；</p>
                                <p>7、负责销售合同的审核、修订及签定工作，提高履约率，扩大企业知名度；</p>
                                <p>8、认真组织销售货款回收工作，及时催收应收款，保证资金周转，提高企业经济效益；</p>
                                <p>9、严格控制和逐步压缩销售费用，节约开支，降低销售成本；</p>
                                <p>10、及时掌握有关产品和工作的反馈信息，和用户、生产、质检、物流等相关部门保持良好的沟通关系，及时组织供货，解决各种有关问题，做好售后服务，让用户满意；</p>
                                <p>11、完成领导交办的其他工作。</p>
                          
                            </blockquote>
                            <h5>任职资格：</h5>
                            <blockquote>
                                <p>1、30-45岁，企业管理、市场营销或相关专业，专科及以上学历；</p>
                                <p>2、从事5年以上大中型烟配企业或相关企业的销售管理工作经验，其中至少五年以上管理岗位工作经历；</p>
                                <p>3、具有全局意识、战略思维和统筹安排的能力，卓越的协调和应变能力；</p>
                                <p>4、具有良好的沟通表达能力，与政府部门、宣传策划机构、业务合作伙伴、渠道合作伙伴的联络及沟通，保持良好的公共关系和人脉资源。</p>
                            </blockquote>
                        </div>
                                                
                        <h3 class="span1" onclick="fun5();">办公室主任（工作地点：云南玉溪）</h3>
                        <div id="con5" style="display: none" class="info content-box">
                            <h5>岗位职责:</h5>
                            <blockquote>
                                <p>1、在总经理领导下负责行政办公室的全面管理工作；</p>
                                <p>2、协调各部门工作，协助总经理监督、检查对各项方针、政策、上级批示和重要决定及各项规章制度的执行情况；</p>
                                <p>3、组织安排公司重要会议，督办公司领导决策、会议决议以及各部门材料上报，目标责任制落实情况等；</p>
                                <p>4、加强对外联络，促进公司与社会各界的广泛合作和友好往来，树立良好的企业形象；</p>
                                <p>5、监督检查公司的公文管理、印章管理、车辆管理、档案管理和办公用品管理等；</p>
                                <p>6、负责员工食堂管理工作；</p>
                                <p>7、负责公司人力资源管理、评估，建立制度化、规范化、科学化的人力资源管理体系；</p>
                                <p>8、负责组织建立绩效管理体系，制订相关方案；牵头组织公司各部门进行绩效考核并予以指导、监督和考核；</p>
                                <p>9、负责制定公司的薪酬、福利方案，建立科学的薪酬管理体系；</p>
                                <p>10、负责部门安全管理工作；</p>
                          
                            </blockquote>
                            <h5>任职资格：</h5>
                            <blockquote>
                                <p>1、年龄27-45岁，专科及以上学历，行政管理及公共管理类专业；</p>
                                <p>2、五年以上工作经验，三年以上同岗位工作经验；</p>
                                <p>3、熟悉总办职能运作，有大型活动、会议组织策划经验；</p>
                                <p>4、有较强的组织、协调、沟通、领导能力及出色的人际交往和社会活动能力以及敏锐的洞察力；</p>
                                <p>5、具有很强的判断与决策能力，计划和执行能力；</p>
                                <p>6、良好的团队协作精神，为人诚实可靠、品行端正、具有亲和力，较强的独立工作能力和公关能力。</p>
                                <p>7、有烟配、防伪行业经验优先。</p>
                            </blockquote>
                        </div>
                                                        
                        <h3 class="span1" onclick="fun6();">产品工程师（工作地点：云南玉溪）</h3>
                        <div id="con6" style="display: none" class="info content-box">
                            <h5>岗位职责:</h5>
                            <blockquote>
                                <p>1、负责新产品的设计、开发方案和产品工程工艺流程；</p>
                                <p>2、编写新产品成本分析表；</p>
                                <p>3、制作BOM表、参数表、新产品作业指导书、试产量产报告和承认书，新产品各工序计件单价制定等；</p>
                                <p>4、试产新产品时技术服务支持（指导培训本公司技术人员及员工），分析不良品产生原因并提出改善方案；</p>
                                <p>5、负责技术资料和工艺文件的受控；</p>
                                <p>6、上级主管交办事项。</p>
                          
                            </blockquote>
                            <h5>任职资格：</h5>
                            <blockquote>
                                <p> 1、27-45岁，工艺计划或计算机等专业专科以上学历，熟练使用计算机办公软件；</p>
                                <p> 2、熟悉防伪产品相关国家和国际标准、行业标准；</p>
                                <p> 3、熟练使用常规检测仪器，设计和制作工装、夹具；</p>
                                <p> 4、具备独立分析和解决生产产品品质异常的能力；</p>
                                <p> 5、具备独立制定产品开发计划的能力。</p>
                            </blockquote>
                        </div>
                        -->
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
                          
                        <div class="sidebar-item social-sidebar">
                            <div class="title">
                                <h4>人力资源邮箱</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li class="facebook">
                                        <a href="mailto:group-guanyh@maxyee.com">group-hufp@maxyee.com </a>
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


<!--
<script type="text/javascript">
    var flag = false;
    var div = document.getElementById("con");

    function fun() {
        if (flag ^= true) {
            div.style.display = "block";    // 显示
        } else {
            div.style.display = "none";     // 隐藏
        }
    }
    

    var div1 = document.getElementById("con1");
    function fun1() {
        if (flag ^= true) {
            div1.style.display = "block";    // 显示
        } else {
            div1.style.display = "none";     // 隐藏
        }
    }
    
    var div2 = document.getElementById("con2");
    function fun2() {
        if (flag ^= true) {
            div2.style.display = "block";    // 显示
        } else {
            div2.style.display = "none";     // 隐藏
        }
    }
    
    var div3 = document.getElementById("con3");
    function fun3() {
        if (flag ^= true) {
            div3.style.display = "block";    // 显示
        } else {
            div3.style.display = "none";     // 隐藏
        }
    }
    
    var div4 = document.getElementById("con4");
    function fun4() {
        if (flag ^= true) {
            div4.style.display = "block";    // 显示
        } else {
            div4.style.display = "none";     // 隐藏
        }
    }
    
    var div5 = document.getElementById("con5");
    function fun5() {
        if (flag ^= true) {
            div5.style.display = "block";    // 显示
        } else {
            div5.style.display = "none";     // 隐藏
        }
    }
    
    var div6 = document.getElementById("con6");
    function fun6() {
        if (flag ^= true) {
            div6.style.display = "block";    // 显示
        } else {
            div6.style.display = "none";     // 隐藏
        }
    } 
    
    var div7 = document.getElementById("con7");
    function fun7() {
        if (flag ^= true) {
            div7.style.display = "block";    // 显示
        } else {
            div7.style.display = "none";     // 隐藏
        }
    }
</script>
-->
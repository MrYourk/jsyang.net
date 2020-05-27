<?php
use backend\assets\AppAsset;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width">
    <title>登录</title>
    <?php $this->head()?>

    <link rel="stylesheet" type="text/css" href="<?= \Yii::getAlias('@web/login') ?>/css/min.css">

    <style type="text/css">
        <?php $this->registerCss('
        .estrela {
            background-color: white;
            border-radius: 50%;
            position: absolute;
            animation-name: estrela;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .estrela.style1 {
            animation-duration: 0.5s;
            animation-name: estrela;
        }

        .estrela.style2 {
            animation-duration: 1s;
            animation-name: estrela;
        }

        .estrela.style3 {
            animation-duration: 1.5s;
            animation-name: estrela;
        }

        .estrela.style4 {
            animation-duration: 2s;
            animation-name: estrelaDestacada;
        }

        .estrela.tam1 {
            width: 1px;
            height: 1px;
        }

        .estrela.tam2 {
            width: 2px;
            height: 2px;
        }

        .estrela.tam3 {
            width: 3px;
            height: 3px;
        }

        .estrela.opacity1 {
            opacity: 1;
        }

        .estrela.opacity2 {
            opacity: .5;
        }

        .estrela.opacity3 {
            opacity: .1;
        }


        @keyframes estrela {
            0% {
                box-shadow: 0 0 10px 0px rgba(255, 255, 255, 0.05);
            }
            50% {
                box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.4);
            }
            100% {
                box-shadow: 0 0 10px 0px rgba(255, 255, 255, 0.05);
            }
        }

        @keyframes estrelaDestacada {
            0% {
                background-color: #FFFFFF;
                box-shadow: 0 0 10px 0px rgba(255, 255, 255, 1);
            }
            20% {
                background-color: #FFC4C4;
                box-shadow: 0 0 10px 0px rgb(255, 196, 196, 1);
            }
            80% {
                background-color: #C4CFFF;
                box-shadow: 0 0 10px 0px rgb(196, 207, 255, 1);
            }
            100% {
                background-color: #FFFFFF;
                box-shadow: 0 0 10px 0px rgba(255, 255, 255, 0.2);
            }
        }
        ')?>

    </style>
    </script>
    <script src="<?=\Yii::getAlias('@web/login')?>/js/d3.v4.min.js"></script>
    <link rel="stylesheet" href="<?=\Yii::getAlias('@web/login')?>/css/layer.css" id="layui_layer_skinlayercss">
    <link rel="stylesheet" href="<?=\Yii::getAlias('@web/login')?>/css/style.20170605.css" id="layui_layer_skinomstyle20170605css">
</head>
<style type="text/css" id="29013943366"></style>

<body>

<div class="screens" id="screens">
    <div class="header clearFix" id="header" style="display: none;">
        <h1 class="header-logo">
            <a class="header-logo-link">
                <strong class="header-logo-slogan">企鹅号</strong>
            </a>
        </h1>
        <div class="header-login pull-right">
            <a class="btn" href="#" title="注册">注册</a>
            <a class="btn btn-a-login" href="javascript:void(0);" title="登录">登录</a>
        </div>
    </div>
    <!-- header -->
    <div class="first-screen" style="height: 654px;">
        <div class="bg" id="skin-bg">
            <div id="skyContainer" style="width: 100%; height: 218px; position: absolute; overflow: hidden; z-index: 99999;">
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .0s; left: 603px; top: 113px;"></span>
                <span class="estrela style2 opacity1 tam1" style="animation-delay: .0s; left: 828px; top: 208px;"></span>
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .8s; left: 772px; top: 210px;"></span>
                <span class="estrela style2 opacity3 tam2" style="animation-delay: .5s; left: 1795px; top: 84px;"></span>
                <span class="estrela style3 opacity3 tam2" style="animation-delay: .7s; left: 575px; top: 184px;"></span>
                <span class="estrela style2 opacity1 tam2" style="animation-delay: .6s; left: 1206px; top: 70px;"></span>
                <span class="estrela style4 opacity3 tam1" style="animation-delay: .5s; left: 218px; top: 44px;"></span>
                <span class="estrela style4 opacity1 tam3" style="animation-delay: .3s; left: 959px; top: 175px;"></span>
                <span class="estrela style2 opacity3 tam3" style="animation-delay: .3s; left: 1058px; top: 27px;"></span>
                <span class="estrela style1 opacity2 tam2" style="animation-delay: .0s; left: 439px; top: 133px;"></span>
                <span class="estrela style4 opacity3 tam1" style="animation-delay: .4s; left: 612px; top: 108px;"></span>
                <span class="estrela style1 opacity1 tam1" style="animation-delay: .8s; left: 1329px; top: 198px;"></span>
                <span class="estrela style4 opacity1 tam3" style="animation-delay: .5s; left: 517px; top: 188px;"></span>
                <span class="estrela style3 opacity1 tam2" style="animation-delay: .2s; left: 133px; top: 211px;"></span>
                <span class="estrela style1 opacity1 tam1" style="animation-delay: .4s; left: 1284px; top: 15px;"></span>
                <span class="estrela style2 opacity1 tam1" style="animation-delay: .3s; left: 204px; top: 15px;"></span>
                <span class="estrela style3 opacity2 tam3" style="animation-delay: .3s; left: 176px; top: 209px;"></span>
                <span class="estrela style3 opacity1 tam3" style="animation-delay: .4s; left: 1461px; top: 140px;"></span>
                <span class="estrela style3 opacity3 tam2" style="animation-delay: .3s; left: 59px; top: 40px;"></span>
                <span class="estrela style2 opacity2 tam3" style="animation-delay: .2s; left: 344px; top: 35px;"></span>
                <span class="estrela style3 opacity1 tam2" style="animation-delay: .7s; left: 1447px; top: 78px;"></span>
                <span class="estrela style4 opacity3 tam1" style="animation-delay: .2s; left: 488px; top: 160px;"></span>
                <span class="estrela style4 opacity1 tam2" style="animation-delay: .2s; left: 691px; top: 184px;"></span>
                <span class="estrela style4 opacity1 tam3" style="animation-delay: .2s; left: 1063px; top: 110px;"></span>
                <span class="estrela style4 opacity1 tam2" style="animation-delay: .5s; left: 372px; top: 217px;"></span>
                <span class="estrela style4 opacity3 tam3" style="animation-delay: .7s; left: 624px; top: 17px;"></span>
                <span class="estrela style2 opacity1 tam2" style="animation-delay: .3s; left: 1371px; top: 33px;"></span>
                <span class="estrela style1 opacity2 tam2" style="animation-delay: .8s; left: 385px; top: 88px;"></span>
                <span class="estrela style2 opacity1 tam1" style="animation-delay: .2s; left: 1506px; top: 107px;"></span>
                <span class="estrela style4 opacity2 tam1" style="animation-delay: .5s; left: 1134px; top: 141px;"></span>
                <span class="estrela style2 opacity1 tam1" style="animation-delay: .2s; left: 966px; top: 37px;"></span>
                <span class="estrela style3 opacity2 tam1" style="animation-delay: .1s; left: 902px; top: 15px;"></span>
                <span class="estrela style3 opacity2 tam1" style="animation-delay: .7s; left: 1614px; top: 106px;"></span>
                <span class="estrela style1 opacity2 tam1" style="animation-delay: .2s; left: 375px; top: 22px;"></span>
                <span class="estrela style4 opacity3 tam1" style="animation-delay: .0s; left: 573px; top: 177px;"></span>
                <span class="estrela style4 opacity1 tam3" style="animation-delay: .1s; left: 830px; top: 79px;"></span>
                <span class="estrela style1 opacity2 tam2" style="animation-delay: .5s; left: 1444px; top: 144px;"></span>
                <span class="estrela style3 opacity1 tam1" style="animation-delay: .2s; left: 654px; top: 90px;"></span>
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .7s; left: 1448px; top: 147px;"></span>
                <span class="estrela style3 opacity1 tam3" style="animation-delay: .0s; left: 25px; top: 46px;"></span>
                <span class="estrela style4 opacity1 tam2" style="animation-delay: .3s; left: 243px; top: 201px;"></span>
                <span class="estrela style2 opacity2 tam2" style="animation-delay: .4s; left: 1064px; top: 1px;"></span>
                <span class="estrela style3 opacity3 tam1" style="animation-delay: .2s; left: 245px; top: 103px;"></span>
                <span class="estrela style3 opacity3 tam3" style="animation-delay: .3s; left: 533px; top: 65px;"></span>
                <span class="estrela style1 opacity2 tam1" style="animation-delay: .3s; left: 1694px; top: 92px;"></span>
                <span class="estrela style1 opacity1 tam3" style="animation-delay: .5s; left: 703px; top: 7px;"></span>
                <span class="estrela style1 opacity2 tam1" style="animation-delay: .6s; left: 263px; top: 70px;"></span>
                <span class="estrela style3 opacity1 tam3" style="animation-delay: .5s; left: 41px; top: 31px;"></span>
                <span class="estrela style2 opacity2 tam1" style="animation-delay: .5s; left: 1714px; top: 69px;"></span>
                <span class="estrela style3 opacity1 tam2" style="animation-delay: .3s; left: 446px; top: 42px;"></span>
                <span class="estrela style2 opacity2 tam1" style="animation-delay: .0s; left: 1714px; top: 71px;"></span>
                <span class="estrela style3 opacity2 tam1" style="animation-delay: .6s; left: 1852px; top: 91px;"></span>
                <span class="estrela style3 opacity1 tam2" style="animation-delay: .4s; left: 935px; top: 180px;"></span>
                <span class="estrela style1 opacity2 tam1" style="animation-delay: .3s; left: 469px; top: 207px;"></span>
                <span class="estrela style2 opacity2 tam3" style="animation-delay: .0s; left: 451px; top: 46px;"></span>
                <span class="estrela style2 opacity3 tam1" style="animation-delay: .7s; left: 1588px; top: 106px;"></span>
                <span class="estrela style1 opacity2 tam3" style="animation-delay: .1s; left: 32px; top: 61px;"></span>
                <span class="estrela style4 opacity2 tam3" style="animation-delay: .0s; left: 399px; top: 100px;"></span>
                <span class="estrela style1 opacity2 tam1" style="animation-delay: .3s; left: 756px; top: 7px;"></span>
                <span class="estrela style2 opacity1 tam2" style="animation-delay: .5s; left: 964px; top: 4px;"></span>
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .4s; left: 307px; top: 42px;"></span>
                <span class="estrela style3 opacity1 tam2" style="animation-delay: .8s; left: 1376px; top: 216px;"></span>
                <span class="estrela style2 opacity3 tam1" style="animation-delay: .2s; left: 970px; top: 106px;"></span>
                <span class="estrela style2 opacity1 tam2" style="animation-delay: .1s; left: 366px; top: 31px;"></span>
                <span class="estrela style1 opacity3 tam2" style="animation-delay: .7s; left: 971px; top: 80px;"></span>
                <span class="estrela style3 opacity1 tam1" style="animation-delay: .6s; left: 431px; top: 132px;"></span>
                <span class="estrela style2 opacity2 tam3" style="animation-delay: .0s; left: 468px; top: 42px;"></span>
                <span class="estrela style2 opacity1 tam1" style="animation-delay: .8s; left: 622px; top: 108px;"></span>
                <span class="estrela style2 opacity1 tam1" style="animation-delay: .7s; left: 690px; top: 127px;"></span>
                <span class="estrela style1 opacity1 tam3" style="animation-delay: .6s; left: 1322px; top: 28px;"></span>
                <span class="estrela style2 opacity2 tam3" style="animation-delay: .3s; left: 1595px; top: 33px;"></span>
                <span class="estrela style1 opacity1 tam2" style="animation-delay: .6s; left: 489px; top: 164px;"></span>
                <span class="estrela style2 opacity2 tam2" style="animation-delay: .0s; left: 818px; top: 213px;"></span>
                <span class="estrela style1 opacity1 tam1" style="animation-delay: .0s; left: 161px; top: 98px;"></span>
                <span class="estrela style3 opacity3 tam2" style="animation-delay: .6s; left: 1794px; top: 48px;"></span>
                <span class="estrela style4 opacity3 tam2" style="animation-delay: .4s; left: 783px; top: 3px;"></span>
                <span class="estrela style4 opacity2 tam2" style="animation-delay: .6s; left: 86px; top: 118px;"></span>
                <span class="estrela style4 opacity2 tam2" style="animation-delay: .7s; left: 270px; top: 172px;"></span>
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .4s; left: 47px; top: 164px;"></span>
                <span class="estrela style1 opacity2 tam1" style="animation-delay: .1s; left: 1791px; top: 50px;"></span>
                <span class="estrela style3 opacity1 tam3" style="animation-delay: .8s; left: 1026px; top: 187px;"></span>
                <span class="estrela style2 opacity1 tam1" style="animation-delay: .8s; left: 1186px; top: 70px;"></span>
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .5s; left: 1757px; top: 170px;"></span>
                <span class="estrela style3 opacity1 tam1" style="animation-delay: .7s; left: 512px; top: 68px;"></span>
                <span class="estrela style1 opacity1 tam1" style="animation-delay: .8s; left: 714px; top: 7px;"></span>
                <span class="estrela style1 opacity2 tam2" style="animation-delay: .2s; left: 211px; top: 135px;"></span>
                <span class="estrela style1 opacity2 tam2" style="animation-delay: .1s; left: 364px; top: 158px;"></span>
                <span class="estrela style4 opacity2 tam1" style="animation-delay: .1s; left: 1584px; top: 22px;"></span>
                <span class="estrela style1 opacity1 tam2" style="animation-delay: .7s; left: 798px; top: 13px;"></span>
                <span class="estrela style3 opacity1 tam2" style="animation-delay: .6s; left: 1160px; top: 21px;"></span>
                <span class="estrela style3 opacity3 tam3" style="animation-delay: .8s; left: 505px; top: 164px;"></span>
                <span class="estrela style2 opacity1 tam3" style="animation-delay: .2s; left: 807px; top: 98px;"></span>
                <span class="estrela style3 opacity2 tam1" style="animation-delay: .3s; left: 1362px; top: 22px;"></span>
                <span class="estrela style3 opacity2 tam2" style="animation-delay: .5s; left: 1367px; top: 43px;"></span>
                <span class="estrela style2 opacity1 tam1" style="animation-delay: .4s; left: 197px; top: 36px;"></span>
                <span class="estrela style1 opacity2 tam1" style="animation-delay: .3s; left: 461px; top: 151px;"></span>
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .3s; left: 589px; top: 66px;"></span>
                <span class="estrela style4 opacity1 tam3" style="animation-delay: .4s; left: 684px; top: 62px;"></span>
                <span class="estrela style3 opacity2 tam1" style="animation-delay: .8s; left: 1472px; top: 17px;"></span>
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .4s; left: 1087px; top: 175px;"></span>
                <span class="estrela style2 opacity1 tam3" style="animation-delay: .6s; left: 6px; top: 202px;"></span>
                <span class="estrela style1 opacity2 tam1" style="animation-delay: .7s; left: 14px; top: 84px;"></span>
                <span class="estrela style4 opacity2 tam2" style="animation-delay: .1s; left: 1230px; top: 116px;"></span>
                <span class="estrela style2 opacity2 tam2" style="animation-delay: .5s; left: 1663px; top: 100px;"></span>
                <span class="estrela style2 opacity3 tam3" style="animation-delay: .3s; left: 1451px; top: 186px;"></span>
                <span class="estrela style1 opacity1 tam1" style="animation-delay: .1s; left: 1088px; top: 155px;"></span>
                <span class="estrela style3 opacity1 tam3" style="animation-delay: .5s; left: 684px; top: 86px;"></span>
                <span class="estrela style4 opacity2 tam1" style="animation-delay: .4s; left: 1656px; top: 129px;"></span>
                <span class="estrela style1 opacity1 tam2" style="animation-delay: .8s; left: 626px; top: 136px;"></span>
                <span class="estrela style4 opacity3 tam2" style="animation-delay: .0s; left: 809px; top: 201px;"></span>
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .2s; left: 346px; top: 97px;"></span>
                <span class="estrela style2 opacity1 tam2" style="animation-delay: .0s; left: 65px; top: 109px;"></span>
                <span class="estrela style3 opacity1 tam1" style="animation-delay: .0s; left: 1055px; top: 154px;"></span>
                <span class="estrela style2 opacity2 tam1" style="animation-delay: .7s; left: 829px; top: 194px;"></span>
                <span class="estrela style3 opacity2 tam1" style="animation-delay: .3s; left: 975px; top: 213px;"></span>
                <span class="estrela style3 opacity1 tam1" style="animation-delay: .5s; left: 1435px; top: 47px;"></span>
                <span class="estrela style4 opacity1 tam1" style="animation-delay: .2s; left: 1589px; top: 40px;"></span>
                <span class="estrela style3 opacity3 tam2" style="animation-delay: .3s; left: 1235px; top: 113px;"></span>
                <span class="estrela style1 opacity2 tam1" style="animation-delay: .0s; left: 1073px; top: 182px;"></span>
                <span class="estrela style1 opacity1 tam3" style="animation-delay: .0s; left: 1546px; top: 182px;"></span>
            </div>

            <img src="<?=\Yii::getAlias('@web/login')?>/img/login_screen1_bg.jpg" style="width: 1910px; height: 1074.38px; margin-left: 0px; top: -420.375px; left: 0px; position: inherit;">
        </div>
        <div class="mask-full" style="opacity: 0;"></div>
        <h1 class="logo">测试</h1>
        <div class="show-list">
            <div class="show-item">
                    <span class="show-box">
                        <i class="icon-login icon-login-code"></i>
                    </span>
                <div class="tooltip">
                    <div class="tooltip-inner">
                        <h4>公众号</h4>
                        <div class="qrcode">
                            <img src="http://mat1.gtimg.com/om/om_2.0/images/login/code_login.png" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-item">
                <a class="show-box" href="#" target="_blank">
                    <i class="icon-login icon-login-developer"></i>
                </a>
                <div class="tooltip">
                    <div class="tooltip-inner">
                        <h4>开发者中心</h4>
                    </div>
                </div>
            </div>
            <div class="show-item">
                <a class="show-box" href="#" target="_blank">
                    <i class="icon-login icon-login-help"></i>
                </a>
                <div class="tooltip tooltip-sm">
                    <div class="tooltip-inner">
                        <h4>常见问题</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="galaxy" style="top:100px">

                <div id="userInfoTips" class="galaxy-dialog" style="position: absolute; opacity: 0; z-index: 999; display: none; left: 222px; top: 170px;">
                    <div class="galaxy-content">
                        <h4 class="name">同道大叔</h4>
                        <p class="text">贴近千万星座粉的真实心声，用专业与娱乐打造星座殿堂。</p>
                    </div>
                </div>
            </div>

            <h2 class="slogan" style="top: 30px;">让世界看到你</h2>
            <!--首屏登录框会追加到这里 -->

            <div class="login-container">
                <a class="close" href="javascript:void(0);" title="关闭">×</a>

                <div class="ptlogin-container" style="display: none;">

                </div>
                <div class="login-panel" style="display:block">
                    <form class="form-control loginForm">
                        <div class="input-group email">
                            <i class="icon-login icon-login-name"></i>
                            <input type="text" class="email-input error" value="" name="email" placeholder="邮箱/手机号">
                        </div>
                        <div class="input-group password">
                            <i class="icon-login icon-login-password"></i>
                            <input type="password" class="password-input" name="password" placeholder="密码">
                        </div>
                        <p class="login-error-tips"></p>
                        <div class="login-remember clearFix">
                            <label class="remember-id pull-left">
                                <i class="icon-login icon-login-checkbox "></i>
                                <!-- 选中的时候追加 checkbox-active-->

                                <input type="hidden" name="rememberPassword" value="0">

                                <span class="remember-txt">记住帐号</span>
                            </label>
                        </div>
                    </form>
                    <div class="login-submit">
                        <button type="button" class="btnLogin btn btn-primary">登录</button>
                        <button type="button" class="btn btn-primary btn-loading" style="display: none;">
                            <i class="icon-loading-white"></i>登录中</button>
                    </div>
                </div>
                <!-- login-panel / -->

            </div>
            <!--首屏登录框 -->

            <div class="login-container">
                <a class="close" href="javascript:void(0);" title="关闭">×</a>

                <div class="ptlogin-container" style="display: none;">

                </div>
                <div class="login-panel" style="display:block">
                    <form class="form-control loginForm">
                        <div class="input-group email">
                            <i class="icon-login icon-login-name"></i>
                            <input type="text" class="email-input error" value="" name="email" placeholder="邮箱/手机号">
                        </div>
                        <div class="input-group password">
                            <i class="icon-login icon-login-password"></i>
                            <input type="password" class="password-input" name="password" placeholder="密码">
                        </div>
                        <p class="login-error-tips"></p>
                        <div class="login-remember clearFix">
                            <label class="remember-id pull-left">
                                <i class="icon-login icon-login-checkbox "></i>
                                <!-- 选中的时候追加 checkbox-active-->

                                <input type="hidden" name="rememberPassword" value="0">

                                <span class="remember-txt">记住帐号</span>
                            </label>
                        </div>
                    </form>
                </div>
                <!-- login-panel / -->

            </div>
            <!--首屏登录框 -->
        </div>
        <!-- 合并版的基础库 -->
        <script type="text/javascript" src="<?=\Yii::getAlias('@web/login')?>/js/baselibs.9a65ca.js"></script>
        <script type="text/javascript" src="<?=\Yii::getAlias('@web/login')?>/js/layer.min.js"></script>

        <script>
            <?php $this->registerJs('
            $(function () {
                var dd, funel = funel || 150;
                var $menu = $(".header-login .dropdown-menu"),
                    $nick = $(".header-login .user .name");

                var $sidemenu = $(\'.side .menu\');

                $sidemenu.on(\'click\', \'.tooltip .pop-close\', function () {
                    $(this).closest(\'.menu-item-tips-w\').find(\'.menu-item-tips-w\').removeClass(\'menu-item-tips-w\');
                    $(this).closest(\'.tooltip\').remove();
                })

                function showMenu() {
                    clearTimeout(dd);
                    $menu.show();
                }

                function hideMenu() {
                    dd = setTimeout(function () {
                        $menu.hide();
                    }, funel);
                }
                $menu.on("mouseenter", function () {
                    showMenu();
                    return false;
                }).on("mouseleave", function () {
                    hideMenu();
                    return false;
                });
                $nick.on("mouseenter", function () {
                    showMenu();
                    return false;
                }).on("mouseleave", function () {
                    hideMenu();
                    return false;
                });

                $("#userNick a.link-shenfen").on("mouseenter", function (e) {
                    var title = $(this).attr("title");
                    if (title) {
                        $(this).removeAttr("title");
                        $(this).attr("data-title", title);
                    } else {
                        title = $(this).attr("data-title");
                    }

                    if (title) {
                        var _this = this;
                        layer.tips(title, $(_this), {
                            time: 10000,
                            tips: 1,
                            success: function ($container, index) {
                                var width = $container.width();
                                var left = parseInt($container.css("left"));
                                $container.css("left", left - width / 2 + 16);
                            }
                        });
                    }
                }).on("mouseleave", function (e) {
                    layer.closeAll();
                });
            });
            ') ?>

        </script>
        <script>try { pgvMain() } catch (e) { }</script>
        <!-- build:basejs -->
        <script src="<?=\Yii::getAlias('@web/login')?>/js/base_main.js"></script>
        <!-- endbuild -->
        <!-- build:bizjs -->
        <script src="<?=\Yii::getAlias('@web/login')?>/js/userAuth_newIndex.js"></script>
        <div class="pop-login-panel" id="login-layer">
            <div class="login-container">
                <a class="close" href="javascript:void(0);" title="关闭">×</a>

                <div class="ptlogin-container" style="display: none;">

                </div>
                <div class="login-panel" style="display:block">
                    <form class="form-control loginForm">
                        <div class="input-group email">
                            <i class="icon-login icon-login-name"></i>
                            <input type="text" class="email-input error" value="" name="email" placeholder="邮箱/手机号">
                        </div>
                        <div class="input-group password">
                            <i class="icon-login icon-login-password"></i>
                            <input type="password" class="password-input" name="password" placeholder="密码">
                        </div>
                        <p class="login-error-tips"></p>
                        <div class="login-remember clearFix">
                            <label class="remember-id pull-left">
                                <i class="icon-login icon-login-checkbox "></i>
                                <!-- 选中的时候追加 checkbox-active-->

                                <input type="hidden" name="rememberPassword" value="0">

                                <span class="remember-txt">记住帐号</span>
                            </label>
                            <a class="login-error pull-right" href="#" title="忘记密码？"> 忘记密码？</a>
                        </div>
                    </form>
                    <div class="login-submit">
                        <button type="button" class="btnLogin btn btn-primary">登录</button>
                        <button type="button" class="btn btn-primary btn-loading" style="display: none;">
                            <i class="icon-loading-white"></i>登录中</button>
                    </div>
                </div>
                <!-- login-panel / -->

            </div>
            <!--首屏登录框 -->
        </div>
        <!-- endbuild -->
</body>

</html>
<?php $this->endPage()?>
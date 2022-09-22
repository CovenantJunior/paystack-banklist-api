<style type="text/css">
    @media(min-width: 991px){
    .header-desktop {
        margin-top: -1px!important;
    }
    .sidenavDesktop {
        display: block!important;
        height: 100%;
        width: 300px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #0a51d2;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        position: fixed;
    }
    .sidenavDesktop a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        display: block;
        transition: 0.3s
    }

    .sidenavDesktop ul{
        line-height: 180%;
    }

    .sidenavDesktop ul, li{
        background-color: #0a51d2;
        background: #0a51d2;
    }


    .sidenavDesktop a:hover, .offcanvas a:focus{
        /*color: #f1f1f1;*/
        background-color: #0a51d2e3;
        background: #0a51d2e3;
    }

    .sidenavDesktop .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px){
      .sidenavDesktop {padding-top: 15px;}
      .sidenavDesktop a {font-size: 18px;}
    }
}
</style>
<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none" style="position: fixed!important;z-index: 999;background: #f5f5f5;/*-webkit-box-shadow: 1px 1px 42px 0px #0106102e; -moz-box-shadow: 1px 1px 42px 0px #0106102e; box-shadow: 1px 1px 42px 0px #0106102e;*/">
            <div class="header-mobile__bar" style="-webkit-background: linear-gradient(181deg, #fff, #fff, #e7eced00); -moz-background: linear-gradient(181deg, #fff, #fff, #e7eced00); background: linear-gradient(181deg, #fff, #fff, #e7eced00);">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a onclick="window.history.back();" class="logo fa fa-arrow-left" href="javascript:void(0)" style="font-size: 25px; color: #0a51d2"> </a>
                        <h4 style="text-align: center; font-weight: 700; "><?php echo $title; ?></h4> <div class="account-item clearfix js-item-menu">
                                        <div class="">
                                            <a class="js-acc-btn fa fa-ellipsis-v" href="#" style="font-size: 25px; color: #0a51d2"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown" style="border-radius: 10px">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/3.png" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Tea</a>
                                                    </h5>
                                                    <span class="email">tea@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="profile">
                                                        <i class="zmdi zmdi-account"></i>Profile Card</a>
                                                </div>
                                                <!--<div class="account-dropdown__item">
                                                    <a href="javascript:void(0)">
                                                        <label class="switch switch-3d switch-primary mr-3">
                                                          <input type="checkbox" class="switch-input">
                                                          <span class="switch-label"></span>
                                                          <span class="switch-handle"></span>
                                                        </label>
                                                        <i class="fa fa-dark" style="margin-right: -3px!important;"></i>Dark Mode</a>
                                                </div>-->
                                                <div class="account-dropdown__item">
                                                    <a href="advertise">
                                                        <i class="fa fa-bullhorn" style="margin-right: 14px!important;"></i>Advertise</a>
                                                </div>
                                                 <div class="account-dropdown__footer">
                                                    <a href="whatsapp://send/?phone=2349094362717&text=Hello, I am Tea, I am here to share a Screenshot"  data-action="share/whatsapp/share">
                                                        <i class="zmdi zmdi-share"></i>Share a Screenshot</a>
                                                </div>
                                                <!--<div class="account-dropdown__footer">
                                                    <a href="logout">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>-->
                                                <div class="account-dropdown__footer">
                                                    <a href="#" onclick="window.location.replace('exit://')">
                                                        <i class="zmdi zmdi-power"></i>Exit</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>

                                    
        </header>

        <!-- END HEADER MOBILE-->


        <!-- MENU SIDEBAR-->
         <div class="sidenavDesktop" style="display: none;">
                    

                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;&nbsp;Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="./">Home</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="profile">
                                <i class="fas fa-chart-bar"></i>&nbsp;&nbsp;&nbsp;Profile Card</a>
                        </li>
                        <li>
                            <a href="games">
                                <i class="fas fa-play"></i>&nbsp;&nbsp;&nbsp;&nbsp;Play & Earn</a>
                        </li>
                            <li>
                                <a href="withdraw">
                                    <i class="fas fa-bank"></i>&nbsp;&nbsp;&nbsp;Withdraw</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                   <i class="fas fa-usd"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fund Wallet</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li onclick="window.location='https://paystack.com/pay/fundapp2000'">
                                        <a href="javascript:void(0)">₦ 2000</a>
                                    </li>
                                    <li onclick="window.location='https://paystack.com/pay/fundapp3000'">
                                        <a href="javascript:void(0)">₦ 3000</a>
                                    </li>
                                    <li onclick="window.location='https://paystack.com/pay/fundapp5000'">
                                        <a href="javascript:void(0)">₦ 5000</a>
                                    </li>
                                    <li onclick="window.location='https://paystack.com/pay/fundapp10000'">
                                        <a href="javascript:void(0)">₦ 10000</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="buy-data">
                                    <i class="fas fa-wifi"></i>&nbsp;&nbsp;Buy Data</a>
                            </li>
                        
                        <li>
                            <a href="my-referrals">
                                <i class="fas fa-users"></i>&nbsp;&nbsp;Referrals</a>
                        </li>
                        <!--<li>
                            <a href="survey">
                                <i class="fas fa-question"></i>&nbsp;&nbsp;&nbsp;&nbsp;Survey</a>
                        </li>-->
                        <li>
                            <a href="logout">
                                <i class="fas fa-key"></i>&nbsp;&nbsp;&nbsp;Logout</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-bullhorn"></i>&nbsp;&nbsp;Advertise</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="pps">
                                        <i class="fas fa-mail-forward"></i>&nbsp;&nbsp;Share a Post</a>
                                </li>
                                <li>
                                    <a href="advertise"><i class="fas fa-bullhorn"></i>&nbsp;&nbsp;Advertise</a>
                                </li>
                                <li>
                                    <a href="my-campaigns"><i class="fas fa-chart-bar"></i>&nbsp;&nbsp;My Campaigns</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact">
                                <i class="fas fa-envelope"></i>&nbsp;&nbsp;Contact Us</a>
                        </li>
                        <li>
                            <a href="privacy">
                                <i class="fas fa-info"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy</a>
                        </li>
                    </ul>

</div>
        <!-- END MENU SIDEBAR-->
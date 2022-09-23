<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none" style="position: fixed!important;z-index: 999;background: #f5f5f5;">
            <div class="header-mobile__bar" style="padding: 5px 0;">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    	
<button onclick="openNav()" class="hamburger hamburger--slider" type="button" style="width: auto!important; font-size: 20px">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        <p style="color: #6600b9;" id="title">
                    <!--<img src="images/icon/icon.png" alt="Cool Admin" style="height: 25px ; width: 25px ; display: inline-flex;" />-->&nbsp;&nbsp;PAYSTACK DEMO</p>
                        </button>

<!DOCTYPE html>
<html>
<style>
body {
    font-family: "Lato", sans-serif;
}


.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #0a51d2;
    overflow-x: hidden;
    transition: 0.1s;
    padding-top: 60px;
    position: fixed;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    display: block;
    transition: 0.3s
}

.sidenav ul{
	line-height: 180%;
}

.sidenav ul, li{
    background-color: #0a51d2;
    background: #0a51d2;
}


.sidenav a:hover, .offcanvas a:focus{
    /*color: #f1f1f1;*/
    background-color: #0a51d2e3;
    background: #0a51d2e3;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px){
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body>
<button onclick="closeNav()" class="hamburger hamburger--slider is-active" type="button" style="display: none;">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
<div id="mySidenav" class="sidenav">
  					
            <p style="color: #fff;margin-left: 30px;font-size: x-large;font-weight: 900;margin-top: -38px;margin-bottom: 15px;">PAYSPIELOO </p>
            <hr style="color: #fff; background: #fff; ">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;&nbsp;Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a onclick="closeNav()" href="./">Home</a>
                                </li>
                            </ul>
                        </li>
                        <?php if($gold == 1): ?>
                            <li>
                                <a onclick="closeNav()" href="gold-stats">
                                    <i class="fas fa-gem"></i>&nbsp;&nbsp;&nbsp;Gold Badge Statistics</a>
                            </li>
                        <?php else: ?>
                            <li onclick="closeNav()" >
                                <a href="gold-intro">
                                    <i class="fas fa-gem"></i>&nbsp;&nbsp;&nbsp;Own Gold Badge</a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="profile">
                                <i class="fas fa-chart-bar"></i>&nbsp;&nbsp;&nbsp;Profile Card</a>
                        </li>
                        <li>
                            <a onclick="closeNav()" href="games">
                                <i class="fas fa-play"></i>&nbsp;&nbsp;&nbsp;&nbsp;Play & Earn</a>
                        </li>
                        <?php if($activated == 1): ?>
                            <?php if($accepted == 1): ?>
                                <li>
                                    <a onclick="closeNav()" href="withdraw">
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
                                    <a onclick="closeNav()" href="buy-data">
                                        <i class="fas fa-wifi"></i>&nbsp;&nbsp;Buy Data</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-fire"></i>&nbsp;&nbsp;&nbsp;Please Wait for Approval from a Gold Member</a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li>
                                <a onclick="closeNav()" href="https://paystack.com/pay/activate-app">
                                    <i class="fas fa-fire"></i>&nbsp;&nbsp;&nbsp;Activate Wallet for Full Access</a>
                            </li>
                            <li>
                                <a onclick="closeNav()" href="#" style="opacity:.5">
                                    <i class="fas fa-bank"></i>&nbsp;&nbsp;&nbsp;Withdraw</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#" style="opacity:.5">
                                   <i class="fas fa-usd"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fund Wallet</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a onclick="closeNav()" href="#" style="opacity:.5">₦ 2000</a>
                                    </li>
                                    <li>
                                        <a onclick="closeNav()" href="#" style="opacity:.5">₦ 3000</a>
                                    </li>
                                    <li>
                                        <a onclick="closeNav()" href="#" style="opacity:.5">₦ 5000</a>
                                    </li>
                                    <li>
                                        <a onclick="closeNav()" href="#" style="opacity:.5">₦ 10000</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a onclick="closeNav()" href="#" style="opacity:.5">
                                    <i class="fas fa-wifi"></i>&nbsp;&nbsp;Buy Data</a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a onclick="closeNav()" href="my-referrals">
                                <i class="fas fa-users"></i>&nbsp;&nbsp;Referrals</a>
                        </li>
                        <!--<li>
                            <a href="survey">
                                <i class="fas fa-question"></i>&nbsp;&nbsp;&nbsp;&nbsp;Survey</a>
                        </li>-->
                        <li>
                            <a onclick="closeNav(); window.location.replace('logout');" href="#">
                                <i class="fas fa-key"></i>&nbsp;&nbsp;&nbsp;Logout</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-bullhorn"></i>&nbsp;&nbsp;Advertise</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a onclick="closeNav()" href="pps">
                                        <i class="fas fa-mail-forward"></i>&nbsp;&nbsp;Share a Post</a>
                                </li>
                                <li>
                                    <a onclick="closeNav()" href="advertise"><i class="fas fa-bullhorn"></i>&nbsp;&nbsp;Advertise</a>
                                </li>
                                <li>
                                    <a onclick="closeNav()" href="my-campaigns"><i class="fas fa-chart-bar"></i>&nbsp;&nbsp;My Campaigns</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a onclick="closeNav()" href="contact">
                                <i class="fas fa-envelope"></i>&nbsp;&nbsp;Contact Us</a>
                        </li>
                        <li>
                            <a onclick="closeNav()" href="privacy">
                                <i class="fas fa-info"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy</a>
                        </li>
                    </ul>

</div>



<script>

/* Set the width of the side navigation to
250px */ 

function openNav() {
 document.getElementById("mySidenav").style.width="300px";
}

function closeNav() {
 document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>

                        <!--<button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>-->
                    </div>
                </div>
            </div>
            <!--<nav class="navbar-mobile" style="position: fixed; height: 100%; font-size: 14px; box-shadow: 0px 5px 100px #216bf3; -moz-box-shadow: 0px 5px 100px #216bf3; -webkit-box-shadow: 0px 5px 100px #216bf3;line-height: 120%;z-index: 999">
                <div class="container-fluid" style="height: 100%">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="./">Home</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="profile">
                                <i class="fas fa-chart-bar"></i>&nbsp;Profile Card</a>
                        </li>
                        <li>
                            <a href="games">
                                <i class="fas fa-play"></i>&nbsp;&nbsp;Play & Earn</a>
                        </li>
                        <li>
                            <a href="withdraw">
                                <i class="fas fa-bank"></i>&nbsp;Withdraw</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fas fa-usd"></i>&nbsp;&nbsp;&nbsp;Fund Wallet</a>
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
                                <i class="fas fa-wifi"></i>Buy Data</a>
                        </li>
                        <li>
                            <a href="my-referrals">
                                <i class="fas fa-users"></i>Referrals</a>
                        </li>
                        <li>
                            <a href="survey">
                                <i class="fas fa-question"></i>&nbsp;&nbsp;Survey</a>
                        </li>
                        <li>
                            <a href="logout">
                                <i class="fas fa-key"></i>&nbsp;Logout</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-bullhorn"></i>Advertise</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="pps">
                                        <i class="fas fa-mail-forward"></i>Share a Post</a>
                                </li>
                                <li>
                                    <a href="advertise"><i class="fas fa-bullhorn"></i>Advertise</a>
                                </li>
                                <li>
                                    <a href="my-campaigns"><i class="fas fa-chart-bar"></i>My Campaigns</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>-->
        </header>
        <!-- END HEADER MOBILE-->
        <div class="sidenavDesktop" style="display: none;">
                    <p style="color: #fff;margin-left: 30px;font-size: x-large;font-weight: 900;margin-top: -38px;margin-bottom: 15px;">PAYSPIELOO </p>
            <hr style="color: #fff; background: #fff; ">

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
                        <?php if($gold == 1): ?>
                            <li>
                                <a onclick="closeNav()" href="gold-stats">
                                    <i class="fas fa-gem"></i>&nbsp;&nbsp;&nbsp;Gold Badge Statistics</a>
                            </li>
                        <?php else: ?>
                            <li onclick="closeNav()" >
                                <a href="gold-intro">
                                    <i class="fas fa-gem"></i>&nbsp;&nbsp;&nbsp;Own Gold Badge</a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="profile">
                                <i class="fas fa-chart-bar"></i>&nbsp;&nbsp;&nbsp;Profile Card</a>
                        </li>
                        <li>
                            <a href="games">
                                <i class="fas fa-play"></i>&nbsp;&nbsp;&nbsp;&nbsp;Play & Earn</a>
                        </li>
                        <?php if($activated == 1): ?>
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
                        <?php else: ?>
                            <li>
                                <a href="https://paystack.com/pay/activate-app">
                                    <i class="fas fa-fire"></i>&nbsp;&nbsp;&nbsp;Activate Wallet for Full Access</a>
                            </li>
                            <li>
                                <a href="#" style="opacity:.5">
                                    <i class="fas fa-bank"></i>&nbsp;&nbsp;&nbsp;Withdraw</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#" style="opacity:.5">
                                   <i class="fas fa-usd"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fund Wallet</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="#" style="opacity:.5">₦ 2000</a>
                                    </li>
                                    <li>
                                        <a href="#" style="opacity:.5">₦ 3000</a>
                                    </li>
                                    <li>
                                        <a href="#" style="opacity:.5">₦ 5000</a>
                                    </li>
                                    <li>
                                        <a href="#" style="opacity:.5">₦ 10000</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" style="opacity:.5">
                                    <i class="fas fa-wifi"></i>&nbsp;&nbsp;Buy Data</a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="my-referrals">
                                <i class="fas fa-users"></i>&nbsp;&nbsp;Referrals</a>
                        </li>
                        <!--<li>
                            <a href="survey">
                                <i class="fas fa-question"></i>&nbsp;&nbsp;&nbsp;&nbsp;Survey</a>
                        </li>-->
                        <li>
                            <a onclick=" window.location.replace('logout');" href="#">
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
        <header class="header-desktop" style="margin-top: 18px">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-home"></i>
                                        <!--<div class="mess-dropdown" style="border-radius: 10px">
                                            <div class="mess__title">
                                                <p>You have 1 new message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/favicon.png" alt="Payspieloo" style="height: 70%!important; width: auto" />
                                                </div>
                                                <div class="content">
                                                    <h6>Payspieloo</h6>
                                                    <p>We love you ❤❤❤</p>
                                                    <span class="time">Just Now</span>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown" style="border-radius: 10px">
                                            <div class="mess__title">
                                                <p>You have 1 new message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/favicon.png" alt="Payspieloo" />
                                                </div>
                                                <div class="content">
                                                    <h6>Payspieloo</h6>
                                                    <p>We love you ❤❤❤</p>
                                                    <span class="time">Just Now</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">2</span>
                                        <div class="notifi-dropdown js-dropdown" style="border-radius: 10px">
                                            <div class="notifi__title">
                                                <p>You have 2 Notification</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <h4>Dashboard Access</h4>
                                                    <p>Some dashboard features will be moved fully to the Mobile Apps soon</p>
                                                    <span class="date">December 2021</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <h4>App Update</h4>
                                                    <p>There are impending updates that might interest you. Stay tuned.</p>
                                                    <span class="date">December 2021</span>
                                                </div>
                                            </div>
                                            <!--<div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/3.png" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php $user->uname($data); ?></a>
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
                                                        <a href="javascript:void(0)"><?php $user->uname($data); ?></a>
                                                    </h5>
                                                    <span class="email"><?php $user->email($data); ?></span>
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
                                                    <a href="whatsapp://send/?phone=2349094362717&text=Hello, I am <?php $user->uname($data); ?>, I am here to share a Screenshot"  data-action="share/whatsapp/share">
                                                        <i class="zmdi zmdi-share"></i>Share a Screenshot</a>
                                                </div>
                                                <!--<div class="account-dropdown__footer">
                                                    <a href="#" onclick=" window.location.replace('logout');">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>-->
                                                <div class="account-dropdown__footer">
                                                    <a href="#" onclick=" window.location.replace('exit://');">
                                                        <i class="zmdi zmdi-power"></i>Exit</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

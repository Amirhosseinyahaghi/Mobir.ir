<?php
session_start();
include "../config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>mobir.ir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--        <link rel="stylesheet" href="../css/bootstrap-rtl.min.css" media="screen">-->
<!--        <link rel="stylesheet" href="../css/custom.min.css">-->
<!--        <link rel="stylesheet" href="../css/style.css">-->
<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <link rel="icon" sizes="32x32" href="favicon.ico">

    <!--  ----------------------------   -->
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css-rtl/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../assets/css-rtl/app.css">
    <link rel="stylesheet" type="text/css" href="../assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../assets/css-rtl/custom-rtl.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../assets/css-rtl/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../assets/css-rtl/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style-rtl.css">
    <!-- END Custom CSS-->
    <!--  -----------------------------  -->


    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
                <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img src="../assets/images/logo/robust-logo-light.png" data-expand="../assets/images/logo/robust-logo-light.png" data-collapse="../assets/images/logo/robust-80x80.png" class="brand-logo"></a></li>
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active"><i class="icon-menu5">         </i></a></li>
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-xs-right">
                    <li class="dropdown dropdown-language nav-item"><a id="dropdown-flag" href="http://localhost/newproj" class="nav-link"><span class="selected-language">نمایش سایت</span></a>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">اعلان ها</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 جدید</span></h6>
                            </li>
                            <li class="list-group scrollable-container ps-container ps-theme-dark ps-active-y" data-ps-id="0985c8c7-5a9e-3232-755b-df64ee42c274"><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">شما سفارش جدیدی دارید</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% لود سرور</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">اعلان های خطر</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">تکمیل کار</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">آخر هفته</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-bar-graph-2 icon-bg-circle bg-teal"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">گزارش ماهانه را تولید کنید</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">ماه گذشته</time></small>
                                        </div>
                                    </div></a><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 320px; right: 373px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 236px;"></div></div></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">خواندن همه اعلان ها</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">پیام ها</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                            </li>
                            <li class="list-group scrollable-container ps-container ps-theme-dark ps-active-y" data-ps-id="f8126846-773c-12a0-f9f9-d0207f7ecec5"><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">علی عابدی</h6>
                                            <p class="notification-text font-small-3 text-muted">من نمونه کارهای شما را دوست دارم، بگذارید پروژه را شروع کنیم.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">امروز</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">حسین توکلی</h6>
                                            <p class="notification-text font-small-3 text-muted">من کار شما را دیده ام، وجود دارد</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">سشنبه</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">عارف محمدزاده</h6>
                                            <p class="notification-text font-small-3 text-muted">آیا می توانیم در این هفته تماس بگیریم؟ ?</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">جمعه</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">اکبر جوی</h6>
                                            <p class="notification-text font-small-3 text-muted">ما این شب شنبه شب جشن پروژه داریم.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">ماه گذشته</time></small>
                                        </div>
                                    </div></a><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 320px; right: 373px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 258px;"></div></div></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">تمام پیام ها را بخوانید</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name"><?php echo $_SESSION['username']; ?></span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> ویرایش پروفایل</a><a href="#" class="dropdown-item"><i class="icon-mail6"></i> صندوق ورودی من</a><a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> کار</a><a href="#" class="dropdown-item"><i class="icon-calendar5"></i> تقویم</a>
                            <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="icon-power3"></i> خروج</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item"><a href="index.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">داشبورد</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span></a>
            </li>
            <li class=" nav-item"><a href="products.php"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">محصولات</span></a>
            </li>
            <li class=" nav-item"><a href="users.php"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">کاربران</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">درخواست ها</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-whatshot"></i><span data-i18n="nav.advance_cards.main" class="menu-title">پیام ها</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">حساب ها</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-grid2"></i><span data-i18n="nav.components.main" class="menu-title">تبلیغات</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-eye6"></i><span data-i18n="nav.icons.main" class="menu-title">فروشگاه ها</span></a>
            </li>
        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- stats -->
<?php
require_once ('../controller/controller.php');
$main->user_not_login('login.php');
?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>University</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="../fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="../assets/sweet/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="../assets/plugins/bootstrap-datepicker/datepicker.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="../assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="../assets/css/material_style.css">
    <!-- Data Tables -->
    <link href="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
          type="text/css" />
    <link href="../assets/plugins/datatables/export/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- inbox style -->
    <link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <!-- <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" /> -->
    <style>
        body{
            font-family:calibri !important;

        }


        .error {
            color: $errorMsgColor;
        }
        form .error {
            color: #ff0000;
        }
    </style>
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href=".">
                    <span class="logo-default">Top Grace Gas</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>
            <form class="search-form-opened" action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
                </div>
            </form>
            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                    <!-- start language menu -->
                    <li class="dropdown language-switch">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img
                                src="assets/img/flags/gb.png" class="position-left" alt=""> English <span
                                class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="deutsch"><img src="assets/img/flags/de.png" alt=""> Deutsch</a>
                            </li>
                            <li>
                                <a class="ukrainian"><img src="assets/img/flags/ua.png" alt=""> Українська</a>
                            </li>
                            <li>
                                <a class="english"><img src="assets/img/flags/gb.png" alt=""> English</a>
                            </li>
                            <li>
                                <a class="espana"><img src="assets/img/flags/es.png" alt=""> España</a>
                            </li>
                            <li>
                                <a class="russian"><img src="assets/img/flags/ru.png" alt=""> Русский</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end language menu -->
                    <!-- start notification dropdown -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge headerBadgeColor1"> 0 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Notifications</span></h3>
                                <span class="notification-label purple-bgcolor">New 0</span>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                    <!--<li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
                                                            class="fa fa-check"></i></span>
													Congratulations!. </span>
                                        </a>
                                    </li> -->
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start message dropdown -->
                    <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge headerBadgeColor2"> 0 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Messages</span></h3>
                                <span class="notification-label cyan-bgcolor">New 0</span>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="#"> All Messages </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end message dropdown -->
                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <span class="username username-hide-on-mobile"><?php echo $main->select('admin','admin_id',$_SESSION['login_user_id'],'username')?></span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="">
                                    <i class="icon-user"></i> Profile </a>
                            </li>
                            <li>
                                <a href=""><i class="icon-settings"></i> Settings</a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="icon-directions"></i> Help
                                </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="">
                                    <i class="icon-lock"></i> Lock
                                </a>
                            </li>
                            <li>
                                <a href="pages/logout.php">
                                    <i class="icon-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                           data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start color quick setting -->
    <div class="quick-setting-main">
        <button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i
                class="fa fa-cog fa-spin"></i></button>
        <div class="quick-setting display-none">
            <ul id="themecolors">
                <li>
                    <p class="selector-title">Main Layouts</p>
                </li>
                <li class="complete">
                    <div class="theme-color layout-theme">
                        <a href="#" data-theme="light"><span class="head"></span><span class="cont"></span></a>
                        <a href="http://radixtouch.in/templates/admin/smart/source/dark/index.html"
                           data-theme="dark"><span class="head"></span><span class="cont"></span></a>
                    </div>
                </li>
                <li>
                    <p class="selector-title">Sidebar Color</p>
                </li>
                <li class="complete">
                    <div class="theme-color sidebar-theme">
                        <a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
                    </div>
                </li>
                <li>
                    <p class="selector-title">Header Brand color</p>
                </li>
                <li class="theme-option">
                    <div class="theme-color logo-theme">
                        <a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
                        <a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
                    </div>
                </li>
                <li>
                    <p class="selector-title">Header color</p>
                </li>
                <li class="theme-option">
                    <div class="theme-color header-theme">
                        <a href="#" data-theme="header-white"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-dark"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-blue"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-green"><span class="head"></span><span
                                class="cont"></span></a>
                        <a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <div class="sidebar-container">
            <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                <div id="remove-scroll" class="left-sidemenu">
                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                        data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <li class="sidebar-user-panel">
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="../assets/img/dp.jpg" class="img-circle user-img-circle"
                                         alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                    <p><?php echo $main->select('admin','admin_id',$_SESSION['login_user_id'],'username')?></p>
                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">Online</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item <?php echo $pages->active("index");?>">
                            <a href="." class="nav-link nav-toggle"> <i class="material-icons">dashboard</i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo $pages->active("buy_gas");?>">
                            <a href="?p=buy_gas" class="nav-link nav-toggle"> <i class="fa fa-list-alt"></i>
                                <span class="title">Buy Gas</span>
                            </a>
                        </li>
                        <li class="nav-item  <?php echo $pages->active("transactions");?>">
                            <a href="?p=transactions" class="nav-link nav-toggle"> <i class="fa fa-money"></i>
                                <span class="title">Transactions</span>
                            </a>
                        </li>
                        <li class="nav-item  <?php echo $pages->active("customer_add");?>">
                            <a href="?p=customer_add" class="nav-link nav-toggle"> <i class="fa fa-user-plus"></i>
                                <span class="title">Add Customer</span>
                            </a>
                        </li>
                        <li class="nav-item  <?php echo $pages->active("customer_all");?>">
                            <a href="?p=customer_all" class="nav-link nav-toggle"> <i class="fa fa-users"></i>
                                <span class="title">All Customer</span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo $pages->active("change_password");?>">
                            <a href="?p=change_password" class="nav-link nav-toggle"> <i class="icon-lock"></i>
                                <span class="title">Change Password</span>
                            </a>
                        </li>
                        <?php
                        if($_SESSION['login_user_type'] == 'super'){
                            ?>
                            <li class="nav-item <?php echo $pages->active("admin_settings");?>">
                                <a href="?p=admin_settings" class="nav-link nav-toggle"> <i class="icon-settings"></i>
                                    <span class="title"> Admin  Settings </span>
                                </a>
                            </li>
                            <?php
                        }else  if($_SESSION['login_user_type'] == 'admin'){
                          ?>
                        <?php
                        }
                        ?>

                        <li class="nav-item">
                            <a href="pages/logout.php" class="nav-link nav-toggle"> <i class="material-icons">dashboard</i>
                                <span class="title">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
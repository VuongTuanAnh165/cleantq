<?php
require_once(__DIR__ . '/../autoload/autoload.php');
//company (công ty)
$sql_company = "SELECT * FROM company WHERE company_active=1";
$company = $db->fetchcheck($sql_company);

//service_group (nhóm dịch vụ)
$sql_service_group = "SELECT * FROM service_group WHERE service_gr_active=1";
$service_group = $db->fetchdata($sql_service_group);

//post_type (nhóm bài viết)
$sql_post_type = "SELECT * FROM post_type WHERE post_type_active=1";
$post_type = $db->fetchdata($sql_post_type);

//work (hoạt động)
$sql_work = "SELECT * FROM work WHERE work_active=1";
$work = $db->fetchdata($sql_work);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Công ty Cổ phần Thương mại - Dịch vụ Sản xuất T&Q</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_img('company') . $company['company_logo'] ?>">
    <link rel="icon" type="image/png" href="<?php echo base_img('company') . $company['company_logo'] ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_img('company') . $company['company_logo'] ?>" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">

        <!--Start Preloader -->
        <!-- <div class="preloader"></div> -->
        <!--End Preloader -->

        <!--Start top bar area-->
        <section class="top-bar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-8 col-sm-7 col-xs-12">
                        <div class="top-left">
                            <ul class="clearfix">
                                <li class="info-list margin-top"><i class="fa fa-phone" aria-hidden="true"></i><a style="color: white;" href="tel:<?php echo $company['company_mobile'] ?>"><?php echo $company['company_mobile'] ?></a>
                                </li>

                                <li class="info-list margin-top"><i class="fa fa-phone" aria-hidden="true"></i><a style="color: white;" href="tel:<?php echo $company['company_phone'] ?>"><?php echo $company['company_phone'] ?></a>
                                </li>

                                <li class="info-list margin-top"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $company['company_address'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End top bar area-->

        <!--Start mainmenu area-->
        <section class="mainmenu-area style-two stricky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                        <div class="logo">
                            <a href="<?php echo base_url() ?>index.php">
                                <img src="<?php echo base_img('company') . $company['company_logo'] ?>" id="logo-custom" style="width:220px;" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-4">
                        <!--Start mainmenu-->
                        <nav class="main-menu pull-left">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">

                                    <li><a href="<?php echo base_url() ?>pages/company/index.php">Giới thiệu</a></li>
                                    <li class="dropdown"><a href="<?php echo base_url() ?>pages/work/index.php">Hoạt động</a>
                                        <ul>
                                            <?php foreach ($work as $item) : ?>
                                                <li><a href="<?php echo base_url() ?>pages/work/work_details.php?name=<?php $_SESSION[toSlug($item['work_name'])] = $item['work_id'];
                                                                                                                        echo toSlug($item['work_name']) ?>" title=""><?php echo $item['work_name'] ?></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="<?php echo base_url() ?>pages/service_group/index.php">Dịch vụ vệ
                                            sinh</a>
                                        <ul>
                                            <?php foreach ($service_group as $item) : ?>
                                                <li><a href="<?php echo base_url() ?>pages/service/index.php?name=<?php $_SESSION[toSlug($item['service_gr_name'])] = $item['service_gr_id'];
                                                                                                                    echo toSlug($item['service_gr_name']) ?>" title=""><?php echo $item['service_gr_name'] ?></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url() ?>pages/video_clip/index.php">Video Clip</a></li>
                                    <li class="dropdown"><a href="<?php echo base_url() ?>/pages/post_type/index.php">Tin tức</a>
                                        <ul>
                                            <?php foreach ($post_type as $item) : ?>
                                                <li><a href="<?php echo base_url() ?>pages/post/index.php?name=<?php $_SESSION[toSlug($item['post_type_title'])] = $item['post_type_id'];
                                                                                                                echo toSlug($item['post_type_title']) ?>" title=""><?php echo $item['post_type_title'] ?></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </li>
                                    <!-- <li class="dropdown"><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="shop.html">Shop Products</a></li>
                                    <li><a href="shop-single.html">Single Product</a></li>
                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="account.html">My Account</a></li>
                                </ul>
                            </li> -->
                                    <li><a href="<?php echo base_url() ?>pages/user_tb/index.php">Liên hệ</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!--End mainmenu-->
                        <!--Start search box-->
                        <div class="outer-search-box pull-right">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form method="post" action="<?php echo base_url() ?>pages/post/index.php">
                                        <div class="form-group">
                                            <input type="search" name="post_title" placeholder="Search Here" required>
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!--End search box-->
                    </div>
                </div>
            </div>
        </section>
        <!--End mainmenu area-->
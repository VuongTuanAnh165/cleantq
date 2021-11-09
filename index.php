<?php require_once(__DIR__ . '/layout/header.php'); ?>

<?php
require_once(__DIR__ . '/autoload/autoload.php');
//service_gr_rand (nhóm dịch vụ ngẫu nhiên)
$sql_service_group_rand = "SELECT * FROM service_group WHERE service_gr_active=1 ORDER BY RAND() LIMIT 4";
$service_group_rand = $db->fetchdata($sql_service_group_rand);

//pages_img_rand (nhóm dịch vụ ngẫu nhiên)
$sql_pages_img_rand = "SELECT * FROM pages_img WHERE pages_img_gr_id=1 ORDER BY RAND() LIMIT 6";
$pages_img_rand = $db->fetchdata($sql_pages_img_rand);

//post_new (tin tức mới)
$sql_post_new = "SELECT * FROM post WHERE post_active=1 ORDER BY post_datetime_update LIMIT 3";
$post_new = $db->fetchdata($sql_post_new);
?>

<!--Start rev slider wrapper-->
<section class="rev_slider_wrapper">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/slides/slider_1.png" alt="Slider_1" style="width:100%;">
            </div>

            <div class="item">
                <img src="images/slides/slider_2.jpg" alt="Slider_2" style="width:100%;">
            </div>

            <div class="item">
                <img src="images/slides/slider_3.png" alt="Slider_3" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!--End rev slider wrapper-->


<!--Start service v2 area-->
<section class="service-v2-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>Về chúng tôi</h1>
            <p><?php echo $company['company_description'] ?></p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="service-left">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-wiping-swipe-for-floors"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>CHUYÊN NGHIỆP</h3>
                                    <p>T&Q Services lên bảng kế hoạch làm việc và tổ chức vận hành công tác làm sạch một
                                        cách khoa học với đầy đủ chuyên môn, nghiệp vụ.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-cleaning-mop"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>TINH NHUỆ</h3>
                                    <p>Chính là sự thể hiện của tính chuyên nghiệp nhằm đưa ra phương án tối ưu trong
                                        công tác làm sạch, là khả năng đáp ứng nhu cầu cao trong mọi điều kiện.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-v2-img-box">
                    <img src="<?php echo base_img('company') . $company['company_img'] ?>" alt="Awesome Image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-right">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-paint-brush"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>HIỆU QUẢ</h3>
                                    <p>Chúng tôi luôn đưa ra các giải pháp dịch vụ tối ưu, phù hợp với yêu cầu và đặc
                                        điểm kinh doanh của quý khách hàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-teeth-cleaning"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>THÂN THIỆN</h3>
                                    <p>Với việc sử dụng các dụng cụ, thiết bị hóa chất, an toàn, thân thiện mang đến cho
                                        khách hàng môi trường làm việc trong lành.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End service v2 area-->

<!--Start express quote area-->
<section class="express-quote-area" style="background-image:url(images/resources/express-quote-area-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-holder">
                    <div class="sec-title text-right">
                        <h1>Đăng ký dịch vụ </h1>
                        <span class="border"></span>
                    </div>
                    <div class="text">
                        <p>Quý khách hàng có nhu cầu sử dụng dịch vụ có thể liên hệ theo mẫu sau</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form method="POST" id="quote-form" action="./pages/user_tb/index.php">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="user_name" value="" placeholder="Họ và tên*" required="">
                            <input type="text" name="user_number_phone" value="" placeholder="Số điện thoại*"
                                required="">
                            <select class="selectmenu" name="service_gr_id">
                                <?php foreach ($service_group as $item) : ?>
                                <option value="<?php echo $item['service_gr_id'] ?>">
                                    <?php echo $item['service_gr_name'] ?></option>
                                <? endforeach ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="user_address" value="" placeholder="Địa chỉ" required="">
                            <input type="email" name="user_email" value="" placeholder="Email*">
                            <textarea style="width:100%" name="user_cmt" placeholder="Tin nhắn của bạn.."
                                required=""></textarea>
                            <button class="thm-btn bg-clr1" type="submit">Gửi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End express quote area-->

<!--Start what we do area-->
<section class="what-we-do-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>DỊCH VỤ VỆ SINH</h1>
            <p>T&Q Services cung cấp nhiều dịch vụ vệ sinh trọn gói, quý khách có thể dễ dàng lựa chọn để sử dụng</p>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="wedo-carousel">
                    <div class="single-item">
                        <img src="images/whatwe-do/services_1.jpg" alt="Awesome Image">
                    </div>
                    <div class="single-item">
                        <img src="images/whatwe-do/services_2.jpg" alt="Awesome Image">
                    </div>
                    <div class="single-item">
                        <img src="images/whatwe-do/services_3.jpg" alt="Awesome Image">
                    </div>
                    <div class="single-item">
                        <img src="images/whatwe-do/services_4.jpg" alt="Awesome Image">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-box">
                    <ul>
                        <?php foreach ($service_group_rand as $item) : ?>
                        <li>
                            <div class="icon-box">
                                <a
                                    href="<?php echo base_url() ?>pages/service/index.php?name=<?php $_SESSION[toSlug($item['service_gr_name'])] = $item['service_gr_id'];
                                                                                                    echo toSlug($item['service_gr_name']) ?>">
                                    <span class="flaticon-kettle"></span>
                                </a>

                            </div>
                            <div class="text-holder">
                                <a
                                    href="<?php echo base_url() ?>pages/service/index.php?name=<?php $_SESSION[toSlug($item['service_gr_name'])] = $item['service_gr_id'];
                                                                                                    echo toSlug($item['service_gr_name']) ?>">
                                    <h3><?php echo $item['service_gr_name'] ?></h3>
                                </a>
                                <p><?php echo $item['service_gr_description'] ?></p>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End what we do area-->

<!--Start Brand area-->
<section class="brand-area brand-v2-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand">
                    <!--Start single item-->
                    <a href="https://tpb.vn/" target="_blank">
                        <div class="single-item">
                            <img src="images/brand/1.png" alt="Banking">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="https://www.vietinbank.vn/web/home/vn/index.html" target="_blank">
                        <div class="single-item">
                            <img src="images/brand/2.png" alt="Banking">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="https://www.hanwhalife.com.vn/vi" target="_blank">
                        <div class="single-item">
                            <img src="images/brand/3.png" alt="Banking">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="https://www.kebhana.com/easyone_index_vi.html" target="_blank">
                        <div class="single-item">
                            <img src="images/brand/4.png" alt="Banking">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="https://www.acb.com.vn/" target="_blank">
                        <div class="single-item">
                            <img src="images/brand/5.png" alt="Banking">
                        </div>
                    </a>
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->


<!--Start gallery area-->
<section class="gallery-area" style="background-image:url(images/gallery/gallery-bg.jpg);">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>MỘT SỐ HÌNH ẢNH VỀ CÔNG TY</h1>
            <p>T&Q rất hân hạnh được gửi tới quý khách hàng những hình ảnh của công ty </p>
        </div>
        <div class="row">
            <!--Start single gallery item-->
            <?php foreach ($pages_img_rand as $item) : ?>
            <div class="col-md-4">
                <div class="single-gallery-item">
                    <div class="img-holder">
                        <img width="360px" height="321px" src="<?php echo $item['pages_img_link'] ?>"
                            alt="Awesome Image">
                        <div class="top-overlay">
                            <div class="overlay-box">
                                <div class="box">
                                    <div class="content">
                                        <a href="<?php base_url() ?>pages/video_clip/index.php">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-overlay">
                            <div class="overlay-style-two">
                                <div class="box">
                                    <div class="content">
                                        <div class="title pull-left">
                                        </div>
                                        <div class="see-project pull-right">
                                            <a href="<?php echo $item['pages_img_link'] ?>" data-rel="prettyPhoto"
                                                title="Hanover Project"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <!--End single gallery item-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="more-project text-center">
                    <a class="thm-btn bg-clr1" href="<?php base_url() ?>pages/video_clip/index.php">XEM THÊM</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End gallery area-->

<!--Start latest blog area-->
<section class="latest-blog-v2-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>TIN TỨC MỚI</h1>
            <!-- <div class="icon-holder">
                <img src="images/icon/title-icon.png" alt="Icon">
            </div> -->
            <p>Cập nhật thông tin về công ty</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="latest-blog-left">
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="published-date">
                            <h5><?php echo $post_new[0]['post_datetime_update'] ?></h5>
                        </div>
                        <div class="img-holder">
                            <img src="<?php echo base_img('post') . $post_new[0]['post_image1'] ?>" alt="Awesome Image">
                            <div class="overlay-style-two">
                                <div class="box">
                                    <div class="content">
                                        <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                                        echo toSlug($post_new[0]['post_title']) ?>"><i
                                                class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                            echo toSlug($post_new[0]['post_title']) ?>">
                                <h3 class="blog-title"><?php echo $post_new[0]['post_title'] ?></h3>
                            </a>
                            <div class="meta-info clearfix">
                                <ul class="post-info">
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a
                                            href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                                                                                    echo toSlug($post_new[0]['post_title']) ?>">By
                                            Admin</a></li>
                                    <li><i class="fa fa-tags" aria-hidden="true"></i><a
                                            href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                                                                                    echo toSlug($post_new[0]['post_title']) ?>">Tin
                                            tức</a></li>
                                </ul>
                            </div>
                            <div class="text">
                                <p><?php echo $post_new[0]['post_description'] ?></p>
                                <a class="readmore"
                                    href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                                                echo toSlug($post_new[0]['post_title']) ?>">Xem thêm<i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="latest-blog-right">
                    <!--Start single blog post-->
                    <div class="single-blog-post blog-list first-list-blog">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="published-date">
                                    <h5><?php echo $post_new[1]['post_datetime_update'] ?></h5>
                                </div>
                                <div class="img-holder">
                                    <img src="<?php echo base_img('post') . $post_new[1]['post_image1'] ?>"
                                        alt="Awesome Image">
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a
                                                    href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                                echo toSlug($post_new[1]['post_title']) ?>"><i
                                                        class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-holder">
                                    <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                    echo toSlug($post_new[1]['post_title']) ?>">
                                        <h3 class="blog-title"><?php echo $post_new[1]['post_title'] ?></h3>
                                    </a>
                                    <div class="meta-info clearfix">
                                        <ul class="post-info">
                                            <li><i class="fa fa-user" aria-hidden="true"></i><a
                                                    href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                                                                            echo toSlug($post_new[1]['post_title']) ?>">By
                                                    Admin</a></li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i><a
                                                    href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                                                                            echo toSlug($post_new[1]['post_title']) ?>">Tin
                                                    tức</a></li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $post_new[1]['post_description'] ?></p>
                                        <a class="readmore"
                                            href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                                        echo toSlug($post_new[1]['post_title']) ?>">Xem
                                            thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-blog-post blog-list">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="published-date">
                                    <h5><?php echo $post_new[2]['post_datetime_update'] ?></h5>
                                </div>
                                <div class="img-holder">
                                    <img src="<?php echo base_img('post') . $post_new[2]['post_image1'] ?>"
                                        alt="Awesome Image">
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a
                                                    href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                                echo toSlug($post_new[2]['post_title']) ?>"><i
                                                        class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-holder">
                                    <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                    echo toSlug($post_new[2]['post_title']) ?>">
                                        <h3 class="blog-title"><?php echo $post_new[2]['post_title'] ?></h3>
                                    </a>
                                    <div class="meta-info clearfix">
                                        <ul class="post-info">
                                            <li><i class="fa fa-user" aria-hidden="true"></i><a
                                                    href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                                                                            echo toSlug($post_new[2]['post_title']) ?>">By
                                                    Admin</a></li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i><a
                                                    href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                                                                            echo toSlug($post_new[2]['post_title']) ?>">Tin
                                                    tức</a></li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $post_new[2]['post_description'] ?></p>
                                        <a class="readmore"
                                            href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                                        echo toSlug($post_new[2]['post_title']) ?>">Xem
                                            thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>
            </div>

        </div>
    </div>
</section>
<!--End latest blog area-->

<?php require_once(__DIR__ . '/layout/footer.php'); ?>
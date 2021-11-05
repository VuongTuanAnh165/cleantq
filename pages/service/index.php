<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
if (isset($_SESSION[getInput('name')])) {
    $id = intval($_SESSION[getInput('name')]);
}
//dịch vụ theo service_gr_id
$sql_service = "SELECT * FROM service WHERE service_gr_id=$id AND service_active=1";
$service = $db->fetchdata($sql_service);

//nhóm dịch vụ
$sql_service_group = "SELECT * FROM service_group WHERE service_gr_active=1";
$service_group = $db->fetchdata($sql_service_group);

//nhóm dịch vụ theo post_type_id
$sql_service_group_id = "SELECT * FROM service_group WHERE service_gr_id=$id";
$service_group_id = $db->fetchcheck($sql_service_group_id);

//bài viết mới
$sql_post_new = "SELECT * FROM post WHERE post_active=1 ORDER BY post_datetime_update LIMIT 5";
$post_new = $db->fetchdata($sql_post_new);
?>

<!-- main content -->
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(<?php echo base_img('service') . $service[0]['service_image'] ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1>Dịch vụ<br><?php echo $service_group_id['service_gr_name'] ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-botton">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="<?php echo base_url() ?>index.php">Home</a></li>
                        <li><span class="dotted"></span></li>
                        <li><a href="<?php echo base_url() ?>pages/service_group/index.php">Nhóm dịch vụ</a></li>
                        <li><span class="dotted"></span></li>
                        <li class="active">Dịch vụ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start blog area-->
<section id="blog-area" class="blog-list-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <!--Start single blog post-->
                    <?php foreach ($service as $item) : ?>
                        <div class="single-blog-post blog-list">
                            <div class="row">
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="img-holder">
                                        <img src="<?php echo base_img('service') . $item['service_image'] ?>" alt="Awesome Image">
                                        <div class="overlay-style-two">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="service_details.php?name=<?php $_SESSION[toSlug($item['service_name'])] = $item['service_id'];
                                                                                        echo toSlug($item['service_name']) ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                    <div class="text-holder">
                                        <a href="service_details.php?name=<?php $_SESSION[toSlug($item['service_name'])] = $item['service_id'];
                                                                            echo toSlug($item['service_name']) ?>">
                                            <h3 class="blog-title"><?php echo $item['service_name'] ?></h3>
                                        </a>
                                        <div class="meta-info clearfix">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Admin</a></li>
                                                <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Apartment Cleaning</a></li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p><?php echo $item['service_description'] ?></p>
                                            <a class="readmore" href="service_details.php?name=<?php $_SESSION[toSlug($item['service_name'])] = $item['service_id'];
                                                                                                echo toSlug($item['service_name']) ?>">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Nhóm dịch vụ</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="categories clearfix">
                            <?php foreach ($service_group as $item) : ?>
                                <li><a href="<?php echo base_url() ?>pages/service/index.php?name=<?php $_SESSION[toSlug($item['service_gr_name'])] = $item['service_gr_id'];
                                                                                echo toSlug($item['service_gr_name']) ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><?php echo $item['service_gr_name'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Tin tức mới</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="latest-post">
                            <?php foreach ($post_new as $item) : ?>
                                <li>
                                    <div class="img-holder">
                                        <img src="<?php echo base_img('post') . $item['post_image1'] ?>" alt="Awesome Image">
                                        <div class="overlay-box">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="<?php echo base_url() ?>pages/post/post_details.php?name=<?php $_SESSION[toSlug($item['post_title'])] = $item['post_id'];
                                                                                                                        echo toSlug($item['post_title']) ?>">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="<?php echo base_url() ?>pages/post/post_details.php?name=<?php $_SESSION[toSlug($item['post_title'])] = $item['post_id'];
                                                                                                            echo toSlug($item['post_title']) ?>">
                                            <h5 class="post-title">
                                                <?php echo $item['post_title'] ?>
                                            </h5>
                                        </a>
                                        <h6 class="post-date">
                                            <?php echo $item['post_datetime_update'] ?>
                                        </h6>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                </div>
            </div>
            <!--End Sidebar Wrapper-->
        </div>
    </div>
</section>
<!--End blog area-->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>
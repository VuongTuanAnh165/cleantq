<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
if (isset($_SESSION[getInput('name')])) {
    $id = intval($_SESSION[getInput('name')]);
}
//bài viết theo post_id
$sql_post = "SELECT * FROM post WHERE  post_id=$id";
$post = $db->fetchcheck($sql_post);

//nhóm tin tức
$sql_post_type = "SELECT * FROM post_type WHERE post_type_active=1";
$post_type = $db->fetchdata($sql_post_type);

//bài viết mới
$sql_post_new = "SELECT * FROM post WHERE post_active=1 ORDER BY post_datetime_update LIMIT 10";
$post_new = $db->fetchdata($sql_post_new);
?>

<!-- /.page-title -->
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(<?php echo base_img('post') . $post['post_image1'] ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1>Chi tiết tin tức<br><?php echo $post['post_title'] ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-botton">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="<?php echo base_url() ?>index.php">Trang chủ</a></li>
                        <li><span class="dotted"></span></li>
                        <li><a href="<?php echo base_url() ?>pages/post_type/index.php">Nhóm tin tức</a></li>
                        <li><span class="dotted"></span></li>
                        <li><a href="./index.php?name=<?php $_SESSION[toSlug($item['post_type_title'])] = $item['post_type_id'];
                                                        echo toSlug($item['post_type_title']) ?>">Tin tức</a></li>
                        <li><span class="dotted"></span></li>
                        <li class="active">Chi tiết tin tức</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start blog area-->
<section id="blog-area" class="blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <div class="single-blog-post">
                        <div class="published-date">
                            <h5><?php echo $post['post_datetime_update'] ?></h5>
                        </div>
                        <div class="img-holder">
                            <img src="<?php echo base_img('post') . $post['post_image1'] ?>" alt="Awesome Image">
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><?php echo $post['post_title'] ?></h3>
                            <div class="meta-info clearfix">
                                <ul class="post-info">
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Admin</a></li>
                                    <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Commercial Cleaning</a></li>
                                </ul>
                            </div>
                            <div class="text">
                                <?php echo $post['ptd_text'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Nhóm tin tức</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="categories clearfix">
                            <?php foreach ($post_type as $item) : ?>
                                <li><a href="<?php echo base_url() ?>pages/post/index.php?name=<?php $_SESSION[toSlug($item['post_type_title'])] = $item['post_type_id'];
                                                                                                echo toSlug($item['post_type_title']) ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><?php echo $item['post_type_title'] ?></a></li>
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
                    <!--Start single-sidebar-->
                    <!--End single-sidebar-->
                </div>
            </div>
            <!--End Sidebar Wrapper-->
        </div>
    </div>
</section>
<!--End blog area-->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>
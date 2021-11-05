<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
if (isset($_SESSION[getInput('name')])) {
    $id = intval($_SESSION[getInput('name')]);
    //tin tức theo post_type_id
    $sql_post = "SELECT * FROM post WHERE post_type_id=$id";
    $post = $db->fetchdata($sql_post);
    //nhóm tin tức theo post_type_id
    $sql_post_type_id = "SELECT * FROM post_type WHERE post_type_id=$id";
    $post_type_id = $db->fetchcheck($sql_post_type_id);
}

//nhóm tin tức
$sql_post_type = "SELECT * FROM post_type WHERE post_type_active=1";
$post_type = $db->fetchdata($sql_post_type);

//bài viết mới
$sql_post_new = "SELECT * FROM post WHERE post_active=1 ORDER BY post_datetime_update LIMIT 10";
$post_new = $db->fetchdata($sql_post_new);
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_title = $_POST['post_title'];
    if ($post_title != '') {
        $sql_post = "SELECT * FROM post WHERE post_title LIKE '%$post_title%' AND post_active=1";
        $post = $db->fetchdata($sql_post);
    } else {
        if (isset($_SESSION[getInput('name')])) {
            $id = intval($_SESSION[getInput('name')]);
            unset($_SESSION[getInput('name')]);
            $sql_post = "SELECT * FROM post WHERE post_type_id=$id";
            $post = $db->fetchdata($sql_post);
            //nhóm tin tức theo post_type_id
            $sql_post_type_id = "SELECT * FROM post_type WHERE post_type_id=$id";
            $post_type_id = $db->fetchcheck($sql_post_type_id);
        }
    }
}
?>

<section class="breadcrumb-area" style="background-image: url(<?php echo base_img('post') . $post[0]['post_image1'] ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1>Tin tức<br>
                        <?php
                        if (isset($post_title)) {
                            echo " Liên quan đến '" . $post_title . "'";
                        } else {
                            echo $post_type_id['post_type_title'];
                        }
                        ?></h1>
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
                        <li><a href="<?php echo base_url() ?>pages/post_type/index.php">Nhóm tin tức</a></li>
                        <li><span class="dotted"></span></li>
                        <li class="active">Tin tức</li>
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
                    <?php foreach ($post as $item) : ?>
                        <div class="single-blog-post blog-list">
                            <div class="row">
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="img-holder">
                                        <img src="<?php echo base_img('post') . $item['post_image1'] ?>" alt="Awesome Image">
                                        <div class="overlay-style-two">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="post_details.php?name=<?php $_SESSION[toSlug($item['post_title'])] = $item['post_id'];
                                                                                    echo toSlug($item['post_title']) ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                    <div class="text-holder">
                                        <a href="post_details.php?name=<?php $_SESSION[toSlug($item['post_title'])] = $item['post_id'];
                                                                        echo toSlug($item['post_title']) ?>">
                                            <h3 class="blog-title"><?php echo $item['post_title'] ?></h3>
                                        </a>
                                        <div class="meta-info clearfix">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Admin</a></li>
                                                <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Apartment Cleaning</a></li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p><?php echo $item['post_description'] ?></p>
                                            <a class="readmore" href="post_details.php?name=<?php $_SESSION[toSlug($item['post_title'])] = $item['post_id'];
                                                                                            echo toSlug($item['post_title']) ?>">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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
                </div>
            </div>
            <!--End Sidebar Wrapper-->
        </div>
    </div>
</section>
<!--End blog area-->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>
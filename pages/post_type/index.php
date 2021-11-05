<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');

//Nhóm bài viết 
$sql_post_type = "SELECT * FROM post_type WHERE post_type_active=1";
$post_type = $db->fetchdata($sql_post_type);
?>
<!-- /.page-title -->
<!-- our-profolio -->
<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(<?php echo base_img('post_type') . $post_type[0]['post_type_img'] ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1>Nhóm tin tức</h1>
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
                        <li class="active">Nhóm tin tức</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start gallery area-->
<section class="gallery-area gallery-page">
    <div class="container">
        <div class="row">
            <!--Start single gallery item-->
            <?php foreach ($post_type as $item) : ?>
                <div class="col-md-4">
                    <div class="single-gallery-item">
                        <div class="img-holder">
                            <img src="<?php echo base_img('post_type').$item['post_type_img'] ?>" alt="Awesome Image">
                            <div class="top-overlay">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="../post/index.php?name=<?php $_SESSION[toSlug($item['post_type_title'])]= $item['post_type_id']; echo toSlug($item['post_type_title'])?>">
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
                                                <h5><?php echo $item['post_type_title'] ?></h5>
                                                <p><?php echo $item['post_type_description'] ?></p>
                                            </div>
                                            <div class="see-project pull-right">
                                                <a href="<?php echo base_img('post_type').$item['post_type_img'] ?>" data-rel="prettyPhoto" title="Hanover Project"><i class="fa fa-search-plus"></i></a>
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
    </div>
</section>



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>
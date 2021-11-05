<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
$id = intval(getInput('id'));
//Vườn garden
$sql_video_clip = "SELECT * FROM video_clip WHERE  video_clip_active=1";
$video_clip = $db->fetchdata($sql_video_clip);

?>


<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(https://dondepvesinhgiare.com/image/data/khu%20%C4%91%20th%E1%BB%8B%201.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1>Video - Clip</h1>
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
                        <li class="active">Video - Clip</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start service v2 area-->
<section class="service-v2-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>Blog</h1>
        </div>
        <div class="row">
            <div style="text-align: center;" class="col-md-12">
                <?php foreach ($video_clip as $item) : ?>
                    <div style="margin-top: 2%;">
                        <p><?php echo $item['video_clip_content'] ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!--End service v2 area-->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>
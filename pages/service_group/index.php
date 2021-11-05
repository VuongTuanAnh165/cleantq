<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');

//Nhóm dịch vụ
$sql_service_group = "SELECT * FROM service_group WHERE service_gr_active=1";
$service_group = $db->fetchdata($sql_service_group);
?>

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(<?php echo base_img('service_group') . $service_group[0]['service_gr_img'] ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1>Nhóm dịch vụ</h1>
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
                        <li class="active">Nhóm dịch vụ</li>
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
            <?php foreach ($service_group as $item) : ?>
                <div class="col-md-4">
                    <div class="single-gallery-item">
                        <div class="img-holder">
                            <img width="370" height="300" src="<?php echo base_img('service_group') . $item['service_gr_img'] ?>" alt="Awesome Image">
                            <div class="top-overlay">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="../service/index.php?name=<?php $_SESSION[toSlug($item['service_gr_name'])] = $item['service_gr_id'];
                                                                                echo toSlug($item['service_gr_name']) ?>">
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
                                            <div style="width: 75%; height:20%; overflow:hidden" class="title pull-left">
                                                <h5><?php echo $item['service_gr_name'] ?></h5>
                                                <p><?php echo $item['service_gr_description'] ?></p>
                                            </div>
                                            <div style="width: 15%;" class="see-project pull-right">
                                                <a href="<?php echo base_img('service_group') . $item['service_gr_img'] ?>" data-rel="prettyPhoto" title="Hanover Project"><i class="fa fa-search-plus"></i></a>
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
<!--End gallery area-->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>
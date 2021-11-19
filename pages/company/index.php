<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
$id = intval(getInput('id'));
//công ty company
$sql_company = "SELECT * FROM company WHERE company_active=1";
$company_check = $db->fetchcheck($sql_company);

?>


<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(<?php echo base_img('company') . $company['company_img'] ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1>Giới thiệu</h1>
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
                        <li class="active">Giới thiệu</li>
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
            <h1><?php echo $company['company_name'] ?></h1>
            <div class="icon-holder">
                <img src="<?php echo base_img('company') . $company['company_logo'] ?>" alt="Icon">
            </div>
            <p><?php echo $company['company_description'] ?></p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="service-left">
                    <!--Start single item-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-wiping-swipe-for-floors"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Điện thoại</h3>
                                    <p><a href="tel:<?php echo $company['company_mobile'] ?>"><?php echo $company['company_mobile'] ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-cleaning-mop"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Hotline</h3>
                                    <p><a href="tel:<?php echo $company['company_mobile'] ?>"><?php echo $company['company_phone'] ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-v2-img-box">
                    <img src="<?php echo base_img('company') . $company['company_img'] ?>" alt="Awesome Image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-right">
                    <!--Start single item-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-paint-brush"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Địa chỉ</h3>
                                    <p><?php echo $company['company_address'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-teeth-cleaning"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Email</h3>
                                    <p><a href="mailto:<?php echo $company['company_email'] ?>"><?php echo $company['company_email'] ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>
        </div>
        <div style="margin-top: 7%;" class="sec-title style-two text-center">
            <p><?php echo $company['company_content'] ?></p>
        </div>
    </div>
</section>
<!--End service v2 area-->


<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>
<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
//Nhóm dịch vụ
$sql_service_group = "SELECT * FROM service_group WHERE service_gr_active=1";
$service_group = $db->fetchdata($sql_service_group);

//Công ty
$sql_company = "SELECT * FROM company WHERE company_active=1";
$company = $db->fetchcheck($sql_company);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data =
        [
            "user_name" => $_POST['user_name'],
            "user_number_phone" => $_POST['user_number_phone'],
            "user_email" => $_POST['user_email'],
            "user_address" => $_POST['user_address'],
            "service_gr_id" => $_POST['service_gr_id'],
            "user_cmt" => $_POST['user_cmt']
        ];

    $id_insert = $db->insert("user_tb", $data);
    if ($id_insert > 0) {
        echo "<script>alert('Gửi Thông tin thành công');window.location='".base_url()."index.php'</script>";
    } else {
        echo "<script>alert('Gửi không thành, yêu cầu bạn nhập đầy đủ thông tin')</script>";
    }
}

?>

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(https://azmax.vn/wp-content/uploads/2016/10/khach-hang-la-gi-az-crm.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1>Liên hệ</h1>
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
                        <li class="active">Liên hệ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start contact form area-->
<section class="service-v2-area contact-form-area">
    <div class="container">
        <div class="row">
            <div class="sec-title style-two text-center">
                <h1>Liên hệ với chúng tôi</h1>
                <p>Chúng tôi luôn bên bạn</p>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="contact-form">
            
                    <form method="POST" class="default-form" action="" accept-charset="utf-8" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="user_name" value="" placeholder="Tên của bạn" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="user_email" value="" placeholder="Email của bạn" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="user_number_phone" value="" placeholder="Số điện thoại">
                            </div>
                            <div class="col-md-6">
                                <select class="selectmenu" name="service_gr_id">
                                    <?php foreach ($service_group as $item) : ?>
                                        <option value="<?php echo $item['service_gr_id'] ?>">
                                            <?php echo $item['service_gr_name'] ?></option>
                                    <? endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="user_address" value="" placeholder="Địa chỉ">   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="user_cmt" placeholder="Tin nhắn của bạn.." required=""></textarea>
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit" class="thm-btn bg-clr1">Gửi thông tin</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form-right-box text-center">
                    <div class="top">
                        <h3>Về chúng tôi</h3>
                    </div>
                    <div class="icon-holder">
                        <span class="flaticon-support"></span>
                    </div>
                    <h4><?php echo $company['company_name'] ?></h4>
                    <p><?php echo $company['company_description'] ?></p>
                    <div class="call-us">
                        <h6>Điện thoại</h6>
                        <h2><a style="color: white;" href="tel:<?php echo $company['company_mobile'] ?>"><?php echo $company['company_mobile'] ?></a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End contact form area-->
<!-- /Contact -->

<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>
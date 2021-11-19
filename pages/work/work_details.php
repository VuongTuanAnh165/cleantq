<?php require_once(__DIR__ . '/../../layout/header.php'); ?>

<?php
require_once(__DIR__ . '/../../autoload/autoload.php');
if (isset($_SESSION[getInput('name')])) {
    $id = intval($_SESSION[getInput('name')]);
}
//Vườn garden
$sql_work = "SELECT * FROM work WHERE  work_id=$id";
$work = $db->fetchcheck($sql_work);

?>


<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(<?php echo base_img('work') . $work['work_img'] ?>);">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h1>Chi tiết hoạt động<br><?php echo $work['work_name'] ?></h1>
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
                        <li><a href="<?php echo base_url() ?>pages/work/index.php">Hoạt động</a></li>
                        <li><span class="dotted"></span></li>
                        <li class="active">Chi tiết hoạt động</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start work v2 area-->
<section class="work-v2-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1><?php echo $work['work_name'] ?></h1>
        </div>
        <div class="row">
            <div style="text-align: center;" class="col-md-12">
                <?php echo $item['work_content'] ?>
            </div>
        </div>
    </div>
</section>
<!--End work v2 area-->



<?php require_once(__DIR__ . '/../../layout/footer.php'); ?>
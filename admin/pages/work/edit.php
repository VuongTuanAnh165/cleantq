<?php
$open = "work";
require_once(__DIR__ . '/../../autoload/autoload.php');

$id = intval(getInput('id'));
$sql = "SELECT * FROM work WhERE work_id=$id";
$work = $db->fetchcheck($sql);
if (empty($work)) {
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin($open);
}

$sql1 = "SELECT * FROM website_config";
$website_config = $db->fetchdata($sql1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_FILES['work_img']['name'] != '') {
        $file_name = $_FILES['work_img']['name'];
        $file_size = $_FILES['work_img']['size'];
        $file_tmp = $_FILES['work_img']['tmp_name'];
        $file_type = $_FILES['work_img']['type'];
        $file_parts = explode('.', $_FILES['work_img']['name']);
        $file_ext = strtolower(end($file_parts));
        $expensions = array("jpeg", "jpg", "png");
        $work_img = substr(md5(mt_rand()), 0, -1) . '.' . $file_ext;
        $target = "../../../pages_img/post/" . basename($work_img);
        $data =
            [
                "work_name" => postInput('work_name'),
                "work_img" => $work_img,
                "work_description" => postInput('work_description'),
                "work_content" => postInput('work_content')
            ];
        $data_img =
            [
                "pages_img_gr_id" => 7,
                "pages_img_name" => $work_img,
                "pages_img_link" => base_img("post") . $work_img
            ];
        if (postInput('work_name') == '') {
            echo "<script>alert('Mời bạn nhập đầy đủ tên hoạt động');</script>";
        } else {
            if (in_array($file_ext, $expensions) === false) {
                echo "<script>alert('Chỉ hỗ trợ upload file JPEG hoặc PNG.');</script>";
            } else {
                if ($file_size > 2097152) {
                    echo "<script>alert('Kích thước file không được lớn hơn 2MB.');</script>";
                } else {
                    if ($post['work_name'] != $data['work_name']) {
                        $id_update = $db->update("work", $data, array("work_id" => $id));
                        $id_insert_img = $db->insert("pages_img", $data_img);
                        if ($id_update > 0 && $id_insert_img > 0 && move_uploaded_file($_FILES['work_img']['tmp_name'], $target)) {
                            $_SESSION['success'] = " Cập nhật thành công ";
                            redirectAdmin($open);
                        } else {
                            $_SESSION['error'] = " Dữ liệu không thay đổi ";
                            redirectAdmin($open);
                        }
                    } else {
                        $id_update = $db->update("work", $data, array("work_id" => $id));
                        $id_insert_img = $db->insert("pages_img", $data_img);
                        if ($id_update > 0 && $id_insert_img > 0 && move_uploaded_file($_FILES['work_img']['tmp_name'], $target)) {
                            $_SESSION['success'] = " Cập nhật thành công ";
                            redirectAdmin($open);
                        } else {
                            $_SESSION['error'] = " Dữ liệu không thay đổi ";
                            redirectAdmin($open);
                        }
                    }
                }
            }
        }
    } else {
        $data =
            [
                "work_name" => postInput('work_name'),
                "work_description" => postInput('work_description'),
                "work_content" => postInput('work_content')
            ];
        if (postInput('work_name') == '') {
            echo "<script>alert('Mời bạn nhập đầy đủ tên hoạt động');</script>";
        } else {
            if ($post['work_name'] != $data['work_name']) {
                $id_update = $db->update("work", $data, array("work_id" => $id));
                if ($id_update > 0) {
                    $_SESSION['success'] = " Cập nhật thành công ";
                    redirectAdmin($open);
                } else {
                    $_SESSION['error'] = " Dữ liệu không thay đổi ";
                    redirectAdmin($open);
                }
            } else {
                $id_update = $db->update("work", $data, array("work_id" => $id));
                if ($id_update > 0) {
                    $_SESSION['success'] = " Cập nhật thành công ";
                    redirectAdmin($open);
                } else {
                    $_SESSION['error'] = " Dữ liệu không thay đổi ";
                    redirectAdmin($open);
                }
            }
        }
    }
}
?>

<?php
require_once(__DIR__ . '/../../layout/header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thay đổi hoạt động</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="./index.php">Danh sách hoạt động</a></li>
                        <li class="breadcrumb-item active">Sửa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Tên hoạt động</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Tên hoạt động" name='work_name' value="<?php echo $work['work_name'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ảnh nền</label>
                            <div style="margin-bottom: 1%;" class="col-sm-8">
                                <label className='cursor-pointer select-wrapper'>
                                    <div className='logo-wrapper'>
                                        <img width="100px" id="anh1" src="<?php echo base_img('work').$work['work_img'] ?>" alt='your image'>
                                    </div>
                                    <input id="exampleFormControlFile1" type="file" style="display: none;" onchange="preview_thumbail1(this);" name='work_img' />
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Mô tả</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Mô tả" name='work_description' value="<?php echo $work['work_description'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Nội dung</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="3" id="summernote" name='work_content'>
                                    <?php echo $work['work_content'] ?>
                                </textarea>
                            </div>
                        </div>

                        <div class="from-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php
require_once(__DIR__ . '/../../layout/footer.php');
?>
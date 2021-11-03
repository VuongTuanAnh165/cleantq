<?php
$open = "video_clip";
require_once(__DIR__ . '/../../../autoload/autoload.php');

$id = intval(getInput('id'));
$sql = "SELECT * FROM video_clip WhERE video_clip_id=$id";
$video_clip = $db->fetchcheck($sql);
if (empty($video_clip)) {
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin($open);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data =
        [
            "video_clip_content" => postInput('video_clip_content'),
            "video_clip_description" => postInput('video_clip_description')
        ];

    if ($post['video_clip_description'] != $data['video_clip_description']) {
        $id_update = $db->update("video_clip", $data, array("video_clip_id" => $id));
        if ($id_update > 0) {
            $_SESSION['success'] = " Cập nhật thành công ";
            redirectAdmin($open);
        } else {
            $_SESSION['error'] = " Dữ liệu không thay đổi ";
            redirectAdmin($open);
        }
    } else {
        $id_update = $db->update("video_clip", $data, array("video_clip_id" => $id));
        if ($id_update > 0) {
            $_SESSION['success'] = " Cập nhật thành công ";
            redirectAdmin($open);
        } else {
            $_SESSION['error'] = " Dữ liệu không thay đổi ";
            redirectAdmin($open);
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
                    <h1>Thay đổi video-clip</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="./index.php">Video-clip</a></li>
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
                            <label for="inputEmail3" class="col-sm-2 control-lable">Mô tả</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Mô tả" name='video_clip_description' value="<?php echo $video_clip['video_clip_description'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Blog</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="3" id="summernote" name='video_clip_content'>
                                    <?php echo $video_clip['video_clip_content'] ?>
                                </textarea>
                            </div>
                        </div>

                        <div class="from-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success" name="submit" value="submit">Lưu</button>
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
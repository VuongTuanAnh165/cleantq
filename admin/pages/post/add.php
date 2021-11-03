<?php
$open = "post";
require_once(__DIR__ . '/../../../autoload/autoload.php');
$sql2 = "SELECT * FROM post_type";
$post_type = $db->fetchdata($sql2);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();
    $file_name = $_FILES['post_image1']['name'];
    $file_size = $_FILES['post_image1']['size'];
    $file_tmp = $_FILES['post_image1']['tmp_name'];
    $file_type = $_FILES['post_image1']['type'];
    $file_parts = explode('.', $_FILES['post_image1']['name']);
    $file_ext = strtolower(end($file_parts));
    $expensions = array("jpeg", "jpg", "png");
    $post_image1 = substr(md5(mt_rand()), 0, -1) . '.' . $file_ext;
    $target = "../../../pages_img/post/" . basename($post_image1);
    $data =
        [
            "post_title" => postInput('post_title'),
            "post_description" => postInput('post_description'),
            "ptd_text" => postInput('ptd_text'),
            "post_type_id" => postInput('post_type_id'),
            "post_image1" => $post_image1
        ];
    $data_img =
        [
            "pages_img_gr_id" => 3,
            "pages_img_name" => $post_image1,
            "pages_img_link" => base_img("post").$post_image1
        ];
    if (postInput('post_title') == '') {
        echo "<script>alert('Mời bạn nhập đầy đủ tên bài viết');</script>";
    } else {
        if (in_array($file_ext, $expensions) === false) {
            echo "<script>alert('Chỉ hỗ trợ upload file JPEG hoặc PNG.');</script>";
        } else {
            if ($file_size > 2097152) {
                echo "<script>alert('Kích thước file không được lớn hơn 2MB.');</script>";
            } else {
                $id_insert = $db->insert("post", $data);
                $id_insert_img = $db->insert("pages_img", $data_img);
                if ($id_insert > 0 && $id_insert_img > 0 && move_uploaded_file($_FILES['post_image1']['tmp_name'], $target)) {
                    $_SESSION['success'] = " Thêm mới thành công ";
                    redirectAdmin($open);
                } else {
                    $_SESSION['error'] = " Thêm mới thất bại ";
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
                    <h1>Thêm mới bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="./index.php">Danh sách bài viết</a></li>
                        <li class="breadcrumb-item active">Thêm mới</li>
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
                            <label for="inputEmail3" class="col-sm-2 control-lable">Nhóm bài viết</label>
                            <div class="col-sm-8">
                                <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="post_type_id">
                                    <?php foreach ($post_type as $item) : ?>
                                        <option value="<?php echo $item['post_type_id'] ?>"><?php echo $item['post_type_title'] ?></option>
                                    <? endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Tên tiêu đề</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Tên tiêu đề" name='post_title'>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Hình ảnh</label>
                            <div style="margin-bottom: 1%;" class="col-sm-8">
                                <input type="file" class='form-control-file' id="exampleFormControlFile1" name='post_image1' onchange="preview_thumbail(this);">
                                <img id="anh" src="#" alt="your image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Mô tả</label>
                            <div class="col-sm-8">
                                <textarea placeholder="Mô tả" class="form-control" rows="2" name='post_description'>

                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Nội dung</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="3" id="summernote" name='ptd_text'>

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
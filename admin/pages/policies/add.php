<?php
    $open = "policies";
    require_once(__DIR__ . '/../../../autoload/autoload.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data =
            [
                "policies_title" => postInput('policies_title'),
                "policies_description" => postInput('policies_description'),
                "policies_content" => postInput('policies_content')
            ];

        $error = [];
        if (postInput('policies_title') == '') 
        {
            $error['policies_title'] = "Mời bạn nhập đầy đủ tiêu đề chính sách";
        }

        if (empty($error)) 
        {
            $id_insert = $db->insert("policies", $data);
            if ($id_insert > 0) 
            {
                $_SESSION['success'] = " Thêm mới thành công ";
                redirectAdmin($open);
            } 
            else 
            {
                $_SESSION['error'] = " Thêm mới thất bại ";
            }
        }
    }
?>

<?php
    require_once ( __DIR__ . '/../../layout/header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm mới chính sách</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="./index.php">Danh sách chính sách</a></li>
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
                    <form class="form-horizontal" action="" method="POST">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Tên chính sách</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Tên chính sách" name='policies_title'>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Mô tả</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Mô tả" name='policies_description'>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-lable">Nội dung</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="3" id="summernote" name='policies_content'>
                                    
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
    require_once ( __DIR__ . '/../../layout/footer.php');
?>
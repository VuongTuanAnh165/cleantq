<?php /*session_destroy();*/
    $open = "video_clip";
    require_once(__DIR__ . '/../../../autoload/autoload.php');

    $id = intval(getInput('id'));
    $sql="SELECT * FROM video_clip WhERE video_clip_id=$id";
    $video_clip = $db->fetchcheck($sql);

    if(empty($video_clip))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin($open);
    }
    else
    {
        $sql1="DELETE FROM video_clip WHERE video_clip_id=$id";
        $id_delete = $db->delete($sql1);
        if($id_delete > 0)
        {
            $_SESSION['success'] = " Xóa thành công ";
            redirectAdmin($open);
        }
        else
        {
            $_SESSION['error'] = " Không có dữ liệu ";
        }
    }
?>
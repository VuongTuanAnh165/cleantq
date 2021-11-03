<?php 
    $open="video_clip";
    require_once ( __DIR__ . '/../../../autoload/autoload.php');
     
    $id = intval(getInput('id'));
    $sql="SELECT * FROM video_clip WhERE video_clip_id=$id";
    $video_clip = $db->fetchcheck($sql);
    if(empty($video_clip))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin($open);
    }
    
    $video_clip_active = $video_clip['video_clip_active'] == 1 ? 0 : 1;

    $update = $db->update('video_clip',array("video_clip_active" => $video_clip_active), array("video_clip_id" => $id));
    if($update > 0)
    {
        $_SESSION['success'] = " Cập nhật thành công ";
        redirectAdmin($open);
    }
    else
    {
        $_SESSION['error'] = " Dữ liệu không thay đổi ";
        redirectAdmin($open);
    }    

?>
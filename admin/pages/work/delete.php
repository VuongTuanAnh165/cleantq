<?php /*session_destroy();*/
    $open = "work";
    require_once(__DIR__ . '/../../../autoload/autoload.php');

    $id = intval(getInput('id'));
    $sql="SELECT * FROM work WhERE work_id=$id";
    $work = $db->fetchcheck($sql);

    if(empty($work))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin($open);
    }
    else
    {
        $sql1="DELETE FROM work WHERE work_id=$id";
        $id_delete = $db->delete($sql1);
        if($id_delete > 0 && unlink("../../../pages_img/".$open."/".$work['work_img']))
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
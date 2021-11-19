<?php 
    $open="work";
    require_once ( __DIR__ . '/../../../autoload/autoload.php');
     
    $id = intval(getInput('id'));
    $sql="SELECT * FROM work WhERE work_id=$id";
    $work = $db->fetchcheck($sql);
    if(empty($work))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin($open);
    }
    
    $work_active = $work['work_active'] == 1 ? 0 : 1;

    $update = $db->update('work',array("work_active" => $work_active), array("work_id" => $id));
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
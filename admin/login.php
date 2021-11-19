<?php
  require_once ( __DIR__ . '/../autoload/autoload.php'); 
  $sql = "SELECT *  FROM company";
  $company = $db->fetchcheck($sql);
?>

<?php
if (isset($_SESSION["username"])) {
  header("location:index.php");
}
if (isset($_POST["login"])) {
  if (empty($_POST["username"]) && empty($_POST["password"])) {
    echo '<script>alert("Tài khoản và mật khẩu là bắt buộc")</script>';
  } else {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $db->fetchcheck($query);
    if ($result > 0) {
      $_SESSION['username'] = $username;
      header("location:index.php");
    } else {
      echo '<script>alert("Tài khoản hoặc mật khẩu không  đúng")</script>';
    }
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Admin-TQService</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="<?php echo base_img('company').$company['company_logo'] ?>" rel="apple-touch-icon-precomposed">
  <link href="<?php echo base_img('company').$company['company_logo'] ?>" rel="apple-touch-icon-precomposed">
  <link href="<?php echo base_img('company').$company['company_logo'] ?>" rel="shortcut icon">
</head>

<body style="background-image: url(https://muare60s.vn/hinh-nen-powerpoint-mau-xanh-da-troi/imager_1_2141_700.jpg);">
  <br /><br />
  <div class="container">
    <p style="text-align: center; position: relative">
      <img src="./dist/img/kisspng-photography-lettering-art-welcome-png-available-in-different-size-5ab1826c41d727.6661119915215827002697.png" alt="welcome image">
    </p>
    <br />
    <div>
        <h1 style="text-align: center; color:#FF4500; font-weight:bold">ĐĂNG NHẬP</h1>
        <form method="post" style="margin: 3% 25%;">
          <label>Nhập tài khoản</label>
          <input type="text" name="username" class="form-control" placeholder="Tài khoản" style="box-shadow: 5px 5px 5px black;"/>
          <br />
          <label>Nhập mật khẩu</label>
          <input type="password" name="password" class="form-control" placeholder="Mật khẩu"  style="box-shadow: 5px 5px 5px black;" />
          <br />
          <input type="submit" name="login" value="Đăng nhập" class="btn btn-info"  style="box-shadow: 5px 5px 5px black;"/>
          <br />
        </form>
    </div>
  </div>
</body>

</html>
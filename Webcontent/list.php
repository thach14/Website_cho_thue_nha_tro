<?php
session_start();

require_once '../Dao/BaiDangDao.php';
require_once '../Dao/TienNghiDao.php';
require_once '../Dao/MoiTruongDao.php';


$baiDangDao = new BaiDangDao();
$listMoiNhat = $baiDangDao->topMoiNhat();
$listReNhat = $baiDangDao->topGiaReNhat();
$listTrongThang = $baiDangDao->tinTrongThang();
$listXemNhieuNhat = $baiDangDao->topXemNhieuNhat();

setlocale(LC_MONETARY, "vie");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Phòng trọ sinh viên</title>

  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/my-style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php include_once './header.php'; ?>
  <div class="container">
    <h4>Danh sách bài đăng</h4>
    <div class="card flex-row"><a href="update.php"><img class="card-img-left example-card-img-responsive" src="img/phong-tro/112.jpg" /></a>
      <div class="card-body">
        <a href="update.php">
          <h4 class="card-title h5 h4-sm">Tiêu đề</h4>
        </a>
        <h5 class="card-title h6 h5-sm">Thời gian đăng</h5>
        <p class="card-text">Mô tả</p>
        <h4 class="card-title h5 h4-sm" style="color: green;">Đã duyệt</h4>
      </div>
    </div>
    <div class="card flex-row"><a href="update.php"><img class="card-img-left example-card-img-responsive" src="img/phong-tro/112.jpg" /></a>
      <div class="card-body">
        <a href="update.php">
          <h4 class="card-title h5 h4-sm">Tiêu đề</h4>
        </a>
        <h5 class="card-title h6 h5-sm">Thời gian đăng</h5>
        <p class="card-text">Mô tả</p>
        <h4 class="card-title h5 h4-sm" style="color: green;">Đã duyệt</h4>
      </div>
    </div>
    <div class="card flex-row"><a href="update.php"><img class="card-img-left example-card-img-responsive" src="img/phong-tro/112.jpg" /></a>
      <div class="card-body">
        <a href="update.php">
          <h4 class="card-title h5 h4-sm">Tiêu đề</h4>
        </a>
        <h5 class="card-title h6 h5-sm">Thời gian đăng</h5>
        <p class="card-text">Mô tả</p>
        <h4 class="card-title h5 h4-sm" style="color: green;">Đã duyệt</h4>
      </div>
    </div>

  </div>


  <?php include_once './footer.php'; ?>

  <!-- ##### All Javascript Script ##### -->
  <!-- jQuery-2.2.4 js -->
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <!-- Popper js -->
  <script src="js/bootstrap/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <!-- All Plugins js -->
  <script src="js/plugins/plugins.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
  <!-- My js 
        <script src="js/my-script.js"></script>-->
</body>

</html>
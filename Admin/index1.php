<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
    <style>
    .main {
        display: flex;
    }

    .main-right {
        width: 80%;
        padding: 30px;
    }

    .main-left {
        width: 20%;
        background-color: blueviolet;
    }
    </style>
</head>

<body>
    <div class="main">
        <div class="main-left">
            <ul> Quản lý nhà trọ
                <li> Quản lý tài khoản
                    <ul>
                        <li><a href="index.php?action=taikhoankhach">Tài khoản khách hàng</a></li>
                        <li><a href="index.php?action=taikhoanchu">Tài khoản chủ trọ</a></li>
                    </ul>
                </li>
                <li>Quản lý môi trường
                    <ul>
                        <li><a href="index.php?action=danhsachmoitruong">Danh sách môi trường</a></li>
                        <li><a href="index.php?action=themmoitruong">Thêm mới</a></li>
                    </ul>
                </li>
                <li>Quản lý tiện nghi
                    <ul>
                        <li><a href="index.php?action=danhsachtiennghi">Danh sách tiện nghi</a></li>
                        <li><a href="index.php?action=themtiennghi">Thêm mới</a></li>
                    </ul>
                </li>
                <li>Quản lý địa chỉ
                    <ul>
                        <li><a href="index.php?action=danhsachkhuvuc">Quản lý khu vực</a></li>
                        <li><a href="index.php?action=danhsachquanhuyen">Quản lý quận huyện</a></li>

                    </ul>
                </li>
                <li>Quản lý bài đăng
                    <ul>
                        <li><a href="index.php?action=danhsachbaidang">Danh sách bài đăng</a></li>

                    </ul>
                </li>

            </ul>
        </div>
        <div class="main-right">
            <?php
    if (isset($_GET['action'])){
        switch ($_GET['action']){
            case "danhsachtiennghi":
                require_once 'DanhSachTienNghi.php';
                break;
            case "themtiennghi":
                require_once 'ThemTienNghi.php';
                break;
            case "suatiennghi":
                require_once 'SuaTienNghi.php';
                break;
            case "xoatiennghi":
                require_once 'models/XoaTienNghi.php';
                break;
                
            case "danhsachmoitruong":
                require_once 'DanhSachMoiTruong.php';
                break;
            case "themmoitruong":
                require_once 'ThemMoiTruong.php';
                break;
            case "suamoitruong":
                require_once 'SuaMoiTruong.php';
                break;
            case "xoamoitruong":
                require_once 'models/XoaMoiTruong.php';
                break;

            case "danhsachkhuvuc":
                require_once 'DanhSachKhuVuc.php';
                break;
            case "themkhuvuc":
                require_once 'ThemKhuVuc.php';
                break;
            case "suakhuvuc":
                require_once 'SuaKhuVuc.php';
                break;
            case "xoakhuvuc":
                require_once 'models/XoaKhuVuc.php';
                break;

            case "danhsachquanhuyen":
                require_once 'DanhSachQuanHuyen.php';
                break;
            case "themquanhuyen":
                require_once 'ThemQuanHuyen.php';
                break;
            case "suaquanhuyen":
                require_once 'SuaQuanHuyen.php';
                break;
            case "xoaquanhuyen":
                require_once 'models/XoaQuanHuyen.php';
                break;

            case "taikhoankhach":
                require_once 'DanhSachTKKhach.php';
                break;
            case "taikhoanchu":
                require_once 'DanhSachTKChu.php';
                break;


            case "danhsachbaidang":
                require_once 'DanhSachBaiDang.php';
                break;
        }
    }
    
    ?>
        </div>
    </div>




</body>

</html>
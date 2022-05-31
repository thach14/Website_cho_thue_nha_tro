<?php 
if (isset($_GET['username']) && isset($_GET['password'])){
    $connect = mysqli_connect('localhost', 'root', '', 'phongtrosinhvien');
    mysqli_set_charset($connect, 'utf8');
    $sql = "select * from taikhoan where MaLoaiTaiKhoan = 3";
    $result = mysqli_query($connect, $sql);
    $check = FALSE;
    while ($row = mysqli_fetch_array($result)) 
    {
        if ($_GET['username'] == $row['TenTaiKhoan'] && $_GET['password'] == $row['MatKhau']){
            $check = TRUE;
            break;
        }
    }
    if ($check==FALSE)
    {header('location: ../login.php');}
    
    else {header('location: ../index.php?action=danhsachmoitruong');}
}
?>
<?php 
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $connect = mysqli_connect('localhost', 'root', '', 'phongtrosinhvien');
    mysqli_set_charset($connect, 'utf8');
    $sql = "DELETE from moitruong where MaMoiTruong = $id;";
    $result = mysqli_query($connect, $sql);
    header('location: ../admin/index.php?action=danhsachmoitruong');
}
?>
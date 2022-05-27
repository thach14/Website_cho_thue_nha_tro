<?php 
if (isset($_GET['tenKhuVuc'])){
    $ten = $_GET['tenKhuVuc'];
    $connect = mysqli_connect('localhost', 'root', '', 'phongtrosinhvien');
    mysqli_set_charset($connect, 'utf8');
    $sql = "insert into khuvuc (TenKhuVuc) values ('$ten')";
    $result = mysqli_query($connect, $sql);
    header('location: ../index.php?action=danhsachkhuvuc');
}
?>
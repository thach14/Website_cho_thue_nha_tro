<?php
$id = $_GET['id'];
?>


<h1> Sửa khu vực</h1>
<form action="models/SuaKhuVuc.php">
<input name="maKV" type="text" class="form-control" value="<?php echo $id;?>" aria-describedby="basic-addon2" readonly>
<input name="tenKhuVuc" type="text" class="form-control" placeholder="Nhập tên khu vực" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-success" type="submit">Submit</button>
</div>
</form>
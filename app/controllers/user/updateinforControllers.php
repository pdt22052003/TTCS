<?php
if(isset($_POST['btn-save'])){
    updateInfor($_SESSION['user']['id_nguoidung'],$_POST['hoVaTen'],$_POST['tenTaiKhoan'],$_POST['email'],$_POST['soDienThoai'],$_POST['gioiTinh'],$_POST['namSinh'],$_POST['linkFaceBook'],$_POST['maThanhPho1'],$_POST['truongHoc'],$_SESSION['user']['email']);
    $_SESSION['user']=getUserById($_SESSION['user']['id_nguoidung']);
    echo'<script>alert("Cập nhật thông tin thành công");</script>';
}
$getAllGioiTinh=getAllGioiTinh();
$getAllThanhPho=getAllThanhPho();
include_once("app/views/user/updateinfor.views.php");
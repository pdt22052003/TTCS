<?php
if(isset($_POST['btn-regis'])){
    dangKy($_POST['hoVaTen'],$_POST['tenTaiKhoan'],$_POST['matKhau'],$_POST['email'],$_POST['soDienThoai'],$_POST['gioiTinh'],$_POST['namSinh'],$_POST['linkFaceBook'],$_POST['maThanhPho1'],$_POST['truongHoc']);
}
$getAllThanhPho=getAllThanhPho();
$getAllGioiTinh=getAllGioiTinh();
include_once("app/views/user/regis.views.php");

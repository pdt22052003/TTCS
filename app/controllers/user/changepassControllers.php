<?php
if(isset($_POST['btn-save-pass'])){
    if($_POST['matKhaumoi']==$_POST['matKhau1']){
        updatePass($_POST['matKhaumoi'],$_SESSION['user']['id_nguoidung']);
        echo'<script>alert("Đổi mật khẩu thành công!");</script>';
    }else{
        echo'<script>alert("Đổi mật khẩu thất bại!");</script>';
    }
}
include_once("app/views/user/changepass.views.php");
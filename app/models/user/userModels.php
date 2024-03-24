<?php
function dangKy($hoVaTen,$tenTaiKhoan,$matKhau,$email,$soDienThoai,$gioiTinh,$namSinh,$linkFaceBook,$maThanhPho1,$truongHoc){
    $sql="SELECT * FROM nguoidung WHERE email like '$email'";
    $result=pdo_query($sql);
    $ngay_moi = date("Y-m-d", strtotime($namSinh));
    if(count($result)==0){
        $sql="INSERT INTO nguoidung(hoVaTen,tenTaiKhoan,matKhau,email,soDienThoai,gioiTinh,namSinh,linkFaceBook,maThanhPho1,truongHoc) VALUES('$hoVaTen','$tenTaiKhoan','$matKhau','$email','$soDienThoai',$gioiTinh,'$namSinh','$linkFaceBook',$maThanhPho1,'$truongHoc')";
        return pdo_execute($sql);
    }
}
function dangNhap($matKhau,$email){
    $sql="SELECT * FROM nguoidung WHERE email like '$email' AND matKhau like '$matKhau' AND xoa_nguoidung = 0 ";
    return pdo_query_one($sql);
}
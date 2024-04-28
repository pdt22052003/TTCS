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
function getUserById($id_nguoidung){
    $sql="SELECT * FROM nguoidung WHERE id_nguoidung=$id_nguoidung AND xoa_nguoidung = 0 ";
    return pdo_query_one($sql);
}
function updateInfor($id_nguoidung, $hoVaTen,$tenTaiKhoan,$email,$soDienThoai, $gioiTinh, $namSinh, $linkFaceBook, $maThanhPho1, $truongHoc,$email1){
    $sql="SELECT * FROM nguoidung WHERE email like '$email' ";
    $result = pdo_query(($sql));
    if(count($result)==0 || $email1 ==$email){
        $ngay_moi = date("Y-m-d", strtotime($namSinh));
        $sql="UPDATE nguoidung SET  hoVaTen='$hoVaTen',tenTaiKhoan='$tenTaiKhoan',email='$email',soDienThoai='$soDienThoai',gioiTinh=$gioiTinh,namSinh='$ngay_moi',linkFaceBook='$linkFaceBook',maThanhPho1=$maThanhPho1,truongHoc='$truongHoc' WHERE id_nguoidung=$id_nguoidung";
        return pdo_execute($sql);
    }
}
function updatePass($matKhauCu, $matkhaumoi,$id_nguoidung){
    
    $sql="UPDATE nguoidung SET  matKhau='$matkhaumoi' WHERE id_nguoidung=$id_nguoidung";
    return pdo_execute($sql);
}
function getDiemThiUserByDeThi($id,$id_nguoidung){
    $sql="SELECT * FROM diemthi INNER JOIN nguoidung ON diemthi.maNguoiDung=nguoidung.id_nguoidung WHERE xoa_diemthi=0 AND maDeThi1=$id AND nguoidung.id_nguoidung=$id_nguoidung  ORDER BY id_diemthi ASC";
    return pdo_query($sql);
}
function getBXH($id){
    $sql="SELECT diemthi.thoiGianLam, nguoidung.tenTaiKhoan,diemthi.soDiem, min(diemthi.id_diemthi)
    FROM diemthi
    INNER JOIN nguoidung ON diemthi.maNguoiDung = nguoidung.id_nguoidung
    INNER JOIN (
        SELECT maNguoiDung, min(id_diemthi) as MaxDiem
        FROM diemthi
        WHERE xoa_diemthi = 0 AND maDeThi1 = $id
        GROUP BY maNguoiDung
    ) AS min_diem ON diemthi.maNguoiDung = min_diem.maNguoiDung AND diemthi.id_diemthi = min_diem.MaxDiem
    WHERE diemthi.xoa_diemthi = 0 AND diemthi.maDeThi1 = $id
    GROUP BY diemthi.maNguoiDung
    ORDER BY diemthi.soDiem DESC
    LIMIT 10;
    ";
    return pdo_query($sql);
}
function addDiemThi($maNguoiDung, $maDeThi1, $soDiem, $thoiGianLam){
    $sql="INSERT INTO diemthi(maNguoiDung, maDeThi1, soDiem, thoiGianLam) VALUES ($maNguoiDung, $maDeThi1, $soDiem, $thoiGianLam)";
    return pdo_execute($sql);
}

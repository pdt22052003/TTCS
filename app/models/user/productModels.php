<?php
function getAllThanhPho(){
    $sql="SELECT * FROM thanhpho WHERE xoa_thanhpho = 0 ";
    return pdo_query($sql);
}
function getAllGioiTinh(){
    $sql="SELECT * FROM gioitinh WHERE xoa_gioitinh = 0 ";
    return pdo_query($sql);
}
function getAllMonHoc(){
    $sql="SELECT * FROM monhoc WHERE xoa_monhoc = 0 ";
    return pdo_query($sql);
}
function getAllKyThi(){
    $sql="SELECT * FROM kythi WHERE xoa_kythi = 0 ";
    return pdo_query($sql);
}
function getAllDeThi(){
    $sql="SELECT * FROM dethi WHERE xoa_dethi = 0 ";
    return pdo_query($sql);
}
function getDeThiByName($search){
    $sql="SELECT * FROM dethi WHERE xoa_dethi = 0 AND tenDeThi like '%$search%' ";
    return pdo_query($sql);
}


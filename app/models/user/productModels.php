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
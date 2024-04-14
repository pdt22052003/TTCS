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
function getDeThiByFilter($tenMon,$maThanhPho,$tenKyThi){
    $sql="SELECT * FROM dethi WHERE xoa_dethi = 0";
    if(count($tenMon)>0){
        $i=0;
        foreach ($tenMon as $key => $value ) {
            if($i==0){
                $sql .=' AND maMonHoc= '.$value.' ';
            }else{
                $sql .=' OR maMonHoc= '.$value.' ';
            }
            $i++;
        }
    }
    if($maThanhPho !==''){
            $sql .=' AND maThanhPho = '.$maThanhPho.' ';
    }
    if(count($tenKyThi)>0){
        $i=0;
        foreach ($tenKyThi as $key => $value ) {
            if($i==0){
                $sql .=' AND maKyThi= '.$value.' ';
            }else{
                $sql .=' OR maKyThi= '.$value.' ';
            }
            $i++;
        }
    }
    return pdo_query($sql);
}
function getDeThiByMon($maMonHoc){
    $sql="SELECT * FROM dethi WHERE xoa_dethi = 0 AND maMonHoc =$maMonHoc ";
    return pdo_query($sql);
}
function getDeThiById($id){
    $sql="SELECT * FROM dethi WHERE xoa_dethi = 0 AND id_dethi = $id";
    return pdo_query_one($sql);
}

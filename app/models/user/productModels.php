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
function getSoCauDeThiById($id){
    $sql="SELECT COUNT(maDeThi) AS 'soCau' FROM cauhoi WHERE xoa_cauhoi = 0 AND maDeThi = $id";
    return pdo_query_one($sql);
}
function getCauHoiByDeThi($maDeThi){
    $sql="SELECT * FROM cauhoi INNER JOIN dapan ON cauhoi.maDapAn=dapan.id_dapan WHERE cauhoi.xoa_cauhoi=0 AND dapan.xoa_dapan=0 AND maDeThi = $maDeThi ORDER BY cauhoi.cauSo ASC  ";
    return pdo_query($sql);
}
function getTop5DeMon($maMonHoc){
    $sql="SELECT * FROM dethi WHERE xoa_dethi = 0 AND maMonHoc = $maMonHoc ORDER BY ngayTaiDe DESC LIMIT 5  ";
    return pdo_query($sql);
}

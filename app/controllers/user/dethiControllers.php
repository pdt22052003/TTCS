<?php

if(isset($_POST['btn-search'])){
    $search = $_POST['search'];
    $title = "Những đề thi liên quan đến $search";
    $getAllDeThi = getDeThiByName($_POST['search']);
    if(!is_array($getAllDeThi)){
        exit();
    }
}else if(isset($_POST['btn-filter'])){
    $title="Những đề thi có liên quan tới bộ lọc";
    if(!isset($_POST['tenMon'])){
        $_POST['tenMon']=[];
    }
    if($_POST['maThanhPho']=='All'){
        $_POST['maThanhPho']='';
    }
    if(!isset($_POST['tenKyThi'])){
        $_POST['tenKyThi']=[];
    }
    $getAllDeThi=getDeThiByFilter($_POST['tenMon'],$_POST['maThanhPho'],$_POST['tenKyThi']);
}else if(isset($_GET['monhoc'])){
    $getAllDeThi=getDeThiByMon($_GET['monhoc']);
    $title="Những đề thi có liên quan tới tìm kiếm";
}
else{
    $title = "Tất cả đề thi";
    $getAllDeThi = getAllDeThi();
}
$getAllMonHoc=getAllMonHoc();
$getAllKyThi=getAllKyThi();
$getAllThanhPho=getAllThanhPho();
include_once("app/views/user/dethi.views.php");

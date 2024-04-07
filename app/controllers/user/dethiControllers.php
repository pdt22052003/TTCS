<?php
if(isset($_POST['btn-search'])){
    $search = $_POST['search'];
    $title = "Những đề thi liên quan đến $search";
    $getAllDeThi = getDeThiByName($_POST['search']);
    if(!is_array($getAllDeThi)){
        exit();
    }
}
else{
    $title = "Tất cả đề thi";
    $getAllDeThi = getAllDeThi();
}
$getAllMonHoc=getAllMonHoc();
$getAllKyThi=getAllKyThi();
$getAllThanhPho=getAllThanhPho();
include_once("app/views/user/dethi.views.php");

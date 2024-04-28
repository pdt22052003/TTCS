<?php
if(!isset($_SESSION['user']) || !is_array($_SESSION['user'])){
    header('Location: index.php?type=login&login=0');
}
if(isset($_POST['done'])){
    $totalPoint=0;
    $totalQues=0;
    $getCauHoiByDeThi=getCauHoiByDeThi($_POST['maDeThi']);
    for ($i=1; $i <= count($getCauHoiByDeThi); $i++) { 
        $pointEachQuestion=10/count($getCauHoiByDeThi);
        if($_POST['question'.$i.'']==$getCauHoiByDeThi[$i-1]['maDapAn']){
            $totalQues++;
        }
    }
    $totalPoint=$totalQues*$pointEachQuestion;
    addDiemThi($_SESSION['user']['id_nguoidung'], $_POST['maDeThi'], $totalPoint, $_POST['thoiGianLamBai']);
    
}
if(isset($_GET['id'])){
    $getDeThiById=getDeThiById($_GET['id']);
    $getSoCauDeThiById=getSoCauDeThiById($_GET['id']);
    $getCauHoiByDeThi=getCauHoiByDeThi($_GET['id']);
    $getDiemThiUserByDeThi=getDiemThiUserByDeThi($_GET['id'],$_SESSION['user']['id_nguoidung']);
    $getBXH=getBXH($_GET['id']); 
    
}
$getUserById=getUserById($_SESSION['user']['id_nguoidung']);
include_once("app/views/user/cate.views.php");
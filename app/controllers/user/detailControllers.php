<?php
if (!isset($_SESSION['user']) || !is_array($_SESSION['user'])) {
    header('Location: index.php?type=login&login=0');
}
if (isset($_GET['id'])) {
    $getCauHoiByDeThi = getCauHoiByDeThi($_GET['id']);
    $getDeThiById = getDeThiById($_GET['id']);
}

$getDeThiById = getDeThiById($_GET['id']);
if (isset($_GET['finish'])) {
    echo '<script>alert("Bạn cần hoàn thành bài thi này trước khi làm bài khác")</script>';
}
include_once ("app/views/user/detail.views.php");
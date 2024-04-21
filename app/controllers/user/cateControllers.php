<?php
$getDeThiById=getDeThiById($_GET['id']);
$getUserById=getUserById($_SESSION['user']['id_nguoidung']);
$getSoCauDeThiById=getSoCauDeThiById($_GET['id']);
include_once("app/views/user/cate.views.php");
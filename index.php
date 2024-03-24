<?php
session_start();
include("app/models/pdo.php");
include("app/models/user/productModels.php");
include("app/models/user/userModels.php");
include_once("app/controllers/user/headerControllers.php");
if(isset($_GET['type'])){
    switch ($_GET['type']){
        case 'home':
            include_once("app/controllers/user/indexControllers.php");
            break;
        case 'login':
            include_once("app/controllers/user/loginControllers.php");
            break;
        case 'regis':
            include_once("app/controllers/user/regisControllers.php");
            break; 
        default:
            include_once("app/controllers/user/indexControllers.php");
            break;
    }
    include_once("app/controllers/user/footerControllers.php");
}

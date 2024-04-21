<?php
session_start();
include("app/models/pdo.php");
include("app/models/user/productModels.php");
include("app/models/user/userModels.php");


if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
    if($_SESSION['user']['vaiTro']>1){
        include_once("app/controllers/admin/headerControllers.php");
        
    }else{
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
                case 'updateinfor':
                    include_once("app/controllers/user/updateinforControllers.php");
                    break;
                case 'changepass':
                    include_once("app/controllers/user/changepassControllers.php");
                    break;
                case 'dethi' :
                    include_once("app/controllers/user/dethiControllers.php");
                    break; 
                case 'cate':
                    include_once('app/controllers/user/cateControllers.php');
                    break;
                case 'detail':
                    include_once("app/controllers/user/detailControllers.php");
                    break;
                default:
                    include_once("app/controllers/user/indexControllers.php");
                    break;
            }
            
        }else{
            include_once("app/controllers/user/headerControllers.php");
            include_once("app/controllers/user/indexControllers.php");
        }
        include_once("app/controllers/user/footerControllers.php");
    }

}else{
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
            case 'dethi' :
                include_once("app/controllers/user/dethiControllers.php");
                break; 
            default:
                include_once("app/controllers/user/indexControllers.php");
                break;
        }

    }else{
        include_once("app/controllers/user/headerControllers.php");
        include_once("app/controllers/user/indexControllers.php");
    }
    include_once("app/controllers/user/footerControllers.php");
}

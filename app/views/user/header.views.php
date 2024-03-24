<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="public/css/header.css">

<div id = "container" >
    <nav class="navbar " style="background-color: #155E94">
        <div class="row w-100 d-flex justify-content-between">
            <div class="col-md-3 d-flex justify-content-center">
                <img src="public/image/1.png" alt="">
            </div>
            <div class="col-md-3 d-flex justify-content-between align-items-center">
                <a class="text-light text-decoration-none" href="index.php?type=home">Trang chủ</a>
                <a class="text-light text-decoration-none" href="index.php?type=dethi&trang=1">Kho đề thi</a>
                <a class="text-light text-decoration-none" href="">Kho tài liệu</a>
            </div>
            <div class="col-md-3 d-flex justify-content-center">  
                <?php
                    if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
                        echo'
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" style="background-color: #155E94;color:white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                '.$_SESSION['user']['tenTaiKhoan'].'
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="index.php?type=updateinfor">Cập nhật thông tin</a></li>
                                <li><a class="dropdown-item" href="index.php?type=changepass">Đổi mật khẩu</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-light"><a class="text-decoration-none text-dark" href="index.php?logout=1">Đăng xuất</a></button>
                        ';
                    }else{
                        echo'
                        <button type="button" class="btn " style="background-color: #155E94"><a class="text-decoration-none text-light" href="index.php?type=regis">Đăng ký</a></button>
                        <button type="button" class="btn btn-light"><a class="text-decoration-none text-dark" href="index.php?type=login">Đăng nhập</a></button>
                        ';
                    }
                    
                ?>     
            
            </div>
        </div>
    </nav>
</div>

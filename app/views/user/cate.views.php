<div class="d-flex justify-content-center" style="background-color: whitesmoke;padding-bottom:150px;">
    <div class="w-75 ">
        <!-- tiêu đề -->
        <div class="row">
            <nav class="navbar navbar-light  w-100 rounded-3 mt-5" style="background-color: white;">
                <div class="container-fluid d-flex justify-content-between">
                    <a class="navbar-brand " href="#">
                        Đề thi
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                        </svg>
                        <strong style="color: #155E94">
                            <?php echo $getDeThiById['tenDeThi']; ?>
                        </strong>
                    </a>
                </div>
            </nav>
        </div>

        <!-- phần thông tin đề thi và lịch sử làm bài -->
        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-7 d-flex    " style="flex-direction:column;row-gap:10px">
                <div class="row p-1 rounded-3" style="background-color: white;">
                    <h4 style="color: #155E94"><?php echo $getDeThiById['tenDeThi']; ?></h4>
                    <h5>Tổng số câu: <?php echo $getSoCauDeThiById['soCau']; ?></h5>
                    <h6>Thời gian làm bài: <?php echo $getDeThiById['thoiGianLamBai'] / 60; ?> phút </h6>
                    <?php
                        if($getDeThiById['code']!=null){
                            if(isset($_POST['code'])){
                                if($_POST['code'] == $getDeThiById['code']) {
                                    echo '
                                        <div class="d-flex "  style="justify-content:right">
                                    ';
                                    if ($getUserById['active'] == $getDeThiById['id_dethi'] || $getUserById['active'] == 0) {
                                        echo '
                                        <a href="index.php?type=detail&id=' . $getDeThiById['id_dethi'] . '" class="btn btn-success w-25">
                                            Vào phòng thi
                                        </a>';
                                    }else {
                                        echo '
                                            <a href="index.php?type=detail&id=' . $getUserById['active'] . '&finish=1" class="btn btn-success w-25">
                                                Vào phòng thi
                                            </a>';
                                }
                                }else{
                                    echo '
                                        <div class="d-flex justify-content-between" >
                                        <form class="w-100" action="" method="POST">
                                            <div class="d-flex w-100 justify-content-between">
                                                <label class="" style="width:25%" for=""><h5 style="color: red">Mã phòng thi</h5></label>
                                                <input type="text" id="" name="code" style="width:50%" class="form-control" placeholder="sai code" />
                                                <button class="btn btn-danger " type="submit" style="width:20%">Xác nhận</button>
                                            </div>
                                        </form>
                                    ';
                                }
                            }else {
                                echo '
                                    <div class="d-flex justify-content-between" >
                                    <form class="w-100" action="" method="POST">
                                        <div class="d-flex w-100 justify-content-between">
                                            <label class="" style="width:25%" for=""><h5 style="color: red">Mã phòng thi</h5></label>
                                            <input type="text" id="" name="code" style="width:50%" class="form-control" />
                                            <button class="btn btn-danger " type="submit" style="width:20%">Xác nhận</button>
                                        </div>
                                    </form>
                                ';
                            }
                        }else{
                            echo '<div class="d-flex "  style="justify-content:right">';
                            echo '
                                    <a href="index.php?type=detail&id=' . $getDeThiById['id_dethi'] . '" class="btn btn-success w-25">
                                        Vào phòng thi
                                    </a>';

                        }
                    ?>
                </div>
            </div>
            <div class="row rounded-3" style="background-color: white;">
                <h5 style="color: #155E94">Lịch sử làm bài</h5>
                <?php
                    if (count($getDiemThiUserByDeThi) > 0) {
                        echo '
                            <table class="table table-bordered table-striped">
                            <thead style="background-color:#155E94;color:white">
                                <tr>
                                <th scope="col">Lần</th>
                                <th scope="col">Ngày làm</th>
                                <th scope="col">Thời gian làm</th>
                                <th scope="col">Điểm</th>
                                </tr>
                            </thead>
                            <tbody >
                        ';
                        $i = 1;
                        foreach ($getDiemThiUserByDeThi as $key) {
                            $ngayLam = date("d-m-Y s:i:H", strtotime($key['ngayLam']));
                            $seconds = $key['thoiGianLam'];
                            $minutes = floor($seconds / 60);
                            $remainingSeconds = $seconds % 60;
                            echo '
                                <tr>
                                <th scope="row">' . $i++ . '</th>
                                <td>' . $ngayLam . '</td>
                                <td>' . $minutes . ' phút ' . $remainingSeconds . ' giây</td>
                                <td>' . $key['soDiem'] . ' điểm</td>
                            </tr>
                                ';
                        }
                        echo '
                            </tbody>
                            </table>
                        ';
                    } else {
                        echo '<h6>Chưa có lần nào</h6>';
                    }
                ?>
            </div>
        </div>
        <!-- Phần bảng xếp hạng -->
        <div class="col-4 rounded-3" style="background-color: white;">
            <h5 style="color: #155E94">Bảng xếp hạng top 10</h5>
            <?php
                if (count($getBXH) > 0) {
                    echo '
                        <table class="table table-bordered">
                        <thead style="background-color:#155E94;color:white">
                            <tr>
                                <th scope="col">Hạng</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Điểm</th>
                            </tr>
                        </thead>
                        <tbody>
                    ';
                    $i = 1;
                    foreach ($getBXH as $key) {
                        if ($i == 1) {
                            $color = "#FFD700";
                        } elseif ($i == 2) {
                            $color = "#C0C0C0";
                        } elseif ($i == 3) {
                            $color = "#B87333";
                        } else {
                            $color = "white";
                        }
                        $seconds = $key['thoiGianLam'];
                        $minutes = floor($seconds / 60);
                        $remainingSeconds = $seconds % 60;
                        echo '
                            <tr style="background-color:' . $color . '">
                                <th scope="row">' . $i++ . '</th>
                                <td>' . $key['tenTaiKhoan'] . '</td>
                                <td>' . $minutes . ' phút ' . $remainingSeconds . ' giây</td>
                                <td>' . $key['soDiem'] . ' điểm</td>
                            </tr>
                        ';
                    }
                    $j = 1;
                    foreach ($getAllBXH as $key) {
                        $seconds = $key['thoiGianLam'];
                        $minutes = floor($seconds / 60);
                        $remainingSeconds = $seconds % 60;
                        if ($key['id_nguoidung'] == $_SESSION['user']['id_nguoidung'] && $j > 10) {
                            echo '
                                <tr>
                                <td colspan="4">...</td>
                                </tr>';
                            echo '
                            <tr style="background-color:white">
                            <th scope="row">' . $j . '</th>
                            <td>' . $key['tenTaiKhoan'] . '-(Bạn)</td>
                            <td>' . $minutes . ' phút ' . $remainingSeconds . ' giây</td>
                            <td>' . $key['soDiem'] . ' điểm</td>
                            </tr>
                            ';
                        }
                        $j++;
                    }
                    echo '
                        </tbody>
                        </table>
                    ';
                } else {
                    echo '<h6>Chưa có ai làm</h6>';
                }
            ?>
        </div>
    </div>
                            </div>
</div>

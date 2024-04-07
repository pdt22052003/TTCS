<div class="d-flex align-items-center" style="background-color: whitesmoke;padding-bottom:150px; flex-direction:column;" id="container3">
    <nav class="navbar navbar-light  w-75 rounded-3 mt-5" style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">Đề thi</a>
        </div>
    </nav>

    <div class="row mt-5 w-75 d-flex justify-content-between">
        <div class="col-3">
            <div class="card rounded-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">BỘ LỌC</h5>
                    <form action="index.php?type=dethi&trang=1" method="POST">
                        <div class="input-group ">
                            <input type="text" class="form-control " placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" name="search" />
                            <button type="submit" class="btn btn-outline-primary " name="btn-search"
                                data-mdb-ripple-init>SEARCH</button>
                        </div>
                    </form>
                </div>
                <form action="index.php?type=dethi&trang=1" method="POST">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Môn học
                            <?php
                            foreach ($getAllMonHoc as $key) {
                                echo '
                                    <div class="form-check">
                                        <input class="form-check-input" name="tenMon[]" type="checkbox" value="' . $key['id_monhoc'] . '" id="" />
                                        <label class="form-check-label" for="">' . $key['tenMon'] . '</label>
                                    </div>
                                ';
                            }
                            ?>
                        </li>
                        <li class="list-group-item">Thành phố
                            <select id="" class="form-control" required name="maThanhPho">
                                <option value="All">Tất cả</option>
                                <?php
                                    foreach ($getAllThanhPho as $key) {
                                        echo '
                                            <option value="' . $key['id_thanhpho'] . '">' . $key['tenThanhPho'] . '</option>
                                        ';
                                    }
                                ?>
                            </select>
                        </li>
                        <li class="list-group-item">Phân loại
                            <?php
                                foreach ($getAllKyThi as $key) {
                                    echo '
                                        <div class="form-check">
                                            <input class="form-check-input" name="tenKyThi[]" type="checkbox" value="' . $key['id_kythi'] . '" id="" />
                                            <label class="form-check-label" for="">' . $key['tenKyThi'] . '</label>
                                        </div>
                                    ';
                                }
                            ?>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link"><button type="reset" class="btn btn-danger">Đặt lại</button></a>
                        <a href="#" class="card-link"><button type="submit" name="btn-filter" class="btn btn-primary">Xác nhận lọc</button></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-8">

            <?php
                echo $title;
                $j = 1;
                foreach ($getAllDeThi as $key) {
                    if ($j >= (($_GET['trang'] - 1) * 10 + 1) && $j <= (($_GET['trang'] - 1) * 10 + 10)) {
                        echo '
                            <nav class="navbar navbar-light  rounded-3" style="background-color: white;">
                                <div class="container-fluid">
                                    <a class="navbar-brand " href="#">' . $j . '.' . $key['tenDeThi'] . '</a>
                                    <a href="#">Xem</a>
                                </div>
                            </nav>
                        </br>
                        ';
                    }
                    $j++;
                }
                echo '<nav class="d-flex justify-content-center" aria-label="Page navigation example"> <ul class="pagination">';
                    for ($i = 1; $i <= ceil(count($getAllDeThi) / 10); $i++) {
                        if ($i == $_GET['trang']) {
                            echo '<li class="page-item "><a class="page-link text-danger" href="index.php?type=dethi&trang=' . $i . '">' . $i . '</a></li>';
                        } else {
                            echo '<li class="page-item"><a class="page-link" href="index.php?type=dethi&trang=' . $i . '">' . $i . '</a></li>';
                        }
                    }
                    echo ' </ul> </nav>';
            ?>
        </div>
    </div>
</div>
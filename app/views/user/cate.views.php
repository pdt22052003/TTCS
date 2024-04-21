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
            </div>
        </div>
        <!-- Phần bảng xếp hạng -->
        <div class="col-4 rounded-3" style="background-color: white;">
            <h5 style="color: #155E94">Bảng xếp hạng top 10</h5>
        </div>


    </div>
                            </div>
</div>

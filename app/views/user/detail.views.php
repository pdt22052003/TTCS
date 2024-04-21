
<div class="d-flex justify-content-center" style="background-color: whitesmoke;padding-bottom:150px;">
    <div class="w-75 ">
        <div class="row">
            <nav class="navbar navbar-light  w-100 rounded-3 mt-5" style="background-color: white;">
                <div class="container-fluid d-flex justify-content-between">
                    <a class="navbar-brand " href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                        </svg>Đề thi
                    </a>
                    <h5 style="color:red;">Vui lòng không rời hay load lại trang khi chưa nộp bài</h5>
                    <h1 id="countdown" style="color:red;"></h1>
                </div>
            </nav>
        </div>
        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-7 d-flex justify-content-center align-items-center p-5 rounded-3 " style="background-color: white;">
                <embed src="<?php echo $getDeThiById['anhDeThi']; ?>" type="application/pdf" width="100%" height="1000px" />
            </div>
            <div class="col-4" style="height:1000px; overflow: auto;">
                <form id="myForm" action="index.php?type=cate&id=<?php echo $_GET['id']; ?>" method="POST">
                    
                </form>
                
            </div>
        </div>
    </div>
</div>

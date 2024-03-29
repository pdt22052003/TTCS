<link rel="stylesheet" href="public/css/index.css">
<div class=" grid-background" id="container2 " style="position:relative;height: 800px;padding-top:150px;background-color: #155E94">
    <img src="public/image/2.png" alt="" style=" position:absolute; left:390px;top:100px">
    <img src="public/image/3.png" alt="" style=" position:absolute; left:240px;top:60px">
    <img src="public/image/4.png" alt="" style=" position:absolute; right:390px; top:100px">
    <img src="public/image/5.png" alt="" style=" position:absolute; right:240px; top:80px">
    <div class="text-light d-flex justify-content-center" id="index-title">
        <h1>Tìm kiếm đề thi</h1>
    </div>
    <form action="index.php?type=dethi&trang=1" method="POST">
        <div class="mt-5 d-flex justify-content-center " id="search">
            <div class="input-group w-50">
                <input type="text" class="form-control " placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" name="search" />
                <button type="submit" class="btn btn-outline-light " name="btn-search"
                    data-mdb-ripple-init>SEARCH</button>
            </div>
        </div>
    </form>
    <div class="mt-5" id="subject">
        <ul class="d-flex justify-content-center" style="list-style-type:none;">
            <?php
                foreach ($getAllMonHoc as $key) {
                    echo '
                    <li class="col-1">
                        <a class="d-grid text-decoration-none justify-content-center text-white" href="index.php?type=dethi&monhoc=' . $key['id_monhoc'] . '&trang=1">
                            <div class=" rounded-3  bg-light "><img src="' . $key['anhMonHoc'] . '" alt="" width="100" height="100"></div><span class="d-flex justify-content-center">Đề ' . $key['tenMon'] . '</span>
                        </a>
                    </li>
                    ';
                }
            ?>
        </ul>
    </div>
</div>

<div class="bg-light d-flex align-items-center" style="flex-direction:column;padding-bottom:150px; min-height: 500px;">
    <div class="d-flex justify-content-center mt-5" id="dethi-title">
    </div>
</div>
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
            <div class="col-7 d-flex justify-content-center align-items-center p-5 rounded-3 "
                style="background-color: white;">
                <embed src="<?php echo $getDeThiById['anhDeThi']; ?>" type="application/pdf" width="100%"
                    height="1000px" />
            </div>
            <div class="col-4" style="height:1000px; overflow: auto;">
                <form id="myForm" action="index.php?type=cate&id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="row mb-3 rounded-3 " style="background-color: white;">
                        <?php
                        foreach ($getCauHoiByDeThi as $key) {
                            echo '
                                <div class="col-3">
                                    <label for="question' . $key['cauSo'] . '" class="form-label">Câu ' . $key['cauSo'] . ':</label>
                                </div>
                                <div class="col-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="question' . $key['cauSo'] . '" id="answerA1" value="1">
                                        <label class="form-check-label" for="answerA1">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="question' . $key['cauSo'] . '" id="answerB1" value="2">
                                        <label class="form-check-label" for="answerB1">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="question' . $key['cauSo'] . '" id="answerC1" value="3">
                                        <label class="form-check-label" for="answerC1">C</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="question' . $key['cauSo'] . '" id="answerD1" value="4">
                                        <label class="form-check-label" for="answerD1">D</label>
                                    </div>
                                    <input class="form-check-input" type="radio" name="question'.$key['cauSo'].'" id="answerE" value="5" hidden checked>
                                </div>
                            ';
                        }
                        ?>

                    </div>
                    <input type="text" value="done" name="done" hidden>
                    <input type="text" value="<?php echo $_GET['id']; ?>" name="maDeThi" hidden>
                    <input type="text" value="90" name="thoiGianLamBai" id="thoiGianLamBai" hidden>
                    <button type="submit" name="submit-btn" class="btn btn-primary" onclick="abc()">Nộp bài</button>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
  var inputElement = document.getElementById('thoiGianLamBai');
  var form = document.getElementById("myForm");
  var countDownDate = sessionStorage.getItem('countDownDate');
  if (!countDownDate) {
    countDownDate = new Date().getTime() + <?php echo $getDeThiById['thoiGianLamBai']; ?> * 1000;
    sessionStorage.setItem('countDownDate', countDownDate);
  } else {
    countDownDate = parseInt(countDownDate);
  }
  function startCountdown() {
    var x = setInterval(function () {
      var now = new Date().getTime();

      var distance = countDownDate - now;

      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("countdown").innerHTML = 'Time: ' + hours + "h "
        + minutes + "m " + seconds + "s ";

      if (distance < 0) {
        clearInterval(x);
        sessionStorage.removeItem('countDownDate');
        form.submit();
      }
    }, 1000);
  }
  startCountdown();

  function abc() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    inputElement.value = <?php echo $getDeThiById['thoiGianLamBai']; ?> - Math.floor(distance / 1000);
    sessionStorage.removeItem('countDownDate');
  }
</script>
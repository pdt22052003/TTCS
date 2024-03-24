<link rel="stylesheet" href="public/css/login.css">
<div id="container4">
  <div id="title-container4">
    <h1>ĐĂNG KÝ</h1>
  </div>
<form action="" method="post">
  <div class="form-outline mb-4">
    <label class="form-label" for="">Họ và tên</label>
    <input type="text" id="" class="form-control" required name="hoVaTen" />
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="">Tên tài khoản</label>
    <input type="text" id="" class="form-control" required name="tenTaiKhoan" />
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="">Mật khẩu</label>
    <input type="password" id="" class="form-control" required name="matKhau" />
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="">Email</label>
    <input type="email" id="" class="form-control" required name="email" />
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="">Số điện thoại</label>
    <input type="text" id="" class="form-control" required name="soDienThoai" />
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="">Giới tính</label>
    <select  id="" class="form-control" name="gioiTinh" required >
    <?php
        foreach ($getAllGioiTinh as $key) {
          if($_SESSION['user']['gioitinh']==$key['id_gioitinh']){
            echo'<option value="'.$key['id_gioitinh'].'" selected>'.$key['tenGioiTinh'].'</option>';
          }else{
            echo'<option value="'.$key['id_gioitinh'].'">'.$key['tenGioiTinh'].'</option>';
          }
        }
      ?>
    </select>
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="">Năm sinh</label>
    <input type="date" id="" class="form-control" required name="namSinh" />
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="">Link FaceBook</label>
    <input type="text" id="" class="form-control" required name="linkFaceBook" />
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="">Tỉnh thành</label>
    <select  id="" class="form-control" required name="maThanhPho1">
      <?php
        foreach ($getAllThanhPho as $key ) {
          echo'
          <option value="'.$key['id_thanhpho'].'">'.$key['tenThanhPho'].'</option>
          ';
        }
      ?>
    </select>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="">Trường học</label>
    <input type="text" id="" class="form-control" required name="truongHoc" />
  </div>


  <!-- Submit button -->
  <button type="submit" name="btn-regis" class="btn btn-primary btn-block mb-4">Đăng Ký</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Bạn đã có tài khoản? <a href="index.php?type=login">Đăng Nhập</a></p>
    <!-- <p>hoặc đăng ký với:</p> -->
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
</div>

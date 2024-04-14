<link rel="stylesheet" href="public/css/login.css">
<div id="container4">
  <div id="title-container4">
    <h1>Cập nhật thông tin</h1>
  </div>
  <form action="" method="post">
    <div class="form-outline mb-4">
      <label class="form-label" for="">Họ và tên</label>
      <input value="<?php echo $_SESSION['user']['hoVaTen']; ?>" type="text" id="" class="form-control" required
        name="hoVaTen" />
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="">Tên tài khoản</label>
      <input value="<?php echo $_SESSION['user']['tenTaiKhoan']; ?>" type="text" id="" class="form-control" required
        name="tenTaiKhoan" />
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="">Email</label>
      <input value="<?php echo $_SESSION['user']['email']; ?>" type="email" id="" class="form-control" required
        name="email" />
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="">Số điện thoại</label>
      <input value="<?php echo $_SESSION['user']['soDienThoai']; ?>" type="text" id="" class="form-control" required
        name="soDienThoai" />
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="">Giới tính</label>
      <select id="" class="form-control" name="gioiTinh" required>
        <?php
        foreach ($getAllGioiTinh as $key) {
          if ($_SESSION['user']['gioitinh'] == $key['id_gioitinh']) {
            echo '<option value="' . $key['id_gioitinh'] . '" selected>' . $key['tenGioiTinh'] . '</option>';
          } else {
            echo '<option value="' . $key['id_gioitinh'] . '">' . $key['tenGioiTinh'] . '</option>';
          }
        }
        ?>

      </select>
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="">Năm sinh</label>
      <input value="<?php echo $_SESSION['user']['namSinh']; ?>" type="date" id="" class="form-control" required
        name="namSinh" />
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="">Link FaceBook</label>
      <input value="<?php echo $_SESSION['user']['linkFaceBook']; ?>" type="text" id="" class="form-control" required
        name="linkFaceBook" />
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="">Tỉnh thành</label>
      <select id="" class="form-control" required name="maThanhPho1">
        <?php
        foreach ($getAllThanhPho as $key) {
          if ($_SESSION['user']['maThanhPho1'] == $key['id_thanhpho']) {
            echo '
          <option value="' . $key['id_thanhpho'] . '" selected>' . $key['tenThanhPho'] . '</option>
          ';
          } else {
            echo '
          <option value="' . $key['id_thanhpho'] . '">' . $key['tenThanhPho'] . '</option>
          ';
          }

        }
        ?>
      </select>
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="">Trường học</label>
      <input value="<?php echo $_SESSION['user']['truongHoc']; ?>" type="text" id="" class="form-control" required
        name="truongHoc" />
    </div>
    <button type="submit" name="btn-save" class="btn btn-primary btn-block mb-4" href="index.php?type=home">Lưu</button>
  </form>
</div>
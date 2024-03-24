<link rel="stylesheet" href="public/css/login.css">
<div id="container4">
  <div id="title-container4">
    <h1>ĐĂNG NHẬP</h1>
  </div>
<form action="" method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="">Email</label>
    <input type="email" id="" name="email" class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="">Mật khẩu</label>
    <input type="password" id="" name="matKhau" class="form-control" />
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Lưu mật khẩu </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Quên mật khẩu?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" name="btn-login" class="btn btn-primary btn-block mb-4">Đăng nhập</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Chưa phải thành viên? <a href="index.php?type=regis">Đăng ký</a></p>
    <p>hoặc đăng nhập với:</p>
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

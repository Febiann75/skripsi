<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url('assets/') ?>index2.html"><b>Admin</b>Ojol</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <?= $this->session->flashdata('pesan') ?>
      <p class="login-box-msg">Login untuk memulai Aplikasi</p>

      <form action="<?= base_url('auth') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="text-center mt-3">
        <p class="mb-1">
          <a href="forgot-password.html">Saya lupa password</a>
        </p>
        <p class="mb-0">
          <a href="<?= base_url('auth/registrasi') ?>" class="text-center">Register untuk akun baru</a>
        </p>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
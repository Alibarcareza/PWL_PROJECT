
<!DOCTYPE html>
<html lang="en">
<head>
  @include('AuthPage.head')
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Register</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      @if ($errors->any())
            <div class="alert alert-danger">
              <strong>Whoops!</strong> Inputan Kamu Ada Yang Salah<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
          </div>
      @endif
      <p class="login-box-msg">Masukkan Data Diri Anda</p>

      <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="nomor" class="form-control" name="nomor" placeholder="Masukkan nomor HP">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="alamat" placeholder="Alamat">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Masukkan Ulang password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <label for="">Upload Foto KTP</label>
          <div>
            <input type="file" id="image" class="form-control @error('fotoKTP') is-invalid @enderror" name="fotoKTP" accept="image/*">
            @error('fotoKTP')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ route('login') }}" class="text-center">Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

@include('AuthPage.script')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <script src="{{asset('js/register.js')}}" defer></script>
    <title>Daftar | UKM Connect</title>
</head>
<body>

<!----------------------- Main Container -------------------------->

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

    <div class="row border rounded-5 p-3 bg-white shadow box-area">

        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2>Buat Akun Anda</h2>
                    <p>Daftar sekarang dan lengkapi data diri Anda untuk bergabung dengan UKM Connect.</p>
                </div>
                <form method="POST" action="{{route('register')}}">
                    @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Nama Lengkap">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6" placeholder="Kata Sandi">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" id="confirm-password" class="form-control form-control-lg bg-light fs-6" placeholder="Konfirmasi Kata Sandi">
                </div>
                <div class="input-group mb-3">
                    <button
                        class="btn btn-lg w-100 fs-6"
                        style="background-color: #588157; border-color: #588157; color: #fff;"
                        onmouseover="this.style.backgroundColor='#496C49'"
                        onmouseout="this.style.backgroundColor='#588157'"
                        >
                        Daftar
                    </button>
                </div>
                </form>
                <div class="row">
                    <small>Sudah punya akun? <a href="{{route('login')}}">Masuk</a></small>
                </div>
            </div>
        </div>
        <!--------------------------- Left Box ----------------------------->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #588157;">
            <div class="featured-image mb-3">
                <img src="images/3.png" class="img-fluid" style="width: 400px;">
            </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">UKM Connect</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Connecting Passion, Uniting Potential.</small>
        </div>

        <!--------------------------- Right Box ----------------------------->

    </div>
</div>

</body>
</html>

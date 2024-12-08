<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Quicksand:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dash.css')}}">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <title>Daftar UKM</title>
</head>
<body>
<div class="content">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="logout">
            <button onclick="return confirm('Apakah Anda yakin ingin keluar?')" class="logout-btn">Logout</button>
        </div>
    </form>
    <div class="start">
        <div class="logo">
            <span class="ukm">UKM</span><span class="connect">Connect</span>
        </div>
        <div class="about">
            <div class="text">Connecting Passion, Uniting Potential</div>
            <div class="desc">Akses informasi UKM Universitas Sebelas April untuk mendukung minat dan bakat mahasiswa.</div>
        </div>
    </div>
    <div class="form">
        <div class="intro">
            <div class="title">Registrasi UKM</div>
            <div class="login">
                Informasi lebih lengkap terkait open recruitment
                <a href="https://linktr.ee/profileinstagramukm" class="login-link" target="_blank" rel="noopener noreferrer">Klik disini</a>
            </div>

        </div>

        <!-- Step 1 -->
        <form method="POST" action="{{route('mahasiswa.store')}}">
            @csrf
            <div class="step step-1">
                <div class="form-input">
                    <div class="title">Nama</div>
                    <input type="text" name="nama" placeholder="Masukkan nama anda">
                </div>
                <div class="form-input">
                    <div class="title">NPM</div>
                    <input type="number" name="npm" id="npm" placeholder="Masukkan NPM anda" minlength="8" required>
                    <span id="npm-error" class="error-message" style="display: none; color: red;">NPM harus terdiri dari minimal 8 karakter</span>
                </div>

                <div class="form-input">
                    <div class="title">Fakultas</div>
                    <input type="text" name="fakultas" placeholder="Masukkan fakultas anda">
                </div>
                <div class="form-input">
                    <div class="title">Prodi</div>
                    <input type="text" name="prodi" placeholder="Masukkan prodi anda">
                </div>
                <a class="btn next-btn" href="#">Selanjutnya</a>
            </div>

            <!-- Step 2 -->
            <div class="step step-2 hidden">
                <div class="form-input">
                    <div class="title">Tingkat/Semester</div>
                    <input type="text" name="tingkat" placeholder="Masukkan tingkat/semester anda">
                </div>
                <div class="looking-for">
                    <div class="text">Jenis Kelamin</div>
                    <div class="wrapper">
                        <input type="radio" name="jenis_kelamin" value="laki-laki" id="option-1" checked>
                        <input type="radio" name="jenis_kelamin" value="perempuan" id="option-2">
                        <label for="option-1" class="option option-1">
                            <div class="dot"></div>
                            <span>Laki-laki</span>
                        </label>
                        <label for="option-2" class="option option-2" id="opt2">
                            <div class="dot"></div>
                            <span>Perempuan</span>
                        </label>
                    </div>
                </div>
                <div class="form-input">
                    <div class="title">Email</div>
                    <input type="email" name="email" placeholder="Masukkan email anda">
                    <div class="error-message" style="color: red; font-size: 0.9em; display: none;">Harap masukkan alamat email yang valid.</div>
                </div>
                <div class="form-input">
                    <div class="title">Nomor Telepon</div>
                    <input type="tel" name="phone" placeholder="Masukkan nomor telepon anda">
                </div>
                <a class="btn prev-btn" href="#">Sebelumnya</a>
                <a class="btn next-btn" href="#">Selanjutnya</a>
            </div>

            <!-- Step 3 -->
            <div class="step step-3 hidden">
                <div class="form-input">
                    <div class="title">Alamat</div>
                    <input type="text" name="alamat" placeholder="Masukkan alamat anda">
                </div>
                <div class="form-input">
                    <div class="title">Pilih UKM</div>
                    <select id="ukm" name="ukm" class="input-field dropdown-field">
                        <option value="" disabled selected>Pilih UKM yang diminati</option>
                        @foreach($ukm as $ukm)
                            <option value="{{$ukm->ukm}}">{{$ukm->ukm}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-input">
                    <div class="title">Alasan Masuk UKM Tersebut</div>
                    <input type="text" name="alasan" placeholder="Masukkan alasan anda">
                </div>

                <div class="form-input">
                    <div class="title">CV PDF (opsional)</div>
                    <input type="file" name="cv" accept=".pdf">
                </div>

                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/dash.js')}}"></script>
</body>
</html>

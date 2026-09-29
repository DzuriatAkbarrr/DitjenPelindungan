<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Siapkan akun · RuangKerja KP2MI</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
<style>*{box-sizing:border-box}
body{margin:0;
    min-height:100vh;
    background:radial-gradient(ellipse at 85% 15%,#e4eaff,transparent 36%),#f5f7fb;
    display:grid;
    place-items:center;
    padding:22px;
    color:#172440;
    font-family:'DM Sans',sans-serif}
.card{width:min(460px,100%);
    background:#fff;
    padding:30px;
    border:1px solid #edf0f5;
    border-radius:20px;
    box-shadow:0 20px 60px #1b2a4a12}
.brand{font:800 14px Manrope;
    color:#23345b;
    margin-bottom:28px}
.brand span{color:#536fe3}
.eyebrow{font-size:10px;
    color:#8491a7;
    letter-spacing:1.4px;
    font-weight:700}
.card h1{font:800 25px Manrope;
    letter-spacing:-.8px;
    margin:8px 0}
.intro{font-size:12px;
    color:#8692a6;
    line-height:1.6;
    margin-bottom:22px}
.field{display:grid;
    gap:7px;
    margin:14px 0}
.field label{font-size:11px;
    font-weight:700;
    color:#58667e}
.field input{height:44px;
    border:1px solid #e6eaf1;
    border-radius:10px;
    padding:0 12px;
    font:13px 'DM Sans';
    outline:0}
.field input:focus{border-color:#7489e8;
    box-shadow:0 0 0 3px #536fe31a}
.role{padding:12px;
    border-radius:10px;
    background:#eef1ff;
    color:#4d65ce;
    font-size:11px;
    font-weight:700;
    margin:17px 0}
.submit{height:46px;
    width:100%;
    border:0;
    border-radius:10px;
    color:#fff;
    background:#526fe0;
    font-weight:700;
    cursor:pointer}
.error{font-size:10px;
    color:#c9505d}
.back{display:block;
    text-align:center;
    margin-top:18px;
    font-size:11px;
    color:#526fe0;
    text-decoration:none}
</style>
</head>
<body>
<main class="card">
<div class="brand">
<span>✳</span> RuangKerja <span style="color:#a2adbd">KP2MI</span>
</div>
<div class="eyebrow">PENYIAPAN APLIKASI</div>
<h1>Buat akun pertama</h1>
<p class="intro">Akun pertama otomatis mendapat akses Kepegawaian. Setelah masuk, Anda dapat membuat akun Sesditjen dan akun Kepegawaian lain.</p>
<div class="role">✦ &nbsp; Peran akun pertama · Kepegawaian</div>
<form method="POST" action="{{ route('setup.store') }}">
@csrf<div class="field">
<label for="name">Nama lengkap</label>
<input id="name" name="name" value="{{ old('name') }}" required>
@error('name')<span class="error">{{ $message }}</span>
@enderror</div>
<div class="field">
<label for="email">Email</label>
<input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="nama@kp2mi.go.id" required>
@error('email')<span class="error">{{ $message }}</span>
@enderror</div>
<div class="field">
<label for="password">Kata sandi · minimal 8 karakter</label>
<input id="password" name="password" type="password" required>
@error('password')<span class="error">{{ $message }}</span>
@enderror</div>
<div class="field">
<label for="password_confirmation">Ulangi kata sandi</label>
<input id="password_confirmation" name="password_confirmation" type="password" required>
</div>
<button class="submit" type="submit">Buat akun dan masuk →</button>
</form>
<a class="back" href="{{ route('login') }}">Kembali ke halaman masuk</a>
</main>
</body>
</html>

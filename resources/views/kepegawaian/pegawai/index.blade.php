<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Data Pegawai · RuangKerja KP2MI</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
<style>
:root{--ink:#172440;
    --muted:#8491a7;
    --line:#edf0f5;
    --blue:#526fe0;
    --bg:#f5f7fb;
    --shadow:0 12px 40px #1b2a4a0d}
*{box-sizing:border-box}
body{margin:0;
    background:var(--bg);
    color:var(--ink);
    font:14px 'DM Sans',sans-serif}
button,input{font:inherit}
.topbar{height:70px;
    background:#ffffffdf;
    border-bottom:1px solid var(--line);
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 max(24px,calc((100vw - 1180px)/2));
    position:sticky;
    top:0;
    z-index:2;
    backdrop-filter:blur(12px)}
.brand{font:800 15px Manrope;
    text-decoration:none;
    color:#23345b;
    display:flex;
    align-items:center;
    gap:10px}
.brand i{font-style:normal;
    background:#526fe0;
    color:#fff;
    border-radius:11px;
    width:33px;
    height:33px;
    display:grid;
    place-items:center}
.actions{display:flex;
    align-items:center;
    gap:9px}
.badge{font-size:10px;
    font-weight:700;
    color:#4c65d2;
    background:#f2f4ff;
    border:1px solid #e6eaff;
    border-radius:9px;
    padding:8px 11px}
.logout{border:1px solid var(--line);
    background:#fff;
    color:#65728a;
    border-radius:9px;
    padding:8px 11px;
    font-size:11px;
    font-weight:700;
    cursor:pointer}
.wrap{max-width:1180px;
    margin:0 auto;
    padding:32px 23px 55px}
.back{font-size:11px;
    color:#71809a;
    text-decoration:none;
    font-weight:600}
.heading{display:flex;
    align-items:flex-end;
    justify-content:space-between;
    gap:16px;
    margin:14px 0 22px}
.eyebrow{color:#8b97ab;
    font-size:10px;
    font-weight:700;
    letter-spacing:1.5px;
    text-transform:uppercase;
    margin-bottom:7px}
.heading h1{font:800 28px Manrope;
    letter-spacing:-1px;
    margin:0}
.heading p{color:var(--muted);
    font-size:12px;
    margin:7px 0 0}
.cards{display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:14px;
    margin-bottom:17px}
.card,.panel{background:#fff;
    border:1px solid #eef0f5;
    border-radius:15px;
    box-shadow:var(--shadow)}
.card{padding:17px 19px}
.card span{font-size:11px;
    color:#7c899e;
    font-weight:600}
.card b{font:800 25px Manrope;
    display:block;
    margin:8px 0 2px}
.card small{font-size:10px;
    color:#9ba5b5}
.panel{padding:20px;
    margin-bottom:16px}
.panel-head{display:flex;
    align-items:center;
    justify-content:space-between;
    gap:10px}
.panel-head h2{font:700 14px Manrope;
    margin:0}
.panel-head p{font-size:10px;
    color:#98a3b2;
    margin:5px 0 0}
.flash{border-radius:10px;
    padding:11px 13px;
    font-size:11px;
    margin-bottom:14px}
.success{background:#e9f7ef;
    color:#328563}
.errors{background:#fff0f0;
    color:#bd5057}
.errors ul{margin:5px 0;
    padding-left:18px}
.button{border:0;
    background:linear-gradient(105deg,#5874e7,#425ed7);
    border-radius:9px;
    color:#fff;
    padding:10px 13px;
    font-size:10px;
    font-weight:700;
    cursor:pointer}
.subtle{border:1px solid var(--line);
    background:#fff;
    border-radius:9px;
    color:#71809a;
    padding:9px 12px;
    font-size:10px;
    font-weight:700;
    cursor:pointer}
details summary{cursor:pointer;
    list-style:none}
details summary::-webkit-details-marker{display:none}
.form-grid{display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:12px;
    margin-top:17px}
.field{display:grid;
    gap:6px}
.field.full{grid-column:1/-1}
.field label{font-size:10px;
    font-weight:700;
    color:#65728a}
.field input{height:39px;
    border:1px solid #e5e9f0;
    border-radius:9px;
    padding:0 10px;
    color:#46536b;
    font:11px 'DM Sans';
    outline:0}
.field input:focus{border-color:#8395e9;
    box-shadow:0 0 0 3px #536fe31a}
.form-actions{display:flex;
    justify-content:flex-end;
    margin-top:13px}
.table-wrap{overflow-x:auto}
.table{width:100%;
    border-collapse:collapse;
    min-width:690px}
.table th{text-align:left;
    color:#9aa5b5;
    text-transform:uppercase;
    letter-spacing:.6px;
    font-size:9px;
    padding:10px 8px;
    border-bottom:1px solid var(--line)}
.table td{padding:12px 8px;
    border-bottom:1px solid #f2f4f7;
    color:#65728a;
    font-size:10px;
    vertical-align:middle}
.table tr:last-child td{border-bottom:0}
.person{display:flex;
    gap:8px;
    align-items:center}
.avatar{width:29px;
    height:29px;
    border-radius:9px;
    background:#e8edff;
    color:#556fdb;
    display:grid;
    place-items:center;
    font-size:9px;
    font-weight:700}
.person strong{font-size:11px;
    color:#34415a}
.person small{display:block;
    font-size:9px;
    color:#9aa5b5;
    margin-top:3px}
.status{display:inline-block;
    border-radius:20px;
    padding:5px 8px;
    font-size:9px;
    font-weight:700}
.active{background:#e6f7ef;
    color:#31936b}
.inactive{background:#f1f2f5;
    color:#7f8999}
.row-actions{display:flex;
    gap:6px;
    align-items:center}
.action{border:0;
    border-radius:7px;
    padding:7px 9px;
    font-size:9px;
    font-weight:700;
    cursor:pointer}
.deactivate{background:#fff4e2;
    color:#bc812d}
.activate{background:#eaf7f0;
    color:#328563}
.delete{background:#fff0f0;
    color:#c75b63}
.empty{text-align:center;
    padding:35px 10px;
    color:#97a2b3;
    font-size:11px}
.empty b{display:block;
    color:#58667c;
    font:700 13px Manrope;
    margin-bottom:5px}
.search{border:1px solid var(--line);
    border-radius:9px;
    padding:8px 10px;
    width:180px;
    font-size:10px;
    color:#65728a;
    outline:0}

@media(max-width:760px){.topbar{height:62px;
    padding:0 14px}
.wrap{padding:24px 14px 40px}
.heading{align-items:flex-start;
    flex-direction:column}
.heading h1{font-size:24px}
.panel{padding:15px}
.form-grid{grid-template-columns:1fr 1fr}
.field.full{grid-column:1/-1}
.cards{gap:9px}
.card{padding:14px}
.search{width:125px}
}

@include('shared.sidebar-styles')
</style>
</head>
<body>
@include('shared.sidebar')<header class="topbar">
<button class="mobile-toggle" id="menu-toggle" aria-label="Buka menu">☰</button>
<a class="brand" href="{{ route('kepegawaian.dashboard') }}">
<i>✳</i> RuangKerja <span style="font:500 10px 'DM Sans';color:#a2adbd">KP2MI</span>
</a>
<div class="actions">
<span class="badge">KEPEGAWAIAN</span>
<form method="POST" action="{{ route('logout') }}">
@csrf<button class="logout" type="submit">Keluar</button>
</form>
</div>
</header>
<main class="wrap">
<div class="heading">
<div>
<div class="eyebrow">DIREKTORI SUMBER DAYA MANUSIA</div>
<h1>Data pegawai</h1>
<p>Kelola pegawai aktif dan rapikan direktori dengan menonaktifkan lalu menghapus data yang sudah tidak berlaku.</p>
</div>
</div>
@if(session('status'))<div class="flash success">{{ session('status') }}</div>
@endif
<div class="cards">
<article class="card">
<span>Pegawai aktif</span>
<b>{{ $activeCount }}</b>
<small>Terdaftar di direktori</small>
</article>
<article class="card">
<span>Pegawai nonaktif</span>
<b>{{ $inactiveCount }}</b>
<small>Dapat diaktifkan kembali atau dihapus</small>
</article>
</div>
<details class="panel" id="new-employee" @if($errors->any()) open @endif>
<summary class="panel-head">
<div>
<h2>Tambah pegawai</h2>
<p>Tambahkan pegawai ke direktori KP2MI.</p>
</div>
<span class="subtle">Buka formulir ï¼‹</span>
</summary>
<form method="POST" action="{{ route('kepegawaian.pegawai.store') }}">
@csrf
@if($errors->any())<div class="flash errors" style="margin-top:14px">
<b>Periksa kembali data:</b>
<ul>
@foreach($errors->all() as $error)<li>{{ $error }}</li>
@endforeach</ul>
</div>
@endif<div class="form-grid">
<div class="field">
<label for="name">Nama lengkap</label>
<input id="name" name="name" value="{{ old('name') }}" required>
</div>
<div class="field">
<label for="nip">NIP</label>
<input id="nip" name="nip" value="{{ old('nip') }}" required>
</div>
<div class="field">
<label for="unit">Unit kerja</label>
<input id="unit" name="unit" value="{{ old('unit') }}" required>
</div>
</div>
<div class="form-actions">
<button class="button" type="submit">Simpan pegawai</button>
</div>
</form>
</details>
<section class="panel">
<div class="panel-head">
<div>
<h2>Direktorat pegawai</h2>
<p>{{ $employees->count() }} data tersimpan di database</p>
</div>
<input class="search" id="search" placeholder="Cari nama, NIP, unit...">
</div>
@if($employees->isEmpty())<div class="empty">
<b>Direktorat masih kosong</b>Tambahkan data pegawai menggunakan formulir di atas.</div>
@else<div class="table-wrap">
<table class="table">
<thead>
<tr>
<th>Nama pegawai</th>
<th>NIP</th>
<th>Unit kerja</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($employees as $employee)<tr>
<td>
<div class="person">
<span class="avatar">{{ collect(explode(' ', $employee->name))->map(fn($part) => mb_substr($part, 0, 1))->take(2)->implode('') }}</span>
<strong>{{ $employee->name }}</strong>
</div>
</td>
<td>{{ $employee->nip }}</td>
<td>{{ $employee->unit }}</td>
<td>
<span class="status {{ $employee->status === 'Aktif' ? 'active' : 'inactive' }}">{{ $employee->status }}</span>
</td>
<td>
<div class="row-actions">
@if($employee->status === 'Aktif')<form method="POST" action="{{ route('kepegawaian.pegawai.status', $employee) }}">
@csrf @method('PATCH')<input type="hidden" name="status" value="Nonaktif">
<button class="action deactivate" type="submit">Nonaktifkan</button>
</form>
@else<form method="POST" action="{{ route('kepegawaian.pegawai.status', $employee) }}">
@csrf @method('PATCH')<input type="hidden" name="status" value="Aktif">
<button class="action activate" type="submit">Aktifkan</button>
</form>
<form method="POST" action="{{ route('kepegawaian.pegawai.destroy', $employee) }}" onsubmit="return confirm('Hapus permanen data pegawai ini?')">
@csrf @method('DELETE')<button class="action delete" type="submit">Hapus</button>
</form>
@endif</div>
</td>
</tr>
@endforeach</tbody>
</table>
</div>
@endif</section>
</main>
<script>document.getElementById('search').addEventListener('input',function(){const query=this.value.toLowerCase();document.querySelectorAll('.table tbody tr').forEach(row=>row.hidden=!row.textContent.toLowerCase().includes(query))});</script>
<script>document.getElementById("menu-toggle")?.addEventListener("click",()=>document.getElementById("sidebar")?.classList.toggle("open"));</script>
</body>
</html>

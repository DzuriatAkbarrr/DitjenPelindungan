<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Rekap Cuti · RuangKerja KP2MI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
button,input,select,textarea{font:inherit}
.shell{min-height:100vh}
.topbar{height:72px;
    background:#ffffffdf;
    border-bottom:1px solid var(--line);
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 max(26px,calc((100vw - 1240px)/2));
    position:sticky;
    top:0;
    z-index:2;
    backdrop-filter:blur(12px)}
.brand{font:800 15px Manrope;
    text-decoration:none;
    color:#23345b;
    display:flex;
    gap:10px;
    align-items:center}
.brand i{font-style:normal;
    background:#526fe0;
    color:white;
    border-radius:11px;
    width:33px;
    height:33px;
    display:grid;
    place-items:center}
.top-actions{display:flex;
    align-items:center;
    gap:10px}
.badge{font-size:10px;
    font-weight:700;
    color:#4c65d2;
    border:1px solid #e6eaff;
    background:#f2f4ff;
    padding:8px 11px;
    border-radius:9px}
.top-actions form{margin:0}
.logout{border:1px solid var(--line);
    background:#fff;
    color:#65728a;
    border-radius:9px;
    padding:8px 11px;
    font-size:11px;
    font-weight:700;
    cursor:pointer}
.wrap{max-width:1240px;
    margin:0 auto;
    padding:35px 25px 60px}
.back{font-size:11px;
    color:#71809a;
    text-decoration:none;
    font-weight:600}
.heading{display:flex;
    align-items:flex-end;
    justify-content:space-between;
    margin:14px 0 22px;
    gap:16px}
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
.button{border:0;
    background:linear-gradient(105deg,#5874e7,#425ed7);
    border-radius:10px;
    color:#fff;
    padding:11px 15px;
    font-size:11px;
    font-weight:700;
    box-shadow:0 7px 17px #526fe033;
    cursor:pointer}
.button:hover{transform:translateY(-1px)}
.cards{display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:14px;
    margin-bottom:18px}
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
    margin-top:8px}
.card small{font-size:10px;
    color:#a0aabb}
.panel{padding:20px;
    margin-bottom:16px}
.panel-head{display:flex;
    align-items:center;
    justify-content:space-between;
    gap:10px;
    margin-bottom:14px}
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
.form-grid{display:grid;
    grid-template-columns:repeat(3,minmax(0,1fr));
    gap:12px}
.field{display:grid;
    gap:6px}
.field.full{grid-column:1/-1}
.field label{font-size:10px;
    font-weight:700;
    color:#65728a}
.field input,.field select,.field textarea{border:1px solid #e5e9f0;
    border-radius:9px;
    background:#fff;
    padding:10px;
    color:#46536b;
    font:11px 'DM Sans';
    outline:none;
    width:100%}
.field input,.field select{height:39px}
.field textarea{resize:vertical;
    min-height:68px}
.field input:focus,.field select:focus,.field textarea:focus{border-color:#8395e9;
    box-shadow:0 0 0 3px #536fe31a}
.form-actions{display:flex;
    justify-content:flex-end;
    gap:8px;
    align-items:center;
    margin-top:13px}
.note{font-size:9px;
    color:#9aa5b5;
    margin-right:auto}
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
.table-wrap{overflow-x:auto}
.table{width:100%;
    border-collapse:collapse;
    min-width:760px}
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
.table strong{font-size:11px;
    color:#34415a}
.table small{display:block;
    color:#a1aaba;
    font-size:9px;
    margin-top:4px}
.type{display:inline-block;
    background:#eff2ff;
    color:#596fd1;
    border-radius:20px;
    padding:5px 8px;
    font-size:9px;
    font-weight:700}
.status{display:inline-block;
    background:#fff4e2;
    color:#c38425;
    border-radius:20px;
    padding:5px 8px;
    font-size:9px;
    font-weight:700}
.delete{border:0;
    background:#fff0f0;
    color:#c75b63;
    border-radius:8px;
    padding:7px 9px;
    font-size:9px;
    font-weight:700;
    cursor:pointer}
.empty{text-align:center;
    padding:38px 12px;
    color:#97a2b3;
    font-size:11px}
.empty b{display:block;
    color:#58667c;
    font:700 13px Manrope;
    margin-bottom:5px}
.person{display:flex;
    gap:8px;
    align-items:center}
.avatar{width:28px;
    height:28px;
    border-radius:9px;
    background:#e8edff;
    color:#556fdb;
    display:grid;
    place-items:center;
    font-size:9px;
    font-weight:700}

    @media(max-width:760px){.topbar{height:62px;
    padding:0 15px}
.wrap{padding:24px 14px 40px}
.heading{align-items:flex-start;
    flex-direction:column}
.heading h1{font-size:24px}
.cards{grid-template-columns:1fr 1fr}
.cards .card:last-child{grid-column:1/-1}
.panel{padding:15px}
.form-grid{grid-template-columns:1fr 1fr}
.field.full{grid-column:1/-1}
.form-actions{flex-wrap:wrap}
.note{width:100%;
    margin-bottom:4px}
.badge{font-size:9px}
.logout{font-size:10px;
    padding:8px}
}

    @include('shared.sidebar-styles')
</style>
</head>
<body>
@include('shared.sidebar')<div class="shell">
    <header class="topbar">
<button class="mobile-toggle" id="menu-toggle" aria-label="Buka menu">☰</button>
<a class="brand" href="{{ route('kepegawaian.dashboard') }}">
<i>✳</i> RuangKerja <span style="color:#a2adbd;font:500 10px 'DM Sans'">KP2MI</span>
</a>
<div class="top-actions">
<span class="badge">KEPEGAWAIAN</span>
<form method="POST" action="{{ route('logout') }}">
@csrf<button class="logout" type="submit">Keluar</button>
</form>
</div>
</header>
    <main class="wrap">
        <div class="heading">
<div>
<div class="eyebrow">ADMINISTRASI KEPEGAWAIAN</div>
<h1>Rekap cuti pegawai</h1>
<p>Catat dan kelola pengajuan cuti pegawai dalam satu tempat.</p>
</div>
<button class="button" type="button" onclick="document.getElementById('form-cuti').scrollIntoView({behavior:'smooth'});document.getElementById('form-cuti').open=true"> Tambah rekap cuti</button>
</div>
        @if(session('status'))<div class="flash success">{{ session('status') }}</div>
@endif
        <div class="cards">
<article class="card">
<span>Total rekap cuti</span>
<b>{{ $total }}</b>
<small>Semua pengajuan tercatat</small>
</article>
<article class="card">
<span>Menunggu persetujuan</span>
<b>{{ $pending }}</b>
<small>Perlu ditinjau Sesditjen</small>
</article>
<article class="card">
<span>Disetujui</span>
<b>{{ $approved }}</b>
<small>Pengajuan yang telah disetujui</small>
</article>
</div>
        <details class="panel" id="form-cuti" @if($errors->any()) open @endif>
<summary class="panel-head">
<div>
<h2>Tambah rekap cuti</h2>
<p>Lengkapi data pegawai, jenis, dan rentang cuti.</p>
</div>
<span class="subtle">Buka formulir</span>
</summary>
            <form method="POST" action="{{ route('kepegawaian.cuti.store') }}">
@csrf
                @if($errors->any())<div class="flash errors">
<b>Periksa kembali data yang diisi:</b>
<ul>
@foreach($errors->all() as $error)<li>{{ $error }}</li>
@endforeach</ul>
</div>
@endif
                <div class="form-grid">
<div class="field">
<label for="employee_name">Nama pegawai</label>
<input id="employee_name" name="employee_name" value="{{ old('employee_name') }}" required>
</div>
<div class="field">
<label for="employee_number">NIP <span style="font-weight:400;color:#99a4b4">(opsional)</span>
</label>
<input id="employee_number" name="employee_number" value="{{ old('employee_number') }}">
</div>
<div class="field">
<label for="unit">Unit kerja</label>
<input id="unit" name="unit" value="{{ old('unit') }}" required>
</div>
<div class="field">
<label for="leave_type">Jenis cuti</label>
<select id="leave_type" name="leave_type" required>
<option value="">Pilih jenis cuti</option>
@foreach(['Tahunan','Sakit','Melahirkan','Penting','Alasan lain'] as $type)<option value="{{ $type }}" @selected(old('leave_type') === $type)>{{ $type }}</option>
@endforeach</select>
</div>
<div class="field">
<label for="start_date">Tanggal mulai</label>
<input id="start_date" name="start_date" type="date" value="{{ old('start_date') }}" required>
</div>
<div class="field">
<label for="end_date">Tanggal selesai</label>
<input id="end_date" name="end_date" type="date" value="{{ old('end_date') }}" required>
</div>
<div class="field full">
<label for="reason">Keterangan / alasan</label>
<textarea id="reason" name="reason" required>{{ old('reason') }}</textarea>
</div>
</div>
                <div class="form-actions">
<span class="note">Jumlah hari dihitung berdasarkan hari kalender, termasuk tanggal mulai dan selesai.</span>
<button class="subtle" type="button" onclick="document.getElementById('form-cuti').open=false">Batal</button>
<button class="button" type="submit">Simpan rekap</button>
</div>
            </form>
        </details>
        <section class="panel">
<div class="panel-head">
<div>
<h2>Daftar pengajuan cuti</h2>
<p>{{ $total }} data · tersimpan di database</p>
</div>
</div>
            @if($records->isEmpty())<div class="empty">
<b>Belum ada rekap cuti</b>Tambahkan pengajuan pertama menggunakan formulir di atas.</div>
@else
            <div class="table-wrap">
<table class="table">
<thead>
<tr>
<th>Pegawai</th>
<th>Unit kerja</th>
<th>Jenis cuti</th>
<th>Periode</th>
<th>Durasi</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
                @foreach($records as $record)<tr>
<td>
<div class="person">
<span class="avatar">{{ collect(explode(' ', $record->employee_name))->map(fn($part) => mb_substr($part, 0, 1))->take(2)->implode('') }}</span>
<div>
<strong>{{ $record->employee_name }}</strong>
@if($record->employee_number)<small>{{ $record->employee_number }}</small>
@endif</div>
</div>
</td>
<td>{{ $record->unit }}</td>
<td>
<span class="type">{{ $record->leave_type }}</span>
</td>
<td>{{ $record->start_date->format('d/m/Y') }} – {{ $record->end_date->format('d/m/Y') }}</td>
<td>{{ $record->days }} hari</td>
<td>
<span class="status">{{ $record->status }}</span>
</td>
<td>
<form method="POST" action="{{ route('kepegawaian.cuti.destroy', $record) }}" onsubmit="return confirm('Hapus rekap cuti ini?')">
@csrf @method('DELETE')<button class="delete" type="submit">Hapus</button>
</form>
</td>
</tr>
@endforeach
            </tbody>
</table>
</div>
@endif
        </section>
    </main>
</div>
<script>document.getElementById("menu-toggle")?.addEventListener("click",()=>document.getElementById("sidebar")?.classList.toggle("open"));</script>
</body>
</html>

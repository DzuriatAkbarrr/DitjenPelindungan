<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Surat Perjalanan Dinas · Kepegawaian</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
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
button,input,textarea{font:inherit}
.topbar{height:70px;
    background:#ffffffdf;
    border-bottom:1px solid var(--line);
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 max(24px,calc((100vw - 1200px)/2));
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
.wrap{max-width:1200px;
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
    grid-template-columns:repeat(3,1fr);
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
.field input,.field textarea{border:1px solid #e5e9f0;
    border-radius:9px;
    background:#fff;
    padding:10px;
    color:#46536b;
    font:11px 'DM Sans';
    outline:none;
    width:100%}
.field input{height:39px}
.field textarea{resize:vertical;
    min-height:68px}
.field input:focus,.field textarea:focus{border-color:#8395e9;
    box-shadow:0 0 0 3px #536fe31a}
.form-actions{display:flex;
    justify-content:flex-end;
    gap:8px;
    align-items:center;
    margin-top:13px}
.table-wrap{overflow-x:auto}
.table{width:100%;
    border-collapse:collapse;
    min-width:870px}
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
    font-size:9px;
    color:#9aa5b5;
    margin-top:4px}
.status{display:inline-block;
    border-radius:20px;
    padding:5px 8px;
    font-size:9px;
    font-weight:700}
.waiting{background:#fff4e2;
    color:#c38425}
.approved{background:#e6f7ef;
    color:#31936b}
.rejected{background:#fff0f0;
    color:#c65e65}
.delete{border:0;
    border-radius:7px;
    padding:7px 9px;
    background:#fff0f0;
    color:#c75b63;
    font-size:9px;
    font-weight:700;
    cursor:pointer}
.empty{text-align:center;
    padding:36px 10px;
    color:#97a2b3;
    font-size:11px}
.empty b{display:block;
    color:#58667c;
    font:700 13px Manrope;
    margin-bottom:5px}
.tabs{display:flex;
    gap:7px}
.tab{border:1px solid var(--line);
    background:white;
    color:#738099;
    padding:8px 11px;
    border-radius:9px;
    text-decoration:none;
    font-size:10px;
    font-weight:700}
.tab.current{background:#eef1ff;
    color:#526fe0;
    border-color:#e4e9ff}

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
.tabs{width:100%}
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
<div class="eyebrow">PERJALANAN DINAS</div>
<h1>Surat perjalanan dinas</h1>
<p>Buat pengajuan surat perjalanan dinas dan pantau keputusan Sesditjen.</p>
</div>
</div>
@if(session('status'))<div class="flash success">{{ session('status') }}</div>
@endif
<div class="cards">
<article class="card">
<span>Menunggu keputusan</span>
<b>{{ $pendingCount }}</b>
<small>Belum ditinjau Sesditjen</small>
</article>
<article class="card">
<span>Disetujui</span>
<b>{{ $approvedCount }}</b>
<small>Pengajuan yang disetujui</small>
</article>
<article class="card">
<span>Ditolak</span>
<b>{{ $rejectedCount }}</b>
<small>Pengajuan yang ditolak</small>
</article>
</div>
<details class="panel" @if($errors->any()) open @endif>
<summary class="panel-head">
<div>
<h2>Buat pengajuan surat perjalanan dinas</h2>
<p>Surat akan masuk ke antrean Sesditjen setelah disimpan.</p>
</div>
<span class="subtle">Buka formulir</span>
</summary>
<form method="POST" action="{{ route('kepegawaian.surat-perjalanan-dinas.store') }}">
@csrf
@if($errors->any())<div class="flash errors" style="margin-top:14px">
<b>Periksa kembali data:</b>
<ul>
@foreach($errors->all() as $error)<li>{{ $error }}</li>
@endforeach</ul>
</div>
@endif
<div class="form-grid">
<div class="field full">
<label for="title">Nama kegiatan / tujuan tugas</label>
<input id="title" name="title" value="{{ old('title') }}" required>
</div>
<div class="field">
<label for="employee_name">Nama pegawai</label>
<input id="employee_name" name="employee_name" value="{{ old('employee_name') }}" required>
</div>
<div class="field">
<label for="employee_number">NIP (opsional)</label>
<input id="employee_number" name="employee_number" value="{{ old('employee_number') }}">
</div>
<div class="field">
<label for="unit">Unit kerja</label>
<input id="unit" name="unit" value="{{ old('unit') }}" required>
</div>
<div class="field">
<label for="destination">Kota tujuan</label>
<input id="destination" name="destination" value="{{ old('destination') }}" required>
</div>
<div class="field">
<label for="start_date">Tanggal berangkat</label>
<input id="start_date" name="start_date" type="date" value="{{ old('start_date') }}" required>
</div>
<div class="field">
<label for="end_date">Tanggal selesai</label>
<input id="end_date" name="end_date" type="date" value="{{ old('end_date') }}" required>
</div>
<div class="field full">
<label for="purpose">Maksud dan keterangan tugas</label>
<textarea id="purpose" name="purpose" required>{{ old('purpose') }}</textarea>
</div>
</div>
<div class="form-actions">
<button class="button" type="submit">Kirim untuk persetujuan</button>
</div>
</form>
</details>
<section class="panel">
<div class="panel-head">
<div>
<h2>Daftar surat perjalanan dinas</h2>
<p>{{ $letters->count() }} pengajuan tersimpan di database</p>
</div>
</div>
@if($letters->isEmpty())<div class="empty">
<b>Belum ada surat perjalanan dinas</b>Buat pengajuan pertama melalui formulir di atas.</div>
@else<div class="table-wrap">
<table class="table">
<thead>
<tr>
<th>Nomor / kegiatan</th>
<th>Pegawai</th>
<th>Tujuan & periode</th>
<th>Status</th>
<th>Catatan Sesditjen</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($letters as $letter)<tr>
<td>
<strong>{{ $letter->title }}</strong>
<small>{{ $letter->number }}</small>
</td>
<td>{{ $letter->employee_name }}<small>{{ $letter->unit }}@if($letter->employee_number) · {{ $letter->employee_number }}@endif</small>
</td>
<td>{{ $letter->destination }}<small>{{ $letter->start_date->format('d/m/Y') }} – {{ $letter->end_date->format('d/m/Y') }}</small>
</td>
<td>
<span class="status {{ $letter->status === 'Disetujui' ? 'approved' : ($letter->status === 'Ditolak' ? 'rejected' : 'waiting') }}">{{ $letter->status }}</span>
@if($letter->reviewed_at)<small>{{ $letter->reviewed_at->format('d/m/Y H:i') }}</small>
@endif</td>
<td>{{ $letter->decision_note ?: '—' }}</td>
<td>
@if($letter->status === 'Menunggu')<form method="POST" action="{{ route('kepegawaian.surat-perjalanan-dinas.destroy', $letter) }}" onsubmit="return confirm('Hapus pengajuan surat perjalanan dinas ini?')">
@csrf @method('DELETE')<button class="delete" type="submit">Hapus</button>
</form>
@else—@endif</td>
</tr>
@endforeach</tbody>
</table>
</div>
@endif</section>
</main>
<script>document.getElementById("menu-toggle")?.addEventListener("click",()=>document.getElementById("sidebar")?.classList.toggle("open"));</script>
</body>
</html>
